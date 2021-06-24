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
                        <th>Examinee</th>
                        <th>Contest</th>
                        <th>Mark</th>
                        <th>Total Score</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($n=1)
                    @foreach($contest_results as $contest_result)
                        <tr>
                            <td>{{$n++}}</td>
                            <td>{{$contest_result->examinee}}</td>
                            <td>{{$contest_result->contest}}</td>
                            <td>{{$contest_result->correct_answer}}</td>
                            <td>{{$contest_result->score}}</td>
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


