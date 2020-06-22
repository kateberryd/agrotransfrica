<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterpriseusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterpriseus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('en_name');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('cor_address');
            $table->string('location');
            $table->string('enterprise');
            $table->string('core_enterprise');
            $table->string('operation');
            $table->string('category');
            $table->string('num_workers');
            $table->string('main_product');
            $table->string('anual_turnover');
            $table->string('critical_cost');
            $table->string('challenge');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enterpriseus');
    }
}
