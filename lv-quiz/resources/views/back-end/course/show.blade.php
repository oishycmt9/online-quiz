@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{route('course/create')}}" class="btn btn-success">Create Course</a>
            <hr>
            <table class="table table-sm table-striped" id="myTable">
                <thead class="table-primary">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th width="20%">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($n=1)
                @foreach($courses as $course)
                <tr>
                    <td>{{$n++}}</td>
                    <td>{{Str::words($course->name, 5)}}</td>
                    <td>{{$course->description}}</td>
                    <td>
                        @if($course->status==1)
                            <i class="fa fa-check text-success"></i>
                        @else
                            <i class="fa fa-window-close text-danger"></i>
                        @endif
                    </td>

                    <td>
                        <a href="{{route('course/edit',['id'=>$course->id])}}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                        <a href="{{route('course/details',['id'=>$course->id])}}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                        <a href="{{route('course/delete',['id'=>$course->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this course?')"> <i class="fa fa-trash"></i> </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Registration - Online Quiz</title>--}}
{{--    <link rel="stylesheet" href="{{asset('/')}}/back-end/assets/css/bootstrap.css">--}}

{{--    <link rel="shortcut icon" href="{{asset('/')}}/back-end/assets/images/favicon.svg" type="image/x-icon">--}}
{{--    <link rel="stylesheet" href="{{asset('/')}}/back-end/assets/css/app.css">--}}
{{--</head>--}}

{{--<body>--}}
{{--<div id="auth">--}}

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-7 col-sm-12 mx-auto">--}}
{{--                <div class="card pt-4">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="text-center mb-5">--}}
{{--                            <img src="{{asset('/')}}/back-end/assets/images/favicon.svg" height="48" class='mb-4'>--}}
{{--                            <h3>Registration</h3>--}}
{{--                            <p>Please fill the form to register.</p>--}}
{{--                        </div>--}}
{{--                        <form method="POST" action="{{ route('register') }}">--}}
{{--                            @csrf--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12 col-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="first-name-column">Full Name</label>--}}
{{--                                        <input type="text" id="first-name-column" class="form-control"  name="name" required>--}}
{{--                                        @error('name')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12 col-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="email-id-column">Email</label>--}}
{{--                                        <input type="email" id="email-id-column" class="form-control" name="email">--}}
{{--                                        @error('email')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="username-column">Password</label>--}}
{{--                                        <input type="password" id="username-column" class="form-control" name="username-column">--}}
{{--                                        @error('password')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="country-floating">Confirm Password</label>--}}
{{--                                        <input type="password" id="country-floating" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                                        @error('password_confirmation')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                <strong>{{ $message }}</strong>--}}
{{--                                            </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </diV>--}}

{{--                            <a href="{{route('login')}}">Have an account? Login</a>--}}
{{--                            <div class="clearfix">--}}
{{--                                <button class="btn btn-primary float-right">Register</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                        <div class="divider">--}}
{{--                            <div class="divider-text">OR</div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}
{{--<script src="{{asset('/')}}/back-end/assets/js/feather-icons/feather.min.js"></script>--}}
{{--<script src="{{asset('/')}}/back-end/assets/js/app.js"></script>--}}

{{--<script src="{{asset('/')}}/back-end/assets/js/main.js"></script>--}}
{{--</body>--}}

{{--</html>--}}

