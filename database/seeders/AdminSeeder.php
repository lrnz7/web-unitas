<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@unitas-si.org'],
            [
                'name'     => 'Administrator Unitas SI',
                'password' => Hash::make('admin12345'),
            ]
        );
    }
}