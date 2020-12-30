<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollateralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaterals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->char('currency_type',3)->nullable();
            $table->float('balance')->default(0);
            $table->date('date');
            $table->string('collateral_number',20)->nullable();
            $table->boolean('type')->default(0);
            $table->date('due_date')->nullable();
            $table->tinyInteger('bank_id')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('collaterals');
    }
}
