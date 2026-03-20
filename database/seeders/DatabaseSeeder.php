<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
            ]
        );

        $this->call([
            //chamada dos seeders
            FornecedorSeeder::class,
            SiteContatoSeeder::class,
            MotivoContatoSeeder::class,
        ]);
    }
}
