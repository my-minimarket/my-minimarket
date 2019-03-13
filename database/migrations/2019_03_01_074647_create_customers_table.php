<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->string('phone', 15)->nullable();
            $table->unsignedInteger('id_address_order')->nullable();
            $table->unsignedInteger('id_address_delivery')->nullable();

            $table->timestamps();

        });

//    Schema::table('customers', function (Blueprint $table){
//        $table->foreign('id_address_delivery')->references('id')->on('addresses')
//            ->onDelete('cascade')
//            ->onUpdate('cascade');
//    });


    DB::table('customers')->insert(['id' => '1','firstname' => 'Nesbit','lastname' => 'Merridie','password' => '','phone' => '','email' => 'mnesbit0@columbia.edu']);
  DB::table('customers')->insert(['id' => '4','firstname' => 'McKea','lastname' => 'Cristian','password' => '','phone' => '','email' => 'cmckea3@feedburner.com']);
  DB::table('customers')->insert(['id' => '5','firstname' => 'Checkley','lastname' => 'Jonell','password' => '','phone' => '','email' => 'jcheckley4@zdnet.com']);
  DB::table('customers')->insert(['id' => '6','firstname' => 'Linneman','lastname' => 'Shaine','password' => '','phone' => '','email' => 'slinneman5@aol.com']);
  DB::table('customers')->insert(['id' => '9','firstname' => 'Storre','lastname' => 'Ricki','password' => '','phone' => '','email' => 'rstorre8@noaa.gov']);
  DB::table('customers')->insert(['id' => '10','firstname' => 'Weippert','lastname' => 'Danice','password' => '','phone' => '','email' => 'dweippert9@cafepress.com']);
  DB::table('customers')->insert(['id' => '15','firstname' => 'Filby','lastname' => 'Jessamine','password' => '','phone' => '','email' => 'jfilbye@tripadvisor.com']);

    }


     /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
