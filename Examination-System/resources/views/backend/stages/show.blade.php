@extends('layouts.backend.master')
@section('css')
@endsection

@section('title')
    {{__('strings.STAGES')}}
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
                    <li class="breadcrumb-item active">{{__('strings.STAGE')}}</li>

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
                    <h4 class="mb-30">{{__('strings.STAGE')}}</h4>


                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif







                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

@section('js')
@endsection
