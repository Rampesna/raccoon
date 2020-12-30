<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('unit_id')->unsigned();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->string('code')->nullable();
            $table->string('name');
            $table->float('risk_limit')->unsigned()->default(0);
            $table->float('discount_rate')->unsigned()->default(0);
            $table->tinyInteger('vat_rate')->unsigned()->default(18);
            $table->float('buying_price')->unsigned()->default(0);
            $table->float('selling_price')->unsigned()->default(0);
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
        Schema::dropIfExists('stocks');
    }
}
