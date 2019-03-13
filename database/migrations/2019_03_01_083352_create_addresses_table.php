<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->string('street',50);
            $table->string('complement', 50);
            $table->string('postal_code', 10);
            $table->string('city', 20);
            $table->string('country', 20);
            $table->string('type', 20);
            $table->timestamps();
        });

        Schema::table('addresses', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        DB::table('addresses')->insert([
            'id' => '1','street' => '6003 Lacinia. Route','complement' => '','postal_code' => '34515','city' => 'Moulins','country' => 'France', 'customer_id' => '1', 'type' => 'delivery']);
  DB::table('addresses')->insert([
      'id' => '2','street' => 'CP 873, 4607 Enim. Avenue','complement' => '','postal_code' => '76164','city' => 'Carcassonne','country' => 'France', 'customer_id' => '1', 'type' => 'delivery']);
  DB::table('addresses')->insert([
      'id' => '3','street' => '3028 Ut Route','complement' => '','postal_code' => '95176','city' => 'Limoges','country' => 'France', 'customer_id' => '4', 'type' => 'delivery']);
  DB::table('addresses')->insert([
      'id' => '4','street' => 'CP 117, 622 Suspendisse Impasse','complement' => '','postal_code' => '03472','city' => 'Nice','country' => 'France', 'customer_id' => '4', 'type' => 'delivery']);
  DB::table('addresses')->insert([
      'id' => '5','street' => 'CP 371, 5571 Diam Impasse','complement' => '','postal_code' => '76765','city' => 'Périgueux','country' => 'France', 'customer_id' => '5', 'type' => 'delivery']);
  DB::table('addresses')->insert([
      'id' => '6','street' => 'Appartement 277-7185 Dis Avenue','complement' => '','postal_code' => '35159','city' => 'Lorient','country' => 'France', 'customer_id' => '5', 'type' => 'order']);
  DB::table('addresses')->insert([
      'id' => '7','street' => 'Appartement 960-1474 Lacus Impasse','complement' => '','postal_code' => '68433','city' => 'Strasbourg','country' => 'France', 'customer_id' => '6', 'type' => 'order']);
  DB::table('addresses')->insert([
      'id' => '8','street' => 'CP 903, 9007 Iaculis, Rue','complement' => '','postal_code' => '04570','city' => 'Compiègne','country' => 'France', 'customer_id' => '6', 'type' => 'order']);
  DB::table('addresses')->insert([
      'id' => '9','street' => '4577 Orci. Rue','complement' => '','postal_code' => '28429','city' => 'Perpignan','country' => 'France', 'customer_id' => '9', 'type' => 'order']);
  DB::table('addresses')->insert([
      'id' => '10','street' => 'CP 949, 2950 Lorem, Avenue','complement' => '','postal_code' => '50823','city' => 'Quimper','country' => 'France', 'customer_id' => '9', 'type' => 'order']);
  DB::table('addresses')->insert([
      'id' => '11','street' => 'Appartement 411-6489 Integer Avenue','complement' => '','postal_code' => '75091','city' => 'Héroucity-Saint-Cla','country' => 'France', 'customer_id' => '10', 'type' => 'order']);
  DB::table('addresses')->insert([
      'id' => '12','street' => '7328 Massa. Avenue','complement' => '','postal_code' => '10571','city' => 'Limoges','country' => 'France', 'customer_id' => '10', 'type' => 'order']);
  DB::table('addresses')->insert([
      'id' => '13','street' => 'CP 935, 9137 Id, Av.','complement' => '','postal_code' => '86827','city' => 'Saint-Quentin','country' => 'France', 'customer_id' => '15', 'type' => 'order']);
  DB::table('addresses')->insert([
      'id' => '14','street' => '9717 Cras Impasse','complement' => '','postal_code' => '79097','city' => 'Abbecity','country' => 'France', 'customer_id' => '15', 'type' => 'order']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
