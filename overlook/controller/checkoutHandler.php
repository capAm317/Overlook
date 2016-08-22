<?php


//This file is used to checkout a particular guest
require_once '../model/updateQuery.php'; // updates guests constraints
require_once '../model/getquery.php'; //Gets a particular array

	$data = $_POST;

	$arr = array();

	$arr[0] = updateBookingStatus($_POST['usernme'], "out"); // Updated the booking status

	$arr[1] = updateTotalBill($_POST['usernme'], $_POST['tots2']); // Updated the Total Bill

	$arr[2] = updateDiscount($_POST['usernme'], $_POST['discount']); //Updates the discount file

	$rms_rsrvd = getBkRms($_POST['usernme']); //Gets the rooms rsrved of the guest

	for ($i=0; $i < count($rms_rsrvd); $i++) { 
		updateRoomStatus($rms_rsrvd[$i], "open"); // opens the rooms reserved
	}

	echo $arr[0] . $arr[1] . $arr[2];

	if($arr[0] && $arr[1] && $arr[2]){
		header("location:../admin/fdcheckout2redirect.php");
	}
	else{
		echo "Wrong";
	}

