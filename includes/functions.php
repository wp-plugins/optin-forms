<?php

// Set global variables
	$optinforms_email_solution = get_option('optinforms_email_solution');
	
	$optinforms_form_action_mailchimp = get_option('optinforms_form_action_mailchimp');
	$optinforms_form_action_madmimi = get_option('optinforms_form_action_madmimi');
	$optinforms_form_action_interspire = get_option('optinforms_form_action_interspire');
	
	$optinforms_form_list_name_aweber = get_option('optinforms_form_list_name_aweber');
	$optinforms_form_redirect_aweber = get_option('optinforms_form_redirect_aweber');
	$optinforms_form_listid_icontact = get_option('optinforms_form_listid_icontact');
	$optinforms_form_specialid_icontact = get_option('optinforms_form_specialid_icontact');
	$optinforms_form_clientid_icontact = get_option('optinforms_form_clientid_icontact');
	$optinforms_form_redirect_icontact = get_option('optinforms_form_redirect_icontact');
	$optinforms_form_error_icontact = get_option('optinforms_form_error_icontact');
	$optinforms_form_webformid_getresponse = get_option('optinforms_form_webformid_getresponse');
	$optinforms_form_name_field_interspire = get_option('optinforms_form_name_field_interspire');
	
	$optinforms_included_fonts = array ("Arial", "Baumans", "Belgrano", "Chewy", "Cinzel Decorative", "Coming Soon", "Contrail One", "Damion", "Dancing Script", "Droid Sans", "Droid Serif", "Englebert", "Fenix", "Flavors", "Fredoka One", "Georgia", "Gloria Hallelujah", "Gochi Hand", "Grand Hotel", "Helvetica", "Lobster", "Luckiest Guy", "Marcellus SC", "News Cycle", "Nixie One", "Oleo Script", "Open Sans", "Oswald", "Overlock SC", "Pacifico", "Parisienne", "Quicksand", "Racing Sans One", "Roboto Condensed", "Russo One", "Sanchez", "Shadows Into Light", "Share Tech", "Signika Negative", "Tahoma", "Times New Roman", "Titan One", "Unkempt", "Verdana", "Viga");
	$optinforms_included_fonts_simple = array ("Arial, Helvetica, sans-serif", "Times New Roman, Times, serif", "Tahoma, Geneva, sans-serif", "Courier New, Courier, monospace", "Georgia, Times New Roman, Times, serif", "Trebuchet MS, Arial, sans-serif", "Verdana, Geneva, sans-serif", "Palatino Linotype, Book Antiqua, serif");
	
	$optinforms_form_design = get_option('optinforms_form_design');
	$optinforms_form_placement_post = get_option('optinforms_form_placement_post');
	$optinforms_form_placement_page = get_option('optinforms_form_placement_page');
	$optinforms_form_placement_popup = get_option('optinforms_form_placement_popup');
	$optinforms_form_placement_box = get_option('optinforms_form_placement_box');
	$optinforms_form_placement_bar = get_option('optinforms_form_placement_bar');
	$optinforms_form_exclude_posts = get_option('optinforms_form_exclude_posts');
	$optinforms_form_exclude_pages = get_option('optinforms_form_exclude_pages');
	$optinforms_powered_by = get_option('optinforms_powered_by');
	$optinforms_form_target = get_option('optinforms_form_target');


// Add tabs for main page
function optinforms_menu_tabs() {
	echo "<ul id=\"optinforms-menu-tabs\" class=\"shadetabs\">
			<li><a href=\"#\" rel=\"optinforms-email-solution-tab\" class=\"selected\">" . __('Email Solution', 'optinforms') . "</a></li>
			<li><a href=\"#\" rel=\"optinforms-posts-tab\">" . __('Form', 'optinforms') . "</a></li>
		</ul>
		<div class=\"clear\"></div>";
}

// Define an email solution
function optinforms_get_email_solution() {
	global $optinforms_email_solution;
	if(empty($optinforms_email_solution)) {
		$optinforms_email_solution = "optinforms_email_solution_option1";
	}
	return $optinforms_email_solution;
}

