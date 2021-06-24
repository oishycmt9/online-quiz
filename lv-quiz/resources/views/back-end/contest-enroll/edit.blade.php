@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Enrollment') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('contest-enroll/update') }}">
                            @csrf
                            <input type="hidden" name="approved_by" value="{{Auth::user()->id}}">
                            <input type="hidden" name="id" value="{{$contest_enroll->id}}">
                            <div class="form-group row">
                                <label for="approved" class="col-md-4 col-form-label text-md-right">{{ __('APPROVED') }}</label>
                                <div class="col-md-7">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="yes" type="radio"  class=" form-check-input @error('approved') is-invalid @enderror" name="approved" value="1"  required>Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="no" type="radio"  class=" form-check-input @error('approved') is-invalid @enderror" name="approved" value="0"  required>No
                                        </label>
                                    </div>

                                    @error('approved')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>






                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
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
