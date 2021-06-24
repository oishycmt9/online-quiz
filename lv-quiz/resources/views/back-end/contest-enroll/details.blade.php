@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-borderless table-striped">
                    <tr>
                        <th colspan="2">Contest Enrollment Details</th>
                    </tr>
                    <tr>
                        <th style="width:20%;">User ID</th>
                        <td>{{$contest_enroll->user_id}}</td>
                    </tr>
                    <tr>
                        <th>Contest ID</th>
                        <td>{{$contest_enroll->contest_id}}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{$contest_enroll->date}}</td>
                    </tr>
                    <tr>
                        <th>Paid</th>
                        <td>{{$contest_enroll->paid}}</td>
                    </tr>
                    <tr>
                        <th>Approved</th>
                        <td>{{$contest_enroll->approved}}</td>
                    </tr>
                    <tr>
                        <th>Approved By</th>
                        <td>{{$contest_enroll->approved_by}}</td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <a href="{{route('/contest-enroll')}}" class="btn btn-link">Back To Contest Enroll List</a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection



