<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'blocks/welcome', 'default' ); ?>
<?php get_template_part( 'blocks/cheap', 'default' ); ?>
<?php get_template_part( 'blocks/steps', 'default' ); ?>
<?php get_template_part( 'blocks/products', 'default' ); ?>
<?php get_template_part( 'blocks/whyus', 'default' ); ?>
<?php get_template_part( 'blocks/timetobuy', 'default' ); ?>
<?php get_template_part( 'blocks/terminator', 'default' ); ?>
<?php get_template_part( 'blocks/contact', 'default' ); ?>


<?php get_footer(); ?>