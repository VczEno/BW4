<?php 

get_header();

?>
    <div class="ratio ratio-21x9 position-relative embed-responsive"> <!-- da mettere fuori il div.container per riempire orizzontalmente lo schermo -->
        <iframe class='z-index-n2' src="https://www.youtube.com/embed/mlHklH5VBtI?si=cVxNnnCvU4Trp8Qq&amp;controls=0&mute=1&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
        <div class=' d-flex z-index-1 w-50 h-25  bg-dark position-absolute top-50 start-50 translate-middle justify-content-center ' style="--bs-bg-opacity: .50;">
            <div class='align-self-center text-center text-white'>
                <h1>nome sito meraviglioso</h1>
                <h2>perchè la qualità c'ha rotto er cazzo</h2>
            </div>
        </div>
    </div>
    

        <div class="mete-momento my-4">
            <h2 class="text-center mt-3">Le mete del momento</h2>
            <div class="d-flex align-items-center justify-content-evenly my-5">

                <div class="wrapper">
                    <div class="image position-relative">
                    <img src="https://images.unsplash.com/photo-1559925523-10de9e23cf90?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" width="300px" height="300px">
                        <div class="content">
                            <button class="py-3 px-4 border-0 rounded"><h4>Marocco</h4></button>
                        </div>
                    </div>
                </div>
                
                
                <div class="wrapper">
                    <div class="image position-relative">
                        <img src="https://images.unsplash.com/photo-1542640244-7e672d6cef4e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" width="300px" height="300px">
                        <div class="content">
                            <button class="py-3 px-4 border-0 rounded"><h4>Giappone</h4></button>
                        </div>
                    </div>
                </div>


                <div class="wrapper">
                    <div class="image position-relative">
                        <img src="https://images.unsplash.com/photo-1473896100090-53523650d4c6?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" width="300px" height="300px">
                        <div class="content">
                            <button class="py-3 px-4 border-0 rounded"><h4>Inghilterra</h4></button>
                        </div>    
                    </div>
                </div>

                <div class="wrapper">
                    <div class="image position-relative">
                        <img src="https://images.unsplash.com/photo-1473896100090-53523650d4c6?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" width="300px" height="300px">
                        <div class="content">
                            <button class="py-3 px-4 border-0 rounded"><h4>Inghilterra</h4></button>
                        </div>    
                    </div>
                </div>

                <div class="wrapper">
                    <div class="image position-relative">
                        <img src="https://images.unsplash.com/photo-1473896100090-53523650d4c6?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" width="300px" height="300px">
                        <div class="content">
                            <button class="py-3 px-4 border-0 rounded"><h4>Inghilterra</h4></button>
                        </div>    
                    </div>
                </div>

            </div>
        </div>

        <div class="mappa w-75 mx-auto">
            <h2 class="text-center mt-5 mb-3">Scegli la tua destinazione</h2>
            <?php echo do_shortcode('[display-map id="28"]'); ?>
        </div>

        <div class="mt-3 w-75 text-center mx-auto ">
            <h2>Reviews</h2>

            <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide  " data-bs-ride="carousel" >
                <div class="carousel-inner shadow-lg ">
                    <div class="carousel-item active" data-bs-interval="3000"> <!-- modificare intervallo -->
                        <div class="card border-0 ">
                            <div class='container text-center mt-4'>
                                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="card-img-top rounded-circle img-thumbnail object-fit-cover"
                                    style="width: 150px; height: 150px;"
                                    alt="Foto Usuario 1">
                            </div>
                            
                            <div class="card-body text-center mx-5"> <!-- modificare immagine, nome, recensione e valutazione -->
                                <h5 class="card-title fs-4 ">Giovanni Rossi</h5>
                                <p class="card-text mt-3 blockquote w-75 mx-auto">
                                "La mia esperienza con questo sito di viaggi è stata eccezionale. La piattaforma è user-friendly, rendendo la ricerca e la prenotazione del viaggio un gioco da ragazzi. Ho optato per un pacchetto vacanze in Giappone e non avrei potuto essere più soddisfatto. L'itinerario era ben pianificato, gli alloggi erano di alta qualità e il supporto clienti è stato disponibile in ogni fase. Grazie a questo sito, ho vissuto un'avventura senza stress e ricca di momenti indimenticabili."
                                </p>
                            </div>
                            <div class='container text-center mb-4 fs-5'>
                                <span>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <!--
                                <i class="bi bi-star"></i>  stella vuota 
                                <i class="bi bi-star-half"></i>   mezza stella
                                 -->
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="3000">
                        <div class="card border-0">
                            <div class='container text-center mt-4'>
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="card-img-top rounded-circle img-thumbnail object-fit-cover"
                                    style="width: 150px; height: 150px;"
                                    alt="Foto Usuario 1">
                            </div>
                            
                            <div class="card-body text-center mx-5"> <!-- modificare immagine, nome, recensione e valutazione -->
                                <h5 class="card-title fs-4 ">Alessandra</h5>
                                <p class="card-text mt-3 blockquote w-75 mx-auto">
                                "Ho utilizzato questo sito di viaggi per organizzare una fuga romantica in Italia e sono rimasta colpita dalla vasta gamma di opzioni personalizzabili. La sezione delle recensioni degli altri viaggiatori è stata una risorsa preziosa nella scelta delle destinazioni e delle attività. La prenotazione è stata semplice, e durante il viaggio, ogni dettaglio era curato. Ho apprezzato la flessibilità offerta dalla piattaforma, consentendomi di creare il viaggio perfetto per me e il mio partner."
                                </p>
                            </div>
                            <div class='container text-center mb-4 fs-5'>
                                <span>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <!--
                                <i class="bi bi-star"></i>  stella vuota 
                                <i class="bi bi-star-half"></i>   mezza stella
                                 -->
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="3000">
                        <div class="card border-0">
                            <div class='container text-center mt-4'>
                                <img src="https://scontent.fblq5-1.fna.fbcdn.net/v/t39.30808-6/309867204_1664680893927759_3546218641049049376_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=FRG5fhkTm_wAX9NwdNN&_nc_ht=scontent.fblq5-1.fna&oh=00_AfC-5ujYfVwBiAwwQaUJNGAR6dhp_RpTNRHtrPzz7vi3XA&oe=65E1A00B"
                                    class="card-img-top rounded-circle img-thumbnail object-fit-cover"
                                    style="width: 150px; height: 150px;"
                                    alt="Foto Usuario 1">
                            </div>
                            
                            <div class="card-body text-center mx-5"> <!-- modificare immagine, nome, recensione e valutazione -->
                                <h5 class="card-title fs-4 ">Peppe il Macellaio</h5>
                                <p class="card-text mt-3 blockquote w-75 mx-auto">
                                "Sono un cliente abituale di questo sito di viaggi e non smette mai di stupirmi. Ho esplorato diverse destinazioni grazie alla loro vasta selezione di pacchetti e offerte. La loro assistenza clienti è sempre pronta a rispondere alle mie domande e risolvere eventuali problemi. La possibilità di personalizzare i viaggi è un grande vantaggio, permettendomi di adattare ogni esperienza alle mie preferenze. Grazie a questo sito, ho scoperto luoghi incredibili e creato ricordi duraturi."
                                </p>
                            </div>
                            <div class='container text-center mb-4 fs-5'>
                                <span>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i> 
                                <i class="bi bi-star"></i>
                                <!--
                                  stella vuota 
                                <i class="bi bi-star-half"></i>   mezza stella
                                 -->
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="card border-0">
                            <div class='container text-center mt-4'>
                                <img src="https://i.pinimg.com/564x/3c/74/33/3c743348432ff9d5a9cfabcbc0bafde8.jpg"
                                    class="card-img-top rounded-circle img-thumbnail object-fit-cover"
                                    style="width: 150px; height: 150px;"
                                    alt="Foto Usuario 1">
                            </div>
                            
                            <div class="card-body text-center mx-5"> <!-- modificare immagine, nome, recensione e valutazione -->
                                <h5 class="card-title fs-4 ">Pippo Quellochevoglio</h5>
                                <p class="card-text mt-3 blockquote w-75 mx-auto">
                                "Questo sito di viaggi ha reso la mia ultima avventura in Inghilterra un'esperienza senza problemi. La navigazione intuitiva, insieme alle dettagliate informazioni sulle destinazioni, mi ha aiutato a prendere decisioni informate. La prenotazione è stata veloce e il viaggio è stato un successo. Ho particolarmente apprezzato la qualità degli alloggi consigliati e la possibilità di esplorare la cultura locale. Consiglio vivamente questo sito a chiunque cerchi una pianificazione di viaggio affidabile."
                                </p>
                            </div>
                            <div class='container text-center mb-4 fs-5'>
                                <span>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <!--
                                <i class="bi bi-star"></i>  stella vuota 
                                <i class="bi bi-star-half"></i>   mezza stella
                                 -->
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="card border-0">
                            <div class='container text-center mt-4'>
                                <img src="https://cdn.discordapp.com/attachments/1195282751616712754/1195322193362554940/galaxy.png?ex=65eaf08a&is=65d87b8a&hm=c3ad02f6df45d311a47764fc95e7110a329f79cf480af01f2619e3c5d175fbd8&"
                                    class="card-img-top rounded-circle img-thumbnail object-fit-cover"
                                    style="width: 150px; height: 150px;"
                                    alt="Foto Usuario 1">
                            </div>
                            
                            <div class="card-body text-center mx-5"> <!-- modificare immagine, nome, recensione e valutazione -->
                                <h5 class="card-title fs-4 ">Silvio Galassia</h5>
                                <p class="card-text mt-3 blockquote w-75 mx-auto">
                                "Ho prenotato la mia vacanza in Marocco attraverso questo sito e sono rimasta estremamente soddisfatta. La varietà di pacchetti e destinazioni ha reso la scelta difficile, ma il sito ha reso il processo di selezione piacevole e intuitivo. La piattaforma ha superato le mie aspettative con opzioni di alloggio di alta qualità e un servizio clienti sempre disponibile. Durante il viaggio, tutto è andato come previsto, regalandomi un'esperienza indimenticabile. Tornerò sicuramente a prenotare con loro."
                                </p>
                            </div>
                            <div class='container text-center mb-4 fs-5'>
                                <span>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i> 
                                <i class="bi bi-star"></i> 
                                <!--
                                <i class="bi bi-star"></i>  stella vuota 
                                <i class="bi bi-star-half"></i>   mezza stella
                                 -->
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="carousel-item " data-bs-interval="3000">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="card-img-top rounded-circle card-img position-center"
                                style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;"
                                alt="Foto Usuario 1">
                            <div class="card-body">
                                <h5 class="card-title">Giovanni Binachi</h5>
                                <p class="card-text">Il mio viaggio è stato fantastico! Ho visitato luoghi incredibili e
                                    ho vissuto esperienze indimenticabili. Consiglio vivamente!</p>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
            
           
        </div>
    
<?php 

get_footer();

?>