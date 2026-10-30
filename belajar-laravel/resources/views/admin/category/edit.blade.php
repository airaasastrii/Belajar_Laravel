@extends('admin.layouts.app')
@section('title', 'Tambah Kategori');
@section('subtitle', 'Perbarui kategori berhasil')

@section('content')
    <form action="{{ route('admin.category.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label-custom">Nama Lengkap *</label>
            <input type="text"
            class="form-control" name="name" required value="{{ old('name', $category->name) }}">
            @error('name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom">Slug (opsional)</label>
            <input type="text"
            class="form-control" name="slug" required value="{{ old('slug', $category->slug) }}">
            @error('slug')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom">Password Baru</label>
            <input type="password"
            class="form-control" name="password">
            <div class="form-text">
                <small>Kosongkan jika ingin mengubah password. Isi hanya jika ingin menggunakan password baru</small>
            </div>
            @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn-custom btn-custom-primary">
                Simpan
            </button>
            <a href="{{ url()->previous() }}" class="text-muted">Kembali</a>
        </div>
    </form>

@endsection
