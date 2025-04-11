@extends('admin.layouts.master')

@section('contentAdmin')
    <h2>Chi tiết danh mục</h2>
    <p>ID: {{ $category->id }}</p>
    <p>Tên: {{ $category->name }}</p>
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Quay lại</a>
@endsection
