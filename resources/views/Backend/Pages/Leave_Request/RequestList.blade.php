@extends('Backend.Master')
@section('content')

<div class="card">
    <center>
        <h2 style="padding: 10px;">Employee Leave Request</h2>
    </center>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Applicant</th>
                        <th>Leave Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Duration</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leave as $data)
                    <tr>
                        <td> {{App\Models\User::find($data->employee_id)?->name}}
                        </td>
                        <td>{{$data->leave_type}}</td>
                        <td>{{$data->start_date}}</td>
                        <td>
                            @if($data->end_date)
                            {{$data->end_date}}
                            @else
                            -----
                            @endif
                        </td>
                        <td>
                            @if($data->duration==0)
                            1 Day
                            @else
                            {{$data->duration}} Day
                            @endif
                        </td>

                        <td> 
                            @if($data->status==1)

                                <a href="" class="badge text-bg-primary">approved</a>

                            @elseif($data->status==2)
                                 <a href="" class="badge text-bg-danger">Cancelled</a>
                     
                        @else
                            <form method="POST" action="{{ route('leave.update', $data->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-success" name="action" value="approve">Approve</button>
                                <button type="submit" class="btn btn-danger" name="action" value="cancel">Cancel</button>
                            </form>
                       
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection