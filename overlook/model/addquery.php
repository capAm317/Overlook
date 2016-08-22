<?php

//All Required Files for the PHP file to function
    require 'dbconnect.php'; //Database Connection
    require_once 'getquery.php'; //getters to the Database
    require_once 'updateQuery.php'; //updates values in Database

    /** Follows this format
        
        1. Get Connection
            1.5 Process any parameters that need processing
        2. Prepare the SQL Statements
        3. Bind to parameters if there are any
        4. Execute the query
        5. Return the success of the query

    **/

    //Adds the guest to the guest tables
    function addGuest($id, $reservation){
        $conn = getConnection();
        
        if($stmt = $conn->prepare("INSERT INTO guests (gs_name, gs_address, gs_contact, gs_email, reservations_idreservations) VALUES (?,?,?,?,?)")){
            $stmt->bind_param("ssssi", $reservation['gs_nme'], $reservation['gs_adrs'], $reservation['gs_cnct'], $reservation['gs_emad'], $id);
            $ret = $stmt->execute();
        }
        else{
            var_dump($conn->error);
        }
        
        $reserveID = $conn->insert_id;
        $conn->close();

        return $reserveID;
    }
    
    //Adds the Reservation of the Booking to the Bookings table
    function addReservation($reserve){
        $conn = getConnection();

        $chkin = date('Y-m-d', strtotime($reserve['rs_chkin']));
        $chkout = date('Y-m-d', strtotime($reserve['rs_chkout']));

        $stmt = $conn->prepare("INSERT INTO booking (rs_checkin, rs_checkout, packages_idpackages, type, datebkd) VALUES (?,?,?,?, curdate())");
        $stmt->bind_param("ssis", $chkin, $chkout, $reserve['package'], $reserve['type']);
        
        $ret = $stmt->execute();
        $reserveID = $conn->insert_id;
        $conn->close();  

        addGuest($reserveID, $reserve);

        return $reserveID;
    }

    //Adds the Orders of a specific guest
    function addOrder($order){
        $conn = getConnection();

        $item = getAmenity($order['selitem']);

        $price = $item[0][1];

        $price *= $order['selquantity'];
        
        $stmt = $conn->prepare("INSERT INTO billing_ords (bo_idreservations, amenities_idamenities, quantity, price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiii", $order['usernme'], $order['selitem'], $order['selquantity'], $price);

        $ret = $stmt->execute();

        $conn->close();  

        return $ret;
    }

    //Adds the Rooms that have been reserved for a guest
    function addReservedRoom($rm_rsvd){
        $conn = getConnection();

        $array = json_decode(stripslashes($rm_rsvd['rms_rs']));

        for($ctr = 0; $ctr < count($array); $ctr++){
            $stmt = $conn->prepare("INSERT INTO rms_reservd (reservations_idreservations, rooms_idrooms) VALUES (?, ?)");
            $stmt->bind_param("ii", $rm_rsvd['id'], $array[$ctr]);
            $ret = $stmt->execute();

            updateRoomStatus($array[$ctr], "closed");
        }

        $conn->close();  

        return $ret;
    }


    //Adds Amenities inside the Amenities Table in the Database
    function addAmenities($amenity){
        $conn = getConnection();
        
        $stmt = $conn->prepare("INSERT INTO amenities (am_name, am_price) VALUES (?, ?)");
        $stmt->bind_param("si", $amenity['fm_nme'], $amenity['fm_price']);

        var_dump($stmt);

        $ret = $stmt->execute();

        $conn->close();  
    }

    //Function of the admin that can add the rooms of the venue
    function addRooms($room){
        $conn = getConnection();
        
        $stmt = $conn->prepare("INSERT INTO rooms (rm_name, rm_price, rm_status, rm_pax) VALUES (?, ?, 'open', ?)");
        $stmt->bind_param("sii", $room['rm_nme'], $room['rm_prc'], $room['rm_pax']);
        
        $ret = $stmt->execute();
        $conn->close(); 

        return $ret; 
    }

    //function of the admin to add Employees to the system
    function addEmployee($emp){
        $conn = getConnection();
        
        $stmt = $conn->prepare("INSERT INTO employees (usernme, password, status) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $emp['usernme'], $emp['passwrd'], $emp['emptype']);

        var_dump($stmt);
        
        $ret = $stmt->execute();
        $conn->close(); 

        return $ret;  
    }