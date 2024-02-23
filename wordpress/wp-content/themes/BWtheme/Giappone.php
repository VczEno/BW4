<?php
/* 
Template Name: Giappone
*/

get_header();
?>  
    <main class="container pt-3 bg-body-secondary">
    <div class="hero border rounded-1" style="height: 30em; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/japan.jpeg'); background-size: cover;">
            <h1 class="text-center fw-bold"><?php the_title(); ?></h1>
        </div>

        <p class="py-2">Benvenuti nel vostro viaggio virtuale nel <b>Giappone</b>, una terra di antiche tradizioni e modernità futuristica. Esplorerete città storiche come <b> Kyoto e metropoli frenetiche come Tokyo </b>, incontrando una cultura vibrante, paesaggi mozzafiato e una gastronomia deliziosa lungo il percorso. Preparatevi per un'avventura indimenticabile che vi porterà attraverso i contrasti affascinanti di questa meravigliosa nazione.</p>

        <div class="mt-4">
            <div class="row">
                <div class="col-8">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/japan2.jpeg"
                    alt="japan"
                    class="img-fluid rounded-4"/>
                </div>
                <div class="col-4">
                    <h4 class="fw-semibold">Altre destinazioni</h4>
                    <ul>
                        <li>destinazione</li>
                        <li>destinazione</li>
                        <li>destinazione</li>
                        <li>destinazione</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-5 sezione-periodo-migliore">
            <div class="row">
                <h2 class="fw-bold">MIGLIOR PERIODO PER VIAGGIARE</h2>
                <div class="col-8 border">
                    <p>Il miglior periodo per visitare il Giappone <b> dipende dalle tue preferenze personali </b> e dalle attività che desideri svolgere durante il tuo viaggio. <br> Tuttavia, molti esperti di viaggi consigliano di visitare il Giappone durante la primavera, in particolare durante <b> la stagione dei ciliegi in fiore (Sakura) </b> che di solito cade tra fine marzo e inizio aprile. <br> Durante questo periodo, i parchi e i giardini sono ricoperti di bellissimi fiori di ciliegio in fiore, creando uno spettacolo mozzafiato. <br> Inoltre, le temperature sono piacevoli e l'atmosfera generale è molto positiva. <br>
                        Se preferisci evitare i fiori di ciliegio, puoi considerare la visita in autunno durante la stagione delle foglie rosse (Koyo) che di solito cade tra ottobre e novembre. <br> Durante questo periodo, <b> i giardini e i parchi </b> si tingono di colori autunnali spettacolari, creando un'atmosfera magica.</p>
                </div>
                <div class="col-4">
                    <img src="<?php echo get_stylesheet_directory_uri()?> ./assets/img/japan3.jpg" 
                    alt=""
                    class="img-fluid rounded-4">
                    <img src="https://png.pngtree.com/thumb_back/fw800/background/20230611/pngtree-apple-windows-xp-wallpaper-image_2910301.jpg" 
                    alt=""
                    class="img-fluid mt-3">
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="row">
                <h4 class="text-end">Informazioni utili (alloggi ecc.)</h4>
                <div class="col-4">
                    <img src="https://png.pngtree.com/thumb_back/fw800/background/20230611/pngtree-apple-windows-xp-wallpaper-image_2910301.jpg" 
                    alt=""
                    class="img-fluid">
                    <img src="https://png.pngtree.com/thumb_back/fw800/background/20230611/pngtree-apple-windows-xp-wallpaper-image_2910301.jpg" 
                    alt=""
                    class="img-fluid mt-3">
                </div>

                <div class="col-8 border"></div>
            </div>
        </div>

        <div class="mt-4">
            <div class="row">
                <div class="col">
                    <img src="https://png.pngtree.com/thumb_back/fw800/background/20230611/pngtree-apple-windows-xp-wallpaper-image_2910301.jpg" 
                        alt=""
                        class="img-fluid"
                    >
                </div>
                <div class="col">
                    <img src="https://png.pngtree.com/thumb_back/fw800/background/20230611/pngtree-apple-windows-xp-wallpaper-image_2910301.jpg" 
                        alt=""
                        class="img-fluid"
                    >
                </div>
                <div class="col">
                    <img src="https://png.pngtree.com/thumb_back/fw800/background/20230611/pngtree-apple-windows-xp-wallpaper-image_2910301.jpg" 
                        alt=""
                        class="img-fluid"
                    >
                </div>
            </div>
        </div>

        <div class="link-vai-blog text-center my-5">
            <p>vuoi saperne di più sulla cultura di questo paese? <br> Visita il nostro blog</p>
            <button>vai</button>
        </div>

    </main>

        <div class="footer mt-5">
            <div class="hero border" style="height: 150px;">
                <p>footer</p>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>