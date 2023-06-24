@extends('layouts.dashboard.dashboard-master')
@section('backend-title' , 'DASHBOARD')

@section(' backend-styles')
@endsection

@section('backend-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                داشبورد
                <small>Version 2.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">میزان پردازش</span>
                            <span class="info-box-number">90<small>%</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">لایک ها</span>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">فروش</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">کاربران جدید</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">گزارش ماهانه</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-wrench"></i></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="text-center">
                                        <strong>فروش: ۱۸ شهریور</strong>
                                    </p>

                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="salesChart" style="height: 180px;"></canvas>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>وظایف</strong>
                                    </p>

                                    <div class="progress-group">
                                        <span class="progress-text">اضافه کردن محصول به سبد خرید</span>
                                        <span class="progress-number"><b>160</b>/200</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">خرید ها تکمیلی</span>
                                        <span class="progress-number"><b>310</b>/400</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">آمار بازدید</span>
                                        <span class="progress-number"><b>480</b>/800</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">تکیل شده</span>
                                        <span class="progress-number"><b>250</b>/500</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                                        <h5 class="description-header">$35,210.43</h5>
                                        <span class="description-text">درآمد کل</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                                        <h5 class="description-header"> ریال 10,390.90 </h5>
                                        <span class="description-text">هزینه کل</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                                        <h5 class="description-header">$24,813.53</h5>
                                        <span class="description-text">سود مجموع</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block">
                                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                                        <h5 class="description-header">1200</h5>
                                        <span class="description-text">تکمیل هدف</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-8">
                    <!-- MAP & BOX PANE -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">گزارش بازدید</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="row">
                                <div class="col-md-9 col-sm-8">
                                    <div class="pad">
                                        <!-- Map will be created here -->
                                        <div id="world-map-markers" style="height: 325px;"></div>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-3 col-sm-4">
                                    <div class="pad box-pane-right bg-green" style="min-height: 280px">
                                        <div class="description-block margin-bottom">
                                            <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                                            <h5 class="description-header">8390</h5>
                                            <span class="description-text">بازدیدها</span>
                                        </div>
                                        <!-- /.description-block -->
                                        <div class="description-block margin-bottom">
                                            <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                            <h5 class="description-header">30%</h5>
                                            <span class="description-text">معرفه ها</span>
                                        </div>
                                        <!-- /.description-block -->
                                        <div class="description-block">
                                            <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                            <h5 class="description-header">70%</h5>
                                            <span class="description-text">ارگانیک</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- DIRECT CHAT -->
                            <div class="box box-warning direct-chat direct-chat-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title">چت مستقیم</h3>

                                    <div class="box-tools pull-right">
                                        <span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                                            <i class="fa fa-comments"></i></button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body direction">
                                    <!-- Conversations are loaded here -->
                                    <div class="direct-chat-messages">
                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name pull-right">میثم </span>
                                                <span class="direct-chat-timestamp pull-left">23 Jan 2:00 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                متن ارسالی کاربر...
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name pull-left">سارا</span>
                                                <span class="direct-chat-timestamp pull-right">23 Jan 2:05 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                متن ارسالی کاربر...
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name pull-right">میثم </span>
                                                <span class="direct-chat-timestamp pull-left">23 Jan 5:37 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                متن ارسالی کاربر...
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name pull-left">سارا</span>
                                                <span class="direct-chat-timestamp pull-right">23 Jan 6:10 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                متن ارسالی کاربر...
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                    </div>
                                    <!--/.direct-chat-messages-->

                                    <!-- Contacts are loaded here -->
                                    <div class="direct-chat-contacts">
                                        <ul class="contacts-list">
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Image">

                                                    <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Count Dracula
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Image">

                                                    <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Sarah Doe
                                  <small class="contacts-list-date pull-right">2/23/2015</small>
                                </span>
                                                        <span class="contacts-list-msg">I will be waiting for...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Image">

                                                    <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nadia Jolie
                                  <small class="contacts-list-date pull-right">2/20/2015</small>
                                </span>
                                                        <span class="contacts-list-msg">I'll call you back at...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Image">

                                                    <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nora S. Vans
                                  <small class="contacts-list-date pull-right">2/10/2015</small>
                                </span>
                                                        <span class="contacts-list-msg">Where is your new...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Image">

                                                    <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  John K.
                                  <small class="contacts-list-date pull-right">1/27/2015</small>
                                </span>
                                                        <span class="contacts-list-msg">Can I take a look at...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Image">

                                                    <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Kenneth M.
                                  <small class="contacts-list-date pull-right">1/4/2015</small>
                                </span>
                                                        <span class="contacts-list-msg">Never mind I found...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                        </ul>
                                        <!-- /.contatcts-list -->
                                    </div>
                                    <!-- /.direct-chat-pane -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="متن پیام..." class="form-control">
                                            <span class="input-group-btn">
                            <button type="button" class="btn btn-warning btn-flat">ارسال</button>
                          </span>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-footer-->
                            </div>
                            <!--/.direct-chat -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <!-- USERS LIST -->
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">آخرین کاربران</h3>

                                    <div class="box-tools pull-right">
                                        <span class="label label-danger">8 تعداد کاربران</span>
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <ul class="users-list clearfix">
                                        <li>
                                            <img src="dist/img/user1-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Alexander Pierce</a>
                                            <span class="users-list-date">Today</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user8-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#"> جعفری</a>
                                            <span class="users-list-date">Yesterday</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user7-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Jane</a>
                                            <span class="users-list-date">12 Jan</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user6-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">John</a>
                                            <span class="users-list-date">12 Jan</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user2-160x160.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Alexander</a>
                                            <span class="users-list-date">13 Jan</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user5-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Nora</a>
                                            <span class="users-list-date">14 Jan</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user4-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Nora</a>
                                            <span class="users-list-date">15 Jan</span>
                                        </li>
                                        <li>
                                            <img src="dist/img/user3-128x128.jpg" alt="User Image">
                                            <a class="users-list-name" href="#">Nadia</a>
                                            <span class="users-list-date">15 Jan</span>
                                        </li>
                                    </ul>
                                    <!-- /.users-list -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer text-center">
                                    <a href="javascript:void(0)" class="uppercase">مشاهده تمامی کاربران </a>
                                </div>
                                <!-- /.box-footer -->
                            </div>
                            <!--/.box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- TABLE: LATEST ORDERS -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">آخرین سفارش ها</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body direction">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                    <tr>
                                        <th>شناسه</th>
                                        <th>تعداد</th>
                                        <th>وضعیت</th>
                                        <th>محبوبیت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                        <td>محصول شماره ۱</td>
                                        <td><span class="label label-success">حمل</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                        <td>محصول شماره ۲</td>
                                        <td><span class="label label-warning">در انتظار تایید</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>محصول شماره ۳</td>
                                        <td><span class="label label-danger">ارسال شده</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>محصول شماره ۴</td>
                                        <td><span class="label label-info">در حال پیگیری</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                        <td>محصول شماره ۵</td>
                                        <td><span class="label label-warning">پرداخت شده</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                        <td>محصول شماره ۶</td>
                                        <td><span class="label label-danger">دریاف شده</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                        <td>محصول شماره ۷</td>
                                        <td><span class="label label-success">حمل</span></td>
                                        <td>
                                            <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-right">ایجاد سفارش</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-left">مشاهده همه</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->

                <div class="col-md-4">
                    <!-- Info Boxes Style 2 -->
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">فهرست</span>
                            <span class="info-box-number">5,200</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">
                    50% افزایش در 30 روز
                  </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">برگزیده ها</span>
                            <span class="info-box-number">92,050</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 20%"></div>
                            </div>
                            <span class="progress-description">
                    20% افزایش در 30 روز
                  </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box bg-red">
                        <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">دانلود ها</span>
                            <span class="info-box-number">114,381</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                    70% افزایش در 30 روز
                  </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">پیام مستقیم</span>
                            <span class="info-box-number">163,921</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 40%"></div>
                            </div>
                            <span class="progress-description">
                    40% افزایش در 30 روز
                  </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->

                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">مرورگرها</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="chart-responsive">
                                        <canvas id="pieChart" height="150"></canvas>
                                    </div>
                                    <!-- ./chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <ul class="chart-legend clearfix">
                                        <li> کروم <i class="fa fa-circle-o text-red"></i></li>
                                        <li> IE <i class="fa fa-circle-o text-green"></i></li>
                                        <li> فایر فاکس <i class="fa fa-circle-o text-yellow"></i></li>
                                        <li> سافاری <i class="fa fa-circle-o text-aqua"></i></li>
                                        <li> اپرا<i class="fa fa-circle-o text-light-blue"></i></li>
                                        <li> Navigator <i class="fa fa-circle-o text-gray"></i></li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">ایالات متحده
                                        <span class="pull-left text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                                <li><a href="#">هند <span class="pull-left text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                                </li>
                                <li><a href="#">چین
                                        <span class="pull-left text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
                            </ul>
                        </div>
                        <!-- /.footer -->
                    </div>
                    <!-- /.box -->

                    <!-- PRODUCT LIST -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">لیست محصول</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body direction">
                            <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <div class="product-img">
                                        <img src="dist/img/default-50x50.gif" alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">محصول شماره ۱
                                            <span class="label label-warning pull-left">$1800</span></a>
                                        <span class="product-description">
                          توضیحات مختصر درباره محصول...

                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-img">
                                        <img src="dist/img/default-50x50.gif" alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">محصول شماره 2
                                            <span class="label label-info pull-left">$700</span></a>
                                        <span class="product-description">
                          توضیحات مختصر درباره محصول...

                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-img">
                                        <img src="dist/img/default-50x50.gif" alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">محصول شماره 3 <span class="label label-danger pull-left">$350</span></a>
                                        <span class="product-description">
                          توضیحات مختصر درباره محصول...

                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                                <li class="item">
                                    <div class="product-img">
                                        <img src="dist/img/default-50x50.gif" alt="Product Image">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">محصول شماره 4
                                            <span class="label label-success pull-left">$399</span></a>
                                        <span class="product-description">
                          توضیحات مختصر درباره محصول...
                        </span>
                                    </div>
                                </li>
                                <!-- /.item -->
                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">View All Products</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection

@section('backend-scripts')
@endsection
