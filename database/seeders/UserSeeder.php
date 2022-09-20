<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admi@admin.com',
            'name' => 'Admin',
            'password' => Hash::make('mistou2012'),
            'role' => User::ADMIN_ROLE
        ]);
    }
}
