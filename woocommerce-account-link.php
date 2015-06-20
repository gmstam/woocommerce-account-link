<?php
/*
1st Solution

This is a simple way to add WooCommerce Account link to a template.
I'm storing here to share and use again this snippet.

Works with Woocommerce 2.3.11 and Wordpress 4.2.2

**/

$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
if ( $myaccount_page_id ) {
  $myaccount_page_url = get_permalink( $myaccount_page_id );
}
?>

<!-- Only logged in user will see the text "My Account" otherwise a Login/Signup message will appear -->
<?php if ( is_user_logged_in() ) : ?>
	
	<li><a href="<?php echo esc_url($myaccount_page_url) ?>"> <?php _e('My Account','yourtemplate'); ?> </a></li>
	<?php else : ?>
	<li><a href="<?php echo esc_url($myaccount_page_url) ?>"> <?php _e('Log In / Sign Up','yourtemplate'); ?></a></li>
	<?php endif; ?>
	


<?php
/*
2nd Solution

Very minimal
**/
$woo_account_link = get_permalink( get_option('woocommerce_myaccount_page_id') );
?>

<a href="<?php echo esc_url($woo_account_link) ?>"> <?php _e('My Account','yourtemplate'); ?></a>