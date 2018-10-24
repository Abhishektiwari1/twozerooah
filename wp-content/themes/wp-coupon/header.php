<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WP Coupon
 */
global $st_option;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script defer async src="https://www.googletagmanager.com/gtag/js?id=UA-121787835-1"></script>

<script defer>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-121787835-1');
</script>
<meta name="twitter:image:src" content="https://www.offersathome.com/wp-content/uploads/2018/08/OffersAtHome-OG-Tag.png" /> 
<?php wp_head(); ?>   
<meta name="description" content="Find coupons and earn cash back at over 1000 stores when you shop at OffersAtHome! Save with online coupons, deals, promo codes and discounts."/>

<link rel="canonical" href="https://www.offersathome.com/" />

<meta property="og:locale" content="en_US" />

<meta property="og:type" content="website" />

<meta property="og:title" content="OffersAtHome – Best Online Coupons | Promo Codes | Discount and Deals" />

<meta property="og:description" content="Find coupons and earn cash back at over 1000 stores when you shop at OffersAtHome! Save with online coupons, deals, promo codes and discounts." />

<meta property="og:url" content="https://www.offersathome.com/" />
<meta property="og:site_name" content="OffersAtHome" />

<meta property="og:image" content="https://www.offersathome.com/wp-content/uploads/2018/08/OffersAtHome-OG-Tag.png" /> 

<meta property="og:image:secure_url" content="https://www.offersathome.com/wp-content/uploads/2018/08/OffersAtHome-OG-Tag.png" />

<meta name="twitter:card" content="summary_large_image" />

<meta name="twitter:description" content="Find coupons and earn cash back at over 1000 stores when you shop at OffersAtHome! Save with online coupons, deals, promo codes and discounts." />

<meta name="twitter:title" content="OffersAtHome - Coupons, Promo Codes, Deals, Discount &amp; more" />
<meta name="twitter:site" content="@OffersAtHome" />

<meta name="twitter:image" content="https://www.offersathome.com/wp-content/uploads/2018/08/OffersAtHome-OG-Tag.png" />

<meta name="twitter:creator" content="@OffersAtHome" /> 
</head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-5804853485698561",
          enable_page_level_ads: true
     });
</script>
<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
    	<header id="masthead" class="ui page site-header" role="banner">
            <?php do_action('wpcoupon_before_header_top'); ?>
            <div class="primary-header">
                <div class="container">
                    <div class="logo_area fleft">
                        <?php if ( wpcoupon_get_option('site_logo', false, 'url') != '' ) { ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <img src="<?php echo wpcoupon_get_option('site_logo', false, 'url'); ?>" alt="<?php echo get_bloginfo( 'name' ) ?>" />
                        </a>
                        <?php } else { ?>
                        <div class="title_area">
                            <?php if ( is_home() || is_front_page() ) { ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php } else {  ?>
                                <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                            <?php } ?>
                            <p class="site-description"><?php  bloginfo( 'description' ); ?></p>
                        </div>
                        <?php } ?>
						<div class="div_space">An Aldify Marketing Company</div>
                    </div>   

                    <?php
                    $header_icons = wpcoupon_get_option( 'header_icons' );
                    if ( $header_icons ) {
                    ?>
                    <div class="header-highlight fleft">
                        <?php
                        foreach( $header_icons as $icon ){
                        ?>
                        <a href="<?php echo ( $icon['url'] ) ? esc_attr( $icon['url'] ) : '#'; ?>">
                            <div class="highlight-icon"><?php echo balanceTags( $icon['description'] ); ?></div>
                            <div class="highlight-text"><?php echo esc_html( $icon['title'] ); ?></div>
                        </a>
                        <?php } ?>

                    </div>
                    <?php } ?>
 <div class='side_div_content'>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Header Ad Slot -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-5804853485698561"
     data-ad-slot="9223906026"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
					</div>
                </div>
            </div> <!-- END .header -->

            <?php do_action('wpcoupon_after_header_top'); ?>

            <div id="site-header-nav" class="site-navigation">
                <div class="container">
                    <nav class="primary-navigation clearfix fleft" role="navigation">
                        <a href="#content" class="screen-reader-text skip-link"><?php esc_html_e( 'Skip to content', 'wp-coupon' ); ?></a>
                        <div id="nav-toggle"><i class="content icon"></i></div>
                        <ul class="st-menu">
                           <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
                        </ul>				
                    </nav> <!-- END .primary-navigation -->				
                    <div class="nav-user-action fright clearfix">
					<div class="header_right f_left">
					<p class='right_div_use'><i class="search icon"></i></p>
                        <form action="<?php echo home_url( '/' ); ?>" method="get" id="header-search">
                            <div class="header-search-input ui search large action left icon input">
                                <input autocomplete="off" class="prompt" name="s" placeholder="<?php esc_attr_e( 'Find your favorite brands, stores, deals & many more', 'wp-coupon' ); ?>" type="text">
                             <button class="header-search-submit ui button"><i class="search icon"></i> <?php esc_html_e( '', 'wp-coupon' ); ?></button>
                                <div class="results"></div>
                            </div>
                            <div class="clear"></div>
                            <?php
                            
                            $store_ids =  wpcoupon_get_option( 'top_search_stores' );

                            if ( ! empty( $store_ids ) ) {
                                $stores = wpcoupon_get_stores( array(  'include'=> $store_ids ) );
                                if ( $stores ) {

                                    $links = array();
                                    foreach ( $stores as $store ){
                                        $links[] = '<a href="'.get_term_link( $store, 'coupon_store' ).'">'.esc_html( $store->name ).'</a>';
                                    }

                                    $links = join( ', ', $links );
                                    if ( $links ) {
                                        ?>
                                        <div class="search-sample">
                                            <?php
                                            printf('<span>'.esc_html__( 'Top Searches:', 'wp-coupon' ).'</span>%1$s,...', $links);
                                            ?>
                                        </div>
                                        <?php
                                    }
                                }
                            }
                            ?> 
                        </form>
                    </div>
                    <!-- <div class="search-mobile">
                       // <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                   </div> -->
                    <?php

                         // if ( class_exists( 'WPCoupon_User' ) ) {
                            // WPCoupon_User::nav();
                       //  }
                        ?> 
                    </div> <!-- END .nav_user_action -->
                </div> <!-- END .container -->
            </div> <!-- END #primary-navigation -->
    	</header><!-- END #masthead -->
        <div id="content" class="site-content">
<?php
