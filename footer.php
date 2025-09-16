    <footer>
        <div class="container">
            <?php wp_nav_menu(array(
                    'theme_location'=>'bottom-menu',
                    'menu_class'=>'bottom-menu'
                )); 
            ?>
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
            <?php wp_footer(); ?>
        </div>
    </footer>
</body>
</html>