// Add our form action
function optinforms_get_form_action() {
	global $optinforms_email_solution;
	if(empty($optinforms_email_solution)) {
		// do nothing
	}
	// add Aweber form action
	elseif($optinforms_email_solution == 'optinforms_email_solution_option1') {
		return "https://www.aweber.com/scripts/addlead.pl";
	}
	
	// add iContact form action
	elseif($optinforms_email_solution == 'optinforms_email_solution_option2') {
		return "https://app.icontact.com/icp/signup.php";
	}
	// add Mailchimp form action
	elseif($optinforms_email_solution == 'optinforms_email_solution_option3') {
		return optinforms_form_action_mailchimp();
	}
	// add GetResponse form action
	elseif($optinforms_email_solution == 'optinforms_email_solution_option4') {
		return "https://app.getresponse.com/add_contact_webform.html";
	}
	// add Mad Mimi form action
	elseif($optinforms_email_solution == 'optinforms_email_solution_option5') {
		return optinforms_form_action_madmimi();
	}
	// add Interspire form action
	elseif($optinforms_email_solution == 'optinforms_email_solution_option6') {
		return optinforms_form_action_interspire();
	}
}

// MailChimp form action
function optinforms_form_action_mailchimp() {
	global $optinforms_form_action_mailchimp;
	if(empty($optinforms_form_action_mailchimp)) {
		$optinforms_form_action_mailchimp = "";
	} else {
		// Let's check whether user has entered entire MailChimp HTML code
		if (strpos($optinforms_form_action_mailchimp, 'Begin MailChimp Signup Form') !== false) {
    		// if yes, strip it to get just the URL
			preg_match('|form action="([^"]*?)" method="post" id="mc-embedded-subscribe-form"|i', $optinforms_form_action_mailchimp, $matches);
			$optinforms_mailchimp_html_code = $matches[1];
			// Output our link and replace & with &amp; to keep it HTML5
			$optinforms_form_action_mailchimp = str_replace("&", "&amp;", $optinforms_mailchimp_html_code);
		} else {
			// do nothing
		}
	}
	return $optinforms_form_action_mailchimp;
}

// Mad Mimi form action
function optinforms_form_action_madmimi() {
	global $optinforms_form_action_madmimi;
	if(empty($optinforms_form_action_madmimi)) {
		$optinforms_form_action_madmimi = "";
	}
	return $optinforms_form_action_madmimi;
}

// Interspire form action
function optinforms_form_action_interspire() {
	global $optinforms_form_action_interspire;
	if(empty($optinforms_form_action_interspire)) {
		$optinforms_form_action_interspire = "";
	}
	return $optinforms_form_action_interspire;
}

// Aweber list name
function optinforms_form_list_name_aweber() {
	global $optinforms_form_list_name_aweber;
	if(empty($optinforms_form_list_name_aweber)) {
		$optinforms_form_list_name_aweber = "";
	}
	return $optinforms_form_list_name_aweber;
}

// Aweber redirect URL
function optinforms_form_redirect_aweber() {
	global $optinforms_form_redirect_aweber;
	if(empty($optinforms_form_redirect_aweber)) {
		$optinforms_form_redirect_aweber = "";
	}
	return $optinforms_form_redirect_aweber;
}

// iContact list ID
function optinforms_form_listid_icontact() {
	global $optinforms_form_listid_icontact;
	if(empty($optinforms_form_listid_icontact)) {
		$optinforms_form_listid_icontact = "";
	}
	return $optinforms_form_listid_icontact;
}

// iContact special ID
function optinforms_form_specialid_icontact() {
	global $optinforms_form_specialid_icontact;
	if(empty($optinforms_form_specialid_icontact)) {
		$optinforms_form_specialid_icontact = "";
	}
	return $optinforms_form_specialid_icontact;
}

// iContact client ID
function optinforms_form_clientid_icontact() {
	global $optinforms_form_clientid_icontact;
	if(empty($optinforms_form_clientid_icontact)) {
		$optinforms_form_clientid_icontact = "";
	}
	return $optinforms_form_clientid_icontact;
}

