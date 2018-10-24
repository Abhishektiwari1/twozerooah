<?php
    /**
     * The template for displaying the footer.
     *
     * Contains the closing of the #content div and all content after
     *
     * @package WP Coupon
     */
    global $st_option;

        if( wpcoupon_get_option( 'before_footer', '' ) != '' ) {
            if( wpcoupon_get_option( 'before_footer_apply', 'home' ) != 'all' ) {
                if ( get_option( 'show_on_front' ) == 'page' && is_home() ) {
                    echo do_shortcode( wpcoupon_get_option( 'before_footer', '' ) );
                }
            } else {
                echo do_shortcode( wpcoupon_get_option( 'before_footer', '' ) );
            }

        }
        ?>
		</div> <!-- END .site-content -->

        <footer id="colophon" class="site-footer <?php echo ( $st_option['footer_widgets'] ) ? 'footer-widgets-on' : 'footer-widgets-off' ?>" role="contentinfo">
			<div class="container">

                <?php if ( wpcoupon_get_option( 'footer_widgets' ) ) {

                    $footer_columns = wpcoupon_get_option( 'footer_columns', 4 );
                    $layouts = 16;
                    if ( $footer_columns > 1 ){
                        $layouts = wpcoupon_get_option( 'footer_columns_layout_'.$footer_columns );
                    }
                    $layouts = explode( '+', $layouts );
                    foreach ( $layouts as $k => $v ) {
                        $v = absint( trim( $v ) );
                        $v =  $v >= 16 ? 16 : $v;
                        $layouts[ $k ] = $v;
                    }

                    ?>
                    <div class="footer-widgets-area">
                        <div class="sidebar-footer footer-columns stackable ui grid clearfix">
                            <?php
                            for ($count = 0; $count < $footer_columns; $count++) {
                                ?>
                                <div id="footer-<?php echo esc_attr( $count +1 ) ?>" class="<?php echo esc_attr( wpcoupon_number_to_column_class( $layouts[ $count ] ) ); ?> wide column footer-column widget-area" role="complementary">
                                    <?php dynamic_sidebar('footer-' . ( $count +1 ) ); ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                <?php } ?>

                <div class="footer_copy">
               
                
                        <div class="footer-help">
                             <div id="footer-3" class="four wide column footer-column widget-area" role="complementary">
                             <aside id="pages-3" class="widget widget_pages"><h2 class="widget-title"></h2><ul>
                             <li class="page_item page-item-746"><a href="https://www.offersathome.com/career/user/">Account</a></li>
                             <li class="page_item page-item-663"><a href="https://www.offersathome.com/career/">Career</a></li>
                             <li class="page_item page-item-515"><a href="https://www.offersathome.com/contact-us/">Contact Us</a></li>
                             <li class="page_item page-item-503"><a href="https://www.offersathome.com/terms-of-use/">Terms of Use</a></li>
                             <li class="page_item page-item-506"><a href="https://www.offersathome.com/privacy-policy/">Privacy Policy</a></li>

                          </ul></aside></div>
                        </div>
                        <div class="footer-doc-logo">
<img class="alignnone size-full wp-image-5966" src="https://www.offersathome.com/wp-content/uploads/2018/10/DMCA_logo-grn-btn100w.png" alt="DMCA" />
<img class="alignnone size-full wp-image-5971" src="https://www.offersathome.com/wp-content/uploads/2018/10/godaddy1.png" alt="godaddy" />
</div>
                    
                      <div class="social-media">
                            <div id="footer-3" class="four wide column footer-column widget-area" role="complementary">

                                <aside id="pages-3" class="widget widget_pages">
                                    <h2 class="widget-title"></h2>
                                    <ul>
                                        <li class="page_item page-item">
                                            <a href="https://www.facebook.com/OffersAtHome/" target="_blank" rel="noopener"><img src="https://www.offersathome.com/wp-content/uploads/2018/10/icons8-facebook-48.png"></a>
                                        </li>
                                        <li class="page_item page-item">
                                             <a href="https://twitter.com/OffersAtHome" target="_blank" rel="noopener"><img src="https://www.offersathome.com/wp-content/uploads/2018/10/icons8-twitter-48.png"></a>
                                        </li>
                                        <li class="page_item page-item">
                                            <a href="https://www.instagram.com/offersathome/" target="_blank" rel="noopener"><img src="https://www.offersathome.com/wp-content/uploads/2018/10/instagram-1.png"></a>
                                        </li>
                                        <li class="page_item page-item">
                                         <a href="https://in.pinterest.com/offersathome/" target="_blank" rel="noopener"><img src="https://www.offersathome.com/wp-content/uploads/2018/10/icons8-pinterest-48.png"></a>
                                        </li>
                                        <li class="page_item page-item">
                                         <a href="https://www.linkedin.com/company/offersathome/" target="_blank" rel="noopener"><img src="https://www.offersathome.com/wp-content/uploads/2018/10/linkin.png"></a>
                                        </li>
                                        <li class="page_item page-item"> 
                                            <a href="https://plus.google.com/106058101638733148141/" target="_blank" rel="noopener"><img src="https://www.offersathome.com/wp-content/uploads/2018/10/googleplus.png"></a>
                                        </li>
                                    </ul>
                                </aside>
                           </div>
                        </div>
                    <p>
                        <?php
                        echo '<span>';
                        if ( wpcoupon_get_option('footer_copyright') == '' ) {
                           printf( esc_html__( ' &copy; %1$s %2$s. Proudly Designed by Aldify Marketing Team. ', 'wp-coupon' ), esc_attr(date('Y')), get_bloginfo('name') );
                        } else {
                            echo wp_kses_post( wpcoupon_get_option('footer_copyright') );
                        }
                        echo '</span>';

                        if ( wpcoupon_get_option('footer_author') ) {
                            echo '<span>'.sprintf( esc_html__( 'OffersAtHome Deals by %s', 'wp-coupon' ), '<a href="https://www.offersathome.com">OffersAthome</a>' ).'</span>' ;
                        }
                        ?>
                    </p>
                    <nav id="footer-nav" class="site-footer-nav">
                        <?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'footer', 'fallback_cb' => false ) ); ?>
                    </nav>
                </div>
            </div>
		</footer><!-- END #colophon-->

	</div><!-- END #page -->

