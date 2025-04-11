<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techzaa.in/velonic/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Apr 2025 07:58:52 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Log In | Velonic - Bootstrap 5 Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('admin/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-lg-10">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6 d-none d-lg-block p-2">
                                    <img src="{{ asset('admin/images/auth-img.jpg') }}" alt=""
                                        class="img-fluid rounded h-100">
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <div class="auth-brand p-4">
                                            <a href="/" class="logo-light">
                                                <img src="{{ asset('admin/images/logo.png') }}" alt="logo" height="22">
                                            </a>
                                            <a href="/" class="logo-dark">
                                                <img src="{{ asset('admin/images/logo.png') }}" alt="dark logo" height="22">
                                            </a>
                                        </div>
                                        <div class="p-4 my-auto">
                                            <h4 class="fs-20">Sign In</h4>
                                            <p class="text-muted mb-3">Enter your email address and password to access
                                                account.
                                            </p>

                                            <!-- form -->
                                            <form action="{{ route('admin.login.post') }}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="emailaddress" class="form-label">Email address</label>
                                                    <input name="email" class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                                </div>
                                                <div class="mb-3">
                                                    <a href="auth-forgotpw.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                                                    <label for="password" class="form-label">Password</label>
                                                    <input name="password" class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                                </div>
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="mb-0 text-start">
                                                    <button class="btn btn-soft-primary w-100" type="submit"><i class="ri-login-circle-fill me-1"></i> <span class="fw-bold">Log In</span></button>
                                                </div>
                                            </form>
                                            <!-- end form-->
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-dark-emphasis">Don't have an account? <a href="auth-register.html"
                                class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Sign
                                    up</b></a>
                        </p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
            <script>
                document.write(new Date().getFullYear())
            </script> © Velonic - Theme by Techzaa
        </span>
    </footer>
    <!-- Vendor js -->
    <script src="{{ asset('admin/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/js/app.min.js') }}"></script>

</body>


<!-- Mirrored from techzaa.in/velonic/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Apr 2025 07:58:52 GMT -->

</html>
