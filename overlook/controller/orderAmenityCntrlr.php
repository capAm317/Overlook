<?php
//This file is used to handle the ordering of amenities by the guests
require '../model/addquery.php';
require_once '../model/dbconnect.php';

$order = $_POST;

$n = $_POST['selquantity']; //gets sel quanity

$ret = addOrder($order); //if the order was added successfully

if($ret){
	header("location:../admin/amenityOrder.php");
}
else{
	echo "No Problem";
}
