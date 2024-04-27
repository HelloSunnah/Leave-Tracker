@extends('Backend.Master')
@section('content')
@if ($errors->any())
  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<div class="card">
  <div class="card-body">
    <center>
      <h2>Add New Employee</h2>
    </center>
    <h5 class="card-title"></h5>
    <form action="{{route('employees.update',$employee->id)}}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="{{$employee->employee_id}}" name="employee_id" id="inputText">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="{{$employee->name}}" name="name" id="inputText">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Designation</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="designation" value="{{$employee->designation}}" id="inputEmail">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="mobile" value="{{$employee->mobile}}" id="inputEmail">
        </div>
      </div>

      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" value="{{$employee->email}}" id="inputEmail">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="age" value="{{$employee->age}}" id="inputEmail">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Present Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="pre_address" value="{{$employee->pre_address}}" id="inputEmail">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Parmanent Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="par_address" value="{{$employee->par_address}}" id="inputEmail">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Salary</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="salary" value="{{$employee->salary}}" id="inputEmail">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
          <img class="" src="{{ asset('/uploads/image/' . $employee->image) }}" style="height: 100px;width:100px" alt="No Image">

          <input type="file" class="form-control" name="image" value="{{$employee->image}}" id="inputEmail">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nid Number</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="nid" value="{{$employee->nid}}" id="inputEmail">
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form><!-- End Horizontal Form -->
  </div>
</div>
</div>
</div>
</div>
</div>

@endsection