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
    <div class="header__tong">
        <div class="header__menu-banner">
            <a href="https://dbi.gov.vn/?utm_source=smedx">
                <div class="header__menu-banner__img"></div>
            </a>
        </div>
        <div class="header__banner">
            <div class="banner__slide active">
                <div class="banner__content">
                    <a class="banner__content-category" href>
                        <span style="background-color: var(--primary-color);">
                            Doanh nghiệp số
                        </span>
                    </a>
                    <h2 class="post-title">
                        <a href="#">MISA
                            Startup Stringee gọi vốn thành công
                            vòng Series A</a>
                    </h2>
                    <span class="post-date">
                        <i class="fa-solid fa-pencil"></i>
                        Ngày đăng 28/04/2023 15:00
                    </span>
                    <p>Startup về nền tảng lập trình giao tiếp
                        Stringee
                        vừa công bố nhận vốn Series A từ Quỹ
                        đầu tư
                        tăng
                        trưởng Việt Nam DAIWA-SSIAM III (DSVGF).

                        Stringee đã tăng trưởng 400% kể từ vòng gọi
                        vốn
                        Pre-series A cuối của họ vào năm
                        2021.</p>
                </div>
                <div class="banner__image"
                    style="background-image: url('https://amis.misa.vn/cau-chuyen-khach-hang/wp-content/uploads/2022/12/cckh-xuan-cuong-12.jpg');">
                </div>
            </div>
            <div class="banner__slide">
                <div class="banner__content">
                    <a class="banner__content-category" href>
                        <span style="background-color: var(--vang-color);">
                            Chuyển đổi số
                        </span>
                    </a>
                    <h2 class="post-title">
                        <a href="#">MISA
                            Stringee xuất sắc đạt Top 10/330 <br>
                            tại Giải Sao Khuê 2023</a>
                    </h2>
                    <span class="post-date">
                        <i class="fa-solid fa-pencil"></i>
                        Ngày đăng 28/04/2023 15:00
                    </span>
                    <p>Vượt qua hơn 330 đề cử tham gia, nền tảng lập
                        trình cho giao tiếp Stringee đạt Giải
                        thưởng Top
                        10 Sao Khuê 2023. Đây là giải cao nhất và
                        danh
                        giá nhất của ngành phần mềm và dịch vụ
                        công nghệ
                        thông tin Việt Nam</p>
                </div>
                <div class="banner__image"
                    style="background-image: url('https://static2-images.vnncdn.net/files/publish/2022/11/28/iochue-743.jpg');">
                </div>
            </div>
            <div class="banner__slide">
                <div class="banner__content">
                    <a class="banner__content-category" href>
                        <span style="background-color: var(--vang-color);">
                            Chuyển đổi số
                        </span>
                    </a>
                    <h2 class="post-title">
                        <a href="#">MISA
                            AMIS đồng hành cùng Công <br> ty Cổ phần
                            Hữu
                            Nghị
                            Xuân Cương <br> trong lộ trình chuyển
                            đổi
                            số</a>
                    </h2>
                    <span class="post-date">
                        <i class="fa-solid fa-pencil"></i>
                        Ngày đăng 28/04/2023 15:00
                    </span>
                    <p>MISA AMIS đồng hành cùng Công ty Cổ phần Hữu
                        Nghị Xuân Cương trong <br> lộ trình chuyển
                        đổi số</p>
                </div>
                <div class="banner__image"
                    style="background-image: url('https://smedx.s3.ap-southeast-1.amazonaws.com/assets/news/NEAC+2022/3-2.png');">
                </div>
            </div>
            <div class="banner__nav">
                <button onclick="prevSlide()"><i class="fa-solid fa-arrow-left"></i></button>
                <button onclick="nextSlide()"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="header__categories">
            <div class="header__left">
                <h2>Nền tảng số</h2>
                <p>Bộ công cụ chuyển đổi số <br> các nghiệp vụ khác
                    nhau <br>
                    dành cho doanh nghiệp <br> nhỏ và vừa. Các công
                    cụ <br>
                    đều được đánh giá và gợi <br> ý bởi SMEdx</p>
                <div class="header__left-item">
                    <button class="header__left-item-hover">Xem
                        thêm</button>
                    <div class="slider-controls">
                        <button id="prevBtn"><i class="fa-solid fa-arrow-left"></i></button>
                        <button id="nextBtn"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="header__right">
                <div class="slider">
                    @foreach ($listnentang as $nentang)
                        <div class="slide">
                            <h3>{{ $nentang->title }}</h3>
                            <div class="slider__img">
                                <a href>
                                    <img src="{{ asset($nentang->image) }}" alt="{{ $nentang->title }}" width="80"
                                        height="80">
                                </a>

                            </div>
                            <p>123 lượt đăng kí</p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="banner__post">
            <div class="banner__post-title">
                <h1>Tin Tức Nổi Bật</h1>
                <div class="letter-background">T</div>
            </div>
            <div class="banner__post-menu">
                <nav>
                    <ul style="display: flex; gap: 20px;">
                        @foreach ($listCategory as $category)
                            <li>
                                <a href="#" class="menu-item" data-category="{{ $category->id }}">
                                    <i class="fa-solid fa-heart-pulse"></i> {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>

        @foreach ($listCategory as $category)
            <div class="news-section" data-category="{{ $category->id }}">
                <h2>{{ $category->name }}</h2>

                @php
                    $newsList = $listNews->has($category->id) ? $listNews[$category->id]->take(3) : collect();
                @endphp

                <div class="news-list">
                    @if ($newsList->count() > 0)
                        @foreach ($newsList as $news)
                            <a href="{{ route('client.showpost', $news->id) }}" class="news-item">
                                <img src="{{ $news->thumbnail }}" width="80" height="80" alt="{{ $news->title }}">
                                <div class="news-info">
                                    <h3>{{ $news->title }}</h3>
                                    {{-- <h3>{!! nl2br(wordwrap($news->title, 65, "\n", true)) !!}</h3> --}}
                                    <p>{{ $news->created_at->format('d/m/Y H:i') }}</p>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p>Không có tin tức nào.</p>
                    @endif
                </div>
            </div>
        @endforeach



        <div class="header__post-category">
            <div class="header__post-category__title">
                <h3>NHÓM NỀN TẢNG CHUYỂN ĐỔI SỐ</h3>
                <div class="letter-background2">N</div>
            </div>
            <div class="header__post-category__list">
                @foreach ($listUnits as $units)
                    <div class="header__post-category__item">
                        <h6>
                            <img src="{{ $units->image }}" alt="">
                            <a href>{{ $units->name }}</a>
                        </h6>
                    </div>
                @endforeach
                {{-- <div class="header__post-category__item">
                    <h6>
                        <a href>Nghiệp vụ cụ thể</a>
                    </h6>
                </div>
                <div class="header__post-category__item">
                    <h6>
                        <img src="" alt="">
                        <a href>Lĩnh vực đặc thù</a>
                    </h6>
                </div>
                <div class="header__post-category__item">
                    <h6>
                        <a href>An ninh mạng</a>
                    </h6>
                </div> --}}
            </div>
        </div>
        <div class="header__tong">
            <div class="header__post-hot">
                <div class="header__post-hot__title">
                    <div class="header__post-hot__name">
                        <h3>các tin nổi bật khác</h3>
                        <div class="letter-background3">C</div>
                    </div>
                    <div class="header__post-hot__follow">
                        <h4>Theo dõi chúng tôi</h4>
                        <a href="https://www.facebook.com/SMEdx.vn"><i class="fa-brands fa-facebook-f"></i>
                            <span>| Facebook</span></a>
                    </div>
                </div>
                <div class="header__post-hot__tong">
                    <div class="header__post-hot__left">

                        @if ($hotNews->count() > 0)
                            @foreach ($hotNews as $news)
                                <div class="header__post-hot__left-list">
                                    <div class="header__post-hot__left-item">
                                        <img style="width: 350px; height: 280px;" src="{{ $news->thumbnail }}"
                                            alt="{{ $news->title }}">

                                    </div>
                                    <div class="header__post-hot__left-item">
                                        <a href="{{ route('client.showpost', $news->id) }}" class="new-info">
                                            <span style="background-color: var(--vang-color);">
                                                {{ $news->category->name ?? 'Chuyên mục' }}
                                            </span>
                                            <h3 class="h3-info" style="color: black">{{ $news->title }}</h3>
                                            <h6>
                                                <i class="fa-solid fa-pencil"></i>
                                                {{ $news->created_at->format('d/m/Y H:i') }}
                                            </h6>
                                            <p>
                                                {!! \Illuminate\Support\Str::limit($news->content, 200, '...') !!}
                                            </p>

                                            <a style="text-decoration: none; color: black" href="#">Xem chi tiết <i class="fa-solid fa-arrow-right"></i></a>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Không có tin tức nào.</p>
                        @endif



                        <button> Xem thêm</button>
                    </div>
                    <div class="header__post-hot__right">
                        <div class="header__post-hot__right-list">
                            <div class="header__post-hot__right-item">
                                <h1>Tài liệu hướng dẫn</h1>
                            </div>
                            <div class="header__post-hot__right-item">
                                <h4>Phổ biến</h4>
                            </div>
                        </div>
                        <div class="header__post-hot__right-list">
                            <div class="header__post-hot__right-item">
                                <img src="https://smedx.vn/assets/img/huong_dan.png" alt>
                            </div>
                            <div class="header__post-hot__right-item">
                                <h5>Tài liệu tham khảo</h5>
                                <span>26/3/2021</span>
                            </div>
                        </div>
                        <div class="header__post-hot__right-list">
                            <div class="header__post-hot__right-item">
                                <img src="data:image/jpeg;base64,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"
                                    alt>
                            </div>
                            <div class="header__post-hot__right-item">
                                <h5>Quyết định số 377/QĐ-BTTTT</h5>
                                <span>26/3/2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__tong">
            <a class="footer__tong-img">
                <img style="width: 80px; height: 80px;" src="https://smedx.vn/assets/img/bdt.jpg" alt>
            </a>
            <a class="footer__tong-img">
                <img style="width: 150px; height: 85px;" src="https://smedx.vn/assets/img/mimedia.png" alt>
            </a>
            <a class="footer__tong-img">
                <img style="width: 120px; height: 47px;" src="https://smedx.vn/assets/img/mimedia.png" alt>
            </a>
            <a class="footer__tong-img">
                <img style="width: 120px; height: 38px;" src="https://smedx.vn/assets/img/vcci.jpg" alt>
            </a>
            <a class="footer__tong-img">
                <img style="width: 80px; height: 80px;" src="https://smedx.vn/assets/img/bkh.jpg" alt>
            </a>
            <a class="footer__tong-img">
                <img style="width: 80px; height: 100px;" src="https://smedx.vn/assets/img/vinasme.jpg" alt>
            </a>
        </div>
    @endsection
