<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techzaa.in/velonic/layouts// by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Apr 2025 07:58:08 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Velonic - Bootstrap 5 Admin & Dashboard
        Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">
    <script src="{{ asset('admin/js/config.js') }}"></script>
    <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href=" {{ asset('admin/css/createpost.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="{{ route('index.index') }}" class="logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/logo.png" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="small logo">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="{{ route('index.index') }}" class="logo-dark">
                            <span class="logo-lg">
                                <img src="{{ asset('admin/images/logo.png') }}" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="small logo">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="ri-menu-line"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                    <!-- Topbar Search Form -->
                    <div class="app-search d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search...">
                                <span class="ri-search-line search-icon text-muted"></span>
                            </div>
                        </form>
                    </div>
                </div>

                <ul class="topbar-menu d-flex align-items-center gap-3">
                    <li class="dropdown d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-search-line fs-22"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="search" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                            <span class="align-middle d-none d-lg-inline-block">English</span>
                            <i class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1"
                                    height="12">
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1"
                                    height="12"> <span class="align-middle">Russian</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-mail-line fs-22"></i>
                            <span class="noti-icon-badge badge text-bg-purple">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                            <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold">
                                            Messages</h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                            <small>Clear All</small>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div style="max-height: 300px;" data-simplebar>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-1.jpg"
                                                        class="img-fluid rounded-circle" alt />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold fs-14">Cristina
                                                    Pride <small class="fw-normal text-muted float-end ms-1">1
                                                        day ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Hi,
                                                    How are you? What about
                                                    our
                                                    next meeting</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-2.jpg"
                                                        class="img-fluid rounded-circle" alt />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold fs-14">Sam
                                                    Garret <small class="fw-normal text-muted float-end ms-1">2
                                                        day ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Yeah
                                                    everything is
                                                    fine</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-3.jpg"
                                                        class="img-fluid rounded-circle" alt />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold fs-14">Karen
                                                    Robinson <small class="fw-normal text-muted float-end ms-1">2
                                                        day ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Wow
                                                    that's great</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-4.jpg"
                                                        class="img-fluid rounded-circle" alt />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold fs-14">Sherry
                                                    Marshall <small class="fw-normal text-muted float-end ms-1">3
                                                        day ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Hi,
                                                    How are you? What about
                                                    our
                                                    next meeting</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item read-noti card m-0 shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-5.jpg"
                                                        class="img-fluid rounded-circle" alt />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold fs-14">Shawn
                                                    Millard <small class="fw-normal text-muted float-end ms-1">4
                                                        day ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Yeah
                                                    everything is
                                                    fine</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-notification-3-line fs-22"></i>
                            <span class="noti-icon-badge badge text-bg-pink">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                            <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold">
                                            Notification</h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                            <small>Clear All</small>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div style="max-height: 300px;" data-simplebar>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary-subtle">
                                        <i class="mdi mdi-comment-account-outline text-primary"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar
                                        commented on Admin
                                        <small class="noti-time">1 min
                                            ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning-subtle">
                                        <i class="mdi mdi-account-plus text-warning"></i>
                                    </div>
                                    <p class="notify-details">New user
                                        registered.
                                        <small class="noti-time">5 hours
                                            ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger-subtle">
                                        <i class="mdi mdi-heart text-danger"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch
                                        liked
                                        <small class="noti-time">3 days
                                            ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-pink-subtle">
                                        <i class="mdi mdi-comment-account-outline text-pink"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar
                                        commented on Admi
                                        <small class="noti-time">4 days
                                            ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-purple-subtle">
                                        <i class="mdi mdi-account-plus text-purple"></i>
                                    </div>
                                    <p class="notify-details">New user
                                        registered.
                                        <small class="noti-time">7 days
                                            ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success-subtle">
                                        <i class="mdi mdi-heart text-success"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch
                                        liked <b>Admin</b>.
                                        <small class="noti-time">Carlos
                                            Crouch liked</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary text-decoration-underline fw-bold notify-item border-top border-light py-2">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="d-none d-sm-inline-block">
                        <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                            <i class="ri-settings-3-line fs-22"></i>
                        </a>
                    </li>

                    <li class="d-none d-sm-inline-block">
                        <div class="nav-link" id="light-dark-mode">
                            <i class="ri-moon-line fs-22"></i>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user-image"
                                    width="32" class="rounded-circle">
                            </span>
                            <span class="d-lg-block d-none">
                                <h5 class="my-0 fw-normal">
                                    {{ Auth::user()->name ?? 'Guest' }}
                                    <i class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i>
                                </h5>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Xin chào, {{ Auth::user()->name ?? 'Guest' }}!</h6>
                            </div>

                            <a href="" class="dropdown-item">
                                <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                                <span>Tài khoản</span>
                            </a>

                            <a href="#" class="dropdown-item">
                                <i class="ri-settings-4-line fs-18 align-middle me-1"></i>
                                <span>Cài đặt</span>
                            </a>

                            <a href="#" class="dropdown-item">
                                <i class="ri-customer-service-2-line fs-18 align-middle me-1"></i>
                                <span>Hỗ trợ</span>
                            </a>

                            <a href="#" class="dropdown-item">
                                <i class="ri-lock-password-line fs-18 align-middle me-1"></i>
                                <span>Khóa màn hình</span>
                            </a>

                            <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                                    <span>Đăng xuất</span>
                                </button>
                            </form>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="/" class="logo logo-light">
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="{{ route('index.index') }}" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="{{ asset('admin/images/logo.png') }}" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title">Main</li>

                    <li class="side-nav-item">
                        <a href="{{ route('index.index') }}" class="side-nav-link">
                            <i class="ri-dashboard-3-line"></i>
                            <span class="badge bg-success float-end">9+</span>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarCategory" aria-expanded="false"
                            aria-controls="sidebarCategory" class="side-nav-link">
                            <i class="ri-pages-line"></i>
                            <span> Quản lý chuyên mục </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCategory" data-bs-parent="#sidebarMenu">
                            <ul class="side-nav-second-level">
                                <li><a href="{{ route('categories.create') }}">Thêm chuyên mục</a></li>
                                <li><a href="{{ route('categories.index') }}">Danh sách chuyên mục</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPost" aria-expanded="false"
                            aria-controls="sidebarPost" class="side-nav-link">
                            <i class="fa-regular fa-newspaper"></i>
                            <span> Quản lý bài viết </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPost" data-bs-parent="#sidebarMenu">
                            <ul class="side-nav-second-level">
                                <li><a href="{{ route('news.create') }}">Thêm bài viết</a></li>
                                <li><a href="{{ route('news.index') }}">Danh sách bài viết</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarUnits" aria-expanded="false"
                            aria-controls="sidebarUnits" class="side-nav-link">
                            <i class="fa-regular fa-calendar"></i>
                            <span> Quản lý đơn vị</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarUnits">
                            <ul class="side-nav-second-level">
                                <li><a href="{{ route('units.create') }}">Thêm đơn vị</a></li>
                                <li><a href="{{ route('units.index') }}">Danh sách đơn vị</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPlatform" aria-expanded="false"
                            aria-controls="sidebarPlatform" class="side-nav-link">
                            <i class="fa-regular fa-calendar"></i>
                            <span> Quản lý nền tảng </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPlatform">
                            <ul class="side-nav-second-level">
                                <li><a href="{{ route('articles.create') }}">Thêm nền tảng</a></li>
                                <li><a href="{{ route('articles.index') }}">Danh sách nền tảng</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarComment" aria-expanded="false"
                            aria-controls="sidebarComment" class="side-nav-link">
                            <i class="ri-pages-line"></i>
                            <span> Quản lý bình luận </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarComment">
                            <ul class="side-nav-second-level">
                                <li><a href="#">Danh sách bình luận</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false"
                            aria-controls="sidebarPagesAuth" class="side-nav-link">
                            <i class="ri-group-2-line"></i>
                            <span> Authentication </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPagesAuth">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="auth-login.html">Login</a>
                                </li>
                                <li>
                                    <a href="auth-register.html">Register</a>
                                </li>
                                <li>
                                    <a href="auth-logout.html">Logout</a>
                                </li>
                                <li>
                                    <a href="auth-forgotpw.html">Forgot
                                        Password</a>
                                </li>
                                <li>
                                    <a href="auth-lock-screen.html">Lock
                                        Screen</a>
                                </li>
                            </ul>
                        </div>
                    </li>



                    <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
