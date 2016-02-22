<?php

add_action('wp_head','ssm_form_options_set_to_head');
function ssm_form_options_set_to_head(){
 // $option = get_option('some option');

  //SLider 
  $ssm_mailchimp_api_key = get_option('ssm_mailchimp_api_key');
  $ssm_mailchimp_list_id = get_option('ssm_mailchimp_list_id');
  $ssm_redirection_url = get_option('ssm_redirection_url');
  $ssm_enable_email_newsletter = get_option('ssm_enable_email_newsletter');
  $ssm_email_newsletter = get_option('ssm_email_newsletter');
  $ssm_email_newsletter_from_name = get_option('ssm_email_newsletter_from_name');
  $ssm_email_newsletter_from_email = get_option('ssm_email_newsletter_from_email');
  $ssm_email_newsletter_subject = get_option('ssm_email_newsletter_subject');


}


register_activation_hook(__FILE__,'ssm_subscribe_me_add_options');
function ssm_subscribe_me_add_options() {

	add_option('ssm_mailchimp_api_key','');
	add_option('ssm_mailchimp_list_id','');
	add_option('ssm_redirection_url','');
	add_option('ssm_enable_email_newsletter','');
	add_option('ssm_email_newsletter','');
	add_option('ssm_email_newsletter_from_name','');
	add_option('ssm_email_newsletter_from_email','');
	add_option('ssm_email_newsletter_subject','');

}





add_action('admin_init','ssm_forms_register_options');
function ssm_forms_register_options(){
  // register_setting('mpsp_options_group','option');
	register_setting('ssm_form_options_group','ssm_mailchimp_api_key');
	register_setting('ssm_form_options_group','ssm_mailchimp_list_id');
	register_setting('ssm_form_options_group','ssm_redirection_url');
	register_setting('ssm_form_newsletter_options_group','ssm_enable_email_newsletter');
	register_setting('ssm_form_newsletter_options_group','ssm_email_newsletter');
	register_setting('ssm_form_newsletter_options_group','ssm_email_newsletter_from_name');
	register_setting('ssm_form_newsletter_options_group','ssm_email_newsletter_from_email');
	register_setting('ssm_form_newsletter_options_group','ssm_email_newsletter_subject');


}







add_action('admin_menu','ssm_sub_menus_to_subscribe_me');

function ssm_sub_menus_to_subscribe_me(){

	add_submenu_page( 'edit.php?post_type=subscribe_me_forms', 'Subscriber', 'Subscription Settings', 'manage_options', 'ssm_mailchimp_menu', 'add_ssm_sub_menu_mailchimp' );
	add_submenu_page( 'edit.php?post_type=subscribe_me_forms', 'Newsletter', 'Newsletter', 'manage_options', 'ssm_newsletter', 'add_ssm_sub_menu_newsletter' );
	add_submenu_page( 'edit.php?post_type=subscribe_me_forms', 'Subscribers List', 'DB Subscribers List', 'manage_options', 'ssm_subscribers_list_menu', 'add_ssm_subscribers_list_menu' );
}


function add_ssm_sub_menu_mailchimp(){
	?>
	<h3>Mail Chimp</h3>
	<form method="post" action="options.php">
	      <?php settings_fields( 'ssm_form_options_group' );?>
	      <?php do_settings_sections( 'ssm_form_options_group' );?>
	      Enter MailChimp API Key :
		<p><input type='text' placeholder='Your Mailchimp API Key' name='ssm_mailchimp_api_key' value='<?php echo get_option('ssm_mailchimp_api_key'); ?>' style='width:400px; height:50px;font-size:19px;' required>
			<br>
			<br>
			Enter MailChimp List ID :
			<br>
			<br>
			<input type='text' name='ssm_mailchimp_list_id' placeholder='Your Mailchimp List ID ' value='<?php echo get_option('ssm_mailchimp_list_id'); ?>' style='width:400px; height:50px;font-size:19px;' required>
			<br>
			<br>
			Post Subscription Page redirect URL :
			<br>
			<br>
			<input type='text' name='ssm_redirection_url' placeholder='Enter Thankyou Page URL' value='<?php echo get_option('ssm_redirection_url'); ?>' style='width:400px; height:50px;font-size:19px;'>
		</p>
		<?php submit_button();?>
	</form>
	<?php
}


function add_ssm_subscribers_list_menu(){
	?>
	<div style='padding:50px; margin:0 auto; margin-top:50px; background:#6C7A89;color:#fff;font-family:sans-serif,arial;font-size:17px; width:60%;'>
	<?php

	$lpp_file = include 'sm_subcribers-list.csv'; 

	echo $lpp_file;


	 ?>
</div>
  <a style='background:#F27935; color:#fff; text-decoration:none;padding:15px;' href="<?php echo plugins_url('/subscriber-list-download.php',__FILE__); ?>">DOWNLOAD LIST</a>
  <br>
  <br>
  <br>
  <br>
  <a style='background:#F27935; color:#fff; text-decoration:none;padding:15px;' href="<?php echo plugins_url('/subscriber-list-empty.php',__FILE__); ?>">EMPTY LIST</a>
  <br>

	<?php
}



function add_ssm_sub_menu_newsletter(){
	$ssm_enable_email_newsletter = get_option('ssm_enable_email_newsletter');
  	$ssm_email_newsletter = get_option('ssm_email_newsletter');
	?>
	<style type="text/css">
	.lpp_form{
		width:800px;
	}
	.lpp_input{
		display: block;
		width:250px; 
		height:40px;
		font-size:16px;
		text-align: left;
	}
	.lpp_label{
		display: block;
		float: left;
		font-size: 18px;
		width: 150px;
		margin-right: 20px;
	}
	</style>
	<h3>Newsletter</h3>
	<form method="post" action="options.php" class="lpp_form">
	      <?php settings_fields( 'ssm_form_newsletter_options_group' );?>
	      <?php do_settings_sections( 'ssm_form_newsletter_options_group' );?>
	      <p style="margin-bottom:30px;"><label style="font-size: 18px; margin-right: 20px;"> Enable Autmomatic Newsletter : </label> <input type="checkbox" name="ssm_enable_email_newsletter" value="true" <?php checked( 'true', $ssm_enable_email_newsletter); ?>></p>
	      <hr>
	      <p style="margin-top:30px;"><label class="lpp_label">From Name : </label><input type='text' placeholder='From Name ' name='ssm_email_newsletter_from_name' value='<?php echo get_option('ssm_email_newsletter_from_name'); ?>' class='lpp_input'>
	      <p><label class="lpp_label">From Email : </label><input type='email' placeholder='From Email ' name='ssm_email_newsletter_from_email' value='<?php echo get_option('ssm_email_newsletter_from_email'); ?>' class='lpp_input'>
	      <p><label class="lpp_label">Email Subject : </label><input type='text' placeholder='Email Subject' name='ssm_email_newsletter_subject' value='<?php echo get_option('ssm_email_newsletter_subject'); ?>' class='lpp_input'>
		<?php
		$settings = array('media_buttons'=> true,'ssm_email_newsletter','textarea_rows' => 23);
		wp_editor( $ssm_email_newsletter, 'ssm_email_newsletter', $settings ); 
		submit_button();?>
	</form>
	<?php
}











 ?>