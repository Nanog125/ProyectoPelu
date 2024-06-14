<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'rol' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 12345678,
        ]);

        User::factory()->create([
            'name' => 'Cliente',
            'rol' => 'usuario',
            'password' => 12345678,
            'email' => 'cliente@example.com',
            'credit' => 10,
        ]);

        $business = Business::create([
            'name' => 'Rocha',
            'phone' => '1234567890',
            'address' => 'Calle 123',
            'image' => fake()->imageUrl(word: 'Rocha'),
            'max_future_days' => 15,
            'slot_duration' => 60,
        ]);

        $business->schedules()->createMany([
            [
                'day_of_week' => 1,
                'open_time' => '10:00',
                'close_time' => '22:00',
            ],
            [
                'day_of_week' => 2,
                'open_time' => '10:00',
                'close_time' => '22:00',
            ],
            [
                'day_of_week' => 3,
                'open_time' => '10:00',
                'close_time' => '22:00',
            ],
            [
                'day_of_week' => 4,
                'open_time' => '10:00',
                'close_time' => '22:00',
            ],
            [
                'day_of_week' => 5,
                'open_time' => '10:00',
                'close_time' => '22:00',
            ],
            [
                'day_of_week' => 6,
                'open_time' => '10:00',
                'close_time' => '14:00',
            ],
            [
                'day_of_week' => 7,
                'is_closed' => true,
            ],
        ]);

        $business = Business::create([
            'name' => 'Diego',
            'phone' => '0987654321',
            'address' => 'Calle 321',
            'image' => fake()->imageUrl(word: 'Diego'),
            'max_future_days' => 15,
            'slot_duration' => 60,
        ]);

        $business->schedules()->createMany([
            [
                'day_of_week' => 1,
                'open_time' => '10:00',
                'close_time' => '22:00',
            ],
            [
                'day_of_week' => 2,
                'open_time' => '10:00',
                'close_time' => '22:00',
            ],
            [
                'day_of_week' => 3,
                'open_time' => '10:00',
                'close_time' => '22:00',
            ],
            [
                'day_of_week' => 4,
                'open_time' => '10:00',
                'close_time' => '22:00',
            ],
            [
                'day_of_week' => 5,
                'open_time' => '10:00',
                'close_time' => '22:00',
            ],
            [
                'day_of_week' => 6,
                'open_time' => '10:00',
                'close_time' => '14:00',
            ],
            [
                'day_of_week' => 7,
                'is_closed' => true,
            ],
        ]);
    }
}
