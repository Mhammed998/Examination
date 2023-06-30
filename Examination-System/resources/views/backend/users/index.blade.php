@extends('layouts.backend.master')
@section('title','Users')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">{{__('strings.MEMBERS-MANAGEMENT')}}</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">{{__('strings.DASHBOARD')}}</a></li>
                    <li class="breadcrumb-item">{{__('strings.MEMBERS-MANAGEMENT')}}</li>
                    <li class="breadcrumb-item active">{{__('strings.CREATE-MEMBER')}}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('users.create')}}" class="btn btn-success btn-sm" >  {{__('strings.CREATE-MEMBER')}} </a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{$user->full_name_en}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    @if(!empty($user->roles))
                                                        @foreach($user->roles as $v)
                                                           <span class="role-badge badge badge-warning">{{$v}}</span>
                                                        @endforeach
                                                      @endif
                                                </td>

                                                <td>
                                                  @if($user->status == '1')
                                                    <span class="text-success">
                                                        Activated
                                                    </span>
                                                    @else
                                                        <span class="text-danger">
                                                            Banned
                                                        </span>
                                                  @endif
                                                </td>
                                                <td>
                                                    <a href=""  class="btn btn-info btn-sm" role="button" aria-pressed="true">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a  href="" type="button" class="btn btn-danger btn-sm" title="حذف">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

\                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

@section('js')
@endsection
