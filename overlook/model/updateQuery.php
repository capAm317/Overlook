<?php
//All Required Files for the PHP file to function
require_once 'dbconnect.php'; //Database Connection

/** Follows this format
        
        1. Get Connection
            1.5 Process any parameters that need processing
        2. Prepare the SQL Statements
        3. Bind to parameters if there are any
        4. Execute the query
        5. Return the if the query was successfully updated

    **/

    //This will update the Room Status in the database if it is open or close
	function updateRoomStatus($id, $check){

		$conn = getConnection();

		$stmt = $conn->prepare('UPDATE rooms SET rm_status= ? WHERE idrooms=?');
		$stmt->bind_param("si", $check, $id);

		$ret = $stmt->execute();
		$conn->close();

		return $ret;

	}

	//Update the booking status of a certain booking if it is booked, checked in or checked out
	function updateBookingStatus($id, $check){

		$conn = getConnection();

		$stmt = $conn->prepare('UPDATE booking SET status= ? WHERE idreservations= ?');
		$stmt->bind_param("si", $check, $id);

		$ret = $stmt->execute();
		$conn->close();

		return $ret;

	}

	//Update the Total bill of the booker
	function updateTotalBill($id, $total){

		$conn = getConnection();

		$stmt = $conn->prepare('UPDATE booking SET totalAmount= ? WHERE idreservations= ?');
		$stmt->bind_param("ii", $total, $id);

		$ret = $stmt->execute();
		$conn->close();

		return $ret;

	}

	//Updates the discount column of the Booking
	//Parameter $id -> ID of the booking
	//Parameter $discount -> discount of the booker
	function updateDiscount($id, $discount){

		$conn = getConnection();

		$stmt = $conn->prepare('UPDATE booking SET discount= ? WHERE idreservations= ?');
		$stmt->bind_param("ii", $discount, $id);

		$ret = $stmt->execute();
		$conn->close();

		return $ret;

	}