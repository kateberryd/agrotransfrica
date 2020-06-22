<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date_birth');
            $table->string('lga');
            $table->string('mi');
            $table->text('in');
            $table->text('bvn');
            $table->string('size');
            $table->string('challenge');
            $table->string('full_name');
            $table->string('relationship');
            $table->string('kin_address');
            $table->string('kin_email');
            $table->string('kin_phone');
            $table->string('institution');
            $table->string('year_ob');
            $table->string('institution_ob');
            $table->string('po');
            $table->string('co');
            $table->string('cname');
            $table->string('cnature');
            $table->string('caddress');
            $table->string('rnumber');
            $table->string('remail');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('marital');
            $table->string('nation');
            $table->string('state');
            $table->string('email');
            $table->string('image');
            $table->integer('step_1')->default(0);
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('step_2')->default(0);
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
        Schema::dropIfExists('clients');
    }
}
