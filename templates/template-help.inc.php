<?php
/**
 * Multisite Robots.txt Manager
 * @package Multisite Robots.txt Manager
 * @author tribalNerd (tribalnerd@technerdia.com)
 * @copyright Copyright (c) 2012-2013, techNerdia LLC.
 * @link http://msrtm.technerdia.com/
 * @license http://www.gnu.org/licenses/gpl.html
 * @version 0.3.1
 */

/**
 * ==================================== How to Use Template
 */

if ( !defined( 'ABSPATH' ) ) { exit; } /* Wordpress check */ ?>

<!-- how to use -->
		<div class="postbox">
			<h3><span><?php _e('How To Use the Multisite Robots.txt Manager', 'ms_robotstxt_manager');?></span></h3>
		<div class="inside">
			<p><?php _e('Using the Multisite Robots.txt Manager...', 'ms_robotstxt_manager');?></p>

			<ul>
				<li><strong>&bull; <a href="http://msrtm.technerdia.com/help/docs.html" target="_blank"><?php _e('Extended Help Documents', 'ms_robotstxt_manager');?></a></strong></li>
<?php if ( $this->robotstxt_ms_version( $check = true ) ) {?>
				<li><strong>&bull; <a href="http://msrtm.technerdia.com/help/docs/pro-upload.html" target="_blank"><?php _e('Where to Upload the Pro Automation Extension.', 'ms_robotstxt_manager');?></a></strong></li>
				<li><strong>&bull; <a href="http://msrtm.technerdia.com/help/docs/pro-confiure.html" target="_blank"><?php _e('Configuring the Pro Automation Extension.', 'ms_robotstxt_manager');?></a></strong></li>
				<li><strong>&bull; <a href="http://msrtm.technerdia.com/help/docs/pro-testing.html" target="_blank"><?php _e('Testing the Pro Extension Feature.', 'ms_robotstxt_manager');?></a></strong></li>
<?php }?>
			</ul>

			<hr />

