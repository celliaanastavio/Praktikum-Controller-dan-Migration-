<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berllian Catering</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --orange: #c0392b;
            --orange-dark: #922b21;
            --cream: #fdf6ec;
            --cream-dark: #f5e6d0;
            --brown: #5d3a1a;
            --gold: #d4a847;
            --white: #ffffff;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: var(--cream);
            color: var(--brown);
        }
        .hero h1, .brand { font-family: 'Cormorant Garamond', serif; }

        /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--white);
            padding: 18px 40px;
            border-bottom: 1px solid var(--cream-dark);
        }
        nav .brand {
            color: var(--orange);
            font-size: 24px;
            font-weight: 700;
        }
        nav .links a {
            color: var(--brown);
            text-decoration: none;
            margin-left: 28px;
            font-size: 14px;
            font-weight: 500;
        }
        nav .btn-order {
            background: var(--orange);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            margin-left: 28px;
        }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, var(--brown), #3d2510);
            color: var(--cream);
            text-align: center;
            padding: 80px 20px;
        }
        .hero .label {
            color: var(--gold);
            letter-spacing: 2px;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 20px;
        }
        .hero h1 {
            font-size: 52px;
            font-style: italic;
            font-weight: 700;
            color: var(--gold);
            line-height: 1.25;
        }
        .hero h1 span {
            color: var(--white);
            font-style: normal;
        }
        .hero p {
            max-width: 600px;
            margin: 24px auto;
            color: #e6d9c8;
        }
        .hero .btn-gold {
            background: var(--gold);
            color: var(--brown);
            border: none;
            padding: 14px 28px;
            border-radius: 30px;
            font-weight: 700;
            font-family: 'Inter', sans-serif;
            margin: 8px;
            cursor: pointer;
        }
        .hero .btn-outline {
            background: transparent;
            color: var(--white);
            border: 1px solid var(--white);
            padding: 14px 28px;
            border-radius: 30px;
            font-family: 'Inter', sans-serif;
            margin: 8px;
            cursor: pointer;
        }

        /* Section umum */
        section { padding: 70px 20px; text-align: center; }
        .section-label {
            color: var(--orange);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
        }
        section h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 36px;
            font-weight: 700;
            margin: 12px 0 16px;
        }
        section > p.desc {
            color: #7a6a5c;
            max-width: 600px;
            margin: 0 auto 40px;
        }

        /* Menu cards */
        .grid-3 {
            display: flex;
            justify-content: center;
            gap: 24px;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
        }
        .menu-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            width: 280px;
            text-align: left;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        }
        .menu-card .thumb {
            height: 120px;
            background: var(--cream-dark);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .menu-card .thumb img { width: 44px; height: 44px; }
        .menu-card .content { padding: 20px; }
        .menu-card h3 { font-family: 'Cormorant Garamond', serif; font-size: 20px; color: var(--orange); margin-bottom: 8px; }
        .menu-card p { font-size: 14px; color: #7a6a5c; margin-bottom: 12px; }
        .menu-card .price { color: var(--orange); font-weight: 700; font-size: 14px; }

        /* Keunggulan */
        .keunggulan { background: var(--orange); color: white; }
        .keunggulan .section-label { color: var(--gold); }
        .keunggulan-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            max-width: 1000px;
            margin: 0 auto;
        }
        .keunggulan-card {
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            padding: 24px;
            text-align: left;
        }
        .keunggulan-card img {
            width: 32px;
            height: 32px;
            margin-bottom: 14px;
            display: block;
        }
        .keunggulan-card h3 { font-family: 'Cormorant Garamond', serif; font-size: 19px; margin-bottom: 8px; }
        .keunggulan-card p { font-size: 14px; color: #ffe3d6; }

        /* Testimoni */
        .testi-grid {
            display: flex;
            justify-content: center;
            gap: 24px;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
        }
        .testi-card {
            background: var(--white);
            border-radius: 12px;
            padding: 24px;
            width: 280px;
            text-align: left;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .testi-card .stars img { width: 14px; height: 14px; margin-right: 2px; filter: invert(70%) sepia(60%) saturate(500%) hue-rotate(2deg); }
        .testi-card p.quote { font-style: italic; font-size: 14px; color: var(--brown); margin: 12px 0 16px; }
        .testi-card .author { display: flex; align-items: center; gap: 10px; }
        .testi-card .avatar {
            width: 36px; height: 36px; border-radius: 50%;
            background: var(--orange); color: white;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700;
        }
        .testi-card .author small { color: #7a6a5c; display: block; }

        /* Footer */
        .site-footer {
            background: #171412;
            color: #a89a8c;
            padding: 60px 40px 24px;
            font-size: 14px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr 1fr;
            gap: 32px;
            max-width: 1100px;
            margin: 0 auto;
        }
        .footer-brand .brand { font-family: 'Cormorant Garamond', serif; color: var(--gold); font-size: 22px; margin-bottom: 14px; }
        .footer-brand p { line-height: 1.6; margin-bottom: 16px; }
        .social-icons { display: flex; gap: 10px; }
        .social-icons a {
            width: 34px; height: 34px;
            background: #2a2521;
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
        }
        .social-icons img { width: 16px; height: 16px; }
        .footer-col h4 { color: white; font-size: 15px; margin-bottom: 16px; }
        .footer-col a { display: block; color: #a89a8c; text-decoration: none; margin-bottom: 10px; font-size: 14px; }
        .footer-col p { display: flex; align-items: center; gap: 8px; margin-bottom: 12px; }
        .footer-icon { width: 16px; height: 16px; opacity: 0.9; }
        .footer-bottom {
            text-align: center;
            border-top: 1px solid #2a2521;
            margin-top: 40px;
            padding-top: 20px;
            font-size: 13px;
            color: #6b6258;
        }

        @media (max-width: 768px) {
            .keunggulan-grid { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr; }
            nav .links { display: none; }
        }
    </style>
</head>
<body>

    <nav>
        <div class="brand">✦ Berllian Catering</div>
        <div class="links">
            <a href="#hero">Beranda</a>
            <a href="#menu">Menu</a>
            <a href="#keunggulan">Keunggulan</a>
            <a href="#testimoni">Testimoni</a>
        </div>
        <a href="#" class="btn-order">Pesan Sekarang</a>
    </nav>

    <section class="hero" id="hero">
        <div class="label">CATERING TERPERCAYA DI YOGYAKARTA</div>
        <h1>Cita Rasa Terbaik <span>untuk</span><br>Setiap Momen</h1>
        <p>Dari rapat kantor hingga pernikahan impian Anda — kami hadir dengan hidangan autentik, penyajian elegan, dan pelayanan yang tak terlupakan.</p>
        <button class="btn-gold">Lihat Semua Menu</button>
        <button class="btn-outline">Konsultasi Gratis →</button>
    </section>

    <section id="menu">
        <div class="section-label">✦ PILIHAN MENU</div>
        <h2>Menu Andalan Kami</h2>
        <p class="desc">Klik menu untuk melihat varian lengkap, harga, dan isi setiap paket.</p>
        <div class="grid-3">
            <div class="menu-card">
                <div class="thumb"><img src="https://www.svgrepo.com/show/338182/japanese-food-meal-traditional-bento-lunch-dish.svg" alt="Nasi Box"></div>
                <div class="content">
                    <h3>Nasi Box</h3>
                    <p>Pilihan nasi box praktis dengan lauk komplit — ideal untuk rapat & seminar.</p>
                    <div class="price">Mulai Rp 22.000</div>
                </div>
            </div>
            <div class="menu-card">
                <div class="thumb"><img src="https://www.svgrepo.com/show/88026/food-plate-hand-drawn-lunch.svg" alt="Nasi Tumpeng"></div>
                <div class="content">
                    <h3>Nasi Tumpeng</h3>
                    <p>Tampilan memukau dengan cita rasa autentik Jawa, cocok untuk acara spesial.</p>
                    <div class="price">Mulai Rp 350.000</div>
                </div>
            </div>
            <div class="menu-card">
                <div class="thumb"><img src="https://www.svgrepo.com/show/159184/plate-knife-and-fork.svg" alt="Catering Prasmanan"></div>
                <div class="content">
                    <h3>Paket Catering</h3>
                    <p>Solusi catering lengkap mulai persiapan hingga prasmanan untuk segala acara.</p>
                    <div class="price">Mulai Rp 75.000/pax</div>
                </div>
            </div>
        </div>
    </section>

    <section class="keunggulan" id="keunggulan">
        <div class="section-label">✦ MENGAPA KAMI?</div>
        <h2>Keunggulan Berllian Catering</h2>
        <div class="keunggulan-grid">
            <div class="keunggulan-card">
                <img src="https://www.svgrepo.com/show/287562/vegetables-salad.svg" alt="Bahan Segar">
                <h3>Bahan Segar Setiap Hari</h3>
                <p>Kami hanya menggunakan bahan segar yang dipilih langsung dari pasar lokal setiap pagi.</p>
            </div>
            <div class="keunggulan-card">
                <img src="https://www.svgrepo.com/show/244490/chef.svg" alt="Chef">
                <h3>Chef Berpengalaman</h3>
                <p>Tim chef kami berpengalaman lebih dari 10 tahun dalam hidangan khas Jawa dan nasional.</p>
            </div>
            <div class="keunggulan-card">
                <img src="https://www.svgrepo.com/show/513287/clock.svg" alt="Tepat Waktu">
                <h3>Tepat Waktu & Rapi</h3>
                <p>Kami berkomitmen selalu hadir tepat waktu dengan penyajian yang menarik.</p>
            </div>
            <div class="keunggulan-card">
                <img src="https://www.svgrepo.com/show/499839/money.svg" alt="Harga Terjangkau">
                <h3>Harga Terjangkau</h3>
                <p>Kualitas premium dengan harga bersahabat, paket bisa disesuaikan budget Anda.</p>
            </div>
            <div class="keunggulan-card">
                <img src="https://www.svgrepo.com/show/93612/plate.svg" alt="Menu Variatif">
                <h3>Menu Variatif</h3>
                <p>Lebih dari 50 pilihan menu yang bisa dikombinasikan sesuai kebutuhan acara Anda.</p>
            </div>
            <div class="keunggulan-card">
                <img src="https://www.svgrepo.com/show/233997/handshake-deal.svg" alt="Pelayanan Ramah">
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
                <div class="stars">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                </div>
                <p class="quote">"Makanannya enak banget, tepat waktu dan penyajiannya rapi. Semua tamu puas!"</p>
                <div class="author">
                    <div class="avatar">C</div>
                    <div>
                        <strong>Cellia A.</strong>
                        <small>Manager – PT Persada</small>
                    </div>
                </div>
            </div>
            <div class="testi-card">
                <div class="stars">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                </div>
                <p class="quote">"Tumpengnya cantik sekali dan rasanya autentik Jawa. Semua tamu kagum!"</p>
                <div class="author">
                    <div class="avatar">L</div>
                    <div>
                        <strong>Larasati N.</strong>
                        <small>Pelanggan Setia</small>
                    </div>
                </div>
            </div>
            <div class="testi-card">
                <div class="stars">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                    <img src="https://www.svgrepo.com/show/475275/star.svg">
                </div>
                <p class="quote">"Harganya sangat terjangkau untuk kualitas sekelas ini. Rekomended banget!"</p>
                <div class="author">
                    <div class="avatar">D</div>
                    <div>
                        <strong>Devina K.</strong>
                        <small>BEM – Universitas Negeri</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="brand">✦ Berllian Catering</div>
                <p>Layanan catering berkualitas tinggi untuk setiap momen spesial Anda di Yogyakarta dan sekitarnya.</p>
                <div class="social-icons">
                    <a href="#"><img src="https://www.svgrepo.com/show/452229/instagram-1.svg" alt="Instagram"></a>
                    <a href="#"><img src="https://www.svgrepo.com/show/452196/facebook-1.svg" alt="Facebook"></a>
                    <a href="#"><img src="https://www.svgrepo.com/show/452133/whatsapp.svg" alt="WhatsApp"></a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Navigasi</h4>
                <a href="#hero">Beranda</a>
                <a href="#menu">Menu</a>
                <a href="#keunggulan">Keunggulan</a>
                <a href="#testimoni">Testimoni</a>
            </div>

            <div class="footer-col">
                <h4>Layanan</h4>
                <a href="#">Nasi Box</a>
                <a href="#">Nasi Tumpeng</a>
                <a href="#">Catering Prasmanan</a>
                <a href="#">Catering Harian</a>
            </div>

            <div class="footer-col">
                <h4>Kontak</h4>
                <p><img src="https://www.svgrepo.com/show/303161/gmail-icon-logo.svg" class="footer-icon"> berlliancatering@gmail.com</p>
                <p><img src="https://www.svgrepo.com/show/303147/whatsapp-icon-logo.svg" class="footer-icon"> 0882-0039-27352</p>
                <p><img src="https://www.svgrepo.com/show/312484/location-indicator.svg" class="footer-icon"> Yogyakarta, Indonesia</p>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; 2026 Berllian Catering. All rights reserved.
        </div>
    </footer>

</body>
</html>