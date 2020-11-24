<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentreviewUserContraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commentreviews', function (Blueprint $table) {
            $table->foreign('tour_id')->references('tour_id')->on('tours')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commentreviews', function (Blueprint $table) {
            $table->dropForeign(['tour_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