<?php if ( is_network_admin() ) {?>
			<h2><?php _e('Create / Manage Tab', 'ms_robotstxt_manager');?></h2>
			<?php _e('The Create / Manage tab contains an inactive, "network only" or "network wide" working copy of the robots.txt file. Modify the default robots.txt file, save the default file, and when ready click the "publish to network" button to duplicate the robots.txt file to all Network Websites.', 'ms_robotstxt_manager');?><br /><br />
<?php } else {?>
			<h2><?php _e('Create / Manage Tab', 'ms_robotstxt_manager');?></h2>
			<?php _e('The Create / Manage tab contains this websites active robots.txt file and sitemap structure. To use: Modify the robots.txt file, enter a sitemap structure and check the Use Sitemap URL box. Once done click the "update this website" button to save &amp; publish your changes.', 'ms_robotstxt_manager');?><br /><br />
<?php }?>
			<hr />

			<h2><?php _e('Sitemap URLs and Structure', 'ms_robotstxt_manager');?></h2>
			<?php _e('Most Wordpress Sitemap Plugins can automatically add the Sitemap URL\'s to the robots.txt file for you. Be sure to disable this feature within other Plugins if you use the feature within this plugin, otherwise more than one sitemap url will be listed in the robots.txt file.', 'ms_robotstxt_manager');?><br />
			<p><?php _e('To add a Sitemap URL to a Robots.txt file, simply select the check box to add the sitemap url, then enter the Sitemap URL Structure to use.', 'ms_robotstxt_manager');?></p>
			<p><?php _e('Almost all Wordpress Installs will use', 'ms_robotstxt_manager');?>: http://[WEBSITE_URL]/sitemap.xml</p>
			<p><?php _e('The [brackets] within the Sitemap URL\'s automatically get replaced by the plugin (You Will Use Them). Network Wide Sitemap Updates "must" use the [bracket] structure to ensure Websites have the proper Sitemap URL. Unique Website updates can use the brackets OR take the full sitemap url directly.', 'ms_robotstxt_manager');?></p>

			<hr id="sitemap" />
	
			<h2><?php _e('Sitemap URL Structure', 'ms_robotstxt_manager');?></h2>
			<?php _e('Wordpress Sitemap URLs', 'ms_robotstxt_manager');?>: http://[WEBSITE_URL]/sitemap.xml<br />
			<?php _e('GoDaddy Sitemap URLs', 'ms_robotstxt_manager');?>: http://[WEBSITE_URL]/sitemaps/[DOMAIN]-[EXT].xml<br />
			<?php _e('Random Example', 'ms_robotstxt_manager');?>: http://[WEBSITE_URL]/[DOMAIN]-[EXT]-sitemap.xml.gz<br />
			<p><strong><?php _e('Structure Meaning', 'ms_robotstxt_manager');?></strong>:<br />
			[WEBSITE_URL] = domain.com<br />
			[DOMAIN] = domain<br />
			[EXT] = .com/net, etc.</p>
			<p>&bull; <?php _e('Always include the http:// with the Sitemap URL Structure.', 'ms_robotstxt_manager');?><br />
			&bull; <?php _e('If the sitemaps are within a directory, /include-the-path/ within the sitemap url.', 'ms_robotstxt_manager');?></p>

			<hr id="sitemap_why" />
			
			<h2><?php _e('Robots.txt Files within Directories and Non-Mapped Domains', 'ms_robotstxt_manager');?></h2>
			<?php _e('Search Engine Spiders only read robots.txt files found within the root directory of a Website. Spiders do not read robots.txt files within directories, such as: domain.com/PATH-or-FOLDER/robots.txt is NOT a valid location. Because of this, the sitemap urls are not rendered on robots.txt files that are being displayed within a directory.', 'ms_robotstxt_manager');?><br />
			<p><strong><?php _e('From Google', 'ms_robotstxt_manager');?></strong>: "<?php _e('The robots.txt file must be in the top-level directory of the host.....Crawlers will not check for robots.txt files in sub-directories.', 'ms_robotstxt_manager');?>" [ <a href="https://developers.google.com/webmasters/control-crawl-index/docs/robots_txt" target="_blank"><?php _e('source', 'ms_robotstxt_manager');?></a> ]</p>
			<p><strong>~ <?php _e('For Testing Purposes', 'ms_robotstxt_manager');?></strong>: <?php _e('Non-mapped Network Websites will have a robots.txt file rendered for the Website. This is NOT the robots.txt file to submit to Google. Only submit robots.txt files found on a domains root, such as: domain.com/robots.txt', 'ms_robotstxt_manager');?></p>
			<p><strong><?php _e('Sitemap URLs', 'ms_robotstxt_manager');?></strong>: <?php _e('For "real" Multisite HOST Networks, use the Wordpress plugin', 'ms_robotstxt_manager');?>: <a href="http://www.arnebrachhold.de/projects/wordpress-plugins/google-xml-sitemaps-generator/" target="_blank"><?php _e('BWP Google XML Sitemaps', 'ms_robotstxt_manager');?></a> - <?php _e('This plugin will list each Websites Sitemap URL\'s in the Root Network Website\'s robots.txt file.', 'ms_robotstxt_manager');?></p>

			<hr />

			<h2><?php _e('Testing Robots.txt Files', 'ms_robotstxt_manager');?></h2>
			<?php _e('Use Google\'s Webmaster Tools to Validate your Robots.txt Files.... with Google at least.', 'ms_robotstxt_manager');?>:<br />
			<p><?php _e('Log into your', 'ms_robotstxt_manager');?> <a href="http://www.google.com/webmasters/tools/" target="_blank"><?php _e('Google Account', 'ms_robotstxt_manager');?></a> and access the <?php _e('Log into your', 'ms_robotstxt_manager');?> <a href="http://www.google.com/webmasters/tools/" target="_blank"><?php _e('Webmaster Tools', 'ms_robotstxt_manager');?></a> <?php _e('feature.', 'ms_robotstxt_manager');?> <?php _e('Select a Website or', 'ms_robotstxt_manager');?> <a href="http://support.google.com/webmasters/bin/answer.py?hl=en&answer=34592" target="_blank"><?php _e('Add a Website', 'ms_robotstxt_manager');?></a>....</p>
				<ol>
					<li><?php _e('On the Webmaster Tools Home page, click the site you want.', 'ms_robotstxt_manager');?></li>
					<li><?php _e('Under Health, click Blocked URLs.', 'ms_robotstxt_manager');?></li>
					<li><?php _e('If it is not already selected, click the Test robots.txt tab.', 'ms_robotstxt_manager');?></li>
					<li><?php _e('Copy the content of your robots.txt file, and paste it into the first box.', 'ms_robotstxt_manager');?></li>
					<li><?php _e('In the URLs box, list the site to test against.', 'ms_robotstxt_manager');?></li>
					<li><?php _e('In the User-agents list, select the user-agents you want.', 'ms_robotstxt_manager');?></li>
				</ol>
			<p><a href="http://support.google.com/webmasters/bin/answer.py?hl=en&answer=156449" target="_blank"><?php _e('Source', 'ms_robotstxt_manager');?></a></p>

			<hr />

