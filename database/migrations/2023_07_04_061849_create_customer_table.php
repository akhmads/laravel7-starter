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
            $table->string('CustContactName',100)->nullable()->default("");
            $table->string('CustAddress',250)->nullable()->default("");
            $table->string('CustPhone',50)->nullable()->default("");
            $table->string('CustMobile',50)->nullable()->default("");
            $table->string('CustEmail',50)->nullable()->default("");
            $table->string('CustNote',250)->nullable()->default("");
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
