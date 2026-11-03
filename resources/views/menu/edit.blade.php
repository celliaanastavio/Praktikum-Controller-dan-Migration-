@extends('layouts.app')

@section('content')
@php $opsiKategori = ['Nasi Box', 'Nasi Tumpeng', 'Catering Prasmanan']; @endphp
<div class="container py-5" style="max-width: 650px;">
    <a href="{{ route('data-menu') }}" class="text-decoration-none small">← Kembali ke Data Menu</a>
    <h2 class="my-4">Edit Menu</h2>

    <div class="card shadow-sm">
        <div class="card-body p-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="post" action="{{ route('menu.update', $menu->id) }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Menu</label>
                    <input type="text" name="nama_menu" class="form-control" value="{{ old('nama_menu', $menu->nama_menu) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Kategori</label>
                    <select name="kategori" class="form-select">
                        @foreach ($opsiKategori as $kat)
                            <option value="{{ $kat }}" {{ old('kategori', $menu->kategori) == $kat ? 'selected' : '' }}>{{ $kat }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Deskripsi</label>
                    <textarea name="deskripsi" rows="4" class="form-control">{{ old('deskripsi', $menu->deskripsi) }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" value="{{ old('harga', $menu->harga) }}">
                </div>
                <div class="mb-4">
                    <label class="form-label fw-semibold">Tgl. Rilis</label>
                    <input type="text" id="tgl_rilis" name="tgl_rilis" class="date form-control" placeholder="yyyy/mm/dd" autocomplete="off" value="{{ old('tgl_rilis', $menu->tgl_rilis?->format('Y/m/d')) }}">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('data-menu') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection