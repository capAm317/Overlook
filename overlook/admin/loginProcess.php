<?php

	require_once '../model/getquery.php';

	$ret = getEmployee($_POST['cmsuser'], $_POST['cmspass']);

	if($ret[0] > 300 && $ret[1] == "frontDesk"){
		$_SESSION['idemp'] = $ret;
		header("location:fdcheckin.php");
	}
	else if($ret[0] > 300 && $ret[1] == "admin"){
		$_SESSION['idemp'] = $ret;
		header("location:adminindex.php");
	}
	else if($ret[0] == 0 && $ret[1] == "none"){
		header("location:failed.php");
	}
