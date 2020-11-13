<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankaccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('bankaccount', function (Blueprint $table) {
            $table->increments('bank_id');
            $table->integer('user_id')->unsigned();
            $table->string('bank_name');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->softDeletes(); 
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('bankaccount');
        Schema::enableForeignKeyConstraints();
    }
}
