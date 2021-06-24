@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row gutters">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="card h-80">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <p class="text-center"> <img style="border-radius: 50%;" src="{{asset('/')}}/back-end/assets/images/avatar/avatar-s-1.png" alt="" srcset=""></p>
                                <br>
                                <h5 class="user-name text-center">{{Auth::user()->name}}</h5>
                                <h6 class="user-email text-center">{{Auth::user()->email}}</h6>
                            </div>
                            <hr>
                            <h6 class="mb-2 text-secondary font-weight-bold">Workload
                            </h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:80%">80%</div>
                            </div>
                            <hr>
                            <div class="about">
                                <h6 class="mb-2 text-secondary font-weight-bold ">Description</h6>
                                <p style="text-align: justify;" >{{Auth::user()->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-header font-weight-bold">{{ __('User Information:') }}</div>
                    <hr>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">Mobile :</div>
                                <div class="col-md-4">{{$user->mobile}}</div>
                                <div class="col-md-2">Date of Birth :</div>
                                <div class="col-md-4">{{$user->dob}}</div>
                            </div>
                        <br>
                            <div class="row">
                                <div class="col-md-2">Interests :</div>
                                <div class="col-md-4">{{$user->interests}}</div>
                                <div class="col-md-2">Region :</div>
                                <div class="col-md-4">{{$user->region}}</div>
                            </div>
                        <br>
                            <h6 class="font-weight-bold">Address</h6>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">Street/Village :</div>
                                <div class="col-md-9">{{$user->street_or_village}}</div>
                            </div>
                        <br>
                            <div class="row">
                                <div class="col-md-2">City :</div>
                                <div class="col-md-4">{{$user->city}}</div>
                                <div class="col-md-2">Country :</div>
                                <div class="col-md-4">{{$user->country}}</div>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-10">
                                <a href="{{route('account/edit-profile',['id'=>$user->id])}}" class="btn btn-sm btn-primary">Edit_<i class="fa fa-edit"></i> </a>
                            </div>
                        </div>
                    </div>
@endsection

