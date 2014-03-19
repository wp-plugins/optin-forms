<?php 
/*
Plugin Name: Optin Forms
Plugin URI: http://www.codeleon.com/wordpress/plugins/optin-forms
Description: Create beautiful optin forms with ease. Choose a form design, customize it, and add your form to your blog with a simple mouse-click.
Author: Codeleon
Version: 1.0
Author URI: http://www.codeleon.com
License: Free
Text Domain: optinforms
Domain Path:   /languages/
*/

// Add translation to plugin
function optinforms_init() {
	$plugin_dir = basename(dirname(__FILE__));
	load_plugin_textdomain( 'optinforms', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action('plugins_loaded', 'optinforms_init');

// Allow for translation of plugin description
$plugin_header_translate = array(
	__('Create beautiful optin forms with ease. Choose a form design, customize it, and add your form to your blog with a simple mouse-click.', 'optinforms'),
);

// Add our menu to WordPress
add_action( 'admin_menu', 'optinforms_menu' );

function optinforms_menu() 
{
	$submenu = add_menu_page(__('Optin Forms','menu-test'), __('Optin Forms','menu-test'), 'manage_options', 'optinforms', 'optinforms_main_page', plugins_url('optin-forms/images/icon.png'), 31);
	
	// * We want our JS and CSS loaded on our admin pages only, so let's just load them for now
	add_action( 'load-' . $submenu, 'load_optinforms_admin_scripts' );
}

// Enqueue our CSS and JS on WP Video Coach admin pages only
function load_optinforms_admin_scripts() {
	add_action( 'admin_enqueue_scripts', 'optinforms_admin_scripts' );
}

// Include our registration settings
include( plugin_dir_path( __FILE__ ) . 'includes/register-settings.php');
// Include our regular functions
include( plugin_dir_path( __FILE__ ) . 'includes/functions.php');
// Include our form functions
include( plugin_dir_path( __FILE__ ) . 'includes/functions-forms.php');


// Add our CSS and JS to admin head, but just for our pages (see load_optinforms_admin_scripts above!)
function optinforms_admin_scripts()
{
	wp_enqueue_style('optinforms-admin-stylesheet', plugins_url('/css/optinforms-admin.css', __FILE__ ), array('googleFont'));
	wp_enqueue_script('tabcontent', plugins_url('/js/tabcontent.js', __FILE__ ));
	wp_enqueue_style('wp-color-picker');
	wp_enqueue_script('optinforms-color', plugins_url('/js/optinforms-color.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
	wp_enqueue_script('placeholder', plugins_url('/js/placeholder.js', __FILE__ ));
	wp_register_style('googleFont', 'http://fonts.googleapis.com/css?family=Share+Tech|Droid+Sans|Lobster|Fenix|Unkempt|Flavors|Viga|Damion|Oleo+Script|Racing+Sans+One|Nixie+One|Fredoka+One|Open+Sans|Overlock+SC|Bubbler+One|Contrail+One|Gochi+Hand|Roboto+Condensed|Russo+One|Cinzel+Decorative|News+Cycle|Marcellus+SC|Chewy|Quicksand|Sanchez|Signika+Negative|Gloria+Hallelujah|Grand+Hotel|Droid+Serif|Englebert|Oswald|Pacifico|Titan+One|Shadows+Into+Light|Dancing+Script|Luckiest+Guy|Parisienne|Coming+Soon|Baumans|Belgrano');
}

// Enqueue our form CSS on front end
	add_action( 'wp_enqueue_scripts', 'optinforms_scripts' );


// Add our CSS and JS to admin head, but just for our pages (see load_optinforms_admin_scripts above!)
function optinforms_scripts()
{
	global $optinforms_form_design;
	wp_enqueue_style('optinforms-stylesheet', plugins_url('/css/optinforms.css', __FILE__ ), array('googleFont'));
	wp_enqueue_script('placeholder', plugins_url('/js/placeholder.js', __FILE__ ));
	wp_register_style('googleFont', optinforms_used_fonts());
}

// Make sure user can manage options
function optinforms_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
?>

<?php }

function optinforms_main_page() {
	
	{ ?>
    <div class="wrap">
    	<div id="icon-optinforms" class="icon32">
        </div><!--icon-32-->
        
		<h2 class="title"><?php echo optinforms_menu_tabs(); ?></h2>
    </div><!--wrap-->

        <?php if( isset($_GET['settings-updated']) ) { ?>
    		<div id="message" class="updated">
        		<p><strong><?php _e('Settings updated.') ?></strong></p>
    		</div>
		<?php } ?>
    
    <div id="optinforms">
      	<form method="post" action="options.php" id="frm1">
        <?php settings_fields( 'optinforms-settings-group' ); ?>
        <div id="optinforms-email-solution-tab" class="tabcontent">
        	<div class="optinforms-container-left">
                <div class="optiongroup">
                    <h3><?php echo __('Email Solution', 'optinforms'); ?></h3>
                    <p><?php echo __('Select your email solution and configure the required fields.', 'optinforms'); ?></p>
                    <div class="optionleft">
                        <label for="optinforms_email_solution" class="nopointer"><?php echo __('My email solution is', 'optinforms'); ?></label>
                    </div><!--optionleft-->
                    <div class="optionmiddle">
                        <select name="optinforms_email_solution" id="optinforms_email_solution">
                            <option value="optinforms_email_solution_option1" <?php if (get_option('optinforms_email_solution')== 'optinforms_email_solution_option1') echo 'selected="selected"'; ?>>aWeber</option>
                            <option value="optinforms_email_solution_option2" <?php if (get_option('optinforms_email_solution')== 'optinforms_email_solution_option2') echo 'selected="selected"'; ?>>iContact</option>
                            <option value="optinforms_email_solution_option3" <?php if (get_option('optinforms_email_solution')== 'optinforms_email_solution_option3') echo 'selected="selected"'; ?>>MailChimp</option>
                            <option value="optinforms_email_solution_option4" <?php if (get_option('optinforms_email_solution')== 'optinforms_email_solution_option4') echo 'selected="selected"'; ?>>GetResponse</option>
                            <option value="optinforms_email_solution_option5" <?php if (get_option('optinforms_email_solution')== 'optinforms_email_solution_option5') echo 'selected="selected"'; ?>>Mad Mimi</option>
                            <option value="optinforms_email_solution_option6" <?php if (get_option('optinforms_email_solution')== 'optinforms_email_solution_option6') echo 'selected="selected"'; ?>>Interspire Email Marketer</option>
                        </select>
                        <script type="text/javascript">
                            document.getElementById('optinforms_email_solution').onchange = function() {
                                var i = 1;
                                var myDiv = document.getElementById("optinforms_email_solution_option" + i);
                                while(myDiv) {
                                    myDiv.style.display = 'none';
                                    myDiv = document.getElementById("optinforms_email_solution_option" + ++i);
                                }
                            document.getElementById(this.value).style.display = 'block';
                        };
                        </script>
                    </div><!--optionmiddle-->
                    <div class="clear"></div>
        
                </div><!--optiongroup-->
                
                <div class="optiongroup">
                    <div id="optinforms_email_solution_option1" <?php if (get_option('optinforms_email_solution')== '' || get_option('optinforms_email_solution')== 'optinforms_email_solution_option1') echo 'style="display:block;"'; ?>>
                    	<!--<p class="optinforms-integration"><a href="#"></?php echo __('Learn how to integrate aWeber: watch the short video', 'optinforms'); ?></a></p>-->
                        <div class="optiongroup">
                            <div class="optionleft">
                                <label><a onclick="optinforms_explain_aweber()"><span class="explain">?</span></a></label> <label for="optinforms_form_list_name_aweber" class="nopointer"><?php echo __('List name', 'optinforms'); ?> <span class="required">*</span></label>
                            </div><!--optionleft-->
                            <div class="optionmiddle">
                                <input type="text" id="optinforms_form_list_name_aweber" name="optinforms_form_list_name_aweber" value="<?php echo optinforms_form_list_name_aweber(); ?>" />
                            </div><!--optionmiddle-->
                            <div class="clear"></div>
                        </div><!--optiongroup-->
                        
                        <script type="text/javascript">
                            function optinforms_explain_aweber() {
                                // Get the DOM reference
                                var contentId = document.getElementById("optinforms-explain-aweber");
                                // Toggle 
                                contentId.style.display == "block" ? contentId.style.display = "none" : 
                                contentId.style.display = "block"; 
                            }
                        </script>
                        <div id="optinforms-explain-aweber" style="display:none;">
                            <div class="optinforms-step">
                            	<h4><?php echo __('How to find your list name', 'optinforms'); ?></h4>
                                <p><span class="step">1</span> <?php echo __('Log in to your aWeber account', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-aweber-001.png" class="step-image" />
                                <p><span class="step">2</span> <?php echo __('Click on My Lists in the navigation menu', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-aweber-002.png" class="step-image" />
                                <p><span class="step">3</span> <?php echo __('Click on List Settings from the submenu options', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-aweber-003.png" class="step-image" />
                                <p><span class="step">4</span> <?php echo __('You will find your list name in the List Name field', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-aweber-004.png" class="step-image" />
                            </div><!--optinforms-step-->
                        </div><!--optinforms-explain-aweber-->
                        
                        <div class="optiongroup">
                            <div class="optionleft">
                                <label><a onclick="optinforms_explain_redirect_aweber()"><span class="explain">?</span></a></label> <label for="optinforms_form_redirect_aweber" class="nopointer"><?php echo __('Redirect URL', 'optinforms'); ?></label>
                            </div><!--optionleft-->
                            <div class="optionmiddle">
                                <input type="text" id="optinforms_form_redirect_aweber" name="optinforms_form_redirect_aweber" value="<?php echo optinforms_form_redirect_aweber(); ?>" />
                            </div><!--optionmiddle-->
                            <div class="clear"></div>
                        </div><!--optiongroup-->
                        
                        <script type="text/javascript">
                            function optinforms_explain_redirect_aweber() {
                                // Get the DOM reference
                                var contentId = document.getElementById("optinforms-explain-redirect-aweber");
                                // Toggle 
                                contentId.style.display == "block" ? contentId.style.display = "none" : 
                                contentId.style.display = "block"; 
                            }
                        </script>
                        <div id="optinforms-explain-redirect-aweber" style="display:none;">
                            <div class="optinforms-help">
                                <p><?php echo __('Enter the URL of the page where your visitors will be taken to, once they successfully subscribe.', 'optinforms'); ?> <?php echo __('If you leave this field blank, the default aWeber message will be used.', 'optinforms'); ?></p>
                            </div><!--optinforms-help-->
                        </div><!--optinforms-explain-redirect-aweber-->
                        
                        
                    </div><!--optinforms_email_solution_option1-->
                    <div id="optinforms_email_solution_option2" <?php if (get_option('optinforms_email_solution')== 'optinforms_email_solution_option2') echo 'style="display:block;"'; ?>>
                        <!--<p class="optinforms-integration"></?php echo __('Learn how to integrate iContact: watch the short video', 'optinforms'); ?></p>-->
                        <div class="optiongroup">
                            <div class="optionleft">
                                <label><a onclick="optinforms_explain_icontact()"><span class="explain">?</span></a></label> <label for="optinforms_form_listid_icontact" class="nopointer"><?php echo __('List ID', 'optinforms'); ?> <span class="required">*</span></label>
                            </div><!--optionleft-->
                            <div class="optionmiddle">
                                <input type="text" id="optinforms_form_listid_icontact" name="optinforms_form_listid_icontact" value="<?php echo optinforms_form_listid_icontact(); ?>" />
                            </div><!--optionmiddle-->
                            <div class="clear"></div>
                        </div><!--optiongroup-->
                        
                        <div class="optiongroup">
                            <div class="optionleft">
                                <label><a onclick="optinforms_explain_icontact()"><span class="explain">?</span></a></label> <label for="optinforms_form_specialid_icontact" class="nopointer"><?php echo __('Special ID', 'optinforms'); ?> <span class="required">*</span></label>
                            </div><!--optionleft-->
                            <div class="optionmiddle">
                                <input type="text" id="optinforms_form_specialid_icontact" name="optinforms_form_specialid_icontact" value="<?php echo optinforms_form_specialid_icontact(); ?>" />
                            </div><!--optionmiddle-->
                            <div class="clear"></div>
                        </div><!--optiongroup-->
                        
                        <div class="optiongroup">
                            <div class="optionleft">
                                <label><a onclick="optinforms_explain_icontact()"><span class="explain">?</span></a></label> <label for="optinforms_form_clientid_icontact" class="nopointer"><?php echo __('Client ID', 'optinforms'); ?> <span class="required">*</span></label>
                            </div><!--optionleft-->
                            <div class="optionmiddle">
                                <input type="text" id="optinforms_form_clientid_icontact" name="optinforms_form_clientid_icontact" value="<?php echo optinforms_form_clientid_icontact(); ?>" />
                            </div><!--optionmiddle-->
                            <div class="clear"></div>
                        </div><!--optiongroup-->
                        
                        <script type="text/javascript">
                            function optinforms_explain_icontact() {
                                // Get the DOM reference
                                var contentId = document.getElementById("optinforms-explain-icontact");
                                // Toggle 
                                contentId.style.display == "block" ? contentId.style.display = "none" : 
                                contentId.style.display = "block"; 
                            }
                        </script>
                        <div id="optinforms-explain-icontact" style="display:none;">
                            <div class="optinforms-step">
                            	<h4><?php echo __('How to find your list ID, special ID and client ID values', 'optinforms'); ?></h4>
                                <p><span class="step">1</span> <?php echo __('Log in to your iContact account', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-icontact-001.png" class="step-image" />
                                <p><span class="step">2</span> <?php echo __('Click on Contacts in the navigation menu', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-icontact-002.png" class="step-image" />
                                <p><span class="step">3</span> <?php echo __('Click on Sign-up Forms in the submenu', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-icontact-003.png" class="step-image" />
                                <p><span class="step">4</span> <?php echo __('Click on the Create HTML Form button', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-icontact-004.png" class="step-image" />
                                <p><span class="step">5</span> <?php echo __('Click on Next', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-icontact-005.png" class="step-image" />
                                <p><span class="step">6</span> <?php echo __('Name your form, assign it to a list and include the First Name field', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-icontact-006.png" class="step-image" />
                                <p><span class="step">7</span> <?php echo __('Click on Save', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-icontact-007.png" class="step-image" />
                                <p><span class="step">8</span> <?php echo __('Click on the View HTML link', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-icontact-008.png" class="step-image" />
                                <p><span class="step">9</span> <?php echo __('Scroll down to the Manual Sign-up Form and copy the values of listid, specialid and clientid fields', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-icontact-009.png" class="step-image" />
                            </div><!--optinforms-step-->
                        </div><!--optinforms-explain-icontact-->
                        <div class="optiongroup">
                            <div class="optionleft">
                                <label><a onclick="optinforms_explain_redirect_icontact()"><span class="explain">?</span></a></label> <label for="optinforms_form_redirect_icontact" class="nopointer"><?php echo __('Redirect page URL', 'optinforms'); ?></label>
                            </div><!--optionleft-->
                            <div class="optionmiddle">
                                <input type="text" id="optinforms_form_redirect_icontact" name="optinforms_form_redirect_icontact" value="<?php echo optinforms_form_redirect_icontact(); ?>" />
                            </div><!--optionmiddle-->
                            <div class="clear"></div>
                        </div><!--optiongroup-->
                        
                        <script type="text/javascript">
                            function optinforms_explain_redirect_icontact() {
                                // Get the DOM reference
                                var contentId = document.getElementById("optinforms-explain-redirect-icontact");
                                // Toggle 
                                contentId.style.display == "block" ? contentId.style.display = "none" : 
                                contentId.style.display = "block"; 
                            }
                        </script>
                        <div id="optinforms-explain-redirect-icontact" style="display:none;">
                            <div class="optinforms-help">
                                <p><?php echo __('Enter the URL of the page where your visitors will be taken to, once they successfully subscribe.', 'optinforms'); ?> <?php echo __('If you leave this field blank, the default iContact message will be used.', 'optinforms'); ?></p>
                            </div><!--optinforms-help-->
                        </div><!--optinforms-explain-redirect-icontact-->
                        
                        <div class="optiongroup">
                            <div class="optionleft">
                                <label><a onclick="optinforms_explain_error_icontact()"><span class="explain">?</span></a></label> <label for="optinforms_form_error_icontact" class="nopointer"><?php echo __('Error page URL', 'optinforms'); ?></label>
                            </div><!--optionleft-->
                            <div class="optionmiddle">
                                <input type="text" id="optinforms_form_error_icontact" name="optinforms_form_error_icontact" value="<?php echo optinforms_form_error_icontact(); ?>" />
                            </div><!--optionmiddle-->
                            <div class="clear"></div>
                        </div><!--optiongroup-->
                        
                        <script type="text/javascript">
                            function optinforms_explain_error_icontact() {
                                // Get the DOM reference
                                var contentId = document.getElementById("optinforms-explain-error-icontact");
                                // Toggle 
                                contentId.style.display == "block" ? contentId.style.display = "none" : 
                                contentId.style.display = "block"; 
                            }
                        </script>
                        <div id="optinforms-explain-error-icontact" style="display:none;">
                            <div class="optinforms-help">
                                <p><?php echo __('Enter the URL of the page where your visitors will be taken to, if there are any errors.', 'optinforms'); ?> <?php echo __('If you leave this field blank, the default iContact error message will be used.', 'optinforms'); ?></p>
                            </div><!--optinforms-help-->
                        </div><!--optinforms-explain-error-icontact-->
                        
                    </div><!--optinforms_email_solution_option2-->
                    <div id="optinforms_email_solution_option3" <?php if (get_option('optinforms_email_solution')== 'optinforms_email_solution_option3') echo 'style="display:block;"'; ?>>
                    	<!--<p class="optinforms-integration"></?php echo __('Learn how to integrate MailChimp: watch the short video', 'optinforms'); ?></p>-->
                        <div class="optiongroup">
                            <div class="optionleft">
                                <label><a onclick="optinforms_explain_mailchimp()"><span class="explain">?</span></a></label> <label for="optinforms_form_action_mailchimp" class="nopointer"><?php echo __('Form action URL', 'optinforms'); ?> <span class="required">*</span></label>
                            </div><!--optionleft-->
                            <div class="optionmiddle">
                                <input type="text" id="optinforms_form_action_mailchimp" name="optinforms_form_action_mailchimp" value="<?php echo optinforms_form_action_mailchimp(); ?>" />
                            </div><!--optionmiddle-->
                            <div class="clear"></div>
                        </div><!--optiongroup-->
                        
                        <script type="text/javascript">
                            function optinforms_explain_mailchimp() {
                                // Get the DOM reference
                                var contentId = document.getElementById("optinforms-explain-mailchimp");
                                // Toggle 
                                contentId.style.display == "block" ? contentId.style.display = "none" : 
                                contentId.style.display = "block"; 
                            }
                        </script>
                        <div id="optinforms-explain-mailchimp" style="display:none;">
                            <div class="optinforms-step">
                            	<h4><?php echo __('How to find your form action URL', 'optinforms'); ?></h4>
                                <p><span class="step">1</span> <?php echo __('Log in to your MailChimp account', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-mailchimp-001.png" class="step-image" />
                                <p><span class="step">2</span> <?php echo __('Click on Lists in the navigation menu', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-mailchimp-002.png" class="step-image" />
                                <p><span class="step">3</span> <?php echo __('Click on the arrow next to the list you wish to use and click on Signup forms', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-mailchimp-003.png" class="step-image" />
                                <p><span class="step">4</span> <?php echo __('Select Embedded forms', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-mailchimp-004.png" class="step-image" />
                                <p><span class="step">5</span> <?php echo __('Select the Naked form', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-mailchimp-005.png" class="step-image" />
                                <p><span class="step">6</span> <?php echo __('You will find the form action URL in the HTML box', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-mailchimp-006.png" class="step-image" />
                            </div><!--optinforms-step-->
                        </div><!--optinforms-explain-mailchimp-->
                    </div><!--optinforms_email_solution_option3-->
                    <div id="optinforms_email_solution_option4" <?php if (get_option('optinforms_email_solution')== 'optinforms_email_solution_option4') echo 'style="display:block;"'; ?>>
                    	<!--<p class="optinforms-integration"></?php echo __('Learn how to integrate GetResponse: watch the short video', 'optinforms'); ?></p>-->
                        <div class="optiongroup">
                            <div class="optionleft">
                                <label><a onclick="optinforms_explain_getresponse()"><span class="explain">?</span></a></label> <label for="optinforms_form_webformid_getresponse" class="nopointer"><?php echo __('Webform ID', 'optinforms'); ?> <span class="required">*</span></label>
                            </div><!--optionleft-->
                            <div class="optionmiddle">
                                <input type="text" id="optinforms_form_webformid_getresponse" name="optinforms_form_webformid_getresponse" value="<?php echo optinforms_form_webformid_getresponse(); ?>" />
                            </div><!--optionmiddle-->
                            <div class="clear"></div>
                        </div><!--optiongroup-->
                        
                        <script type="text/javascript">
                            function optinforms_explain_getresponse() {
                                // Get the DOM reference
                                var contentId = document.getElementById("optinforms-explain-getresponse");
                                // Toggle 
                                contentId.style.display == "block" ? contentId.style.display = "none" : 
                                contentId.style.display = "block"; 
                            }
                        </script>
                        <div id="optinforms-explain-getresponse" style="display:none;">
                            <div class="optinforms-step">
                            	<h4><?php echo __('How to find your webform ID value', 'optinforms'); ?></h4>
                                <p><span class="step">1</span> <?php echo __('Log in to your GetResponse account', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-getresponse-001.png" class="step-image" />
                                <p><span class="step">2</span> <?php echo __('Click on Web Forms in the navigation menu and click on Create New', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-getresponse-002.png" class="step-image" />
                                <p><span class="step">3</span> <?php echo __('Click on Next Step at the bottom of the page', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-getresponse-003.png" class="step-image" />
                                <p><span class="step">4</span> <?php echo __('Click on Next Step at the bottom of the page', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-getresponse-003.png" class="step-image" />
                                <p><span class="step">5</span> <?php echo __('Click on the Show HTML Code tab', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-getresponse-005.png" class="step-image" />
                                <p><span class="step">6</span> <?php echo __('Scroll down and find the value of the webform_id field', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-getresponse-006.png" class="step-image" />
                            </div><!--optinforms-step-->
                        </div><!--optinforms-explain-getresponse-->
                    
                    </div><!--optinforms_email_solution_option4-->
                    <div id="optinforms_email_solution_option5" <?php if (get_option('optinforms_email_solution')== 'optinforms_email_solution_option5') echo 'style="display:block;"'; ?>>
                    	<!--<p class="optinforms-integration"></?php echo __('Learn how to integrate Mad Mimi: watch the short video', 'optinforms'); ?></p>-->
                        <div class="optiongroup">
                            <div class="optionleft">
                                <label><a onclick="optinforms_explain_madmimi()"><span class="explain">?</span></a></label> <label for="optinforms_form_action_madmimi" class="nopointer"><?php echo __('Form action URL', 'optinforms'); ?> <span class="required">*</span></label>
                            </div><!--optionleft-->
                            <div class="optionmiddle">
                                <input type="text" id="optinforms_form_action_madmimi" name="optinforms_form_action_madmimi" value="<?php echo optinforms_form_action_madmimi(); ?>" />
                            </div><!--optionmiddle-->
                            <div class="clear"></div>
                        </div><!--optiongroup-->
                        
                        <script type="text/javascript">
                            function optinforms_explain_madmimi() {
                                // Get the DOM reference
                                var contentId = document.getElementById("optinforms-explain-madmimi");
                                // Toggle 
                                contentId.style.display == "block" ? contentId.style.display = "none" : 
                                contentId.style.display = "block"; 
                            }
                        </script>
                        <div id="optinforms-explain-madmimi" style="display:none;">
                            <div class="optinforms-step">
                            	<h4><?php echo __('How to find your form action URL', 'optinforms'); ?></h4>
                                <p><span class="step">1</span> <?php echo __('Log in to your Mad Mimi account', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-madmimi-001.png" class="step-image" />
                                <p><span class="step">2</span> <?php echo __('Click on Webform', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-madmimi-002.png" class="step-image" />
                                <p><span class="step">3</span> <?php echo __('Click on the Add a Webform button', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-madmimi-003.png" class="step-image" />
                                <p><span class="step">4</span> <?php echo __('Name your form, assign it to a list and include the Name field', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-madmimi-004.png" class="step-image" />
                                <p><span class="step">5</span> <?php echo __('Click on the Embed button', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-madmimi-005.png" class="step-image" />
                                <p><span class="step">6</span> <?php echo __('Click on the Plain Embed tab', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-madmimi-006.png" class="step-image" />
                                <p><span class="step">7</span> <?php echo __('You will find the form action URL in the HTML box', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-madmimi-007.png" class="step-image" />
                            </div><!--optinforms-step-->
                        </div><!--optinforms-explain-madmimi-->
                    </div><!--optinforms_email_solution_option5-->
                    <div id="optinforms_email_solution_option6" <?php if (get_option('optinforms_email_solution')== 'optinforms_email_solution_option6') echo 'style="display:block;"'; ?>>
                    	<!--<p class="optinforms-integration"></?php echo __('Learn how to integrate Interspire Email Marketer: watch the short video', 'optinforms'); ?></p>-->
                        <div class="optiongroup">
                            <div class="optionleft">
                                <label><a onclick="optinforms_explain_interspire()"><span class="explain">?</span></a></label> <label for="optinforms_form_action_interspire" class="nopointer"><?php echo __('Form action URL', 'optinforms'); ?> <span class="required">*</span></label>
                            </div><!--optionleft-->
                            <div class="optionmiddle">
                                <input type="text" id="optinforms_form_action_interspire" name="optinforms_form_action_interspire" value="<?php echo optinforms_form_action_interspire(); ?>" />
                            </div><!--optionmiddle-->
                            <div class="clear"></div>
                        </div><!--optiongroup-->
                        
                        <script type="text/javascript">
                            function optinforms_explain_interspire() {
                                // Get the DOM reference
                                var contentId = document.getElementById("optinforms-explain-interspire");
                                // Toggle 
                                contentId.style.display == "block" ? contentId.style.display = "none" : 
                                contentId.style.display = "block"; 
                            }
                        </script>
                        <div id="optinforms-explain-interspire" style="display:none;">
                            <div class="optinforms-step">
                            	<h4><?php echo __('How to find your form action URL', 'optinforms'); ?></h4>
                                <p><span class="step">1</span> <?php echo __('Log in to your Interspire Email Marketer administration panel', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-interspire-001.png" class="step-image" />
                                <p><span class="step">2</span> <?php echo __('Click on Forms in the navigation menu', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-interspire-002.png" class="step-image" />
                                <p><span class="step">3</span> <?php echo __('Click on Create a Website Form from the submenu options', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-interspire-003.png" class="step-image" />
                                <p><span class="step">4</span> <?php echo __('Make sure to uncheck CAPTCHA form security', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-interspire-004.png" class="step-image" />
                                <p><span class="step">5</span> <?php echo __('Name your form, assign it to a list and include the Name field', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-interspire-005.png" class="step-image" />
                                <p><span class="step">6</span> <?php echo __('Complete all the steps and click on Save', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-interspire-006.png" class="step-image" />
                                <p><span class="step">7</span> <?php echo __('You will find the form action URL in the HTML box', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-interspire-007.png" class="step-image" />
                            </div><!--optinforms-step-->
                        </div><!--optinforms-explain-interspire-->
                        
                        <div class="optiongroup">
                            <div class="optionleft">
                                <label><a onclick="optinforms_explain_interspire_name()"><span class="explain">?</span></a></label> <label for="optinforms_form_name_field_interspire" class="nopointer"><?php echo __('Name field ID', 'optinforms'); ?> <span class="required">*</span></label>
                            </div><!--optionleft-->
                            <div class="optionmiddle">
                                <input type="text" id="optinforms_form_name_field_interspire" name="optinforms_form_name_field_interspire" value="<?php echo optinforms_form_name_field_interspire(); ?>" />
                            </div><!--optionmiddle-->
                            <div class="clear"></div>
                        </div><!--optiongroup-->
                        
                        <script type="text/javascript">
                            function optinforms_explain_interspire_name() {
                                // Get the DOM reference
                                var contentId = document.getElementById("optinforms-explain-interspire-name");
                                // Toggle 
                                contentId.style.display == "block" ? contentId.style.display = "none" : 
                                contentId.style.display = "block"; 
                            }
                        </script>
                        <div id="optinforms-explain-interspire-name" style="display:none;">
                            <div class="optinforms-step">
                            	<h4><?php echo __('How to find your name field ID', 'optinforms'); ?></h4>
                                <p><span class="step">1</span> <?php echo __('Log in to your Interspire Email Marketer administration panel', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-interspire-001.png" class="step-image" />
                                <p><span class="step">2</span> <?php echo __('Click on Contact Lists in the navigation menu', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-interspire-008.png" class="step-image" />
                                <p><span class="step">3</span> <?php echo __('Click on View Custom Fields from the submenu options', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-interspire-009.png" class="step-image" />
                                <p><span class="step">4</span> <?php echo __('Find the name field and click on Edit', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-interspire-010.png" class="step-image" />
                                <p><span class="step">5</span> <?php echo __('You will find the name field ID in the address bar', 'optinforms'); ?></p>
                                <img src="<?php echo plugins_url(); ?>/optin-forms/images/support-interspire-011.png" class="step-image" />
                            </div><!--optinforms-step-->
                        </div><!--optinforms-explain-interspire-->
                        
                    </div><!--optinforms_email_solution_option6-->
                </div><!--optiongroup-->
            </div><!--optinforms-container-left-->
            <div class="optinforms-container-right">
            	<?php include( plugin_dir_path( __FILE__ ) . 'includes/sidebar.php'); ?>
            </div><!--optinforms-container-right-->
            <div class="clear"></div>
    	</div><!--optinforms-email-solution-tab-->
    
    	<div id="optinforms-form-tab" class="tabcontent">
        	<div class="optinforms-container-left">
                <div class="optiongroup">
                    <h3><?php echo __('Form Design', 'optinforms'); ?></h3>
                    <div class="optionleft">
                        <label for="optinforms_form_design" class="nopointer"><?php echo __('Form design', 'optinforms'); ?></label>
                    </div><!--optionleft-->
                    <div class="optionmiddle">
                        <select name="optinforms_form_design" id="optinforms_form_design">
                            <option value="optinforms_form_design_option1" <?php if (get_option('optinforms_form_design')== 'optinforms_form_design_option1') echo 'selected="selected"'; ?>>01</option>
                            <option value="optinforms_form_design_option2" <?php if (get_option('optinforms_form_design')== 'optinforms_form_design_option2') echo 'selected="selected"'; ?>>02</option>
                            <option value="optinforms_form_design_option3" <?php if (get_option('optinforms_form_design')== 'optinforms_form_design_option3') echo 'selected="selected"'; ?>>03</option>
                            <option value="optinforms_form_design_option4" <?php if (get_option('optinforms_form_design')== 'optinforms_form_design_option4') echo 'selected="selected"'; ?>>04</option>
                            <option value="optinforms_form_design_option5" <?php if (get_option('optinforms_form_design')== 'optinforms_form_design_option5') echo 'selected="selected"'; ?>>05</option>
                        </select>
                        <script type="text/javascript">
                            document.getElementById('optinforms_form_design').onchange = function() {
                                var i = 1;
                                var myDiv = document.getElementById("optinforms_form_design_option" + i);
                                while(myDiv) {
                                    myDiv.style.display = 'none';
                                    myDiv = document.getElementById("optinforms_form_design_option" + ++i);
                                }
                            document.getElementById(this.value).style.display = 'block';
                        };
                        </script>
                    </div><!--optionmiddle-->
                    <div class="optionlast">
                                    
                    </div><!--optionlast-->
                    <div class="clear"></div>
        
                </div><!--optiongroup-->
                
                <div class="optiongroup">
                    <div id="optinforms_form_design_option1" <?php if (get_option('optinforms_form_design')== '' || get_option('optinforms_form_design')== 'optinforms_form_design_option1') echo 'style="display:block;"'; ?>>
                        <div id="optinforms-form1-container">
                            <div id="optinforms-form1" style="background:<?php echo optinforms_form1_default_background(); ?>; border-color:<?php echo optinforms_form1_default_border(); ?>">
                                <p id="optinforms-form1-title" style="font-family:<?php echo optinforms_form1_default_title_font(); ?>; font-size:<?php echo optinforms_form1_default_title_size(); ?>; line-height:<?php echo optinforms_form1_default_title_size(); ?>; color:<?php echo optinforms_form1_default_title_color(); ?>"><?php echo optinforms_form1_default_title(); ?></p>
        
                                <p id="optinforms-form1-subtitle" style="font-family:<?php echo optinforms_form1_default_subtitle_font(); ?>; font-size:<?php echo optinforms_form1_default_subtitle_size(); ?>; line-height: <?php echo optinforms_form1_default_subtitle_size(); ?>"><?php echo optinforms_form1_default_subtitle(); ?></p>
                                <div id="optinforms-form1-name-field-container">
                                    <input type="text" id="optinforms-form1-name-field" placeholder="<?php echo optinforms_form1_default_name_field(); ?>" style="font-family:<?php echo optinforms_form1_default_fields_font(); ?>; font-size:<?php echo optinforms_form1_default_fields_size(); ?>; color:<?php echo optinforms_form1_default_fields_color(); ?>" />
                                </div><!--optinforms-form1-name-field-container-->
                                <div id="optinforms-form1-email-field-container">
                                    <input type="text" id="optinforms-form1-email-field" placeholder="<?php echo optinforms_form1_default_email_field(); ?>" style="font-family:<?php echo optinforms_form1_default_fields_font(); ?>; font-size:<?php echo optinforms_form1_default_fields_size(); ?>; color:<?php echo optinforms_form1_default_fields_color(); ?>" />
                                </div><!--optinforms-form1-email-field-container-->
                                <div id="optinforms-form1-button-container">
                                    <input type="button" id="optinforms-form1-button" value="<?php echo optinforms_form1_default_button_text(); ?>" style="font-family:<?php echo optinforms_form1_default_button_text_font(); ?>; font-size:<?php echo optinforms_form1_default_button_text_size(); ?>; color:<?php echo optinforms_form1_default_button_text_color(); ?>; background-color:<?php echo optinforms_form1_default_button_background(); ?>" />
                                </div><!--optinforms-form1-button-container-->
                                <div class="clear"></div>
                                <p id="optinforms-form1-disclaimer" style="font-family:<?php echo optinforms_form1_default_disclaimer_font(); ?>; font-size:<?php echo optinforms_form1_default_disclaimer_size(); ?>; line-height: <?php echo optinforms_form1_default_disclaimer_size(); ?>; color:<?php echo optinforms_form1_default_disclaimer_color(); ?>"><?php echo optinforms_form1_default_disclaimer(); ?></p>
                            </div><!--optinforms-form1-->
                        </div><!--optinforms-form1-container-->
                        <div class="clear"></div>
                        
                        <?php include( plugin_dir_path( __FILE__ ) . 'includes/options-form-1.php'); ?>
                    
                    </div><!--optinforms_form_design_option1-->
                    <div id="optinforms_form_design_option2" <?php if (get_option('optinforms_form_design')== 'optinforms_form_design_option2') echo 'style="display:block;"'; ?>>
                        <div id="optinforms-form2-container">
                            <div id="optinforms-form2" style="background: <?php echo optinforms_form2_default_background(); ?>;">
                                <div id="optinforms-form2-title-container">
                                    <div id="optinforms-form2-title" style="font-family:<?php echo optinforms_form2_default_title_font(); ?>; font-size:<?php echo optinforms_form2_default_title_size(); ?>; line-height:<?php echo optinforms_form2_default_title_size(); ?>; color:<?php echo optinforms_form2_default_title_color(); ?>"><?php echo optinforms_form2_default_title(); ?></div><!--optinforms-form2-title-->
                                </div><!--optinforms-form2-title-container-->
                                <div id="optinforms-form2-email-field-container">
                                    <input type="text" id="optinforms-form2-email-field" placeholder="<?php echo optinforms_form2_default_email_field(); ?>" style="font-family:<?php echo optinforms_form2_default_fields_font(); ?>; font-size:<?php echo optinforms_form2_default_fields_size(); ?>; color:<?php echo optinforms_form2_default_fields_color(); ?>" />
                                </div><!--optinforms-form2-email-field-container-->
                                <div id="optinforms-form2-button-container">
                                    <input type="button" id="optinforms-form2-button" value="<?php echo optinforms_form2_default_button_text(); ?>" style="font-family:<?php echo optinforms_form2_default_button_text_font(); ?>; font-size:<?php echo optinforms_form2_default_button_text_size(); ?>; color:<?php echo optinforms_form2_default_button_text_color(); ?>; background-color:<?php echo optinforms_form2_default_button_background(); ?>" />
                                </div><!--optinforms-form2-button-container-->
                                <div id="optinforms-form2-disclaimer-container">
                                    <p id="optinforms-form2-disclaimer" style="font-family:<?php echo optinforms_form2_default_disclaimer_font(); ?>; font-size:<?php echo optinforms_form2_default_disclaimer_size(); ?>; line-height: <?php echo optinforms_form2_default_disclaimer_size(); ?>; color:<?php echo optinforms_form2_default_disclaimer_color(); ?>"><?php echo optinforms_form2_default_disclaimer(); ?></p>
                                </div><!--optinforms-form2-disclaimer-container-->
                                <div class="clear"></div>
                            </div><!--optinforms-form2-->
                        </div><!--optinforms-form2-container-->
                        <div class="clear"></div>
                        
                         <?php include( plugin_dir_path( __FILE__ ) . 'includes/options-form-2.php'); ?>
                        
                    </div><!--optinforms_form_design_option2-->
                    <div id="optinforms_form_design_option3" <?php if (get_option('optinforms_form_design')== 'optinforms_form_design_option3') echo 'style="display:block;"'; ?>>
                        <div id="optinforms-form3-container">
                            <div id="optinforms-form3">
                                <div id="optinforms-form3-inside" style="background: <?php echo optinforms_form3_default_background(); ?>;">
                                    <div id="optinforms-form3-container-left">
                                        <div id="optinforms-form3-title"  style="font-family:<?php echo optinforms_form3_default_title_font(); ?>; font-size:<?php echo optinforms_form3_default_title_size(); ?>; line-height:<?php echo optinforms_form3_default_title_size(); ?>; color:<?php echo optinforms_form3_default_title_color(); ?>"><?php echo optinforms_form3_default_title(); ?></div><!--optinforms-form3-title-->
                                        <div id="optinforms-form3-subtitle" style="font-family:<?php echo optinforms_form3_default_subtitle_font(); ?>; font-size:<?php echo optinforms_form3_default_subtitle_size(); ?>; color:<?php echo optinforms_form3_default_subtitle_color(); ?>;"><?php echo optinforms_form3_default_subtitle(); ?></div><!--optinforms-form3-subtitle-->
                                    </div><!--optinforms-form3-container-left-->
                                    <div id="optinforms-form3-container-right">
                                        <input type="text" id="optinforms-form3-name-field" placeholder="<?php echo optinforms_form3_default_name_field(); ?>" style="font-family:<?php echo optinforms_form3_default_fields_font(); ?>; font-size:<?php echo optinforms_form3_default_fields_size(); ?>; color:<?php echo optinforms_form3_default_fields_color(); ?>" />
                                        <input type="text" id="optinforms-form3-email-field" placeholder="<?php echo optinforms_form3_default_email_field(); ?>" style="font-family:<?php echo optinforms_form3_default_fields_font(); ?>; font-size:<?php echo optinforms_form3_default_fields_size(); ?>; color:<?php echo optinforms_form3_default_fields_color(); ?>" />
                                        <input type="button" id="optinforms-form3-button" value="<?php echo optinforms_form3_default_button_text(); ?>" style="font-family:<?php echo optinforms_form3_default_button_text_font(); ?>; font-size:<?php echo optinforms_form3_default_button_text_size(); ?>; color:<?php echo optinforms_form3_default_button_text_color(); ?>; background-color:<?php echo optinforms_form3_default_button_background(); ?>" />
                                    </div><!--optinforms-form3-container-right-->
                                    <div class="clear"></div>
                                </div><!--optinforms-form3-inside-->
                            </div><!--optinforms-form3-->
                        </div><!--optinforms-form3-container-->
                        <div class="clear"></div>
                        
                        <?php include( plugin_dir_path( __FILE__ ) . 'includes/options-form-3.php'); ?>
                        
                    </div><!--optinforms_form_design_option3-->
                    <div id="optinforms_form_design_option4" <?php if (get_option('optinforms_form_design')== 'optinforms_form_design_option4') echo 'style="display:block;"'; ?>>
                        <div id="optinforms-form4-container">
                            <div id="optinforms-form4" style="background:<?php echo optinforms_form4_default_background(); ?>; border-color:<?php echo optinforms_form4_default_border(); ?>">
                                    <div id="optinforms-form4-title" style="font-family:<?php echo optinforms_form4_default_title_font(); ?>; font-size:<?php echo optinforms_form4_default_title_size(); ?>; line-height:<?php echo optinforms_form4_default_title_size(); ?>; color:<?php echo optinforms_form4_default_title_color(); ?>"><?php echo optinforms_form4_default_title(); ?></div><!--optinforms-form4-title-->
                                    <div id="optinforms-form4-subtitle" style="font-family:<?php echo optinforms_form4_default_subtitle_font(); ?>; font-size:<?php echo optinforms_form4_default_subtitle_size(); ?>; line-height: <?php echo optinforms_form4_default_subtitle_size(); ?>; color: <?php echo optinforms_form4_default_subtitle_color(); ?>"><?php echo optinforms_form4_default_subtitle(); ?></div><!--optinforms-form4-subtitle-->
                                    <input type="text" id="optinforms-form4-email-field" placeholder="<?php echo optinforms_form4_default_email_field(); ?>" style="font-family:<?php echo optinforms_form4_default_fields_font(); ?>; font-size:<?php echo optinforms_form4_default_fields_size(); ?>; color:<?php echo optinforms_form4_default_fields_color(); ?>" />
                                    <input type="button" id="optinforms-form4-button" value="<?php echo optinforms_form4_default_button_text(); ?>" style="font-family:<?php echo optinforms_form4_default_button_text_font(); ?>; font-size:<?php echo optinforms_form4_default_button_text_size(); ?>; color:<?php echo optinforms_form4_default_button_text_color(); ?>; background-color:<?php echo optinforms_form4_default_button_background(); ?>" />
                                    <div id="optinforms-form4-disclaimer" style="font-family:<?php echo optinforms_form4_default_disclaimer_font(); ?>; font-size:<?php echo optinforms_form4_default_disclaimer_size(); ?>; line-height: <?php echo optinforms_form4_default_disclaimer_size(); ?>; color:<?php echo optinforms_form4_default_disclaimer_color(); ?>"><?php echo optinforms_form4_default_disclaimer(); ?></div><!--optinforms-form4-disclaimer-->
                            </div><!--optinforms-form4-->
                        </div><!--optinforms-form4-container-->
                        <div class="clear"></div>
                        
                        <?php include( plugin_dir_path( __FILE__ ) . 'includes/options-form-4.php'); ?>
                        
                    </div><!--optinforms_form_design_option4-->
                    <div id="optinforms_form_design_option5" <?php if (get_option('optinforms_form_design')== 'optinforms_form_design_option5') echo 'style="display:block;"'; ?>>
                        <div id="optinforms-form5-container">
                            <div id="optinforms-form5" style="background: <?php echo optinforms_form5_default_background(); ?>;">
                                <div id="optinforms-form5-container-left">
                                    <div id="optinforms-form5-title" style="font-family:<?php echo optinforms_form5_default_title_font(); ?>; font-size:<?php echo optinforms_form5_default_title_size(); ?>; line-height:<?php echo optinforms_form5_default_title_size(); ?>; color:<?php echo optinforms_form5_default_title_color(); ?>"><?php echo optinforms_form5_default_title(); ?></div><!--optinforms-form5-title-->
                                    <input type="text" id="optinforms-form5-name-field" placeholder="<?php echo optinforms_form5_default_name_field(); ?>" style="font-family:<?php echo optinforms_form5_default_fields_font(); ?>; font-size:<?php echo optinforms_form5_default_fields_size(); ?>; color:<?php echo optinforms_form5_default_fields_color(); ?>" />
                                    <input type="text" id="optinforms-form5-email-field" placeholder="<?php echo optinforms_form5_default_email_field(); ?>" style="font-family:<?php echo optinforms_form5_default_fields_font(); ?>; font-size:<?php echo optinforms_form5_default_fields_size(); ?>; color:<?php echo optinforms_form5_default_fields_color(); ?>" />
                                    <input type="button" id="optinforms-form5-button" value="<?php echo optinforms_form5_default_button_text(); ?>" style="font-family:<?php echo optinforms_form5_default_button_text_font(); ?>; font-size:<?php echo optinforms_form5_default_button_text_size(); ?>; color:<?php echo optinforms_form5_default_button_text_color(); ?>; background-color:<?php echo optinforms_form5_default_button_background(); ?>" />
                                </div><!--optinforms-form5-container-left-->
                                <div id="optinforms-form5-container-right">
                                    <div id="optinforms-form5-subtitle" style="font-family:<?php echo optinforms_form5_default_subtitle_font(); ?>; font-size:<?php echo optinforms_form5_default_subtitle_size(); ?>; color:<?php echo optinforms_form5_default_subtitle_color(); ?>;"><?php echo optinforms_form5_default_subtitle(); ?></div><!--optinforms-form5-subtitle-->
                                    <div id="optinforms-form5-disclaimer" style="font-family:<?php echo optinforms_form5_default_disclaimer_font(); ?>; font-size:<?php echo optinforms_form5_default_disclaimer_size(); ?>; color:<?php echo optinforms_form5_default_disclaimer_color(); ?>"><?php echo optinforms_form5_default_disclaimer(); ?></div><!--optinforms-form5-disclaimer-->
                                </div><!--optinforms-form5-container-right-->
                                <div class="clear"></div>
                            </div><!--optinforms-form5-->
                        </div><!--optinforms-form5-container-->
                        <div class="clear"></div>
                        
                        <?php include( plugin_dir_path( __FILE__ ) . 'includes/options-form-5.php'); ?>
                        
                    </div><!--optinforms_form_design_option5-->
                </div><!--optiongroup-->
        	</div><!--optinforms-container-left-->
            <div class="optinforms-container-right">
            	<?php include( plugin_dir_path( __FILE__ ) . 'includes/sidebar.php'); ?>
            </div><!--optinforms-container-right-->
            <div class="clear"></div>
        </div><!--optinforms-form-tab-->
        <div id="optinforms-placement-tab" class="tabcontent">
        	<div class="optinforms-container-left">
                <div class="optiongroup">
                    <h3><?php echo __('Form Placement', 'optinforms'); ?></h3>
                    <div class="optionleft">
                        <label for="optinforms_form_placement_post" class="nopointer"><?php echo __('On posts and custom post types', 'optinforms'); ?></label>
                    </div><!--optionleft-->
                    <div class="optionmiddle">
                        <input name="optinforms_form_placement_post" id="optinforms_form_placement_post_1" type="radio" value="1" class="radiobutton" <?php if (get_option('optinforms_form_placement_post')== '1') echo 'checked="checked"'; ?> /> <label for="optinforms_form_placement_post_1" class="radiobutton-label"><?php echo __('After the first paragraph', 'optinforms'); ?></label>
                        <div class="clear"></div>
                        <input name="optinforms_form_placement_post" id="optinforms_form_placement_post_2" type="radio" value="2" class="radiobutton" <?php if (get_option('optinforms_form_placement_post')== '2') echo 'checked="checked"'; ?> /> <label for="optinforms_form_placement_post_2" class="radiobutton-label"><?php echo __('After the second paragraph', 'optinforms'); ?></label>
                        <div class="clear"></div>
                        <input name="optinforms_form_placement_post" id="optinforms_form_placement_post_3" type="radio" value="3" class="radiobutton" <?php if (get_option('optinforms_form_placement_post')== '') echo 'checked="checked"'; if (get_option('optinforms_form_placement_post')== '3') echo 'checked="checked"'; ?> /> <label for="optinforms_form_placement_post_3" class="radiobutton-label"><?php echo __('After the post', 'optinforms'); ?></label>
                        <div class="clear"></div>
                        <input name="optinforms_form_placement_post" id="optinforms_form_placement_post_4" type="radio" value="4" class="radiobutton" <?php if (get_option('optinforms_form_placement_post')== '4') echo 'checked="checked"'; ?> /> <label for="optinforms_form_placement_post_4" class="radiobutton-label"><?php echo __('Don\'t display on posts and custom post types', 'optinforms'); ?></label>
                        <div class="clear"></div>
                    </div><!--optionmiddle-->
                    <div class="optionlast">
                                    
                    </div><!--optionlast-->
                    <div class="clear"></div>
        
                </div><!--optiongroup-->
                
                <div class="optiongroup">
                    <div class="optionleft">
                        <label for="optinforms_form_placement_page" class="nopointer"><?php echo __('On pages', 'optinforms'); ?></label>
                    </div><!--optionleft-->
                    <div class="optionmiddle">
                        <input name="optinforms_form_placement_page" id="optinforms_form_placement_page_1" type="radio" value="1" class="radiobutton" <?php if (get_option('optinforms_form_placement_page')== '1') echo 'checked="checked"'; ?> /> <label for="optinforms_form_placement_page_1" class="radiobutton-label"><?php echo __('After the first paragraph', 'optinforms'); ?></label>
                        <div class="clear"></div>
                        <input name="optinforms_form_placement_page" id="optinforms_form_placement_page_2" type="radio" value="2" class="radiobutton" <?php if (get_option('optinforms_form_placement_page')== '2') echo 'checked="checked"'; ?> /> <label for="optinforms_form_placement_page_2" class="radiobutton-label"><?php echo __('After the second paragraph', 'optinforms'); ?></label>
                        <div class="clear"></div>
                        <input name="optinforms_form_placement_page" id="optinforms_form_placement_page_3" type="radio" value="3" class="radiobutton" <?php if (get_option('optinforms_form_placement_page')== '') echo 'checked="checked"'; if (get_option('optinforms_form_placement_page')== '3') echo 'checked="checked"'; ?> /> <label for="optinforms_form_placement_page_3" class="radiobutton-label"><?php echo __('After the page', 'optinforms'); ?></label>
                        <div class="clear"></div>
                        <input name="optinforms_form_placement_page" id="optinforms_form_placement_page_4" type="radio" value="4" class="radiobutton" <?php if (get_option('optinforms_form_placement_page')== '4') echo 'checked="checked"'; ?> /> <label for="optinforms_form_placement_page_4" class="radiobutton-label"><?php echo __('Don\'t display on pages', 'optinforms'); ?></label>
                        <div class="clear"></div>
                    </div><!--optionmiddle-->
                    <div class="optionlast">
                                    
                    </div><!--optionlast-->
                    <div class="clear"></div>
        
                </div><!--optiongroup-->
                
                <div class="optiongroup">
                    <h3><?php echo __('Help Us Out', 'optinforms'); ?></h3>
                    <p><?php echo __('If you enjoy our plugin, please consider including a small "Powered by Optin Forms" link below your form. You would help us find new users, which would in turn result in even better features ;)', 'optinforms'); ?></p>
                    <div class="optionleft">
                        <label for="optinforms_form_placement_page" class="nopointer"><?php echo __('Powered by Optin Forms link', 'optinforms'); ?></label>
                    </div><!--optionleft-->
                    <div class="optionmiddle">
                        <input name="optinforms_powered_by" id="optinforms_powered_by_show" type="radio" value="1" class="radiobutton" <?php echo optinforms_powered_by_show(); ?> /> <label for="optinforms_powered_by_show" class="radiobutton-label">Show</label>
                                <input name="optinforms_powered_by" id="optinforms_powered_by_hide" type="radio" value="0" class="radiobutton" <?php echo optinforms_powered_by_hide(); ?> /> <label for="optinforms_powered_by_hide" class="radiobutton-label">Hide</label>
                        <div class="clear"></div>
                    </div><!--optionmiddle-->
                    <div class="optionlast">
                                    
                    </div><!--optionlast-->
                    <div class="clear"></div>
        
                </div><!--optiongroup-->
        	</div><!--optinforms-container-left-->
            <div class="optinforms-container-right">
            	<?php include( plugin_dir_path( __FILE__ ) . 'includes/sidebar.php'); ?>
            </div><!--optinforms-container-right-->
            <div class="clear"></div>    
        </div><!--optinforms-placement-tab-->
        <script type="text/javascript">
			var wpthumbs=new ddtabcontent("optinforms-menu-tabs") //enter ID of Tab Container
			wpthumbs.setpersist(true) //toogle persistence of the tabs' state
			wpthumbs.setselectedClassTarget("link") //"link" or "linkparent"
			wpthumbs.init()
        </script>
        
        <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </form>
        
        <div id="emailbox">
        	<form method="post" action="http://www.codeleon.com/send/form.php?form=5" id="frmSS5">
        	<h3><?php echo __('Sign up to receive news about the plugin and other WordPress news', 'optinforms'); ?></h3>
    		<span><?php echo __('My email is', 'optinforms'); ?></span>
            <input type="text" name="email" value="<?php global $current_user; get_currentuserinfo(); echo $current_user->user_email; ?>" />
            <span><?php echo __('and my name is', 'optinforms'); ?></span>
            <input type="text" name="CustomFields[1]" id="CustomFields_1_5" value="<?php global $current_user; get_currentuserinfo(); echo $current_user->display_name; ?>">
            <input type="hidden" name="format" value="h" />
            <input type="submit" class="emailbox-subscribe" value="<?php echo __('Subscribe', 'optinforms'); ?>" />
            </form>
    	</div><!--emailbox-->
	</div><!--optinforms-->

<?php }


} ?>