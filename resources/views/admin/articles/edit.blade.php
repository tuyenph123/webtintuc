@extends('admin.layouts.master')

@section('contentAdmin')
    <div class="content-page">
        <div class="content">
            <form action="{{ route('articles.update', $articles->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="create__post-title">
                    <h4>Chỉnh sửa bài viết</h4>
                    <div class="create__post-title__right">
                        <span><a href="#">Trang chủ</a><i class="ri-arrow-drop-right-line"></i>
                            <a href="#">Chỉnh sửa bài viết</a></span>
                    </div>
                </div>

                <div class="create__post-tong">
                    <div class="create__post-list">
                        <div class="create__post-image">
                            <span>Thêm ảnh ở đây</span>
                            <input type="hidden" id="imageUpload" name="image" accept="image/*"
                                onchange="previewImage()" />
                            <button type="button" id="ckfinder-btn">Chọn ảnh</button>

                            <div class="preview-container">
                                <img id="imagePreview"
                                    src="{{ $articles->image ? asset($articles->image) : asset('default-image.jpg') }}"
                                    alt="Image Preview"
                                    style="max-width: 200px; display: {{ $articles->image ? 'block' : 'none' }};" />
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
                                <input type="text" id="title" name="title" required
                                    value="{{ old('title', $articles->title) }}" />
                            </div>
                        </div>
                    </div>

                    <div class="create__post-tex">
                        <label for="content">Nội dung bài viết</label>
                        <textarea name="content" id="editor">{!! old('content', $articles->content) !!}</textarea>
                    </div>

                    <div class="create__post-btn__submit">
                        <a class="btn btn-danger" href="{{ route('articles.index') }}">Quay lại</a>
                        <button class="btn btn-info" type="submit">Cập nhật</button>
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
