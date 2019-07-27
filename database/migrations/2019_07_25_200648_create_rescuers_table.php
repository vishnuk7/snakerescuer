<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRescuersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rescuers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('name');
            $table->string('email');
            $table->string('aadhar');
            $table->string('bloodgroup');
            $table->string('dob');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('constituency');
            $table->string('address');
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
        Schema::dropIfExists('rescuers');
    }
}
