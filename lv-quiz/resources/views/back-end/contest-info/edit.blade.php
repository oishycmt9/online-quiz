@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Contest') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('contest-info/update') }}">
                            @csrf
                            <input type="hidden" name="author_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="id" value="{{$contest_info->id}}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-7">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$contest_info->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-7">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $contest_info->description }}" required autocomplete="description" autofocus>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_of_question" class="col-md-4 col-form-label text-md-right">{{ __('Number of Question') }}</label>

                                <div class="col-md-7">
                                    <input id="no_of_question" type="" class="form-control @error('no_of_question') is-invalid @enderror" name="no_of_question" value="{{ $contest_info->no_of_question }}" required autocomplete="no_of_question" autofocus>

                                    @error('no_of_question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="time" class="col-md-4 col-form-label text-md-right">{{ __('Time') }}</label>

                                <div class="col-md-7">
                                    <input id="time" type="text" placeholder="mm:ss" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ $contest_info->time }}" required autocomplete="time" autofocus>

                                    @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="started_date" class="col-md-4 col-form-label text-md-right">{{ __('Started Date') }}</label>

                                <div class="col-md-7">
                                    <input id="started_date" type="date" class="form-control @error('started_date') is-invalid @enderror" name="started_date" value="{{ $contest_info->started_date }}" required autocomplete="started_date" autofocus>

                                    @error('started_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="started_time" class="col-md-4 col-form-label text-md-right">{{ __('Started Time') }}</label>

                                <div class="col-md-7">
                                    <input id="started_time" type="time" class="form-control @error('started_time') is-invalid @enderror" name="started_time" value="{{$contest_info->started_time  }}" required autocomplete="started_time" autofocus>

                                    @error('started_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="contest_type" class="col-md-4 col-form-label text-md-right">{{ __('Contest Type') }}</label>
                                <div class="col-md-7">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="free" type="radio"  class=" form-check-input @error('contest_type') is-invalid @enderror" name="contest_type" value="free" {{$contest_info->contest_type=='free'?'checked':''}} required>Free
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="paid" type="radio"  class=" form-check-input @error('contest_type') is-invalid @enderror" name="contest_type" value="paid" {{$contest_info->contest_type=='paid'?'checked':''}} required>Paid
                                        </label>
                                    </div>

                                    @error('contest_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

{{--                            <div class="form-group row">--}}
{{--                                <label for="contest_type" class="col-md-4 col-form-label text-md-right">{{ __('Contest Type') }}</label>--}}

{{--                                <div class="col-md-7">--}}
{{--                                    <select class="form-control" name="contest_type" id="contest_type" required>--}}
{{--                                        <option value="paid" {{$info->contest_type=='paid'?'selected':''}}>Paid</option>--}}
{{--                                        <option value="free" {{$info->contest_type=='free'?'selected':''}}>Free</option>--}}
{{--                                    </select>--}}

{{--                                    @error('contest_type')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}


                            <div class="form-group row">
                                <label for="negative_marking" class="col-md-4 col-form-label text-md-right">{{ __('Negative Marking') }}</label>

                                <div class="col-md-7">

                                    <select class="form-control" name="negative_marking" id="negative_marking" required>
                                        <option value="-2" {{$contest_info->negative_marking=='1'?'selected':''}}>Yes</option>
                                        <option value="0" {{$contest_info->negative_marking=='0'?'selected':''}}>No</option>
                                    </select>

                                    @error('negative_marking')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>


                            <div class="form-group row" id="fee">
                                <label for="contest_fee" class="col-md-4 col-form-label text-md-right">{{ __('Contest Fee') }}</label>

                                <div class="col-md-7">
                                    <input id="contest_fee" type="text" class="form-control @error('contest_fee') is-invalid @enderror" name="contest_fee" value="{{ $contest_info->contest_fee }}" required autocomplete="contest_fee" autofocus>


                                    @error('contest_fee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_reg_date" class="col-md-4 col-form-label text-md-right">{{ __('Last Registration Date') }}</label>

                                <div class="col-md-7">
                                    <input id="last_reg_date" type="datetime-local" class="form-control @error('last_reg_date') is-invalid @enderror" name="last_reg_date" value="{{ \Carbon\Carbon::parse($contest_info->last_reg_date)->format('Y-m-d\TH:i')}}" required autocomplete="last_reg_date" autofocus>


                                    @error('last_reg_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="status" class="col-md-4 form-check-label text-md-right">{{ __('Status') }}</label>

                                <div class="col-md-7">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="status" type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status"  value="1" required {{$contest_info->status=='1'?'checked':''}}> Published
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="status" type="radio" class="form-check-input @error('status') is-invalid @enderror" name="status"  value="0" required {{$contest_info->status=='0'?'checked':''}}> Unpublished
                                        </label>
                                    </div>

                                    @error('status')
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
    <script>
        $(document).ready(function(){
            var check = $('#free').val();
            if(check=='free')
            {
                $("#fee").hide();
            }
            $("#free").click(function(){
                $("#fee").hide();
            });
            $("#paid").click(function(){
                $("#fee").show();
            });
        });
    </script>
@endsection


