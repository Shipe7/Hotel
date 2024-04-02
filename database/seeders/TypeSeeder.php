<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::factory()->create(['name' => 'Single Room']);
        Type::factory()->create(['name' => 'Double Room']);
        Type::factory()->create(['name' => 'Family Room']);
        Type::factory()->create(['name' => 'Suite']);
        Type::factory()->create(['name' => 'Vip Suite']);
    }
}
