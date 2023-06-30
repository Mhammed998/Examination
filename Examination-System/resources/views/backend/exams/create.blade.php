@extends('layouts.dashboard.dashboard-master')
@section('backend-title' , 'Dashboard | Exams')

@section(' backend-styles')
@endsection

@section('backend-content')


    <div class="content-wrapper" style="min-height: 947px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                انشاء امتحان جديد
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('departments.index')}}">Exams</a></li>
                <li class="active">Create New Exam</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title text-center"> امتحان جديد </h3>
                        </div>

                        <form class="" action="{{route('exams.store')}}" method="POST" role="form">
                            @csrf
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="exam_name">  عنوان الامتحان</label>
                                    <input autocomplete="off" type="text"  name="exam_name" class="form-control" id="exam_name" placeholder="Enter Exam Name">
                                </div>




                                <div class="form-group">
                                    <label for="course_id"> اختر الكورس </label>
                                    <select  name="course_id" class="form-control" id="course_id">
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}">{{$course->course_name}}</option>
                                        @endforeach
                                    </select>
                                </div>





                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary"> حفظ الامتحان</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                     </div>
           </div>
        </section>
        <!-- /.content -->
    </div>


@endsection

@section('backend-scripts')
@endsection
