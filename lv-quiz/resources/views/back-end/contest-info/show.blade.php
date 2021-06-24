@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{route('contest-info/create')}}" class="btn btn-success"><i data-feather="layers" ></i> Create Contest</a>
                <hr>
                <table class="table table-sm table-striped" id="myTable">
                    <thead class="table-primary">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Number of Question</th>
                        <th>Contest Type</th>
                        <th>Contest Fee</th>
                        <th>Last Reg Date</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th width="20%">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php($n=1)
                    @foreach($contest_information as $contest_info)
                        <tr>
                            <td>{{$n++}}</td>
                            <td>{{Str::words($contest_info->name, 5)}}</td>
                            <td>{{$contest_info->description}}</td>
                            <td>{{$contest_info->no_of_question}}</td>
                            <td>{{$contest_info->contest_type}}</td>
                            <td>{{$contest_info->contest_fee}}</td>
                            <td>{{$contest_info->last_reg_date}}</td>
                            <td>{{$contest_info->author}}</td>
                            <td>
                                @if($contest_info->status==1)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-window-close text-danger"></i>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('contest-info/edit',['id'=>$contest_info->id])}}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                                <a href="{{route('contest-info/details',['id'=>$contest_info->id])}}" class="btn btn-sm btn-info"> <i class="fa fa-eye"></i> </a>
                                <a href="{{route('contest-info/delete',['id'=>$contest_info->id])}}" class="btn btn-sm btn-danger" onclick="return confirm('Do you want to delete this Contest?')"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

