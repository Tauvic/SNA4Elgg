<?php
$type = get_input("sna4elgg_type");
$anon = get_input("sna4elgg_anon");

// type == 0 => Users
// type == 1 => Groups

// anon == on => Anonimize
// anon == 0 => No Anonimize

elgg_load_library("sna4elgg-lib");

$anon = ($anon=="on") ? true:false;

if ($type == 0) generate_graph($anon, "friend");
else if ($type == 1) generate_graph($anon, "member");
else register_error("Option not found");


//else get_groups_listing($format, $anon);
