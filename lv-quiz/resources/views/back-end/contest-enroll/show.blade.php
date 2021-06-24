@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
{{--                <a href="{{route('/contest-enroll')}}" class="btn btn-success"><i data-feather="layers" ></i> Create Contest</a>--}}
                <hr>
                <table class="table table-sm table-striped" id="myTable">
                    <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>User ID</th>
                        <th>Contest ID</th>
                        <th>Date</th>
                        <th>Paid</th>
{{--                        <th>Approved</th>--}}
{{--                        <th>Approved By</th>--}}
                        <th width="20%">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php($n=1)
                    @foreach($contest_enrollments as $contest_enroll)
                        <tr>
                            <td>{{$n++}}</td>
                            <td>{{Str::words($contest_enroll->user_id, 5)}}</td>
                            <td>{{$contest_enroll->contest_id}}</td>
                            <td>{{$contest_enroll->date}}</td>
                            <td>{{$contest_enroll->paid}}</td>
{{--                            <td>{{$contest_enroll->approved}}</td>--}}
{{--                            <td>{{$contest_enroll->approved_by}}</td>--}}


                            <td>
                                <a href="{{route('contest-enroll/edit',['id'=>$contest_enroll->id])}}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                <a href="{{route('contest-enroll/details',['id'=>$contest_enroll->id])}}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                <a href="{{route('contest-enroll/delete',['id'=>$contest_enroll->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this Contest Enrollment?')"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
{{--{{route('contest-info/edit',['id'=>$contest_enroll->id])}}--}}
{{----}}
{{--{{route('contest-info/delete',['id'=>$contest_enroll->id])}}--}}


