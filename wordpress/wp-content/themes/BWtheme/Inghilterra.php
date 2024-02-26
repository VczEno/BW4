<?php
/* 
Template Name: Inghilterra
*/

get_header();
?>  
    <main class="container pt-3 pb-1 my-2 px-5">
    <div class="hero rounded-1" style="height: 30em; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/inghilterrahero.jpg'); background-size: cover;">
            
        </div>

        <div class="mt-3 mb-2">
            <h1 class="text-center fw-bold">Benvenuti in <?php the_title(); ?></h1>
        </div>

        <p class="py-2">Benvenuti nel vostro viaggio virtuale in <b><?php the_title(); ?></b>, terra di antiche tradizioni, <b>suggestivi paesaggi e cultura vibrante</b>. Questo affascinante paese, situato nell'<b>Europa occidentale</b>, è rinomato per la sua storia ricca di eventi, i suoi monumenti iconici e la sua gente accogliente. <br> Dalle maestose dimore storiche ai moderni grattacieli di Londra, l'Inghilterra offre una varietà di esperienze uniche che conquistano i visitatori di tutto il mondo. Scoprite con noi le meraviglie di questo straordinario paese e lasciatevi incantare dalla magia dell'Inghilterra.</p>

        <div class="mt-4">
            <div class="row">
                <div class="col-8">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/inghilterra1.jpg"
                    alt="inghilterra"
                    class="img-fluid rounded-4"/>
                </div>
                <div class="col-4">
                    <h4 class="fw-semibold">Altre destinazioni <i class="bi bi-passport"></i></h4>
                    <ul class="destinazioni">
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Giappone</li>
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Nuova Zelanda</li>
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Bolivia</li>
                        <li class="destinazioni-li"><i class="bi bi-geo-alt"></i> Marocco</li>
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
                        <p><b>L'estate</b> è generalmente considerata il periodo migliore per visitare l'Inghilterra, in quanto le giornate sono più lunghe, il clima è più mite e le attrazioni turistiche sono ben frequentate. <br> Durante questa stagione potrete godervi passeggiate nei parchi, picnic nei giardini e eventi all'aperto come festival e concerti.

                        <br><b>La primavera </b>un altro ottimo periodo per visitare l'Inghilterra, poiché i <b>giardini e i parchi</b> sono in fiore e il clima inizia a riscaldarsi. Potrete ammirare i bellissimi paesaggi primaverili e partecipare alle celebrazioni pasquali tradizionali.

                        <br><b>L'autunno</b> offre colori vivaci e temperature piacevoli, ideali per esplorare le campagne inglesi e le città senza l'affollamento tipico della stagione estiva.

                        <br><b>L'inverno</b> può essere un periodo interessante per visitare l'Inghilterra se siete alla <b>ricerca di atmosfere natalizie</b> e mercatini tipici. Le città si illuminano con decorazioni natalizie e sono organizzati eventi speciali per celebrare le festività.</p>
                    </div>

                    <!-- contenitore icone inglesi -->
                    <div class="d-flex justify-content-around mt-2">
                        <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/iconeInglesi.png"
                        alt="separatore"
                        class="icone-inglesi"/>
                    </div>

                </div>
                <div class="col-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/inghilterra3.jpg" 
                    alt="inghilterra"
                    class="img-fluid rounded-4">
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="row">
                <h4 class="text-end fw-semibold"><i class="bi bi-map"></i> Informazioni utili</h4>
                <div class="col-4">
                <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/inghilterra4.jpg" 
                    class="img-fluid rounded-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/inghilterra5.jpg"
                    alt="inghilterra"
                    class="img-fluid mt-3 rounded-4">
                </div>

                <div class="col-8 pannello p-3 border border-3 border-light">
                    <p>
                        <b>Abbigliamento: </b> il clima in Inghilterra può essere imprevedibile, quindi è consigliabile portare con sé abiti adatti a temperature variabili e un ombrello. <br>
                        <b>Trasporti: </b> utilizzate i mezzi pubblici come bus e metro per spostarvi in città, in particolare a Londra, per evitare il traffico e i costi elevati dei parcheggi.<br>
                        <b>Prenotare con anticipo: </b> se volete visitare attrazioni turistiche popolari, come il London Eye o il Castello di Windsor, è consigliabile prenotare i biglietti in anticipo per evitare lunghe code. <br>
                        <b>Orari di apertura: </b> verificate gli orari di apertura dei negozi e delle attrazioni turistiche, in quanto alcuni luoghi potrebbero chiudere presto rispetto alle vostre aspettative.<br>
                        <b>Navigazione: </b> utilizzate un GPS o una mappa offline per navigare nelle strade delle città, facilitando gli spostamenti. <br>
                        <b>Taxi: </b> utilizzare un taxi o un uber è molto comodo per viaggiare! <br>
                    </p>

                        <p class="fw-bold text-center text-secondary mx-5 border border-2 rounded-2 border-light">Buon viaggio!</p>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <div class="row text-center">
                <div class="col">
                <img style="height: 14em;" src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/inghilterra6.jpg" 
                        alt="inghilterra"
                        class="img-fluid rounded-4"
                    >
                </div>
                <div class="col">
                <img style="height: 14em;"  src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/inghilterra7.jpg" 
                        alt="inghilterra"
                        class="img-fluid rounded-4"
                    >
                </div>
                <div class="col">
                <img style="height: 14em;"  src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/inghilterra8.jpg" 
                        alt="inghilterra"
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