// iContact redirect URL
function optinforms_form_redirect_icontact() {
	global $optinforms_form_redirect_icontact;
	if(empty($optinforms_form_redirect_icontact)) {
		$optinforms_form_redirect_icontact = "";
	}
	return $optinforms_form_redirect_icontact;
}

// iContact error URL
function optinforms_form_error_icontact() {
	global $optinforms_form_error_icontact;
	if(empty($optinforms_form_error_icontact)) {
		$optinforms_form_error_icontact = "";
	}
	return $optinforms_form_error_icontact;
}

// GetResponse webform ID
function optinforms_form_webformid_getresponse() {
	global $optinforms_form_webformid_getresponse;
	if(empty($optinforms_form_webformid_getresponse)) {
		$optinforms_form_webformid_getresponse = "";
	}
	return $optinforms_form_webformid_getresponse;
}

// Interspire name ID
function optinforms_form_name_field_interspire() {
	global $optinforms_form_name_field_interspire;
	if(empty($optinforms_form_name_field_interspire)) {
		$optinforms_form_name_field_interspire = "";
	}
	return $optinforms_form_name_field_interspire;
}

// Open our form in a new window?
function optinforms_form_target_blank() {
	global $optinforms_form_target;
	if($optinforms_form_target == 1) {
		return "target=\"_blank\"";
	} else {
		//do nothing
	}
}

// Add our identifiers to the form
function optinforms_get_form_identifiers() {
	global $optinforms_email_solution;
	if(empty($optinforms_email_solution)) {
		// do nothing
	}
	// add Aweber identifiers
	elseif($optinforms_email_solution == 'optinforms_email_solution_option1') {
		return "<input type=\"hidden\" name=\"listname\" value=\"" . optinforms_form_list_name_aweber() . "\" /><input type=\"hidden\" name=\"redirect\" value=\"" . optinforms_form_redirect_aweber() . "\" /><input type=\"hidden\" name=\"meta_message\" value=\"1\" />";
	}
	// add iContact identifiers
	elseif($optinforms_email_solution == 'optinforms_email_solution_option2') {
		return "<input type=\"hidden\" name=\"listid\" value=\"" . optinforms_form_listid_icontact() . "\"><input type=\"hidden\" name=\"specialid:" . optinforms_form_listid_icontact() . "\" value=\"" . optinforms_form_specialid_icontact() . "\"><input type=\"hidden\" name=\"clientid\" value=\"" . optinforms_form_clientid_icontact() . "\"><input type=\"hidden\" name=\"redirect\" value=\"" . optinforms_form_redirect_icontact() . "\"><input type=\"hidden\" name=\"errorredirect\" value=\"" . optinforms_form_error_icontact() . "\">";
	}
	// add Mailchimp identifiers
	elseif($optinforms_email_solution == 'optinforms_email_solution_option3') {
		// do nothing
	}
	// add GetResponse identifiers
	elseif($optinforms_email_solution == 'optinforms_email_solution_option4') {
		return "<input type=\"hidden\" name=\"webform_id\" value=\"" . optinforms_form_webformid_getresponse() . "\" />";
	}
	// add Mad Mimi identifiers
	elseif($optinforms_email_solution == 'optinforms_email_solution_option5') {
		// do nothing
	}
	// add Interspire identifiers
	elseif($optinforms_email_solution == 'optinforms_email_solution_option6') {
		// do nothing
	}
}

// Define our name field
function optinforms_get_name_field() {
	global $optinforms_email_solution;
	if(empty($optinforms_email_solution)) {
		return "name";
	}
	// define Aweber name field
	elseif($optinforms_email_solution == 'optinforms_email_solution_option1') {
		return "name";
	}
	// define iContact name field
	elseif($optinforms_email_solution == 'optinforms_email_solution_option2') {
		return "fields_fname";
	}
	// define Mailchimp name field
	elseif($optinforms_email_solution == 'optinforms_email_solution_option3') {
		return "FNAME";
	}
	// define GetResponse name field
	elseif($optinforms_email_solution == 'optinforms_email_solution_option4') {
		return "name";
	}
	// define Mad Mimi name field
	elseif($optinforms_email_solution == 'optinforms_email_solution_option5') {
		return "signup[name]";
	}
	// define Interspire name field
	elseif($optinforms_email_solution == 'optinforms_email_solution_option6') {
		return "CustomFields[" . optinforms_form_name_field_interspire() . "]";
	}
}

