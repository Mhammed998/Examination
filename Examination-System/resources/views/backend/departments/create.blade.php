@extends('layouts.dashboard.dashboard-master')
@section('backend-title' , 'Dashboard | Departments')

@section(' backend-styles')
@endsection

@section('backend-content')


    <div class="content-wrapper" style="min-height: 947px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                انشاء قسم جديد
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('departments.index')}}">Departments</a></li>
                <li class="active">Create New Department</li>
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
                            <h3 class="box-title text-center">قسم جديد </h3>
                        </div>

                        <form class="" action="{{route('departments.store')}}" method="POST" role="form">
                            @csrf
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="department_name_en">اسم القسم بالانجليزية</label>
                                    <input type="text"  name="department_name_en" class="form-control" id="department_name_en" placeholder="Enter Department Name in English">
                                </div>


                                <div class="form-group">
                                    <label for="department_desc_en">وصف القسم بالانجليزية</label>
                                    <input name="department_desc_en" type="text" class="form-control" id="department_desc_en" placeholder="Enter Department Name in English">
                                </div>

                                <div class="form-group">
                                    <label for="department_name_ar">اسم القسم بالعربية</label>
                                    <input name="department_name_ar" type="text" class="form-control" id="department_name_ar" placeholder="Enter Department Name in Arabic">
                                </div>


                                <div class="form-group">
                                    <label for="department_desc_ar">وصف القسم بالعربية</label>
                                    <input name="department_desc_ar" type="text" class="form-control" id="department_desc_ar" placeholder="Enter Department Desc in Arabic">
                                </div>


                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input name="status" value="0" type="radio">
                                                مخفي
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input name="status" value="1" type="radio">
                                                 مرئي
                                            </label>
                                        </div>


                                    </div>



                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">حفظ القسم</button>
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
