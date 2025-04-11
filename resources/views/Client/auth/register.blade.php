@extends('Client.layout.master')

@section('contentClient')
<div class="header__logo">
    <img src="{{ asset('client/img/logo.png') }}" alt="Logo">
</div>

<div class="header__menu-toggle">
    <i class="fa-solid fa-bars"></i>
</div>

<div class="header__menu">
    <nav class="header__menu-nav">
        <ul>
            <li><a class="active" href="/">Trang chủ</a></li>
            <li class="has-submenu">
                <a class="has-submenu__post" href="#">Chuyên mục<i
                        class="fa-solid fa-chevron-down desktop-icon"></i><span class="submenu-toggle">+</span></a>
                <div class="header__submenu">
                    <ul>
                        {{-- <li style="border-top: 1px solid var(--black-color);"><a
                            href="./assets/view/chuyenmuc/chuyendoiso.html">Chuyển đổi số</a></li>
                    <li><a href="#">Quốc gia số</a></li>
                    <li><a href="#">Doanh nghiệp số</a></li>
                    <li><a href="#">Công nghệ</a></li> --}}

                        @if ($listCategory->isNotEmpty())
                            <ul>
                                @foreach ($listCategory as $category)
                                    <li>
                                        <a
                                            href="{{ route('client.home', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>Không có danh mục nào.</p>
                        @endif

                    </ul>
                </div>
            </li>
            <li><a href="{{ route('client.listunit') }}">Nền tảng đồng hành</a></li>
            <li><a href="#">Hướng dẫn sử dụng</a></li>
        </ul>
    </nav>
</div>
    <div class="register__container">
        <h2>Đăng ký tài khoản</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="register__category">
            <div class="register__category-item">
                <input type="radio" name="category" id="category-1" checked onclick="toggleForm('personal')" value="personal">
                <label for="category-1">Cá nhân</label>
            </div>
            <div class="register__category-item">
                <input type="radio" name="category" id="category-2" onclick="toggleForm('business')" value="business">
                <label for="category-2">Doanh nghiệp</label>
            </div>
        </div>

        <!-- Form Cá Nhân -->
        <form class="register" action="{{ route('client.register.personal') }}" method="POST" id="personal-form">
            @csrf
            <div class="register__input">
                <label class="form-grorp">Họ và tên</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập họ và tên" value="{{ old('name') }}">
                <label class="form-grorp">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Nhập email" value="{{ old('email') }}">
                <label class="form-grorp">Số điện thoại</label>
                <input type="number" name="phone" class="form-control" placeholder="Nhập số điện thoại" value="{{ old('phone') }}">
                <label class="form-grorp">Mật khẩu</label>
                <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                <button class="custom-btn btn-15" type="submit">Tạo tài khoản</button>
                        <h3>Hoặc</h3>
                        <p>Chưa có tài khoản? <a style="text-decoration: none;" href="{{ route('client.login.form') }}">Đăng nhập</a></p>
            </div>
        </form>

        <!-- Form Doanh Nghiệp -->
        <form class="register" action="{{ route('client.register.business') }}" method="POST" id="business-form" style="display: none;">
            @csrf
            <div class="register__input">
                <label class="form-grorp">Tên doanh nghiệp</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên doanh nghiệp" value="{{ old('name') }}">
                <label class="form-grorp">Mã số thuế</label>
                <input type="text" name="tax_code" class="form-control" placeholder="Nhập mã số thuế" value="{{ old('tax_code') }}">
                <label class="form-grorp">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Nhập email" value="{{ old('email') }}">
                <label class="form-grorp">Số điện thoại</label>
                <input type="number" name="phone" class="form-control" placeholder="Nhập số điện thoại" value="{{ old('phone') }}">
                <label class="form-grorp">Mật khẩu</label>
                <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                <button class="custom-btn btn-15" type="submit">Tạo tài khoản</button>
                        <h3>Hoặc</h3>
                        <p>Chưa có tài khoản? <a style="text-decoration: none;" href="{{ route('client.login.form') }}">Đăng nhập</a></p>
            </div>
        </form>
    </div>

    <script>
        function toggleForm(type) {
            const personalForm = document.getElementById("personal-form");
            const businessForm = document.getElementById("business-form");

            if (type === 'personal') {
                personalForm.style.display = "block";
                businessForm.style.display = "none";
            } else {
                personalForm.style.display = "none";
                businessForm.style.display = "block";
            }
        }

        toggleForm('personal');
    </script>
@endsection