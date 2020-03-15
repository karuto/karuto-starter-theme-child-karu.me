<?php
/**
 * The template that displays all of the HTML <head> section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage karuto_starter_theme
 * @since added by Vincent Zhang
 */
?>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<!-- TODO: this section below is specific to the site. Make it adaptable later. -->
  <link rel="copyright" href="/copyright">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto:400,700|" rel="stylesheet">
<?php wp_head(); ?>
</head>