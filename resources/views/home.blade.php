@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-1">Dashboard</h2>
    <p class="text-muted mb-4">Selamat datang, {{ Auth::user()->name }}!</p>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <div class="small text-muted">Total Menu</div>
                    <div class="display-6 fw-bold text-primary">{{ $totalMenu }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h5>Kelola Menu Catering</h5>
                    <p class="text-muted">Tambah, ubah, atau hapus menu yang tampil di website.</p>
                    <div><a href="{{ route('data-menu') }}" class="btn btn-primary">Buka Data Menu</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection