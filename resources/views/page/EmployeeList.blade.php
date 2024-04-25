@extends('master')
@section('content')

<div class="card">
<center>
        <h2>Employee List</h2>
    </center>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                  <th>Employee Id</th>
                  <th>Name</th>
                  <th>Address</th>
                    <th >Salary</th>
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
{{$data->pre_address}}
                  </td>
                
                  <td>{{$data->salary}}</td> 
                  <td>
                    {{$data->nid}}
                  </td>
                    <td>
                    <a href="{{route('employee.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('employee.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                    <a href="{{route('employee.view',$data->id)}}" class="btn btn-success">View</a>
                    </td>
                  </tr>
                  @endforeach
                
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </section>
</div>
@endsection