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
            $table->string('name');
            $table->date('dob');
            $table->string('phone1',100)->unique();
            $table->string('phone2',100)->unique();
            $table->string('email',100)->unique();
            $table->string('image');
            $table->string('blood_group');
            $table->string('aadar',100)->unique();
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
