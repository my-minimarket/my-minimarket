<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id_product');
            $table->string('name', 50);
            $table->text('description')->nullable();
            $table->decimal('price', 6, 2);
            $table->decimal('weight', 6, 3)->nullable();
            $table->decimal('stock', 6, 2)->nullable();
            $table->string('picture', 255)->nullable();
            $table->timestamps();
        });

//        Schema::table('products', function (Blueprint $table) {
//            $table->foreign('PRODUCTS_id_product')->references('id_product')->on('products');
//        });

        DB::table('products')->insert([
            'name' => 'Pocky Fraise Heartful',
            'description' => 'Pocky à la fraise avec de petits morceaux de fraise incrustés dans le chocolat et bâtonnets en forme de coeur. Nom en japonais: "Pocky Strawberry Tsubutsubu Ichigo Heartful".',
            'price' => '1.62',
            'weight' => '0.750',
            'stock' => NULL,
            'picture' => '/pictures/products/pocky-heartful.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Pocky Poudre de cacao',
            'description' => 'Ces Pocky édition hiver sont une totale réussite et ils sont de retour cette année encore. Du cacao en poudre recouvre une généreuse couche de chocolat crémeux sur un bâtonnet épais et léger. On ressent à la fois la puissance du cacao et la douceur du chocolat au lait.',
            'price' => '1.75',
            'weight' => '0.830',
            'stock' => NULL,
            'picture' => '/pictures/products/pocky-cacao.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Shigekix Super – Cola',
            'description' => 'Bonbons à mâcher super acides plus gros que les Shigekix ordinaires. En japonais "Shigekix" est un mélange du mot "excitation" et de "coup de pied", autant dire que c\'est une friandise qui réveille !',
            'price' => '1.11',
            'weight' => '0.250',
            'stock' => NULL,
            'picture' => '/pictures/products/shigekix-super-cola.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Amazaké instantané',
            'description' => 'L\'amazaké est une boisson traditionnelle à base de riz fermenté, très légèrement alcoolisée (moins de 1%). Sucré, l\'amazaké a un aspect naturellement laiteux. Chaque paquet contient 4 sachets d\'Amazaké instantané.',
            'price' => '3.48',
            'weight' => '0.620',
            'stock' => NULL,
            'picture' => '/pictures/products/amazake-instantane.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Fanta - Yogurt Banane',
            'description' => 'Le Fanta au yogurt banane est maintenant disponible au Japon. Enrichi en fibres et vitamine B6.',
            'price' => '1.32',
            'weight' => '0.540',
            'stock' => NULL,
            'picture' => '/pictures/products/fanta-yogurt-banane.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Ramune-kun',
            'description' => 'Boisson gazeuse sans alcool, l\'un des soda les plus connu et les plus populaire au Japon.',
            'price' => '0.93',
            'weight' => '0.380',
            'stock' => NULL,
            'picture' => '/pictures/products/ramune-kun.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'I LOHAS – Fraise',
            'description' => 'La fameuse marque d\'eau I LOHAS aromatisée à la fraise!',
            'price' => '1.14',
            'weight' => '0.385',
            'stock' => NULL,
            'picture' => '/pictures/products/i-lohas-fraise.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Kirby Jelly Drink - Raisin Blanc',
            'description' => 'Kirby Jelly Sparkling, un soda à secouer une dizaine de fois avant de le boire pour bien remuer les petits dés de gelée qui se trouve dans le fond de la canette!  Que la force du Kirby soit avec vous!',
            'price' => '1.19',
            'weight' => '0.297',
            'stock' => NULL,
            'picture' => '/pictures/products/kirby-drink-raisinblanc.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Drops – Zombear',
            'description' => 'Bonbons à sucer qui colorent la langue en bleu. Édition Zombear, l\'ours zombie.',
            'price' => '4.62',
            'weight' => '0.140',
            'stock' => NULL,
            'picture' => '/pictures/products/drops-zombear.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Pureral – Fraise',
            'description' => 'Bonbons au vrai goût de fruits avec un coeur fondant. Ici goût fraise.',
            'price' => '1.25',
            'weight' => '0.520',
            'stock' => NULL,
            'picture' => '/pictures/products/pureral-fraise.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Bonbons sifflants – Ramune',
            'description' => 'Les bonbons qui font le bonheur des enfants au Japon. Lorsque l\'on souffle à travers les "Fue Ramune" se transforment en sifflet. Chaque paquet contient 8 bonbons et un petit jouet.',
            'price' => '0.60',
            'weight' => '0.300',
            'stock' => NULL,
            'picture' => '/pictures/products/bonbons-sifflants-ramune.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Fettuccine Collagene +  Grenade',
            'description' => 'Bonbons acidulés enrichis en collagène, en vitamines C avec un vrai goût de fruit. Ici au parfum grenade.',
            'price' => '1.16',
            'weight' => '0.550',
            'stock' => NULL,
            'picture' => '/pictures/products/fettucine-colagene-grenade.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Kit Kat mini - Cheesecake Fraise',
            'description' => 'Kit Kat mini, série "Mainichi no zeitaku", goût cheesecake à la fraise.',
            'price' => '3.51',
            'weight' => '0.120',
            'stock' => NULL,
            'picture' => '/pictures/products/kitkat-cheesecake-fraise.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Koala no machi - Chocolat chaud',
            'description' => 'Adorables petits biscuits fourrés extrêmement célèbres au Japon. Edition limitée avec un biscuit au chocolat fourré de crème au lait.',
            'price' => '1.29',
            'weight' => '0.650',
            'stock' => NULL,
            'picture' => '/pictures/products/koala-chocolat-chaud.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Kit Kat Mont Fuji',
            'description' => 'Kit Kat mini édition spéciale Mont Fuji dans une magnifique boîte à conserver précieusement. Neuf portions individuelles au goût CheeseCake à la fraise.',
            'price' => '12.01',
            'weight' => '0.150',
            'stock' => NULL,
            'picture' => '/pictures/products/kitkat-mont-fuji.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Nouilles Chicken Ramen',
            'description' => 'Nouilles ramen instantanées sans accompagnement au goût poulet prêtes en 1 minute. Elles s\'accompagnent généralement d\'un oeuf cru et d\'un peu de ciboule.',
            'price' => '1.10',
            'weight' => '0.920',
            'stock' => NULL,
            'picture' => '/pictures/products/nouilles-chicken-ramen.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Zomramen – Salée',
            'description' => 'Zombie Ramen !? Nouilles de couleur bleue vendues uniquement sur l\'île d\'Hokkaido au nord du Japon.',
            'price' => '3.96',
            'weight' => '0.137',
            'stock' => NULL,
            'picture' => '/pictures/products/zomramen-salee.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Ramen Pokemon - Fruit de Mer',
            'description' => 'Coupe de nouilles instantanées Pokemon. Goût fruits de mer. Un sticker à collectionner à l\'intérieur.',
            'price' => '1.32',
            'weight' => '0.680',
            'stock' => NULL,
            'picture' => '/pictures/products/ramen-pokemon-fruitdemer.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'UFO Yakisoba',
            'description' => 'Nouilles soba instantanées de chez Nissin.',
            'price' => '1.45',
            'weight' => '0.155',
            'stock' => NULL,
            'picture' => '/pictures/products/ufo-yakisoba.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Big Katsu',
            'description' => 'Snack japonais légèrement salé, recouvert de chapelure et de sauce pour reproduire à l\'identique le goût et la sensation du tonkatsu (porc pané).',
            'price' => '0.31',
            'weight' => '0.280',
            'stock' => NULL,
            'picture' => '/pictures/products/bigkatsu.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Umaibo - Teriyaki Burger',
            'description' => 'Umaibo ou "délicieux bâton" est un snack de maïs soufflé disponible en de namebreuses saveurs et très populaire au Japon, notamment auprès des enfants. En vente depuis 1979.',
            'price' => '0.14',
            'weight' => '0.100',
            'stock' => NULL,
            'picture' => '/pictures/products/umaibo-teriyaki-burger.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'WONKA NERDS RAINBOW MINI BONBONS MUSTICOLORES',
            'description' => 'Voici une gourmandise américaine sortie tout droit de l\'usine de Willy Wonka, le patron du film Charlie et la Chocolaterie. Les Nerds sont de mini bonbons croquants acidulés au bon goût de fruits, de toutes les couleurs de l\'arc en ciel. Les voici ici dans la version King Size, c\'est à dire une grande boîte familiale. Recommandé pour les petits et moins petits gourmand !',
            'price' => '2.10',
            'weight' => '0.142',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'REESE\'S BIG CUP CHOCOLAT BEURRE DE CACAHUETE',
            'description' => 'Dans la famille des chocolats Reese\'s Peanut Butter Cups, directement importé d\'Amérique, voici le plus gros : la version King size ! Le mélange onctueux du chocolat avec le subtil goût salé du beurre de cacahuète est à essayer absolument. Reservés aux plus grands fan de gourmandises US !',
            'price' => '1.67',
            'weight' => '0.039',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'FIJI WATER / EAU ARTESIENNE NATURELLE',
            'description' => 'L\'eau artésienne naturelle FIJI WATER a tout simplement le goût du paradis ! Cette eau très haut de gamme est servie dans les meilleurs restaurants du monde. Elle est issue d\'une nappe phréatique située dans une île au nord des Fiji, au milieu du Pacifique. La bouteille est un objet d\'art en elle-même et l\'eau est délicieusement pure.',
            'price' => '2.89',
            'weight' => '0.500',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'BOB L\'EPONGE KRABY PATTIES COLORS BONBONS',
            'description' => 'Voici les hamburgers Bob l\'éponge aux bonbons gélifiés multi-colores au goût de cerise, raisin, framboise bleue et pomme verte. Dans le dessin animé, les Krabby Patties sont des hamburgers au crabe connus sous le name de "sandwich au paté de crabe", la fameuse spécialité du cuistot Bob l\'éponge ! Boîte contenant 8 bonbons-burgers Crabby Patties en emballage individuel.',
            'price' => '2.72',
            'weight' => '0.072',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'SPIDER-MAN BATONNETS DE BONBONS & TATOUAGE',
            'description' => 'Aux Etats-Unis, ces candy sticks plaisent beaucoup aux enfants, et ce depuis plusieurs générations ! Ce sont des bâtonnets de bonbons au sucre blanc à croquer. Look out, here comes the Spider-man ! Chaque paquet met en scène Spider-Man et contient 1 tatouage décalcomanie Spider-Man. Dessins variés.',
            'price' => '1.19',
            'weight' => '0.028',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'PAC-MAN ARCADE BOITE DE BONBONS',
            'description' => 'Retrouve la mythique borne d’arcade Pac-Man des années 80\'s remplie de bonbons PacMan. Comme dans le jeu vidéo PacMan, collectionne ces bonbons pour gagner la partie ! Une boîte Pac-Man Arcade contient environ 30 bonbons aromatisés à la fraise à la fois sucrés et acidulés.',
            'price' => '4.29',
            'weight' => '0.017',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'MARVEL CANDY STICKS BONBONS & TATOUAGE',
            'description' => 'Les bonbons candy sticks font partie des meilleurs souvenirs d\'enfance de namebreux Américains. Ils ressemblent aux batôns de craie blanche utilisés pour écrire sur les tableaux noirs. Avec ces candy sticks Marvel, tes super héros X-Men, Spider-Man et l\'Incroyable Hulk retournent sur les bancs de l\'école, et échangent leurs tatouages auto-collants à la récré ! Boîte et tattoo avec personnage aléatoire.',
            'price' => '1.14',
            'weight' => '0.015',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'BAGUETTE MAGIQUE EN CHOCOLAT HARRY POTTER',
            'description' => ' Voici la réplique parfaite de la baguette d\'Harry Potter ! Celle-ci n\'est pas faite en houx et ne contient pas une plume de phénix à l\'intérieur puisque cette baguette est en chocolat ! A offrir à un·e petit·e sorcier·e en herbe ou à garder pour soi pour devenir en Auror hors-pair et pour chasser les méchants ! La baguette en chocolat mesure 24cm. Le coffret contient également une feuille de sortilèges.',
            'price' => '12.69',
            'weight' => '0.042',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'JELLY BELLY BEANS HARRY POTTER BERTIE BOTT’S BOITE',
            'description' => 'Si vous connaissez les dragées surprises de Bertie Crochue, vous connaissez bien le principe de ce paquet de bonbons&nbsp;Jelly Belly Bertie Bott\'s sorti tout droit de la saga Harry Potter. Pour ce qui ne connaissent pas le principe, le voici : tu pioches dans ton sachet de Jelly Belly Harry Potter parmi un grand namebre de saveurs "classiques" comme des Jelly Belly goût banane ou encore Jelly Belly Tutti Frutti, tu peux aussi piocher des bonbons aux goûts un peu plus magiques !! Et c\'est la que les Jelly Belly Bertie Bott\'s sont différents des autres Jelly Belly avec des goûts comme oeuf pourri, saucisse, ou pire comme vomi... Alors laisse toi entrainer dans le monde merveilleux du plus connu des magicieux pour le meilleur et pour le pire ;)',
            'price' => '3.45',
            'weight' => '0.035',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'CEREALES LUCKY CHARMS',
            'description' => 'Les Lucky Charms sont les premières céréales américaines à incorporer du marshmallow dans leur recette, ce qui les rend terriblement délicieuses ! Ce sont les céréales préférées des enfants américains avec leurs formes d\'étoile, de Lune ou de trèfles à quatre feuilles. Elles existent depuis 1964 aux USA et leur popularité n\'a jamais disparu, pas étonnant que de namebreux adultes les consomment encore! Lucky Charms, des céréales gourmandes à essayer absolument !',
            'price' => '6.54',
            'weight' => '0.422',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'KELLOG’S CEREALES FROOT LOOPS',
            'description' => 'Les céréales Frootloops de Sam le Toucan sont un incontournable Américain! Un céréales des USA en forme d\'anneau ronde et colorée comme un donut qui ravit les enfants et les grands. Au petit-déjeuner, ils raffoleront de ces céréales réalisées à partir de différentes farines (maïs, blé et avoine) et d\'arômes de fruits. Si tu veux t\'assurer d\'un petit-déjeuner délicieux pour toute la famille, fais confiance au toucan des Froot Loops de Kellogg\'s !',
            'price' => '5.15',
            'weight' => '0.345',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'COCA COLA CHERRY SODA A LA CERISE',
            'description' => 'Le légendaire Coca-Cola se décline désormais en une version à la cerise avec le Cherry Coke venue tout droit des USA. Cette touche fruitée ajoute encore plus au plaisir d\'un bon Coca-Cola, certains le préfèrent même à l\'original ! Toi aussi fais l\'expérience Coca-Cola Cerise!',
            'price' => '1.69',
            'weight' => '0.355',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'KOOL-AID BOISSON EN POUDRE NON SUCREE RAISIN',
            'description' => 'Les boissons au raisin sont très populaires aux USA. Kool Aid Grape est une boisson en poudre qui a su capturer le goût du jus des raisins Concord, le cépage bleu-noir le plus cultivé dans l\'est des États-Unis. 2 litres par sachet Kool-Aid Raisin à sucrer à ta convenance.',
            'price' => '1.09',
            'weight' => '0.004',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'MUG ROOT BEER SODA',
            'description' => 'MUG ROOT BEER est une boisson américaine à la fois gazeuse et mousseuse d\'une couleur ambrée, SANS ALCOOL et sans caféine, préparée à partir de plantes. Ne sois pas impressionné par ce molosse américain Mug Root Beer, car derrière son apparence redoutable, se cache un cœur tendre. Soda à consommer bien frais.',
            'price' => '1.49',
            'weight' => '0.355',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'CELESTIAL SEASONNINGS DIRTY CHAI AU CAFE',
            'description' => 'Le Chai Tea Noix de Coco de Celestial Seasonings est une version décafféinée du fameux thé Chai d\'Inde. C\'est du thé noir sans théine agrémenté d\'épices chai (cannelle, gingembre, cardamome, clous de girofle, noix de muscade) et de noix de coco. Cette infusion Celestial Chai Tea Coconut t\'amène à la découverte des contrées lointaines. 20 sachets de tisane - Ne contient pas de théine.',
            'price' => '3.69',
            'weight' => '0.069',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'CHEETOS CRUNCHY JALAPENO FROMAGE',
            'description' => 'Les biscuits apéritifs soufflés Frito-Lay Cheetos Jalapeño au fromage et au piment vert croustillent sous la dent et brûlent la langue ! Grand sachet idéal pour un apéro "hot" entre copains. So good and addictive!',
            'price' => '3.83',
            'weight' => '0.226',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'JACK LINK\'S BEEF JERKY VIANDE SÉCHÉE TERIYAKI',
            'description' => 'Jack Links Teriyaki, c\'est une rencontre culinaire entre l\'Orient et l\'Occident. La marinade japonaise Teriyaki subtilement sucrée rend la viande de bœuf américaine Jack Links tendre et savoureuse avec un effet laqué. Les morceaux de viande séchée Beef Jerky Jack Links Teriyaki, un snack succulent !',
            'price' => '2.89',
            'weight' => '0.025',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'KRAFT CHEEZ WHIZ / FROMAGE POUR TREMPER',
            'description' => 'Qu\'est-ce que les frites, les chips, les brocolis et les pommes de terre ont en commun ? Ils sont tous meilleurs accompagnés de fromage à tartiner CHEEZ WIZ de Kraft ! Ce délicieux fromage pour tremper&nbsp;est composé de cheddar : goût prononcé assuré !',
            'price' => '9.29',
            'weight' => '0.425',
            'stock' => NULL,
            'picture' => NULL,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Fraises Tagada',
            'description' => 'Ah la fraise Tagada ! Sa seule évocation est gourmande, sa seule image est appétissante ! Cette petite boule aérée couverte de sucre fin coloré séduit les grands et les petits gourmands depuis près de 50 ans. C’est en effet en 1969 qu’elle a vu le jour.',
            'price' => '9.82',
            'weight' => '1.060',
            'stock' => NULL,
            'picture' => NULL,
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
//        Schema::table('products', function(Blueprint $table) {
//            $table->dropForeign('PRODUCTS_id_product');
//        });
//
//        Schema::table('products', function(Blueprint $table) {
//            $table->dropColumn('PRODUCTS_id_product');
//        });

        Schema::dropIfExists('products');
    }
}