<!-- subscribe popup start -->
<button id="myBtn">SUBSCRIBE</button> 
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
 <div>
<div class="flow_t_d">
<div class="clear_use"></div>
<div class="parent_div_use_half_one">
<div class="second_parent">
<h2>Never Miss an Offer Again</h2>
<div class="clear_use"></div>
<div class="half_same">
<div>
<div class="name_tti"><?php es_subbox($namefield = "YES", $desc = "", $group = "Public"); ?></div>
<div class="clear_use"></div>
<p><span class="margin_space_usesd"><a href="https://www.offersathome.com/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a></span></p>

</div>
</div>
</div>
</div>
</div>
</div>
  </div>

</div>
<!-- dsubscribe popup  -->



    <?php wp_footer(); ?>
 <!-- <div class="ball" id="ball">
    <a href='http://clk.omgt5.com/?AID=1561508&PID=32365&r=https%3a%2f%2fpharmeasy.in%2f' title='shop Now' target='blank'><img src='https://www.offersathome.com/wp-content/uploads/2018/08/pharmasy_new_offers-1.png' alt='Save More with free Delivery' title='Save More with free Delivery' class='relativ_div_i'/></a>
    <h5 class='image_use_div_s'>×</h5>  
    </div>     --> 
    <script async>
    var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    </script>
     <script async>

	    jQuery(function() {
        var limit = 100;
        var chars = jQuery(".header-content p").text(); 
        if (chars.length > limit) {
            var visiblePart = jQuery("<span class='div_k'> "+ chars.substr(0, limit-1) +"</span>");
            var dots = jQuery("<span class='dots'>... </span>");
            var hiddenPart = jQuery("<span class='more_a'>"+ chars.substr(limit-1) +"</span>");
            var readMore = jQuery("<span class='read-more'>More</span>");
            var LessContent = jQuery("<span class='read-more'>Less</span>");
          readMore.click(function() {
                jQuery(this).prev().remove(); // remove dots
                jQuery(this).next().show();
                jQuery(this).remove(); // remove 'read more'
            }); 

           jQuery(".header-content p").empty()
				.append(visiblePart)
                .append(dots)
                .append(readMore)
                .append(hiddenPart);
        }
    });
	
jQuery(document).ready(function(){
	jQuery('span.read-more').hide();
	jQuery('span.more_a').hide();
	jQuery('span.more_a').click(function(){
		jQuery(this).hide();
	});
	
	
	jQuery('.my_custom_use').click(function(){
	jQuery('span.dots').hide();
	jQuery('span.read-more').hide();
	jQuery('span.more_a').toggle();
	
	});
	jQuery(window).resize(function() {
  var width = jQuery(window).width();
  if (width < 767){
  jQuery('.my_custom_use').removeClass('my_custom_use_a');
  }
});
	
jQuery('.more_a').click(function(){
		jQuery('span.dots').hide();
		jQuery('span.read-more').hide();
		jQuery('.more_a').toggle();
		

	});

	jQuery('.more_a').click(function(){
		jQuery('span.read-more').hide();
	});
	
});
	
jQuery('p.right_div_use i').click(function(){
	
	jQuery('.header-search-input.ui.search.large').toggle()	
		//jQuery('.search-mobile').toggle()

	});
	
jQuery('p.right_div_use i').click(function(){
    jQuery('.prompt').focus();
});	

jQuery('.close').click(function(){
	jQuery('.modal').hide();
});
</script>	
</body>
</html>
