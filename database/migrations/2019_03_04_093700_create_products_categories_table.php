<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('category_id');
            $table->timestamps();
            $table->primary(['product_id', 'category_id']);
        });

        Schema::table('products_categories', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('products_categories', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        DB::table('products_categories')->insert([
            'product_id' => '1',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '1',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '2',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '2',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '3',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '4',
            'category_id' => '3',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '4',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '5',
            'category_id' => '3',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '5',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '6',
            'category_id' => '3',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '6',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '7',
            'category_id' => '3',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '7',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '8',
            'category_id' => '3',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '8',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '9',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '9',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '10',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '10',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '11',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '11',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '12',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '12',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '13',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '13',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '14',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '14',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '15',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '15',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '16',
            'category_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '16',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '17',
            'category_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '17',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '18',
            'category_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '18',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '19',
            'category_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '19',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '20',
            'category_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '20',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '21',
            'category_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '21',
            'category_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '22',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '22',
            'category_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '23',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '23',
            'category_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '24',
            'category_id' => '3',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '24',
            'category_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '25',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '25',
            'category_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '26',
            'category_id' => '4',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '26',
            'category_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '27',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '27',
            'category_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '28',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '28',
            'category_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '29',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '29',
            'category_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '30',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '30',
            'category_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '31',
            'category_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '31',
            'category_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '35',
            'category_id' => '4',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '37',
            'category_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'product_id' => '40',
            'category_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products_categories', function (Blueprint $table) {
            $table->dropForeign('product_id');
        });

        Schema::table('products_categories', function (Blueprint $table) {
            $table->dropForeign('category_id');
        });

        Schema::dropIfExists('products_categories');
    }
}
