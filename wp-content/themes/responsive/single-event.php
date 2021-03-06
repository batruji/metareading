<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Archive Template
 *
 *
 * @file           archive.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.1
 * @filesource     wp-content/themes/responsive/archive.php
 * @link           http://codex.wordpress.org/Theme_Development#Archive_.28archive.php.29
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
<link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tabs.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.js"></script>-->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet"href="<?php bloginfo('template_url'); ?>/font-awesome-4.1.0/css/font-awesome.css" type="text/css" media="all">
<link rel="stylesheet"href="<?php bloginfo('template_url'); ?>/font-awesome-4.1.0/css/font-awesome.min.css" type="text/css" media="all">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tabs.js"></script><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script type="text/javascript">
 var $mcGoal = {'settings':{'uuid':'a35b2a4437bbb930bdd968b3c','dc':'us2'}};
 (function() {
   	var sp = document.createElement('script'); sp.type = 'text/javascript'; sp.async = true; sp.defer = true;
  	sp.src = ('https:' == document.location.protocol ? 'https://s3.amazonaws.com/downloads.mailchimp.com' : 'http://downloads.mailchimp.com') + '/js/goal.min.js';
  	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sp, s);
 })(); 
</script>
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

<!-- Facebook Conversion Code for metareading_events -->
<script>
var btnSubmit = jQuery('#em-booking-submit');
(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
jQuery(document).ready(function(){
	jQuery('#em-booking-submit').on('click',function(e){
		e.preventDefault();
		window._fbq.push(['track', '6029428377137', {'value':'0.00','currency':'USD'}]);
		jQuery('.em-booking-form').submit();
		console.log('works');
	});
});
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6029428377137&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
</head>
<body <?php body_class(); ?>>
<div id="the_mentor_page" class="container">
		<?php if ( get_header_image() ) : ?>
		<?php is_single();?>
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
		<div class="page_content col-xs-12 col-md-12 col-sm-12">
			<div class="events_content col-xs-12 col-md-12 col-sm-12">  
        
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
        
        <?php $options = get_option('responsive_theme_options'); ?>
		<?php if ($options['breadcrumb'] == 0): ?>
		<?php echo responsive_breadcrumb_lists(); ?>
        <?php endif; ?> 
          
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
				<div class="col-xs-12 col-md-12 col-sm-12 event_block">
                <div class="post-meta">
                <?php 
                    printf( __( '<span class="%1$s">Posted on</span> %2$s by %3$s', 'responsive' ),'meta-prep meta-prep-author',
		            sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
			            get_permalink(),
			            esc_attr( get_the_time() ),
			            get_the_date()
		            ),
		            sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			            get_author_posts_url( get_the_author_meta( 'ID' ) ),
			        sprintf( esc_attr__( 'View all posts by %s', 'responsive' ), get_the_author() ),
			            get_the_author()
		                )
			        );
		        ?>
				    <?php if ( comments_open() ) : ?>
                        <span class="comments-link">
                        <span class="mdash">&mdash;</span>
                    <?php comments_popup_link(__('No Comments &darr;', 'responsive'), __('1 Comment &darr;', 'responsive'), __('% Comments &darr;', 'responsive')); ?>
                        </span>
                    <?php endif; ?> 
                </div><!-- end of .post-meta -->
                                
                <div class="post-entry">
                    <?php the_content(__('Read more &#8250;', 'responsive')); ?>
                    
                    <?php if ( get_the_author_meta('description') != '' ) : ?>
                    
                    <div id="author-meta">
                    <?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '80' ); }?>
                        <div class="about-author"><?php _e('About','responsive'); ?> <?php the_author_posts_link(); ?></div>
                        <p><?php the_author_meta('description') ?></p>
                    </div><!-- end of #author-meta -->
                    
                    <?php endif; // no description, no author's meta ?>
                    
                    <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
					</div>
                </div><!-- end of .post-entry -->
                
                <div class="post-data">
				    <?php the_tags(__('Tagged with:', 'responsive') . ' ', ', ', '<br />'); ?> 
					<?php printf(__('Posted in %s', 'responsive'), get_the_category_list(', ')); ?> 
                </div><!-- end of .post-data -->             

            <div class="post-edit"><?php edit_post_link(__('Edit', 'responsive')); ?></div>             
            </div><!-- end of #post-<?php the_ID(); ?> -->
            
			<?php comments_template( '', true ); ?>
            
        <?php endwhile; ?> 

        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
        <div class="navigation">
			<div class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'responsive' ) ); ?></div>
            <div class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'responsive' ) ); ?></div>
		</div><!-- end of .navigation -->
        <?php endif; ?>

	    <?php else : ?>

        <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'responsive'); ?></h1>
        <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'responsive'); ?></p>
        <h6><?php _e( 'You can return', 'responsive' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'responsive' ); ?>"><?php _e( '&larr; Home', 'responsive' ); ?></a> <?php _e( 'or search for the page you were looking for', 'responsive' ); ?></h6>
        <?php get_search_form(); ?>

<?php endif; ?>  
		</div>
            </div><!-- end of #content-archive -->
	</div>
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