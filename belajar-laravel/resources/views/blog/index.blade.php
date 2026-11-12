@extends('layouts.app')
@section('content')
    <div class="flex flex-col w-full">
        <div class="bg-light border-bottom py-2">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 py-1" style="font-size: 0.85rem;">
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none text-muted d-inline-flex align-items-center gap-1"
                                href="index.html">
                                <i class="bi bi-house-door"></i> Beranda
                            </a>
                        </li>
                        <li aria-current="page" class="breadcrumb-item active text-primary fw-semibold">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- BEGIN: BlogHero -->
        <section class="py-4 py-lg-5 bg-white border-bottom">
            <div class="container">
                <div class="row align-items-end g-4">
                    <div class="col-lg-7">
                        <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-light text-primary fw-semibold mb-3 border"
                            style="font-size: 0.8rem;">
                            <i class="bi bi-journal-text text-danger"></i> Blog &amp; Edukasi
                        </div>
                        <h1 class="display-6 fw-bold text-dark mb-3 lh-sm">Artikel &amp; tips cetak</h1>
                        <p class="text-muted fs-6 mb-0 lh-base">Panduan bahan, finishing, dan ide promosi dari tim
                            PrimaGraphia.</p>
                    </div>
                    <div class="col-lg-5">
                        <form class="blog-search" role="search" onsubmit="return false;" action="{{ route('blog.index') }}" method="GET">
                            @if(request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            <label class="form-label small fw-semibold text-muted" for="blogSearchInput">Cari
                                artikel</label>
                            <div class="input-group shadow-sm rounded-pill overflow-hidden border">
                                <span class="input-group-text bg-white border-0 text-muted ps-3"><i
                                        class="bi bi-search"></i></span>
                                <input autocomplete="off" class="form-control border-0 ps-1" id="blogSearchInput"
                                    maxlength="100" placeholder="Cari artikel, mis. stiker, banner…"
                                    style="font-size: 0.9rem;" type="search" value="{{ request('search') }}"/>
                            </div>
                                <input type="submit" value="search">
                        </form>
                    </div>
                </div>
                <div class="pg-category-pills mt-4" aria-label="Kategori artikel" role="group">
                    <button class="pill-filter-btn active" data-blog-filter="all" type="button">Semua <span
                            class="opacity-75 ms-1">{{ $totalBlogsCount ?? 0 }}</span></button>
                            @foreach ($categories as $category)
                                <button class="pill-filter-btn" data-blog-filter="tips-dan-trick" type="button">
                                    <i class="bi bi-lightbulb me-1"></i>{{ $category->name ?? '' }}
                                    <span class="opacity-75 ms-1">{{ $category->blogs_count ?? 0 }}</span>
                                </button>
                            @endforeach
                </div>
            </div>
        </section>
        <!-- END: BlogHero -->
        <!-- BEGIN: BlogList -->
        <section class="py-5 bg-light" id="artikel">
            <div class="container">
                <!-- Featured article -->
                @if ($featuredPost)
                <article class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4 blog-item blog-featured"
                    data-category="tips-dan-trick">
                    <div class="row g-0 align-items-stretch">
                        <div class="col-lg-7">
                            <a class="ratio ratio-3x2 d-block h-100 bg-light blog-card-media"
                                href="{{ route('blog.show', $featuredPost->slug) }}" tabindex="-1"
                                aria-hidden="true">
                                <img alt="{{ $featuredPost->name }}" class="object-fit-cover" data-img-fallback fetchpriority="high"
                                    src="{{ asset('storage/' . $featuredPost->cover_path) }}" />
                            </a>
                        </div>
                        <div class="col-lg-5 d-flex">
                            <div class="card-body p-4 p-xl-5 d-flex flex-column justify-content-center">
                                <span class="badge bg-danger rounded-pill align-self-start px-3 py-2 mb-3"><i
                                        class="bi bi-stars me-1"></i>Artikel terbaru</span>
                                <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                        class="text-primary fw-semibold">Tips &amp; Trick</span><span
                                        aria-hidden="true">·</span><time datetime="2026-10-28">28 Okt 2026</time><span
                                        aria-hidden="true">·</span><span>4 menit baca</span></div>
                                <h2 class="h3 fw-bold lh-sm mb-3"><a class="text-dark"
                                        href="blog-mengapa-visual-branding-penting-dalam-penyelenggaraan-event.html">{{$featuredPost->name}}</a></h2>
                                <p class="text-muted mb-4">{{$featuredPost->brief_description}}</p>
                                <a class="btn btn-pg-primary rounded-pill px-4 py-2 fw-semibold align-self-start d-inline-flex align-items-center gap-2"
                                    href="blog-mengapa-visual-branding-penting-dalam-penyelenggaraan-event.html">Baca
                                    artikel <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
                @endif
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="blogGrid">
                    @foreach ($blogs as $blog)
                        <div class="col blog-item" data-category="product">
                            <article class="article-card blog-card">
                                <a class="ratio ratio-3x2 d-block overflow-hidden bg-light blog-card-media"
                                    href="{{ route('blog.show', $blog->slug) }}" tabinex="-1" aria-hidden="true">
                                    <img alt="{{ $blog->name }}" class="object-fit-cover" data-img-fallback loading="lazy"
                                        src="{{ asset('storage/' .$blog->cover_path) }}" />
                                </a>
                                <div class="p-3 p-lg-4 d-flex flex-column flex-grow-1">
                                    <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                            class="text-primary fw-semibold">{{ $blog->category->name ?? '' }}</span><span aria-hidden="true">·
                                        </span>
                                        <time datetime="{{ $blog->created_at->format('Y-m-d') }}">
                                            {{ $blog->created_at->translatedFormat('d M Y') }}
                                        </time>
                                    </div>
                                    <h2 class="h6 fw-bold mb-2 lh-sm">
                                        <a class="text-dark stretched-link-title"
                                            href="{{route('blog.show', $blog->slug)}}">
                                            {{ $blog->name ?? '' }}
                                        </a>
                                    </h2>
                                    <p class="text-muted small mb-3 flex-grow-1 blog-excerpt">{{$blog->brief_description ?? ''}}</p>
                                    <a class="text-primary fw-bold small d-inline-flex align-items-center gap-1 mt-auto"
                                        href="{{ route('blog.show', $blog->slug) }}">
                                        Baca artikel <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="alert alert-light border text-center py-5 rounded-4 mt-4 d-none" id="blogNoResults">
                    <i class="bi bi-journal-x fs-1 text-muted d-block mb-2"></i>
                    <h2 class="h6 fw-bold">Artikel tidak ditemukan</h2>
                    <p class="small text-muted mb-3">Coba kata kunci atau kategori lain.</p>
                    <button class="btn btn-sm btn-outline-primary rounded-pill px-3" id="blogResetBtn"
                        type="button">Tampilkan semua artikel</button>
                </div>
            </div>
        </section>
        <!-- END: BlogList -->
        <section class="py-4 bg-white" data-purpose="customer-service-cta">
            <div class="container">
                <div class="cta-wa-banner p-4 p-md-5">
                    <div class="row align-items-center justify-content-between g-3">
                        <div class="col-lg-8">
                            <h2 class="h4 fw-bold text-dark mb-2">Siap mencetak ide Anda?</h2>
                            <p class="text-muted mb-0">Pesan online, file dicek tim kami sebelum dicetak. Butuh saran bahan
                                atau finishing? Chat CS kami.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end d-flex flex-wrap gap-2 justify-content-lg-end">
                            <a class="btn btn-pg-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2 shadow-sm"
                                href="katalog.html">
                                <i class="bi bi-grid"></i> Lihat produk
                            </a>
                            <a class="btn btn-outline-secondary rounded-pill px-3 py-2 fw-semibold d-inline-flex align-items-center gap-2"
                                href="kontak.html">
                                <i class="bi bi-chat-dots"></i> Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