// Define our email field
function optinforms_get_email_field() {
	global $optinforms_email_solution;
	if(empty($optinforms_email_solution)) {
		return "email";
	}
	// define Aweber email field
	elseif($optinforms_email_solution == 'optinforms_email_solution_option1') {
		return "email";
	}
	// define iContact email field
	elseif($optinforms_email_solution == 'optinforms_email_solution_option2') {
		return "fields_email";
	}
	// define Mailchimp email field
	elseif($optinforms_email_solution == 'optinforms_email_solution_option3') {
		return "EMAIL";
	}
	// define GetResponse email field
	elseif($optinforms_email_solution == 'optinforms_email_solution_option4') {
		return "email";
	}
	// define Mad Mimi email field
	elseif($optinforms_email_solution == 'optinforms_email_solution_option5') {
		return "signup[email]";
	}
	// define Interspire email field
	elseif($optinforms_email_solution == 'optinforms_email_solution_option6') {
		return "email";
	}
}

// Define a form design
function optinforms_get_form_design() {
	global $optinforms_form_design;
	if(empty($optinforms_form_design)) {
		$optinforms_form_design = 01;
	}
	return $optinforms_form_design;
}

// Get excluded posts for In Content forms
function optinforms_form_exclude_posts() {
	global $optinforms_form_exclude_posts;
	return $optinforms_form_exclude_posts;
}

// Get excluded pages for In Content forms
function optinforms_form_exclude_pages() {
	global $optinforms_form_exclude_pages;
	return $optinforms_form_exclude_pages;
}

// Decide when our admin notices are loaded
function optinforms_configuration() {
	global $optinforms_email_solution, $optinforms_form_list_name_aweber, $optinforms_form_listid_icontact, $optinforms_form_specialid_icontact, $optinforms_form_clientid_icontact, $optinforms_form_action_mailchimp, $optinforms_form_webformid_getresponse, $optinforms_form_action_madmimi, $optinforms_form_action_interspire;
	if(($optinforms_email_solution == 'optinforms_email_solution_option1') && (empty($optinforms_form_list_name_aweber))) {
		echo optinforms_configuration_message();
	}
	elseif(($optinforms_email_solution == 'optinforms_email_solution_option2') && (empty($optinforms_form_listid_icontact) || empty($optinforms_form_specialid_icontact) || empty($optinforms_form_clientid_icontact))) {
		echo optinforms_configuration_message();
	}
	elseif (($optinforms_email_solution == 'optinforms_email_solution_option3') && (empty($optinforms_form_action_mailchimp))) {
		echo optinforms_configuration_message();
	}
	elseif (($optinforms_email_solution == 'optinforms_email_solution_option4') && (empty($optinforms_form_webformid_getresponse))) {
		echo optinforms_configuration_message();
	}
	elseif (($optinforms_email_solution == 'optinforms_email_solution_option5') && (empty($optinforms_form_action_madmimi))) {
		echo optinforms_configuration_message();
	}
	elseif (($optinforms_email_solution == 'optinforms_email_solution_option6') && (empty($optinforms_form_action_interspire))) {
		echo optinforms_configuration_message();
	}
}

// Create our admin notice - user needs to configure the plugin
function optinforms_configuration_message() {
	global $current_user;
	$userid = $current_user->ID;
	if ( !get_user_meta( $userid, 'optinforms_dismiss_email_configuration' ) ) {
	echo "<div id=\"message\" class=\"error\">
        		<p>" . __('Your email solution is not configured yet. Your form will not work properly until you configure the settings.', 'optinforms') . " <a href=\"?page=optinforms&optinforms_dismiss_ec=yes\">" . __('I know, don\'t bug me', 'optinforms') . "</a></p>
    		</div>";
	}
}

