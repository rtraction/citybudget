<?php
switch($format) {
	case 'xml':
		//echo xml_encode(); <-- wouldn't that be nice?
		//break;
	case 'json':
	default:
		echo json_encode($data);
	break;
}
exit;