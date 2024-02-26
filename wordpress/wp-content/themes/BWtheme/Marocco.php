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

        <p class="py-2">Benvenuti nel vostro viaggio virtuale nel <b><?php the_title(); ?></b>, una terra di antiche tradizioni e modernità futuristica. Esplorerete città storiche come <b> Kyoto e metropoli frenetiche come Tokyo </b>, incontrando una cultura vibrante, paesaggi mozzafiato e una gastronomia deliziosa lungo il percorso. Preparatevi per un'avventura indimenticabile che vi porterà attraverso i contrasti affascinanti di questa meravigliosa nazione.</p>

        <div class="mt-4">
            <div class="row">
                <div class="col-8">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/japan2.jpeg"
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
                        <p>Il miglior periodo per visitare il Giappone <b> dipende dalle tue preferenze personali </b> e dalle attività che desideri svolgere durante il tuo viaggio. <br> Tuttavia, molti esperti di viaggi consigliano di visitare il Giappone durante la primavera, in particolare durante <b> la stagione dei ciliegi in fiore (Sakura) </b> che di solito cade tra fine marzo e inizio aprile. <br> Durante questo periodo, i parchi e i giardini sono ricoperti di bellissimi fiori di ciliegio in fiore, creando uno spettacolo mozzafiato. <br> Inoltre, le temperature sono piacevoli e l'atmosfera generale è molto positiva. <br>
                            Se preferisci evitare i fiori di ciliegio, puoi considerare la visita in autunno durante la stagione delle foglie rosse (Koyo) che di solito cade tra ottobre e novembre. <br> Durante questo periodo, <b> i giardini e i parchi </b> si tingono di colori autunnali spettacolari, creando un'atmosfera magica.</p>
                    </div>

                    <!-- contenitore francobolli -->
                    <div class="d-flex justify-content-around mt-2">
                        <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/francobJapan.png"
                        alt="francobolli"
                        class="francobolli-piccoli"/>

                        <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/francobJapan2.png"
                        alt="francobolli"
                        class="francobolli-piccoli"/>

                        <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/francobJapan3.png"
                        alt="francobolli"
                        class="francobolli-piccoli"/>

                        <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/francobJapan4.png"
                        alt="francobolli"
                        class="francobolli-piccoli"/>
                    </div>

                </div>
                <div class="col-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/japan3.jpg" 
                    alt="giappone"
                    class="img-fluid rounded-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/shibuya.jpg" 
                    alt="shibuya"
                    class="img-fluid mt-3 rounded-4">
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="row">
                <h4 class="text-end fw-semibold"><i class="bi bi-map"></i> Informazioni utili</h4>
                <div class="col-4">
                <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/tokyo.jpg" 
                    class="img-fluid rounded-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/tokyo2.jpg"
                    alt=""
                    class="img-fluid mt-3 rounded-4">
                </div>

                <div class="col-8 pannello p-3 border border-3 border-light">
                    <p>
                        <b>Alloggio: </b> dalle tradizionali ryokan (locande) ai moderni hotel. Prenotate in anticipo, specialmente durante eventi o periodi di alta stagione.<br>
                        <b>Trasporti: </b> il sistema ferroviario è eccellente e consente un facile spostamento tra le città. L'acquisto di un Japan Rail Pass può essere conveniente per i viaggiatori che prevedono di esplorare diverse regioni. <br>
                        <b>Ristoranti: </b> Assaggiate la cucina giapponese autentica. Oltre al sushi, provate ramen, tempura, yakitori e kaiseki. Esplorate i mercati alimentari locali per un'esperienza culinaria più autentica. <br>
                        <b>Attività: </b> visitate i templi storici a Kyoto, immergetevi nella cultura pop a Tokyo, fate escursioni sul Monte Fuji o rilassatevi nelle sorgenti termali (onsen). Partecipate a festival locali per sperimentare le tradizioni giapponesi. <br>
                        <b>Lingua: </b> L'inglese potrebbe non essere ampiamente parlato fuori delle principali città, quindi imparare alcune frasi di base in giapponese può essere utile. <br>
                        <b>Moneta: </b> La valuta è lo yen. Preparatevi a utilizzare principalmente contanti, poiché alcune piccole imprese potrebbero non accettare carte di credito straniere. <br>
                        </p>

                        <p class="fw-bold text-center text-secondary mx-5 border border-2 rounded-2 border-light">Buon viaggio!</p>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <div class="row">
                <div class="col">
                <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/japan4.jpeg" 
                        alt="templi"
                        class="img-fluid rounded-4"
                    >
                </div>
                <div class="col">
                <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/japan5.jpg" 
                        alt="japan"
                        class="img-fluid rounded-4"
                    >
                </div>
                <div class="col">
                <img style="height: 12.5em;" src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/japan6.jpeg" 
                        alt="casa giapponese"
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