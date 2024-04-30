<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Employee;
use App\Models\LeaveRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\LeaveStatusNotification;
use App\Mail\LeaveRequestNotification;
use Illuminate\Support\Facades\Validator;

class LeaveRequestController extends Controller
{
    //    for admin leave list
    public function leave_request_list()
    {
        $leave = LeaveRequest::all();
        return view('Backend/Pages/Leave_Request/RequestList', compact('leave'));
    }

    // for admin leave list update
    public function leave_update(Request $request, $id)
    {
        $leave = LeaveRequest::findOrFail($id);
        $action = $request->input('action');
        $employee = Employee::where('user_id', $leave->employee_id)->firstOrFail();

        if ($action === 'approve') {
            $leave->status = 1;
            $message = 'approved';
        } elseif ($action === 'cancel') {
            $leave->status = 2;
            $message = 'cancelled';
        } else {
            return back()->withErrors(['action' => 'Invalid action provided.']);
        }

        // Send email notification to the employee
        $employeeEmail = Employee::where('id', $leave->employee_id)->value('email');
        Mail::to($employeeEmail)
            ->send(new LeaveStatusNotification($leave, $message, $employee));

        $leave->save();

        session()->flash('success', 'Leave request ' . $message . ' successfully.');

        return redirect()->route('leave.request.list');
    }

    // for employee leave create function
    public function leave_request()
    {
        $leave = LeaveRequest::where('user_id', Auth::user()->id)->get();
        return view('Backend/Pages/Leave_Request/CreateRequest', compact('leave'));
    }

    public function employee_leave(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'leave_type' => 'required|string',
            'start_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        // Extract request data
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        // Calculate leave duration
        $duration = Carbon::parse($start_date)->diffInDays(Carbon::parse($end_date));

        // Retrieve the logged-in employee
        $employee = Employee::where('user_id', Auth::user()->id)->firstOrFail();

        // Create the leave request
        $leaveRequest = LeaveRequest::create([
            'employee_id' => $employee->id,
            'user_id' => Auth::user()->id,
            'leave_type' => $request->leave_type,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'reason' => $request->reason,
            'duration' => $duration,
        ]);

        // Send email notification to the employee
        $employeeEmail = $employee->email;
        Mail::to($employeeEmail)->queue(new LeaveRequestNotification($employee, $leaveRequest));
        toastr()->addSuccess('Leave request submitted successfully.');
        // Redirect back with success message
        return back()->with('success', 'Leave request submitted successfully.');
    }

    public function remove_request($id)
    {
        $leave_request = LeaveRequest::find($id);
        $leave_request->delete();
        toastr()->addSuccess('Request Removed...');

        return back();
    }
}
