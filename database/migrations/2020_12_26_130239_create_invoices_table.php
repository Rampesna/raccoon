<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->boolean('electronic')->default(0);
            $table->string('ettn')->nullable(); // ettn
            $table->tinyInteger('customer_id')->unsigned(); // Müşteri
            $table->date('date'); // Fatura Tarihi
            $table->time('time'); // Fatura Saati
            $table->time('serial_number_id'); // Faturanın Seri Numarası
            $table->string('profile_id')->nullable(); // Senaryo Tipi (EFATURA - EARSİV)
            $table->string('scenario_type')->nullable(); // Temel - Ticari - Earşiv vb...
            $table->tinyInteger('type_id')->unsigned()->nullable(); // Alış - Satış - İstisna vb...
            $table->date('due_date')->nullable();
            $table->char('currency_type', 3);
            $table->float('currency');
            $table->float('order_id')->nullable();
            $table->date('order_date')->nullable();
            $table->float('waybill_id')->nullable();
            $table->date('waybill_date')->nullable();
            $table->boolean('draft')->default(0);
            $table->boolean('sent')->default(0);
            $table->string('last_status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
