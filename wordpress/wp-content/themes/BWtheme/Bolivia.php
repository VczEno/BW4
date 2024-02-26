<?php
/* 
Template Name: Bolivia
*/

get_header();
?>  
    <main class="container pt-3 pb-1 my-2 px-5">
    <div class="hero rounded-1" style="height: 30em; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bolivia6.jpg'); background-size: cover;">
            
        </div>

        <div class="mt-3 mb-2">
            <h1 class="text-center fw-bold">Benvenuti in <?php the_title(); ?></h1>
        </div>

        <p class="py-2">Benvenuti nel vostro viaggio virtuale in <b><?php the_title(); ?></b>, terra di meraviglie naturali e cultura vibrante! Situata al cuore del <b>Sud America</b>, la Bolivia è un paese affascinante ricco di contrasti e tradizioni millenarie. Dai maestosi paesaggi delle Ande alle profondità dell'Amazzonia, passando per le città coloniali e i colorati mercati indigeni. </p>

        <div class="mt-4">
            <div class="row">
                <div class="col-8">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/bolivia.jpg"
                    alt="bolivia"
                    class="img-fluid rounded-4"/>
                </div>
                <div class="col-4">
                    <h4 class="fw-semibold">Altre destinazioni <i class="bi bi-passport"></i></h4>
                    <ul class="destinazioni">
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Giappone</li>
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Marocco</li>
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Nuova Zelanda</li>
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
                        <p>La stagione secca in <?php the_title(); ?> va da maggio ad ottobre, quando <b>le piogge sono limitate e il clima è più stabile</b>. Questo è un ottimo momento per visitare le città coloniali come Sucre e Potosí, nonché per esplorare il famoso Salar de Uyuni, il più grande deserto di sale del mondo. Le temperature durante questo periodo sono generalmente gradevoli e adatte per l'escursionismo e altre attività all'aperto.

                        <br>Se siete interessati a partecipare alle <b>celebrazioni tradizionali boliviane</b>, il periodo migliore per visitare il paese potrebbe essere durante <b>il carnevale di Oruro</b>, che di solito si tiene a febbraio o marzo. Questo evento colorato e festoso offre uno spettacolo unico e coinvolgente della cultura boliviana.

                        <br>Tuttavia, se siete appassionati di<b> birdwatching</b> e desiderate avvistare la fauna selvatica della Bolivia, la stagione delle piogge, che va da novembre ad aprile, potrebbe essere il momento giusto per voi. Durante questo periodo, i paesaggi sono rigogliosi e verdi, e i parchi nazionali come il Madidi offrono ottime opportunità per l'avvistamento di animali selvatici.</p>
                    </div>

                    <!-- contenitore separatore oro -->
                    <div class="d-flex justify-content-around mt-2">
                        <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/separatoreulivo.png"
                        alt="separatore"
                        class="separatore-oro"/>
                    </div>

                </div>
                <div class="col-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/bolivia2.jpg" 
                    alt="bolivia"
                    class="img-fluid rounded-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/bolivia3.jpg" 
                    alt="bolivia"
                    class="img-fluid mt-3 rounded-4">
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="row">
                <h4 class="text-end fw-semibold"><i class="bi bi-map"></i> Informazioni utili</h4>
                <div class="col-4">
                <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/bolivia4.jpg" 
                    class="img-fluid rounded-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/bolivia5.jpg"
                    alt="bolivia"
                    class="img-fluid mt-3 rounded-4">
                </div>

                <div class="col-8 pannello p-3 border border-3 border-light">
                    <p>
                        <b>Documenti: </b> assicuratevi di avere un passaporto valido e verificate i requisiti di visto per il vostro paese di cittadinanza prima di partire.<br>
                        <b>Vaccinazioni: </b> controllate con il vostro medico se sono necessarie vaccinazioni specifiche per la Bolivia, come ad esempio la vaccinazione contro la febbre gialla.<br>
                        <b>Sicurezza: </b> prendete precauzioni standard per la sicurezza dei viaggiatori, come mantenersi informati sulle condizioni attuali del paese e sulle zone da evitare, evitare di mostrare oggetti di valore in pubblico e tenere al sicuro i vostri documenti e denaro.<br>
                        <b>Abbigliamento: </b> portate con voi abbigliamento adatto alle variazioni di temperatura, soprattutto se state visitando regioni montuose.<br>
                        <b>Cultura: </b> rispettate le tradizioni e la cultura locali, evitando comportamenti offensivi o inappropriati. Inoltre, informatevi sulle regole e le usanze locali per evitare di avere problemi durante il vostro viaggio.<br>
                    </p>

                        <p class="fw-bold text-center text-secondary mx-5 border border-2 rounded-2 border-light">Buon viaggio!</p>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <div class="row text-center">
                <div class="col">
                <img style="height: 14em;" src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/bolivia7.jpg" 
                        alt="bolivia"
                        class="img-fluid rounded-4"
                    >
                </div>
                <div class="col">
                <img style="height: 14em;"  src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/bolivia.jpeg" 
                        alt="bolivia"
                        class="img-fluid rounded-4"
                    >
                </div>
                <div class="col">
                <img style="height: 14em;"  src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/bolivia8.jpg" 
                        alt="bolivia8"
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