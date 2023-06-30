@extends('layouts.dashboard.dashboard-master')
@section('backend-title' , 'Dashboard | Departments')

@section(' backend-styles')
@endsection

@section('backend-content')


    <div class="content-wrapper" style="min-height: 947px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Departments Management
                <small>Preview</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('departments.index')}}">Departments</a></li>
                <li class="active">Show all departments</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
            </div>
        </section>
        <!-- /.content -->
    </div>


@endsection

@section('backend-scripts')
@endsection
