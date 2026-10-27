@extends('admin.layouts.app')
@section('title', 'Tambah User');
@section('subtitle', 'Buat akun baru dengan akses ke Panel Admin')

@section('content')
<form action="{{ route('admin.user.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label-custom">Nama Lengkap *</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label-custom">Email *</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label-custom">Password *</label>
        <input type="text" class="form-control" name="password" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn-custom btn-custom-primary">Simpan</button>
    </div>
</form>
@endsection
