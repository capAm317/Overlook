<?php

/* 
 * Used to handle the reservation of the booking
 */

require '../model/addquery.php';
require_once '../model/dbconnect.php';


$reserve = $_POST;

$ret = addReservation($reserve); // If it was added properly

if($ret > 0){
	$redirect = 'location:../bookingredirect.php?user=' . $ret; //Redirect to this page
	header($redirect);
}
else{
	echo "Sorry Try again"; //else
}