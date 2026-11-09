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
                        <form class="blog-search" role="search" onsubmit="return false;">
                            <label class="form-label small fw-semibold text-muted" for="blogSearchInput">Cari
                                artikel</label>
                            <div class="input-group shadow-sm rounded-pill overflow-hidden border">
                                <span class="input-group-text bg-white border-0 text-muted ps-3"><i
                                        class="bi bi-search"></i></span>
                                <input autocomplete="off" class="form-control border-0 ps-1" id="blogSearchInput"
                                    maxlength="100" placeholder="Cari artikel, mis. stiker, banner…"
                                    style="font-size: 0.9rem;" type="search" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="pg-category-pills mt-4" aria-label="Kategori artikel" role="group">
                    <button class="pill-filter-btn active" data-blog-filter="all" type="button">Semua <span
                            class="opacity-75 ms-1">12</span></button>
                    <button class="pill-filter-btn" data-blog-filter="tips-dan-trick" type="button"><i
                            class="bi bi-lightbulb me-1"></i>Tips &amp; Trick <span
                            class="opacity-75 ms-1">2</span></button>
                    <button class="pill-filter-btn" data-blog-filter="product" type="button"><i
                            class="bi bi-box-seam me-1"></i>Product <span class="opacity-75 ms-1">7</span></button>
                    <button class="pill-filter-btn" data-blog-filter="event-dan-activation" type="button"><i
                            class="bi bi-calendar-event me-1"></i>Event &amp; Activation <span
                            class="opacity-75 ms-1">2</span></button>
                    <button class="pill-filter-btn" data-blog-filter="promo" type="button"><i
                            class="bi bi-megaphone me-1"></i>Promo <span class="opacity-75 ms-1">1</span></button>
                </div>
            </div>
        </section>
        <!-- END: BlogHero -->
        <!-- BEGIN: BlogList -->
        <section class="py-5 bg-light" id="artikel">
            <div class="container">
                <!-- Featured article -->
                <article class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4 blog-item blog-featured"
                    data-category="tips-dan-trick">
                    <div class="row g-0 align-items-stretch">
                        <div class="col-lg-7">
                            <a class="ratio ratio-3x2 d-block h-100 bg-light blog-card-media"
                                href="blog-mengapa-visual-branding-penting-dalam-penyelenggaraan-event.html" tabindex="-1"
                                aria-hidden="true">
                                <img alt="" class="object-fit-cover" data-img-fallback fetchpriority="high"
                                    src="https://api-minio.primagraphia.co.id/web-asset/images/blog/04%20%282%29_20261028102354_882.png" />
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
                                        href="blog-mengapa-visual-branding-penting-dalam-penyelenggaraan-event.html">Mengapa
                                        Visual Branding Penting dalam Penyelenggaraan Event?</a></h2>
                                <p class="text-muted mb-4">Ketahui pentingnya visual branding dalam event serta peran
                                    backdrop, banner, signage, dan media cetak untuk memperkuat identitas acara.</p>
                                <a class="btn btn-pg-primary rounded-pill px-4 py-2 fw-semibold align-self-start d-inline-flex align-items-center gap-2"
                                    href="blog-mengapa-visual-branding-penting-dalam-penyelenggaraan-event.html">Baca
                                    artikel <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="blogGrid">
                    <div class="col blog-item" data-category="product">
                        <article class="article-card blog-card">
                            <a class="ratio ratio-3x2 d-block overflow-hidden bg-light blog-card-media"
                                href="blog-5-media-cetak-untuk-mendukung-kegiatan-hari-sumpah-pemuda-2026.html"
                                tabindex="-1" aria-hidden="true">
                                <img alt="" class="object-fit-cover" data-img-fallback loading="lazy"
                                    src="https://api-minio.primagraphia.co.id/web-asset/images/blog/03%20%283%29_20261028102425_128.png" />
                            </a>
                            <div class="p-3 p-lg-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                        class="text-primary fw-semibold">Product</span><span
                                        aria-hidden="true">·</span><time datetime="2026-10-28">28 Okt 2026</time><span
                                        aria-hidden="true">·</span><span>3 menit baca</span></div>
                                <h2 class="h6 fw-bold mb-2 lh-sm"><a class="text-dark stretched-link-title"
                                        href="blog-5-media-cetak-untuk-mendukung-kegiatan-hari-sumpah-pemuda-2026.html">5
                                        Media Cetak untuk Mendukung Kegiatan Hari Sumpah Pemuda 2026</a></h2>
                                <p class="text-muted small mb-3 flex-grow-1 blog-excerpt">Kenali 5 media cetak untuk
                                    kegiatan Hari Sumpah Pemuda 2026, mulai dari spanduk, backdrop, banner, sertifikat,
                                    hingga ID card.</p>
                                <a class="text-primary fw-bold small d-inline-flex align-items-center gap-1 mt-auto"
                                    href="blog-5-media-cetak-untuk-mendukung-kegiatan-hari-sumpah-pemuda-2026.html">
                                    Baca artikel <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col blog-item" data-category="product">
                        <article class="article-card blog-card">
                            <a class="ratio ratio-3x2 d-block overflow-hidden bg-light blog-card-media"
                                href="blog-4-jenis-media-cetak-untuk-menyampaikan-aspirasi-di-ruang-publik.html"
                                tabindex="-1" aria-hidden="true">
                                <img alt="" class="object-fit-cover" data-img-fallback loading="lazy"
                                    src="https://api-minio.primagraphia.co.id/web-asset/images/blog/02%20%282%29_20261028100254_644.png" />
                            </a>
                            <div class="p-3 p-lg-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                        class="text-primary fw-semibold">Product</span><span
                                        aria-hidden="true">·</span><time datetime="2026-10-28">28 Okt 2026</time><span
                                        aria-hidden="true">·</span><span>3 menit baca</span></div>
                                <h2 class="h6 fw-bold mb-2 lh-sm"><a class="text-dark stretched-link-title"
                                        href="blog-4-jenis-media-cetak-untuk-menyampaikan-aspirasi-di-ruang-publik.html">4
                                        Jenis Media Cetak untuk Menyampaikan Aspirasi di Ruang Publik</a></h2>
                                <p class="text-muted small mb-3 flex-grow-1 blog-excerpt">Kenali 4 jenis media cetak untuk
                                    menyampaikan aspirasi di ruang publik, mulai dari spanduk, poster, bendera kain, hingga
                                    flyer.</p>
                                <a class="text-primary fw-bold small d-inline-flex align-items-center gap-1 mt-auto"
                                    href="blog-4-jenis-media-cetak-untuk-menyampaikan-aspirasi-di-ruang-publik.html">
                                    Baca artikel <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col blog-item" data-category="event-dan-activation">
                        <article class="article-card blog-card">
                            <a class="ratio ratio-3x2 d-block overflow-hidden bg-light blog-card-media"
                                href="blog-mengenal-item-cetakan-di-synchronize-fest-2026-yang-mendukung-kebutuhan-event.html"
                                tabindex="-1" aria-hidden="true">
                                <img alt="" class="object-fit-cover" data-img-fallback loading="lazy"
                                    src="https://api-minio.primagraphia.co.id/web-asset/images/blog/01%20%282%29_20261028095101_461.png" />
                            </a>
                            <div class="p-3 p-lg-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                        class="text-primary fw-semibold">Event &amp; Activation</span><span
                                        aria-hidden="true">·</span><time datetime="2026-10-28">28 Okt 2026</time><span
                                        aria-hidden="true">·</span><span>3 menit baca</span></div>
                                <h2 class="h6 fw-bold mb-2 lh-sm"><a class="text-dark stretched-link-title"
                                        href="blog-mengenal-item-cetakan-di-synchronize-fest-2026-yang-mendukung-kebutuhan-event.html">Mengenal
                                        Item Cetakan di Synchronize Fest 2026 yang Mendukung Kebutuhan Event</a></h2>
                                <p class="text-muted small mb-3 flex-grow-1 blog-excerpt">Kenali berbagai item cetakan di
                                    Synchronize Fest 2026 yang didukung PrimaGraphia, mulai dari ID card, signage, banner,
                                    kain satin, wristband, hingga t-shirt</p>
                                <a class="text-primary fw-bold small d-inline-flex align-items-center gap-1 mt-auto"
                                    href="blog-mengenal-item-cetakan-di-synchronize-fest-2026-yang-mendukung-kebutuhan-event.html">
                                    Baca artikel <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col blog-item" data-category="tips-dan-trick">
                        <article class="article-card blog-card">
                            <a class="ratio ratio-3x2 d-block overflow-hidden bg-light blog-card-media"
                                href="blog-tips-membuat-desain-kalender-custom-agar-menarik-dan-mudah-dibaca.html"
                                tabindex="-1" aria-hidden="true">
                                <img alt="" class="object-fit-cover" data-img-fallback loading="lazy"
                                    src="https://api-minio.primagraphia.co.id/web-asset/images/blog/week_5_3.png" />
                            </a>
                            <div class="p-3 p-lg-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                        class="text-primary fw-semibold">Tips &amp; Trick</span><span
                                        aria-hidden="true">·</span><time datetime="2026-10-19">19 Okt 2026</time><span
                                        aria-hidden="true">·</span><span>3 menit baca</span></div>
                                <h2 class="h6 fw-bold mb-2 lh-sm"><a class="text-dark stretched-link-title"
                                        href="blog-tips-membuat-desain-kalender-custom-agar-menarik-dan-mudah-dibaca.html">Tips
                                        Membuat Desain Kalender Custom agar Menarik dan Mudah Dibaca</a></h2>
                                <p class="text-muted small mb-3 flex-grow-1 blog-excerpt">Simak tips membuat desain
                                    kalender custom yang menarik dan mudah dibaca, mulai dari pemilihan warna, tata letak
                                    tanggal, hingga persiapan cetak kalender.</p>
                                <a class="text-primary fw-bold small d-inline-flex align-items-center gap-1 mt-auto"
                                    href="blog-tips-membuat-desain-kalender-custom-agar-menarik-dan-mudah-dibaca.html">
                                    Baca artikel <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col blog-item" data-category="event-dan-activation">
                        <article class="article-card blog-card">
                            <a class="ratio ratio-3x2 d-block overflow-hidden bg-light blog-card-media"
                                href="blog-5-barang-cetakan-yang-bisa-melengkapi-pengalaman-nonton-festival-musik.html"
                                tabindex="-1" aria-hidden="true">
                                <img alt="" class="object-fit-cover" data-img-fallback loading="lazy"
                                    src="https://api-minio.primagraphia.co.id/web-asset/images/blog/04_WEEK_3_OCT_20261019174751_223.png" />
                            </a>
                            <div class="p-3 p-lg-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                        class="text-primary fw-semibold">Event &amp; Activation</span><span
                                        aria-hidden="true">·</span><time datetime="2026-10-19">19 Okt 2026</time><span
                                        aria-hidden="true">·</span><span>2 menit baca</span></div>
                                <h2 class="h6 fw-bold mb-2 lh-sm"><a class="text-dark stretched-link-title"
                                        href="blog-5-barang-cetakan-yang-bisa-melengkapi-pengalaman-nonton-festival-musik.html">5
                                        Barang Cetakan yang Bisa Melengkapi Pengalaman Nonton Festival Musik</a></h2>
                                <p class="text-muted small mb-3 flex-grow-1 blog-excerpt">Mau nonton festival musik? Kenali
                                    5 barang cetakan seperti kaos custom, tote bag, kipas, pouch, dan aksesori untuk
                                    melengkapi pengalaman konser.</p>
                                <a class="text-primary fw-bold small d-inline-flex align-items-center gap-1 mt-auto"
                                    href="blog-5-barang-cetakan-yang-bisa-melengkapi-pengalaman-nonton-festival-musik.html">
                                    Baca artikel <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col blog-item" data-category="product">
                        <article class="article-card blog-card">
                            <a class="ratio ratio-3x2 d-block overflow-hidden bg-light blog-card-media"
                                href="blog-perbedaan-flyer-leaflet-brosur-dan-katalog.html" tabindex="-1"
                                aria-hidden="true">
                                <img alt="" class="object-fit-cover" data-img-fallback loading="lazy"
                                    src="https://api-minio.primagraphia.co.id/web-asset/images/blog/02-WEEK_3_OCT_20261019173826_625.png" />
                            </a>
                            <div class="p-3 p-lg-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                        class="text-primary fw-semibold">Product</span><span
                                        aria-hidden="true">·</span><time datetime="2026-10-19">19 Okt 2026</time><span
                                        aria-hidden="true">·</span><span>3 menit baca</span></div>
                                <h2 class="h6 fw-bold mb-2 lh-sm"><a class="text-dark stretched-link-title"
                                        href="blog-perbedaan-flyer-leaflet-brosur-dan-katalog.html">Perbedaan Flyer,
                                        Leaflet, Brosur, dan Katalog</a></h2>
                                <p class="text-muted small mb-3 flex-grow-1 blog-excerpt">Kenali perbedaan flyer, leaflet,
                                    brosur, dan katalog berdasarkan bentuk, fungsi, dan penggunaannya untuk memilih media
                                    promosi cetak yang tepat.</p>
                                <a class="text-primary fw-bold small d-inline-flex align-items-center gap-1 mt-auto"
                                    href="blog-perbedaan-flyer-leaflet-brosur-dan-katalog.html">
                                    Baca artikel <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col blog-item" data-category="product">
                        <article class="article-card blog-card">
                            <a class="ratio ratio-3x2 d-block overflow-hidden bg-light blog-card-media"
                                href="blog-apa-saja-kebutuhan-cetak-untuk-seminar-dan-corporate-event.html" tabindex="-1"
                                aria-hidden="true">
                                <img alt="" class="object-fit-cover" data-img-fallback loading="lazy"
                                    src="https://api-minio.primagraphia.co.id/web-asset/images/blog/01-WEEK_3_OCT_20261019173223_325.png" />
                            </a>
                            <div class="p-3 p-lg-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                        class="text-primary fw-semibold">Product</span><span
                                        aria-hidden="true">·</span><time datetime="2026-10-19">19 Okt 2026</time><span
                                        aria-hidden="true">·</span><span>2 menit baca</span></div>
                                <h2 class="h6 fw-bold mb-2 lh-sm"><a class="text-dark stretched-link-title"
                                        href="blog-apa-saja-kebutuhan-cetak-untuk-seminar-dan-corporate-event.html">Apa
                                        Saja Kebutuhan Cetak untuk Seminar dan Corporate Event?</a></h2>
                                <p class="text-muted small mb-3 flex-grow-1 blog-excerpt">kebutuhan cetak seminar,
                                    kebutuhan cetak event, cetak seminar perusahaan, perlengkapan corporate event, cetak
                                    backdrop seminar, seminar kit custom.</p>
                                <a class="text-primary fw-bold small d-inline-flex align-items-center gap-1 mt-auto"
                                    href="blog-apa-saja-kebutuhan-cetak-untuk-seminar-dan-corporate-event.html">
                                    Baca artikel <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col blog-item" data-category="promo">
                        <article class="article-card blog-card">
                            <a class="ratio ratio-3x2 d-block overflow-hidden bg-light blog-card-media"
                                href="blog-mau-cetak-menu-restoran-kenali-pilihan-bahan-dan-finishing.html" tabindex="-1"
                                aria-hidden="true">
                                <img alt="" class="object-fit-cover" data-img-fallback loading="lazy"
                                    src="https://api-minio.primagraphia.co.id/web-asset/images/blog/03_WEEK_3_OCT_20261019161249_158.png" />
                            </a>
                            <div class="p-3 p-lg-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                        class="text-primary fw-semibold">Promo</span><span
                                        aria-hidden="true">·</span><time datetime="2026-10-19">19 Okt 2026</time><span
                                        aria-hidden="true">·</span><span>3 menit baca</span></div>
                                <h2 class="h6 fw-bold mb-2 lh-sm"><a class="text-dark stretched-link-title"
                                        href="blog-mau-cetak-menu-restoran-kenali-pilihan-bahan-dan-finishing.html">Mau
                                        Cetak Menu Restoran? Kenali Pilihan Bahan dan Finishing</a></h2>
                                <p class="text-muted small mb-3 flex-grow-1 blog-excerpt">Cetak menu restoran dengan bahan
                                    dan finishing yang tepat. Bandingkan art paper vs art carton, laminasi doff vs glossy,
                                    plus tips desain menu agar mudah dibaca.</p>
                                <a class="text-primary fw-bold small d-inline-flex align-items-center gap-1 mt-auto"
                                    href="blog-mau-cetak-menu-restoran-kenali-pilihan-bahan-dan-finishing.html">
                                    Baca artikel <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col blog-item" data-category="product">
                        <article class="article-card blog-card">
                            <a class="ratio ratio-3x2 d-block overflow-hidden bg-light blog-card-media"
                                href="blog-cetak-kalender-untuk-tahun-baru-ini-pilihan-di-primagraphia.html"
                                tabindex="-1" aria-hidden="true">
                                <img alt="" class="object-fit-cover" data-img-fallback loading="lazy"
                                    src="https://api-minio.primagraphia.co.id/web-asset/images/blog/WhatsApp_Image_2026-10-10_at_10.46.12_20261010110124_391.jpeg" />
                            </a>
                            <div class="p-3 p-lg-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                        class="text-primary fw-semibold">Product</span><span
                                        aria-hidden="true">·</span><time datetime="2026-10-10">10 Okt 2026</time><span
                                        aria-hidden="true">·</span><span>3 menit baca</span></div>
                                <h2 class="h6 fw-bold mb-2 lh-sm"><a class="text-dark stretched-link-title"
                                        href="blog-cetak-kalender-untuk-tahun-baru-ini-pilihan-di-primagraphia.html">Cetak
                                        Kalender untuk Tahun Baru? Ini Pilihan di PrimaGraphia</a></h2>
                                <p class="text-muted small mb-3 flex-grow-1 blog-excerpt">Cari cetak kalender untuk tahun
                                    baru? PrimaGraphia menyediakan kalender dinding, meja, dan board dengan harga mulai
                                    Rp2.950 sesuai jumlah pesanan.</p>
                                <a class="text-primary fw-bold small d-inline-flex align-items-center gap-1 mt-auto"
                                    href="blog-cetak-kalender-untuk-tahun-baru-ini-pilihan-di-primagraphia.html">
                                    Baca artikel <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col blog-item" data-category="product">
                        <article class="article-card blog-card">
                            <a class="ratio ratio-3x2 d-block overflow-hidden bg-light blog-card-media"
                                href="blog-sticker-label-mudah-mengelupas-ini-penyebab-dan-cara-memilih-yang-tepat.html"
                                tabindex="-1" aria-hidden="true">
                                <img alt="" class="object-fit-cover" data-img-fallback loading="lazy"
                                    src="https://api-minio.primagraphia.co.id/web-asset/images/blog/02_%281%29_20261009172440_507.png" />
                            </a>
                            <div class="p-3 p-lg-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                        class="text-primary fw-semibold">Product</span><span
                                        aria-hidden="true">·</span><time datetime="2026-10-09">9 Okt 2026</time><span
                                        aria-hidden="true">·</span><span>3 menit baca</span></div>
                                <h2 class="h6 fw-bold mb-2 lh-sm"><a class="text-dark stretched-link-title"
                                        href="blog-sticker-label-mudah-mengelupas-ini-penyebab-dan-cara-memilih-yang-tepat.html">Sticker
                                        Label Mudah Mengelupas? Ini Penyebab dan Cara Memilih yang Tepat</a></h2>
                                <p class="text-muted small mb-3 flex-grow-1 blog-excerpt">Sticker label mudah mengelupas?
                                    Kenali penyebabnya dan cara memilih bahan sticker label yang tepat sesuai jenis kemasan
                                    dan kebutuhan produk.</p>
                                <a class="text-primary fw-bold small d-inline-flex align-items-center gap-1 mt-auto"
                                    href="blog-sticker-label-mudah-mengelupas-ini-penyebab-dan-cara-memilih-yang-tepat.html">
                                    Baca artikel <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col blog-item" data-category="product">
                        <article class="article-card blog-card">
                            <a class="ratio ratio-3x2 d-block overflow-hidden bg-light blog-card-media"
                                href="blog-mau-cetak-poster-kenali-ukuran-yang-paling-umum.html" tabindex="-1"
                                aria-hidden="true">
                                <img alt="" class="object-fit-cover" data-img-fallback loading="lazy"
                                    src="https://api-minio.primagraphia.co.id/web-asset/images/blog/03_%281%29_20261009152851_704.png" />
                            </a>
                            <div class="p-3 p-lg-4 d-flex flex-column flex-grow-1">
                                <div class="d-flex flex-wrap align-items-center gap-2 text-muted small mb-2"><span
                                        class="text-primary fw-semibold">Product</span><span
                                        aria-hidden="true">·</span><time datetime="2026-10-09">9 Okt 2026</time><span
                                        aria-hidden="true">·</span><span>3 menit baca</span></div>
                                <h2 class="h6 fw-bold mb-2 lh-sm"><a class="text-dark stretched-link-title"
                                        href="blog-mau-cetak-poster-kenali-ukuran-yang-paling-umum.html">Mau Cetak Poster?
                                        Kenali Ukuran yang Paling Umum</a></h2>
                                <p class="text-muted small mb-3 flex-grow-1 blog-excerpt">Mau cetak poster? Kenali ukuran
                                    poster A4, A3, A2, dan A1 serta cara memilih ukuran yang sesuai dengan kebutuhan promosi
                                    dan lokasi pemasangan</p>
                                <a class="text-primary fw-bold small d-inline-flex align-items-center gap-1 mt-auto"
                                    href="blog-mau-cetak-poster-kenali-ukuran-yang-paling-umum.html">
                                    Baca artikel <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    </div>
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
