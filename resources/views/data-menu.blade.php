@extends('layouts.app')

@section('content')
<div class="container py-5">
    <a href="{{ route('home') }}" class="text-decoration-none small">← Kembali ke Dashboard</a>

    @if (Session::has('pesan'))
        <div class="alert alert-success mt-3">{{ Session::get('pesan') }}</div>
    @endif

    <div class="d-flex justify-content-between align-items-center my-4">
        <h2 class="m-0">Data Menu</h2>
        <a href="{{ route('menu.create') }}" class="btn btn-primary">+ Tambah Menu</a>
    </div>

    <h5 class="mb-3">Menu Terbaru</h5>
    <ul class="list-group mb-4">
        @foreach ($terbaru as $m)
            <li class="list-group-item">{{ $m->nama_menu }} — {{ $m->kategori }} — Rp {{ number_format($m->harga, 0, ',', '.') }}</li>
        @endforeach
    </ul>

    <form method="GET" action="{{ route('data-menu') }}" class="row g-2 mb-4">
        <div class="col-md-6">
            <input type="text" name="cari" value="{{ $cari }}" class="form-control" placeholder="Cari nama menu...">
        </div>
        <div class="col-md-4">
            <select name="kategori" class="form-select" onchange="this.form.submit()">
                <option value="semua" {{ $kategoriDipilih == 'semua' ? 'selected' : '' }}>Semua Kategori</option>
                @foreach ($kategoriList as $kat)
                    <option value="{{ $kat }}" {{ $kategoriDipilih == $kat ? 'selected' : '' }}>{{ $kat }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2 d-grid">
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>
    </form>

    @if ($cari !== '' && $menus->count() > 0)
        <div class="alert alert-success">Ditemukan <strong>{{ $statistik['total'] }}</strong> data dengan kata: <strong>{{ $cari }}</strong></div>
    @endif

    @if ($menus->isEmpty())
        <div class="alert alert-warning">
            <h5>Data {{ $cari }} tidak ditemukan</h5>
            <a href="{{ route('data-menu') }}" class="btn btn-warning btn-sm">Kembali</a>
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle bg-white">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Tgl. Rilis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $m)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $m->nama_menu }}</td>
                            <td>{{ $m->kategori }}</td>
                            <td>Rp {{ number_format($m->harga, 0, ',', '.') }}</td>
                            <td>{{ $m->tgl_rilis?->format('d/m/Y') ?? '-' }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('menu.edit', $m->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('menu.destroy', $m->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Yakin mau di hapus?')" type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mb-4">{{ $menus->links() }}</div>
    @endif

    <div class="row g-3">
        <div class="col-6 col-md-3">
            <div class="card shadow-sm"><div class="card-body">
                <div class="small text-muted">Total Menu</div>
                <div class="fs-4 fw-bold text-primary">{{ $statistik['total'] }}</div>
            </div></div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card shadow-sm"><div class="card-body">
                <div class="small text-muted">Total Harga</div>
                <div class="fs-5 fw-bold text-primary">Rp {{ number_format($statistik['total_harga'], 0, ',', '.') }}</div>
            </div></div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card shadow-sm"><div class="card-body">
                <div class="small text-muted">Harga Tertinggi</div>
                <div class="fs-5 fw-bold text-primary">Rp {{ number_format($statistik['harga_tertinggi'], 0, ',', '.') }}</div>
            </div></div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card shadow-sm"><div class="card-body">
                <div class="small text-muted">Harga Terendah</div>
                <div class="fs-5 fw-bold text-primary">Rp {{ number_format($statistik['harga_terendah'], 0, ',', '.') }}</div>
            </div></div>
        </div>
    </div>
</div>
@endsection