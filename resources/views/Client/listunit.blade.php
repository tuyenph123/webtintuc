<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('client/css/listunit.css') }}">
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
    <div class="unit__title">
        <h2>Các đơn vị <span>tham gia</span></h2>
        <p>Danh sách các nền tảng chuyển dổi số xuất sắc tham gia vào chương trình.</p>
    </div>
    <div class="unit__menu-con">
        @foreach ($nentangs as $index => $nentang)
            <input type="radio" name="tab" id="tab{{ $index + 1 }}" {{ $index == 0 ? 'checked' : '' }}>
        @endforeach

        <div class="menu-tabs">
            @foreach ($nentangs as $index => $nentang)
                <label for="tab{{ $index + 1 }}">{{ $nentang->name }}</label>
            @endforeach
        </div>

        <div class="contents">
            @foreach ($nentangs as $index => $nentang)
                <div class="tab-content content{{ $index + 1 }}">
                    <div class="tab-section">
                        @php
                            $filteredArticles = $index === 0 ? $articles : $articles->where('nentang_id', $nentang->id);
                        @endphp

                        @forelse ($filteredArticles as $article)
                            <div class="post">
                                @if ($article->image)
                                    <img src="{{ asset($article->image) }}" alt="">
                                @endif
                                <p>{!! Str::limit($article->content, 180) !!}</p>
                            </div>
                        @empty
                            <p>Chưa có bài viết nào.</p>
                        @endforelse
                    </div>
                </div>
            @endforeach
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
    <script>
        function toggleLogin() {
            const modal = document.getElementById("loginModal");
            modal.style.display = modal.style.display === "block" ? "none" : "block";
        }


        window.onclick = function(event) {
            const modal = document.getElementById("loginModal");
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
    </script>

</body>

</html>
