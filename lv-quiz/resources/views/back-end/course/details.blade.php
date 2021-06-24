@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-borderless table-striped">
                    <tr>
                        <th colspan="2">Course Details</th>
                    </tr>
                    <tr>
                        <th style="width:10%;">Name</th>
                        <td>{{$course->name}}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{$course->description}}</td>
                    </tr>
                    <tr>
                        <th>Created By</th>
                        <td>{{$course->user_id}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{$course->status}}</td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <a href="{{route('course/show')}}" class="btn btn-link">Back To Course List</a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
