@extends('front-end.master')

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
                        <th>Status</th>
                        <td>{{$contest_info->status}}</td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <a href="{{url('/contest')}}" class="btn btn-link">Back To Contest List</a>
                            @guest
                                <a href="{{route('/contest-enroll')}}" class="btn btn-link">Enroll Now</a>
                            @else
                                <form action="{{route('contest-enroll')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <input type="hidden" name="contest_id" value="{{$contest_info->id}}">
                                    <input type="submit" value="Enroll Contest" class="btn btn-success">
                                </form>
                            @endguest
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

