@extends('admin.layouts.app')
@section('title', 'Managemen Kategori')
@section('subtitle', 'Pengelompokkan kategori blog')

@section('content')
    <div class="mb-3" align="right">
        <a href="{{ route('admin.category_blog.create') }}"
        class="btn-table-action">
            <i class="bi bi-person-add"></i> Tambah Kategori
        </a>

    </div>
    <div class="table-responsive">
        <table class="table-custom">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Slug Url</th>
                    <th>Urutan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $data)
                    <tr>
                        <td>{{ $key += 1 }}</td>
                        <td>{{ $data->name ?? '' }}</td>
                        <td>{{ $data->slug ?? '' }}</td>
                        <td>
                            <a class="table-btn-action" title="Edit" href="{{ route('admin.category_blog.edit', $data->id) }}">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.category_blog.destroy', $data->id) }}"
                                method="post" class="d-inline"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="table-btn-action delete" title="Delete" type="submit">
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
