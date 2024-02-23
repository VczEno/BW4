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

<?php 
get_footer();
?>


