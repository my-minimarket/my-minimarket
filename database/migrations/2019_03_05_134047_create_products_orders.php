<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('quantity');
            $table->timestamps();
        });

        Schema::table('products_orders', function (Blueprint $table) {
        $table->foreign('customer_id')->references('id')->on('orders')
            ->onDelete('cascade')
            ->onUpdate('cascade');
    });
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('')->references('id')->on('products_orders')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_orders');
    }
}
