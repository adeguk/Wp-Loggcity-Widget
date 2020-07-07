<?php
/*
Plugin Name: Loggcity Support Widget
Plugin URI:	 https://.loggcity.africa
Description: Loggcity Support info available via dashboard widget code
Version: 1.0
Author: Adewale Adegoroye
Author URI: https://.waleadegoroye.com
Company: Loggcity
Company URI: https://.loggcity.africa
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

remove_action('welcome_panel', 'wp_welcome_panel');			// remove WordPress own welcome panel
add_action( 'admin_footer', 'loggcity_welcome_panel' );		// replace it with a custom made welcome panel
function loggcity_welcome_panel() {
	// only view on the main dashboard page else exit
	if ( get_current_screen()->base !== 'dashboard' ) {
		return;
	}
?>
	
	<div id="custom-id" class="welcome-panel" style="display: none;">
		<!-- -->
		<main id="dashboard-tab">
			<input id="tab1" type="radio" name="tabs" checked>
			<label for="tab1">Welcome</label>

			<!--input id="tab2" type="radio" name="tabs">
			<label for="tab2">FAQ</label-->

			<input id="tab3" type="radio" name="tabs">
			<label for="tab3">Support</label>

			<input id="tab4" type="radio" name="tabs">
			<label for="tab4">Add-On <span class="hidden-sm">Services</span></label>

			<section id="welcome" class="welcome-panel-content">
				<h2 style="margin-bottom:15px">Welcome to <?= get_bloginfo('name'); ?></a></h2>
				<div class="inner_panel">
					<p>Loggcity Digital is the digital division of Loggcity. We specializes in Brand and Logo Design, Print Design Responsive Web Design, Application Development, 
					SEO, Digital Marketing (PPC, Google Adwords). Loggcity Limited is a solution-oriented ICT/IS service provider, dedicated to capacity building for 
					next-generation of business enterprise. Need help? Contact the our support team <a href='mailto:support@loggcity.uk'>here</a></p>
				<p class="about-description">
					Don't forget to visit: <a href='https://cloudphire.com' style="color:#d33" target='_blank'>CloudPhire</a>, Loggcity's recommended hosting partner, for  a discounted domain name renewal and hosting
				</p>
				</div>
				<div class="welcome-panel-column-container">
					<div class="welcome-panel-column">
						<h3>Check the progress of your project</h3>
						<a class="button button-primary button-hero" href="https://gateway.loggcity.uk/" target="_blank">Login to Project Area</a>
						<p class="hide-if-no-customize">or, <a href="https://gateway.loggcity.uk/authentication/register" style="color:#d33" target="_blank">register a gateway account</a></p>
					</div>
					<div class="welcome-panel-column">
						<h3>Next Steps</h3>
						<ul>
							<li><a href="<?= site_url() ?>/wp-admin/post-new.php?post_type=page" class="welcome-icon welcome-add-page">Add additional pages</a></li>
							<li><a href="<?= site_url() ?>/wp-admin/post-new.php" class="welcome-icon welcome-write-blog">Add a blog post</a></li>
							<li><a href="<?= site_url() ?>/" class="welcome-icon welcome-view-site">View your site</a></li>
						</ul>
					</div>
					<div class="welcome-panel-column welcome-panel-last">
						<h3>Recommend Us</h3>
						<ul>
							<li><a href="https://uk.trustpilot.com/evaluate/digital.loggcity.uk" target="_blank" style="color:#d33" class="welcome-icon welcome-comments">Write us a review</a></li>
							<li><div class="welcome-icon welcome-widgets-menus">Follow us on <a style="color:#d33" href="https://facebook.com/Loggcity">Facebook</a> or <a style="color:#d33" href="https://twitter.com/InfoLoggcity" target="_blank">Twitter</a></div></li>
							<li><a href="https://codex.wordpress.org/First_Steps_With_WordPress" class="welcome-icon welcome-learn-more">Learn more about getting started</a></li>
						</ul>
					</div>
				</div>
			</section>
			<!--section id="account_faq">
				<p>	Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin.</p>
				<p>
					Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. 
					Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs 
					ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
				</p>
			</section-->
			<section id="web_support">
				<div class="inner_panel">
					<p>Loggcity WordPress development services is covered by 3 months of free support by submitting a ticket. Our support can be <u>extended through subscriptions</u>
						via Loggcity Gateway. All support is handled via the Support Centre on our company website. To access it, you must first <a href="https://gateway.loggcity.uk/authentication/register" title="Register a New Account">
						create an account</a> here if you haven't. If you have purchased domain/hosting related services using <a href="https://cloudphire.com" target="_blank" title="Register a domain and get cheap hosting">CloudPhire</a>, 
						please <a href="https://manage.cloudphire.com" target="_blank" title="Register a domain and get cheap hosting"><u>go to your account here</u></a> to get support;
						else click the button below for all other types of web services purchased via <a href="https://cloudphire.com" target="_blank" title="Register a domain and get cheap hosting">CloudPhire</a> to start receiving service support it. 
						Below are all the resources we offer in our support centre and community.
					</p>					
					<a class="button button-primary button-hero" href="https://gateway.loggcity.uk/authentication/register" target="_blank">Create Gateway Account</a>
				</div>
				<div class="postbox-wrapper">
					<div class="postbox-container">
						<h3><i class="fa fa-envelope"></i>Access My Email</h3>
						<p>
							To access your email, simply click the button below. Once on the log in page, you would need to login with your email address and the corresponding password.
						</p>
						<a class="button button-primary button-hero" href="<?= get_site_webmail() ?>" target="_blank">Webmail</a>
					</div>					
					<div class="postbox-container">
						<h3><i class="fa fa-database"></i>CloudPhire Account</h3>
						<p>
							This is the place to go to manage your domain name registration, renewal, DNS, SSL and any other related services you purchased via CloudPhire.com.
						</p>
						<a class="button button-primary button-hero" href="https://manage.cloudphire.com/" target="_blank">Manage My Services</a>
					</div>
					<div class="postbox-container">
						<h3><i class="fa fa-users"></i>Community Fourm</h3>
						<p>
							We have a community forum for user to user interactions. Ask and share information with other users. Please note that Loggcity does not provide support here.
						</p>
						<a class="button button-primary button-hero" href="https://cloudphire.com" target="_blank">Community Forum</a>
					</div>
					<div class="postbox-container">
						<h3><i class="fa fa-facebook"></i>Facebook Page</h3>
						<p>
							There is a Facebook page to help build a community of mutual users willing to help one another for Loggcity! Come, share and help grow the community!
						</p>
						<a class="button button-primary button-hero" href="https://facebook.com/loggcity" target="_blank">Like us on Facebook</a>
					</div>
				</div>
			</section>
			<section id="add-on_services">
				<div class="postbox-wrapper" style="padding-top:0">
					<div class="postbox-container" style="padding:0">
						<script type="text/javascript">
							var bannersnack_embed = {"hash":"btiyvimnv","width":336,"height":280,"t":1556825785,"userId":39137078,"responsive":true,"type":"html5"};
						</script>
						<script type="text/javascript" src="//cdn.bannersnack.com/iframe/embed.js"></script>
					</div>					
					<div class="postbox-container" style="padding:0">
						<script type="text/javascript">
							var bannersnack_embed = {"hash":"bdn01sfi1","width":320,"height":100,"t":1556883694,"userId":39137078,"responsive":true,"type":"html5"};
						</script>
						<script type="text/javascript" src="//cdn.bannersnack.com/iframe/embed.js"></script>
					</div>
				</div>
			</section>
		</main><!-- -->			
	</div>
	<script>
		/** once wordpress welcome panel is removed, push custom-made 
		panel to its position before dashboard-widgets-wrap */
		jQuery(document).ready(function($) {
			$('#dashboard-widgets-wrap').before($('#custom-id').show());
		});
	</script>
