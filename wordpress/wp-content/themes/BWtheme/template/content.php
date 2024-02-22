<div class='border'>
    <div class="container bg-secondary">
        <span><?php the_date();?></span>
        <span><?php the_tags();?></span>
        <span><?php comments_number();?></span>
    </div>
<?php
the_content();
?>
</div>