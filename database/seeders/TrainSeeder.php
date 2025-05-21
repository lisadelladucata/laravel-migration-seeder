<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    public function run(): void
    {
        $trains = [
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Roma Termini',
                'departure_time' => '2025-05-22 08:00:00',
                'arrival_time' => '2025-05-22 12:30:00',
                'train_code' => 'TRN100',
                'total_carriages' => 8,
                'on_time' => true,
                'deleted' => false,
            ],
            [
                'agency' => 'Italo',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Torino Porta Nuova',
                'departure_time' => '2025-05-22 10:15:00',
                'arrival_time' => '2025-05-22 16:45:00',
                'train_code' => 'ITL200',
                'total_carriages' => 9,
                'on_time' => false,
                'deleted' => false,
            ],
            [
                'agency' => 'Trenord',
                'departure_station' => 'Bergamo',
                'arrival_station' => 'Milano Porta Garibaldi',
                'departure_time' => '2025-05-22 07:30:00',
                'arrival_time' => '2025-05-22 08:50:00',
                'train_code' => 'TNR300',
                'total_carriages' => 5,
                'on_time' => true,
                'deleted' => false,
            ],
            [
                'agency' => 'Frecciarossa',
                'departure_station' => 'Firenze SMN',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2025-05-23 06:00:00',
                'arrival_time' => '2025-05-23 08:00:00',
                'train_code' => 'FR400',
                'total_carriages' => 10,
                'on_time' => true,
                'deleted' => false,
            ],
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Genova Brignole',
                'arrival_station' => 'La Spezia',
                'departure_time' => '2025-05-24 11:30:00',
                'arrival_time' => '2025-05-24 13:10:00',
                'train_code' => 'TRN500',
                'total_carriages' => 6,
                'on_time' => false,
                'deleted' => true,
            ],
        ];

        foreach ($trains as $train) {
            Train::create($train);
        }
    }
}