<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Fiis\SegmentoFiiSeeder;
use Database\Seeders\Fiis\TipoFiiSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(TipoFiiSeeder::class);
        $this->call(SegmentoFiiSeeder::class);
    }
}
