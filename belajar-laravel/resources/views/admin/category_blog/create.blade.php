@extends('admin.layouts.app')
@section('title', 'Tambah Kategori');
@section('subtitle', 'Tambah Kategori Blog Baru')

@section('content')
    <form action="{{ route('admin.category_blog.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label-custom">Nama Kategori *</label>
            <input type="text" class="form-control" name="name" required value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom">Slug (Opsional) </label>
            <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn-custom btn-custom-primary">
                Simpan
            </button>
            <a href="{{ url()->previous() }}" class="btn-custom btn-custom-warning">Kembali</a>
        </div>
    </form>
@endsection
