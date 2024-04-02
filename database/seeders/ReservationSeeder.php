<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::factory()->create(['room_id' => 1, 'checkin_at' => now()->subDays(372), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 2, 'checkin_at' => now()->subDays(372), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 3, 'checkin_at' => now()->subDays(372), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 4, 'checkin_at' => now()->subDays(372), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 5, 'checkin_at' => now()->subDays(372), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 6, 'checkin_at' => now()->subDays(372), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 7, 'checkin_at' => now()->subDays(372), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 8, 'checkin_at' => now()->subDays(372), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 9, 'checkin_at' => now()->subDays(372), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 10, 'checkin_at' => now()->subDays(372), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 11, 'checkin_at' => now()->subDays(72), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 12, 'checkin_at' => now()->subDays(72), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 13, 'checkin_at' => now()->subDays(72), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 14, 'checkin_at' => now()->subDays(72), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 15, 'checkin_at' => now()->subDays(72), 'checkout_at' => now()->subDays(23)]);
        Reservation::factory()->create(['room_id' => 1, 'checkin_at' => now()->addDays(2), 'checkout_at' => now()->addDays(3)]);
        Reservation::factory()->create(['room_id' => 2, 'checkin_at' => now()->addDays(2), 'checkout_at' => now()->addDays(3)]);
        Reservation::factory()->create(['room_id' => 3, 'checkin_at' => now()->addDays(2), 'checkout_at' => now()->addDays(3)]);
        Reservation::factory()->create(['room_id' => 4, 'checkin_at' => now()->subDays(2), 'checkout_at' => now()->addDays(3)]);
        Reservation::factory()->create(['room_id' => 5, 'checkin_at' => now()->subDays(1), 'checkout_at' => now()->subDays(0)]);
        Reservation::factory()->create(['room_id' => 5, 'checkin_at' => now()->addDays(1), 'checkout_at' => now()->addDays(2)]);
        Reservation::factory()->create(['room_id' => 6, 'checkin_at' => now()->subDays(2), 'checkout_at' => now()->addDays(3)]);
        Reservation::factory()->create(['room_id' => 7, 'checkin_at' => now(), 'checkout_at' => tomorrow()]);
        Reservation::factory()->create(['room_id' => 8, 'checkin_at' => now()->subDays(2), 'checkout_at' => now()->subDays(1)]);
        Reservation::factory()->create(['room_id' => 8, 'checkin_at' => now(), 'checkout_at' => tomorrow()]);
        Reservation::factory()->create(['room_id' => 9, 'checkin_at' => today(), 'checkout_at' => tomorrow()]);
        Reservation::factory()->create(['room_id' => 10, 'checkin_at' => now()->subDays(2), 'checkout_at' => now()->addDays(3)]);
        Reservation::factory()->create(['room_id' => 11, 'checkin_at' => now()->subDays(3), 'checkout_at' => now()->subDays(1)]);
        Reservation::factory()->create(['room_id' => 11, 'checkin_at' => now()->addDays(1), 'checkout_at' => now()->addDays(3)]);
        Reservation::factory()->create(['room_id' => 12, 'checkin_at' => now()->subDays(3), 'checkout_at' => now()->subDays(1)]);
        Reservation::factory()->create(['room_id' => 12, 'checkin_at' => now()->addDays(1), 'checkout_at' => now()->addDays(4)]);
        Reservation::factory()->create(['room_id' => 13, 'checkin_at' => now()->addDays(1), 'checkout_at' => now()->addDays(5)]);
    }
}
