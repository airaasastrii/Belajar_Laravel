@extends('admin.layouts.app')
@section('title', 'Edit Kategori');
@section('subtitle', 'Perbarui kategori produk')

@section('content')
    <form action="{{ route('admin.category.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label-custom">Nama Kategori *</label>
            <input type="text" class="form-control" name="name" required value="{{ old('name', $category->name) }}">
            @error('name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom">Slug (Opsional) </label>
            <input type="text" class="form-control" name="slug" value="{{ old('slug', $category->slug) }}">
            @error('slug')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom">Ikon </label>
            <input type="text" class="form-control" name="icon" value="{{ old('icon', $category->icon) }}">
            @error('icon')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom">Urutan Tampil </label>
            <input type="number" class="form-control" name="sort_order"
                value="{{ old('sort_order', $category->sort_order) }}">
            @error('sort_order')
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
