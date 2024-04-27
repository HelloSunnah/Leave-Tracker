<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\LeaveRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if ($action === 'approve') {
            $leave->status = 1;
            $leave->save();

            session()->flash('success', 'Leave request approved successfully!');

            return redirect()->route('leave.request.list');
        } elseif ($action === 'cancel') {
            $leave->status = 2;
            $leave->save();

            session()->flash('success', 'Leave request cancelled successfully!');

            return redirect()->route('leave.request.list');
        } else {
            return back()->withErrors(['action' => 'Invalid action provided.']);
        }
    }



    // for employee leave create function


    public function leave_request()
    {
        $leave = LeaveRequest::all();
        return view('Backend/Pages/Leave_Request/CreateRequest', compact('leave'));
    }

    public function employee_leave(Request $request)
    {
        $request->validate([

            'leave_type' => 'required',
            'start_date' => 'required',
        ]);
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $duration = (new DateTime($end_date))->diff(new DateTime($start_date))->days;


        LeaveRequest::create([
            'employee_id' => Auth::user()->id,
            'leave_type' => $request->leave_type,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'reason' => $request->reason,
            'duration' => $duration,

        ]);
        return back();
    }
    public function remove_request($id){
        $leave_request=LeaveRequest::find($id);
        $leave_request->delete();
        return back();

    }
}
