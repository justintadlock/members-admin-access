<?php
/**
 * Loads the plugin.
 *
 * @package   MembersAdminAccess
 * @author    Justin Tadlock <justin@justintadlock.com>
 * @copyright Copyright (c) 2018, Justin Tadlock
 * @link      http://themehybrid.com/plugins/members-admin-access
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Members\AddOns\AdminAccess;

require_once( plugin_dir_path( __FILE__ ) . '../app/class-app.php' );

function app() {

	static $instance = null;

	if ( is_null( $instance ) )
		$instance = new App();

	return $instance;
}

app();
