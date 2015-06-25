<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Landing Page Template
 *
   Template Name:   Meta Reading Landing Page (no menu)
 *
 * @file           mreading-page.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/mreading-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="icon" type="image/png" href="http://www.metareading.com/wp-content/uploads/2012/07/Meta-Favicon.png" />

<?php wp_enqueue_style('responsive-style', get_stylesheet_uri(), false, '1.5.9');?>

<?php wp_head(); ?>
<link rel="stylesheet"href="http://www.metareading.com/wp-content/styles/style.css" type="text/css" media="all">
<script type="text/javascript" src="http://metareading.com/wp-content/styles/js/jquery.js"></script>
<script type="text/javascript" src="http://metareading.com/wp-content/styles/js/scripts.js"></script>
</head>

<body <?php body_class(); ?>>
<div class="whiteboard"></div>                 
<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">
         
    <?php responsive_header(); // before header hook ?>
    <div id="header" class="landingheader">
    
        <?php if (has_nav_menu('top-menu', 'responsive')) { ?>
	        <?php wp_nav_menu(array(
				    'container'       => '',
					'fallback_cb'	  =>  false,
					'menu_class'      => 'top-menu',
					'theme_location'  => 'top-menu')
					); 
				?>
        <?php } ?>
        
    <?php responsive_in_header(); // header hook ?>
   
        <div id="logo">
            <a href="<?php echo home_url('/'); ?>"><img src="http://metareading.com/wp-content/styles/img/logo.png" width="960" height="222" alt="<?php bloginfo('name'); ?>" /></a>
	</div><!-- end of #logo -->

    </div><!-- end of #header -->
    <?php responsive_header_end(); // after header hook ?>
    
	<?php responsive_wrapper(); // before wrapper ?>
    <div class="wrapper">
    <?php responsive_in_wrapper(); // wrapper hook ?>
	<div id="rounded" class="grid col-940 rounded">
		<div class="grid col-540 embed-container embed-video">
			<iframe class="video" src="http://www.youtube.com/embed/2N_7-_-4_pQ" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="grid col-380 fit">
			<h1 class="heading">Освободи Гения в теб!</h1>
			<p class="centered">Освободи потенциала на своя брилянтен мозък и супер памет, която ще ти служи във всичко!</p>
		</div>
		<div class="grid col-940">
			<a class="fb" href="http://www.facebook.com/MetaReading" target="_blank"></a>
			<a class="twitter" href="http://twitter.com/#!/MetaReading" target="_blank"></a>
			<a class="youtube" href="http://www.youtube.com/metareading" target="_blank"></a>
		</div>
		<div class="col-940 bottomimg">
			<img class="bottomimg" src="http://metareading.com/wp-content/styles/img/whitewave.png" width="960" height="96" alt="" />
		</div>		
	</div>
	<div class="col-940 bottomimg shadow">
		<img class="bottomimg" src="http://metareading.com/wp-content/styles/img/shadow.png" width="960" height="16" alt="" />
	</div>
	<div class="bottombg"></div>
	<div class="grid col-940 testimonials">
        <h1 class="blueheading">Препоръки</h1>
	<img class="border" src="http://metareading.com/wp-content/styles/img/border.png"></img>
	<div class="col-920">
	<div class="grid col-300">
        	<div class="testimonial">
			<div class="text-widget">
				<p class="testimonial-text">„Отвори ми нов хоризонт, ново поле в овладяването на нови знания.”</p>
				<p class="testimonial-author"><span class="name">Живан</span> - Proff</p>
			</div>
		</div>
        </div><!-- end of .col-300 -->

        <div class="grid col-300">
                <div class="testimonial">
			<div class="text-widget">
				<p class="testimonial-text">„Изключително преживяване е фоточетенето в този формат. Препоръчвам го на всеки, който желае да използва по-добре мисълта и подсъзнанието си.”</p>
				<p class="testimonial-author"><span class="name">Пипи</span> - Proff</p>
			</div>
		</div>
	</div><!-- end of .col-300 -->

        <div class="grid col-300 fit">
		<div class="testimonial">
			<div class="text-widget">
				<p class="testimonial-text">„Продължавайте да учите хората да приемат света, да се наслаждават и да са изпълнени с ентусиазъм докато се променят с него.”</p>
				<p class="testimonial-author"><span class="name">Пъща</span> - Proff</p>
			</div>
		</div>
	</div><!-- end of .col-300 fit -->
	</div>
		<div class="col-940 bottomimg" style="height: 100px;">
			<img class="bottomimg" src="http://metareading.com/wp-content/styles/img/blackwave.png" width="960" height="96" alt="" />
		</div>
    </div>
<?php get_footer(); ?>