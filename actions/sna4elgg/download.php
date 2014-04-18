<?php

$file = sys_get_temp_dir()."/graph.gexf";

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    unlink($file);
}

/*$format = get_input('graphexporter_format');

system_message("format: " . $format);
elgg_dump("hola");
elgg_log("hola", 'ERROR');

switch ($format) {
	case "elgg_send_email":
	case "email_notify_handler":
	case "notify_user":
	default:
	    register_error("Format: " . $format);
}
*/
//get_users_listing($format);

//register_error("Mal ");

//elgg_send_email("sistema@novagob.org", "sistema@novagob.org", $subject, $body . "\n" . $user->email);
//forward(REFERER);
