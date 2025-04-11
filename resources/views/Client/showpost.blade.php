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
    <div class="header__show">
        <div class="header__show-list">
            <div class="header__show-item__left">
                <span class="span_chuyendoiso">{{ $showNews->category->name }}</span>
                <h1>{{ $showNews->title }}</h1>
                <p style="font: 12px Arimond, sans-serif; color: var(--p-color);">
                    {{ $showNews->created_at->format('d/m/Y H:i') }}
                </p>
                <div class="text-show">
                    {!! $showNews->content !!}
                </div>
                <div class="header__post-hot__left">
                        <h2 style="font: 28px Roboto, sans-serif; font-weight: bold">Bài cùng chuyên mục</h2>
                    @if ($relatedNews->count() > 0)
                    @foreach ($relatedNews as $news)
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
                </div>
            </div>
            <div class="header__show-item__right">
                <h4 class="header__show-h4">Theo dõi SMEdx</h4>
                <div class="header__show-item__icon">
                    <a style="background-color: var(--blue-color);" href><i class="fa-brands fa-facebook"></i> |
                        Facebook</a>
                    <a style="background-color: var(--primary-color);" href><i class="fa-brands fa-youtube"></i> |
                        Youtube</a>
                </div>
                <div class="header__show-item__new">
                    <h4 class="header__show-h4">Tin mới</h4>
                    <div class="header__show-item__new-hot">
                        <div class="header__Show-item__new-list">
                            @foreach ($hotNews->take(6) as $news)
                                <div class="header__show-item__new-item">
                                    <a href="{{ route('client.showpost', $news->id) }}">
                                        <img style="width: 155px; height: 100px; border-radius: 5px" src="{{ $news->thumbnail }}"
                                            alt="{{ $news->title }}">
                                        <h3>{{ Str::limit($news->title, 30) }}</h3>
                                        <p>{{ $news->created_at->format('Y-m-d H:i:s') }}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    
                    </div>
                    <h4 class="header__show-h4">Chuyên mục</h4>
                    <div class="header__show-item__new-category">
                        <div class="header__show-item-category-list">
                            @foreach ($listCategory as $category)
                                <div class="header__show-item-category-item">
                                    <a href="{{ route('client.home', ['id' => $category->id]) }}">
                                        <h3>{{ $category->name }}</h3>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
