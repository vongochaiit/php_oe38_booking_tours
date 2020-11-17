<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TourTableSeeder::class);
        $this->call(RatingSeeder::class);
        $this->call(CommentReviewSeeder::class);
        $this->call(LikeTableSeeder::class);
        $this->call(BankAccountSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(BookTourSeeder::class);
        $this->call(BookTourDetailsSeeder::class);
    }
}
