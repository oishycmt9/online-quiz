@extends('front-end.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-primary">Contest Page</h1>
                <h4 class="text-center text-success">
                    {{Session::get('message')}}
                </h4>
            </div>
            <div class="row">
                @foreach($contests as $contest)
                <div class="col-md-4">
                    <div class="card" style="margin-bottom: 20px;">
                        <div class="card-header bg-info">
                            {{$contest->name}}
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                {{$contest->description}}
                            </div>
                            <div class="card-text">
                                <i class="fa fa-calendar"></i> Date: {{$contest->started_date}} | <i class="fa fa-clock"></i> Time: {{$contest->started_time}}
                            </div>
                        </div>
                        <div class="card-footer bg-default">
                            <a href="{{route('contest-info/get-details',['id'=>$contest->id])}}" class="btn btn-success">Details</a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
