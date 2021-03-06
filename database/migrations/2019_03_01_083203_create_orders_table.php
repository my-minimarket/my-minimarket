<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->dateTime('date_order')->nullable();
            $table->dateTime('date_bill')->nullable();
            $table->unsignedInteger('customer_id');
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')
            ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        DB::table('orders')->insert([
            'customer_id' => 1,
            'date_order' => '2018-12-14 22:14:26',
            'date_bill' => '2018-08-05 08:19:46',
        ]);

        DB::table('orders')->insert([
            'customer_id' => 4,
            'date_order' => '2018-04-13 17:50:56',
            'date_bill' => '2018-06-20 01:52:53',
        ]);

        DB::table('orders')->insert([
            'customer_id' => 4,
            'date_order' => '2018-09-04 05:04:28',
            'date_bill' => '2018-05-28 07:33:35',
        ]);

        DB::table('orders')->insert([
            'customer_id' => 5,
            'date_order' => '2018-10-26 22:41:36',
            'date_bill' => '2018-05-16 03:27:44',
        ]);

        DB::table('orders')->insert([
            'customer_id' => 6,
            'date_order' => '2018-08-26 00:18:45',
            'date_bill' => '2018-09-18 23:19:45',
        ]);

        DB::table('orders')->insert([
            'customer_id' => 9,
            'date_order' => '2018-03-06 15:30:45',
            'date_bill' => '2018-09-18 21:30:11',
        ]);

        DB::table('orders')->insert([
            'customer_id' => 10,
            'date_order' => '2019-02-07 11:54:43',
            'date_bill' => null,
        ]);

        DB::table('orders')->insert([
            'customer_id' => 15,
            'date_order' => '2019-02-07 11:57:29',
            'date_bill' => null,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
