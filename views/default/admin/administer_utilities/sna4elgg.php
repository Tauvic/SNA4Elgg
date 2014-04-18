<?php
//$pais = get_input('pais');

//echo elgg_view_module('inline', "Correos seleccionados: "); 

$options = array('type' => 'user',
        'subtype' => ELGG_ENTITIES_ANY_VALUE,
        'count' => TRUE,
        'owner_guid' => ELGG_ENTITIES_ANY_VALUE,
        'offset' => 0,
        'limit' => 0
);

$num_users = elgg_get_entities($options);
/*
$num_frienshipts .= elgg_get_entities_from_relationship(array(
	'relationship' => 'friend',
	'relationship_guid' => elgg_get_page_owner_guid(),
	'types' => 'user',
	'count' => true
));
*/
//echo elgg_echo('graphexporter:users', array($num_users)) . "<br>";
//echo elgg_echo('graphexporter:users', array($num_friendships));
//echo elgg_view_module('inline', elgg_echo("graphexporter:format"), elgg_view_form('graphexporter/export')); 
 echo elgg_view_form('sna4elgg/export'); 

//get_users_listing($format);
