<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php esc_attr( bloginfo( 'charset' ) ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <title><?php bloginfo( 'name' ); ?></title>
      <?php wp_head(); ?>
    </head>
	
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header -->

<?php get_template_part( 'template-parts/header/site-header' ); ?>