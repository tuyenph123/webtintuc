@extends('admin.layouts.master')

@section('contentAdmin')
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="header-title">Danh sách nền tảng</h1>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <div class="card-body">
                            <div id="fixed-header-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                <div class="row">
                                    <h4>Bộ lọc tìm kiếm</h4>
                                    <div class="list__posts">
                                        <form class="list_search" action="{{ route('articles.index') }}" method="GET">
                                            <input class="list_search-item" type="search" placeholder="Mời nhập tiêu đề"
                                                name="" id="">
                                            <select class="list_search-item2" name="" id="">
                                                <option value="">Trạng thái</option>
                                                <option value="">Đang sử lý</option>
                                                <option value="">Đã duyệt</option>
                                                <option value="">Đã huỷ</option>
                                            </select>
                                            <a type="submit" href="" style="background-color: green;"><i
                                                    class="ri-save-3-fill"></i> Tìm kiếm </a>
                                        </form>
                                        <div class="create__post-item1">
                                            <a style="background-color: green;" type="submit"
                                                href="{{ route('articles.create') }}"><i class="ri-save-3-fill"></i> Thêm
                                                mới</a>
                                            <a style="background-color: rgb(0, 101, 253);" href=""><i
                                                    class=" ri-refresh-line"></i> Refresh</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="fixed-header-datatable"
                                        class="table table-striped dt-responsive nowrap table-striped w-100 dataTable dtr-inline"
                                        aria-describedby="fixed-header-datatable_info" style="width: 1147px;">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" name="" id=""></th>
                                                <th class="sorting sorting_asc">Tiêu đề</th>
                                                <th class="sorting">Hình ảnh</th>
                                                <th class="sorting">Nền tảng</th>
                                                <th class="sorting">Người đăng</th>
                                                {{-- <th class="sorting">Lượt xem</th>
                                                <th class="sorting">Trang thái</th> --}}
                                                <th class="sorting">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($articles as $item)
                                                <tr class="odd">
                                                    <td><input type="checkbox" name="" id=""></td>
                                                    <td>{!! nl2br(wordwrap($item->title, 50, "\n", true)) !!}</td>
                                                    <td>
                                                        @if ($item->image)
                                                            <img src="{{ asset($item->image) }}" width="80"
                                                                height="80">
                                                        @else
                                                            Không có ảnh
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ $item->nentang->name ?? 'Không có nền tảng' }}
                                                    </td>
                                                    {{-- <td>Công nghệ</td>
                                                    <td>33</td> --}}
                                                    <td>{{ $item->user->name }}</td>
                                                    <td>
                                                        <a href="{{ route('articles.edit', $item->id) }}"><i
                                                                class=" ri-pencil-line"></i> Sửa</a>
                                                        <form action="{{ route('articles.destroy', $item->id) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf @method('DELETE')
                                                            <button type="submit" style="border: none;"
                                                                onclick="return confirm('Xác nhận xóa?')"><i
                                                                    class="ri-delete-bin-2-line"></i> Xóa</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="fixed-header-datatable_info" role="status"
                                        aria-live="polite">
                                        Showing {{ $articles->firstItem() }} to {{ $articles->lastItem() }} of
                                        {{ $articles->total() }} entries
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="fixed-header-datatable_paginate">
                                        {{ $articles->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection
