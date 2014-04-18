<?php
?>
	<?php
	echo '<div>';
    echo "Select which type of data will be included in the graph: User frienships (nodes are users), or group memberships (nodes represent users and groups).";
    echo '<br>';
	$labels = array("friendship", "group");
	echo elgg_view('input/dropdown', array(
   	     	'name' => 'sna4elgg_type',
       		'options_values' => array("User friendships", "Group memberships"),
       		'options' => $labels,
	));

	echo '</div><div>';
    //echo "Anonymize data to avoid including personal information into the graph. Please, do not trust too much in this anonymization, use it at your own risk.";
    //echo '<br>';
	//echo elgg_view('input/checkbox', array(
   	//     	'name' => 'sna4elgg_anon'
	//));
    //echo ' <strong>anonymize data</strong>';

	//echo "<br>";

	echo '</div>';

	echo elgg_view('input/submit', array('name' => 'submit', 'value' => elgg_echo('sna4elgg:update')));

    if (file_exists('/tmp/graph.gexf')) {
        echo "<a href='" . elgg_add_action_tokens_to_url(elgg_get_site_url()."action/sna4elgg/download") . "'>Download graph (built: " . date("m/d/Y h:i",filemtime("/tmp/graph.gexf")) . ")</a>";
    }
        
	?>
