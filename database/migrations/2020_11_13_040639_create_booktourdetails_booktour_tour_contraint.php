<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooktourdetailsBooktourTourContraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booktourdetails', function (Blueprint $table) {
            $table->foreign('tour_id')->references('tour_id')->on('tours')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('booktour_id')->references('booktour_id')->on('booktour')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booktourdetails', function (Blueprint $table) {
            $table->dropForeign(['tour_id']);
            $table->dropForeign(['booktour_id']);
        });
    }
}
