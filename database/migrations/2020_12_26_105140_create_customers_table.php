<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->boolean('type_id')->default(0);
            $table->boolean('taxpayer')->default(0);
            $table->string('code')->nullable();
            $table->string('title');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('tax_office')->nullable();
            $table->string('tax_number')->default('11111111111');
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->float('starting_balance')->default(0);
            $table->string('iban', 26)->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('tag_id')->unsigned()->nullable();
            $table->string('currency_type', 3)->default('TRY');
            $table->string('due_date')->default(0);
            $table->float('discount_rate')->default(0);
            $table->float('risk_limit')->default(0);
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