// Add user meta value when dismiss link is clicked
function optinforms_dismiss_admin_notice() {
	global $current_user;
	$userid = $current_user->ID;
	
	// If "Dismiss" link has been clicked, user meta field is added
	if ( isset( $_GET['optinforms_dismiss_ec'] ) && 'yes' == $_GET['optinforms_dismiss_ec'] ) {
		add_user_meta( $userid, 'optinforms_dismiss_email_configuration', 'yes', true );
	}
}
add_action( 'admin_init', 'optinforms_dismiss_admin_notice' );

// Create supportbox notice
function optinforms_supportbox_notice_115() {
	
	global $current_user;
	$userid = $current_user->ID;
	if ( current_user_can('manage_options') && !get_user_meta( $userid, 'optinforms_dismiss_supportbox_115' ) ) {
    ?>
    <div class="updated" style="background:#02C2A8;border-color:#109785;margin:20px 0 40px;">
    	<div class="optinforms-supportbox-left">
        	<h3><?php echo __('Optin Forms is free, and will always be free', 'optinforms'); ?></h3>
        	<p><?php echo __('I\'ve spent a huge amount of my time developing this free plugin, and offering free support to users who need help with it. Please support further development of this plugin by pledging an amount that seems reasonable to you.', 'optinforms'); ?></p>
            <p><?php echo __('Thank you!', 'optinforms'); ?><br /><a href="https://twitter.com/b_ris" target="_blank">Boris Beo</a></p>
        </div><!--optinforms-supportbox-left-->
        <div class="optinforms-supportbox-right">
        	<h3><?php echo __('What is Optin Forms worth to you?', 'optinforms'); ?></h3>
        	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="info@ris-media.com">
				<input type="hidden" name="lc" value="US">
				<input type="hidden" name="item_name" value="Development Optin Forms">
				<input id="amt_id" type="hidden" name="amount" value="1">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="no_shipping" value="2">
				<input type="hidden" name="page_style" value="PayPal">
				<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
				<div id="optinforms-supportbox"></div>
                <div id="optinforms-supportbox-woohoo">
                	<div class="optinforms-supportbox-woohoo">
                		<p><?php echo __('Use the slider to set your amount', 'optinforms'); ?></p>
                    </div><!--optinforms-supportbox-woohoo-->
                </div><!--optinforms-supportbox-woohoo-->
                <div id="optinforms-supportbox-woohoo-one">
                	<div class="optinforms-supportbox-woohoo">
                		<p><?php echo __('Woohoo, free coffee!', 'optinforms'); ?></p>
                    </div><!--optinforms-supportbox-woohoo-->
                </div><!--optinforms-supportbox-woohoo-one-->
                <div id="optinforms-supportbox-woohoo-two">
                	<div class="optinforms-supportbox-woohoo">
                		<p><?php echo __('Cool, I can spend more time on the support forum!', 'optinforms'); ?></p>
                    </div><!--optinforms-supportbox-woohoo-->
                </div><!--optinforms-supportbox-woohoo-two-->
                <div id="optinforms-supportbox-woohoo-three">
                	<div class="optinforms-supportbox-woohoo">
                		<p><?php echo __('Great, I can make the plugin even better!', 'optinforms'); ?></p>
                    </div><!--optinforms-supportbox-woohoo-->
                </div><!--optinforms-supportbox-woohoo-three-->
                <div id="optinforms-supportbox-woohoo-four">
                	<div class="optinforms-supportbox-woohoo">
                		<p><?php echo __('Sweet, I can code some cool stuff!', 'optinforms'); ?></p>
                    </div><!--optinforms-supportbox-woohoo-->
                </div><!--optinforms-supportbox-woohoo-four-->
                <div id="optinforms-supportbox-woohoo-five">
                	<div class="optinforms-supportbox-woohoo">
                		<p><?php echo __('Amazing, I can work on new features!', 'optinforms'); ?></p>
                    </div><!--optinforms-supportbox-woohoo-->
                </div><!--optinforms-supportbox-woohoo-five-->
                <div id="optinforms-supportbox-woohoo-six">
                	<div class="optinforms-supportbox-woohoo">
                		<p><?php echo __('Wow, you rock!', 'optinforms'); ?></p>
                    </div><!--optinforms-supportbox-woohoo-->
                </div><!--optinforms-supportbox-woohoo-six-->
                <div class="optinforms-supportbox-price-container">
                    <label for="amount" class="optinforms-support-label">$</label>
                    <input type="text" id="optinforms-amount" name="amount" class="optinforms-support-amount" value="9" readonly>
                </div><!--optinforms-supportbox-price-container-->
                <div class="optinforms-supportbox-buttons-container">
                    <input type="submit" class="optinforms-supportbox-button-support" name="submit" value="Send Amount" />
                    <a class="optinforms-supportbox-button-no-support"><?php echo __('I don\'t want to support further development', 'optinforms'); ?></a>
                </div><!--optinforms-supportbox-buttons-container-->
            </form>
            <div class="clear"></div>
            <div id="optinforms-supportbox-close">
                <p><?php echo __('That\'s cool, we can still be friends.', 'optinforms'); ?> <a href="index.php?optinforms_dismiss_115=yes"><?php echo __('Click here to close this box', 'optinforms'); ?></a>.</p>
            </div><!--optinforms-supportbox-close-->
            <div id="optinforms-supportbox-pledged">
                <p><?php echo __('Thank you for your support ;) People like you make my work possible!', 'optinforms'); ?><br /><a href="index.php?optinforms_dismiss_115=yes"><?php echo __('Click here to close this box', 'optinforms'); ?></a>.</p>
            </div><!--optinforms-supportbox-pledged-->
            <script type="text/javascript">
				(function( $ ) {
					"use strict";
					
					$(function() { 
						$( "#optinforms-supportbox" ).slider({
                        range: "max",
                        min: 2,
                        max: 50,
                        value: 9,
                        slide: function( event, ui ) {
                        $( "#optinforms-amount" ).val( ui.value );
							if (ui.value > '1' && ui.value < '9') { //200 is the amount where you want the event to trigger
								$('#optinforms-supportbox-woohoo-one').css('display', 'block');
								$('#optinforms-supportbox-woohoo').css('display', 'none');
								$('#optinforms-supportbox-woohoo-two').css('display', 'none');
								$('#optinforms-supportbox-woohoo-three').css('display', 'none');
								$('#optinforms-supportbox-woohoo-four').css('display', 'none');
								$('#optinforms-supportbox-woohoo-five').css('display', 'none');
								$('#optinforms-supportbox-woohoo-six').css('display', 'none');
							}
							else if (ui.value > '8' && ui.value < '10') {
								$('#optinforms-supportbox-woohoo-one').css('display', 'none');
								$('#optinforms-supportbox-woohoo').css('display', 'block');
								$('#optinforms-supportbox-woohoo-two').css('display', 'none');
								$('#optinforms-supportbox-woohoo-three').css('display', 'none');
								$('#optinforms-supportbox-woohoo-four').css('display', 'none');
								$('#optinforms-supportbox-woohoo-five').css('display', 'none');
								$('#optinforms-supportbox-woohoo-six').css('display', 'none');
							}
							else if (ui.value > '9' && ui.value < '20') {
								$('#optinforms-supportbox-woohoo-one').css('display', 'none');
								$('#optinforms-supportbox-woohoo').css('display', 'none');
								$('#optinforms-supportbox-woohoo-two').css('display', 'block');
								$('#optinforms-supportbox-woohoo-three').css('display', 'none');
								$('#optinforms-supportbox-woohoo-four').css('display', 'none');
								$('#optinforms-supportbox-woohoo-five').css('display', 'none');
								$('#optinforms-supportbox-woohoo-six').css('display', 'none');
							}
							else if (ui.value > '20' && ui.value < '30') {
								$('#optinforms-supportbox-woohoo-one').css('display', 'none');
								$('#optinforms-supportbox-woohoo').css('display', 'none');
								$('#optinforms-supportbox-woohoo-two').css('display', 'none');
								$('#optinforms-supportbox-woohoo-three').css('display', 'block');
								$('#optinforms-supportbox-woohoo-four').css('display', 'none');
								$('#optinforms-supportbox-woohoo-five').css('display', 'none');
								$('#optinforms-supportbox-woohoo-six').css('display', 'none');
							}
							else if (ui.value > '30' && ui.value < '40') {
								$('#optinforms-supportbox-woohoo-one').css('display', 'none');
								$('#optinforms-supportbox-woohoo').css('display', 'none');
								$('#optinforms-supportbox-woohoo-two').css('display', 'none');
								$('#optinforms-supportbox-woohoo-three').css('display', 'none');
								$('#optinforms-supportbox-woohoo-four').css('display', 'block');
								$('#optinforms-supportbox-woohoo-five').css('display', 'none');
								$('#optinforms-supportbox-woohoo-six').css('display', 'none');
							}
							else if (ui.value > '40' && ui.value < '50') {
								$('#optinforms-supportbox-woohoo-one').css('display', 'none');
								$('#optinforms-supportbox-woohoo').css('display', 'none');
								$('#optinforms-supportbox-woohoo-two').css('display', 'none');
								$('#optinforms-supportbox-woohoo-three').css('display', 'none');
								$('#optinforms-supportbox-woohoo-four').css('display', 'none');
								$('#optinforms-supportbox-woohoo-five').css('display', 'block');
								$('#optinforms-supportbox-woohoo-six').css('display', 'none');
							}
							else if (ui.value > '49') {
								$('#optinforms-supportbox-woohoo-one').css('display', 'none');
								$('#optinforms-supportbox-woohoo').css('display', 'none');
								$('#optinforms-supportbox-woohoo-two').css('display', 'none');
								$('#optinforms-supportbox-woohoo-three').css('display', 'none');
								$('#optinforms-supportbox-woohoo-four').css('display', 'none');
								$('#optinforms-supportbox-woohoo-five').css('display', 'none');
								$('#optinforms-supportbox-woohoo-six').css('display', 'block');
							}
						}
                    });
                    $( "#optinforms-amount" ).val( $( "#optinforms-supportbox" ).slider( "value" ) );
					});
					
					$(document).ready(
					function(){
						$(".optinforms-supportbox-button-no-support").click(function () {
							$('#optinforms-supportbox-close').css('display', 'block');
						});
				
					});
					$(document).ready(
					function(){
						$(".optinforms-supportbox-button-support").click(function () {
							$('#optinforms-supportbox-pledged').css('display', 'block');
						});
				
					});
				 
				}(jQuery));
            </script>
            </div><!--optinforms-supportbox-right-->
        <div class="clear"></div>
	</div>
    <?php
	}
}
add_action( 'admin_notices', 'optinforms_supportbox_notice_115' );

