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
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            @if(Auth::user()->role==0)

            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="250px" height="250px" src="{{ asset('/uploads/image/' . $user->image) }}">
                    <h2>{{$user->name}}</h2>
                    <span class="text-black-50">{{$user->email}}</span><span> </span>
                </div>
            </div>
            @endif
            <div class="col-md-7 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile View</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" readonly placeholder="first name" value="{{$user->name}}"></div>
                    </div>
                    @if(Auth::user()->role==0)

                    <div class="col-md-12"><label class="labels">Designation</label><input type="text" class="form-control" readonly placeholder="education" value="{{$user->designation}}"></div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Present Address</label><input type="text" class="form-control" placeholder="enter address line 1" readonly value="{{$user->pre_address}}"></div>
                        <div class="col-md-12"><label class="labels">Parmanent Address </label><input type="text" class="form-control" placeholder="enter address line 2" readonly value="{{$user->par_address}}"></div>
                        <div class="col-md-12"><label class="labels">Age</label><input type="text" class="form-control" placeholder="enter address line 2" readonly value="{{$user->age}}"></div>
                        <div class="col-md-12"><label class="labels">Salary</label><input type="text" class="form-control" placeholder="enter address line 2" readonly value="{{$user->salary}}"></div>
                        <div class="col-md-12"><label class="labels">Nid </label><input type="text" class="form-control" placeholder="enter email id" readonly value="{{$user->nid}}"></div>
                    </div>
                    @endif
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" readonly value="{{$user->phone}}"></div>
                    <div class="col-md-12"><label class="labels"> Email Address</label><input type="text" class="form-control"  readonly value="{{$user->email}}"></div>

                </div>
                <div class="d-flex flex-column align-items-center text-center py-5">
                    <button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Change Your Password</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Change Your password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('password.update')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="row">
                                <div id="inputField1" style="margin-top: 15px;" class="input-field">
                                    <div class="row">
                                        <div class="col-2">Password</div>
                                        <div class="col-10">
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                </div>

                                <div id="inputField2" style="margin-top: 15px;" class="input-field">
                                    <div class="row">
                                        <div class="col-2">Confirm Password</div>
                                        <div class="col-10">
                                            <input type="password" class="form-control" name="password_confirmation">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-5"></div>
                                    <div class="col-7">
                                        <button type="submit" class="btn btn-primary">Update Password</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection