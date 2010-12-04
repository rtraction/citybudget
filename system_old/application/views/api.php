<?php
switch($format) {
	case 'xml':
		//echo xml_encode($data); <-- wouldn't that be nice?
		$serializer = new XML_Serializer();
		/**/echo "XML support not yet implemented";
		break;
	case 'json':
	default:
		echo json_encode($data);
		/**/echo "<pre>";print_r($data);echo "</pre>";
	break;
}
exit;