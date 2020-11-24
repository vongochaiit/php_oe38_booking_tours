<?php

use Illuminate\Database\Seeder;

class CommentReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CommentReview::class,10)->create();
    }
}
