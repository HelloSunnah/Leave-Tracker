<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use App\Models\LeaveRequest;
use Illuminate\Support\Facades\Auth;

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
         $leave_request['total_request']=LeaveRequest::all()->count();
         $leave_request['pending_request']=LeaveRequest::where('status','0')->count();
         $leave_request['accepted_request']=LeaveRequest::where('status','1')->count();
         $leave_request['cancelled_request']=LeaveRequest::where('status','2')->count();
         return view('Backend.Dashboard',compact('leave_request'));
     }

  

}