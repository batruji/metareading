<?php
/*
Template Name: Current mentor
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
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tabs.js"></script><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet"href="<?php bloginfo('template_url'); ?>/font-awesome-4.1.0/css/font-awesome.css" type="text/css" media="all">
<link rel="stylesheet"href="<?php bloginfo('template_url'); ?>/font-awesome-4.1.0/css/font-awesome.min.css" type="text/css" media="all">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35123390-1', 'auto');
  ga('send', 'pageview');

</script>
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
	<?php 
		if (qtrans_getLanguage() == 'en'){
			$defaults = array(
			'theme_location'  => 'responsive',
			'menu'            => 'mentors_menuEN',
			'container'       => 'div',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu mentors_menu',
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
			'menu'            => 'mentors_menu',
			'container'       => 'div',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu mentors_menu',
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
<?php the_content(); ?>	
<!-- Begin MailChimp Signup Form -->
		<form action="//metareading.us2.list-manage.com/subscribe/post?u=a35b2a4437bbb930bdd968b3c&amp;id=81a602a816" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div class="mc-field-group">
			<img id="form_arrow" src="<?php bloginfo('template_url'); ?>/images/mentors/arrow2.png"/>
			<label for="mce-EMAIL">E-mail: </label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
		</div>
		<div class="mc-field-group">
			<label for="mce-FNAME">Две имена: </label>
			<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
		</div>
		<div class="mc-field-group size1of2">
			<label for="mce-PHONE">Телефон за връзка: </label>
			<input type="text" name="PHONE" class="required" value="" id="mce-PHONE">
		</div>
		<div class="mc-field-group hidden">
			<input type="hidden" name="ID" value="<?php the_ID(); ?>" id="mce-ID">
			<input type="hidden" name="PAGE" value="<?php echo get_permalink(); ?>" id="mce-PAGE">
		</div>
		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;"><input type="text" name="b_a35b2a4437bbb930bdd968b3c_81a602a816" tabindex="-1" value=""></div>
			<div class="clear"><input type="submit" value="Искам програмата" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		</form>
		<p class="no-spam">Никога няма да ви изпращаме спам!</p>
	</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='PHONE';ftypes[2]='phone';fnames[3]='ID';ftypes[3]='text';fnames[4]='PAGE';ftypes[4]='text'; /*
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
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
</div> 
</div>
</div>
<!--Footer-->
<?php $the_query = new WP_Query( 'page_id=3275' );
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