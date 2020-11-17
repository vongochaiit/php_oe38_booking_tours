<?php

use Illuminate\Database\Seeder;

class BookTourDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\BookTourDetails::class,10)->create();
    }
}
