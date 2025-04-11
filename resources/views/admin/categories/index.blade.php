@extends('admin.layouts.master')

@section('contentAdmin')
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="header-title">Danh sách chuyên mục</h1>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <div class="card-body">
                            <div id="fixed-header-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                <div class="row">
                                    <h4>Bộ lọc tìm kiếm</h4>
                                    <div class="list__posts">

                                        <form action="{{ route('categories.search') }}" method="GET">
                                            <div class="list_search">
                                                <input class="list_search-item" type="text" placeholder="Nhập tên danh mục" name="keyword" required>
                                                <button type="submit" style="color: white;border: none; border-radius: 5px; background-color: green;">
                                                    <i class="ri-search-line"></i> Tìm kiếm
                                                </button>
                                            </div>
                                        </form>


                                        <div class="create__post-item1">
                                            <a style="background-color: green;" type="submit" href="{{ route('categories.create') }}"><i
                                                    class="ri-save-3-fill"></i> Thêm mới</a>
                                            <a style="background-color: rgb(0, 101, 253);" href="{{ route('categories.index') }}"><i
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
                                                <th class="sorting">Tên chuyên mục</th>
                                                <th class="sorting">Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr class="odd">
                                                    <td><input type="checkbox" name="" id=""></td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>
                                                        <a href="{{ route('categories.edit', $category->id) }}"
                                                           ><i class=" ri-pencil-line"></i> Sửa</a>
                                                        <form action="{{ route('categories.destroy', $category->id) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf @method('DELETE')
                                                            <button type="submit" style="border: none;"
                                                                onclick="return confirm('Xác nhận xóa?')"><i class="ri-delete-bin-2-line"></i> Xóa</button>
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
                                    <div class="dataTables_info" id="fixed-header-datatable_info" role="status" aria-live="polite">
                                        Showing {{ $categories->firstItem() }} to {{ $categories->lastItem() }} of {{ $categories->total() }} entries
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="fixed-header-datatable_paginate">
                                        {{ $categories->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>
@endsection