<?php if ( is_network_admin() ) {?>
			<h2><?php _e('New Website Added to Network', 'ms_robotstxt_manager');?></h2>
			<?php _e('If all Websites use the saved Network default robots.txt file, click the "publish to network" button to copy the default robots.txt file over to any new Websites you have.', 'ms_robotstxt_manager');?><br />
			<p><strong><?php _e('Per Site', 'ms_robotstxt_manager');?></strong>: <?php _e('Change to the Website in the dropdown. Then click the "reset this website" button to copy the default robots.txt file to this Website. If needed, modify the robots.txt file and click the "update this website" button once done.', 'ms_robotstxt_manager');?></p>

			<hr />

			<h2><?php _e('Manage a Websites Robots.txt File', 'ms_robotstxt_manager');?></h2>
			<?php _e('To manage a Website directly, select the Website from the dropdown, then click the "change sites" button. This will display the robots.txt file for the selected Website. Change the robots.txt file how you like, once done click the "update this website" button to publish the modification.', 'ms_robotstxt_manager');?>

			<hr />

			<h2><?php _e('Disabling', 'ms_robotstxt_manager');?></h2>
			<strong><?php _e('Disable a Website', 'ms_robotstxt_manager');?></strong>: <?php _e('To disable the MS Robots.txt Manager on a Website, select the Website from the dropdown menu, then click the "change sites" button. With the Website\'s robots.txt file open, click the "disable this website" button. This will clear the robots.txt file and sitemap structure settings for this Website only, making the Wordpress default robots.txt file display.', 'ms_robotstxt_manager');?><br />
			<p><strong><?php _e('Disable across the Network', 'ms_robotstxt_manager');?></strong>: <?php _e('Select the default robots.txt file within the Text Area, click the delete on your keyboard, then click the "publish to network" button. You can not save a blank default robots.txt file, but you can publish a blank robots.txt file, which will disable the robots.txt file option for each Website within the Network.', 'ms_robotstxt_manager');?></p>

			<hr />

			<h2><?php _e('Resetting', 'ms_robotstxt_manager');?></h2>
			<strong><?php _e('Reset Default', 'ms_robotstxt_manager');?></strong>: <?php _e('Something wrong? No worries! When viewing the Networks robots.txt file, click the "reset to default" button to replace the displayed robots.txt file with the core "coded in" default robots.txt file.', 'ms_robotstxt_manager');?><br />
			<p><strong><?php _e('Reset Website', 'ms_robotstxt_manager');?></strong>: <?php _e('To reset a Websites robots.txt file, change to the Website within the dropdown, then click the "reset this website" button to pull in the "Networks Default Robots.txt file" (not the coded in default file).', 'ms_robotstxt_manager');?></p>

			<hr />

			<h2><?php _e('Presets / Examples Tab', 'ms_robotstxt_manager');?></h2>
			<?php _e('This feature allows you to quickly duplicate premade robots.txt files and a sitemap structure url, to either the default network wide robots.txt file or a selected Websites robots.txt file.', 'ms_robotstxt_manager');?><br />
			<p><strong><?php _e('To use', 'ms_robotstxt_manager');?></strong>: <?php _e('Select the Network or a Website from the dropdown. Check the box to add a sitemap structure, modify/enter a Sitemap Structure (not required). Finally, click the "set as default" button above the robots.txt file example you want to use.', 'ms_robotstxt_manager');?></p>

			<hr />
<?php } else {?>
			<h2><?php _e('Disabling', 'ms_robotstxt_manager');?></h2>
			<?php _e('To disable this Website click the "disable this website" button. Disabling this website restores the default Wordpress robots.txt file.', 'ms_robotstxt_manager');?><br />
			
			<hr />

			<h2><?php _e('Resetting', 'ms_robotstxt_manager');?></h2>
			<?php _e('To reset this Website click the "reset to default" button. Resetting this website duplicates the default network wide robots.txt file and sitemap structure to this website.', 'ms_robotstxt_manager');?><br />

			<hr />

			<h2><?php _e('Presets / Examples Tab', 'ms_robotstxt_manager');?></h2>
			<?php _e('This feature allows you to quickly duplicate premade robots.txt files and a sitemap structure url, to this Websites robots.txt file.', 'ms_robotstxt_manager');?><br />
			<p><strong><?php _e('To use', 'ms_robotstxt_manager');?></strong>: <?php _e('Check the box to add a sitemap structure, modify/enter a Sitemap Structure (not required). Click the "set as default" button above the robots.txt file example you want to use.', 'ms_robotstxt_manager');?></p>

			<hr />
<?php }?>

			<h2><?php _e('Sitemap Plugins', 'ms_robotstxt_manager');?></h2>
			<?php _e('The Multisite Robots.txt Manager plugin has been tested with', 'ms_robotstxt_manager');?>:<br />
			<p><a href="http://wordpress.org/extend/plugins/google-xml-sitemaps-with-multisite-support/" target="_blank"><?php _e('Google XML Sitemaps with Multisite support', 'ms_robotstxt_manager');?></a>: <?php _e('One of the best, works well together. (recommend) ', 'ms_robotstxt_manager');?></p>
			<p><a href="http://www.arnebrachhold.de/projects/wordpress-plugins/google-xml-sitemaps-generator/" target="_blank"><?php _e('BWP Google XML Sitemaps', 'ms_robotstxt_manager');?></a>: <?php _e('This is for "real" Multisite HOST Networks. If you use this plugin, use the Sitemap URL Structure feature to add sitemap URL\'s to unique Websites within the Network.', 'ms_robotstxt_manager');?></p>

