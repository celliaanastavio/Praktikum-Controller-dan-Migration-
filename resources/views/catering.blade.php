@extends('layouts.app')

@section('content')

<section class="hero" id="hero">
    <div class="label">CATERING TERPERCAYA DI YOGYAKARTA</div>
    <h1>Cita Rasa Terbaik <span>untuk</span><br>Setiap Momen</h1>
    <p>Dari rapat kantor hingga pernikahan impian Anda — kami hadir dengan hidangan autentik, penyajian elegan, dan pelayanan yang tak terlupakan.</p>
</section>

<section id="menu">
    <div class="section-label">✦ PILIHAN MENU</div>
    <h2>Menu Andalan Kami</h2>
    <p class="desc">Klik menu untuk melihat varian lengkap dan harganya.</p>
    <div class="grid-3">
        @foreach ($kategoriList as $slug => $kat)
        <a href="{{ route('menu.show', $slug) }}" style="text-decoration:none; color:inherit;">
            <div class="menu-card">
                <div class="thumb"><img src="{{ $kat['gambar'] }}" alt="{{ $kat['nama'] }}"></div>
                <div class="content">
                    <h3>{{ $kat['nama'] }}</h3>
                    <p>Klik untuk lihat varian & harga lengkapnya.</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>

<section class="keunggulan" id="keunggulan">
    <div class="section-label">✦ MENGAPA KAMI?</div>
    <h2>Keunggulan Berllian Catering</h2>
    <div class="keunggulan-grid">
        <div class="keunggulan-card">
            <img src="https://www.svgrepo.com/show/287562/vegetables-salad.svg" width="32" height="32" alt="Bahan Segar" style="margin-bottom: 14px; display: block;">
            <h3>Bahan Segar Setiap Hari</h3>
            <p>Kami hanya menggunakan bahan segar yang dipilih langsung dari pasar lokal setiap pagi.</p>
        </div>
        <div class="keunggulan-card">
            <img src="https://www.svgrepo.com/show/244490/chef.svg" width="32" height="32" alt="Chef" style="margin-bottom: 14px; display: block;">
            <h3>Chef Berpengalaman</h3>
            <p>Tim chef kami berpengalaman lebih dari 10 tahun dalam hidangan khas Jawa dan nasional.</p>
        </div>
        <div class="keunggulan-card">
            <img src="https://www.svgrepo.com/show/513287/clock.svg" width="32" height="32" alt="Tepat Waktu" style="margin-bottom: 14px; display: block;">
            <h3>Tepat Waktu & Rapi</h3>
            <p>Kami berkomitmen selalu hadir tepat waktu dengan penyajian yang menarik.</p>
        </div>
        <div class="keunggulan-card">
            <img src="https://www.svgrepo.com/show/499839/money.svg" width="32" height="32" alt="Harga Terjangkau" style="margin-bottom: 14px; display: block;">
            <h3>Harga Terjangkau</h3>
            <p>Kualitas premium dengan harga bersahabat, paket bisa disesuaikan budget Anda.</p>
        </div>
        <div class="keunggulan-card">
            <img src="https://www.svgrepo.com/show/93612/plate.svg" width="32" height="32" alt="Menu Variatif" style="margin-bottom: 14px; display: block;">
            <h3>Menu Variatif</h3>
            <p>Lebih dari 50 pilihan menu yang bisa dikombinasikan sesuai kebutuhan acara Anda.</p>
        </div>
        <div class="keunggulan-card">
            <img src="https://www.svgrepo.com/show/233997/handshake-deal.svg" width="32" height="32" alt="Pelayanan Ramah" style="margin-bottom: 14px; display: block;">
            <h3>Pelayanan Ramah</h3>
            <p>Tim kami siap melayani konsultasi menu, survey lokasi, kapan saja.</p>
        </div>
    </div>
</section>

<section id="testimoni">
    <div class="section-label">✦ TESTIMONI</div>
    <h2>Kata Mereka</h2>
    <p class="desc">Kepuasan pelanggan adalah prioritas utama kami.</p>
    <div class="testi-grid">
        <div class="testi-card">
            <div class="stars" style="color: var(--gold); letter-spacing: 2px;">★★★★★</div>
            <p class="quote">"Makanannya enak banget, tepat waktu dan penyajiannya rapi. Semua tamu puas!"</p>
            <div class="author">
                <div class="avatar">C</div>
                <div><strong>Cellia A.</strong><small>Manager – PT Persada</small></div>
            </div>
        </div>
        <div class="testi-card">
            <div class="stars" style="color: var(--gold); letter-spacing: 2px;">★★★★★</div>
            <p class="quote">"Tumpengnya cantik sekali dan rasanya autentik Jawa. Semua tamu kagum!"</p>
            <div class="author">
                <div class="avatar">L</div>
                <div><strong>Larasati N.</strong><small>Pelanggan Setia</small></div>
            </div>
        </div>
        <div class="testi-card">
            <div class="stars" style="color: var(--gold); letter-spacing: 2px;">★★★★★</div>
            <p class="quote">"Harganya sangat terjangkau untuk kualitas sekelas ini. Rekomended banget!"</p>
            <div class="author">
                <div class="avatar">D</div>
                <div><strong>Devina K.</strong><small>BEM – Universitas Negeri</small></div>
            </div>
        </div>
    </div>
</section>

@endsection