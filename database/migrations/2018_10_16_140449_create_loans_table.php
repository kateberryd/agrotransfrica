<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unsigned()->nullable();
            $table->string('project_name');
            $table->string('pri_commodity');
            $table->MediumText('asso_commodities');
            $table->string('b_prospective');
            $table->string('b_existing');
            $table->string('s_prospective');
            $table->string('s_existing');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('phone');
            $table->foreign('loan_id')->references('id')->on('users');
            $table->mediumText('pri_activities');
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
        Schema::dropIfExists('loans');
    }
}
