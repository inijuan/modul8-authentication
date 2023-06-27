<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        user::truncate();

        user::create([
            'name' => 'Administrator',
            'email' => 'admin@admin',
            'password' => bcrypt('adminadmin')
        ]);
    }
}
