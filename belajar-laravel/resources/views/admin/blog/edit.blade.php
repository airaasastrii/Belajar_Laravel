@extends('admin.layouts.app')
@section('title', 'Edit Kategori');
@section('subtitle', 'Perbarui kategori blog')

@section('content')
    <form action="{{ route('admin.category_blog.update', $categoryBlog->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label-custom">Nama Kategori *</label>
            <input type="text" class="form-control" name="name" required value="{{ old('name', $categoryBlog->name) }}">
            @error('name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom">Slug (Opsional) </label>
            <input type="text" class="form-control" name="slug" value="{{ old('slug', $categoryBlog->slug) }}">
            @error('slug')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn-custom btn-custom-primary">
                Simpan
            </button>
            <a href="{{ url()->previous() }}" class="btn-custom btn-custom-secondary">Kembali</a>
        </div>
    </form>
@endsection
