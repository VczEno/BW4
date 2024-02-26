    <footer  id="footer" class="site-footer">

        <?php
        // Verifica se il widget dell'area del footer è attivo
        if (is_active_sidebar('footer-widget-area')) {
            dynamic_sidebar('footer-widget-area');
        }
        ?>

        <div class="container-fluid py-5 bg-dark text-white">
            <div class="d-flex flex-column text-center align-items-center">
                <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                    if ($logo_url) {
                        echo '<img src="' . esc_url($logo_url) . '" alt="Logo" class="footer-logo">';
                    }
                ?>
                <p>&copy; <?php echo date('Y'); ?> Travel Blog</p>
                <p>info@travelblog.com</p>
            </div>
        </div>


        <?php wp_footer(); ?>

    </footer>
</body>
</html>