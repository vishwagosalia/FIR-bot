<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firs', function (Blueprint $table) {
            $table->increments('fir_id');
            $table->text('complaint');
            $table->string('type_id');
            $table->date('crime_happened')->nullable();
            $table->string('time_happened'); // morning, afternoon, evening, night.
            $table->integer('casualties')->default('0');
            $table->integer('items_stolen')->default('0');
            $table->string('city');
            $table->bigInteger('pincode');
            $table->string('state')->nullable();
            $table->string('name');
            $table->bigInteger('phone_no');
            $table->string('email')->nullable();
            $table->text('address');
            $table->string('aadhar_no')->nullable();
            $table->string('token')->nullable();
            $table->string('aadhar_photo');
            $table->ipAddress('ip_address');
            $table->tinyInteger('is_authenticated')->default(0); // 0 - not auth , 1 - authenticated.
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
        Schema::dropIfExists('fir_models');
    }
}
