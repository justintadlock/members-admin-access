<?php
/**
 * Primary class for setting up the plugin.
 *
 * @package   MembersAdminAccess
 * @author    Justin Tadlock <justin@justintadlock.com>
 * @copyright Copyright (c) 2018, Justin Tadlock
 * @link      http://themehybrid.com/plugins/members-admin-access
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Members\AddOns\AdminAccess;

class App {

	public $dir = '';

	public $namespace = 'members/addons/admin_access';

	public function __construct() {

		$this->setup();
		$this->includes();
	}

	public function setup() {

		$this->dir = plugin_dir_path( __FILE__ ) . '../';
	}

	public function includes() {

		require_once( $this->dir . 'app/functions.php' );

		if ( is_admin() ) {

			require_once( $this->dir . 'app/functions-admin.php' );
		}
	}
}
