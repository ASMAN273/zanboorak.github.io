
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://localhost/zanboorak/public/profile" class="brand-link">
        <img src="/zanboorak/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div align="center" class="center-block">
                <div >
                    <img src="{{asset('upload/image/profile/'.Auth::user()->picture)}}"
                         class="img-circle elevation-6" alt="User Image"
                    width="100" height="100">
                </div>
                <div class="info">

                    <a href="#" class="d-block">{{ Auth::user()->name }} </a>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        خروج
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">

                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-pie-chart"></i>
                            <p>
                                امکانات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="http://localhost/zanboorak/public"  class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>صفحه اصلی سایت</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-tree"></i>
                            <p>
                                تبلیغات
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("tabligh")}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>تبلیغات</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("createtabligh")}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>اضافه کردن تبلیغ</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{route("mainpage")}}" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                مطالب سایت
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("mainpage")}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>نمایش مطالب سایت</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("addpage")}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>اضافه کردن مطلب جدید</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("addgroups")}}" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>دسته بندی </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">داشبورد</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

