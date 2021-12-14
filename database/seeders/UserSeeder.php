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
            'name' => 'Gavin',
            'gender' => 'Male',
            'address' => 'Hati veni',
            'email' => 'gavin@gmail.com',
            'password' => Hash::make('gavin123'),
            'role' => 'admin'
        ]);
    }
}
