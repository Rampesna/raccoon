<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('safes', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->char('currency_type',3);
            $table->float('balance')->default(0);
            $table->float('starting_balance')->default(0);
            $table->date('starting_balance_date')->nullable();
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
        Schema::dropIfExists('safes');
    }
}
