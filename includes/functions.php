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
	$optinforms_powered_by = get_option('optinforms_powered_by');
	
	$optinforms_form1_background = get_option('optinforms_form1_background');
	$optinforms_form1_border = get_option('optinforms_form1_border');
	$optinforms_form1_title = get_option('optinforms_form1_title');
	$optinforms_form1_title_font = get_option('optinforms_form1_title_font');
	$optinforms_form1_title_size = get_option('optinforms_form1_title_size');
	$optinforms_form1_title_color = get_option('optinforms_form1_title_color');
	$optinforms_form1_subtitle = get_option('optinforms_form1_subtitle');
	$optinforms_form1_subtitle_font = get_option('optinforms_form1_subtitle_font');
	$optinforms_form1_subtitle_size = get_option('optinforms_form1_subtitle_size');
	$optinforms_form1_subtitle_color = get_option('optinforms_form1_subtitle_color');
	$optinforms_form1_name_field = get_option('optinforms_form1_name_field');
	$optinforms_form1_email_field = get_option('optinforms_form1_email_field');
	$optinforms_form1_fields_font = get_option('optinforms_form1_fields_font');
	$optinforms_form1_fields_size = get_option('optinforms_form1_fields_size');
	$optinforms_form1_fields_color = get_option('optinforms_form1_fields_color');
	$optinforms_form1_button_text = get_option('optinforms_form1_button_text');
	$optinforms_form1_button_text_font = get_option('optinforms_form1_button_text_font');
	$optinforms_form1_button_text_size = get_option('optinforms_form1_button_text_size');
	$optinforms_form1_button_text_color = get_option('optinforms_form1_button_text_color');
	$optinforms_form1_button_background = get_option('optinforms_form1_button_background');
	$optinforms_form1_disclaimer = get_option('optinforms_form1_disclaimer');
	$optinforms_form1_disclaimer_font = get_option('optinforms_form1_disclaimer_font');
	$optinforms_form1_disclaimer_size = get_option('optinforms_form1_disclaimer_size');
	$optinforms_form1_disclaimer_color = get_option('optinforms_form1_disclaimer_color');
	$optinforms_form1_width = get_option('optinforms_form1_width');
	$optinforms_form1_width_pixels = get_option('optinforms_form1_width_pixels');
	
	$optinforms_form2_background = get_option('optinforms_form2_background');
	$optinforms_form2_title = get_option('optinforms_form2_title');
	$optinforms_form2_title_font = get_option('optinforms_form2_title_font');
	$optinforms_form2_title_size = get_option('optinforms_form2_title_size');
	$optinforms_form2_title_color = get_option('optinforms_form2_title_color');
	$optinforms_form2_email_field = get_option('optinforms_form2_email_field');
	$optinforms_form2_fields_font = get_option('optinforms_form2_fields_font');
	$optinforms_form2_fields_size = get_option('optinforms_form2_fields_size');
	$optinforms_form2_fields_color = get_option('optinforms_form2_fields_color');
	$optinforms_form2_button_text = get_option('optinforms_form2_button_text');
	$optinforms_form2_button_text_font = get_option('optinforms_form2_button_text_font');
	$optinforms_form2_button_text_size = get_option('optinforms_form2_button_text_size');
	$optinforms_form2_button_text_color = get_option('optinforms_form2_button_text_color');
	$optinforms_form2_button_background = get_option('optinforms_form2_button_background');
	$optinforms_form2_disclaimer = get_option('optinforms_form2_disclaimer');
	$optinforms_form2_disclaimer_font = get_option('optinforms_form2_disclaimer_font');
	$optinforms_form2_disclaimer_size = get_option('optinforms_form2_disclaimer_size');
	$optinforms_form2_disclaimer_color = get_option('optinforms_form2_disclaimer_color');
	$optinforms_form2_width = get_option('optinforms_form2_width');
	$optinforms_form2_width_pixels = get_option('optinforms_form2_width_pixels');
	
	$optinforms_form3_background = get_option('optinforms_form3_background');
	$optinforms_form3_title = get_option('optinforms_form3_title');
	$optinforms_form3_title_font = get_option('optinforms_form3_title_font');
	$optinforms_form3_title_size = get_option('optinforms_form3_title_size');
	$optinforms_form3_title_color = get_option('optinforms_form3_title_color');
	$optinforms_form3_subtitle = get_option('optinforms_form3_subtitle');
	$optinforms_form3_subtitle_font = get_option('optinforms_form3_subtitle_font');
	$optinforms_form3_subtitle_size = get_option('optinforms_form3_subtitle_size');
	$optinforms_form3_subtitle_color = get_option('optinforms_form3_subtitle_color');
	$optinforms_form3_name_field = get_option('optinforms_form3_name_field');
	$optinforms_form3_email_field = get_option('optinforms_form3_email_field');
	$optinforms_form3_fields_font = get_option('optinforms_form3_fields_font');
	$optinforms_form3_fields_size = get_option('optinforms_form3_fields_size');
	$optinforms_form3_fields_color = get_option('optinforms_form3_fields_color');
	$optinforms_form3_button_text = get_option('optinforms_form3_button_text');
	$optinforms_form3_button_text_font = get_option('optinforms_form3_button_text_font');
	$optinforms_form3_button_text_size = get_option('optinforms_form3_button_text_size');
	$optinforms_form3_button_text_color = get_option('optinforms_form3_button_text_color');
	$optinforms_form3_button_background = get_option('optinforms_form3_button_background');
	$optinforms_form3_width = get_option('optinforms_form3_width');
	$optinforms_form3_width_pixels = get_option('optinforms_form3_width_pixels');
	
	$optinforms_form4_background = get_option('optinforms_form4_background');
	$optinforms_form4_border = get_option('optinforms_form4_border');
	$optinforms_form4_title = get_option('optinforms_form4_title');
	$optinforms_form4_title_font = get_option('optinforms_form4_title_font');
	$optinforms_form4_title_size = get_option('optinforms_form4_title_size');
	$optinforms_form4_title_color = get_option('optinforms_form4_title_color');
	$optinforms_form4_subtitle = get_option('optinforms_form4_subtitle');
	$optinforms_form4_subtitle_font = get_option('optinforms_form4_subtitle_font');
	$optinforms_form4_subtitle_size = get_option('optinforms_form4_subtitle_size');
	$optinforms_form4_subtitle_color = get_option('optinforms_form4_subtitle_color');
	$optinforms_form4_email_field = get_option('optinforms_form4_email_field');
	$optinforms_form4_fields_font = get_option('optinforms_form4_fields_font');
	$optinforms_form4_fields_size = get_option('optinforms_form4_fields_size');
	$optinforms_form4_fields_color = get_option('optinforms_form4_fields_color');
	$optinforms_form4_button_text = get_option('optinforms_form4_button_text');
	$optinforms_form4_button_text_font = get_option('optinforms_form4_button_text_font');
	$optinforms_form4_button_text_size = get_option('optinforms_form4_button_text_size');
	$optinforms_form4_button_text_color = get_option('optinforms_form4_button_text_color');
	$optinforms_form4_button_background = get_option('optinforms_form4_button_background');
	$optinforms_form4_disclaimer = get_option('optinforms_form4_disclaimer');
	$optinforms_form4_disclaimer_font = get_option('optinforms_form4_disclaimer_font');
	$optinforms_form4_disclaimer_size = get_option('optinforms_form4_disclaimer_size');
	$optinforms_form4_disclaimer_color = get_option('optinforms_form4_disclaimer_color');
	$optinforms_form4_width = get_option('optinforms_form4_width');
	$optinforms_form4_width_pixels = get_option('optinforms_form4_width_pixels');
	
	$optinforms_form5_background = get_option('optinforms_form5_background');
	$optinforms_form5_title = get_option('optinforms_form5_title');
	$optinforms_form5_title_font = get_option('optinforms_form5_title_font');
	$optinforms_form5_title_size = get_option('optinforms_form5_title_size');
	$optinforms_form5_title_color = get_option('optinforms_form5_title_color');
	$optinforms_form5_subtitle = get_option('optinforms_form5_subtitle');
	$optinforms_form5_subtitle_font = get_option('optinforms_form5_subtitle_font');
	$optinforms_form5_subtitle_size = get_option('optinforms_form5_subtitle_size');
	$optinforms_form5_subtitle_color = get_option('optinforms_form5_subtitle_color');
	$optinforms_form5_name_field = get_option('optinforms_form5_name_field');
	$optinforms_form5_email_field = get_option('optinforms_form5_email_field');
	$optinforms_form5_fields_font = get_option('optinforms_form5_fields_font');
	$optinforms_form5_fields_size = get_option('optinforms_form5_fields_size');
	$optinforms_form5_fields_color = get_option('optinforms_form5_fields_color');
	$optinforms_form5_button_text = get_option('optinforms_form5_button_text');
	$optinforms_form5_button_text_font = get_option('optinforms_form5_button_text_font');
	$optinforms_form5_button_text_size = get_option('optinforms_form5_button_text_size');
	$optinforms_form5_button_text_color = get_option('optinforms_form5_button_text_color');
	$optinforms_form5_button_background = get_option('optinforms_form5_button_background');
	$optinforms_form5_disclaimer = get_option('optinforms_form5_disclaimer');
	$optinforms_form5_disclaimer_font = get_option('optinforms_form5_disclaimer_font');
	$optinforms_form5_disclaimer_size = get_option('optinforms_form5_disclaimer_size');
	$optinforms_form5_disclaimer_color = get_option('optinforms_form5_disclaimer_color');
	$optinforms_form5_width = get_option('optinforms_form5_width');
	$optinforms_form5_width_pixels = get_option('optinforms_form5_width_pixels');

