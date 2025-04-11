@extends('admin.layouts.master')

@section('contentAdmin')
    <div class="content-page">
        <div class="content">
            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="create__post-title">
                    <h4>Thêm mới bài viết</h4>
                    <div class="create__post-title__right">
                        <span><a href="#">Trang chủ</a><i class="ri-arrow-drop-right-line"></i>
                            <a href="#">Thêm mới nền tảng</a></span>
                    </div>
                </div>
                <div class="create__post-tong">
                    <div class="create__post-list">
                        <div class="create__post-image">
                            <span>Thêm ảnh ở đây</span> <br>
                            <input type="hidden" id="imageUpload" name="image" value="">
                            <a style="padding: 100px; position: absolute; right: 50px;" type="button"
                                id="ckfinder-btn">Chọn ảnh</a>
                            <div class="preview-container">
                                <img style="position: relative; z-index: 1000;" id="imagePreview" src="#"
                                    alt="Image Preview" style="display: none; max-width: 200px;">
                            </div>
                        </div>
                        <div class="create__post-form">
                            <div class="create__post-item1">
                                <a style="background-color: green;" href="{{ route('articles.index') }}"><i
                                        class="ri-menu-line"></i> Danh sách</a>
                                <a style="background-color: rgb(0, 101, 253);" href=""><i
                                        class="ri-refresh-line"></i> Refresh</a>
                            </div>

                            <div class="create__post-item">
                                <label for="title">Tiêu đề *</label>
                                <input type="text" id="title" name="title" required />
                            </div>
                            <label for="nentang_id">Chọn nền tảng:</label>
                            <select name="nentang_id" id="nentang_id" class="form-control">
                                <option value="">-- Không chọn --</option>
                                @foreach ($nentangs as $n)
                                    <option value="{{ $n->id }}"
                                        {{ old('nentang_id', $articles->nentang_id ?? '') == $n->id ? 'selected' : '' }}>
                                        {{ $n->name }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <div class="create__post-item">
                            <label for="hot">Tin nóng:</label>
                            <div class="create__post-item-con">
                                <input class="checkbox__post" type="checkbox" id="hot" name="hot" />
                                <span>Hot</span>
                            </div>
                        </div> --}}
                        </div>
                    </div>

                    <div class="create__post-tex">
                        <label for="content">Nội dung bài viết</label>
                        <textarea name="content" id="editor"></textarea>
                    </div>

                    <div class="create__post-btn__submit">
                        <a class="btn btn-danger" href="{{ route('articles.index') }}">Quay lại</a>
                        <button class="btn btn-info" type="submit">Thêm mới</button>
                    </div>
                    <br>
                </div>
            </form>
        </div>

        <!-- Footer -->
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
    </div>

    <script>
        function previewImage() {
            const file = document.getElementById('imageUpload').files[0];
            const preview = document.getElementById('imagePreview');
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                };
                reader.readAsDataURL(file);
            } else {
                preview.style.display = "none";
            }
        }
    </script>
@endsection
