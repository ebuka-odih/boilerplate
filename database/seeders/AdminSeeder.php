<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('email', '=', 'admin@site.com')->first();
        if($admin === null){
            DB::table('users')->insert([
                'id' => Str::uuid(),
                'name' => 'Admin Panel',
                'role' => 'admin',
                'status' => 1,
                'email' => 'admin@site.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('ADMINPASS123'),
            ]);
        }
    }
}
