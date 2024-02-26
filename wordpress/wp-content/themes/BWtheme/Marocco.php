<?php
/* 
Template Name: Marocco
*/

get_header();
?>  
    <main class="container pt-3 pb-1 my-2 px-5">
    <div class="hero rounded-1" style="height: 30em; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/maroccohero.jpg'); background-size: cover;">
            
        </div>

        <div class="mt-3 mb-2">
            <h1 class="text-center fw-bold">Benvenuti in <?php the_title(); ?></h1>
        </div>

        <p class="py-2">Benvenuti nel vostro viaggio virtuale in <b><?php the_title(); ?></b>, terra di contrasti e meraviglie senza fine. <br> Situato all'estremità <b>nord-occidentale dell'Africa</b>, questo affascinante paese offre ai suoi visitatori un mix unico di cultura, storia e natura. </p>

        <div class="mt-4">
            <div class="row">
                <div class="col-8">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/marocco1.jpg"
                    alt="japan"
                    class="img-fluid rounded-4"/>
                </div>
                <div class="col-4">
                    <h4 class="fw-semibold">Altre destinazioni <i class="bi bi-passport"></i></h4>
                    <ul class="destinazioni">
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Giappone</li>
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Nuova Zelanda</li>
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
                        <p><b>In primavera</b>, che va da marzo a maggio, il clima è mite e piacevole, rendendo perfette le visite alle città storiche come <b>Marrakech, Fes e Casablanca</b>. I giardini sono in fiore e i colorati souk sono pieni di vita. In autunno, da settembre a novembre, le temperature sono ancora piacevoli e si evita la calura estiva.

                        <br>Evitare la visita durante i mesi estivi, <b>da giugno ad agosto</b>, quando le temperature possono raggiungere livelli molto alti, soprattutto nelle regioni interne come il deserto del Sahara. Inoltre, molti marocchini scelgono di viaggiare durante i mesi estivi per le vacanze, rendendo le principali città e le attrazioni turistiche molto affollate.

                        <br> Quindi, se cercate il periodo migliore per visitare il Marocco, la <b>primavera e l'autunno sono le stagioni ideali</b> per godere di condizioni climatiche favorevoli e evitare le folle dei turisti.</p>
                    </div>

                    <!-- contenitore separatore oro -->
                    <div class="d-flex justify-content-around mt-2">
                        <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/separatoreoro.png"
                        alt="separatore"
                        class="separatore-oro"/>
                    </div>

                </div>
                <div class="col-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/marocco2.png" 
                    alt="giappone"
                    class="img-fluid rounded-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/marocco3.jpg" 
                    alt="shibuya"
                    class="img-fluid mt-3 rounded-4">
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="row">
                <h4 class="text-end fw-semibold"><i class="bi bi-map"></i> Informazioni utili</h4>
                <div class="col-4">
                <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/marocco7.jpg" 
                    class="img-fluid rounded-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/marocco8.jpg"
                    alt=""
                    class="img-fluid mt-3 rounded-4">
                </div>

                <div class="col-8 pannello p-3 border border-3 border-light">
                    <p>
                        <b>Cibo: </b> assaggiate la variegata street food marocchina, ma assicuratevi che sia fresca e cucinata al momento per evitare problemi di salute.<br>
                        <b>Trasporti: </b> prima di salire su un taxi, concordate il prezzo o assicuratevi che il tassimetro sia acceso per evitare spiacevoli sorprese alla fine del tragitto.<br>
                        <b>Sicurezza: </b> prendete precauzioni contro furti e truffe, specialmente in luoghi affollati e turistici, e tenete d'occhio i vostri effetti personali. <br>
                        <b>Abbigliamento: </b> vestitevi in modo modesto e rispettoso, soprattutto nelle aree più tradizionali e religiose, per mostrare rispetto per la cultura locale.<br>
                        <b>Navigazione: </b> utilizzate un GPS o una mappa offline per navigare nei mercati e nelle strade labirintiche delle città, facilitando gli spostamenti. <br>
                        <b>Taxi: </b> concordate il prezzo o assicuratevi che il tassimetro sia acceso per evitare spiacevoli sorprese alla fine del tragitto. <br>
                    </p>

                        <p class="fw-bold text-center text-secondary mx-5 border border-2 rounded-2 border-light">Buon viaggio!</p>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <div class="row text-center">
                <div class="col">
                <img style="height: 14em;" src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/marocco4.jpg" 
                        alt="marocco"
                        class="img-fluid rounded-4"
                    >
                </div>
                <div class="col">
                <img style="height: 14em;"  src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/marocco5.jpg" 
                        alt="marocco"
                        class="img-fluid rounded-4"
                    >
                </div>
                <div class="col">
                <img style="height: 14em;"  src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/marocco6.jpg" 
                        alt="marocco"
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