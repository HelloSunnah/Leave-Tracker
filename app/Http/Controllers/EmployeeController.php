<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::all();
        return view('Backend.Pages.Employee.EmployeeList', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Pages.Employee.EmployeeCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:employees,email',
            'designation' => 'required|string|max:255',

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $fileName = null;

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->file('image')->getclientOriginalExtension();
            $request->file('image')->move(public_path('/uploads/image'), $fileName);
        }
        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->mobile,
            'password' => Hash::make('12345678'),
          

        ]);

        Employee::create([

            'name' => $request->name,
            'user_id' => $user->id,
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
       

        return to_route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('Backend.Pages.Employee.EmployeeView', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('Backend.Pages.Employee.EmployeeEdit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:employees,email,' . $id,
            // Add more validation rules as needed
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $employee = Employee::findOrFail($id);


        $imageName = $employee->image; // Keep existing image by default

        if ($request->hasFile('image')) {
            // Delete existing image if it exists
            if ($employee->image) {
                Storage::delete('/uploads/images/' . $employee->image);
            }

            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->file('image')->move(public_path('/uploads/image'), $imageName);
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
            'image' => $imageName,
        ]);

          
        return to_route('employees.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return back();
    }
}
