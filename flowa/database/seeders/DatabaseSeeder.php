<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(AdministracionSeeder::class);
        $this->call(SecretariaSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(ProfesorSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(PlanSeeder::class);
        

        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
