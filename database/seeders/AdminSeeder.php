<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@berlliancatering.com'],
            [
                'name'     => 'Admin Berllian',
                'password' => 'admin12345', // otomatis di-hash oleh cast 'hashed' di model User
            ]
        );
    }
}