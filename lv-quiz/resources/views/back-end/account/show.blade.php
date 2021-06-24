@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-sm table-striped" id="myTable">
                    <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>User Type</th>
                        <th>Points</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th width="20%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($n=1)
                    @foreach($users as $user)
                        <tr>
                            <td>{{$n++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->role}}</td>
                            <td>{{$user->user_type}}</td>
                            <td>{{$user->points}}</td>
                            <td>{{$user->city}}</td>
                            <td>{{$user->country}}</td>
                            <td>
                                @if($user->status==1)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-window-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('account/edit',['id'=>$user->id])}}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                <a href="{{route('account/details',['id'=>$user->id])}}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                <a href="{{route('account/delete',['id'=>$user->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this Account?')"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


