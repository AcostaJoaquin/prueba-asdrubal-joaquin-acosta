<?php // PAGINA PRINCIPAL CON LAS LLAMADAS AL HEADER FOOTER Y DISTINTAS SECCIONES?>
<?php get_header();?>

<?php include( get_template_directory() . '/includes/seccion1.php' ); ?>
<?php include( get_template_directory() . '/includes/seccion2.php' ); ?>
<?php include( get_template_directory() . '/includes/seccion3.php' ); ?>

<?php get_footer();?>