@extends('Backend.Master')
@section('content')
<div class="card">
  <div class="card-body">
    <center>
      <h2 style="padding: 10px;">Employee List</h2>
    </center>
    <div class="row">
      <div class="col-10">
        <h6></h6>
      </div>
      <div class="col-2">
        <a href="{{route('employees.create')}}" class="btn btn-primary" style="border-color: gray;">Add New Employee</a>
      </div>
    </div>
    <h5 class="card-title"></h5>

    <!-- Table with stripped rows -->
    <table class="table datatable">
      <thead>
        <tr>
          <th>Employee Id</th>
          <th>Name</th>
          <th>Image</th>
          <th>Address</th>
          <th>Salary</th>
          <th>NId</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($employee as $data)
        <tr>
          <td>{{$data->employee_id}}</td>
          <td>{{$data->name}}</td>
          <td>
            <img class="" src="{{ asset('/uploads/image/' . $data->image) }}" style="height: 70px;width:70px" alt="No Image">
          </td>
          <td>
            {{$data->pre_address}}
          </td>
          <td>{{$data->salary}}</td>
          <td>
            {{$data->nid}}
          </td>
          <td>
            <a href="{{route('employees.edit',$data->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{route('employees.show',$data->id)}}" class="btn btn-success">View</a>
            <a href="{{route('employee.destroy',$data->id)}}" onclick="return confirm('Are you sure you want to delete this record?')"class="btn btn-danger" >Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection