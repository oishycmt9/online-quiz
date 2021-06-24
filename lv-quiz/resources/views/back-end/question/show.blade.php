@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{route('question/create')}}" class="btn btn-primary"><i class="fa fa-edit"></i> Add Question</a>
                <hr>
                <table class="table table-sm table-striped" id="myTable">
                    <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>Question</th>
{{--                        <th>Option 1</th>--}}
{{--                        <th>Option 2</th>--}}
{{--                        <th>Option 3</th>--}}
{{--                        <th>Option 4</th>--}}
{{--                        <th>Answer</th>--}}
                        <th>Course</th>
                        <th>Mark</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Author</th>
                        <th>Question Type</th>
                        <th width="20%">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php($n=1)
                    @foreach($questions as $question)
                        <tr>
                            <td>{{$n++}}</td>
                            <td>{{Str::words($question->question, 5)}}</td>
{{--                            <td>{{$question->option_1}}</td>--}}
{{--                            <td>{{$question->option_2}}</td>--}}
{{--                            <td>{{$question->option_3}}</td>--}}
{{--                            <td>{{$question->option_4}}</td>--}}
{{--                            <td>{{$question->answer}}</td>--}}
                            <td>{{$question->course}}</td>
                            <td>{{$question->mark}}</td>
                            <td>{{$question->time}}</td>
                            <td>
                                @if($question->status==1)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-window-close text-danger"></i>
                                @endif
                            </td>
                            <td>{{$question->author}}</td>
                            <td>{{$question->question_type}}</td>
                            <td>
                                <a href="{{route('question/edit',['id'=>$question->id])}}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                <a href="{{route('question/details',['id'=>$question->id])}}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                <a href="{{route('question/delete',['id'=>$question->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this question?')"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
