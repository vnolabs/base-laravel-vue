<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="9GYHUetcPvC3BlQHeZXXDo6SZ9HyiJP2UnS2mniS">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <title>Dashboard - Laravel</title>
    <meta name="description" content="Laravel">
    <meta name="author" content="Laravel">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/theme1.css">
</head>

<body class="font-roboto">
<!-- Page Loader -->
<div class="page-loader-wrapper" style="display: none;">
    <div class="loader">
    </div>
</div>
<div id="main_content">
    <div id="header_top" class="header_top dark">
        <div class="container">
            <div class="hleft">
                <a class="header-brand" href="hrms/index"><i class="fe fe-command brand-logo"></i></a>
                <div class="dropdown">
                    <a href="pages/search" class="nav-link icon"><i class="fa fa-search"></i></a>
                    <a href="pages/calendar" class="nav-link icon app_inbox"><i class="fa fa-calendar"></i></a>
                    <a href="pages/contact" class="nav-link icon xs-hide"><i class="fa fa-id-card-o"></i></a>
                    <a href="chatapp/chat" class="nav-link icon xs-hide"><i class="fa fa-comments-o"></i></a>
                    <a href="pages/filemanager" class="nav-link icon app_file xs-hide"><i class="fa fa-folder-o"></i></a>
                </div>
            </div>
            <div class="hright">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar" src="assets/images/user.png" alt="" data-toggle="tooltip" data-placement="right" title="" data-original-title="User Menu"></a>
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa  fa-align-left"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="user_div">
        <h5 class="brand-name mb-4">Epic HR<a href="javascript:void(0)" class="user_btn"><i class="icon-logout"></i></a></h5>
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <img class="avatar avatar-xl mr-3" src="assets/images/sm/avatar1.jpg" alt="avatar">
                    <div class="media-body">
                        <h5 class="m-0">Sara Hopkins</h5>
                        <p class="text-muted mb-0">Webdeveloper</p>
                        <ul class="social-links list-inline mb-0 mt-2">
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="1234567890"><i class="fa fa-phone"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="@skypename"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Statistics</h3>
                <div class="card-options">
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <label class="mb-0">Balance</label>
                            <h4 class="font-30 font-weight-bold">$545</h4>
                        </div>
                        <div class="col-6 pb-3">
                            <label class="mb-0">Growth</label>
                            <h4 class="font-30 font-weight-bold">27%</h4>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="d-block">Total Income<span class="float-right">77%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="d-block">Total Expenses <span class="float-right">50%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <label class="d-block">Gross Profit <span class="float-right">23%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card b-none">
            <ul class="list-group">
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-blue"><i class="fa fa-credit-card"></i> </div>
                    <div class="ml-3">
                        <div>+$29 New sale</div>
                        <a href="javascript:void(0)">Admin Template</a>
                        <div class="text-muted font-12">5 min ago</div>
                    </div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-pink"><i class="fa fa-upload"></i> </div>
                    <div class="ml-3">
                        <div>Project Update</div>
                        <a href="javascript:void(0)">New HTML page</a>
                        <div class="text-muted font-12">10 min ago</div>
                    </div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-teal"><i class="fa fa-file-word-o"></i> </div>
                    <div class="ml-3">
                        <div>You edited the file</div>
                        <a href="javascript:void(0)">reposrt.doc</a>
                        <div class="text-muted font-12">11 min ago</div>
                    </div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-cyan"><i class="fa fa-user"></i> </div>
                    <div class="ml-3">
                        <div>New user</div>
                        <a href="javascript:void(0)">Puffin web - view</a>
                        <div class="text-muted font-12">17 min ago</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name">Epic HR <a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="" data-original-title="Grid &amp; List Toggle"></i></a></h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <li class="g_heading">Hr</li>
                <li class="active"><a href="hrms/index" aria-expanded="false"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                <li class=""><a href="hrms/users" aria-expanded="false"><i class="icon-users"></i><span>Users</span></a></li>
                <li class=""><a href="hrms/departments" aria-expanded="false"><i class="icon-control-pause"></i><span>Departments</span></a></li>
                <li class=""><a href="hrms/employee" aria-expanded="false"><i class="icon-user"></i><span>Employee</span></a></li>
                <li class=""><a href="hrms/activities" aria-expanded="false"><i class="icon-equalizer"></i><span>Activities</span></a></li>
                <li class=""><a href="hrms/holidays" aria-expanded="false"><i class="icon-like"></i><span>Holidays</span></a></li>
                <li class=""><a href="hrms/events" aria-expanded="false"><i class="icon-calendar"></i><span>Events</span></a></li>
                <li class=""><a href="hrms/payroll" aria-expanded="false"><i class="icon-briefcase"></i><span>Payroll</span></a></li>
                <li class=""><a href="hrms/accounts" aria-expanded="false"><i class="icon-credit-card"></i><span>Accounts</span></a></li>
                <li class=""><a href="hrms/report" aria-expanded="false"><i class="icon-bar-chart"></i><span>Report</span></a></li>
                <li class="g_heading">Project</li>
                <li class="">
                    <a href="javascript:void(0)" class="has-arrow arrow-c" aria-expanded="false"><i class="icon-cup"></i><span>Project</span></a>
                    <ul aria-expanded="false" class="collapse" style="height: 0px;">
                        <li class=""><a href="project/index2">Dashboard</a></li>
                        <li class=""><a href="project/list">Project list</a></li>
                        <li class=""><a href="project/taskboard">Taskboard</a></li>
                        <li class=""><a href="project/ticket">Ticket List</a></li>
                        <li class=""><a href="project/ticketdetails">Ticket Details</a></li>
                        <li class=""><a href="project/clients">Clients</a></li>
                        <li class=""><a href="project/todo">Todo List</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:void(0)" class="has-arrow arrow-c" aria-expanded="false"><i class="icon-briefcase"></i><span>Job Portal</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li class=""><a href="job/index3">Dashboard</a></li>
                        <li class=""><a href="job/positions">Positions</a></li>
                        <li class=""><a href="job/applicants">Applicants</a></li>
                        <li class=""><a href="job/resumes">Resumes</a></li>
                        <li class=""><a href="job/jobsettings">Settings</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:void(0)" class="has-arrow arrow-c" aria-expanded="false"><i class="icon-lock"></i><span>Authentication</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li class=""><a href="authentication/login">Login</a></li>
                        <li class=""><a href="authentication/register">Register</a></li>
                        <li class=""><a href="authentication/forgotpassword">Forgot password</a></li>
                        <li class=""><a href="authentication/error404">Error 404</a></li>
                        <li class=""><a href="authentication/error500">Error 500</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="page">
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Dashboard</h1>
                        <div class="input-icon xs-hide">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-icon-addon"><i class="fe fe-search"></i></span>
                        </div>
                    </div>
                    <div class="right">
                        <ul class="nav nav-pills">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="assets/images/flags/us.svg">English</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="assets/images/flags/es.svg">Spanish</a>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="assets/images/flags/jp.svg">japanese</a>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="assets/images/flags/bl.svg">France</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a>
                                    <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-word-o"></i> MS Word</a>
                                    <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-pdf-o"></i> PDF</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Project</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Graphics Design</a>
                                    <a class="dropdown-item" href="#">Angular Admin</a>
                                    <a class="dropdown-item" href="#">PSD to HTML</a>
                                    <a class="dropdown-item" href="#">iOs App Development</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Home Development</a>
                                    <a class="dropdown-item" href="#">New Blog post</a>
                                </div>
                            </li>
                        </ul>
                        <div class="notification d-flex">
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="right_chat list-unstyled w250 p-0">
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Donald Gardner</span>
                                                        <span class="message">Designer, Blogger</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Wendy Keen</span>
                                                        <span class="message">Java Developer</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Matt Rosales</span>
                                                        <span class="message">CEO, Epic Theme</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Phillip Smith</span>
                                                        <span class="message">Writter, Mag Editor</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                                <small>WE have fix all Design bug with Responsive</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                                <small>I feel great! Thanks team</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                                <small>It will give a smart finishing to your site</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                                <small>Your connection is not private</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                                <small>You received a new oder from Tina.</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                                    <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                                    <a class="dropdown-item" href="login.html"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <h4>Welcome Jason Porter!</h4>
                            <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box green">5</div>
                                <a href="hrms/users" class="my_sort_cut text-muted">
                                    <i class="icon-users"></i>
                                    <span>Users</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="hrms/holidays" class="my_sort_cut text-muted">
                                    <i class="icon-like"></i>
                                    <span>Holidays</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box orange">8</div>
                                <a href="hrms/events" class="my_sort_cut text-muted">
                                    <i class="icon-calendar"></i>
                                    <span>Events</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="hrms/payroll" class="my_sort_cut text-muted">
                                    <i class="icon-credit-card"></i>
                                    <span>Payroll</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="hrms/accounts" class="my_sort_cut text-muted">
                                    <i class="icon-calculator"></i>
                                    <span>Accounts</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="hrms/report" class="my_sort_cut text-muted">
                                    <i class="icon-pie-chart"></i>
                                    <span>Report</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="row clearfix row-deck">
                    <div class="col-xl-9 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Salary Statistics</h3>
                                <div class="card-options">
                                    <label class="custom-switch m-0">
                                        <input type="checkbox" value="1" class="custom-switch-input" checked="">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apex-basic-column" style="min-height: 365px;"></div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 610px; height: 406px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="javascript:void(0)" class="btn btn-info btn-sm w200 mr-3">Generate Report</a>
                                    <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">My Balance</h3>
                            </div>
                            <div class="card-body">
                                <span>Balance</span>
                                <h4>$<span class="counter">20,508</span></h4>
                                <div id="apexspark1" class="mb-4" style="min-height: 120px;"></div>
                                <div class="form-group">
                                    <label class="d-block">Bank of America <span class="float-right">$<span class="counter">15,025</span></span></label>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-azure" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">RBC Bank <span class="float-right">$<span class="counter">1,843</span></span></label>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Frost Bank <span class="float-right">$<span class="counter">3,640</span></span></label>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 298px; height: 413px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void(0)" class="btn btn-block btn-info btn-sm">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix row-deck">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Employee Structure</h3>
                            </div>
                            <div class="card-body text-center">
                                <div id="apex-basic-bar" style="height: 220px; min-height: 365px;"></div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 402px; height: 406px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Employee Satisfaction</h3>
                            </div>
                            <div class="card-body text-center">
                                <div id="apex-radar-multiple-series" style="height: 220px; min-height: 365px;"></div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 402px; height: 406px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Performance</h3>
                            </div>
                            <div class="card-body">
                                <span>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></span>
                                <ul class="list-group mt-3 mb-0">
                                    <li class="list-group-item">
                                        <div class="clearfix">
                                            <div class="float-left"><strong>35%</strong></div>
                                            <div class="float-right"><small class="text-muted">Design Team</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-azure" role="progressbar" style="width: 35%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="clearfix">
                                            <div class="float-left"><strong>25%</strong></div>
                                            <div class="float-right"><small class="text-muted">Developer Team</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-green" role="progressbar" style="width: 25%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="clearfix">
                                            <div class="float-left"><strong>15%</strong></div>
                                            <div class="float-right"><small class="text-muted">Marketing</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-orange" role="progressbar" style="width: 15%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="clearfix">
                                            <div class="float-left"><strong>20%</strong></div>
                                            <div class="float-right"><small class="text-muted">Management</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-indigo" role="progressbar" style="width: 20%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="clearfix">
                                            <div class="float-left"><strong>11%</strong></div>
                                            <div class="float-right"><small class="text-muted">Other</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-pink" role="progressbar" style="width: 11%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Project Summary</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped text-nowrap table-vcenter mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Client Name</th>
                                            <th>Team</th>
                                            <th>Project</th>
                                            <th>Project Cost</th>
                                            <th>Payment</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#AD1245</td>
                                            <td>Sean Black</td>
                                            <td>
                                                <ul class="list-unstyled team-info sm margin-0 w150">
                                                    <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                    <li class="ml-2"><span>2+</span></li>
                                                </ul>
                                            </td>
                                            <td>Angular Admin</td>
                                            <td>$14,500</td>
                                            <td>Done</td>
                                            <td><span class="tag tag-success">Delivered</span></td>
                                        </tr>
                                        <tr>
                                            <td>#DF1937</td>
                                            <td>Sean Black</td>
                                            <td>
                                                <ul class="list-unstyled team-info sm margin-0 w150">
                                                    <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                    <li class="ml-2"><span>2+</span></li>
                                                </ul>
                                            </td>
                                            <td>Angular Admin</td>
                                            <td>$14,500</td>
                                            <td>Pending</td>
                                            <td><span class="tag tag-success">Delivered</span></td>
                                        </tr>
                                        <tr>
                                            <td>#YU8585</td>
                                            <td>Merri Diamond</td>
                                            <td>
                                                <ul class="list-unstyled team-info sm margin-0 w150">
                                                    <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td>One page html Admin</td>
                                            <td>$500</td>
                                            <td>Done</td>
                                            <td><span class="tag tag-orange">Submit</span></td>
                                        </tr>
                                        <tr>
                                            <td>#AD1245</td>
                                            <td>Sean Black</td>
                                            <td>
                                                <ul class="list-unstyled team-info sm margin-0 w150">
                                                    <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td>Wordpress One page</td>
                                            <td>$1,500</td>
                                            <td>Done</td>
                                            <td><span class="tag tag-success">Delivered</span></td>
                                        </tr>
                                        <tr>
                                            <td>#GH8596</td>
                                            <td>Allen Collins</td>
                                            <td>
                                                <ul class="list-unstyled team-info sm margin-0 w150">
                                                    <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                    <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                                    <li class="ml-2"><span>2+</span></li>
                                                </ul>
                                            </td>
                                            <td>VueJs Application</td>
                                            <td>$9,500</td>
                                            <td>Done</td>
                                            <td><span class="tag tag-success">Delivered</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Copyright © 2019 <a href="https://themeforest.net/user/puffintheme/portfolio">PuffinTheme</a>.
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="javascript:void(0)">Documentation</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="assets/js/lib.vendor.bundle.js"></script>
<script src="assets/js/apexcharts.bundle.js"></script>
<script src="assets/js/counterup.bundle.js"></script>
<script src="assets/js/knobjs.bundle.js"></script>
<script src="assets/js/core.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>
