<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('role', ['buyer', 'seller']);
            $table->enum('currency', ['USD', 'NGN']);
            $table->integer('inspection_period');
            $table->string('item_name');
            $table->string('price');
            $table->string('category');
            $table->text('description');
            $table->integer('user_id');
            $table->string('seller_email');
            $table->string('seller_phone');
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
        Schema::dropIfExists('transactions');
    }
};
