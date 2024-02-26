<?php
/* 
Template Name: NuovaZelanda
*/

get_header();
?>  
    <main class="container pt-3 pb-1 my-2 px-5">
    <div class="hero rounded-1" style="height: 30em; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nuovazelandahero.jpg'); background-size: cover;">
            
        </div>

        <div class="mt-3 mb-2">
            <h1 class="text-center fw-bold">Benvenuti in <?php the_title(); ?></h1>
        </div>

        <p class="py-2">Benvenuti nel vostro viaggio virtuale in <b><?php the_title(); ?></b>, terra di meraviglie naturali straordinarie e culture vibranti. Questo piccolo paese insulare situato nell'<b>Oceano Pacifico</b> è famoso per le sue spettacolari paesaggi che vanno dalle imponenti montagne alle lussureggianti foreste pluviali, dalle spiagge dorate ai geyser fumanti.

        <br>La Nuova Zelanda è conosciuta anche per la sua ricca <b>storia Maori</b>, che si manifesta attraverso tradizioni ancestrali, danze tipiche e rituali spirituali .</p>

        <div class="mt-4">
            <div class="row">
                <div class="col-8">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/nuovazelanda.jpg"
                    alt="nuovazelando"
                    class="img-fluid rounded-4"/>
                </div>
                <div class="col-4">
                    <h4 class="fw-semibold">Altre destinazioni <i class="bi bi-passport"></i></h4>
                    <ul class="destinazioni">
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Giappone</li>
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Marocco</li>
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Bolivia</li>
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Inghilterra</li>
                    </ul>
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/travel.png"
                        alt="francobolli"
                        class="img-fluid rounded-4 francobolli-medi"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 sezione-periodo-migliore">
            <div class="row">
                <h2 class="fw-bold">MIGLIOR PERIODO PER VIAGGIARE <i class="bi bi-luggage"></i></h2>
                <div class="col-8">
                    <div class="pannello p-3 border border-3 border-light">
                        <p>Il periodo migliore per visitare la <?php the_title(); ?> dipende dalle vostre <b>preferenze personali</b> e dalle attività che desiderate svolgere durante il viaggio. Tuttavia, ci sono alcune considerazioni da tenere presente quando si sceglie il momento ideale per esplorare questo splendido paese.

                        <br>La <?php the_title(); ?>  ha un <b>clima temperato</b> che rende possibile visitarla in qualsiasi periodo dell'anno, ma le stagioni sono invertite rispetto all'emisfero settentrionale. Quindi, se siete abituati alle stagioni europee, ricordatevi che <b>l'estate in Nuova Zelanda va da dicembre a febbraio</b>, l'autunno da marzo a maggio, l'inverno da giugno ad agosto e la primavera da settembre a novembre.</p>
                    </div>

                    <!-- contenitore separatore oro -->
                    <div class="d-flex justify-content-around mt-2">
                        <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/separatoreulivo.png"
                        alt="separatore"
                        class="separatore-oro"/>
                    </div>

                </div>
                <div class="col-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/nuovazelanda2.jpg" 
                    alt="nuova zelanda"
                    class="img-fluid rounded-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/nuovazelanda3.jpg" 
                    alt="nuova zelanda"
                    class="img-fluid mt-3 rounded-4">
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="row">
                <h4 class="text-end fw-semibold"><i class="bi bi-map"></i> Informazioni utili</h4>
                <div class="col-4">
                <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/nuovazelanda4.jpg" 
                    class="img-fluid rounded-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/nuovazelanda5.jpg"
                    alt="nuova zelanda"
                    class="img-fluid mt-3 rounded-4">
                </div>

                <div class="col-8 pannello p-3 border border-3 border-light">
                    <p>
                        <b>Cibo e vino: </b> assaggiate la deliziosa cucina locale e i rinomati vini neozelandesi. Approfittate dei mercati degli agricoltori e dei ristoranti locali per assaporare ingredienti freschi e piatti tradizionali.<br>
                        <b>Trasporti: </b> noleggiare un'auto o un camper è il modo migliore per esplorare specialmente sulle strade di montagna<br>
                        <b>Sicurezza: </b> la Nuova Zelanda è considerata un paese sicuro per i turisti, ma è sempre consigliabile tenere d'occhio i propri effetti personali e avere cure precauzionali. <br>
                        <b>Abbigliamento: </b> è consigliabile vestirsi a strati e avere sempre con sé un impermeabile. Portate con voi anche scarpe comode per affrontare le escursioni nei parchi nazionali e lunghe passeggiate.<br>
                        <b>Cultura: </b> la Nuova Zelanda vanta un'ecosistema unico al mondo e una ricca storia Maori. Rispettate l'ambiente naturale e le tradizioni locali, e cercate di imparare qualcosa di più sulla cultura Maori. <br>
                    </p>

                        <p class="fw-bold text-center text-secondary mx-5 border border-2 rounded-2 border-light">Buon viaggio!</p>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <div class="row text-center">
                <div class="col">
                <img style="height: 14em;" src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/nuovazelanda6.jpg" 
                        alt="nuova zelanda"
                        class="img-fluid rounded-4"
                    >
                </div>
                <div class="col">
                <img style="height: 14em;"  src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/nuovazelanda7.jpg" 
                        alt="nuova zelanda"
                        class="img-fluid rounded-4"
                    >
                </div>
                <div class="col">
                <img style="height: 14em;"  src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/nuovazelanda8.jpg" 
                        alt="nuova zelanda"
                        class="img-fluid rounded-4"
                    >
                </div>
            </div>
        </div>

        <div class="link-vai-blog text-center my-5">
            <p>Vuoi saperne di più sulla cultura di questo paese?</p>
            <button class="btn btn-secondary fw-semibold">Visita il blog</button>
        </div>

    </main>

        <?php get_footer();?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>