// Add tabs for settings page
function optinforms_menu_tabs() {
	echo "<ul id=\"optinforms-menu-tabs\" class=\"shadetabs\">
			<li><a href=\"#\" rel=\"optinforms-email-solution-tab\" class=\"selected\">" . __('Email Solution', 'optinforms') . "</a></li>
			<li><a href=\"#\" rel=\"optinforms-form-tab\">" . __('Form', 'optinforms') . "</a></li>
			<li><a href=\"#\" rel=\"optinforms-placement-tab\">" . __('Placement', 'optinforms') . "</a></li>
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
		return "http://www.aweber.com/scripts/addlead.pl";
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
	// define Interspore name field
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

// FORM1: default background color
function optinforms_form1_default_background() {
	global $optinforms_form1_background;
	if(empty($optinforms_form1_background)) {
		$optinforms_form1_background = "#FFFFFF";
	}
	return $optinforms_form1_background;
}

// FORM1: default border color
function optinforms_form1_default_border() {
	global $optinforms_form1_border;
	if(empty($optinforms_form1_border)) {
		$optinforms_form1_border = "#E0E0E0";
	}
	return $optinforms_form1_border;
}

// FORM1: default title
function optinforms_form1_default_title() {
	global $optinforms_form1_title;
	if(empty($optinforms_form1_title)) {
		$optinforms_form1_title = __('Get Free Email Updates!', 'optinforms');
	}
	return $optinforms_form1_title;
}

// FORM1: default title font
function optinforms_form1_default_title_font() {
	global $optinforms_form1_title_font;
	if(empty($optinforms_form1_title_font)) {
		$optinforms_form1_title_font = "Damion";
	}
	return $optinforms_form1_title_font;
}

// FORM1: title font options
function optinforms_get_form1_title_font_options() {
	global $optinforms_form1_title_font;
	global $optinforms_included_fonts;
	foreach ($optinforms_included_fonts as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form1_title_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM1: default title font size
function optinforms_form1_default_title_size() {
	global $optinforms_form1_title_size;
	if(empty($optinforms_form1_title_size)) {
		$optinforms_form1_title_size = "36px";
	}
	return $optinforms_form1_title_size;
}

// FORM1: title font size options
function optinforms_get_form1_title_size_options() {
	global $optinforms_form1_title_size;
	foreach (range(10, 72) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form1_title_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM1: default title color
function optinforms_form1_default_title_color() {
	global $optinforms_form1_title_color;
	if(empty($optinforms_form1_title_color)) {
		$optinforms_form1_title_color = "#eb432c";
	}
	return $optinforms_form1_title_color;
}

// FORM1: default subtitle
function optinforms_form1_default_subtitle() {
	global $optinforms_form1_subtitle;
	if(empty($optinforms_form1_subtitle)) {
		$optinforms_form1_subtitle = __('Signup now and receive an email once I publish new content.', 'optinforms');
	}
	return $optinforms_form1_subtitle;
}

// FORM1: default subtitle font
function optinforms_form1_default_subtitle_font() {
	global $optinforms_form1_subtitle_font;
	if(empty($optinforms_form1_subtitle_font)) {
		$optinforms_form1_subtitle_font = "Arial";
	}
	return $optinforms_form1_subtitle_font;
}

// FORM1: subtitle font options
function optinforms_get_form1_subtitle_font_options() {
	global $optinforms_form1_subtitle_font;
	global $optinforms_included_fonts;
	foreach ($optinforms_included_fonts as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form1_subtitle_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM1: default subtitle font size
function optinforms_form1_default_subtitle_size() {
	global $optinforms_form1_subtitle_size;
	if(empty($optinforms_form1_subtitle_size)) {
		$optinforms_form1_subtitle_size = "16px";
	}
	return $optinforms_form1_subtitle_size;
}

// FORM1: subtitle font size options
function optinforms_get_form1_subtitle_size_options() {
	global $optinforms_form1_subtitle_size;
	foreach (range(10, 72) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form1_subtitle_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM1: default subtitle color
function optinforms_form1_default_subtitle_color() {
	global $optinforms_form1_subtitle_color;
	if(empty($optinforms_form1_subtitle_color)) {
		$optinforms_form1_subtitle_color = "#000000";
	}
	return $optinforms_form1_subtitle_color;
}

// FORM1: default name field
function optinforms_form1_default_name_field() {
	global $optinforms_form1_name_field;
	if(empty($optinforms_form1_name_field)) {
		$optinforms_form1_name_field = __('Enter Your Name', 'optinforms');
	}
	return $optinforms_form1_name_field;
}

// FORM1: default email field
function optinforms_form1_default_email_field() {
	global $optinforms_form1_email_field;
	if(empty($optinforms_form1_email_field)) {
		$optinforms_form1_email_field = __('Enter Your Email Address', 'optinforms');
	}
	return $optinforms_form1_email_field;
}

// FORM1: default email fields font
function optinforms_form1_default_fields_font() {
	global $optinforms_form1_fields_font;
	if(empty($optinforms_form1_fields_font)) {
		$optinforms_form1_fields_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form1_fields_font;
}

// FORM1: email fields font options
function optinforms_get_form1_fields_font_options() {
	global $optinforms_form1_fields_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form1_fields_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM1: email fields font size
function optinforms_form1_default_fields_size() {
	global $optinforms_form1_fields_size;
	if(empty($optinforms_form1_fields_size)) {
		$optinforms_form1_fields_size = "12px";
	}
	return $optinforms_form1_fields_size;
}

// FORM1: email fields font size options
function optinforms_get_form1_fields_size_options() {
	global $optinforms_form1_fields_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form1_fields_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM1: default fields color
function optinforms_form1_default_fields_color() {
	global $optinforms_form1_fields_color;
	if(empty($optinforms_form1_fields_color)) {
		$optinforms_form1_fields_color = "#666666";
	}
	return $optinforms_form1_fields_color;
}

// FORM1: default button text
function optinforms_form1_default_button_text() {
	global $optinforms_form1_button_text;
	if(empty($optinforms_form1_button_text)) {
		$optinforms_form1_button_text = __('SIGN UP', 'optinforms');
	}
	return $optinforms_form1_button_text;
}

// FORM1: default button text font
function optinforms_form1_default_button_text_font() {
	global $optinforms_form1_button_text_font;
	if(empty($optinforms_form1_button_text_font)) {
		$optinforms_form1_button_text_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form1_button_text_font;
}

// FORM1: button text font options
function optinforms_get_form1_button_text_font_options() {
	global $optinforms_form1_button_text_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form1_button_text_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM1: button text font size
function optinforms_form1_default_button_text_size() {
	global $optinforms_form1_button_text_size;
	if(empty($optinforms_form1_button_text_size)) {
		$optinforms_form1_button_text_size = "14px";
	}
	return $optinforms_form1_button_text_size;
}

// FORM1: button text font size options
function optinforms_get_form1_button_text_size_options() {
	global $optinforms_form1_button_text_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form1_button_text_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM1: default button text color
function optinforms_form1_default_button_text_color() {
	global $optinforms_form1_button_text_color;
	if(empty($optinforms_form1_button_text_color)) {
		$optinforms_form1_button_text_color = "#FFFFFF";
	}
	return $optinforms_form1_button_text_color;
}

// FORM1: default button background color
function optinforms_form1_default_button_background() {
	global $optinforms_form1_button_background;
	if(empty($optinforms_form1_button_background)) {
		$optinforms_form1_button_background = "#20A64C";
	}
	return $optinforms_form1_button_background;
}

// FORM1: default disclaimer
function optinforms_form1_default_disclaimer() {
	global $optinforms_form1_disclaimer;
	if(empty($optinforms_form1_disclaimer)) {
		$optinforms_form1_disclaimer = __('I will never give away, trade or sell your email address. You can unsubscribe at any time.', 'optinforms');
	}
	return $optinforms_form1_disclaimer;
}

// FORM1: default disclaimer font
function optinforms_form1_default_disclaimer_font() {
	global $optinforms_form1_disclaimer_font;
	if(empty($optinforms_form1_disclaimer_font)) {
		$optinforms_form1_disclaimer_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form1_disclaimer_font;
}

// FORM1: disclaimer font options
function optinforms_get_form1_disclaimer_font_options() {
	global $optinforms_form1_disclaimer_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form1_disclaimer_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM1: disclaimer font size
function optinforms_form1_default_disclaimer_size() {
	global $optinforms_form1_disclaimer_size;
	if(empty($optinforms_form1_disclaimer_size)) {
		$optinforms_form1_disclaimer_size = "12px";
	}
	return $optinforms_form1_disclaimer_size;
}

// FORM1: disclaimer font size options
function optinforms_get_form1_disclaimer_size_options() {
	global $optinforms_form1_disclaimer_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form1_disclaimer_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM1: default disclaimer color
function optinforms_form1_default_disclaimer_color() {
	global $optinforms_form1_disclaimer_color;
	if(empty($optinforms_form1_disclaimer_color)) {
		$optinforms_form1_disclaimer_color = "#666666";
	}
	return $optinforms_form1_disclaimer_color;
}

// FORM1: default width
function optinforms_form1_default_width() {
	global $optinforms_form1_width;
	if(empty($optinforms_form1_width)) {
		$optinforms_form1_width = 0;
	}
}

// FORM1: 100% width checked
function optinforms_form1_checked_width_100() {
	global $optinforms_form1_width;
	if($optinforms_form1_width == 0) {
		echo "checked=\"checked\"";
	}
}

// FORM1: fixed width checked
function optinforms_form1_checked_width_fixed() {
	global $optinforms_form1_width;
	if($optinforms_form1_width == 1) {
		echo "checked=\"checked\"";
	}
}

// FORM1: fixed width disabled if width is 100%
function optinforms_form1_disabled_width_pixels() {
	global $optinforms_form1_width;
	if($optinforms_form1_width == 0) {
		echo "disabled=\"disabled\"";
	}
}

// FORM1: default width fixed
function optinforms_form1_default_width_pixels() {
	global $optinforms_form1_width_pixels;
	if(empty($optinforms_form1_width_pixels)) {
		$optinforms_form1_width_pixels = "700";
	}
	return $optinforms_form1_width_pixels;
}

// FORM1: default width fixed
function optinforms_form1_get_width() {
	global $optinforms_form1_width;
	if($optinforms_form1_width == 0) {
		// do nothing
	}
	elseif($optinforms_form1_width == 1) {
		return "style=\"width:" . optinforms_form1_default_width_pixels() . "px\"";
	}
}

// FORM2: default background color
function optinforms_form2_default_background() {
	global $optinforms_form2_background;
	if(empty($optinforms_form2_background)) {
		$optinforms_form2_background = "#266d7c";
	}
	return $optinforms_form2_background;
}

// FORM2: default title
function optinforms_form2_default_title() {
	global $optinforms_form2_title;
	if(empty($optinforms_form2_title)) {
		$optinforms_form2_title = __('Receive Updates', 'optinforms');
	}
	return $optinforms_form2_title;
}

// FORM2: default title font
function optinforms_form2_default_title_font() {
	global $optinforms_form2_title_font;
	if(empty($optinforms_form2_title_font)) {
		$optinforms_form2_title_font = "Pacifico";
	}
	return $optinforms_form2_title_font;
}

// FORM2: title font options
function optinforms_get_form2_title_font_options() {
	global $optinforms_form2_title_font;
	global $optinforms_included_fonts;
	foreach ($optinforms_included_fonts as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form2_title_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM2: default title font size
function optinforms_form2_default_title_size() {
	global $optinforms_form2_title_size;
	if(empty($optinforms_form2_title_size)) {
		$optinforms_form2_title_size = "28px";
	}
	return $optinforms_form2_title_size;
}

// FORM2: title font size options
function optinforms_get_form2_title_size_options() {
	global $optinforms_form2_title_size;
	foreach (range(10, 72) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form2_title_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM2: default title color
function optinforms_form2_default_title_color() {
	global $optinforms_form2_title_color;
	if(empty($optinforms_form2_title_color)) {
		$optinforms_form2_title_color = "#ffffff";
	}
	return $optinforms_form2_title_color;
}

// FORM2: default email field
function optinforms_form2_default_email_field() {
	global $optinforms_form2_email_field;
	if(empty($optinforms_form2_email_field)) {
		$optinforms_form2_email_field = __('Enter Your Email Address', 'optinforms');
	}
	return $optinforms_form2_email_field;
}

// FORM2: default email fields font
function optinforms_form2_default_fields_font() {
	global $optinforms_form2_fields_font;
	if(empty($optinforms_form2_fields_font)) {
		$optinforms_form2_fields_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form2_fields_font;
}

// FORM2: email fields font options
function optinforms_get_form2_fields_font_options() {
	global $optinforms_form2_fields_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form2_fields_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM2: email fields font size
function optinforms_form2_default_fields_size() {
	global $optinforms_form2_fields_size;
	if(empty($optinforms_form2_fields_size)) {
		$optinforms_form2_fields_size = "12px";
	}
	return $optinforms_form2_fields_size;
}

// FORM2: email fields font size options
function optinforms_get_form2_fields_size_options() {
	global $optinforms_form2_fields_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form2_fields_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM2: email fields color
function optinforms_form2_default_fields_color() {
	global $optinforms_form2_fields_color;
	if(empty($optinforms_form2_fields_color)) {
		$optinforms_form2_fields_color = "#000000";
	}
	return $optinforms_form2_fields_color;
}

// FORM2: default button text
function optinforms_form2_default_button_text() {
	global $optinforms_form2_button_text;
	if(empty($optinforms_form2_button_text)) {
		$optinforms_form2_button_text = __('Sign Up', 'optinforms');
	}
	return $optinforms_form2_button_text;
}

// FORM2: default button text font
function optinforms_form2_default_button_text_font() {
	global $optinforms_form2_button_text_font;
	if(empty($optinforms_form2_button_text_font)) {
		$optinforms_form2_button_text_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form2_button_text_font;
}

// FORM2: button text font options
function optinforms_get_form2_button_text_font_options() {
	global $optinforms_form2_button_text_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form2_button_text_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM2: button text font size
function optinforms_form2_default_button_text_size() {
	global $optinforms_form2_button_text_size;
	if(empty($optinforms_form2_button_text_size)) {
		$optinforms_form2_button_text_size = "14px";
	}
	return $optinforms_form2_button_text_size;
}

// FORM2: button text font size options
function optinforms_get_form2_button_text_size_options() {
	global $optinforms_form2_button_text_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form2_button_text_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM2: default button text color
function optinforms_form2_default_button_text_color() {
	global $optinforms_form2_button_text_color;
	if(empty($optinforms_form2_button_text_color)) {
		$optinforms_form2_button_text_color = "#FFFFFF";
	}
	return $optinforms_form2_button_text_color;
}

// FORM2: default button background color
function optinforms_form2_default_button_background() {
	global $optinforms_form2_button_background;
	if(empty($optinforms_form2_button_background)) {
		$optinforms_form2_button_background = "#49A3FE";
	}
	return $optinforms_form2_button_background;
}

// FORM2: default disclaimer
function optinforms_form2_default_disclaimer() {
	global $optinforms_form2_disclaimer;
	if(empty($optinforms_form2_disclaimer)) {
		$optinforms_form2_disclaimer = __('No spam guarantee.', 'optinforms');
	}
	return $optinforms_form2_disclaimer;
}

// FORM2: default disclaimer font
function optinforms_form2_default_disclaimer_font() {
	global $optinforms_form2_disclaimer_font;
	if(empty($optinforms_form2_disclaimer_font)) {
		$optinforms_form2_disclaimer_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form2_disclaimer_font;
}

// FORM2: disclaimer font options
function optinforms_get_form2_disclaimer_font_options() {
	global $optinforms_form2_disclaimer_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form2_disclaimer_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM2: disclaimer font size
function optinforms_form2_default_disclaimer_size() {
	global $optinforms_form2_disclaimer_size;
	if(empty($optinforms_form2_disclaimer_size)) {
		$optinforms_form2_disclaimer_size = "11px";
	}
	return $optinforms_form2_disclaimer_size;
}

// FORM2: disclaimer font size options
function optinforms_get_form2_disclaimer_size_options() {
	global $optinforms_form2_disclaimer_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form2_disclaimer_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM2: default disclaimer color
function optinforms_form2_default_disclaimer_color() {
	global $optinforms_form2_disclaimer_color;
	if(empty($optinforms_form2_disclaimer_color)) {
		$optinforms_form2_disclaimer_color = "#ffffff";
	}
	return $optinforms_form2_disclaimer_color;
}

// FORM2: default width
function optinforms_form2_default_width() {
	global $optinforms_form2_width;
	if(empty($optinforms_form2_width)) {
		$optinforms_form2_width = 0;
	}
}

// FORM2: 100% width checked
function optinforms_form2_checked_width_100() {
	global $optinforms_form2_width;
	if($optinforms_form2_width == 0) {
		echo "checked=\"checked\"";
	}
}

// FORM2: fixed width checked
function optinforms_form2_checked_width_fixed() {
	global $optinforms_form2_width;
	if($optinforms_form2_width == 1) {
		echo "checked=\"checked\"";
	}
}

// FORM2: fixed width disabled if width is 100%
function optinforms_form2_disabled_width_pixels() {
	global $optinforms_form2_width;
	if($optinforms_form2_width == 0) {
		echo "disabled=\"disabled\"";
	}
}

// FORM1: default width fixed
function optinforms_form2_default_width_pixels() {
	global $optinforms_form2_width_pixels;
	if(empty($optinforms_form2_width_pixels)) {
		$optinforms_form2_width_pixels = "700";
	}
	return $optinforms_form2_width_pixels;
}

// FORM2: default width fixed
function optinforms_form2_get_width() {
	global $optinforms_form2_width;
	if($optinforms_form2_width == 0) {
		// do nothing
	}
	elseif($optinforms_form2_width == 1) {
		return "style=\"width:" . optinforms_form2_default_width_pixels() . "px\"";
	}
}

// FORM3: default background color
function optinforms_form3_default_background() {
	global $optinforms_form3_background;
	if(empty($optinforms_form3_background)) {
		$optinforms_form3_background = "#FFFFFF";
	}
	return $optinforms_form3_background;
}

// FORM3: default title
function optinforms_form3_default_title() {
	global $optinforms_form3_title;
	if(empty($optinforms_form3_title)) {
		$optinforms_form3_title = __('Did you enjoy this article?', 'optinforms');
	}
	return $optinforms_form3_title;
}

// FORM3: default title font
function optinforms_form3_default_title_font() {
	global $optinforms_form3_title_font;
	if(empty($optinforms_form3_title_font)) {
		$optinforms_form3_title_font = "Droid Serif";
	}
	return $optinforms_form3_title_font;
}

// FORM3: title font options
function optinforms_get_form3_title_font_options() {
	global $optinforms_form3_title_font;
	global $optinforms_included_fonts;
	foreach ($optinforms_included_fonts as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form3_title_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM3: default title font size
function optinforms_form3_default_title_size() {
	global $optinforms_form3_title_size;
	if(empty($optinforms_form3_title_size)) {
		$optinforms_form3_title_size = "28px";
	}
	return $optinforms_form3_title_size;
}

// FORM3: title font size options
function optinforms_get_form3_title_size_options() {
	global $optinforms_form3_title_size;
	foreach (range(10, 72) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form3_title_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM3: default title color
function optinforms_form3_default_title_color() {
	global $optinforms_form3_title_color;
	if(empty($optinforms_form3_title_color)) {
		$optinforms_form3_title_color = "#505050";
	}
	return $optinforms_form3_title_color;
}

// FORM3: default subtitle
function optinforms_form3_default_subtitle() {
	global $optinforms_form3_subtitle;
	if(empty($optinforms_form3_subtitle)) {
		$optinforms_form3_subtitle = __('Signup today and receive free updates straight in your inbox. We will never share or sell your email address.', 'optinforms');
	}
	return $optinforms_form3_subtitle;
}

// FORM3: default subtitle font
function optinforms_form3_default_subtitle_font() {
	global $optinforms_form3_subtitle_font;
	if(empty($optinforms_form3_subtitle_font)) {
		$optinforms_form3_subtitle_font = "Arial";
	}
	return $optinforms_form3_subtitle_font;
}

// FORM3: subtitle font options
function optinforms_get_form3_subtitle_font_options() {
	global $optinforms_form3_subtitle_font;
	global $optinforms_included_fonts;
	foreach ($optinforms_included_fonts as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form3_subtitle_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM3: default subtitle font size
function optinforms_form3_default_subtitle_size() {
	global $optinforms_form3_subtitle_size;
	if(empty($optinforms_form3_subtitle_size)) {
		$optinforms_form3_subtitle_size = "16px";
	}
	return $optinforms_form3_subtitle_size;
}

// FORM3: subtitle font size options
function optinforms_get_form3_subtitle_size_options() {
	global $optinforms_form3_subtitle_size;
	foreach (range(10, 24) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form3_subtitle_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM3: default subtitle color
function optinforms_form3_default_subtitle_color() {
	global $optinforms_form3_subtitle_color;
	if(empty($optinforms_form3_subtitle_color)) {
		$optinforms_form3_subtitle_color = "#000000";
	}
	return $optinforms_form3_subtitle_color;
}

// FORM3: default name field
function optinforms_form3_default_name_field() {
	global $optinforms_form3_name_field;
	if(empty($optinforms_form3_name_field)) {
		$optinforms_form3_name_field = __('Your Name', 'optinforms');
	}
	return $optinforms_form3_name_field;
}

// FORM3: default email field
function optinforms_form3_default_email_field() {
	global $optinforms_form3_email_field;
	if(empty($optinforms_form3_email_field)) {
		$optinforms_form3_email_field = __('Your Email Address', 'optinforms');
	}
	return $optinforms_form3_email_field;
}

// FORM3: default email fields font
function optinforms_form3_default_fields_font() {
	global $optinforms_form3_fields_font;
	if(empty($optinforms_form3_fields_font)) {
		$optinforms_form3_fields_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form3_fields_font;
}

// FORM3: email fields font options
function optinforms_get_form3_fields_font_options() {
	global $optinforms_form3_fields_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form3_fields_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM3: email fields font size
function optinforms_form3_default_fields_size() {
	global $optinforms_form3_fields_size;
	if(empty($optinforms_form3_fields_size)) {
		$optinforms_form3_fields_size = "12px";
	}
	return $optinforms_form3_fields_size;
}

// FORM3: email fields font size options
function optinforms_get_form3_fields_size_options() {
	global $optinforms_form3_fields_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form3_fields_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM3: default fields color
function optinforms_form3_default_fields_color() {
	global $optinforms_form3_fields_color;
	if(empty($optinforms_form3_fields_color)) {
		$optinforms_form3_fields_color = "#666666";
	}
	return $optinforms_form3_fields_color;
}

// FORM3: default button text
function optinforms_form3_default_button_text() {
	global $optinforms_form3_button_text;
	if(empty($optinforms_form3_button_text)) {
		$optinforms_form3_button_text = __('Sign Up Today!', 'optinforms');
	}
	return $optinforms_form3_button_text;
}

// FORM3: default button text font
function optinforms_form3_default_button_text_font() {
	global $optinforms_form3_button_text_font;
	if(empty($optinforms_form3_button_text_font)) {
		$optinforms_form3_button_text_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form3_button_text_font;
}

// FORM3: button text font options
function optinforms_get_form3_button_text_font_options() {
	global $optinforms_form3_button_text_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form3_button_text_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM3: button text font size
function optinforms_form3_default_button_text_size() {
	global $optinforms_form3_button_text_size;
	if(empty($optinforms_form3_button_text_size)) {
		$optinforms_form3_button_text_size = "18px";
	}
	return $optinforms_form3_button_text_size;
}

// FORM3: button text font size options
function optinforms_get_form3_button_text_size_options() {
	global $optinforms_form3_button_text_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form3_button_text_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM3: default button text color
function optinforms_form3_default_button_text_color() {
	global $optinforms_form3_button_text_color;
	if(empty($optinforms_form3_button_text_color)) {
		$optinforms_form3_button_text_color = "#FFFFFF";
	}
	return $optinforms_form3_button_text_color;
}

// FORM3: default button background color
function optinforms_form3_default_button_background() {
	global $optinforms_form3_button_background;
	if(empty($optinforms_form3_button_background)) {
		$optinforms_form3_button_background = "#49A3FE";
	}
	return $optinforms_form3_button_background;
}

// FORM3: default width
function optinforms_form3_default_width() {
	global $optinforms_form3_width;
	if(empty($optinforms_form3_width)) {
		$optinforms_form3_width = 0;
	}
}

// FORM3: 100% width checked
function optinforms_form3_checked_width_100() {
	global $optinforms_form3_width;
	if($optinforms_form3_width == 0) {
		echo "checked=\"checked\"";
	}
}

// FORM3: fixed width checked
function optinforms_form3_checked_width_fixed() {
	global $optinforms_form3_width;
	if($optinforms_form3_width == 1) {
		echo "checked=\"checked\"";
	}
}

// FORM3: fixed width disabled if width is 100%
function optinforms_form3_disabled_width_pixels() {
	global $optinforms_form3_width;
	if($optinforms_form3_width == 0) {
		echo "disabled=\"disabled\"";
	}
}

// FORM3: default width fixed
function optinforms_form3_default_width_pixels() {
	global $optinforms_form3_width_pixels;
	if(empty($optinforms_form3_width_pixels)) {
		$optinforms_form3_width_pixels = "700";
	}
	return $optinforms_form3_width_pixels;
}

// FORM3: default width fixed
function optinforms_form3_get_width() {
	global $optinforms_form3_width;
	if($optinforms_form3_width == 0) {
		// do nothing
	}
	elseif($optinforms_form3_width == 1) {
		return "style=\"width:" . optinforms_form3_default_width_pixels() . "px\"";
	}
}

// FORM4: default background color
function optinforms_form4_default_background() {
	global $optinforms_form4_background;
	if(empty($optinforms_form4_background)) {
		$optinforms_form4_background = "#FCFCFC";
	}
	return $optinforms_form4_background;
}

// FORM4: default border color
function optinforms_form4_default_border() {
	global $optinforms_form4_border;
	if(empty($optinforms_form4_border)) {
		$optinforms_form4_border = "#ECEAED";
	}
	return $optinforms_form4_border;
}

// FORM4: default title
function optinforms_form4_default_title() {
	global $optinforms_form4_title;
	if(empty($optinforms_form4_title)) {
		$optinforms_form4_title = __('Get the FREE eBook...', 'optinforms');
	}
	return $optinforms_form4_title;
}

// FORM4: default title font
function optinforms_form4_default_title_font() {
	global $optinforms_form4_title_font;
	if(empty($optinforms_form4_title_font)) {
		$optinforms_form4_title_font = "Arial";
	}
	return $optinforms_form4_title_font;
}

// FORM4: title font options
function optinforms_get_form4_title_font_options() {
	global $optinforms_form4_title_font;
	global $optinforms_included_fonts;
	foreach ($optinforms_included_fonts as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form4_title_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM4: default title font size
function optinforms_form4_default_title_size() {
	global $optinforms_form4_title_size;
	if(empty($optinforms_form4_title_size)) {
		$optinforms_form4_title_size = "24px";
	}
	return $optinforms_form4_title_size;
}

// FORM4: title font size options
function optinforms_get_form4_title_size_options() {
	global $optinforms_form4_title_size;
	foreach (range(10, 72) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form4_title_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM4: default title color
function optinforms_form4_default_title_color() {
	global $optinforms_form4_title_color;
	if(empty($optinforms_form4_title_color)) {
		$optinforms_form4_title_color = "#505050";
	}
	return $optinforms_form4_title_color;
}

// FORM4: default subtitle
function optinforms_form4_default_subtitle() {
	global $optinforms_form4_subtitle;
	if(empty($optinforms_form4_subtitle)) {
		$optinforms_form4_subtitle = __('Enter your email address and click on the Get Instant Access button.', 'optinforms');
	}
	return $optinforms_form4_subtitle;
}

// FORM4: default subtitle font
function optinforms_form4_default_subtitle_font() {
	global $optinforms_form4_subtitle_font;
	if(empty($optinforms_form4_subtitle_font)) {
		$optinforms_form4_subtitle_font = "Arial";
	}
	return $optinforms_form4_subtitle_font;
}

// FORM4: subtitle font options
function optinforms_get_form4_subtitle_font_options() {
	global $optinforms_form4_subtitle_font;
	global $optinforms_included_fonts;
	foreach ($optinforms_included_fonts as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form4_subtitle_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM4: default subtitle font size
function optinforms_form4_default_subtitle_size() {
	global $optinforms_form4_subtitle_size;
	if(empty($optinforms_form4_subtitle_size)) {
		$optinforms_form4_subtitle_size = "16px";
	}
	return $optinforms_form4_subtitle_size;
}

// FORM4: subtitle font size options
function optinforms_get_form4_subtitle_size_options() {
	global $optinforms_form4_subtitle_size;
	foreach (range(10, 72) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form4_subtitle_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM4: default subtitle color
function optinforms_form4_default_subtitle_color() {
	global $optinforms_form4_subtitle_color;
	if(empty($optinforms_form4_subtitle_color)) {
		$optinforms_form4_subtitle_color = "#505050";
	}
	return $optinforms_form4_subtitle_color;
}

// FORM4: default email field
function optinforms_form4_default_email_field() {
	global $optinforms_form4_email_field;
	if(empty($optinforms_form4_email_field)) {
		$optinforms_form4_email_field = __('Email Address', 'optinforms');
	}
	return $optinforms_form4_email_field;
}

// FORM4: default email fields font
function optinforms_form4_default_fields_font() {
	global $optinforms_form4_fields_font;
	if(empty($optinforms_form4_fields_font)) {
		$optinforms_form4_fields_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form4_fields_font;
}

// FORM4: email fields font options
function optinforms_get_form4_fields_font_options() {
	global $optinforms_form4_fields_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form4_fields_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM4: email fields font size
function optinforms_form4_default_fields_size() {
	global $optinforms_form4_fields_size;
	if(empty($optinforms_form4_fields_size)) {
		$optinforms_form4_fields_size = "16px";
	}
	return $optinforms_form4_fields_size;
}

// FORM4: email fields font size options
function optinforms_get_form4_fields_size_options() {
	global $optinforms_form4_fields_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form4_fields_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM4: default fields color
function optinforms_form4_default_fields_color() {
	global $optinforms_form4_fields_color;
	if(empty($optinforms_form4_fields_color)) {
		$optinforms_form4_fields_color = "#666666";
	}
	return $optinforms_form4_fields_color;
}

// FORM4: default button text
function optinforms_form4_default_button_text() {
	global $optinforms_form4_button_text;
	if(empty($optinforms_form4_button_text)) {
		$optinforms_form4_button_text = __('Get Instant Access', 'optinforms');
	}
	return $optinforms_form4_button_text;
}

// FORM4: default button text font
function optinforms_form4_default_button_text_font() {
	global $optinforms_form4_button_text_font;
	if(empty($optinforms_form4_button_text_font)) {
		$optinforms_form4_button_text_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form4_button_text_font;
}

// FORM4: button text font options
function optinforms_get_form4_button_text_font_options() {
	global $optinforms_form4_button_text_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form4_button_text_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM4: button text font size
function optinforms_form4_default_button_text_size() {
	global $optinforms_form4_button_text_size;
	if(empty($optinforms_form4_button_text_size)) {
		$optinforms_form4_button_text_size = "20px";
	}
	return $optinforms_form4_button_text_size;
}

// FORM4: button text font size options
function optinforms_get_form4_button_text_size_options() {
	global $optinforms_form4_button_text_size;
	foreach (range(10, 30) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form4_button_text_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM4: default button text color
function optinforms_form4_default_button_text_color() {
	global $optinforms_form4_button_text_color;
	if(empty($optinforms_form4_button_text_color)) {
		$optinforms_form4_button_text_color = "#1d629b";
	}
	return $optinforms_form4_button_text_color;
}

// FORM4: default button background color
function optinforms_form4_default_button_background() {
	global $optinforms_form4_button_background;
	if(empty($optinforms_form4_button_background)) {
		$optinforms_form4_button_background = "#faff5b";
	}
	return $optinforms_form4_button_background;
}

// FORM4: default disclaimer
function optinforms_form4_default_disclaimer() {
	global $optinforms_form4_disclaimer;
	if(empty($optinforms_form4_disclaimer)) {
		$optinforms_form4_disclaimer = __('We respect your privacy', 'optinforms');
	}
	return $optinforms_form4_disclaimer;
}

// FORM4: default disclaimer font
function optinforms_form4_default_disclaimer_font() {
	global $optinforms_form4_disclaimer_font;
	if(empty($optinforms_form4_disclaimer_font)) {
		$optinforms_form4_disclaimer_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form4_disclaimer_font;
}

// FORM4: disclaimer font options
function optinforms_get_form4_disclaimer_font_options() {
	global $optinforms_form4_disclaimer_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form4_disclaimer_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM4: disclaimer font size
function optinforms_form4_default_disclaimer_size() {
	global $optinforms_form4_disclaimer_size;
	if(empty($optinforms_form4_disclaimer_size)) {
		$optinforms_form4_disclaimer_size = "12px";
	}
	return $optinforms_form4_disclaimer_size;
}

// FORM4: disclaimer font size options
function optinforms_get_form4_disclaimer_size_options() {
	global $optinforms_form4_disclaimer_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form4_disclaimer_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM4: default disclaimer color
function optinforms_form4_default_disclaimer_color() {
	global $optinforms_form4_disclaimer_color;
	if(empty($optinforms_form4_disclaimer_color)) {
		$optinforms_form4_disclaimer_color = "#999999";
	}
	return $optinforms_form4_disclaimer_color;
}

// FORM4: default width
function optinforms_form4_default_width() {
	global $optinforms_form4_width;
	if(empty($optinforms_form4_width)) {
		$optinforms_form4_width = 0;
	}
}

// FORM4: 100% width checked
function optinforms_form4_checked_width_100() {
	global $optinforms_form4_width;
	if($optinforms_form4_width == 0) {
		echo "checked=\"checked\"";
	}
}

// FORM4: fixed width checked
function optinforms_form4_checked_width_fixed() {
	global $optinforms_form4_width;
	if($optinforms_form4_width == 1) {
		echo "checked=\"checked\"";
	}
}

// FORM4: fixed width disabled if width is 100%
function optinforms_form4_disabled_width_pixels() {
	global $optinforms_form4_width;
	if($optinforms_form4_width == 0) {
		echo "disabled=\"disabled\"";
	}
}

// FORM4: default width fixed
function optinforms_form4_default_width_pixels() {
	global $optinforms_form4_width_pixels;
	if(empty($optinforms_form4_width_pixels)) {
		$optinforms_form4_width_pixels = "700";
	}
	return $optinforms_form4_width_pixels;
}

// FORM4: default width fixed
function optinforms_form4_get_width() {
	global $optinforms_form4_width;
	if($optinforms_form4_width == 0) {
		// do nothing
	}
	elseif($optinforms_form4_width == 1) {
		return "style=\"width:" . optinforms_form4_default_width_pixels() . "px\"";
	}
}

// FORM5: default background color
function optinforms_form5_default_background() {
	global $optinforms_form5_background;
	if(empty($optinforms_form5_background)) {
		$optinforms_form5_background = "#333333";
	}
	return $optinforms_form5_background;
}

// FORM5: default title
function optinforms_form5_default_title() {
	global $optinforms_form5_title;
	if(empty($optinforms_form5_title)) {
		$optinforms_form5_title = __('JOIN OUR NEWSLETTER', 'optinforms');
	}
	return $optinforms_form5_title;
}

// FORM5: default title font
function optinforms_form5_default_title_font() {
	global $optinforms_form5_title_font;
	if(empty($optinforms_form5_title_font)) {
		$optinforms_form5_title_font = "News Cycle";
	}
	return $optinforms_form5_title_font;
}

// FORM5: title font options
function optinforms_get_form5_title_font_options() {
	global $optinforms_form5_title_font;
	global $optinforms_included_fonts;
	foreach ($optinforms_included_fonts as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form5_title_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM5: default title font size
function optinforms_form5_default_title_size() {
	global $optinforms_form5_title_size;
	if(empty($optinforms_form5_title_size)) {
		$optinforms_form5_title_size = "24px";
	}
	return $optinforms_form5_title_size;
}

// FORM5: title font size options
function optinforms_get_form5_title_size_options() {
	global $optinforms_form5_title_size;
	foreach (range(10, 72) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form5_title_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM5: default title color
function optinforms_form5_default_title_color() {
	global $optinforms_form5_title_color;
	if(empty($optinforms_form5_title_color)) {
		$optinforms_form5_title_color = "#fb6a13";
	}
	return $optinforms_form5_title_color;
}

// FORM5: default subtitle
function optinforms_form5_default_subtitle() {
	global $optinforms_form5_subtitle;
	if(empty($optinforms_form5_subtitle)) {
		$optinforms_form5_subtitle = __('Join over 3.000 visitors who are receiving our newsletter and learn how to optimize your blog for search engines, find free traffic, and monetize your website.', 'optinforms');
	}
	return $optinforms_form5_subtitle;
}

// FORM5: default subtitle font
function optinforms_form5_default_subtitle_font() {
	global $optinforms_form5_subtitle_font;
	if(empty($optinforms_form5_subtitle_font)) {
		$optinforms_form5_subtitle_font = "Georgia";
	}
	return $optinforms_form5_subtitle_font;
}

// FORM5: subtitle font options
function optinforms_get_form5_subtitle_font_options() {
	global $optinforms_form5_subtitle_font;
	global $optinforms_included_fonts;
	foreach ($optinforms_included_fonts as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form5_subtitle_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM5: default subtitle font size
function optinforms_form5_default_subtitle_size() {
	global $optinforms_form5_subtitle_size;
	if(empty($optinforms_form5_subtitle_size)) {
		$optinforms_form5_subtitle_size = "16px";
	}
	return $optinforms_form5_subtitle_size;
}

// FORM5: subtitle font size options
function optinforms_get_form5_subtitle_size_options() {
	global $optinforms_form5_subtitle_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form5_subtitle_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM5: default subtitle color
function optinforms_form5_default_subtitle_color() {
	global $optinforms_form5_subtitle_color;
	if(empty($optinforms_form5_subtitle_color)) {
		$optinforms_form5_subtitle_color = "#cccccc";
	}
	return $optinforms_form5_subtitle_color;
}

// FORM5: default name field
function optinforms_form5_default_name_field() {
	global $optinforms_form5_name_field;
	if(empty($optinforms_form5_name_field)) {
		$optinforms_form5_name_field = __('Enter Your Name', 'optinforms');
	}
	return $optinforms_form5_name_field;
}

// FORM5: default email field
function optinforms_form5_default_email_field() {
	global $optinforms_form5_email_field;
	if(empty($optinforms_form5_email_field)) {
		$optinforms_form5_email_field = __('Enter Your Email', 'optinforms');
	}
	return $optinforms_form5_email_field;
}

// FORM5: default email fields font
function optinforms_form5_default_fields_font() {
	global $optinforms_form5_fields_font;
	if(empty($optinforms_form5_fields_font)) {
		$optinforms_form5_fields_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form5_fields_font;
}

// FORM5: email fields font options
function optinforms_get_form5_fields_font_options() {
	global $optinforms_form5_fields_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form5_fields_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM5: email fields font size
function optinforms_form5_default_fields_size() {
	global $optinforms_form5_fields_size;
	if(empty($optinforms_form5_fields_size)) {
		$optinforms_form5_fields_size = "12px";
	}
	return $optinforms_form5_fields_size;
}

// FORM5: email fields font size options
function optinforms_get_form5_fields_size_options() {
	global $optinforms_form5_fields_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form5_fields_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM5: default fields color
function optinforms_form5_default_fields_color() {
	global $optinforms_form5_fields_color;
	if(empty($optinforms_form5_fields_color)) {
		$optinforms_form5_fields_color = "#000000";
	}
	return $optinforms_form5_fields_color;
}

// FORM5: default button text
function optinforms_form5_default_button_text() {
	global $optinforms_form5_button_text;
	if(empty($optinforms_form5_button_text)) {
		$optinforms_form5_button_text = __('SUBSCRIBE FOR FREE', 'optinforms');
	}
	return $optinforms_form5_button_text;
}

// FORM5: default button text font
function optinforms_form5_default_button_text_font() {
	global $optinforms_form5_button_text_font;
	if(empty($optinforms_form5_button_text_font)) {
		$optinforms_form5_button_text_font = "Arial, Helvetica, sans-serif";
	}
	return $optinforms_form5_button_text_font;
}

// FORM5: button text font options
function optinforms_get_form5_button_text_font_options() {
	global $optinforms_form5_button_text_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form5_button_text_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM5: button text font size
function optinforms_form5_default_button_text_size() {
	global $optinforms_form5_button_text_size;
	if(empty($optinforms_form5_button_text_size)) {
		$optinforms_form5_button_text_size = "16px";
	}
	return $optinforms_form5_button_text_size;
}

// FORM5: button text font size options
function optinforms_get_form5_button_text_size_options() {
	global $optinforms_form5_button_text_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form5_button_text_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM5: default button text color
function optinforms_form5_default_button_text_color() {
	global $optinforms_form5_button_text_color;
	if(empty($optinforms_form5_button_text_color)) {
		$optinforms_form5_button_text_color = "#FFFFFF";
	}
	return $optinforms_form5_button_text_color;
}

// FORM5: default button background color
function optinforms_form5_default_button_background() {
	global $optinforms_form5_button_background;
	if(empty($optinforms_form5_button_background)) {
		$optinforms_form5_button_background = "#fb6a13";
	}
	return $optinforms_form5_button_background;
}

// FORM5: default disclaimer
function optinforms_form5_default_disclaimer() {
	global $optinforms_form5_disclaimer;
	if(empty($optinforms_form5_disclaimer)) {
		$optinforms_form5_disclaimer = __('We hate spam. Your email address will not be sold or shared with anyone else.', 'optinforms');
	}
	return $optinforms_form5_disclaimer;
}

// FORM5: default disclaimer font
function optinforms_form5_default_disclaimer_font() {
	global $optinforms_form5_disclaimer_font;
	if(empty($optinforms_form5_disclaimer_font)) {
		$optinforms_form5_disclaimer_font = "Georgia, Times New Roman, Times, serif";
	}
	return $optinforms_form5_disclaimer_font;
}

// FORM5: disclaimer font options
function optinforms_get_form5_disclaimer_font_options() {
	global $optinforms_form5_disclaimer_font;
	global $optinforms_included_fonts_simple;
	foreach ($optinforms_included_fonts_simple as $key) {
		echo "<option value=\"" . $key . "\"";
		if($optinforms_form5_disclaimer_font == $key){
			echo "selected=selected";
		}
		echo ">" . $key . "</option>";
	}
}

// FORM5: disclaimer font size
function optinforms_form5_default_disclaimer_size() {
	global $optinforms_form5_disclaimer_size;
	if(empty($optinforms_form5_disclaimer_size)) {
		$optinforms_form5_disclaimer_size = "14px";
	}
	return $optinforms_form5_disclaimer_size;
}

// FORM5: disclaimer font size options
function optinforms_get_form5_disclaimer_size_options() {
	global $optinforms_form5_disclaimer_size;
	foreach (range(10, 20) as $number) {
		echo "<option value=\"" . $number . "px\"";
		if($optinforms_form5_disclaimer_size == $number . "px") {
			echo "selected=selected";
		}
		echo">" . $number . "px</option>";
	}
}

// FORM5: default disclaimer color
function optinforms_form5_default_disclaimer_color() {
	global $optinforms_form5_disclaimer_color;
	if(empty($optinforms_form5_disclaimer_color)) {
		$optinforms_form5_disclaimer_color = "#727272";
	}
	return $optinforms_form5_disclaimer_color;
}

// FORM5: default width
function optinforms_form5_default_width() {
	global $optinforms_form5_width;
	if(empty($optinforms_form5_width)) {
		$optinforms_form5_width = 0;
	}
}

// FORM5: 100% width checked
function optinforms_form5_checked_width_100() {
	global $optinforms_form5_width;
	if($optinforms_form5_width == 0) {
		echo "checked=\"checked\"";
	}
}

// FORM5: fixed width checked
function optinforms_form5_checked_width_fixed() {
	global $optinforms_form5_width;
	if($optinforms_form5_width == 1) {
		echo "checked=\"checked\"";
	}
}

// FORM5: fixed width disabled if width is 100%
function optinforms_form5_disabled_width_pixels() {
	global $optinforms_form5_width;
	if($optinforms_form5_width == 0) {
		echo "disabled=\"disabled\"";
	}
}

// FORM5: default width fixed
function optinforms_form5_default_width_pixels() {
	global $optinforms_form5_width_pixels;
	if(empty($optinforms_form5_width_pixels)) {
		$optinforms_form5_width_pixels = "700";
	}
	return $optinforms_form5_width_pixels;
}

// FORM5: default width fixed
function optinforms_form5_get_width() {
	global $optinforms_form5_width;
	if($optinforms_form5_width == 0) {
		// do nothing
	}
	elseif($optinforms_form5_width == 1) {
		return "style=\"width:" . optinforms_form5_default_width_pixels() . "px\"";
	}
}

// Show us some love :)
function optinforms_powered_by() {
	global $optinforms_powered_by;
	if($optinforms_powered_by == 0) {
		// do nothing
	}
	elseif($optinforms_powered_by == 1) {
		return "<div id=\"optinforms-powered-by\">Powered by <a href=\"http://www.codeleon.com/wordpress/plugins/optin-forms\" target=\"_blank\">Optin Forms</a></div><!--optinforms-powered-by-->";
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
	if($optinforms_form_design == 'optinforms_form_design_option1' || empty($optinforms_form_design)) {
		global $optinforms_form1_title_font, $optinforms_form1_subtitle_font;
		return optinforms_form1_default_title_font() . "|" .optinforms_form1_default_subtitle_font();
	}
	elseif($optinforms_form_design == 'optinforms_form_design_option2') {
		global $optinforms_form2_title_font;
		return optinforms_form2_default_title_font();
	}
	elseif($optinforms_form_design == 'optinforms_form_design_option3') {
		global $optinforms_form3_title_font, $optinforms_form3_subtitle_font;
		return optinforms_form3_default_title_font() . "|" .optinforms_form3_default_subtitle_font();
	}
	elseif($optinforms_form_design == 'optinforms_form_design_option4') {
		global $optinforms_form4_title_font, $optinforms_form4_subtitle_font;
		return optinforms_form4_default_title_font() . "|" .optinforms_form4_default_subtitle_font();
	}
	elseif($optinforms_form_design == 'optinforms_form_design_option5') {
		global $optinforms_form5_title_font, $optinforms_form5_subtitle_font;
		return optinforms_form5_default_title_font() . "|" .optinforms_form5_default_subtitle_font();
	}
}

// Now include only these fonts to optimize load time
function optinforms_used_fonts() {
	$optinforms_google_url = "http://fonts.googleapis.com/css?family=";
	return $optinforms_google_url.optinforms_get_used_fonts();

}

?>