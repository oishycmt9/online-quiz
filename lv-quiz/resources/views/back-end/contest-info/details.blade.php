@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-borderless table-striped">
                    <tr>
                        <th colspan="2">Contest Information Details</th>
                    </tr>
                    <tr>
                        <th style="width:20%;">Name</th>
                        <td>{{$contest_info->name}}</td>
                    </tr>
                    <tr>
                        <th>Running time</th>
                        <td>{{$contest_info->time}}</td>
                    </tr>
                    <tr>
                        <th>Started Date</th>
                        <td>{{$contest_info->started_date}}</td>
                    </tr>
                    <tr>
                        <th>Started Time</th>
                        <td>{{$contest_info->started_time}}</td>
                    </tr>
                    <tr>
                        <th>Negative Marking</th>
                        <td>{{$contest_info->negative_marking}}</td>
                    </tr>
                    <tr>
                        <th>Created By</th>
                        <td>{{$contest_info->author_id}}</td>
                    </tr>
                    <tr>
                        <th>Course Id</th>
                        <td>{{$contest_info->course_id}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{$contest_info->status}}</td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <a href="{{route('contest-info/show')}}" class="btn btn-link">Back To Contest List</a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

