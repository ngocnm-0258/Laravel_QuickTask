<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateInitialAdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::unguard([
            'is_admin',
        ]);

        for ($i = 0; $i < 10; ++$i) {
            User::create([
                'email' => "admin" . $i . ".account@sun-asterisk.com",
                'password' => bcrypt('12345678'),
                'first_name' => 'admin' . $i,
                'last_name' => 'account',
                'is_active' => true,
                'username' => 'admin' . $i . '-account',
                'is_admin' => true,
            ]);
        }
    }
}
