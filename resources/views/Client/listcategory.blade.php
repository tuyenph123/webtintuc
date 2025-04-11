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
                <li><a href="/">Trang chủ</a></li>
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
                <li><a href="#">Nền tảng đồng hành</a></li>
                <li><a href="#">Hướng dẫn sử dụng</a></li>
            </ul>
        </nav>
    </div>
    <div class="category1">
        <div class="category1__title">
            <h1>Chuyển đổi số</h1>
            <span>
                <a href="">
                    <i class="fa-solid fa-house"></i>
                    Trang chủ
                </a>
                <a href="././chuyendoiso.html">
                    Chuyên mục
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </span>
        </div>
        <div class="category1__view">
            <div class="category1__tong">
                <div class="category1__list">
                    @foreach ($listCategory as $category)
                        @foreach ($category->news as $news)
                            <div class="category__item">
                                <a href="{{ route('client.showpost', $news->id) }}">
                                    <img src="{{ $news->thumbnail }}" alt="{{ $news->title }}">
                                    <br>
                                    <span class="span_chuyendoiso">{{ $category->name }}</span>
                                    <h2>{{ $news->title }}</h2>
                                    <h6>{{ $news->created_at->format('d/m/Y') }}</h6>
                                    <p>{!! Str::limit(strip_tags($news->content), 200) !!}</p>
                                </a>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
            <div class="category1__ctg">
                <div class="chuyen__muc">
                    <h1>Chuyên mục</h1>
                    @foreach ($listCategory as $category)
                        <div class="header__show-item-category-item">
                            <a href="{{ route('client.home', ['id' => $category->id]) }}">
                                <h3>{{ $category->name }}</h3>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="tieu__diem">
                    <h1>Tiêu điểm</h1>
                    <div class="tieu__diem-tong">
                        <a href><img
                                src="https://amis.misa.vn/cau-chuyen-khach-hang/wp-content/uploads/2022/12/cckh-xuan-cuong-12.jpg"
                                alt></a>
                        <div class="tieu__diem-title">
                            <span class="span_chuyendoiso">Chuyển
                                đổi sô</span>
                            <h3>MISA AMIS đồng hành <br> cùng Công
                                ty Cổ phần Hữu</h3>
                            <p>28/04/2023 15:24</p>
                        </div>
                    </div>
                    <div class="tieu__diem-tong">
                        <a href><img
                                src="https://amis.misa.vn/cau-chuyen-khach-hang/wp-content/uploads/2022/12/cckh-xuan-cuong-12.jpg"
                                alt></a>
                        <div class="tieu__diem-title">
                            <span class="span__doanhnghiepso">Chuyển
                                đổi sô</span>
                            <h3>MISA AMIS đồng hành <br> cùng Công
                                ty Cổ phần Hữu</h3>
                            <p>28/04/2023 15:24</p>
                        </div>
                    </div>
                    <div class="tieu__diem-tong">
                        <a href><img
                                src="https://amis.misa.vn/cau-chuyen-khach-hang/wp-content/uploads/2022/12/cckh-xuan-cuong-12.jpg"
                                alt></a>
                        <div class="tieu__diem-title">
                            <span class="span_chuyendoiso">Chuyển
                                đổi sô</span>
                            <h3>MISA AMIS đồng hành <br> cùng Công
                                ty Cổ phần Hữu</h3>
                            <p>28/04/2023 15:24</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
