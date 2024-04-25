@extends('master')
@section('content')

<div class="card">
<center>
        <h2>Add New Employee</h2>
    </center>
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <form action="{{route('employee.create.post')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Id</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="employee_id" id="inputText">
                  </div>
                </div> 

                 <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputText">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Designation</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="designation" id="inputEmail">
                  </div>

                </div>  
                  <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="mobile" id="inputEmail">
                  </div>
                </div>
             
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="age" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Present Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pre_address" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Parmanent Address</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="par_address" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Salary</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="salary" id="inputEmail">
                  </div>
                </div>
               
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nid Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="nid" id="inputEmail">
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
    </section>
</div>
@endsection