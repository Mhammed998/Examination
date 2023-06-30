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
                <div class="col-md-12">


                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title text-center">  Questions </h3>
                        </div>

                        <form class="" action="" method="POST" role="form">
                            @csrf
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="question_body">السؤال</label>
                                    <textarea rows="3"  name="question_body" class="form-control"
                                              id="question_body" placeholder="Enter Exam Question"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="question_type">نوع السؤال</label>
                                    <select  name="question_type" class="form-control">
                                        <option value="mcq">MCQ</option>
                                        <option value="fill_blank">Fill Blanks</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="answer"> الاجابة</label>
                                    <input type="text" name="answer" id="answer" class="form-control">
                                    <input type="checkbox" class="" name="isRight">
                                    <label>Correct</label>
                                </div>




                                <div class="form-group">
                                    <input type="hidden"  name="exam_id" class="form-control">
                                </div>











                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary"> حفظ السوال</button>
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
