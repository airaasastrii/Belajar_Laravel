@extends('admin.layouts.app')
@section('title', 'Kelola Produk')
@section('subtitle', 'List seluruh produk di PPKD sticker')
@section('content')
    <div align="right" class="mb-3">
        <a href="{{ route('admin.product.create') }}" class="btn-table-action">
            <i class="bi bi-plus-circle-fill"></i> Tambah Produk
        </a>
    </div>
    <div class="table-responsive mt-1">
        <table class="table-custom" id="table-products">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Kategori</th>
                    <th>Nama Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($item->images != null)
                            @foreach ($item->images as $image)
                                @if ($image->path != null)
                                    <img src="{{ asset('storage/'. $image->path) }}" width="100" alt="{{ $image->alt ?? '' }}">
                                @else
                                    <span class="text-muted">{{ $image->alt ?? 'Gambar tidak ditemukan!' }}</span>
                                @endif
                            @endforeach
                        @else
                            <span class="text-muted">Gambar tidak ditemukan!</span>
                        @endif
                    </td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>Rp. {{ number_format($item->price, 2, ',', '.')}}</td>
                    <td>
                        <a href="{{ route('admin.product.edit', $item->id) }}" class="table-btn-action" title="Edit">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('admin.product.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="table-btn-action" type="submit" title="Delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
