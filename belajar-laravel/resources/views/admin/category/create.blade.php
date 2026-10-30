@extends('admin.layouts.app')
@section('title', 'Tambah Category');
@section('subtitle', 'Buat akun baru dengan akses ke Panel Admin')

@section('content')
<form action="{{ route('admin.category.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label-custom">Nama Kategori</label>
        <input type="text" class="form-control" name="name" required value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label-custom">Slug (opsional)</label>
        <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
        @error('email')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label-custom">Ikon</label>
        <input type="text" class="form-control" name="icon" value="{{ old('icon') }}">
        @error('icon')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
    <div class="mb-3">
        <label for="" class="form-label-custom">Urutan Tampil</label>
        <input type="number" class="form-control" name="sort_order" value="{{ old('sort_order') }}">
        @error('sort_order')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-custom btn-custom-primary">Simpan</button>
    </div>
</form>
@endsection
