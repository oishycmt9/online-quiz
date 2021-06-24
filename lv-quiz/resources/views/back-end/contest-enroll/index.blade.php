@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-primary">Contest Page</h1>
            </div>
            <div class="row">
                @foreach($contests as $contest)
                    <div class="col-md-6">
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
                                <?php $check=0; ?>
                                @foreach($enrollList as $enl)
                                    @if($contest->id==$enl->contest_id && $enl->user_id==Auth::user()->id)
                                        <?php $check++; ?>
                                    @endif
                                @endforeach
                                    <div class="row">
                                        <div class="col-md-6">
                                    @if($check=='1')
                                <a href="#" class="btn btn-danger">Enrolled</a>
                                    @else
                                <a href="{{route('contest-info/get-details',['id'=>$contest->id])}}" class="btn btn-success">Details</a>
                                    @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if($check=='1')<a href="{{route('contest-question/show',['id'=>$contest->id])}}" class="btn btn-success">Test</a>@endif

                                        </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