<?php }
// loggcity_welcome_pane fn


add_action( 'wp_dashboard_setup', 'loggcity_dashboard_add_widgets' );
function loggcity_dashboard_add_widgets() {
	global $wp_meta_boxes;

	wp_add_dashboard_widget( 'loggcity_dashboard_widget_news', __( 'Loggcity Community News', 'ldw' ), 'loggcity_dashboard_widget_news_handler', 'loggcity_dashboard_widget_news_config_handler' );
 	
 	// Get reference to the list of dashboard widgets
 	$dashboard_widgets = $wp_meta_boxes["dashboard"]["normal"]["core"];
 	
 	//Create a backup of the dashboard widgets list
 	$dashboard_widgets_backup = array("top_Welcome_message" => $dashboard_widgets["loggcity_top_Welcome_message"] );
 	
 	//remove our widget from the end
 	unset($dashboard_widgets["loggcity_top_Welcome_message"]);
 
 	//Merge the backedup and original arrays
 	$sorted_dashboard = array_merge($dashboard_widgets_backup, $dashboard_widgets);
 
 	//save the new sorted widgets array
 	$wp_meta_boxes["dashboard"]["normal"]["core"] = $sorted_dashboard;
}

function loggcity_dashboard_widget_news_handler() {
	$options = wp_parse_args( get_option( 'loggcity_dashboard_widget_news' ), loggcity_dashboard_widget_news_config_defaults() );

	$feeds = [
		[
			'url'          => 'https://www.cssigniter.com/blog/feed/',
			'items'        => $options['items'],
			'show_summary' => 1,
			'show_author'  => 0,
			'show_date'    => 1,
		],
	];

	wp_dashboard_primary_output( 'loggcity_dashboard_widget_news', $feeds );
}

function loggcity_dashboard_widget_news_config_defaults() {
	return [
		'items' => 2,
	];
}

function loggcity_dashboard_widget_news_config_handler() {
	$options = wp_parse_args( get_option( 'loggcity_dashboard_widget_news' ), loggcity_dashboard_widget_news_config_defaults() );

	if ( isset( $_POST['submit'] ) ) {
		if ( isset( $_POST['rss_items'] ) && intval( $_POST['rss_items'] ) > 0 ) {
			$options['items'] = intval( $_POST['rss_items'] );
		}

		update_option( 'loggcity_dashboard_widget_news', $options );
	}

    ?>
	<p>
		<label><?php _e( 'Number of RSS articles:', 'dw' ); ?>
			<input type="text" name="rss_items" value="<?php echo esc_attr( $options['items'] ); ?>" />
		</label>
	</p>
	<?php
}

add_action( 'admin_enqueue_scripts', 'loggcity_scripts' );
function loggcity_scripts( $hook ) {
	$screen = get_current_screen();
	if ( 'dashboard' === $screen->id ) {
		wp_enqueue_script( 'loggcity_script', plugin_dir_url(__FILE__) . 'path/to/script.js', array( 'jquery' ), '1.0', true );
		wp_enqueue_style( 'loggcity_style', plugin_dir_url(__FILE__) . 'assets/css/style.css', array(), '1.0' );
	}
}

Function get_site_webmail(){
	$url_data         = parse_url( site_url() );
	$domain = $url_data['host'];

	echo "https://webmail.$domain";
}