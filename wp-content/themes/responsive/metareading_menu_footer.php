<?php
/*
Template Name: Metareading menu footer
*/?>
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
<link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tabs.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.js"></script>-->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet"href="<?php bloginfo('template_url'); ?>/font-awesome-4.1.0/css/font-awesome.css" type="text/css" media="all">
<link rel="stylesheet"href="<?php bloginfo('template_url'); ?>/font-awesome-4.1.0/css/font-awesome.min.css" type="text/css" media="all">

<script src="<?php bloginfo('template_url'); ?>/js/menu_metareading.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35123390-1', 'auto');
  ga('send', 'pageview');

  
 function toggle_visibility(id) {
   var e = document.getElementById(id);
   if(e.style.display == 'block'){
	  e.style.display = 'none';		
	  }
   else
	 { e.style.display = 'block';}				
}
</script>
<!--
<script type="text/javascript" src="<php bloginfo('template_url'); ?>/js/mc-validate.js">
<script type='text/javascript'>
(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='PHONE';ftypes[3]='text';fnames[5]='COURSE';ftypes[5]='text'; /*
 * Translated default messages for the jQuery validation plugin.
 * Locale: BG
 */
$.extend($.validator.messages, {
		 required: "Полето е задължително.",
		 remote: "Моля, въведете правилната стойност.",
		 email: "Моля, въведете валиден email.",
		 url: "Моля, въведете валидно URL.",
		 date: "Моля, въведете валидна дата.",
		 dateISO: "Моля, въведете валидна дата (ISO).",
		 number: "Моля, въведете валиден номер.",
		 digits: "Моля, въведете само цифри",
		 creditcard: "Моля, въведете валиден номер на кредитна карта.",
		 equalTo: "Моля, въведете същата стойност отново.",
		 accept: "Моля, въведете стойност с валидно разширение.",
		 maxlength: $.validator.format("Моля, въведете повече от {0} символа."),
		 minlength: $.validator.format("Моля, въведете поне {0} символа."),
		 rangelength: $.validator.format("Моля, въведете стойност с дължина между {0} и {1} символа."),
		 range: $.validator.format("Моля, въведете стойност между {0} и {1}."),
		 max: $.validator.format("Моля, въведете стойност по-малка или равна на {0}."),
		 min: $.validator.format("Моля, въведете стойност по-голяма или равна на {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>-->
</head>
<body <?php body_class(); ?>>
<div id="the_mentor_page" class="container">
		<?php if ( get_header_image() ) : ?>
			<div class="row">
				<div id="site-header" class="col-xs-12 col-md-3 col-sm-3">
					<a href="<?php echo home_url('/'); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				</div>
		<?php endif; ?>
		<header id="masthead" class="site-header col-xs-12 col-md-9 col-sm-9" role="banner">
			<div class="header-main">
				<div class="nav">
					<div class="cat_title_menu"><?php if (qtrans_getLanguage() == 'en') echo 'Menu'; else echo 'Меню';?></div>
					
					
	<?php 
		if (qtrans_getLanguage() == 'en'){
			$defaults = array(
			'theme_location'  => 'responsive',
			'menu'            => 'metareadingEN',
			'container'       => 'div',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu menu_metareading',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
			);
		}
		else{
			$defaults = array(
			'theme_location'  => 'responsive',
			'menu'            => 'metareading',
			'container'       => 'div',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu menu_metareading',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
			);
		}

	wp_nav_menu( $defaults );
	?>				
			</div>
		</div>
	</header>
		</div>	
	<div class="container page_container">
		<?php the_content(); ?>	
		<?php 
		if (is_page('18')) {?>
		<div class="all_events_on_homepage col-xs-12">
		<?php
		$the_query = new WP_Query( 'page_id=1044' );		
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
					the_content();
			endwhile;			
				wp_reset_postdata();?>
		</div>
		<?php }			
		?>
	</div>	
<!--Footer-->
<?php $the_query = new WP_Query( 'page_id=3855' );
while ( $the_query->have_posts() ) :
	$the_query->the_post();
        the_content();
endwhile;
wp_reset_postdata();
?>
<!--\Footer-->
</div>
</body>
</html>