// Add user meta value when dismiss link is clicked
function optinforms_dismiss_supportbox_notice() {
	global $current_user;
	$userid = $current_user->ID;
	
	// If "Dismiss" link has been clicked, user meta field is added
	if ( isset( $_GET['optinforms_dismiss_115'] ) && 'yes' == $_GET['optinforms_dismiss_115'] ) {
		add_user_meta( $userid, 'optinforms_dismiss_supportbox_115', 'yes', true );
	}
}
add_action( 'admin_init', 'optinforms_dismiss_supportbox_notice' );

// Show us some love :)
function optinforms_powered_by() {
	global $optinforms_powered_by;
	if($optinforms_powered_by == 0) {
		// do nothing
	}
	elseif($optinforms_powered_by == 1) {
		return "<div id=\"optinforms-powered-by\">Powered by <a href=\"http://www.codeleon.com/products/optin-forms\" target=\"_blank\">Optin Forms</a></div><!--optinforms-powered-by-->";
	}
}

// Check radiobutton show Powered By link
function optinforms_powered_by_show() {
	global $optinforms_powered_by;
	if($optinforms_powered_by == 1) {
		echo "checked=\"checked\"";
	}
}

// Check radiobutton hide Powered By link
function optinforms_powered_by_hide() {
	global $optinforms_powered_by;
	if($optinforms_powered_by == 0) {
		echo "checked=\"checked\"";
	}
}

