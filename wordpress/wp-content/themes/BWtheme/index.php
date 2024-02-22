<?php get_header(); ?> <!-- pagina con lista di tutti gli articoli (blog?) -->
    <main>
     
    <?php 
        if(have_posts()) {
            while(have_posts()) {
                the_title('<h2 class="text-danger">','</h2>');
                the_post();
                the_content();
            }
        }
    ?>

  
    </main>
<?php get_footer(); ?>