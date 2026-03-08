<?php
require_once("library/common.php");
require_once("library/view.php");
$page = filter($_POST['page']).'.php';
$post_data = array();
foreach ($_POST as $key => $value) {
	$post_data[$key] = $value;
}
@require_once($page);
?>