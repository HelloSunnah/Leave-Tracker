<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\Employee;
use App\Models\LeaveRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $leave_request['total_request'] = LeaveRequest::all()->count();
        $leave_request['pending_request'] = LeaveRequest::where('status', '0')->count();
        $leave_request['accepted_request'] = LeaveRequest::where('status', '1')->count();
        $leave_request['cancelled_request'] = LeaveRequest::where('status', '2')->count();
        return view('Backend.Dashboard', compact('leave_request'));
    }

    public function user_profile()
    {
        $user = Auth::user();
        if ($user->role == 0) {
            $user = Employee::find($user->id);
        }

        return view('Backend.Pages.UserProfile', compact('user'));
    }


    public function user_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        
        $user = User::find(Auth::user()->id);
        $user->update([

            'password' => Hash::make($request->password),

        ]);
        toastr()->addSuccess('Password Updated..');

        return back();
    }
    
}
