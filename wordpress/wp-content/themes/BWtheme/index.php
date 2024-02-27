<?php get_header(); ?> <!-- pagina con lista di tutti gli articoli (blog?) -->
<div class="pannello">
<div class="container bg-light shadow py-5">

    <div class="container text-center mb-4 pannello-blog rounded-5 shadow">
        <div class="row">
            <div class="col d-flex align-items-center">
                <h1 style="text-shadow: 0.05em 0.05em 0.05em white;" class="fw-bold text-uppercase ps-5">The Blonde Abroad Blog!</h1>
                <p style="font-size: 1.2em;" class="py-3 px-2 ms-5 bg-light rounded-2 shadow text-center">Gestito da <b>Kiersten Rich</b>, un'esperta viaggiatrice che condivide guide di viaggio, racconti personali e consigli pratici per esplorare il mondo.</p>
            </div>
            <div class="col">
                <img style="width: 25em;" src="<?php echo get_stylesheet_directory_uri()?>/assets/img/travel2.png" alt="valigetta">
            </div>
        </div>
    </div>

    <div class="container text-center mt-5">
        <div class="row justify-content-md-center">
            <div class="col col-lg-9">
                <h2 class="text-start">Post Recenti</h2>

                <div class="row">
                    <?php 
                    $count = 0; 
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post();
                            $categories = get_the_category();
                            ?>
                            <div class='col-md-5 pannello mx-4 p-4 my-3 shadow'>
                                <?php
                                if ($categories) {
                                    echo '<p class="text-start ps-4 text-uppercase">';
                                    foreach ($categories as $category) {
                                        echo '<a style="color: rgb(101, 69, 69);" class="fw-semibold categoriaLink text-decoration-none" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a> ';
                                    }
                                    echo '</p>';
                                }
                                the_post_thumbnail('medium');
                                echo '<h2 class="text-secondary pt-3 fw-semibold text-uppercase">' . get_the_title() . '</h2>';
                                the_excerpt();
                                ?>
                            </div>
                            <?php
                            $count++;
                            if ($count % 2 == 0) {
                                echo '</div><div class="row">';
                            }
                        }
                    }
                    ?>
                </div>

            </div>
            <div class="col col-lg-3 text-center">
                <h4>Altre Categorie</h4>

                <div class="d-flex justify-content-center flex-column">
                    <?php
                        $categories = get_categories();

                        foreach ($categories as $category) {
                            echo '<a style="color: rgb(101, 69, 69);" class="fw-semibold categoriaLink text-decoration-none" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a><br>';
                        }
                    ?>
                </div>

            </div>
        </div>
    </div>

</div>
</div>
<?php get_footer(); ?>
