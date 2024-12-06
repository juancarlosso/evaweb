<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'juan.carlos@jasoluciones.com.mx',
            'name' => 'JASoluciones',
            'perfil' => 1,
            'password' => bcrypt('familia1'),
            'status' => 1,
            'email_verified_at' => date('Y-m-d H:i:s')
        ]);

        User::create([
            'email' => 'hvazquez@allassist.mx',
            'name' => 'Héctor Vázquez',
            'perfil' => 1,
            'password' => bcrypt('102030'),
            'status' => 1,
            'email_verified_at' => date('Y-m-d H:i:s')
        ]);
    }
}
