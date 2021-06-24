@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-borderless table-striped">
                    <tr>
                        <th colspan="2">Account Details</th>
                    </tr>
                    <tr>
                        <th style="width:10%;">Name</th>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td>{{$user->mobile}}</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>{{$user->role}}</td>
                    </tr>
                    <tr>
                        <th>User Type</th>
                        <td>{{$user->user_type}}</td>
                    </tr>
                    <tr>
                        <th>Points</th>
                        <td>{{$user->points}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{$user->status}}</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>{{$user->city}}</td>
                    </tr>
                    <tr>
                        <th>Region</th>
                        <td>{{$user->region}}</td>
                    </tr>
                    <tr>
                        <th>Street/Village</th>
                        <td>{{$user->street_or_village}}</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>{{$user->country}}</td>
                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <td>{{$user->dob}}</td>
                    </tr>
                    <tr>
                        <th>Interests</th>
                        <td>{{$user->interests}}</td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <a href="{{route('account/show')}}" class="btn btn-link">Back To Account List</a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
