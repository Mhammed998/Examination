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

                                        <div class="row">
                                            <div class="col-xl-12 mb-30">
                                                <div class="card card-statistics h-100">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table id="datatable" class="table table-striped table-bordered p-0">
                                                                <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Name_EN</th>
                                                                    <th>Name_AR</th>
                                                                    <th>Notes</th>
                                                                    <th>Controls</th>

                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @if($stages->count() > 0)
                                                                    @foreach($stages as $stage)
                                                                        <tr>
                                                                            <td>{{$loop->iteration}}</td>
                                                                            <td>{{$stage->name_en}}</td>
                                                                            <td>{{$stage->name_ar}}</td>
                                                                            <td>{{$stage->notes}}</td>
                                                                            <td>

                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @endif
                                                                </tbody>


                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


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
