<?php
	$page_title = "SQLMap Инъекции";

	include_once ("config.php");

	if ($_SESSION["logged"] != "YES")
		header ("Location: login.php");

	$act = cleang ("act");

	if ($act == "view")
	{
		$fname = cleanp("fname");
		print file_get_contents ($kpath."reports_requests/".$fname);
		exit;
	}

	if ($act == "download")
	{
		$fname = cleang("fname");
	   	header("Content-type: text/plain");
	   	header("Content-Disposition: attachment; filename=$fname");
		print file_get_contents ($kpath."reports_requests/".$fname);
		exit;
	}

	include ("templates/requests.php");
?>