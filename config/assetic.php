<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'default' => array (
		'assetic_base_dir'    => APPPATH.'views',
		'debug'               => false,
		'asset_save_dir'      => APPPATH.'/../public',
		'yui_comrpessor_path' => DOCROOT.'vendor/packagist/yuicompressor-bin/bin/yuicompressor.jar',
		'twig_auto_write'     => true,
	),
);
