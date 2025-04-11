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

    <form class="login" action="{{ route('client.login') }}" method="POST">
        @csrf
        <div class="login__container">
            <h2>Đăng nhập</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="login__input">
                <label for="email" class="form-grorp">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Nhập email"
                    value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <label for="password" class="form-grorp">Mật khẩu</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu"
                    required>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="login__list">
                <div class="login__checkbox">
                    <input type="checkbox" name="remember" id="remember">
                    <span>Giữ trạng thái đăng nhập</span>
                </div>
                <a href="" class="login__forgot">Quên mật khẩu?</a>
            </div>

            <button class="custom-btn btn-15" type="submit">Đăng nhập</button>

            <h3>Hoặc</h3>
            <p>Chưa có tài khoản? <a style="text-decoration: none;" href="{{ route('client.register.form') }}">Tạo tài
                    khoản</a></p>
        </div>
    </form>
@endsection
