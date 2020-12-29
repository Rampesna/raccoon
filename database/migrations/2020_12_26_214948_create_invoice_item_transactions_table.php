<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceItemTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_item_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('invoice_item_id')->unsigned();
            $table->smallInteger('type_id')->unsigned();
            $table->float('rate')->unsigned();
            $table->float('total')->unsigned();
            $table->float('name')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('invoice_item_transactions');
    }
}
