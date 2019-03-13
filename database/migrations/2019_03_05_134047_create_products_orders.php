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
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('quantity');
            $table->timestamps();
            $table->primary(['product_id', 'order_id']);
        });

        Schema::table('products_orders', function (Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
            ->onDelete('cascade')
            ->onUpdate('cascade');
    });
        Schema::table('products_orders', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')
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
        Schema::table('products_orders', function (Blueprint $table) {
            $table->dropForeign('product_id');
        });

        Schema::table('products_orders', function (Blueprint $table) {
            $table->dropForeign('order_id');
        });

        Schema::dropIfExists('products_orders');
    }
}
