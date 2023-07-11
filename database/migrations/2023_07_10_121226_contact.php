<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('contact_name',100)->nullable()->default("");
            $table->string('address',250)->nullable()->default("");
            $table->string('phone',50)->nullable()->default("");
            $table->string('mobile',50)->nullable()->default("");
            $table->string('email',50)->nullable()->default("");
            $table->string('note',250)->nullable()->default("");
            $table->timestamps();
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
