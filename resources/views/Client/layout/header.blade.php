<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMEdx</title>

    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('client/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/chuyenmuc/chuyendoiso.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/auth/register.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/auth/login.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('client/css/listunit.css') }}">

</head>

<body>
    <div class="container">
        <div class="gird">
            <div class="yhy-append-wrap">
                <div id="yhy-append" class="yhy-append">
                    <a href="javascript:void(0)" title="TRUNG TÂM GIÁM SÁT QUỐC GIA VỀ CHÍNH PHỦ SỐ" id="btnEMC"
                        class="yhy-append-btn yhy-btn-emc" style="display: flex;">
                        <span class="yhy-append-icon">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAANCAYAAACgu+4kAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKeSURBVHgBhVJbSJNhGH6/7z9s/07mllvSby7JPBLVWHiiA6UUgV55ZbsJIrvzoouIuogiKCjopiCQMrwoTSExoRoGUwlEy+mFHbBp6qaba266/XP/4ev/ZXYAoQcevo+X533f73vfB8F2ODNgMVCchzC4ATBdATrKjmmaAEP7EQ3d+tDc05W+pjVNiv7NJMhQP3BRwewtoGgbMCQJa7OvlPT8JCKQBmtBAW0rcmNuR0qOTJ1P9XpCfwpUd1mPFi33nyj5Wn2Y/w7RUbRy2xtsCwT8Gbvp0ClEm8Rw3P9CkmIzumM3XLSzpiTZUf9gs0Cwp6xwNpH7rowPF6/HdeC9Xwi+meC1zpXAcnHhpYcteRJjhAy8XrdsjM29bYutjz4BC2+ExIKAo537eJZI/aXWSHE6ToGvYxckIzjpjc8Ome0NFzwOkWlF76GF9sFl87TO4ahqU3tqyTH13MCyTN0DCVUSCcHnkR0QnjYCpSiJ+fTqkpBfufcADgB7ZBUMzWEoTX8DdQ68mshnP67gQb94PZVipkmGQGDcAnp1WiaMbbt1ZpDk0KS34DiIn8wg9O4EX34dLHHJkNZ5a3TUyw+xWJ6JGnTauIMzI/Y9rITBAIRyc7ZI35ee9gl9VeOEs8notbnhcYpdjE09u0uS0Y9d5eVidyQib20Be2pz+Yqg+yZPsR4TUZBRgcyqkDjXvDQ8hY18I+g5RokGxmtZy/wjU0WNKIHgSgw9/9sH2j3nCu8+66KtV/MJKjOKMugE0SfImeE0UWgLpvezmCpdkAXvycToHVUfRtv4kOGAc7RanHW1dM5pp0y5WIRzMkT5uaikx/o2Im/aMz8mVN2iyhSC7aHFGZUm7VUquWw8qTKhUrOxtCX8H3CWm2vL8jd+AX3nDRFsNigEAAAAAElFTkSuQmCC"
                                alt="EMC">
                        </span>
                        <span class="yhy-append-txt">Đã kết nối EMC</span>
                    </a>
                    <a href="https://mic.gov.vn/" target="_blank" title="BỘ THÔNG TIN VÀ TRUYỀN THÔNG" id="btnBTTTT"
                        class="yhy-append-btn yhy-btn-btttt" style="display: none">
                        <span class="yhy-append-icon">
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAaCAYAAACkVDyJAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAURSURBVHgB5VZbbFRVFF3nPmbmlg7tUKCRR6kGUaC1EQhoE8Qmgv2oiXxINaJGfkTjl8Yfo4YYoumHJJoYP1QIYowfRiPGN4IkJgZBm/ioUKStrZTWttMync7MfW7XKdOkNNNa/dSb3Jxzz9lnr73XfpwL/NcfNV/BnMgKh2M+D2WaqOTUj8UwmgWicmBMKeXPR8/fAhYKssYw4AQG1loKqVCQheDGSPCBbWKTCDKGiYHIw0A2iz+qqlTmXwGKSEUAbKDASo5/SoBcPsJWgq0giPYQlolB7nfYCl00ajvfjy2gk94O/CNAgjnkp14iNNGTS16EhjDCHgGBZPKUps8ksKGoge8pgrdxyy0z4QcFnHcc1VNKt1VqkR41RhHqvQDnAsFLEZBQgpdtC59T2XgsgWqTMZwQuKZgFY3aE4Q4SODDoUKnGKjMa6uV+n2mbmPmgi/SGBAxMnDGF7RRyZGqOFaZET4KQ+wXGz/mAxybCHBShTjCI6tTcbRYIVqiENsLIcS0sJpW1xCzbE5ACiS016aBOs/D4zHB3lRc7Ut7eCYycUAUDhqC6xYnsLAqgRS9fpi0Vo+5aE866FqUwAaG4Q4a/CvjutB1sWJOQBdMCGDcD+GRpsNJR53IevIQQTL04k5S+wP39455eHvUw2s8XVkZx1NWHLvGPTxBFTF+t5Kgm8WkujhCzPXQwxv0mAvk3uJ3xWVX7tfzrCv1IwU5UKAM1xfrvXRedmd80UDoG5blE4Hcpefjrqzl/lK+1RnKzgrI+DVR6Ca+a4qAy4ujNSHSoueX8lI7WpDXp85oA3KebCnOr6esKp5ZH4i0cqwrSSk3TEqWuyFq+NlTXB4qjiaj/wVlyh0D7zGRaqbOJZQ659ho1/M4cGGa7t5CgFpvRtjUdEBm4U6YKGRdPMZYXWTMzsZ8fJpMqg4tQy+XhT52MFFWMTirlYkvU5Z6a4oFxnUX67SRBi1jV/qKhuRYPt+yEZxFqScIZCff+9IF6R8mP4yZpF0pDOXlDSqsnJLjejNlurmW1N+Xc5NnhrT8CAuQ8yjjytMu9VGmviSl+qGHnczUJDNyPWtvyaI4amntI+R6E0vjt34mw6Q3EUZVgLu10zTohUDhFUPhTcvALSyNlSyXa0nv+2wCOgdy0zGu7jQxiM3CHQ9xDztHG+npUwZOxBQe9EgVlbybFdmxAPiONGlv9vHmuJVhaCb9mxHh+bSLdeypaa69aETopEvdJWNYjEMFY7M19NCbCVHHBlBBgY2sySZud1uCo2xbaysT6lECN/genqNRJyOF/azV49T2PUF72e4uOHFsYbf6LK7UL7MCFkFrWLgPeD4+oVdPQveDiGAWlOtjM63v4PerBNnNeKykBylSeZq9t4qytbyy3iHliywbg2TkNJlIz07plWeCi1/DRooeHGVGHmJlOV6IkPQeIoV1MQu3BWzujK++SbaxM7Vqy5mZH9KIZczeCmZzh4pdDVbSw6KXC9gPG1hDzSpCuyvspbwb9dXE5DhGwD7GeB2ZWMMESel2SK+fLXfQT/mltoFT9OxMKd2zXsC5nNRYDqpJ1e1UetHTVcMbgR7XxQyM8Ca5hvMegh1nNv/EDNfxF/4RDJbZ6pvZ9M75i6Fvj5yPetvmZRtE2wJl/EzKljB5+iILFdozMrExYeF85KMrsDFcplTfXDrn9RMlVxqwTgqTNKbCAEneeS5jPaL3C7yUEwnSqZSL//3zFxsemmKTwC3gAAAAAElFTkSuQmCC">
                        </span>
                        <span class="yhy-append-txt">Trực thuộc BTTTT</span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="background-color: rgb(241, 241, 241); height: 27.2px;">
                    <a target="_blank" href="https://mic.gov.vn/mic_2020/Pages/trangchu_2020.aspx" class="py-1"
                        style="display: flex; font-size: 0.8rem;"> Bộ Thông
                        tin và Truyền thông - Chương trình Chuyển đổi số
                        Quốc gia </a>
                </div>
            </div>
            <div class="row">
                <div class="col-9 d-flex">
                    <div id="datetime" class="d-flex col-11 m-0 p-0"
                        style="overflow: hidden; position: relative; height: 24px;">
                        <!-- <ul
                                style="position: absolute; margin: 0px; padding: 0px; top: -0.322818px;">
                                <li class="w-100"
                                    style="margin: 0px; padding: 0px; height: 24px; opacity: 0.986549;">
                                    <a class="active d-block w-100"
                                        href="/tin-tuc/chuyen-doi-so/stringee-xuat-sac-dat-top-10330-tai-giai-sao-khue-2023"><span
                                            class="font-small w-100">
                                            <i class="ti-book mr-5">
                                            </i>
                                            Stringee xuất sắc đạt Top 10/330 tại Giải Sao
                                            Khuê 2023</span>
                                    </a>
                                </li>
                                <li class="w-100"
                                    style="margin: 0px; padding: 0px; height: 24px; opacity: 0.0134507;"><a
                                        class="active d-block w-100"
                                        href="/tin-tuc/chuyen-doi-so/misa-amis-dong-hanh-cung-cong-ty-co-phan-huu-nghi-xuan-cuong-trong-lo-trinh-chuyen-doi-so"><span
                                            class="font-small w-100"><i
                                                class="ti-book mr-5"></i>MISA
                                            AMIS đồng hành cùng Công ty Cổ phần
                                            Hữu Nghị Xuân Cương trong lộ trình
                                            chuyển đổi số</span>
                                    </a>
                                </li>
                                <li class="w-100"
                                    style="margin: 0px; padding: 0px; height: 24px; opacity: 0.0411227;"><a
                                        class="active d-block w-100"
                                        href="/tin-tuc/chuyen-doi-so/misa-amis-dong-hanh-cung-cong-ty-co-phan-huu-nghi-xuan-cuong-trong-lo-trinh-chuyen-doi-so"><span
                                            class="font-small w-100"><i
                                                class="ti-book mr-5"></i>MISA
                                            AMIS đồng hành cùng Công ty Cổ phần
                                            Hữu Nghị Xuân Cương trong lộ trình
                                            chuyển đổi số</span>
                                    </a>
                                </li>
                                <li class="w-100"
                                    style="margin: 0px; padding: 0px; height: 24px;"><a
                                        class="active d-block w-100"
                                        href="/tin-tuc/chuyen-doi-so/stringee-xuat-sac-dat-top-10330-tai-giai-sao-khue-2023"><span
                                            class="font-small w-100"><i
                                                class="ti-book mr-5"></i>Stringee
                                            xuất sắc đạt Top 10/330 tại Giải Sao
                                            Khuê
                                            2023</span></a>
                                </li>
                            </ul> -->
                    </div>
                </div>
                <div class="col-3 text-right">
                    <ul class="header-social-network d-inline-block list-inline">
                    </ul>
                    <div class="vline-space d-inline-block">
                    </div>
                    <nav>
                        @if (Auth::check())
                            <div class="user-menu">
                                <span class="user-name" onclick="toggleLogout()">
                                    Xin chào, {{ Auth::user()->name ?? Auth::user()->company_name }}
                                </span>
                                <form action="{{ route('client.logout') }}" method="POST" class="logout-form"
                                    style="display: none;">
                                    @csrf
                                    <button type="submit" class="custom-btn1"><i
                                            class="fa-solid fa-right-from-bracket"></i> Đăng xuất</button>
                                </form>
                            </div>
                        @else
                            <a href="{{ route('client.login.form') }}">Đăng nhập</a>
                        @endif
                    </nav>
                </div>
            </div>
