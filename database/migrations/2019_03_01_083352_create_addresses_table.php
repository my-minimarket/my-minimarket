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
            $table->increments('id');
            $table->string('street',50);
            $table->string('complement', 50);
            $table->string('postal_code', 10);
            $table->string('city', 20);
            $table->string('country', 20);
            $table->timestamps();
        });

        DB::table('addresses')->insert([
            'id' => '1','street' => '6003 Lacinia. Route','complement' => '','postal_code' => '34515','city' => 'Moulins','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '2','street' => 'CP 873, 4607 Enim. Avenue','complement' => '','postal_code' => '76164','city' => 'Carcassonne','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '3','street' => '3028 Ut Route','complement' => '','postal_code' => '95176','city' => 'Limoges','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '4','street' => 'CP 117, 622 Suspendisse Impasse','complement' => '','postal_code' => '03472','city' => 'Nice','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '5','street' => 'CP 371, 5571 Diam Impasse','complement' => '','postal_code' => '76765','city' => 'Périgueux','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '6','street' => 'Appartement 277-7185 Dis Avenue','complement' => '','postal_code' => '35159','city' => 'Lorient','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '7','street' => 'Appartement 960-1474 Lacus Impasse','complement' => '','postal_code' => '68433','city' => 'Strasbourg','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '8','street' => 'CP 903, 9007 Iaculis, Rue','complement' => '','postal_code' => '04570','city' => 'Compiègne','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '9','street' => '4577 Orci. Rue','complement' => '','postal_code' => '28429','city' => 'Perpignan','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '10','street' => 'CP 949, 2950 Lorem, Avenue','complement' => '','postal_code' => '50823','city' => 'Quimper','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '11','street' => 'Appartement 411-6489 Integer Avenue','complement' => '','postal_code' => '75091','city' => 'Héroucity-Saint-Cla','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '12','street' => '7328 Massa. Avenue','complement' => '','postal_code' => '10571','city' => 'Limoges','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '13','street' => 'CP 935, 9137 Id, Av.','complement' => '','postal_code' => '86827','city' => 'Saint-Quentin','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '14','street' => '9717 Cras Impasse','complement' => '','postal_code' => '79097','city' => 'Abbecity','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '15','street' => 'Appartement 276-7621 Sem. Route','complement' => '','postal_code' => '45696','city' => 'Vernon','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '16','street' => '5073 Mollis. Ave','complement' => '','postal_code' => '04399','city' => 'Saint-Brieuc','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '17','street' => '526-6573 Eu, Av.','complement' => '','postal_code' => '89714','city' => 'Mérignac','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '18','street' => 'CP 799, 2342 Netus Chemin','complement' => '','postal_code' => '05557','city' => 'Ajaccio','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '19','street' => '5460 Sed Ave','complement' => '','postal_code' => '90616','city' => 'Dieppe','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '20','street' => 'Appartement 716-2209 Lectus, Avenue','complement' => '','postal_code' => '37033','city' => 'Moulins','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '21','street' => 'CP 763, 2244 Dignissim Rd.','complement' => '','postal_code' => '34579','city' => 'Strasbourg','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '22','street' => 'Appartement 207-5094 Cum Avenue','complement' => '','postal_code' => '60801','city' => 'Angoulême','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '23','street' => 'Appartement 610-7461 Arcu. Impasse','complement' => '','postal_code' => '52788','city' => 'Lunel','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '24','street' => 'Appartement 148-5060 Duis Avenue','complement' => '','postal_code' => '40800','city' => 'Créteil','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '25','street' => '1476 Mattis Route','complement' => '','postal_code' => '58819','city' => 'Limoges','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '26','street' => 'Appartement 126-3398 A Rd.','complement' => '','postal_code' => '90398','city' => 'Moulins','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '27','street' => 'Appartement 405-2134 Sit Rue','complement' => '','postal_code' => '86266','city' => 'Salon-de-Provence','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '28','street' => 'CP 292, 1829 Quisque Route','complement' => '','postal_code' => '32358','city' => 'Brest','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '29','street' => '7095 Ultrices. Rd.','complement' => '','postal_code' => '84537','city' => 'Istres','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '30','street' => 'CP 625, 9667 Facilisis Impasse','complement' => '','postal_code' => '67078','city' => 'Clermont-Ferrand','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '31','street' => 'CP 557, 5390 Eget Ave','complement' => '','postal_code' => '90942','city' => 'Bourges','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '32','street' => 'CP 322, 2865 Libero Route','complement' => '','postal_code' => '67796','city' => 'Saint-Louis','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '33','street' => 'Appartement 347-4276 Nec Ave','complement' => '','postal_code' => '14044','city' => 'Limoges','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '34','street' => '346-1921 Ultrices Ave','complement' => '','postal_code' => '44247','city' => 'Belfort','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '35','street' => '1123 Neque Avenue','complement' => '','postal_code' => '41891','city' => 'Saintes','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '36','street' => '6490 Egestas. Ave','complement' => '','postal_code' => '95470','city' => 'Évreux','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '37','street' => '9078 In Route','complement' => '','postal_code' => '78609','city' => 'Saint-Lô','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '38','street' => 'CP 492, 2920 Nibh. Route','complement' => '','postal_code' => '13654','city' => 'Saint-Dié-des-Vosges','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '39','street' => '232-8470 Molestie Avenue','complement' => '','postal_code' => '77382','city' => 'Illkirch-Graffenstad','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '40','street' => 'CP 330, 3671 Posuere Route','complement' => '','postal_code' => '00181','city' => 'Saint-Nazaire','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '41','street' => 'CP 798, 9051 Sed, Ave','complement' => '','postal_code' => '76814','city' => 'Dreux','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '42','street' => 'CP 121, 4571 Magna. Avenue','complement' => '','postal_code' => '02557','city' => 'Cherbourg-Octecity','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '43','street' => '537-4522 Nec Ave','complement' => '','postal_code' => '93547','city' => 'Aix-en-Provence','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '44','street' => '232-3214 Iaculis Av.','complement' => '','postal_code' => '80360','city' => 'Limoges','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '45','street' => 'CP 459, 4166 Placerat Rd.','complement' => '','postal_code' => '94472','city' => 'Reims','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '46','street' => '1700 Vel Ave','complement' => '','postal_code' => '54418','city' => 'Saint-Dizier','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '47','street' => '801-9485 Nisi Route','complement' => '','postal_code' => '86920','city' => 'Alès','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '48','street' => '2435 Eu Rue','complement' => '','postal_code' => '13811','city' => 'Vitry-sur-Seine','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '49','street' => 'CP 953, 3072 Ut, Rd.','complement' => '','postal_code' => '84900','city' => 'Le Puy-en-Velay','country' => 'France']);
  DB::table('addresses')->insert([
      'id' => '50','street' => 'Appartement 644-1775 Lorem Route','complement' => '','postal_code' => '18971','city' => 'Wattrelos','country' => 'France']);
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
