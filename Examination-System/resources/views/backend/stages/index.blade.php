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
                    <li class="breadcrumb-item">{{__('strings.STAGES')}}</li>
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
                    <div class="d-flex justify-content-between align-items-center mb-30">
                        <h4 class="">{{__('strings.SHOW') . ' ' . __('strings.STAGES')}}</h4>

                        <a class="btn btn-primary" href="{{route('educational-stages.create')}}">{{__('strings.CREATE-STAGE')}}</a>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">

                                        <div class="row">
                                            <div class="col-xl-12 mb-30">
                                                        <div class="table-responsive">
                                                            <table id="datatable" class="table table-striped table-bordered p-0">
                                                                <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>{{__('strings.NAME')}}</th>
                                                                    <th>{{__('strings.NOTES')}}</th>
                                                                    <th>{{__('strings.CONTROLS')}}</th>

                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @if($stages->count() > 0)
                                                                    @foreach($stages as $stage)
                                                                        <tr>
                                                                            <td>{{$loop->iteration}}</td>
                                                                            <td>{{$stage->name}}</td>
                                                                            <td>{{$stage->notes}}</td>
                                                                            <td>


                                                                                <a href="{{route('educational-stages.show' , $stage->id)}}" class="btn btn-success btn-sm"
                                                                                        title="show-stage">
                                                                                    <i class="fa fa-eye"></i>
                                                                                </a>

                                                                                <a href="{{route('educational-stages.edit' , $stage->id)}}"  class="btn btn-info btn-sm"
                                                                                   title="edit-stage">
                                                                                    <i class="fa fa-edit"></i>
                                                                                </a>

                                                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                                                        data-target="#delete{{ $stage->id }}"
                                                                                        title="Delete Educational Stage"><i
                                                                                        class="fa fa-trash"></i>
                                                                                </button>


{{--                                                                                <form class="d-inline" action="{{route('educational-stages.destroy' , $stage->id)}}" method="post">--}}
{{--                                                                                    @method('DELETE')--}}
{{--                                                                                    @csrf--}}
{{--                                                                                    <button type="submit" class="btn btn-danger btn-sm"--}}
{{--                                                                                            title="delete-stage">--}}
{{--                                                                                        <i class="fa fa-trash"></i>--}}
{{--                                                                                    </button>--}}
{{--                                                                                </form>--}}

                                                                            </td>
                                                                        </tr>

                                                                        <div class="modal fade" id="delete{{ $stage->id }}" tabindex="-1" role="dialog"
                                                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                                            id="exampleModalLabel">
                                                                                            {{ __('strings.DELETE') . ' ' . __('strings.STAGE') }}
                                                                                        </h5>
                                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="{{ route('educational-stages.destroy', $stage->id) }}" method="post">
                                                                                            @method('DELETE')
                                                                                            @csrf
                                                                                            <h6>
                                                                                                {{ __('strings.DELETE') . ' ' . $stage->name }}
                                                                                            </h6>
                                                                                            <input id="id" type="hidden" name="id" class="form-control"
                                                                                                   value="{{ $stage->id }}">
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-secondary"
                                                                                                        data-dismiss="modal">{{ trans('strings.CLOSE') }}</button>
                                                                                                <button type="submit"
                                                                                                        class="btn btn-danger">{{ trans('strings.CONFIRM') }}</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

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
    <!-- row closed -->



@endsection

@section('js')
@endsection
