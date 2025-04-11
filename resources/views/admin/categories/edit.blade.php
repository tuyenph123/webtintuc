@extends('admin.layouts.master')

@section('contentAdmin')
    <div class="content-page">
        <div class="content">
            <form action="{{ route('categories.update',$category->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="create__post-title">
                    <h4>Sửa chuyên mục</h4>
                    <div class="create__post-title__right">
                        <span><a href="../index.html">Trang chủ</a><i class=" ri-arrow-drop-right-line"></i>
                            <a href>Sửa chuyên mục</a></span>
                    </div>
                </div>
                <div class="Create__category-tong">
                    <div class="Create__category-list">
                        <div class="create__post-item1">
                            <a style="background-color: green;" href="{{ route('categories.index') }}"><i
                                    class="ri-menu-line"></i> Danh sách</a>
                            <a style="background-color: rgb(0, 101, 253);" href=""><i class=" ri-refresh-line"></i>
                                Refresh</a>
                        </div>
                        <div class="Create__category-form">
                            <div class="Create__category-item">
                                <label for="title">Tên chuyên mục *</label> <br>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $category->name }}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Create__category-btn__submit">
                    <a class="btn btn-danger" href="{{ route('categories.index') }}">Quay lại</a>
                    <button class="btn btn-info" type="submit" href="">Lưu tin tức</button>
                </div>
                <br>
        </div>

        </form>
    </div>
    <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    © Velonic - Theme by <b>Techzaa</b>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

    </div>
@endsection
