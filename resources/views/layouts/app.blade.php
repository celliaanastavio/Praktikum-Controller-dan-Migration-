<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berllian Catering</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand brand" href="{{ route('catering') }}">✦ Berllian Catering</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('catering') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('catering') }}#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('catering') }}#keunggulan">Keunggulan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('catering') }}#testimoni">Testimoni</a></li>

                    @guest
                        <li class="nav-item ms-lg-3">
                            <a class="btn btn-primary rounded-pill px-4" href="{{ route('login') }}">Login</a>
                        </li>
                    @else
                        <li class="nav-item dropdown ms-lg-3">
                            <a class="btn btn-primary rounded-pill px-4 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('home') }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('data-menu') }}">Data Menu</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>

    @yield('content')

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
                <a href="{{ route('catering') }}">Beranda</a>
                <a href="{{ route('catering') }}#menu">Menu</a>
            </div>
            <div class="footer-col">
                <h4>Layanan</h4>
                <a href="{{ route('menu.show', 'nasi-box') }}">Nasi Box</a>
                <a href="{{ route('menu.show', 'nasi-tumpeng') }}">Nasi Tumpeng</a>
                <a href="{{ route('menu.show', 'paket-catering') }}">Paket Catering</a>
            </div>
            <div class="footer-col">
                <h4>Kontak</h4>
                <p><img src="https://www.svgrepo.com/show/303161/gmail-icon-logo.svg" class="footer-icon"> berlliancatering@gmail.com</p>
                <p><img src="https://www.svgrepo.com/show/303147/whatsapp-icon-logo.svg" class="footer-icon"> 0882-0039-27352</p>
                <p><img src="https://www.svgrepo.com/show/312484/location-indicator.svg" class="footer-icon"> Yogyakarta, Indonesia</p>
            </div>
        </div>
        <div class="footer-bottom">&copy; 2026 Berllian Catering. All rights reserved.</div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $('.date').datepicker({
            format: 'yyyy/mm/dd',
            autoclose: true
        });
    </script>
</body>
</html>