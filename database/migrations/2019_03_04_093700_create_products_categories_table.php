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
            $table->unsignedInteger('products_id');
            $table->unsignedInteger('categories_id');
            $table->timestamps();
            $table->index(['products_id', 'categories_id']);
        });

        Schema::table('products_categories', function (Blueprint $table) {
            $table->foreign('products_id')->references('id_product')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('products_categories', function (Blueprint $table) {
            $table->foreign('categories_id')->references('id_category')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        DB::table('products_categories')->insert([
            'products_id' => '1',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '1',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '2',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '2',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '3',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '4',
            'categories_id' => '3',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '4',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '5',
            'categories_id' => '3',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '5',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '6',
            'categories_id' => '3',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '6',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '7',
            'categories_id' => '3',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '7',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '8',
            'categories_id' => '3',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '8',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '9',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '9',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '10',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '10',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '11',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '11',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '12',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '12',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '13',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '13',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '14',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '14',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '15',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '15',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '16',
            'categories_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '16',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '17',
            'categories_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '17',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '18',
            'categories_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '18',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '19',
            'categories_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '19',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '20',
            'categories_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '20',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '21',
            'categories_id' => '2',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '21',
            'categories_id' => '7',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '22',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '22',
            'categories_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '23',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '23',
            'categories_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '24',
            'categories_id' => '3',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '24',
            'categories_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '25',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '25',
            'categories_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '26',
            'categories_id' => '4',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '26',
            'categories_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '27',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '27',
            'categories_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '28',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '28',
            'categories_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '29',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '29',
            'categories_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '30',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '30',
            'categories_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '31',
            'categories_id' => '1',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '31',
            'categories_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '35',
            'categories_id' => '4',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '37',
            'categories_id' => '8',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'products_id' => '40',
            'categories_id' => '2',
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
            $table->dropForeign('products_id');
        });

        Schema::table('products_categories', function (Blueprint $table) {
            $table->dropForeign('categories_id');
        });

        Schema::dropIfExists('products_categories');
    }
}
