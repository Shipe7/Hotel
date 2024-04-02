<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::factory()->create(['name' => '10 Filly’s bar & lounge', 'price' => 10000]);
        Room::factory()->create(['name' => '15 Westside suite', 'price' => 10000, 'type_id' => 4]);
        Room::factory()->create(['name' => '12 Event hall', 'price' => 10000]);
        Room::factory()->create(['name' => '13 Group management', 'price' => 10000]);
        Room::factory()->create(['name' => '92 Johnson suite', 'price' => 10000, 'type_id' => 4]);
        Room::factory()->create(['name' => '93 Vip suite', 'price' => 10000, 'type_id' => 5]);
        Room::factory()->create(['name' => '99 Single room', 'price' => 10000, 'type_id' => 1]);
        Room::factory()->create(['name' => '94 Family room', 'price' => 10000, 'type_id' => 3]);
        Room::factory()->create(['name' => '95 Single room', 'price' => 10000, 'type_id' => 1]);
        Room::factory()->create(['name' => '96 Pool side single room', 'price' => 10000, 'type_id' => 1]);
        Room::factory()->create(['name' => '97 Double room', 'price' => 10000, 'type_id' => 2]);
        Room::factory()->create(['name' => '98 Single room', 'price' => 10000, 'type_id' => 1]);
        Room::factory()->create(['name' => '100 Double room', 'price' => 10000, 'type_id' => 2]);
        Room::factory()->create(['name' => '99 Vip suite', 'price' => 10000, 'type_id' => 5]);
        Room::factory()->create(['name' => '98 Westside suite', 'price' => 10000, 'type_id' => 4]);
    }
}
