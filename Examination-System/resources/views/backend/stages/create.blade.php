@extends('layouts.backend.master')
@section('title','Stages')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">{{__('strings.STAGES-MANAGEMENT')}}</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">{{__('strings.DASHBOARD')}}</a></li>
                    <li class="breadcrumb-item">{{__('strings.STAGES-MANAGEMENT')}}</li>
                    <li class="breadcrumb-item active">{{__('strings.CREATE-STAGE')}}</li>

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
                    <h4 class="mb-30">{{__('strings.CREATE-STAGE')}}</h4>

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

                                        <form class="" action="" method="POST" role="form">
                                            @csrf
                                            <div class="box-body">

                                                <div class="form-group">
                                                    <label for="name_en">اسم المرحلة التعليمية بالانجليزية</label>
                                                    <input type="text"  name="name_en" class="form-control" id="name_en" placeholder="">
                                                </div>



                                                <div class="form-group">
                                                    <label for="name_ar">اسم المرحلة التعليمية بالعربية</label>
                                                    <input name="name_ar" type="text" class="form-control" id="name_ar" placeholder="">
                                                </div>


                                                <div class="form-group">
                                                    <label for="notes">  ملاحظات</label>
                                                    <input name="notes" type="text" class="form-control" id="notes" placeholder="">
                                                </div>


                                            </div>

                                            <!-- /.box-body -->
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-primary">حفظ </button>
                                            </div>
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
