<?php

namespace Database\Seeders;
use Database\Factories\PersonasFactory;
use App\Models\Personas;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder


{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Personas::factory(3)->create();

    }
}
