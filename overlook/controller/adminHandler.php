<?php

//This files will handle the Admin's adding of the different data in the resort
//This file also handles checking in the guests with the addRoomsRsrved()
include '../model/addquery.php';
require_once '../model/updateQuery.php';

	if (isset($_POST['type']) && !empty($_POST['type'])) {
        $action = $_POST['type'];
        switch($action) {
            case 'amenity': amenityHandler(); break;
            case 'room': roomHandler(); break;
            case 'employee': employeeHandler(); break;
            case 'rooms': addRoomsRsrved(); break;
        }
    }

    function amenityHandler(){
    	$data = $_POST;

        echo addAmenities($data);
    }

    function roomHandler(){
    	$data = $_POST;

        echo addRooms($data);
    }

    function employeeHandler(){
    	$data = $_POST;

        echo addEmployee($data);
    }

    function addRoomsRsrved(){
        $data = $_POST;
        updateBookingStatus($_POST['id'], "checked");
        echo addReservedRoom($data);
    }