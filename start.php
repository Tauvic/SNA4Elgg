<?php

elgg_register_event_handler('init', 'system', 'sna4elgg_init');

function sna4elgg_init() {
	elgg_register_admin_menu_item('administer', 'sna4elgg', 'administer_utilities');
	
	$base = elgg_get_plugins_path() . "sna4elgg/actions/sna4elgg";
	elgg_register_action('sna4elgg/download', "$base/download.php", 'admin');
	elgg_register_action('sna4elgg/export', "$base/export.php", 'admin');
	
	//elgg_register_plugin_hook_handler('cron', 'fiveminute', 'galliMassmail_send_mails');
	//elgg_register_plugin_hook_handler('register', 'menu:entity', 'galliMassmail_entity_menu_setup');
	elgg_register_library("sna4elgg-lib", elgg_get_plugins_path() . "sna4elgg/lib/sna4elgg/functions.php");
	elgg_load_library("sna4elgg-lib");
}	

