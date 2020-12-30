<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('bank_name',50);
            $table->string('branch_name',50);
            $table->string('iban',26);
            $table->string('account_number',26);
            $table->char('currency_type',3);
            $table->float('balance')->default(0);
            $table->float('starting_balance')->default(0);
            $table->date('starting_balance_date')->nullable();
            $table->string('webservice_user')->nullable();
            $table->string('webservice_password')->nullable();
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
        Schema::dropIfExists('banks');
    }
}
