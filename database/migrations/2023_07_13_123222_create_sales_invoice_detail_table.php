<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesInvoiceDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_invoice_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sales_invoice_id');
            $table->string('item_name',100);
            $table->integer('price')->nullable('0');
            $table->integer('qty')->nullable('0');
            $table->integer('subtotal')->nullable('0');
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
        Schema::dropIfExists('sales_invoice_detail');
    }
}
