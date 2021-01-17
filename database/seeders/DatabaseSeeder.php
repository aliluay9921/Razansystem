<?php

namespace Database\Seeders;

use App\Models\Flightline;
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
        // \App\Models\User::factory(10)->create();
        $this->call(FlightlineSeeder::class);
        $this->call(userseeder::class);
        $this->call(orderseeder::class);
        $this->call(passengerseed::class);
        $this->call(flightplanseeder::class);
        $this->call(ticketseeder::class);
        $this->call(countaryseed::class);
        $this->call(posationseed::class);
        $this->call(notifyseeder::class);
    }
}