<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create(['email' => 'ask4rapzo@gmail.com', 'first_name' => 'Ogar', 'last_name'  => 'Job',]);
        User::factory()->create(['email' => 'johndoe1@gmail.com', 'phone' => '02']);
        User::factory()->create(['email' => 'johndoe2@gmail.com', 'phone' => '03']);
        User::factory()->create(['email' => 'johndoe3@gmail.com', 'phone' => '04']);
        User::factory()->create(['email' => 'johndoe4@gmail.com', 'phone' => '05']);
        User::factory()->create(['email' => 'johndoe5@gmail.com', 'phone' => '06']);
        User::factory()->create(['email' => 'johndoe6@gmail.com', 'phone' => '07']);
        User::factory()->create(['email' => 'johndoe7@gmail.com', 'phone' => '08']);
        User::factory()->create(['email' => 'johndoe8@gmail.com', 'phone' => '09']);
        User::factory()->create(['email' => 'johndoe9@gmail.com', 'phone' => '012']);
        User::factory()->create(['email' => 'johndoe10@gmail.com', 'phone' => '022']);
        User::factory()->create(['email' => 'johndoe11@gmail.com', 'phone' => '032']);
        User::factory()->create(['email' => 'johndoe12@gmail.com', 'phone' => '042']);
        User::factory()->create(['email' => 'johndoe13@gmail.com', 'phone' => '0452']);
        User::factory()->create(['email' => 'johndoe14@gmail.com', 'phone' => '62']);
        User::factory()->create(['email' => 'johndoe15@gmail.com', 'phone' => '062']);
        User::factory()->create(['email' => 'johndoe16@gmail.com', 'phone' => '072']);
    }
}
