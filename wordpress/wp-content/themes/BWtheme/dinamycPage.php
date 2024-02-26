<?php
/* 
Template Name: dynamicPage
*/
?>

<?php
get_header();

// Ottieni lo slug della pagina corrente
$current_page_slug = get_post_field('post_name', get_post());

// Verifica se lo slug è presente
if ($current_page_slug) {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'category_name' => $current_page_slug, // Utilizziamo lo slug direttamente come categoria
    );

    $query = new WP_Query($args);
?>

    <div class="container bg-info">
<?php
    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Nessun post trovato. Verifica che gli articoli siano correttamente categorizzati.';
        echo '<br>';
        echo 'Categoria cercata: ' . $current_page_slug;
    endif;
} else {
    echo 'Impossibile ottenere lo slug della pagina.';
}
?>
</div>
<?php
get_footer();
?>

