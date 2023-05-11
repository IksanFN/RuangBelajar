<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User;
        $admin->name = 'Iksan Fauzi Nugraha';
        $admin->email = 'admin@gmail.com';
        $admin->email_verified_at = date('Y-m-d H:i:s', time());
        $admin->password = Hash::make('password');
        $admin->occupation = 'Web Developer';
        $admin->is_admin = true;
        $admin->created_at = date('Y-m-d H:i:s', time());;
        $admin->updated_at = date('Y-m-d H:i:s', time());;
        $admin->save();
    }
}
