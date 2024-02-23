<?php $post_id = get_the_ID();

$attachments = get_children( array(
    'post_parent'    => $post_id,
    'post_type'      => 'attachment',
    'post_mime_type' => 'image', 
) );

if ( $attachments ) {
    $attachment_id = key( $attachments );
    echo $attachment_id;
}
?>

<div class='border'>
    <div class="container bg-secondary">
    
        <span><?php the_date();?></span>
        <span><?php the_tags();?></span>
        <span><?php comments_number();?></span>
    </div>
<?php
wp_get_attachment_image(96); 
the_content();
?>
</div>