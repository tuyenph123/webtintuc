<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('client/css/listunit.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/showunit.css') }}">

</head>

<body>
    <div class="unit__menu">
        <div class="unit__menu-logo">
            <img src="{{ asset('client/img/logo.png') }}" alt="Logo">
        </div>
        <div class="unit__menu-list">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><a class="active" href="">Nền tảng đồng hành</a></li>
                <li><a href="">Tin tức</a></li>
                <li><a href="">Hướng dẫn sử dụng</a></li>
                <li class="unit__Login">
                    <a class="unit__a" style="color: white; cursor: pointer;" onclick="toggleLogin()">Đăng nhập</a>
                </li>

                <div id="loginModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="toggleLogin()">&times;</span>
                        <h6>Đăng nhập</h6>
                        <h2>Để tham gia SMEdx ngay.</h2>
                        <form class="form__modal-login" method="POST" action="">
                            @csrf
                            <label>Email:</label>
                            <input type="email" name="email" required>

                            <label>Mật khẩu:</label>
                            <input type="password" name="password" required>

                            <button type="submit">Đăng nhập</button>
                            <div class="login__list">
                                <div class="login__item">
                                    <input type="checkbox" id="remember">
                                    <span for="remember">Giữ trạng thái đăng nhập</span>
                                </div>
                                <div class="login__item">
                                    <a href="#">Quên mật khẩu?</a>
                                </div>
                            </div>
                            <div class="login__footer">
                                <p>Chưa có tài khoản? <a href="#">Tạo tài khoản</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class="show__unit">
        <div class="show__unit-tong">
            <div class="show__unit-left">
                <div class="show__unit-left__title">
                    <h2>Nền tảng đồng hành | {{ $showUnit->title }}</h2>
                    <div class="show__unit-left__img">
                        <img src="{{ $showUnit->image }}"
                            alt="">
                        <div class="show__unit-left-info">
                            <h1>{{ $showUnit->title }} <i class="fa-solid fa-circle-check"></i></h1>
                            <p>Doanh nghiệp đã xác minh <br>
                                1 lượt yêu thích | 7 lượt đăng ký sử dụng</p>
                            <div class="show__unit-left-btn">
                                <button class="btn-1"><i class="fa-solid fa-thumbs-up"></i> Yêu thích</button>
                                <button class="btn-2">Đăng ký sử dụng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="show__unit-left__content">
                       {!! $showUnit->content !!}
                </div>
            </div>
            <div class="show__unit-right">
                <div class="show__unit-right__title">
                    <h2>Truyền thông nói gì
                        <br> về chúng tôi?
                    </h2>
                </div>
                <div class="show__unit-right__post-list">
                    <div class="show__unit-right__post-item">
                        <img src="https://ict-imgs.vgcloud.vn/2022/04/20/15/giai-phap-ho-tro-bao-ve-tre-em-tren-mang-voi-chi-phi-chua-den-1-000-dong-ngay.JPG"
                            alt="">
                        <h3>Giải pháp hỗ trợ bảo vệ trẻ em trên <br> mạng với chi phí chưa đến 1.000 <br> đồng/ngày</h3>
                        <p>Safe Mobile được xây dựng bởi đội ngũ <br> người Việt theo đúng tinh thần “Make in <br>
                            Vietnam”.
                            Ứng dụng
                            được cung cấp qua <br> nhà mạng với gói 1 năm chỉ 299.000 đồng <br>, nghĩa là chưa đến 1.000
                            đồng/ngày để
                            hỗ <br> trợ phụ huynh bảo vệ con mình</p>
                        <a href="">Chi tiết</a>
                    </div>
                    <div class="show__unit-right__post-item">
                        <img src="https://ict-imgs.vgcloud.vn/2022/04/20/15/giai-phap-ho-tro-bao-ve-tre-em-tren-mang-voi-chi-phi-chua-den-1-000-dong-ngay.JPG"
                            alt="">
                        <h3>Giải pháp hỗ trợ bảo vệ trẻ em trên <br> mạng với chi phí chưa đến 1.000 <br> đồng/ngày</h3>
                        <p>Safe Mobile được xây dựng bởi đội ngũ <br> người Việt theo đúng tinh thần “Make in <br>
                            Vietnam”.
                            Ứng dụng
                            được cung cấp qua <br> nhà mạng với gói 1 năm chỉ 299.000 đồng <br>, nghĩa là chưa đến 1.000
                            đồng/ngày để
                            hỗ <br> trợ phụ huynh bảo vệ con mình</p>
                        <a href="">Chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="show__unit-new__title">
            <h2> Bài đăng của doanh nghiệp</h2>
        </div>
        <div class="show__unit-comment">
            <div class="show__unit-comment__title">
                <h2>Phản hồi về doanh nghiệp</h2>
            </div>
            <div class="show__unit-comment-user">
                <div class="show__unit-comment-avatar">
                    <span>T</span>
                </div>
                <h3>Cá thể</h3>
            </div>
            <p>Phản hồi nhanh</p>
        </div>
    </div>
    <div class="unit__footer">
        <div class="unit__footer-list">
            <div class="unit__footer-left">
                <img width="133" height="35" src="https://smedx.vn/assets/img/SMEDX.png" alt="Logo">
                <p>Chủ trì: Vụ Quản lý Doanh nghiệp - Bộ TTTT</p>
                <p> Chiến lược và triển khai: CÔNG TY CỔ PHẦN MIMEDIA</p>
                <p> Liên hệ 1: 0836 588 999</p>
                <p> Liên hệ 2: 0243 999 9999</p>
                <p> Email: hotro.smedx@gmail.com</p>
                <img width="150" height="68" src="https://tinnhiemmang.vn/handle_cert?id=smedx.vn" alt="">
            </div>
            <div class="unit__footer-right">
                <ul>
                    <li><a href="">Cục tin học hóa</a></li>
                    <li><a href="">MiMedia JSC</a></li>
                    <li><a href="">Nền tảng đồng hành</a></li>
                    <li><a href="">Hỗ trợ</a></li>
                </ul>
            </div>
        </div>
        <div class="unit__footer-title">
            <p>Bản quyền @2021 bởi Cục Tin học hóa <br>
                Bộ Thông tin & Truyền thông</p>
        </div>
    </div>

</body>

</html>
