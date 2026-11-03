@extends('layouts.app')

@section('content')
<div class="container py-5">
    <a href="{{ route('catering') }}" class="text-decoration-none small">← Kembali ke Menu</a>

    <div class="section-label mt-4">✦ MENU TERSEDIA</div>
    <h2 class="mb-4">Pilihan {{ $kategori['nama'] }}</h2>

    <div class="row g-4">
        @foreach ($kategori['items'] as $item)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="text-uppercase text-primary fw-bold">{{ $item['nama'] }}</h6>
                        <p class="fw-semibold mb-1">Menu Paket :</p>
                        <ul class="list-unstyled mb-3">
                            @foreach ($item['isi'] as $poin)
                                <li class="small text-muted mb-1">✔ {{ $poin }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <span class="fw-bold text-primary">{{ $item['harga'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection