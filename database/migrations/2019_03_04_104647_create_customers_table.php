<?php

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
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->string('phone', 15);
            $table->unsignedInteger('id_address_order');
            $table->unsignedInteger('id_address_delivery');

            $table->timestamps();

        });



     Schema::table('customers', function (Blueprint $table){
    $table->foreign('id_address_order')->references('id')->on('addresses')
        ->onDelete('cascade')
        ->onUpdate('cascade');
     });

    Schema::table('customers', function (Blueprint $table){
        $table->foreign('id_address_delivery')->references('id')->on('addresses')
            ->onDelete('cascade')
            ->onUpdate('cascade');
    });


    DB::table('customers')->insert(['id' => '1','firstname' => 'Nesbit','lastname' => 'Merridie','password' => '','phone' => '','email' => 'mnesbit0@columbia.edu','id_address_order' => '1','id_address_delivery' => '1']);
  DB::table('customers')->insert(['id' => '4','firstname' => 'McKea','lastname' => 'Cristian','password' => '','phone' => '','email' => 'cmckea3@feedburner.com','id_address_order' => '4','id_address_delivery' => '4']);
  DB::table('customers')->insert(['id' => '5','firstname' => 'Checkley','lastname' => 'Jonell','password' => '','phone' => '','email' => 'jcheckley4@zdnet.com','id_address_order' => '5','id_address_delivery' => '5']);
  DB::table('customers')->insert(['id' => '6','firstname' => 'Linneman','lastname' => 'Shaine','password' => '','phone' => '','email' => 'slinneman5@aol.com','id_address_order' => '6','id_address_delivery' => '6']);
  DB::table('customers')->insert(['id' => '9','firstname' => 'Storre','lastname' => 'Ricki','password' => '','phone' => '','email' => 'rstorre8@noaa.gov','id_address_order' => '9','id_address_delivery' => '9']);
  DB::table('customers')->insert(['id' => '10','firstname' => 'Weippert','lastname' => 'Danice','password' => '','phone' => '','email' => 'dweippert9@cafepress.com','id_address_order' => '10','id_address_delivery' => '10']);
  DB::table('customers')->insert(['id' => '15','firstname' => 'Filby','lastname' => 'Jessamine','password' => '','phone' => '','email' => 'jfilbye@tripadvisor.com','id_address_order' => '15','id_address_delivery' => '15']);

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
