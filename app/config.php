<?php
/**
 * config class
 * acts as install config file. it's uses for storing variables needed to
 * run the qoob in the global library (e.g. database connection information).
 * 
 * @author xero harrison <x@xero.nu>
 * @copyright (cc) creative commons - attribution-shareAlike 3.0 unported
 * @version 1.13
 * @package app
 * @subpackage config
 */
final class config extends qoob_config {
	public function init() {
		$this->data = array(
			//---qoob
			'debug'				=> true,
			'dirtyURLs'			=> false,
			//---database
			'db_host'			=> 'localhost',
			'db_user'			=> 'root',
			'db_pass'			=> 'toor',
			'db_name'			=> 'qoob',
			//---antispam
			'akismetKey'		=> 'o0o0o0o0o0o0o', 
			'siteURL'			=> 'http://your.qoob.site/', 
			'siteName'			=> 'your.qoob.site/0.0', 
		);
	}
}
?>