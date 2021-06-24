@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-borderless table-striped">
                    @foreach($ques as $q)
                    <tr>
                        <th colspan="2">Question Details</th>
                    </tr>
                    <tr>
                        <th style="width:20%;">Question</th>
                        <td>{{$q->question}}</td>
                    </tr>
                    <tr>
                        <th>Answer</th>
                        <td>{{$q->answer}}</td>
                    </tr>
                    <tr>
                        <th>Course Name</th>
                        <td>{{$q->course}}</td>
                    </tr>
                    <tr>
                        <th>Mark </th>
                        <td>{{$q->mark}}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{$q->time}}</td>
                    </tr>
                    <tr>
                        <th>Created By</th>
                        <td>{{$q->author}}</td>
                    </tr>
                    <tr>
                        <th>Question Type</th>
                        <td>{{$q->question_type}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{$q->status}}</td>
                    </tr>

                    <tr>
                        <th colspan="2">
                            <a href="{{route('question/show')}}" class="btn btn-link">Back To Question Page</a>
                        </th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
