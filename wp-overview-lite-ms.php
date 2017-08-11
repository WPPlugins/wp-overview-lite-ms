<?php 
/*
Plugin Name: WP Overview (lite) MS
Plugin URI: https://slangji.wordpress.com/wp-overview-lite-ms/
Description: Show <code>Dashboard Overview Widget</code> and <code>Footer Memory Usage</code> on <code>Network Multi~Site</code> Environment with Less Consumption - Free Version - Build 2014-10-26
Author: sLaNGjIs
Author URI: https://slangji.wordpress.com/plugins/
Version: 2014.1026.2016.0
Requires at least: 3.0
Tested up to: 4.5
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network: true
Keytag: 74be16979710d4c4e7c6647856088456
 *
 * Indentation GNU style coding standard
 * Indentation URI //www.gnu.org/prep/standards/standards.html
 * Humans We are the humans behind
 * Humans URI //humanstxt.org/Standard.html
 *
 * LICENSING - license.txt
 *
 * [WP Overview (lite) MS](//wordpress.org/plugins/wp-overview-lite-ms/)
 *
 * Show Dashboard Overview Widget and Footer Memory Usage on Network Multi~Site Environment.
 *
 * Copyright 2007-2016 [slangjis](//slangji.wordpress.com/) ( email: <slangjis [at] googlegmail [dot] com> )
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](//wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or ( at your option ) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * on an "AS IS", but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](//www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * DISCLAIMER
 *
 * This program is distributed "AS IS" in the hope that it will be useful, but:
 * without any warranty of function, without any warranty of merchantability,
 * without any fitness for a particular or specific purpose, without any type
 * of future assistance from your own author or other authors.
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](//www.gnu.org/licenses/gpl-2.0.html)
 * and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * THERMS
 *
 * This uses (or it parts) code derived from
 *
 * wp-header-footer-login-log.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2009-2014 [slangjis](//slangji.wordpress.com/) ( email: <slangjis [at] googlegmail [dot] com> )
 *
 * wp-overview-lite.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2010-2014 [slangjis](//slangji.wordpress.com/) ( email: <slangjis [at] googlegmail [dot] com> )
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * This wp-header-footer-login-log.php uses (or it parts) code derived from
 *
 * wp-header-log.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2008-2014 [slangjis](//slangji.wordpress.com/) ( email: <slangjis [at] googlegmail [dot] com> )
 *
 * wp-footer-log.php by slangjis <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2007-2014 [slangjis](//slangji.wordpress.com/) ( email: <slangjis [at] googlegmail [dot] com> )
 *
 * according to the terms of the GNU General Public License version 2 (or later)
 *
 * According to the Terms of the GNU General Public License version 2 (or later) part of Copyright belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2007-2014 [slangjis](//slangji.wordpress.com/) ( email: <slangjis [at] googlegmail [dot] com> )
 *
 * VIOLATIONS
 *
 * [Violations of the GNU Licenses](//www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](//wordpress.org/plugins/about/guidelines/)
 * paragraphs 1,4,10,12,13,16,17 quality requirements.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * CODING
 *
 * This software implement [GNU style](//www.gnu.org/prep/standards/standards.html) coding standard indentation.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to
 * WordPress [Readme Validator](//wordpress.org/plugins/about/validator/) directives.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * HUMANS (humans.txt)
 *
 * We are the Humans behind this project [humanstxt.org](//humanstxt.org/Standard.html)
 *
 * This software meet detailed humans rights belongs to your own author and to their respective other authors.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 */

	/**
	 * @package WP Overview (lite) MS
	 * @subpackage WordPress PlugIn
	 * @description Show Dashboard Overview Widget and Footer Memory Usage on Network Multi~Site Environment.
	 * @install The configuration of this Plugin is Automatic!
	 * @requirements Not need other actions except activate, deactivate, or delete it.
	 * @development Code in Becoming!
	 * @author  slangjis
	 * @since   3.0+
	 * @tested  4.5+
	 * @branche 2013
	 * @build   2014-10-26
	 * @version 2014.1026.2055
	 * @status  stable trunk
	 * @license GPLv2 or later
	 * @indentation GNU style coding standard
	 * @keytag 74be16979710d4c4e7c6647856088456
	 */

	if ( ! function_exists( 'add_action' ) )
		{
			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );
				exit();
		}
	global $wp_version;
	if ( $wp_version < 3.0 )
		{
			wp_die( __( 'This Plugin Requires WordPress 3.0+ or Greater: Activation Stopped!', 'wp-overview-lite-ms' ) );
		}
	function wpoms_1st()
		{
			$wp_path_to_this_file = preg_replace( '/( .*)plugins\/( .*)$/', WP_PLUGIN_DIR . "/$2", __FILE__ );
			$this_plugin          = plugin_basename( trim( $wp_path_to_this_file ) );
			$active_plugins       = get_option( 'active_plugins' );
			$this_plugin_key      = array_search( $this_plugin, $active_plugins );

			if ( $this_plugin_key )
				{
					array_splice( $active_plugins, $this_plugin_key, 1 );
					array_unshift( $active_plugins, $this_plugin );
					update_option( 'active_plugins', $active_plugins );
				}
		}
	add_action( 'activated_plugin', 'wpoms_1st', 0 );
	function wpoms_nfo()
		{
			echo "\r\n<!-- Plugin WP Overview (lite) MS Active -->\r\n\r\n";
		}
	add_action( 'wp_head', 'wpoms_nfo', 0 );
	add_action( 'wp_footer', 'wpoms_nfo', 0 );
	add_action( 'admin_head', 'wpoms_nfo', 0 );
	add_action( 'admin_footer', 'wpoms_nfo', 0 );
	function wpoms_pral( $links )
		{
			$links[] = "<a title='Show Dashboard Overview' href='index.php'>" . __( 'Overview', 'wp-overview-lite-ms' ) . "</a>";
			return $links;
		}
	add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wpoms_pral', 10, 1 );
	function wpoms_prml( $links, $file )
		{
			if ( $file == plugin_basename( __FILE__ ) )
				{
					$links[] = '<a title="Offer a Beer to sLa" href="//slangji.wordpress.com/donate/">Donate</a>';
					$links[] = '<a title="Bugfix and Suggestions" href="//slangji.wordpress.com/contact/">Contact</a>';
					$links[] = '<a title="Visit other author plugins" href="//slangji.wordpress.com/plugins/">Other</a>';
				}
			return $links;
		}
	add_filter( 'plugin_row_meta', 'wpoms_prml', 10, 2 );
