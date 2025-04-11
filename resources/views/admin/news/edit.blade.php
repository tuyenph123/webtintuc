@extends('admin.layouts.master')

@section('contentAdmin')
    <div class="content-page">
        <div class="content">
            <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
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
                            <input type="hidden" id="imageUpload" name="thumbnail" accept="image/*"
                                onchange="previewImage()" />
                            <a style="padding: 100px; position: absolute; right: 50px;" type="button"
                                id="ckfinder-btn">Chọn ảnh</â>

                                <div class="preview-container">
                                    <img id="imagePreview"
                                        src="{{ $news->thumbnail ? asset($news->thumbnail) : asset('default-image.jpg') }}"
                                        alt="Image Preview"
                                        style="max-width: 200px; display: {{ $news->thumbnail ? 'block' : 'none' }};" />
                                </div>
                        </div>


                        <div class="create__post-form">
                            <div class="create__post-item1">
                                <a style="background-color: green;" href="{{ route('news.index') }}"><i
                                        class="ri-menu-line"></i> Danh sách</a>
                                <a style="background-color: rgb(0, 101, 253);" href=""><i
                                        class="ri-refresh-line"></i> Refresh</a>
                            </div>

                            <div class="create__post-item">
                                <label for="title">Tiêu đề *</label>
                                <input type="text" id="title" name="title" required
                                    value="{{ old('title', $news->title) }}" />
                            </div>

                            {{-- <div class="create__post-item">
                                <label for="category_id">Chuyên mục</label>
                                <select class="select_chuyenmuc" name="category_id" id="category_id" required>
                                    <option value="">-- Chọn chuyên mục --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $news->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div> --}}
                            <div class="create__post-item">
                                <label for="category_id">Chuyên mục</label>
                                <select class="select2js" name="category_id" id="category_id">
                                    <option value="">-- Chọn chuyên mục --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $news->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="create__post-tex">
                        <label for="content">Nội dung bài viết</label>
                        <textarea name="content" id="editor">{!! old('content', $news->content) !!}</textarea>
                    </div>

                    <div class="create__post-btn__submit">
                        <a class="btn btn-danger" href="{{ route('news.index') }}">Quay lại</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
