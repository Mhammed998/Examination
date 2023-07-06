<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="/dashboard">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{__('strings.DASHBOARD')}}</span>
                            </div>
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
                            <div class="clearfix"></div>
                        </a>

                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#members">
                            <div class="pull-left"><i class="ti-user"></i><span
                                    class="right-nav-text">{{__('strings.MEMBERS')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="members" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('users.index')}}">{{__('strings.MEMBERS-MANAGEMENT')}}</a></li>
                            <li><a href="{{route('users.create')}}">{{__('strings.CREATE-MEMBER')}}</a></li>
                        </ul>
                    </li>
                    <!-- menu item -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#departments">
                            <div class="pull-left"><i class="ti-folder"></i><span
                                    class="right-nav-text">{{__('strings.STAGES')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="departments" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('educational-stages.index')}}">{{__('strings.STAGES-MANAGEMENT')}} </a> </li>
                            <li> <a href="{{route('educational-stages.create')}}">{{__('strings.CREATE-STAGE')}}</a> </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#courses">
                            <div class="pull-left"><i class="ti-clipboard"></i><span
                                    class="right-nav-text">{{__('strings.COURSES')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="courses" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="">{{__('strings.COURSES-MANAGEMENT')}} </a> </li>
                            <li> <a href="">{{__('strings.CREATE-COURSE')}}</a> </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#groups">
                            <div class="pull-left"><i class="ti-layers"></i><span
                                    class="right-nav-text">{{__('strings.GROUPS')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="groups" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="">{{__('strings.GROUPS-MANAGEMENT')}} </a> </li>
                            <li> <a href="">{{__('strings.CREATE-GROUP')}}</a> </li>
                        </ul>
                    </li>



                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#exams">
                            <div class="pull-left"><i class="ti-files"></i><span
                                    class="right-nav-text">{{__('strings.EXAMS')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="exams" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="">{{__('strings.EXAMS-MANAGEMENT')}} </a> </li>
                            <li> <a href="">{{__('strings.CREATE-EXAM')}}</a> </li>
                        </ul>
                    </li>



                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#questions">
                            <div class="pull-left"><i class="ti-pencil-alt"></i><span
                                    class="right-nav-text">{{__('strings.QUESTIONS')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="questions" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="">{{__('strings.QUESTIONS-MANAGEMENT')}} </a> </li>
                            <li> <a href="">{{__('strings.QUESTIONS-BANK')}} </a> </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#roles">
                            <div class="pull-left"><i class="ti-lock"></i><span
                                    class="right-nav-text">{{__('strings.ROLES-PERMISSIONS')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="roles" class="collapse" data-parent="#sidebarnav">
                            <li> <a href=""> {{__('strings.ROLES-MANAGEMENT')}} </a> </li>
                            <li> <a href=""> {{__('strings.CREATE-ROLE')}} </a> </li>
                        </ul>
                    </li>


                    <li>
                        <a href="mail-box.html"><i class="ti-email"></i><span class="right-nav-text">Mail
                                box</span> <span class="badge badge-pill badge-warning float-right mt-1">HOT</span> </a>
                    </li>
                    <!-- menu item Charts-->


                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Widgets, Forms & Tables </li>
                    <!-- menu item Widgets-->
                    <li>
                        <a href="widgets.html"><i class="ti-blackboard"></i><span class="right-nav-text">Widgets</span>
                            <span class="badge badge-pill badge-danger float-right mt-1">59</span> </a>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="ti-blackboard"></i><span class="right-nav-text">Widgets</span>
                            <span class="badge badge-pill badge-danger float-right mt-1">59</span> </a>
                    </li>






                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
