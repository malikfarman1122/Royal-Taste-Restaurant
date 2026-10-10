<?php if (!defined('ABSPATH')) exit; ?>
<?php wp_footer(); ?>
<script>
window.RoyalTasteTheme = {
    assets: <?php echo wp_json_encode(get_template_directory_uri() . '/assets/images'); ?>
};
</script>
<script type="text/babel" data-presets="env,react,typescript" src="<?php echo esc_url(get_template_directory_uri() . '/assets/app.tsx'); ?>"></script>
</body>
</html>
