<?php 
get_header();
?>
<div class="container">

<?php
$homepage_image = get_theme_mod('homepage_image');

if ($homepage_image) {
    echo '<img src="' . esc_url($homepage_image) . '" alt="Homepage Image">';
} else {
    echo '<img src="assets/img/logo.png" alt="Placeholder Image">';
}
?> 
<h2>questa è la pagina FRONTPAGE</h2>

<?php 
    the_title('<h2 class="text-danger">', '</h2>');
    the_content(); ?>
</div>

<div>
    <?php echo do_shortcode('[display-map id="224"]'); ?>
</div>

<div class='d-flex w-100 justify-content-evenly'>
    <div style='background-color:red'>
    <p>GIAPPONE</p>
    <a href="http://localhost/BW4/wordpress/pagina-a-caso/">clicca qui</a>
    </div>
    <div style='background-color:green'>
    <p>Inghilterra</p>  
    </div>
    <div style='background-color:yellow'>
    <p>Stati uniti</p>
    </div>
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
                                <p class="card-text mt-3 blockquote">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit culpa numquam nam quos nobis aspernatur sit deleniti fugit placeat error, natus autem eligendi fuga minus minima, dolorem dignissimos omnis inventore.</p>
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
                                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="card-img-top rounded-circle img-thumbnail object-fit-cover"
                                    style="width: 150px; height: 150px;"
                                    alt="Foto Usuario 1">
                            </div>
                            
                            <div class="card-body text-center mx-5"> <!-- modificare immagine, nome, recensione e valutazione -->
                                <h5 class="card-title fs-4 ">Mario Maria Mario</h5>
                                <p class="card-text mt-3 blockquote">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit culpa numquam nam quos nobis aspernatur sit deleniti fugit placeat error, natus autem eligendi fuga minus minima, dolorem dignissimos omnis inventore.</p>
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
                                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="card-img-top rounded-circle img-thumbnail object-fit-cover"
                                    style="width: 150px; height: 150px;"
                                    alt="Foto Usuario 1">
                            </div>
                            
                            <div class="card-body text-center mx-5"> <!-- modificare immagine, nome, recensione e valutazione -->
                                <h5 class="card-title fs-4 ">Peppe il Macellaio</h5>
                                <p class="card-text mt-3 blockquote">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit culpa numquam nam quos nobis aspernatur sit deleniti fugit placeat error, natus autem eligendi fuga minus minima, dolorem dignissimos omnis inventore.</p>
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
                                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="card-img-top rounded-circle img-thumbnail object-fit-cover"
                                    style="width: 150px; height: 150px;"
                                    alt="Foto Usuario 1">
                            </div>
                            
                            <div class="card-body text-center mx-5"> <!-- modificare immagine, nome, recensione e valutazione -->
                                <h5 class="card-title fs-4 ">Pippo Quellochevoglio</h5>
                                <p class="card-text mt-3 blockquote">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit culpa numquam nam quos nobis aspernatur sit deleniti fugit placeat error, natus autem eligendi fuga minus minima, dolorem dignissimos omnis inventore.</p>
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
                                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    class="card-img-top rounded-circle img-thumbnail object-fit-cover"
                                    style="width: 150px; height: 150px;"
                                    alt="Foto Usuario 1">
                            </div>
                            
                            <div class="card-body text-center mx-5"> <!-- modificare immagine, nome, recensione e valutazione -->
                                <h5 class="card-title fs-4 ">Silvio Galassia</h5>
                                <p class="card-text mt-3 blockquote">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit culpa numquam nam quos nobis aspernatur sit deleniti fugit placeat error, natus autem eligendi fuga minus minima, dolorem dignissimos omnis inventore.</p>
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


