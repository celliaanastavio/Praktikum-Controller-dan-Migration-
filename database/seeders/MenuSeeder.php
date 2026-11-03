<?php
namespace Database\Seeders;
use App\Models\Menu;
use Illuminate\Database\Seeder;
class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Nasi Box
            ['nama_menu' => 'Menu Paket GG', 'kategori' => 'Nasi Box', 'deskripsi' => 'Nasi Putih, Telur Balado, Tempe Mendoan, Sayur Bobor, Buah, Kerupuk, Sambal, Tissue, Sendok', 'harga' => 22000],
            ['nama_menu' => 'Menu Paket B', 'kategori' => 'Nasi Box', 'deskripsi' => 'Nasi Putih, Ayam Goreng/Bacem, Oseng Sayur, Tempe/Tahu, Buah, Kerupuk, Sambal, Tissue, Sendok', 'harga' => 23000],
            ['nama_menu' => 'Menu Paket I', 'kategori' => 'Nasi Box', 'deskripsi' => 'Nasi Putih, Lele Goreng Crispy, Sambal Terasi, Lalapan, Tempe Orek, Buah, Kerupuk, Tissue, Sendok', 'harga' => 23000],
            ['nama_menu' => 'Menu Paket BB', 'kategori' => 'Nasi Box', 'deskripsi' => 'Nasi Putih, Bakso Goreng, Mie Goreng, Tempe Goreng, Buah, Kerupuk, Sambal, Tissue, Sendok', 'harga' => 24000],
            ['nama_menu' => 'Menu Paket C', 'kategori' => 'Nasi Box', 'deskripsi' => 'Nasi Putih, Ikan Nila Goreng, Sambal Mangga, Lalapan, Tahu Bacem, Buah, Kerupuk, Sendok', 'harga' => 25000],
            ['nama_menu' => 'Menu Paket D', 'kategori' => 'Nasi Box', 'deskripsi' => 'Nasi Putih, Sate Ayam, Lontong, Sambal Kacang, Acar, Kerupuk, Tissue, Sendok', 'harga' => 26000],
            ['nama_menu' => 'Menu Paket Spesial', 'kategori' => 'Nasi Box', 'deskripsi' => 'Ayam Bakar Madu, Rendang Telur, Urap Sayuran, Perkedel Kentang, Nasi Putih, Kerupuk, Sendok', 'harga' => 40000],
            // Nasi Tumpeng
            ['nama_menu' => 'Tumpeng Mini', 'kategori' => 'Nasi Tumpeng', 'deskripsi' => 'Nasi Kuning, Ayam Goreng, Urap Sayuran, Tempe Bacem, Telur Pindang, Acar Kuning, Kerupuk Udang, Sambal Goreng Ati', 'harga' => 350000],
            ['nama_menu' => 'Tumpeng Ulang Tahun', 'kategori' => 'Nasi Tumpeng', 'deskripsi' => 'Nasi Kuning, Ayam Goreng/Bakar, Tempe Bacem, Urap Sayuran, Telur Pindang, Dekorasi Tema Custom, Lilin & Hiasan, Acar, Kerupuk', 'harga' => 450000],
            ['nama_menu' => 'Tumpeng Syukuran', 'kategori' => 'Nasi Tumpeng', 'deskripsi' => 'Nasi Kuning, Ayam Opor, Sambal Goreng Kentang Ati, Urap Sayuran, Tempe Goreng, Telur Rebus, Acar Timun Wortel, Kerupuk Udang', 'harga' => 500000],
            ['nama_menu' => 'Tumpeng Sedang B', 'kategori' => 'Nasi Tumpeng', 'deskripsi' => 'Nasi Kuning, Ayam Bakar Bumbu, Tempe Goreng, Urap Sayuran, Telur Balado, Oseng Kikil, Acar Kuning, Kerupuk', 'harga' => 600000],
            ['nama_menu' => 'Tumpeng Besar', 'kategori' => 'Nasi Tumpeng', 'deskripsi' => 'Nasi Kuning, Ayam Ingkung, Sambal Goreng Kentang, Urap Sayuran, Telur Pindang, Kerupuk Udang, Acar Kuning, untuk 15-20 orang', 'harga' => 850000],
            ['nama_menu' => 'Tumpeng Komplit', 'kategori' => 'Nasi Tumpeng', 'deskripsi' => 'Nasi Kuning, Ayam Goreng, Perkedel, Sambal Goreng Hati, Rempeyek, Acar, Kerupuk, Telur Balado', 'harga' => 700000],
            ['nama_menu' => 'Tumpeng Nasional', 'kategori' => 'Nasi Tumpeng', 'deskripsi' => 'Nasi Kuning, Rendang, Sambal Goreng Kentang Ati, Perkedel, Kerupuk, Timun, Telur Rebus', 'harga' => 550000],
            // Catering Prasmanan
            ['nama_menu' => 'Paket Silver', 'kategori' => 'Catering Prasmanan', 'deskripsi' => 'Untuk 50-100 pax, 5 Menu Lauk Pilihan, Nasi Putih/Kuning, 2 Jenis Sayuran, Minuman, Meja Prasmanan, 2 Staf Pelayan', 'harga' => 75000],
            ['nama_menu' => 'Paket Syukuran', 'kategori' => 'Catering Prasmanan', 'deskripsi' => 'Untuk acara adat, 5 Menu Hidangan Adat, Urap Sayuran, Ayam Ingkung/Opor, Minuman Tradisional, 2 Staf Pelayan', 'harga' => 80000],
            ['nama_menu' => 'Paket Corporate', 'kategori' => 'Catering Prasmanan', 'deskripsi' => 'Untuk kantor/gathering, Coffee Break 2x, Snack Sesi Pagi & Sore, Air Mineral, Teh/Kopi, Staf Profesional', 'harga' => 85000],
            ['nama_menu' => 'Paket Gold', 'kategori' => 'Catering Prasmanan', 'deskripsi' => 'Untuk 100-300 pax, 7 Menu Lauk Pilihan, Nasi Putih & Kuning, Dessert, 4 Staf Pelayan, Bersih-bersih', 'harga' => 95000],
            ['nama_menu' => 'Paket Bronze', 'kategori' => 'Catering Prasmanan', 'deskripsi' => 'Untuk 30-50 pax, 3 Menu Lauk Pilihan, Nasi Putih, 1 Jenis Sayuran, Minuman, Perlengkapan Makan', 'harga' => 60000],
            ['nama_menu' => 'Paket Platinum', 'kategori' => 'Catering Prasmanan', 'deskripsi' => 'Untuk 300+ pax, 8 Menu Lauk Pilihan, Dessert Premium, Live Cooking, 5 Staf Pelayan', 'harga' => 120000],
        ];
        foreach ($data as $item) {
            Menu::create($item);
        }
    }
}