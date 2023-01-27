<template>
    <div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name">Administration
            <a href="javascript:void(0)" class="menu_option float-right">
                <i class="icon-grid font-16" v-tooltip.left="'Grid &amp; List Toggle'"></i>
            </a>
        </h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <!--
                    Hr
                -->
                <li class="g_heading">Hr</li>
                <li class="active">
                    <router-link :to="{name:'admin.dashboard'}">
                        <i class="icon-speedometer"></i><span>Dashboard</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{name:'admin.user.list'}">
                        <i class="icon-users"></i><span>Users</span>
                    </router-link>
                </li>
                <li>
                    <a href="hrms/departments" aria-expanded="false">
                        <i class="icon-control-pause"></i><span>Departments</span></a>
                </li>
                <li>
                    <a href="hrms/employee" aria-expanded="false">
                        <i class="icon-user"></i><span>Employee</span></a>
                </li>
                <li>
                    <a href="hrms/activities" aria-expanded="false">
                        <i class="icon-equalizer"></i><span>Activities</span></a>
                </li>
                <li>
                    <a href="hrms/holidays" aria-expanded="false">
                        <i class="icon-like"></i><span>Holidays</span>
                    </a>
                </li>
                <li>
                    <a href="hrms/events" aria-expanded="false">
                        <i class="icon-calendar"></i><span>Events</span>
                    </a>
                </li>
                <li>
                    <a href="hrms/payroll" aria-expanded="false">
                        <i class="icon-briefcase"></i><span>Payroll</span>
                    </a>
                </li>
                <li>
                    <a href="hrms/accounts" aria-expanded="false">
                        <i class="icon-credit-card"></i><span>Accounts</span>
                    </a>
                </li>
                <li>
                    <a href="hrms/report" aria-expanded="false"><
                        i class="icon-bar-chart"></i><span>Report</span>
                    </a>
                </li>
                <!--
                    Project
                -->
                <li class="g_heading">Project</li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow arrow-c" aria-expanded="false"><i class="icon-cup"></i><span>Project</span></a>
                    <ul aria-expanded="false" class="collapse" style="height: 0px;">
                        <li>
                            <router-link :to="{ name: 'admin.dashboard'}">Dashboard</router-link>
                        </li>
                        <li><a href="project/list">Project list</a></li>
                        <li><a href="project/taskboard">Taskboard</a></li>
                        <li><a href="project/ticket">Ticket List</a></li>
                        <li><a href="project/ticketdetails">Ticket Details</a></li>
                        <li><a href="project/clients">Clients</a></li>
                        <li><a href="project/todo">Todo List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow arrow-c" aria-expanded="false"><i class="icon-briefcase"></i><span>Job Portal</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="job/index3">Dashboard</a></li>
                        <li><a href="job/positions">Positions</a></li>
                        <li><a href="job/applicants">Applicants</a></li>
                        <li><a href="job/resumes">Resumes</a></li>
                        <li><a href="job/jobsettings">Settings</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow arrow-c" aria-expanded="false"><i class="icon-lock"></i><span>Authentication</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="authentication/login">Login</a></li>
                        <li><a href="authentication/register">Register</a></li>
                        <li><a href="authentication/forgotpassword">Forgot password</a></li>
                        <li><a href="authentication/error404">Error 404</a></li>
                        <li><a href="authentication/error500">Error 500</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</template>
<script>
export default {
    name: "LeftSidebar"
};
</script>
