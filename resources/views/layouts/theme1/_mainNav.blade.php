<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <!-- User Profile-->
            <li>
                <!-- User Profile-->
                <div class="user-profile d-flex no-block dropdown m-t-20">
                    <div class="user-pic"><img src="{{ asset('theme1/assets/images/users/1.jpg') }}" alt="users" class="rounded-circle" width="40" /></div>
                    <div class="user-content hide-menu m-l-10">
                        <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h5 class="m-b-0 user-name font-medium">{{ auth()->user()->name }} <i class="fa fa-angle-down"></i></h5>
                            <span class="op-5 user-email">{{ auth()->user()->email }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <!-- End User Profile-->
            </li>
            <li class="p-15 m-t-10"><a href="javascript:void(0)" class="btn btn-block create-btn text-white no-block d-flex align-items-center"><i class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Create New</span> </a></li>
            <!-- User Profile-->
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('user.profile') }}" aria-expanded="false"><i class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('category.index') }}" aria-expanded="false"><i class="mdi mdi-checkerboard"></i><span class="hide-menu">Categories</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('author.index') }}" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Authors</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('post.index') }}" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Posts</span></a></li>
        </ul>

    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
