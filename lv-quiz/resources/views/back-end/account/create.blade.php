@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Information') }}</div>

                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <input id="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile"  value="{{ old('mobile') }}" required>

                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <input id="city" class="form-control @error('city') is-invalid @enderror" name="city"  value="{{ old('city') }}" required>

                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}</label>

                                <div class="col-md-6">
                                    <input id="region" class="form-control @error('region') is-invalid @enderror" name="region"  value="{{ old('region') }}" required>

                                    @error('region')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="street_or_village" class="col-md-4 col-form-label text-md-right">{{ __('STREET/VILLAGE') }}</label>

                                <div class="col-md-6">
                                    <input id="street_or_village" class="form-control @error('street_or_village') is-invalid @enderror" name="street_or_village"  value="{{ old('street_or_village') }}" required>

                                    @error('street_or_village')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('COUNTRY') }}</label>

                                <div class="col-md-6">
                                    <input id="country" class="form-control @error('country') is-invalid @enderror" name="country"  value="{{ old('country') }}" required>

                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birthday') }}</label>

                                <div class="col-md-6">
                                    <input id="dob" class="form-control @error('dob') is-invalid @enderror" name="dob"  value="{{ old('dob') }}" required>

                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="interests" class="col-md-4 col-form-label text-md-right">{{ __('Interests') }}</label>

                                <div class="col-md-6">
                                    <input id="interests" class="form-control @error('interests') is-invalid @enderror" name="interests"  value="{{ old('interests') }}" required>

                                    @error('interests')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
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
