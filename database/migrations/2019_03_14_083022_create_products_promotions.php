<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsPromotions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_promotions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('promotion_id');
            $table->timestamps();
            $table->primary(['product_id', 'promotion_id']);
        });

        Schema::table('products_promotions', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });

        Schema::table('products_promotions', function (Blueprint $table) {
            $table->foreign('promotion_id')->references('id')->on('promotions')
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

        Schema::table('products_promotions', function (Blueprint $table) {
            $table->dropForeign('product_id');
        });

        Schema::table('products_promotions', function (Blueprint $table) {
            $table->dropForeign('promotion_id');
        });

        Schema::dropIfExists('products_promotions');
    }

}
