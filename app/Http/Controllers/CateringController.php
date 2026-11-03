<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class CateringController extends Controller
{
    private $kategori = [
        'nasi-box' => [
            'nama' => 'Nasi Box',
            'gambar' => 'https://www.svgrepo.com/show/338182/japanese-food-meal-traditional-bento-lunch-dish.svg',
            'items' => [
                [
                    'nama' => 'Menu Paket GG',
                    'isi' => ['Nasi Putih', 'Telur Balado', 'Tempe Mendoan', 'Sayur Bobor', 'Buah', 'Kerupuk', 'Sambal', 'Tissue', 'Sendok'],
                    'harga' => 'Rp 22.000',
                ],
                [
                    'nama' => 'Menu Paket B',
                    'isi' => ['Nasi Putih', 'Ayam Goreng/Bacem', 'Oseng Sayur', 'Tempe/Tahu', 'Buah', 'Kerupuk', 'Sambal', 'Tissue', 'Sendok'],
                    'harga' => 'Rp 23.000',
                ],
                [
                    'nama' => 'Menu Paket I',
                    'isi' => ['Nasi Putih', 'Lele Goreng Crispy', 'Sambal Terasi', 'Lalapan', 'Tempe Orek', 'Buah', 'Kerupuk', 'Tissue', 'Sendok'],
                    'harga' => 'Rp 23.000',
                ],
                [
                    'nama' => 'Menu Paket BB',
                    'isi' => ['Nasi Putih', 'Bakso Goreng', 'Mie Goreng', 'Tempe Goreng', 'Buah', 'Kerupuk', 'Sambal', 'Tissue', 'Sendok'],
                    'harga' => 'Rp 24.000',
                ],
            ],
        ],
        'nasi-tumpeng' => [
            'nama' => 'Nasi Tumpeng',
            'gambar' => 'https://www.svgrepo.com/show/88026/food-plate-hand-drawn-lunch.svg',
            'items' => [
                [
                    'nama' => 'Tumpeng Mini',
                    'isi' => ['Nasi Kuning', 'Ayam Goreng', 'Urap Sayuran', 'Tempe Bacem', 'Telur Pindang', 'Acar Kuning', 'Kerupuk Udang', 'Sambal Goreng Ati'],
                    'harga' => 'Rp 350.000',
                ],
                [
                    'nama' => 'Tumpeng Ulang Tahun',
                    'isi' => ['Nasi Kuning', 'Ayam Goreng/Bakar', 'Tempe Bacem', 'Urap Sayuran', 'Telur Pindang', 'Dekorasi Tema Custom', 'Lilin & Hiasan', 'Acar', 'Kerupuk'],
                    'harga' => 'Rp 450.000',
                ],
                [
                    'nama' => 'Tumpeng Syukuran',
                    'isi' => ['Nasi Kuning', 'Ayam Opor', 'Sambal Goreng Kentang Ati', 'Urap Sayuran', 'Tempe Goreng', 'Telur Rebus', 'Acar Timun Wortel', 'Kerupuk Udang'],
                    'harga' => 'Rp 500.000',
                ],
                [
                    'nama' => 'Tumpeng Sedang B',
                    'isi' => ['Nasi Kuning', 'Ayam Bakar Bumbu', 'Tempe Goreng', 'Urap Sayuran', 'Telur Balado', 'Oseng Kikil', 'Acar Kuning', 'Kerupuk'],
                    'harga' => 'Rp 600.000',
                ],
            ],
        ],
        'paket-catering' => [
            'nama' => 'Paket Catering',
            'gambar' => 'https://www.svgrepo.com/show/159184/plate-knife-and-fork.svg',
            'items' => [
                [
                    'nama' => 'Paket Silver',
                    'isi' => ['Untuk 50-100 pax, 5 Menu Lauk Pilihan', 'Nasi Putih/Nasi Kuning', '2 Jenis Sayuran', 'Minuman (Air Mineral)', 'Meja Prasmanan', 'Perlengkapan Makan', '2 Staf Pelayan', 'Bersih-bersih Sesudah Acara'],
                    'harga' => 'Rp 75.000/pax',
                ],
                [
                    'nama' => 'Paket Syukuran',
                    'isi' => ['Untuk acara adat, Nasi Tumpeng', '5 Menu Hidangan Adat', 'Urap Sayuran', 'Ayam Ingkung/Opor', 'Minuman Tradisional', 'Meja Prasmanan', '2 Staf Pelayan', 'Bersih-bersih Sesudah Acara'],
                    'harga' => 'Rp 80.000/pax',
                ],
                [
                    'nama' => 'Paket Corporate',
                    'isi' => ['Untuk kantor/gathering, Makan Siang Lengkap', 'Coffee Break 2x', 'Snack Sesi Pagi & Sore', 'Air Mineral', 'Teh/Kopi', 'Setup & Bersih-bersih', 'Staf Pelayan Profesional', 'Konsultasi Menu Gratis', 'Tepat Waktu Dijamin'],
                    'harga' => 'Rp 85.000/pax',
                ],
                [
                    'nama' => 'Paket Gold',
                    'isi' => ['Untuk 100-300 pax, 7 Menu Lauk Pilihan', 'Nasi Putih', 'Nasi Kuning', '3 Jenis Sayuran', 'Dessert', 'Minuman', 'Dekorasi Meja Prasmanan', 'Perlengkapan Makan Lengkap', '4 Staf Pelayan', 'Bersih-bersih', 'Kemas Sisa'],
                    'harga' => 'Rp 95.000/pax',
                ],
            ],
        ],
    ];

    public function index()
    {
        return view('catering', ['kategoriList' => $this->kategori]);
    }

    public function show($kategori)
    {
        $data = $this->kategori[$kategori] ?? abort(404);
        return view('menu-show', ['kategori' => $data]);
    }

    public function dataMenu(Request $request)
    {
        $terbaru = Menu::orderBy('id', 'desc')->take(5)->get();

        $kategoriList = Menu::select('kategori')->distinct()->pluck('kategori');

        $query = Menu::query();

        if ($request->filled('kategori') && $request->kategori !== 'semua') {
            $query->where('kategori', $request->kategori);
        }

        if ($request->filled('cari')) {
            $query->where('nama_menu', 'like', '%' . $request->cari . '%');
        }

        $statistik = [
            'total' => (clone $query)->count(),
            'total_harga' => (clone $query)->sum('harga'),
            'harga_tertinggi' => (clone $query)->max('harga') ?? 0,
            'harga_terendah' => (clone $query)->min('harga') ?? 0,
        ];

        $batas = 5;
        $menus = $query->orderBy('id', 'desc')->paginate($batas)->withQueryString();
        $no = $batas * ($menus->currentPage() - 1);

        return view('data-menu', [
            'terbaru' => $terbaru,
            'kategoriList' => $kategoriList,
            'menus' => $menus,
            'statistik' => $statistik,
            'kategoriDipilih' => $request->kategori ?? 'semua',
            'cari' => $request->cari ?? '',
            'no' => $no,
        ]);
    }

    // ===== CREATE =====
    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'kategori'  => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga'     => 'required|integer|min:0',
            'tgl_rilis' => 'required|date',
        ]);

        $menu = new Menu();
        $menu->nama_menu = $request->nama_menu;
        $menu->kategori = $request->kategori;
        $menu->deskripsi = $request->deskripsi;
        $menu->harga = $request->harga;
        $menu->tgl_rilis = $request->tgl_rilis;
        $menu->save();

        return redirect()->route('data-menu')->with('pesan', 'Data Menu Berhasil di Simpan');
    }

    // ===== UPDATE =====
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);

        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'kategori'  => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga'     => 'required|integer|min:0',
            'tgl_rilis' => 'required|date',
        ]);

        $menu = Menu::findOrFail($id);
        $menu->nama_menu = $request->nama_menu;
        $menu->kategori = $request->kategori;
        $menu->deskripsi = $request->deskripsi;
        $menu->harga = $request->harga;
        $menu->tgl_rilis = $request->tgl_rilis;
        $menu->save();

        return redirect()->route('data-menu')->with('pesan', 'Data Menu Berhasil di Update');
    }

    // ===== DELETE =====
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('data-menu')->with('pesan', 'Data Menu Berhasil di Hapus');
    }
}