// Get the fonts which are used on the selected form
function optinforms_get_used_fonts() {
	global $optinforms_form_design;
	$optinforms_unsupported_fonts = array("Arial", "Georgia", "Helvetica", "Tahoma", "Times New Roman", "Verdana");
	if($optinforms_form_design == 'optinforms_form_design_option1' || empty($optinforms_form_design)) {
		global $optinforms_form1_title_font, $optinforms_form1_subtitle_font;
		
		// Strip unsupported fonts to prevent 'Forbidden' output
		$optinforms_first_used_font = str_replace($optinforms_unsupported_fonts, "", optinforms_form1_default_title_font());
		$optinforms_second_used_font = str_replace($optinforms_unsupported_fonts, "", optinforms_form1_default_subtitle_font());
		
		// Decide whether we need a delimiter
		if($optinforms_first_used_font == "" || $optinforms_second_used_font == ""){
			$optinforms_font_delimiter = "";
		} else {
			$optinforms_font_delimiter = "%7C";
		}
		
		return $optinforms_first_used_font . $optinforms_font_delimiter . $optinforms_second_used_font;
	}
	elseif($optinforms_form_design == 'optinforms_form_design_option2') {
		global $optinforms_form2_title_font;

		// Strip unsupported fonts to prevent 'Forbidden' output
		$optinforms_first_used_font = str_replace($optinforms_unsupported_fonts, "", optinforms_form2_default_title_font());
		return $optinforms_first_used_font;
	}
	elseif($optinforms_form_design == 'optinforms_form_design_option3') {
		global $optinforms_form3_title_font, $optinforms_form3_subtitle_font;
		
		// Strip unsupported fonts to prevent 'Forbidden' output
		$optinforms_first_used_font = str_replace($optinforms_unsupported_fonts, "", optinforms_form3_default_title_font());
		$optinforms_second_used_font = str_replace($optinforms_unsupported_fonts, "", optinforms_form3_default_subtitle_font());
		
		// Decide whether we need a delimiter
		if($optinforms_first_used_font == "" || $optinforms_second_used_font == ""){
			$optinforms_font_delimiter = "";
		} else {
			$optinforms_font_delimiter = "%7C";
		}
		
		return $optinforms_first_used_font . $optinforms_font_delimiter . $optinforms_second_used_font;
	}
	elseif($optinforms_form_design == 'optinforms_form_design_option4') {
		global $optinforms_form4_title_font, $optinforms_form4_subtitle_font;
		
		// Strip unsupported fonts to prevent 'Forbidden' output
		$optinforms_first_used_font = str_replace($optinforms_unsupported_fonts, "", optinforms_form4_default_title_font());
		$optinforms_second_used_font = str_replace($optinforms_unsupported_fonts, "", optinforms_form4_default_subtitle_font());
		
		// Decide whether we need a delimiter
		if($optinforms_first_used_font == "" || $optinforms_second_used_font == ""){
			$optinforms_font_delimiter = "";
		} else {
			$optinforms_font_delimiter = "%7C";
		}
		
		return $optinforms_first_used_font . $optinforms_font_delimiter . $optinforms_second_used_font;
	}
	elseif($optinforms_form_design == 'optinforms_form_design_option5') {
		global $optinforms_form5_title_font, $optinforms_form5_subtitle_font;
		
		// Strip unsupported fonts to prevent 'Forbidden' output
		$optinforms_first_used_font = str_replace($optinforms_unsupported_fonts, "", optinforms_form5_default_title_font());
		$optinforms_second_used_font = str_replace($optinforms_unsupported_fonts, "", optinforms_form5_default_subtitle_font());
		
		// Decide whether we need a delimiter
		if($optinforms_first_used_font == "" || $optinforms_second_used_font == ""){
			$optinforms_font_delimiter = "";
		} else {
			$optinforms_font_delimiter = "%7C";
		}
		
		return $optinforms_first_used_font . $optinforms_font_delimiter . $optinforms_second_used_font;
	}
}

// Now include only these fonts to optimize load time
function optinforms_used_fonts() {
	$optinforms_google_url = "https://fonts.googleapis.com/css?family=";
	return $optinforms_google_url.optinforms_get_used_fonts();

}

?>