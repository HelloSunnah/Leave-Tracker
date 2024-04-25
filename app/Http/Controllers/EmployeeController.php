<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function employee_create()
    {
        return view('page.EmployeeCreate');
    }





    public function employee_create_post(Request $request)
    {

        $fileName = null;
        
        if ($request->hasFile('image'))

         {
            $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
            $request->file('image')->move(public_path('/uploads/image'), $fileName);
        } 

      
        Employee::create([

            'name' => $request->name,
            'image' => $fileName,
            'designation' => $request->designation,
            'age' => $request->age,
            'mobile' => $request->mobile,
            'par_address' => $request->par_address,
            'pre_address' => $request->pre_address,
            'email' => $request->email,
            'employee_id' => $request->employee_id,
            'salary' => $request->salary,
            'nid' => $request->nid,
            
        ]);
        toastr()->addSuccess('Employee Created.');

        return  back();
    }

    public function employee_list()
    {
        $employee = Employee::all();
        return view('page.EmployeeList', compact('employee'));
    }



    public function employee_edit($id)
    {
        $employee = Employee::find($id);


        return view('page.EmployeeEdit', compact('employee'));
    }
    public function employee_update(Request $request, $id)
    {
        $employee = Employee::find($id);

        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
            $request->file('image')->move(public_path('/uploads/image'), $fileName);
        } 
        $employee->update([

            'name' => $request->name,
            'designation' => $request->designation,
            'age' => $request->age,
            'par_address' => $request->par_address,
            'pre_address' => $request->pre_address,
            'email' => $request->email,
            'employee_id' => $request->employee_id,
            'salary' => $request->salary,
            'nid' => $request->nid,
            'image'=>$fileName,



        ]);
        toastr()->addSuccess('Employee Details Updated.');

        return back();
    }
    public function  employee_delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        toastr()->addSuccess('Opps Employee Deleted.');

        return back();
    }
    public function employee_view($id)
    {
        $employee = Employee::find($id);
        return view('page.EmployeeView', compact('employee'));
    }
}
