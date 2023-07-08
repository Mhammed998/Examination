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
                    <li class="breadcrumb-item active">{{__('strings.EDIT-STAGE')}}</li>

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
                    <h4 class="mb-30">{{__('strings.EDIT-STAGE')}}</h4>

                    <div class="row">
                        <div class="col-md-8 mb-30">
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

                                        <form class="" action="{{route('educational-stages.update' , $stage->id)}}" method="POST" role="form">
                                            @csrf
                                            @method('PUT')
                                            <div class="box-body">

                                                <div class="form-group">
                                                    <label for="name_en">{{__('strings.NAME_IN_ENGLISH')}}</label>
                                                    <input value="{{$stage->name_en}}"  type="text"  name="name_en" class="form-control" id="name_en" placeholder="">
                                                </div>



                                                <div class="form-group">
                                                    <label for="name_ar">{{__('strings.NAME_IN_ARABIC')}}</label>
                                                    <input value="{{$stage->name_ar}}" name="name_ar" type="text" class="form-control" id="name_ar" placeholder="">
                                                </div>


                                                <div class="form-group">
                                                    <label for="notes">  {{__('strings.NOTES')}}</label>
                                                    <textarea name="notes" rows="3" class="form-control" id="notes" placeholder="">{{$stage->notes}}</textarea>
                                                </div>


                                            </div>

                                            <!-- /.box-body -->
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-primary">{{__('strings.SAVE')}}</button>
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
