<?php
$path = preg_replace('/wp-content(?!.*wp-content).*/','',__DIR__);
include($path.'wp-load.php');

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function ssm_send_email(){


    add_filter( 'wp_mail_content_type', 'ssm_set_html_content_type' );
    function ssm_set_html_content_type() {
        return 'text/html';
    }


	 //$attachments =  array( WP_CONTENT_DIR . '/uploads/2015/07/04_The-Make-Up.mp3' );
		$headers = 'From: '.get_option('ssm_email_newsletter_from_name').' <'.get_option('ssm_email_newsletter_from_email').'>' . "\r\n";
	    $to = check_input($_REQUEST['sm_email']);
	    $subject = get_option('ssm_email_newsletter_subject');
	    $message = get_option('ssm_email_newsletter');
	    wp_mail( $to, $subject, $message, $headers );

        remove_filter( 'wp_mail_content_type', 'ssm_set_html_content_type' );

}


$data = '* Name : '.check_input($_REQUEST['sm_name']);
$data .= ' Email : '. check_input($_REQUEST['sm_email']).' , '. PHP_EOL;


if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$data))
{
    echo ("E-mail address not valid"); 
}
else{
	
	$file = "sm_subcribers-list.csv"; 
	$fp = fopen($file, "a")or die("Error Couldn't open $file for writing!");
	fwrite($fp, $data)or die("Error Couldn't write values to file!"); 
	fclose($fp);
	$sub_url = check_input($_REQUEST['ssm_sub_url']);
	if($fp && !empty($sub_url)){
		$ssm_enable_newsletter = get_option('ssm_enable_email_newsletter');
		if ($ssm_enable_newsletter === 'true') {
			ssm_send_email();   		
		}
		echo "run_url";
	}
	elseif ($fp){
		$ssm_enable_newsletter = get_option('ssm_enable_email_newsletter');
		if ($ssm_enable_newsletter === 'true') {
			ssm_send_email();   		
		}
		echo "success";
	}
	else{
		echo "error";
	}

	// remove_filter( 'wp_mail_content_type', 'ssm_set_html_content_type' );

	 

}


 ?>
