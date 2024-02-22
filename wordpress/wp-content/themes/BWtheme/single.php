<?php 
get_header();
?>
<h2>questa è la pagina SINGLE</h2>

<?php
    IF(HAVE_POSTS()) {
        while(have_posts()) { /* pagina degli articoli singoli, funzione per mostrare dinamicamente il contenuto*/
            the_post();
            the_title('<h2 class="text-info">','</h2>'); /* (after, before) */

            get_template_part('template/content'); /* get template part accede a dei 'partial' porzioni di template che si possono formattare in base al tipo di contenuto */
        }
    }



get_footer();
?>
