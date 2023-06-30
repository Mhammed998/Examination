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
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <h4 class="mb-30">{{__('strings.CREATE-MEMBER')}}</h4>

                <div class="row">
                    <div class="col-md-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="post"  action="" autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Full Name In English<span class="text-danger">*</span></label>
                                                <input  type="text" name="full_name_en"  class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Full Name In Arabic<span class="text-danger">*</span></label>
                                                <input  type="text" name="full_name_ar"  class="form-control">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Email<span class="text-danger">*</span></label>
                                                <input  type="email" class="form-control" name="email" type="text" >
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>User Image:</label>
                                                <input  type="file" name="avatar" class="form-control">
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password<span class="text-danger">*</span></label>
                                                <input placeholder="Enter strong password" class="form-control" type="password"  name="password">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password Confirmation<span class="text-danger">*</span></label>
                                                <input placeholder="Enter strong password" class="form-control" type="password"  name="password_confirmation">
                                            </div>
                                        </div>

                                    </div>

{{--                                    <h6 style="font-family: 'Cairo', sans-serif;color: blue">hello</h6><br>--}}
                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gender">Gender<span class="text-danger">*</span></label>
                                                <select class="custom-select mr-sm-2" name="gender_id">
                                                    <option selected disabled>Select User Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gender">Status<span class="text-danger">*</span></label>
                                                <select class="custom-select mr-sm-2" name="status">
                                                    <option selected disabled>Select User Status</option>
                                                    <option value="1">Activated</option>
                                                    <option value="0">blocked</option>
                                                </select>
                                            </div>
                                        </div>




                                    </div>
                                    <br>
                                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">Save User</button>
                                </form>

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
