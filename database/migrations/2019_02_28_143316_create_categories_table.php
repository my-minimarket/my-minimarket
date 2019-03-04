<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id_category');
            $table->string('description', 50);
            $table->timestamps();
        });

//        Schema::table('categories', function (Blueprint $table) {
//            $table->foreign('id_category')->references('id_category')->on('categories');
//        });

        DB::table('categories')->insert([
            'description' => 'Sucré',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('categories')->insert([
            'description' => 'Salé',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('categories')->insert([
            'description' => 'Boisson',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('categories')->insert([
            'description' => 'Divers',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('categories')->insert([
            'description' => 'France',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('categories')->insert([
            'description' => 'Italie',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('categories')->insert([
            'description' => 'Japon',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('categories')->insert([
            'description' => 'Etats-Unis',
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
//        Schema::table('categories', function(Blueprint $table) {
//            $table->dropForeign('id_category');
//        });
//
//        Schema::table('categories', function(Blueprint $table) {
//            $table->dropColumn('id_category');
//        });

        Schema::dropIfExists('categories');
    }
}