?>
<?php 
if ( is_admin() ) {
	class wp_overview_lite_ms {
		var $memory = false;
			function wpo() {
				return$this->__construct();
			}
			function __construct() {
				add_action( 'init', array( &$this, 'wpo_limit' ) );
				add_action( 'wp_dashboard_setup', array( &$this, 'wpo_dashboard' ) );
				add_filter( 'admin_footer_text', array( &$this, 'wpo_footer' ) );
				$this->memory = array();
			}
			function wpo_limit() {
				$this->memory[ 'wpo-limit' ] = ( int )ini_get( 'memory_limit' );
			}
			function wpo_load() {
				$this->memory[ 'wpo-load' ] = function_exists( 'memory_get_usage' )?round( memory_get_usage()/1024/1024,2):0;
			}
			function wpo_consumption() {
				$this->memory[ 'wpo-consumption' ] = round( $this->memory[ 'wpo-load' ]/$this->memory[ 'wpo-limit' ]*100,0);
			}
			function wpo_output() {
				$this->wpo_load();
				$this->wpo_consumption();
				$this->memory[ 'wpo-load' ] = empty( $this->memory[ 'wpo-load' ] ) ? __( '' ) : $this->memory[ 'wpo-load' ] . __( 'M' ); // __( '?' ) __( '0' )
?>
<?php 
			global $wpdb, $wp_version, $wpmu_version;
			$mysql_status = array();
			$mysql_vars   = array();
			foreach ( $wpdb->get_results( 'SHOW GLOBAL STATUS') as $result )
				{
					$mysql_status[$result->Variable_name] = $result->Value;
				}
			foreach ( $wpdb->get_results( 'SHOW GLOBAL VARIABLES') as $result )
				{
					$mysql_vars[$result->Variable_name] = $result->Value;
				}
			$uptime_days    = $mysql_status[ 'Uptime' ] / 86400;
			$uptime_hours   = ( $uptime_days - ( int ) $uptime_days ) * 24;
			$uptime_minutes = ( $uptime_hours - ( int ) $uptime_hours ) * 60;
			$uptime_seconds = ( $uptime_minutes - ( int ) $uptime_minutes ) * 60;
			$uptime_string  = ' ' . ( int ) $uptime_days . ' days, ' . ( int ) $uptime_hours . ' hours, ' . ( int ) $uptime_minutes . ' minutes, ' . ( int ) $uptime_seconds . ' seconds.';
?>
<ul><li><strong>Mem</strong>:
<strong>WP </strong><span><?php echo WP_MEMORY_LIMIT?> - <?php echo WP_MAX_MEMORY_LIMIT?></span><!-- (def)-->
<strong>Usage </strong><span><?php echo$this->memory['wpo-consumption'].'%'.' '.$this->memory['wpo-load']?></span><!-- of-->
<strong>PHP Limit </strong><span><?php echo$this->memory['wpo-limit'].'M *'?></span></li>
<li><br><strong>Server</strong>:
<strong>OS </strong><span><?php echo PHP_OS?></span>
<strong>Software </strong><span><?php echo$_SERVER['SERVER_SOFTWARE']?></span>
<strong>Version </strong><span><?php echo(PHP_INT_SIZE*8).__('Bit')?></span></li>
<li><strong>Name </strong><span><?php echo$_SERVER['SERVER_NAME']?></span>
<strong>Address </strong><span><?php echo$_SERVER['SERVER_ADDR']?></span>
<strong>Port </strong><span><?php echo$_SERVER['SERVER_PORT']?></span></li>
<li><strong>Type </strong><span><?php echo php_uname()?></span></li>
<li><br><strong>System</strong>:
<strong>PHP </strong><span><?php echo PHP_VERSION?></span>
<strong>Zend </strong><span><?php echo zend_version()?></span>
<strong>CHMOD DIR </strong><span><?php echo(int)FS_CHMOD_DIR?></span>
<strong>FILE </strong><span><?php echo(int)FS_CHMOD_FILE?></span></li>
<li><br><strong>Database</strong>:
<strong>SQL </strong><span><?php printf("%s\n",mysql_get_client_info())?></span>
<strong>Build </strong><span><?php echo$mysql_vars['version']?></span>
<strong>Charset </strong><span><?php echo DB_CHARSET?></span></li>
<li><strong>Name </strong><span><?php echo DB_NAME?></span>
<strong>Host </strong><span><?php echo DB_HOST?></span></li>
<li><br><strong>WordPress</strong>:
<strong>VER </strong><span><?php echo _e($wp_version)?></span>
<strong> Language </strong><span><?php echo _e(WPLANG)?></span>
<strong> Locale </strong><span><?php echo$cur_locale?></span></li>
<li><strong>Max</strong>:
<strong>Post </strong><span><?php echo _e(ini_get('post_max_size'))?></span>
<strong>Upload </strong><span><?php echo _e(ini_get('upload_max_filesize'))?></span>
<strong>Input </strong><span><?php echo ini_get('max_input_time')?>s</span>
<strong>Exec </strong><span><?php $et=ini_get('max_execution_time');if($et>1000)$et/=1000;echo$et?>s</span></li>
<li><br><strong>Debug State </strong><span><?php echo(int)WP_DEBUG?></span>
<strong>Display </strong><span><?php echo(int)WP_DEBUG_DISPLAY?></span>
<strong>Log </strong><span><?php echo(int)WP_DEBUG_LOG?></span>
<strong>Script </strong><span><?php echo(int)SCRIPT_DEBUG?></span>
<strong>Savequeries </strong><span><?php echo(int)SAVEQUERIES?></span>
<strong>Gzip </strong><span><?php echo(int)ENFORCE_GZIP?></span>
<!--<strong>Deprecated </strong><span><?php //echo(int)E_DEPRECATED?></span>--></li>
<li><strong>Disallow</strong>:
<strong>File Edit </strong><span><?php echo(int)DISALLOW_FILE_EDIT?></span>
<strong>File Mods </strong><span><?php echo(int)DISALLOW_FILE_MODS?></span>
<strong>Unfiltered HTML </strong><span><?php echo(int)DISALLOW_UNFILTERED_HTML?></span></li>
<li><br><strong>Automatic Background Updates</strong>:
<strong>Enabled </strong><span><?php echo(int)AUTOMATIC_UPDATER_DISABLED?></span>
<strong>Major </strong><span><?php echo(int)ALLOW_MAJOR_AUTO_CORE_UPDATES?></span>
<strong>Minor </strong><span><?php echo(int)ALLOW_MINOR_AUTO_CORE_UPDATES?></span></li>
<li><strong>Autoupdate</strong>:
<strong>Core </strong><span><?php echo(int)WP_AUTO_UPDATE_CORE?></span>
<strong>Plugins </strong><span><?php echo(int)WP_AUTO_UPDATE_PLUGIN?></span>
<strong>Themes </strong><span><?php echo(int)WP_AUTO_UPDATE_THEME?></span>
<strong>Translations </strong><span><?php echo(int)WP_AUTO_UPDATE_TRANSLATION?></span>
<strong>Dev </strong><span><?php echo(int)ALLOW_DEV_AUTO_CORE_UPDATES?></span></li>
<li><strong>Send Email </strong><span><?php echo(int)AUTOMATIC_UPDATES_SEND_DEBUG_EMAIL?></span>
<strong>Core Updated </strong><span><?php echo(int)AUTO_CORE_UPDATE_SEND_EMAIL?></span>
<strong>Reminder Updater </strong><span><?php echo(int)SEND_CORE_UPDATE_NOTIFICATION_EMAIL?></span><br></li>
<li><br><strong>SQL Uptime</strong>:<span><?php echo$uptime_string?></span><br></li>
<li><br><strong>Default Theme </strong><span><?php echo WP_DEFAULT_THEME?></span><em> (since wp-3.0)</em></li>
<li><strong>Active Plugins </strong><span><?php echo count(get_option('active_plugins'))?></span><em> (since wp-2.1)</em></li>
<li><strong>Allow DB Repair </strong><span><?php echo(int)WP_ALLOW_REPAIR?></span><em> (since wp-2.9)</em></li>
<li><strong>AutoSave </strong><span><?php echo(int)AUTOSAVE_ON?></span><strong> Interval </strong><span><?php echo(int)AUTOSAVE_INTERVAL.' seconds'?></span><em> (since wp-2.5)</em></li>
<li><strong>WP (Hyper - Super - W3 Total) Cache </strong><span><?php echo(int)WP_CACHE?></span><em> (since wp-2.5)</em></li>
<li><strong>Magpie RSS Cache </strong><span><?php echo(int)MAGPIE_CACHE_ON?></span><strong> Age </strong><span><?php echo(int)MAGPIE_CACHE_AGE.' seconds'?></span><em> (since wp-1.5)</em></li>
<li><strong>Simplepie Cache </strong><span><?php echo(int)SIMPLEPIE_CACHE_ON?></span><strong> Age </strong><span><?php echo(int)SIMPLEPIE_CACHE_AGE.' seconds'?></span><em> (since wp-2.8)</em></li>
<li><strong>Post Revisions </strong><span><?php echo(int)WP_POST_REVISIONS?></span><em> (since wp-2.6)</em></li>
<li><strong>Trash</strong> <span><?php echo(int)WP_TRASH?></span><strong> Empty </strong><span><?php echo(int)EMPTY_TRASH_DAYS.' days'?></span><em> (since wp-2.9)</em><br></li>
<li><br><strong><u>NETWORK - MU~LTI-SITE</u></strong></li>
<li><strong>404 </strong> (noblogredirect) <span><?php echo(int)NOBLOGREDIRECT?></span><em> (since wp-mu-2.6)</em></li>
<li><strong>Network </strong><span><?php echo(int)WP_ALLOW_MULTISITE?></span><em> (since wp-ms-3.0)</em><strong> Multisite </strong><span><?php echo(int)MULTISITE?></span><em> (since wp-ms-3.0.1)</em></li>
<li><strong>Sunrise </strong> (domain mapping) <span><?php echo(int)SUNRISE?></span><em> (since wp-mu-2.6)</em></li></ul>
<em><strong>Legend</strong> 0=disabled 1=enabled * PHP override WP value</em>
<?php 
			}
			function wpo_dashboard() {
				wp_add_dashboard_widget( 'wp_overview_lite_ms_dashboard_widget', 'Overview', array( &$this, 'wpo_output' ) );
			}
			function wpo_footer( $content ) {
				$this->wpo_load();
				$content.=' Mem Usage '.$this->memory[ 'wpo-load' ].'M'.' of '.$this->memory[ 'wpo-limit' ].'M';
			return $content;
			}
	}
add_action( 'plugins_loaded', create_function( '', '$memory = new wp_overview_lite_ms();' ) );
}
?>
<?php 
function wpoms_replace_footer_admin()
	{
		echo '<span id="footer-thankyou"></span>';
	}
add_filter( 'admin_footer_text', 'wpoms_replace_footer_admin' );
?>