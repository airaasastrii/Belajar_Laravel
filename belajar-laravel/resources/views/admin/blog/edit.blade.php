@extends('admin.layouts.app')
@section('title', 'Edit Blogggg');
@section('subtitle', 'Perbarui blog')

@section('content')
    <form action="{{ route('admin.blog.update', $blog->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label-custom">Kategori *</label>
            <select class="form-control" name="blog_category_id">
                @foreach ($categories as $category)
                    <option {{ $blog->blog_category_id === $category->id ? 'selected' : '' }} value={{ $category->id }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom">Judul *</label>
            <input class="form-control" name="name" required value="{{ old('name', $blog->name) }}">
            @error('name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom">Slug (Opsional) </label>
            <input type="text" class="form-control" name="slug" value="{{ old('slug', $blog->slug) }}">
            @error('slug')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom">Deskripsi Singkat (Opsional)</label>
            <input type="text" class="form-control" name="brief_description" value="{{ old('brief_description', $blog->brief_description) }}">
            @error('brief_description')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom">Isi</label>
            <textarea name="content" cols="30" rows="10" class="d-none">{{old('content', $blog->content)}}</textarea>
            <div id="editor">{!! old('content', $blog->content) !!}</div>
            @error('content')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label-custom">Author</label>
            <input type="text" class="form-control" name="author" readonly="true" disabled value="{{ auth()->user()->name }}">
            @error('author')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-6">
                    <label for="" class="form-label-custom">Cover Path</label>
                    <input type="file">
                </div>
                <div class="col-6">
                    <label for="" class="form-label-custom">Cover Path Exsiting</label>
                    <img src="{{ asset('storage/' . $blog->cover_path) }}" alt="">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn-custom btn-custom-primary">
                Simpan
            </button>
            <a href="{{ url()->previous() }}" class="btn-custom btn-custom-secondary">Kembali</a>
        </div>
    </form>
@endsection
