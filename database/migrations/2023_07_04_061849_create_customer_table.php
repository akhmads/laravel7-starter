<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('CustID');
            $table->string('CustName',100);
            $table->string('CustContactName',100);
            $table->string('CustAddress',250);
            $table->string('CustPhone',50);
            $table->string('CustMobile',50);
            $table->string('CustEmail',50);
            $table->string('CustNote',250);
            $table->timestamps();
            $table->index('CustName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
