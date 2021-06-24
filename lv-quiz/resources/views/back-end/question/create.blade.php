@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Question') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('question/store') }}">
                            @csrf
                            <input type="hidden" name="author_id" value="{{Auth::user()->id}}">
                            <div class="form-group row">
                                <label for="question" class="col-md-4 col-form-label text-md-right">{{ __('Question') }}</label>

                                <div class="col-md-7">
                                    <input id="question" type="text" class="form-control @error('question') is-invalid @enderror" name="question" value="{{ old('question') }}" required autocomplete="question" autofocus>

                                    @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="option_1" class="col-md-4 col-form-label text-md-right">{{ __('Option 1') }}</label>

                                <div class="col-md-6">
                                    <input id="option_1" type="text" class="form-control @error('option_1') is-invalid @enderror" name="option_1" value="{{ old('option_1') }}" required autocomplete="option_1" autofocus>

                                    @error('option_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2" style="padding-top:7px;">
                                    <input title="Select Your Answer" type="radio" class="form-check-input" name="answer" id="answer" value="1">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="option_2" class="col-md-4 col-form-label text-md-right">{{ __('Option 2') }}</label>

                                <div class="col-md-6">
                                    <input id="option_2" type="text" class="form-control @error('option_2') is-invalid @enderror" name="option_2" value="{{ old('option_2') }}" required autocomplete="option_2" autofocus>

                                    @error('option_2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2" style="padding-top:7px;">
                                    <input title="Select Your Answer" type="radio" class="form-check-input" name="answer" id="answer" value="2">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="option_3" class="col-md-4 col-form-label text-md-right">{{ __('Option 3') }}</label>

                                <div class="col-md-6">
                                    <input id="option_3" type="text" class="form-control @error('option_3') is-invalid @enderror" name="option_3" value="{{ old('option_3') }}" required autocomplete="option_3" autofocus>

                                    @error('option_3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2" style="padding-top:7px;">
                                    <input title="Select Your Answer" type="radio" class="form-check-input" name="answer" id="answer" value="3">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="option_4" class="col-md-4 col-form-label text-md-right">{{ __('Option 4') }}</label>

                                <div class="col-md-6">
                                    <input id="option_4" type="text" class="form-control @error('option_4') is-invalid @enderror" name="option_4" value="{{ old('option_4') }}" required autocomplete="option_4" autofocus>

                                    @error('option_4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-2" style="padding-top:7px;">
                                    <input title="Select Your Answer" type="radio" class="form-check-input" name="answer" id="answer" value="4">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="course_id" class="col-md-4 col-form-label text-md-right">{{ __('Select Course') }}</label>

                                <div class="col-md-7">
                                    <select class="form-control" name="course_id" id="course_id" required>
                                        <option value="">--Select Course--</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}">{{$course->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('course_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mark" class="col-md-4 col-form-label text-md-right">{{ __('Mark') }}</label>

                                <div class="col-md-3">
                                    <input id="mark" type="text" placeholder="00.00" class="form-control @error('mark') is-invalid @enderror" name="mark" value="{{ old('mark') }}" required autocomplete="mark" autofocus>

                                    @error('mark')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="time" class="col-md-1 col-form-label text-md-right">{{ __('Time') }}</label>

                                <div class="col-md-3">
                                    <input id="time" type="text" placeholder="mm:ss" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}" required autocomplete="time" autofocus>

                                    @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>


                            <div class="form-group row">
                                <label for="question_type" class="col-md-4 col-form-label text-md-right">{{ __('Question Type') }}</label>

                                <div class="col-md-7">
{{--                                    <input id="answer" type="text" class="form-control @error('answer') is-invalid @enderror" name="answer" value="{{ old('answer') }}" required autocomplete="answer" autofocus>--}}
                                    <select class="form-control" name="question_type" id="question_type" required>
                                        <option value="single">Single Answer</option>
                                        <option value="multiple">Multiple Answer</option>
                                    </select>

                                    @error('question_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
{{--                            <div class="form-group row">--}}
{{--                                <label for="status" class="col-md-4 form-check-label text-md-right">{{ __('Status') }}</label>--}}

{{--                                <div class="col-md-7">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <label class="form-check-label">--}}
{{--                                            <input id="status" type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status"  value="1" required {{$questions->status=='1'?'checked':''}}> Published--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-check">--}}
{{--                                        <label class="form-check-label">--}}
{{--                                            <input id="status" type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status"  value="0" required {{$questions->status=='0'?'checked':''}}> Unpublished--}}
{{--                                        </label>--}}
{{--                                    </div>--}}

{{--                                    @error('status')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}



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
