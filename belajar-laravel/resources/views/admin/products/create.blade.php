@extends('admin.layouts.app')
@section('title', 'Tambah Produk');
@section('subtitle', 'Tambahkan produk baru untuk ditambilkan di PPKD Sticker')

@section('content')
    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Nama Produk</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Slug (opsional)</label>
                    <input type="text" name="slug" class="form-control">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-custom">Kategori</label>
                    <select name="category_id" class="form-control">
                        <option value="">--Pilih Kategori--</option>
                        @foreach ($categories as $c)
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>



        <div class="mb-3">
            <label for="">Deskripsi Singkat</label>
            <input type="text" name="brief_description" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="">Deskripsi</label>
            <textarea type="text" name="description" cols="30" rows="30" class="d-none" required></textarea>
            <div id="editor">{!! old('description') !!}</div>
            {{-- tanda seru (!! 2 kali) unESCAPED -> {{}} kalo itu ESCAPED --}}
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="">Harga</label>
                    <input type="number" class="form-control" name="price">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="">Harga Art Cartoon</label>
                    <input type="number" class="form-control" name="price_art_cartoon">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="">Harga Art Paper</label>
                    <input type="number" class="form-control" name="price_art_paper">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="">Harga HVS</label>
                    <input type="number" class="form-control" name="price_hvs">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="" class="form-label">Harga Laminating Doft</label>
                    <input type="number" class="form-control" name="price_doft">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="" class="form-label">Harga Laminating Glossy</label>
                    <input type="number" class="form-control" name="price_glossy">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="mb-3">
                    <label for="">Harga Potong (Min 5x5 sm)</label>
                    <input type="number" class="form-control" name="cutting_price">
                </div>
            </div>

            {{-- Gambar 1 --}}
            <div class="mb-3">
                <label for="">Gambar 1</label>
                <input type="file" class="form-control" name="images[]" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Teks Alternatif 1</label>
                <input type="text" name="alt[]" id="" class="form-control">
            </div>
            <div class="mb">
                <label for="" class="form-label">Urutan Gambar 1</label>
                <input type="text" name="sort_order[]" id="" class="form-control">
            </div>

            {{-- Gambar 2 --}}
            <div class="mb-3">
                <label for="">Gambar 2</label>
                <input type="file" class="form-control" name="images[]" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Teks Alternatif 2</label>
                <input type="text" name="alt[]" id="" class="form-control">
            </div>
            <div class="mb">
                <label for="" class="form-label">Urutan Gambar 2</label>
                <input type="text" name="sort_order[]" id="" class="form-control">
            </div>

            {{-- Gambar 3 --}}
            <div class="mb-3">
                <label for="">Gambar 3</label>
                <input type="file" class="form-control" name="images[]" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Teks Alternatif 3</label>
                <input type="text" name="alt[]" id="" class="form-control">
            </div>
            <div class="mb">
                <label for="" class="form-label">Urutan Gambar 3</label>
                <input type="text" name="sort_order[]" id="" class="form-control">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn-custom btn-custom-primary">Simpan</button>
                <button type="button" class="btn-custom btn-custom-warning">Kembali</button>
            </div>
        </div>
    </form>

    @endsection
