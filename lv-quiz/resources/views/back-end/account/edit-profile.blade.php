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
                        <form method="POST" action="{{route('account/update-profile')}}">
                            @csrf
{{--                            <input type="hidden" name="id" value="{{Auth::user()->id}}">--}}
                            <input type="hidden" name="id" value="{{$user->id}}">

                            <div class="form-group row">
                                <label for="mobile" class="col-md-2 col-form-label text-md-right">{{ __('Mobile') }}</label>

                                <div class="col-md-4">
                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{$user->mobile}}" required autocomplete="mobile" autofocus>

                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="dob" class="col-md-2 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                <div class="col-md-4">
                                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{$user->dob}}" required autocomplete="dob" autofocus>

                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="interests" class="col-md-2 col-form-label text-md-right">{{ __('Interests') }}</label>

                                <div class="col-md-4">
                                    <input id="interests" type="text" class="form-control @error('interests') is-invalid @enderror" name="interests" value="{{$user->interests}}" required autocomplete="interests" autofocus>

                                    @error('interests')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="region" class="col-md-2 col-form-label text-md-right">{{ __('Region') }}</label>

                                <div class="col-md-4">
                                    <input id="region" type="text" class="form-control @error('region') is-invalid @enderror" name="region" value="{{$user->region}}" required autocomplete="region" autofocus>

                                    @error('region')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <h6 class="font-weight-bold">Address</h6>
                            <hr>

                            <div class="form-group row">
                                <label for="street_or_village" class="col-md-2 col-form-label text-md-left">{{ __('Street/ Village') }}</label>

                                <div class="col-md-10">
                                    <input id="street_or_village" type="text" class="form-control @error('street_or_village') is-invalid @enderror" name="street_or_village" value="{{$user->street_or_village}}" required autocomplete="street_or_village" autofocus>

                                    @error('street_or_village')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-2 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-4">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{$user->city}}" required autocomplete="city" autofocus>

                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="country" class="col-md-2 col-form-label text-md-right">{{ __('Country') }}</label>

                                <div class="col-md-4">
                                    <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{$user->country}}" required autocomplete="country" autofocus>

                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-2 col-form-label text-md-left">{{ __('Description') }}</label>

                                <div class="col-md-10">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{$user->description}}" required autocomplete="description" autofocus>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 offset-md-10">
                                    <button type="submit" class="btn btn-primary ">
                                        {{ __('update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

