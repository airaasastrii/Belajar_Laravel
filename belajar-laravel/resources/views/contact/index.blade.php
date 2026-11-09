@extends('layouts.app')
@section('content')
    <div class="flex flex-col w-full">
        <!-- Breadcrumb Navigation -->
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
                        <li aria-current="page" class="breadcrumb-item active text-primary fw-semibold">Hubungi Kami</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- BEGIN: KontakHero -->
        <section class="py-4 py-lg-5 bg-white border-bottom">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-light text-primary fw-semibold mb-3 border"
                            style="font-size: 0.8rem;">
                            <i class="bi bi-chat-dots-fill text-danger"></i> Hubungi Kami
                        </div>
                        <h1 class="display-6 fw-bold text-dark mb-3 lh-sm">Ada pertanyaan soal cetakan Anda?</h1>
                        <p class="text-muted fs-6 mb-0 pe-lg-4 lh-base">
                            Chat CS PrimaGraphia lewat WhatsApp, kirim email, atau datang langsung ke outlet terdekat. Tim
                            kami siap membantu dari konsultasi bahan hingga penawaran harga.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="p-4 bg-light rounded-4 border">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <i class="bi bi-clock-fill text-primary"></i>
                                <h2 class="h6 fw-bold mb-0">Jam Operasional</h2>
                            </div>
                            <dl class="row small mb-0 gy-1">
                                <dt class="col-7 fw-normal text-muted">Senin – Jum’at</dt>
                                <dd class="col-5 text-end fw-semibold text-dark mb-0">09.00 – 18.00</dd>
                                <dt class="col-7 fw-normal text-muted">Sabtu</dt>
                                <dd class="col-5 text-end fw-semibold text-dark mb-0">08.00 – 18.00</dd>
                                <dt class="col-7 fw-normal text-muted">Minggu &amp; Tanggal Merah</dt>
                                <dd class="col-5 text-end fw-semibold text-danger mb-0">Libur</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: KontakHero -->
        <!-- BEGIN: ContactChannels -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 kontak-channel">
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="rounded-circle bg-success bg-opacity-10 text-success d-flex align-items-center justify-content-center mb-3"
                                    style="width: 52px; height: 52px;">
                                    <i class="bi bi-whatsapp fs-4"></i>
                                </div>
                                <h2 class="h6 fw-bold text-dark mb-1">WhatsApp CS</h2>
                                <p class="small text-muted mb-3">CS, chat only</p>
                                <a class="fw-bold text-dark text-break mb-3" href="https://wa.me/{{ $settings['phone'] ?? '' }}"
                                    rel="noopener noreferrer" target="_blank">+{{ $settings['phone'] ?? '' }}</a>
                                <a class="btn btn-sm btn-outline-success rounded-pill px-3 mt-auto align-self-start fw-semibold"
                                    href="https://wa.me/{{ $settings['phone'] ?? '' }}" rel="noopener noreferrer" target="_blank">Chat
                                    sekarang <i class="bi bi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 kontak-channel">
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center mb-3"
                                    style="width: 52px; height: 52px;">
                                    <i class="bi bi-cloud-arrow-up fs-4"></i>
                                </div>
                                <h2 class="h6 fw-bold text-dark mb-1">Upload file</h2>
                                <p class="small text-muted mb-3">Kirim file siap cetak (WeTransfer, Dropbox, Google Drive
                                    hingga 2 GB)</p>
                                <a class="fw-bold text-dark text-break mb-3"
                                    href="mailto:upload@primagraphia.co.id">{{ $settings['email'] ?? '' }}</a>
                                <a class="btn btn-sm btn-outline-primary rounded-pill px-3 mt-auto align-self-start fw-semibold"
                                    href="mailto:upload@primagraphia.co.id">Kirim email <i
                                        class="bi bi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 kontak-channel">
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="rounded-circle bg-danger bg-opacity-10 text-danger d-flex align-items-center justify-content-center mb-3"
                                    style="width: 52px; height: 52px;">
                                    <i class="bi bi-box-seam fs-4"></i>
                                </div>
                                <h2 class="h6 fw-bold text-dark mb-1">Order custom</h2>
                                <p class="small text-muted mb-3">Produk custom atau yang belum tersedia di website</p>
                                <a class="fw-bold text-dark text-break mb-3"
                                    href="mailto:custom@primagraphia.co.id">{{ $settings['email_order'] ?? '' }}</a>
                                <a class="btn btn-sm btn-outline-danger rounded-pill px-3 mt-auto align-self-start fw-semibold"
                                    href="mailto:custom@primagraphia.co.id">Kirim email <i
                                        class="bi bi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 g-xl-5">
                    <!-- Office info & map -->
                    <div class="col-lg-12">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                            <div class="ratio ratio-4x3 bg-secondary-subtle">
                                <iframe allowfullscreen="" class="border-0" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    src="https://maps.google.com/maps?q=PrimaGraphia%20Kepu%20Selatan%20No.66%20Jakarta&amp;z=16&amp;output=embed"
                                    title="Peta lokasi kantor PrimaGraphia"></iframe>
                            </div>
                            <div class="card-body p-4">
                                <span class="badge bg-danger rounded-pill px-3 py-2 mb-3"><i
                                        class="bi bi-star-fill me-1"></i>Kantor Pusat</span>
                                <h2 class="h6 fw-bold text-dark mb-2">PT PrimaGraphia Teknologi</h2>
                                <p class="small text-muted d-flex gap-2 mb-3"><i
                                        class="bi bi-geo-alt-fill text-primary"></i><span>{{$settings['address'] ?? ''}} Jakarta 10460</span></p>
                                <div class="d-flex flex-wrap gap-2 mb-4">
                                    <a class="btn btn-sm btn-pg-primary rounded-pill px-3 fw-semibold"
                                        href="https://maps.google.com/?q=PrimaGraphia+Kepu+Selatan+Jakarta"
                                        rel="noopener noreferrer" target="_blank"><i
                                            class="bi bi-sign-turn-right me-1"></i>Petunjuk arah</a>
                                    <a class="btn btn-sm btn-outline-secondary rounded-pill px-3 fw-semibold"
                                        href="outlet.html"><i class="bi bi-shop me-1"></i>Semua outlet</a>
                                </div>
                                <div class="border-top pt-3">
                                    <div class="small fw-semibold text-dark mb-2">Ikuti PrimaGraphia</div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a aria-label="PrimaGraphia di Shopee"
                                            class="btn btn-light border rounded-circle kontak-social"
                                            href="https://shopee.co.id/primagraphiaprint" rel="noopener noreferrer"
                                            target="_blank"><i class="bi bi-bag"></i></a>
                                        <a aria-label="PrimaGraphia di Facebook"
                                            class="btn btn-light border rounded-circle kontak-social"
                                            href="https://facebook.com/PrimaGraphiaPrint" rel="noopener noreferrer"
                                            target="_blank"><i class="bi bi-facebook"></i></a>
                                        <a aria-label="PrimaGraphia di Instagram"
                                            class="btn btn-light border rounded-circle kontak-social"
                                            href="https://instagram.com/primagraphiaofficial" rel="noopener noreferrer"
                                            target="_blank"><i class="bi bi-instagram"></i></a>
                                        <a aria-label="PrimaGraphia di YouTube"
                                            class="btn btn-light border rounded-circle kontak-social"
                                            href="https://www.youtube.com/channel/UCJyn5bVloUjSUgy8jf33gGQ"
                                            rel="noopener noreferrer" target="_blank"><i class="bi bi-youtube"></i></a>
                                        <a aria-label="PrimaGraphia di TikTok"
                                            class="btn btn-light border rounded-circle kontak-social"
                                            href="https://www.tiktok.com/@primagraphiaofficial" rel="noopener noreferrer"
                                            target="_blank"><i class="bi bi-tiktok"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: ContactChannels -->
        <!-- BEGIN: Assurances -->
        <section class="py-4 bg-white border-top">
            <div class="container">
                <div class="row g-3">
                    <div class="col-6 col-lg-3">
                        <div class="usp-item d-flex align-items-center gap-3 h-100 p-3 bg-white border rounded-4">
                            <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 44px; height: 44px;"><i class="bi bi-tags fs-5"></i></div>
                            <div>
                                <div class="fw-bold text-dark small">Harga kompetitif</div>
                                <div class="text-muted" style="font-size: 0.75rem;">Harga terjangkau</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="usp-item d-flex align-items-center gap-3 h-100 p-3 bg-white border rounded-4">
                            <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 44px; height: 44px;"><i class="bi bi-patch-check fs-5"></i></div>
                            <div>
                                <div class="fw-bold text-dark small">Garansi</div>
                                <div class="text-muted" style="font-size: 0.75rem;">Hasil berkualitas</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="usp-item d-flex align-items-center gap-3 h-100 p-3 bg-white border rounded-4">
                            <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 44px; height: 44px;"><i class="bi bi-truck fs-5"></i></div>
                            <div>
                                <div class="fw-bold text-dark small">Pengiriman cepat</div>
                                <div class="text-muted" style="font-size: 0.75rem;">Diantar ke alamat Anda</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="usp-item d-flex align-items-center gap-3 h-100 p-3 bg-white border rounded-4">
                            <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 44px; height: 44px;"><i class="bi bi-shield-lock fs-5"></i></div>
                            <div>
                                <div class="fw-bold text-dark small">Pembayaran aman</div>
                                <div class="text-muted" style="font-size: 0.75rem;">Bersertifikat SSL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: Assurances -->
        <!-- BEGIN: KontakFaqCTA -->
        <section class="pb-5 bg-white">
            <div class="container">
                <div class="cta-wa-banner p-4 p-md-5">
                    <div class="row align-items-center justify-content-between g-3">
                        <div class="col-lg-8">
                            <h2 class="h4 fw-bold text-dark mb-2">Cari jawaban cepat?</h2>
                            <p class="text-muted mb-0">Cek Pusat Bantuan untuk ketentuan file, cara pemesanan, pembayaran,
                                dan refund.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2"
                                href="faq.html">
                                <i class="bi bi-question-circle"></i> Lihat FAQ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: KontakFaqCTA -->
    </div>
@endsection