<?php if ( $this->robotstxt_ms_version( $check = true ) ) {?>
			<hr />

			<h2><?php _e('Automate Tab', 'ms_robotstxt_manager');?></h2>
			<strong><?php _e('About', 'ms_robotstxt_manager');?></strong>: <?php _e('When new Websites are added to the Network, the Total Automation feature automatically duplicates and activates the robots.txt file and sitemap url structure below to each new Website.', 'ms_robotstxt_manager');?>
			<p><?php _e('By default, the robots.txt file and included sitemap structure (if any) is based off the default (network wide) robots.txt file. Changing the robots.txt file or sitemap structure below updates the automation settings ONLY and not the default settings for the plugin.', 'ms_robotstxt_manager');?></p>
			<p><strong><?php _e('To Use', 'ms_robotstxt_manager');?></strong>: <?php _e('First define the Sitemap URL Structure to use (Not Required). Modify the robots.txt file that will be duplicated to all newly created network Websites. Click the "save settings" button. Once done, scroll down and select "Start Automation" then click the "toggle automation" button.', 'ms_robotstxt_manager');?></p>
			<p><strong><?php _e('Mass Update Missing Robots.txt Files', 'ms_robotstxt_manager');?></strong>: <?php _e('Click the "mass update" button to use this feature. This feature updates all Websites missing a robots.txt file, and if defined the sitemap structure. Websites with an active robots.txt file will be ignored.', 'ms_robotstxt_manager');?></p>
<?php }?>

<?php if ( !$this->robotstxt_ms_version( $check = true ) ) {?>
			<hr />

			<h2><?php _e('What is the Pro Extension Plugin?', 'ms_robotstxt_manager');?></h2>
			<?php _e('The Pro Extension Plugin is an attachment plugin that expands the MS Robots.txt Manager Wordpress Plugin, adding an "Automate" tab to the menu. The plugin completely automates the creation of all future robots.txt files. No matter how new websites are added to the Network, the automation extension will populate the robots.txt file for you. For large or growing multisite networks, this can be an extreme amount of time saved!', 'ms_robotstxt_manager');?> [ <a href="http://msrtm.technerdia.com/" target="_blank"><?php _e('More Information', 'ms_robotstxt_manager');?></a> ]
<?php }?>

			<hr />
			<br />

			<ul>
				<li><strong>&bull; <a href="http://msrtm.technerdia.com/help/docs.html" target="_blank"><?php _e('Extended Help Documents', 'ms_robotstxt_manager');?></a></strong></li>
<?php if ( $this->robotstxt_ms_version( $check = true ) ) {?>
				<li><strong>&bull; <a href="http://msrtm.technerdia.com/help/docs/pro-upload.html" target="_blank"><?php _e('Where to Upload the Pro Automation Extension.', 'ms_robotstxt_manager');?></a></strong></li>
				<li><strong>&bull; <a href="http://msrtm.technerdia.com/help/docs/pro-confiure.html" target="_blank"><?php _e('Configuring the Pro Automation Extension.', 'ms_robotstxt_manager');?></a></strong></li>
				<li><strong>&bull; <a href="http://msrtm.technerdia.com/help/docs/pro-testing.html" target="_blank"><?php _e('Testing the Pro Extension Feature.', 'ms_robotstxt_manager');?></a></strong></li>
<?php }?>
			</ul>

			<br />
			<hr />
			<hr />
		</div> <!-- end postbox -->
			<?php /* page tabs */ echo $this->robotstxt_tab_links();?>
		</div> <!-- end inside -->

<script type="text/javascript">
if ( typeof tb_pathToImage != 'string' ) {
    var tb_pathToImage = "<?php echo get_bloginfo('url').'/wp-includes/js/thickbox'; ?>/loadingAnimation.gif";
}
if ( typeof tb_closeImage != 'string' ) {
    var tb_closeImage = "<?php echo get_bloginfo('url').'/wp-includes/js/thickbox'; ?>/tb-close.png";
}
</script>