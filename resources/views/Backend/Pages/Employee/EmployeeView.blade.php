@extends('Backend.Master')
@section('content')
<div class="card">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="250px" height="250px" src="{{ asset('/uploads/image/' . $employee->image) }}">
                    <h2>{{$employee->name}}</h2>
                    <span class="text-black-50">{{$employee->email}}</span><span> </span>
                </div>
            </div>
            <div class="col-md-7 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile View</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control"readonly  placeholder="first name" value="{{$employee->name}}"></div>
                    </div>
                    <div class="col-md-12"><label class="labels">Designation</label><input type="text" class="form-control" readonly placeholder="education" value="{{$employee->designation}}"></div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control"  placeholder="enter phone number" readonly value="{{$employee->mobile}}"></div>
                        <div class="col-md-12"><label class="labels">Present Address</label><input type="text" class="form-control"  placeholder="enter address line 1"  readonly value="{{$employee->pre_address}}"></div>
                        <div class="col-md-12"><label class="labels">Parmanent Address </label><input type="text" class="form-control" placeholder="enter address line 2"  readonly value="{{$employee->par_address}}"></div>
                        <div class="col-md-12"><label class="labels">Age</label><input type="text" class="form-control" placeholder="enter address line 2"  readonly value="{{$employee->age}}"></div>
                        <div class="col-md-12"><label class="labels">Salary</label><input type="text" class="form-control" placeholder="enter address line 2"  readonly value="{{$employee->salary}}"></div>
                        <div class="col-md-12"><label class="labels">Nid </label><input type="text" class="form-control" placeholder="enter email id" readonly value="{{$employee->nid}}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection