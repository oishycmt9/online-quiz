@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                   <h1> <div class="card-header text-md text-center">{{ __('Exam') }}</div></h1>
                    <hr>

                    <div class="card-body">
                        <form method="POST" action="{{route('submit-mcq')}}">
                            @csrf

{{--                            <input type="hidden" name="author_id" value="{{Auth::user()->id}}">--}}

                            <?php $n=1; ?>
                            @foreach($contest_questions as $contest_question)
                                <input type="hidden" name="contest_id" value="{{$contest_question->contest_id}}">
                            <div class="form-group row">
                                <h3>
                                <div class="row">
                                    <div class="col-md-12">
                                         <label for="{{$contest_question->question}}" class="col-md-12 form-check-label ">{{$n}}. {{$contest_question->question}}</label>
                                        <input type="hidden" name="ques{{$n}}" value="{{$contest_question->id}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input id="ans{{$n}}" type="radio" class="form-check-input" name="ans{{$n}}"  value="1"  >{{$contest_question->option1}}
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input id="ans{{$n}}" type="radio" class="form-check-input" name="ans{{$n}}"  value="2"  >{{$contest_question->option2}}
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input id="ans{{$n}}" type="radio" class="form-check-input " name="ans{{$n}}"  value="3" >{{$contest_question->option3}}
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input id="ans{{$n}}" type="radio" class="form-check-input " name="ans{{$n}}"  value="4"  >{{$contest_question->option4}}
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                </h3>

                            </div>
                            <hr>
                                <?php $n++;?>
                            @endforeach

                            <div class="form-group row mb-0">
                                <div class="col-md-10 offset-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
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
