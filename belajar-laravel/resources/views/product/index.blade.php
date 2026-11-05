@extends('layouts.app')
@section('content')
    <div class="flex flex-col w-full">
        <!-- Sub-header / Breadcrumb bar -->
        <div class="bg-light py-2 border-bottom">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0" style="font-size: 0.825rem;">
                        <li class="breadcrumb-item"><a class="text-decoration-none text-muted" href="index.html"><i
                                    class="bi bi-house-door me-1"></i>Beranda</a></li>
                        <li class="breadcrumb-item"><a class="text-decoration-none text-muted" href="katalog.html">NameCard
                                &amp; Invitation</a></li>
                        <li aria-current="page" class="breadcrumb-item active text-dark fw-semibold">Kartu Nama Premium Spot
                            UV &amp; Foil Digital</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Main Product Detail & Configurator Container -->
        <div class="container py-4 my-2">
            <div class="row g-4 g-xl-5">
                <!-- LEFT COLUMN: Galeri Visual, Preview & Tab Informasi -->
                <div class="col-12 col-lg-6">
                    <!-- Large Preview Visual Card -->
                    <div class="card border rounded-4 shadow-sm overflow-hidden mb-3 bg-white">
                        <div class="position-relative p-4 p-md-5 d-flex align-items-center justify-content-center"
                            style="min-height: 420px; background: radial-gradient(circle at 50% 40%, #ffffff 0%, #edf3f8 100%);">
                            <!-- Badges overlay -->

                            <div class="position-absolute top-0 end-0 m-3" style="z-index: 3;">
                                <button
                                    class="btn btn-sm btn-white bg-white border shadow-sm rounded-circle p-2 text-secondary"
                                    title="Simpan ke Wishlist" type="button">
                                    <i class="bi bi-heart fs-6 text-danger"></i>
                                </button>
                            </div>
                            <!-- Realistic 3D Card Mockup with Spot UV / Foil visual simulation -->
                            <img src="{{ asset('storage' . $product->image) }}" alt="">

                        </div>
                    </div>
                    <!-- Thumbnail Carousel / Selector -->
                    <div class="row g-2 mb-4">
                        <div class="col-3">
                            <button
                                class="btn p-1 w-100 border border-2 border-primary rounded-3 bg-white text-center shadow-xs"
                                onclick="selectThumbnail(this, 'depan')" type="button">
                                <div class="bg-dark rounded-2 py-3 text-warning fw-bold small text-truncate"
                                    style="font-size: 0.7rem;">
                                    <i class="bi bi-card-heading d-block fs-6 mb-1 text-white"></i>Tampak Depan
                                </div>
                            </button>
                        </div>
                        <div class="col-3">
                            <button class="btn p-1 w-100 border rounded-3 bg-white text-center opacity-75"
                                onclick="selectThumbnail(this, 'belakang')" type="button">
                                <div class="bg-secondary bg-opacity-25 rounded-2 py-3 text-dark fw-bold small text-truncate"
                                    style="font-size: 0.7rem;">
                                    <i class="bi bi-credit-card-2-back d-block fs-6 mb-1 text-primary"></i>Tampak Belakang
                                </div>
                            </button>
                        </div>
                        <div class="col-3">
                            <button class="btn p-1 w-100 border rounded-3 bg-white text-center opacity-75"
                                onclick="selectThumbnail(this, 'tekstur')" type="button">
                                <div class="bg-warning bg-opacity-25 rounded-2 py-3 text-dark fw-bold small text-truncate"
                                    style="font-size: 0.7rem;">
                                    <i class="bi bi-stars d-block fs-6 mb-1 text-warning"></i>Detail Foil UV
                                </div>
                            </button>
                        </div>
                        <div class="col-3">
                            <button class="btn p-1 w-100 border rounded-3 bg-white text-center opacity-75"
                                onclick="selectThumbnail(this, 'packaging')" type="button">
                                <div class="bg-light rounded-2 py-3 text-dark fw-bold small text-truncate"
                                    style="font-size: 0.7rem;">
                                    <i class="bi bi-box-seam d-block fs-6 mb-1 text-success"></i>Box Kemasan
                                </div>
                            </button>
                        </div>
                    </div>
                    <!-- Tab Informasi Produk -->
                    <div class="card border rounded-4 shadow-sm bg-white overflow-hidden mb-4">
                        <div class="card-header bg-white border-bottom pt-3 px-3 px-md-4">
                            <h3 class="fw-bold">Deskripsi</h3>

                        </div>
                        <div class="card-body p-3 p-md-4">
                            <div class="tab-content" id="productTabContent">
                                <!-- Tab 1: Deskripsi -->
                                <div class="tab-pane fade show active" id="desc-content" role="tabpanel">
                                    {!! $product->description !!}
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Brand Assurances Small Grid -->
                    <div class="row g-2 text-center">
                        <div class="col-4">
                            <div class="p-2 border rounded-3 bg-white">
                                <i class="bi bi-shield-check text-primary fs-4 d-block mb-1"></i>
                                <span class="fw-bold small d-block">Garansi Presisi</span>
                                <span class="text-muted" style="font-size: 0.7rem;">Cetak ulang jika cacat</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 border rounded-3 bg-white">
                                <i class="bi bi-lightning-charge-fill text-warning fs-4 d-block mb-1"></i>
                                <span class="fw-bold small d-block">Cepat &amp; Tepat</span>
                                <span class="text-muted" style="font-size: 0.7rem;">Proses 1-2 hari kerja</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-2 border rounded-3 bg-white">
                                <i class="bi bi-truck text-success fs-4 d-block mb-1"></i>
                                <span class="fw-bold small d-block">Ambil di Outlet</span>
                                <span class="text-muted" style="font-size: 0.7rem;">Atau kirim ke rumah</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RIGHT COLUMN: Form Konfigurator Cetak & Checkout Box -->
                <div class="col-12 col-lg-6">
                    <!-- Header & Rating Info -->
                    <div class="mb-3">
                        <div class="d-flex align-items-center gap-2 mb-1 flex-wrap">
                            <span
                                class="badge bg-danger-subtle text-danger border border-danger-subtle px-2 py-1 small fw-semibold">Produk
                                Unggulan</span>
                            <span class="text-muted small">SKU: <span
                                    class="fw-semibold text-dark">NC-PREM-01</span></span>
                        </div>
                        <h1 class="h3 fw-extrabold text-dark mb-2">Kartu Nama Premium Spot UV &amp; Foil Digital</h1>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <div class="text-warning small d-flex">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="fw-bold text-dark small">4.9</span>
                            <span class="text-muted small">•</span>
                            <a class="text-primary text-decoration-none small fw-medium" href="#reviews">320 Ulasan
                                Terverifikasi</a>
                            <span class="text-muted small">•</span>
                            <span class="text-success small fw-medium"><i class="bi bi-check-circle me-1"></i>1.200+ Box
                                Terjual</span>
                        </div>
                    </div>
                    <!-- FORM KALKULATOR KONFIGURASI CETAK -->
                    <div class="card border rounded-4 shadow-sm bg-white p-3 p-md-4 mb-4">
                        <h5 class="fw-bold text-dark border-bottom pb-3 mb-3 d-flex align-items-center gap-2">
                            <i class="bi bi-sliders2-vertical text-primary"></i> Konfigurasi Spesifikasi Cetak
                        </h5>
                        <!-- 1. Pilihan Bahan Kertas -->
                        <div class="mb-3">
                            <label class="form-label fw-bold text-dark small mb-1 d-flex justify-content-between">
                                <span>1. Jenis Bahan Kertas:</span>
                                <span class="text-primary fw-medium" id="selectedMaterialLabel"
                                    style="font-size: 0.75rem;">Art Carton 310gsm</span>
                            </label>
                            <div class="row g-2" id="materialOptions">
                                <div class="col-12 col-md-4">
                                    <input checked="" class="btn-check" id="mat1" name="paperType"
                                        onchange="updatePrice()" type="radio" value="ac310" />
                                    <label
                                        class="btn btn-outline-secondary w-100 text-start p-2 h-100 rounded-3 text-dark border-2 position-relative"
                                        for="mat1">
                                        <div class="fw-bold small">Art Carton 310g</div>
                                        <div class="text-muted" style="font-size: 0.7rem;">Paling Tebal &amp; Populer
                                        </div>
                                        <span class="badge bg-primary text-white position-absolute top-0 end-0 m-1"
                                            style="font-size: 0.6rem;">Default</span>
                                    </label>
                                </div>
                                <div class="col-12 col-md-4">
                                    <input class="btn-check" id="mat2" name="paperType" onchange="updatePrice()"
                                        type="radio" value="splendor" />
                                    <label
                                        class="btn btn-outline-secondary w-100 text-start p-2 h-100 rounded-3 text-dark border-2"
                                        for="mat2">
                                        <div class="fw-bold small">Splendorgel 300g</div>
                                        <div class="text-muted" style="font-size: 0.7rem;">Fancy Paper Halus Mewah</div>
                                    </label>
                                </div>
                                <div class="col-12 col-md-4">
                                    <input class="btn-check" id="mat3" name="paperType" onchange="updatePrice()"
                                        type="radio" value="matte" />
                                    <label
                                        class="btn btn-outline-secondary w-100 text-start p-2 h-100 rounded-3 text-dark border-2"
                                        for="mat3">
                                        <div class="fw-bold small">Matte Paper 350g</div>
                                        <div class="text-muted" style="font-size: 0.7rem;">Tekstur Doff Lembut</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- 2. Pilihan Sisi Cetak -->
                        <div class="mb-3">
                            <label class="form-label fw-bold text-dark small mb-1">2. Sisi Cetak:</label>
                            <div class="row g-2">
                                <div class="col-6">
                                    <input class="btn-check" id="side1" name="printSides" onchange="updatePrice()"
                                        type="radio" value="1sisi" />
                                    <label class="btn btn-outline-secondary w-100 py-2 rounded-3 text-dark border-2"
                                        for="side1">
                                        <i class="bi bi-front me-1 text-primary"></i> 1 Sisi (Satu Muka)
                                    </label>
                                </div>
                                <div class="col-6">
                                    <input checked="" class="btn-check" id="side2" name="printSides"
                                        onchange="updatePrice()" type="radio" value="2sisi" />
                                    <label class="btn btn-outline-secondary w-100 py-2 rounded-3 text-dark border-2"
                                        for="side2">
                                        <i class="bi bi-arrow-repeat me-1 text-primary"></i> 2 Sisi (Bolak-balik)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- 3. Finishing Tambahan (Spot UV, Foil, Laminasi) -->
                        <div class="mb-3">
                            <label class="form-label fw-bold text-dark small mb-1">3. Finishing Eksklusif:</label>
                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <div class="form-check p-2 border rounded-3 bg-light">
                                        <input checked="" class="form-check-input ms-1 me-2" id="finishSpotUV"
                                            onchange="updatePrice()" type="checkbox" />
                                        <label class="form-check-label small fw-semibold text-dark" for="finishSpotUV">
                                            Spot UV 1 Sisi <span class="badge bg-secondary ms-1 fw-normal"
                                                style="font-size: 0.65rem;">+Rp 20.000</span>
                                        </label>
                                        <div class="text-muted ms-4" style="font-size: 0.7rem;">Kilap timbul pada
                                            logo/teks</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check p-2 border rounded-3 bg-light">
                                        <input checked="" class="form-check-input ms-1 me-2" id="finishFoil"
                                            onchange="updatePrice()" type="checkbox" />
                                        <label class="form-check-label small fw-semibold text-dark" for="finishFoil">
                                            Foil Emas / Silver <span class="badge bg-secondary ms-1 fw-normal"
                                                style="font-size: 0.65rem;">+Rp 25.000</span>
                                        </label>
                                        <div class="text-muted ms-4" style="font-size: 0.7rem;">Kilau metalik digital
                                            presisi</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check p-2 border rounded-3 bg-light">
                                        <input checked="" class="form-check-input ms-1 me-2" disabled=""
                                            id="finishLaminasi" type="checkbox" />
                                        <label class="form-check-label small fw-semibold text-dark" for="finishLaminasi">
                                            Laminasi Doff 2 Sisi <span class="badge bg-success ms-1 fw-normal"
                                                style="font-size: 0.65rem;">Gratis</span>
                                        </label>
                                        <div class="text-muted ms-4" style="font-size: 0.7rem;">Wajib untuk efek Spot UV
                                            maksimal</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check p-2 border rounded-3 bg-light">
                                        <input class="form-check-input ms-1 me-2" id="finishRoundCorner"
                                            onchange="updatePrice()" type="checkbox" />
                                        <label class="form-check-label small fw-semibold text-dark"
                                            for="finishRoundCorner">
                                            Sudut Bulat (Round Corner) <span class="badge bg-secondary ms-1 fw-normal"
                                                style="font-size: 0.65rem;">+Rp 5.000</span>
                                        </label>
                                        <div class="text-muted ms-4" style="font-size: 0.7rem;">4 sudut tumpul radius
                                            elegan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 4. Kuantitas Box & Diskon Grosir -->
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label class="form-label fw-bold text-dark small mb-0">4. Jumlah Kuantitas (1 Box = 100
                                    pcs):</label>
                                <span
                                    class="badge bg-success-subtle text-success border border-success-subtle small fw-semibold"
                                    id="tierDiscountBadge">Diskon Grosir 10%</span>
                            </div>
                            <!-- Quick Quantity Selectors -->
                            <div class="btn-group w-100 mb-2" role="group">
                                <input class="btn-check" id="qty1" name="quickQty" onchange="setCustomQty(1)"
                                    type="radio" value="1" />
                                <label class="btn btn-outline-primary btn-sm py-2 fw-semibold" for="qty1">1
                                    Box</label>
                                <input checked="" class="btn-check" id="qty2" name="quickQty"
                                    onchange="setCustomQty(2)" type="radio" value="2" />
                                <label class="btn btn-outline-primary btn-sm py-2 fw-semibold" for="qty2">2
                                    Box</label>
                                <input class="btn-check" id="qty5" name="quickQty" onchange="setCustomQty(5)"
                                    type="radio" value="5" />
                                <label class="btn btn-outline-primary btn-sm py-2 fw-semibold" for="qty5">5 Box <span
                                        class="badge bg-danger ms-1" style="font-size: 0.6rem;">-15%</span></label>
                                <input class="btn-check" id="qty10" name="quickQty" onchange="setCustomQty(10)"
                                    type="radio" value="10" />
                                <label class="btn btn-outline-primary btn-sm py-2 fw-semibold" for="qty10">10 Box <span
                                        class="badge bg-danger ms-1" style="font-size: 0.6rem;">-25%</span></label>
                                <input class="btn-check" id="qty20" name="quickQty" onchange="setCustomQty(20)"
                                    type="radio" value="20" />
                                <label class="btn btn-outline-primary btn-sm py-2 fw-semibold" for="qty20">20+
                                    Box</label>
                            </div>
                            <!-- Manual Quantity Input Stepper -->
                            <div class="input-group input-group-sm w-50">
                                <button class="btn btn-outline-secondary" onclick="adjustQty(-1)" type="button"><i
                                        class="bi bi-dash"></i></button>
                                <input class="form-control text-center fw-bold" id="customQtyInput" max="500"
                                    min="1" onchange="updatePrice()" type="number" value="2" />
                                <span class="input-group-text bg-light text-muted">Box (@100 pcs)</span>
                                <button class="btn btn-outline-secondary" onclick="adjustQty(1)" type="button"><i
                                        class="bi bi-plus"></i></button>
                            </div>
                        </div>
                        <!-- 5. UPLOAD FILE DESAIN SECTION -->
                        <div class="border rounded-3 p-3 bg-light mb-3">
                            <label class="form-label fw-bold text-dark small mb-2 d-flex align-items-center gap-1">
                                <i class="bi bi-cloud-arrow-up text-primary fs-5"></i> 5. Unggah File Desain Kartu Nama
                            </label>
                            <!-- Dropzone Box -->
                            <div class="border border-2 border-dashed rounded-3 p-3 text-center bg-white mb-2"
                                onclick="document.getElementById('fileUploadInput').click()"
                                style="border-color: #cbd5e1 !important; cursor: pointer;">
                                <input accept=".pdf,.ai,.cdr,.zip,.png,.jpg" class="d-none" id="fileUploadInput"
                                    onchange="handleFileSelected(this)" type="file" />
                                <i class="bi bi-cloud-arrow-up-fill text-primary fs-2 d-block mb-1"></i>
                                <div class="fw-bold small text-dark" id="uploadLabel">Tarik &amp; lepas file desain di
                                    sini, atau <span class="text-primary text-decoration-underline">Klik Cari File</span>
                                </div>
                                <div class="text-muted" style="font-size: 0.725rem;">Format didukung: PDF, AI, CDR, ZIP
                                    (Maks. 100MB)</div>
                            </div>
                            <!-- Alternatif Desain Checkboxes -->
                            <div class="d-flex flex-column gap-1">
                                <div class="form-check">
                                    <input class="form-check-input" id="needDesignService" onchange="updatePrice()"
                                        type="checkbox" />
                                    <label class="form-check-label small text-secondary" for="needDesignService">
                                        <span class="fw-semibold text-dark">Belum Punya Desain?</span> Gunakan Jasa Desain
                                        Grafis Prima (+Rp 25.000)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" id="sendLater" type="checkbox" />
                                    <label class="form-check-label small text-secondary" for="sendLater">
                                        Pesan Sekarang, Upload File Nanti (via Email/WhatsApp CS)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- SUMMARY ESTIMASI HARGA & ACTION BUTTONS -->
                        <div class="bg-primary-subtle border border-primary-subtle rounded-3 p-3 mb-3">
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <div class="text-muted small">Total Estimasi Harga:</div>
                                    <div class="d-flex align-items-baseline gap-2">
                                        <span class="h3 fw-extrabold text-primary mb-0" id="totalPriceDisplay">Rp
                                            87.500</span>
                                        <span class="text-muted text-decoration-line-through small"
                                            id="strikethroughPrice" style="font-size: 0.8rem;">Rp 98.000</span>
                                    </div>
                                    <div class="text-success small fw-semibold mt-1" style="font-size: 0.75rem;">
                                        <i class="bi bi-clock-history me-1"></i>Estimasi Selesai: <strong>1 - 2 Hari
                                            Kerja</strong>
                                    </div>
                                </div>
                                <div class="col-5 text-end">
                                    <div class="badge bg-primary text-white py-1 px-2 rounded-2"
                                        style="font-size: 0.75rem;">
                                        <span id="pricePerBox">Rp 43.750</span> / Box
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Action Buttons -->
                        <div class="d-flex flex-column gap-2">
                            <button
                                class="btn btn-primary btn-lg rounded-pill fw-bold py-3 shadow-sm d-flex align-items-center justify-content-center gap-2"
                                onclick="handleCheckout()" type="button">
                                <i class="bi bi-bag-check-fill fs-5"></i> Beli Sekarang / Checkout Langsung
                            </button>
                            <div class="d-flex gap-2">
                                <button
                                    class="btn btn-outline-primary rounded-pill py-2 fw-semibold w-100 d-flex align-items-center justify-content-center gap-2"
                                    onclick="handleAddToCart()" type="button">
                                    <i class="bi bi-cart-plus fs-5"></i> Tambah ke Keranjang
                                </button>
                                <a class="btn btn-outline-success rounded-pill py-2 px-3 fw-semibold d-flex align-items-center gap-1"
                                    href="https://wa.me/62811987990" target="_blank" title="Konsultasi via WA">
                                    <i class="bi bi-whatsapp fs-5"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Toko Terpercaya Footer Notes -->
                        <div class="mt-3 pt-3 border-top text-center text-muted small" style="font-size: 0.75rem;">
                            <i class="bi bi-shield-lock-fill text-success me-1"></i> Transaksi 100% Aman • Hasil Terjamin
                            PrimaGraphia • Layanan Cepat
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Interactive JavaScript Calculator & Thumbnail Switcher -->
    </div>
@endsection
