@extends('layouts.app')

@section('content')
    <div class="flex flex-col w-full">
        <div class="container py-3">
            <!-- Breadcrumb Section -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-2 small">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-muted" href="index.html"><i
                                class="bi bi-house-door-fill me-1"></i>Beranda</a></li>
                    <li aria-current="page" class="breadcrumb-item active text-primary fw-semibold">Semua Produk</li>
                </ol>
            </nav>
            <!-- Header Banner Section -->
            <div class="card border-0 rounded-4 shadow-sm mb-4 overflow-hidden position-relative"
                style="background: linear-gradient(135deg, #002e5b 0%, #004b93 60%, #e30613 100%);">
                <div class="position-absolute end-0 top-0 bottom-0 opacity-10 d-none d-md-block pe-5">
                    <i class="bi bi-printer-fill" style="font-size: 11rem; line-height: 1; color: #ffffff;"></i>
                </div>
                <div class="card-body p-4 p-lg-5 text-white position-relative" style="z-index: 2;">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <span class="badge bg-danger rounded-pill px-3 py-1 mb-2 fw-semibold"
                                style="letter-spacing: 0.5px;">KATALOG RESMI PRIMAGRAPHIA</span>
                            <h1 class="display-6 fw-bold mb-2">Semua Produk Percetakan</h1>
                            <p class="lead fs-6 text-white-50 mb-3" style="max-width: 650px;">
                                Pilihan lengkap solusi cetak digital, offset, packaging, promosi usaha, hingga cinderamata
                                dengan standar mutu terbaik, estimasi cepat, dan harga langsung produsen.
                            </p>
                            <div class="d-flex flex-wrap gap-2 text-white small">
                                <span class="badge bg-white bg-opacity-20 text-white rounded-pill px-3 py-1"><i
                                        class="bi bi-lightning-charge-fill text-warning me-1"></i>Bisa Kirim
                                    Se-Indonesia</span>
                                <span class="badge bg-white bg-opacity-20 text-white rounded-pill px-3 py-1"><i
                                        class="bi bi-check-circle-fill text-success me-1"></i>Garansi Cetak Tajam</span>
                                <span class="badge bg-white bg-opacity-20 text-white rounded-pill px-3 py-1"><i
                                        class="bi bi-shield-check text-info me-1"></i>Pembayaran Aman</span>
                            </div>
                        </div>
                        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0 d-none d-lg-block">
                            <div
                                class="bg-white bg-opacity-10 backdrop-blur rounded-3 p-3 d-inline-block text-start border border-white border-opacity-25 shadow-sm">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <i class="bi bi-headset fs-3 text-warning"></i>
                                    <div>
                                        <div class="small fw-semibold text-white">Butuh Ukuran Kustom?</div>
                                        <div class="text-white-50" style="font-size: 0.75rem;">Konsultasikan via Live Chat /
                                            CS</div>
                                    </div>
                                </div>
                                <a class="btn btn-sm btn-light text-primary fw-bold w-100 rounded-pill mt-2"
                                    href="https://wa.me/62811987990">Chat CS Cetak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Catalog 2-Column Section -->
            <div class="row g-4">
                <!-- Kolom Kiri: Sidebar Filter -->
                <aside class="col-lg-3">
                    <div class="card border rounded-4 shadow-sm sticky-top" style="top: 85px; z-index: 10;">
                        <div
                            class="card-header bg-white py-3 border-bottom d-flex align-items-center justify-content-between">
                            <h2 class="h6 mb-0 fw-bold d-flex align-items-center text-dark">
                                <i class="bi bi-funnel-fill text-primary me-2"></i>Filter Produk
                            </h2>
                            <button class="btn btn-link text-danger p-0 small fw-semibold text-decoration-none"
                                onclick="document.querySelectorAll('.filter-form input[type=checkbox]').forEach(el =&gt; el.checked = false); document.getElementById('priceRange').value = 1000000; document.getElementById('priceMax').value = '1.000.000';"
                                type="button">
                                Reset
                            </button>
                        </div>
                        <div class="card-body p-3 overflow-auto filter-form" style="max-height: calc(100vh - 170px);">
                            <!-- Accordion Filter Group -->
                            <div class="accordion accordion-flush" id="filterAccordion">
                                <!-- Filter Kategori -->
                                <div class="accordion-item border-bottom">
                                    <h3 class="accordion-header" id="headingCat">
                                        <button aria-controls="collapseCat" aria-expanded="true"
                                            class="accordion-button px-0 py-2 fw-semibold text-dark shadow-none bg-transparent"
                                            data-bs-target="#collapseCat" data-bs-toggle="collapse" type="button">
                                            Kategori Produk
                                        </button>
                                    </h3>
                                    <div aria-labelledby="headingCat" class="accordion-collapse collapse show"
                                        id="collapseCat">
                                        <div class="accordion-body px-0 pt-1 pb-3">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" id="cat1" type="checkbox" />
                                                <label
                                                    class="form-check-label small text-secondary d-flex justify-content-between"
                                                    for="cat1">
                                                    <span>Digital Printing</span><span
                                                        class="badge text-bg-light rounded-pill">34</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input checked="" class="form-check-input" id="cat2"
                                                    type="checkbox" />
                                                <label
                                                    class="form-check-label small text-dark fw-medium d-flex justify-content-between"
                                                    for="cat2">
                                                    <span>Sticker &amp; Label</span><span
                                                        class="badge text-bg-light rounded-pill">26</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input checked="" class="form-check-input" id="cat3"
                                                    type="checkbox" />
                                                <label
                                                    class="form-check-label small text-dark fw-medium d-flex justify-content-between"
                                                    for="cat3">
                                                    <span>NameCard &amp; Invitation</span><span
                                                        class="badge text-bg-light rounded-pill">18</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" id="cat4" type="checkbox" />
                                                <label
                                                    class="form-check-label small text-secondary d-flex justify-content-between"
                                                    for="cat4">
                                                    <span>Display Promotion</span><span
                                                        class="badge text-bg-light rounded-pill">15</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" id="cat5" type="checkbox" />
                                                <label
                                                    class="form-check-label small text-secondary d-flex justify-content-between"
                                                    for="cat5">
                                                    <span>Large Format</span><span
                                                        class="badge text-bg-light rounded-pill">12</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" id="cat6" type="checkbox" />
                                                <label
                                                    class="form-check-label small text-secondary d-flex justify-content-between"
                                                    for="cat6">
                                                    <span>Garment &amp; Textile</span><span
                                                        class="badge text-bg-light rounded-pill">8</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" id="cat7" type="checkbox" />
                                                <label
                                                    class="form-check-label small text-secondary d-flex justify-content-between"
                                                    for="cat7">
                                                    <span>Stationary</span><span
                                                        class="badge text-bg-light rounded-pill">9</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" id="cat8" type="checkbox" />
                                                <label
                                                    class="form-check-label small text-secondary d-flex justify-content-between"
                                                    for="cat8">
                                                    <span>Merchandise</span><span
                                                        class="badge text-bg-light rounded-pill">11</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" id="cat9" type="checkbox" />
                                                <label
                                                    class="form-check-label small text-secondary d-flex justify-content-between"
                                                    for="cat9">
                                                    <span>Packaging</span><span
                                                        class="badge text-bg-light rounded-pill">7</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" id="cat10" type="checkbox" />
                                                <label
                                                    class="form-check-label small text-secondary d-flex justify-content-between"
                                                    for="cat10">
                                                    <span>Home Decor &amp; Photo</span><span
                                                        class="badge text-bg-light rounded-pill">5</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" id="cat11" type="checkbox" />
                                                <label
                                                    class="form-check-label small text-secondary d-flex justify-content-between"
                                                    for="cat11">
                                                    <span>Parade Display</span><span
                                                        class="badge text-bg-light rounded-pill">3</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter Harga -->
                                <div class="accordion-item border-bottom">
                                    <h3 class="accordion-header" id="headingPrice">
                                        <button aria-controls="collapsePrice" aria-expanded="true"
                                            class="accordion-button px-0 py-2 fw-semibold text-dark shadow-none bg-transparent"
                                            data-bs-target="#collapsePrice" data-bs-toggle="collapse" type="button">
                                            Rentang Harga
                                        </button>
                                    </h3>
                                    <div aria-labelledby="headingPrice" class="accordion-collapse collapse show"
                                        id="collapsePrice">
                                        <div class="accordion-body px-0 pt-1 pb-3">
                                            <label class="form-label text-muted small mb-1" for="priceRange">Maksimum
                                                Batas</label>
                                            <input class="form-range" id="priceRange" max="1000000" min="1000"
                                                oninput="document.getElementById('priceMax').value = new Intl.NumberFormat('id-ID').format(this.value)"
                                                step="5000" type="range" value="500000" />
                                            <div class="row g-2 align-items-center mt-1">
                                                <div class="col-6">
                                                    <label class="form-label text-muted" style="font-size: 0.72rem;">Min
                                                        (Rp)</label>
                                                    <input class="form-control form-control-sm text-secondary"
                                                        type="text" value="0" />
                                                </div>
                                                <div class="col-6">
                                                    <label class="form-label text-muted" style="font-size: 0.72rem;">Max
                                                        (Rp)</label>
                                                    <input class="form-control form-control-sm fw-semibold text-dark"
                                                        id="priceMax" type="text" value="500.000" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter Waktu Pengerjaan -->
                                <div class="accordion-item border-bottom">
                                    <h3 class="accordion-header" id="headingTime">
                                        <button aria-controls="collapseTime" aria-expanded="true"
                                            class="accordion-button px-0 py-2 fw-semibold text-dark shadow-none bg-transparent"
                                            data-bs-target="#collapseTime" data-bs-toggle="collapse" type="button">
                                            Waktu Pengerjaan
                                        </button>
                                    </h3>
                                    <div aria-labelledby="headingTime" class="accordion-collapse collapse show"
                                        id="collapseTime">
                                        <div class="accordion-body px-0 pt-1 pb-3">
                                            <div class="form-check mb-2">
                                                <input checked="" class="form-check-input" id="timeExpress"
                                                    type="checkbox" />
                                                <label
                                                    class="form-check-label small text-dark d-flex align-items-center justify-content-between"
                                                    for="timeExpress">
                                                    <span><i class="bi bi-lightning-fill text-warning me-1"></i>Express (1
                                                        Hari)</span>
                                                    <span class="badge text-bg-warning rounded-pill"
                                                        style="font-size: 0.65rem;">Cepat</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input" id="timeStandard" type="checkbox" />
                                                <label
                                                    class="form-check-label small text-secondary d-flex align-items-center justify-content-between"
                                                    for="timeStandard">
                                                    <span><i class="bi bi-clock-history me-1"></i>Standar (2 - 3
                                                        Hari)</span>
                                                    <span class="badge text-bg-light rounded-pill"
                                                        style="font-size: 0.65rem;">Hemat</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter Finishing -->
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingFinishing">
                                        <button aria-controls="collapseFinishing" aria-expanded="true"
                                            class="accordion-button px-0 py-2 fw-semibold text-dark shadow-none bg-transparent"
                                            data-bs-target="#collapseFinishing" data-bs-toggle="collapse" type="button">
                                            Opsi Finishing
                                        </button>
                                    </h3>
                                    <div aria-labelledby="headingFinishing" class="accordion-collapse collapse show"
                                        id="collapseFinishing">
                                        <div class="accordion-body px-0 pt-1 pb-2">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" id="finSpotUv" type="checkbox" />
                                                <label class="form-check-label small text-secondary" for="finSpotUv">Spot
                                                    UV &amp; Emboss</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" id="finFoil" type="checkbox" />
                                                <label class="form-check-label small text-secondary" for="finFoil">Poly
                                                    Foil Gold / Silver</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input checked="" class="form-check-input" id="finLaminasi"
                                                    type="checkbox" />
                                                <label class="form-check-label small text-secondary"
                                                    for="finLaminasi">Laminasi Doff / Glossy</label>
                                            </div>
                                            <div class="form-check mb-1">
                                                <input class="form-check-input" id="finDieCut" type="checkbox" />
                                                <label class="form-check-label small text-secondary" for="finDieCut">Pond
                                                    Die Cut Custom</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tombol Terapkan -->
                            <div class="pt-3 border-top mt-2">
                                <button
                                    class="btn btn-primary w-100 rounded-pill fw-semibold py-2 d-flex align-items-center justify-content-center gap-2 shadow-sm"
                                    type="button">
                                    <i class="bi bi-check2-circle"></i> Terapkan Filter
                                </button>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- Kolom Kanan: Toolbar & Product Grid -->
                <section class="col-lg-9">
                    <!-- Toolbar Atas -->
                    <div class="card border rounded-4 shadow-sm mb-4">
                        <div
                            class="card-body p-3 d-flex flex-column flex-sm-row justify-content-between align-items-center gap-3">
                            <div class="text-secondary small">
                                Menampilkan <span class="fw-bold text-dark">1-12</span> dari <span
                                    class="fw-bold text-dark">148</span> produk percetakan
                            </div>
                            <div class="d-flex align-items-center gap-3 w-100 w-sm-auto justify-content-end">
                                <!-- Sorting Dropdown -->
                                <div class="d-flex align-items-center gap-2">
                                    <label class="small text-muted text-nowrap d-none d-md-inline"
                                        for="sortSelect">Urutkan:</label>
                                    <select class="form-select form-select-sm rounded-pill fw-medium" id="sortSelect"
                                        style="min-width: 160px;">
                                        <option selected="">Paling Sesuai</option>
                                        <option value="1">Terbaru</option>
                                        <option value="2">Harga Terendah</option>
                                        <option value="3">Harga Tertinggi</option>
                                        <option value="4">Terlaris</option>
                                    </select>
                                </div>
                                <!-- View Switcher -->
                                <div aria-label="Tampilan Mode" class="btn-group btn-group-sm rounded-pill border p-1"
                                    role="group">
                                    <button class="btn btn-primary rounded-pill px-2 py-1 active" id="gridBtn"
                                        onclick="document.getElementById('catalogContainer').classList.remove('row-cols-1'); document.getElementById('catalogContainer').classList.add('row-cols-md-3'); this.classList.add('btn-primary'); this.classList.remove('btn-light'); document.getElementById('listBtn').classList.remove('btn-primary'); document.getElementById('listBtn').classList.add('btn-light');"
                                        title="Grid View" type="button">
                                        <i class="bi bi-grid-3x3-gap-fill"></i>
                                    </button>
                                    <button class="btn btn-light rounded-pill px-2 py-1 text-secondary" id="listBtn"
                                        onclick="document.getElementById('catalogContainer').classList.remove('row-cols-md-3'); document.getElementById('catalogContainer').classList.add('row-cols-1'); this.classList.add('btn-primary'); this.classList.remove('btn-light'); document.getElementById('gridBtn').classList.remove('btn-primary'); document.getElementById('gridBtn').classList.add('btn-light');"
                                        title="List View" type="button">
                                        <i class="bi bi-view-list"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Grid (12 Items) -->
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="catalogContainer">
                        <!-- Produk 1 -->
                        @foreach ( $products as $product )
                        <div class="col">
                            <div
                                class="card h-100 border rounded-4 overflow-hidden shadow-sm product-card position-relative">

                                <div class="bg-light p-4 text-center position-relative d-flex align-items-center justify-content-center"
                                    style="height: 180px;">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="" width="100%">
                                </div>
                                <div class="card-body p-3 d-flex flex-column">
                                    <div class="text-muted text-uppercase fw-semibold"
                                        style="font-size: 0.7rem; letter-spacing: 0.5px;">{{ $category->name ?? '' }}</div>
                                    <h3 class="card-title h6 fw-bold text-dark mt-1 mb-2 text-truncate"
                                        title="{{ $product->name ?? '' }}">{{ $product->name ?? '' }}</h3>

                                    <div class="mt-auto">
                                        <div class="text-secondary small mb-0" style="font-size: 0.75rem;">Mulai dari
                                        </div>
                                        <div class="h6 fw-bold text-danger mb-3">Rp {{ $product->price ?? '' }}<span
                                                class="fw-normal text-muted small">/ box</span></div>
                                        <a class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-semibold"
                                            href="{{ route('product.show', ['slug' => $product->slug]) }}">Lihat Opsi / Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Bootstrap Pagination -->
                    <nav aria-label="Navigasi Halaman Katalog" class="mt-5 mb-3">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a aria-disabled="true" class="page-link rounded-pill px-3 me-2 border" href="#"
                                    tabindex="-1"><i class="bi bi-chevron-left me-1"></i>Previous</a>
                            </li>
                            <li aria-current="page" class="page-item active"><a class="page-link rounded-circle mx-1"
                                    href="#"
                                    style="width: 38px; height: 38px; text-align: center; line-height: 22px;">1</a></li>
                            <li class="page-item"><a class="page-link rounded-circle mx-1" href="#"
                                    style="width: 38px; height: 38px; text-align: center; line-height: 22px;">2</a></li>
                            <li class="page-item"><a class="page-link rounded-circle mx-1" href="#"
                                    style="width: 38px; height: 38px; text-align: center; line-height: 22px;">3</a></li>
                            <li class="page-item"><a class="page-link rounded-circle mx-1" href="#"
                                    style="width: 38px; height: 38px; text-align: center; line-height: 22px;">4</a></li>
                            <li class="page-item">
                                <a class="page-link rounded-pill px-3 ms-2 border" href="#">Next<i
                                        class="bi bi-chevron-right ms-1"></i></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Informative Strip / Guarantee Box -->
                    <div class="card border rounded-4 bg-light p-3 mt-4 text-center">
                        <div class="row align-items-center g-3">
                            <div class="col-md-4 d-flex align-items-center justify-content-center gap-2">
                                <i class="bi bi-file-earmark-check-fill text-primary fs-4"></i>
                                <div class="text-start">
                                    <div class="fw-bold small">Cek File Gratis</div>
                                    <div class="text-muted" style="font-size: 0.72rem;">File Anda dicek sebelum cetak
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-items-center justify-content-center gap-2">
                                <i class="bi bi-truck text-danger fs-4"></i>
                                <div class="text-start">
                                    <div class="fw-bold small">Pickup &amp; Delivery</div>
                                    <div class="text-muted" style="font-size: 0.72rem;">Ambil cabang / kirim instan</div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-items-center justify-content-center gap-2">
                                <i class="bi bi-patch-check-fill text-success fs-4"></i>
                                <div class="text-start">
                                    <div class="fw-bold small">Tersedia Harga Grosir</div>
                                    <div class="text-muted" style="font-size: 0.72rem;">Makin banyak pesan, makin murah
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
