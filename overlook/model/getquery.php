<?php
    
    //All Required Files for the PHP file to function
    require_once 'dbconnect.php'; //Database Connection

    /** Follows this format
        
        1. Get Connection
            1.5 Process any parameters that need processing
        2. Prepare the SQL Statements
        3. Bind to parameters if there are any
        4. Execute the query
        5. Return the Array of objects that you have queried

    **/

    //Gets all of the bookings inside the bookings table with specific fields
	function getBookings(){
		$inx = 0;
		$arrbook = array();
		$conn = getConnection();
                                        //These are the specific fields
        $stmt = $conn->prepare("SELECT B.idreservations, B.rs_checkin, B.rs_checkout, G.gs_name FROM booking B, guests G where G.reservations_idreservations = B.idreservations");
        
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
        	while($row = $result->fetch_assoc()){
        		$arrbook[$inx][0] = $row['rs_checkin'];
        		$arrbook[$inx][1] = $row['gs_name'];
        		$arrbook[$inx][2] = $row['rs_checkout'];
                $arrbook[$inx][3] = $row['idreservations'];
                $inx++;
        	}
        }
        $conn->close();  

        return $arrbook;
	}

    //Gets the bookings based on the type of package they reserved inside the bookings table with specific fields
    //Used in the Booking.php
	function getBookingsByType($type){
    	$inx = 0;
    	$arrbook = array();
    	$conn = getConnection();

        $stmt = $conn->prepare("SELECT idreservations, rs_checkin, rs_checkout from booking where rs_checkin > curdate() AND type = ?");
        $stmt->bind_param("s", $type);        
        $stmt->execute();

        $result = $stmt->get_result();
        

        if($result->num_rows > 0){
        	while($row = $result->fetch_assoc()){
        		$arrbook[$inx][0] = $row['idreservations'];
        		$arrbook[$inx][1] = $row['rs_checkin'];
        		$arrbook[$inx][2] = $row['rs_checkout'];
                        $inx++;
        	}
        }
        $conn->close();  

        return $arrbook;
	}

    //This will return an array of the details of the bookings that could be checked in today
	function getBookingsToday(){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT B.idreservations, B.datebkd, G.gs_name, G.gs_contact, B.type, P.pax, P.pooltype, P.time, P.ratetype, B.rs_checkin, P.num_rm, P.pax_pr_rm, B.datebkd FROM guests G, booking B, packages P where G.reservations_idreservations = B.idreservations AND B.packages_idpackages = P.idpackages AND B.status IS NULL order by B.datebkd desc, B.rs_checkin desc");
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $dte = $row['datebkd'];
                $pieces = explode("-", $dte);
                $id = $row['idreservations'];
                $totString = $pieces[0] . $pieces[1] . $pieces[2] . "-o-" . $id;
                $arrpack[$inx][0] = $totString;
                $arrpack[$inx][1] = $row["idreservations"];
                $arrpack[$inx][2] = $row["gs_name"];
                $arrpack[$inx][3] = $row["gs_contact"];
                $arrpack[$inx][4] = $row["type"];
                $arrpack[$inx][5] = $row["pax"];
                $arrpack[$inx][6] = $row["pooltype"];
                $arrpack[$inx][7] = $row["time"];
                $arrpack[$inx][8] = $row["ratetype"];
                $arrpack[$inx][9] = $row["rs_checkin"];
                $inx++;
            }
        }
        $conn->close(); 
        return $arrpack;
	}

    //Gets the Bookings that are checked In the resort
    function getBookingsCheckdin(){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT B.idreservations, B.datebkd, G.gs_name, G.gs_contact, B.type, P.pax, P.pooltype, P.time, P.ratetype, B.rs_checkin, P.num_rm, P.pax_pr_rm, B.datebkd FROM guests G, booking B, packages P where G.reservations_idreservations = B.idreservations AND B.packages_idpackages = P.idpackages AND B.status LIKE 'checked'");
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $dte = $row['datebkd'];
                $pieces = explode("-", $dte);
                $id = $row['idreservations'];
                $totString = $pieces[0] . $pieces[1] . $pieces[2] . "-o-" . $id;
                $arrpack[$inx][0] = $totString;
                $arrpack[$inx][1] = $row["idreservations"];
                $arrpack[$inx][2] = $row["gs_name"];
                $arrpack[$inx][3] = $row["gs_contact"];
                $arrpack[$inx][4] = $row["type"];
                $arrpack[$inx][5] = $row["pax"];
                $arrpack[$inx][6] = $row["pooltype"];
                $arrpack[$inx][7] = $row["time"];
                $arrpack[$inx][8] = $row["ratetype"];
                $arrpack[$inx][9] = $row["rs_checkin"];
                $inx++;
            }
        }
        $conn->close(); 
        return $arrpack;
    }

    //Gets all of the bookings inside the bookings table with specific fields
    function getBookingsByID($ID){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT B.idreservations, B.status, B.datebkd, G.gs_name, G.gs_contact, B.type, P.pax, P.pooltype, P.time, P.ratetype, B.rs_checkin, P.num_rm, P.pax_pr_rm, B.datebkd FROM guests G, booking B, packages P where G.reservations_idreservations = B.idreservations AND B.packages_idpackages = P.idpackages AND B.idreservations = ? LIMIT 0, 1");
        $stmt->bind_param("i", $ID);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows == 1){
            while($row = $result->fetch_assoc()) {
                //Setting up the Booking ID Format
                $dte = $row['datebkd'];
                $pieces = explode("-", $dte);
                $id = $row['idreservations'];
                $totString = $pieces[0] . $pieces[1] . $pieces[2] . "-o-" . $id;
                $retarr = array(
                    //List of data to be returned to the Javascript file
                    "bkId" => $totString,
                    "id" => $row["idreservations"],
                    "nme" => $row["gs_name"],
                    "cntc" => $row["gs_contact"],
                    "type" => $row["type"],
                    "pax" => $row["pax"],
                    "pltype" => $row["pooltype"],
                    "tme" => $row["time"],
                    "rttype" => $row["ratetype"],
                    "chckin" => $row["rs_checkin"],
                    "rm_pax" => $row["num_rm"],
                    "pax_pr_rm" => $row['pax_pr_rm'],
                    "dteBk" => $row['datebkd'],
                    "stat" => $row['status']
                );
                
                $conn->close(); 
                //Echoes the Json value of the array
                echo json_encode($retarr);
            }
        }
        else{
            //If the Array returns an empty query we will put the Name of the data to Zero and will display No Bookings Found
            $retarr2 = array(
                    "nme" => "Zero"
            );

            $conn->close(); 
            //Echoes the Json value of the array2
            echo json_encode($retarr2);
        }
    }

    //Gets the packages of the Resort
    function getPackages(){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT idpackages, pax, pooltype, time, ratetype FROM packages");
        
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $arrpack[$inx][0] = $row['idpackages'];
                $arrpack[$inx][1] = $row['pax'];
                $arrpack[$inx][2] = $row['pooltype'];
                $arrpack[$inx][3] = $row['time'];
                $arrpack[$inx][4] = $row['ratetype'];
                $inx++;
            }
        }
        $conn->close();  

        return $arrpack;
    }

    //Gets the booked rooms of a certain guest
    function getBkRms($ID){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT rooms_idrooms FROM rms_reservd where reservations_idreservations = ?");
        $stmt->bind_param("i", $ID);
        
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $arrpack[$inx] = $row['rooms_idrooms'];
                $inx++;
            }
        }
        $conn->close();  

        return $arrpack;
    }

    //Gets the list of amenities available in the resort
    function getAmenities(){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT * FROM amenities;");
        
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $arrpack[$inx][0] = $row['idamenities'];
                $arrpack[$inx][1] = $row['am_name'];
                $arrpack[$inx][2] = $row['am_price'];
                $inx++;
            }
        }
        $conn->close();  

        return $arrpack;
    }

    //Gets A certain Amenity based on its ID
    function getAmenity($aID){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT A.am_name, A.am_price FROM amenities A where A.idamenities = ?");
        $stmt->bind_param("i", $aID);
        
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $arrpack[$inx][0] = $row['am_name'];
                $arrpack[$inx][1] = $row['am_price'];
                $inx++;
            }
        }
        $conn->close();  

        return $arrpack;
    }

    //Gets the orders by their ID's of the guest
    function getOrderByID($ID){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT A.am_name, B.quantity, B.price FROM billing_ords B, amenities A where B.amenities_idamenities = A.idamenities and B.bo_idreservations = ?");
        $stmt->bind_param("i", $ID);
        
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $arrpack[$inx][0] = $row['am_name'];
                $arrpack[$inx][1] = $row['quantity'];
                $arrpack[$inx][2] = $row['price'];
                $inx++;
            }
        }
        $conn->close();  

        return $arrpack;
    }

    //Gets the 50% price of the package that the user has gotten 
    function getPricebyID($ID){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT price FROM packages P, booking B where B.packages_idpackages = P.idpackages AND B.idreservations = ?");
        $stmt->bind_param("i", $ID);
        
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $arrpack[$inx] = $row['price'];
                $inx++;
            }
        }
        $conn->close();  

        return $arrpack;
    }

    function getPricebyPackage($ID){
        $inx = 0;
        
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT price FROM packages P where P.idpackages = ?");
        $stmt->bind_param("i", $ID);
        
        $stmt->execute();

        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()) {
                $arrpack = array(
                    //List of data to be returned to the Javascript file
                    "prc" => $row["price"]
                );
        }
        $conn->close();  
        //Echoes the Json value of the array
        echo json_encode($arrpack);
        
    }

    //Gets the room max of the guest
    function getRoomsByPax($numPax){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT idrooms, rm_name, rm_status from rooms where rm_pax = ?");
        $stmt->bind_param("i", $numPax);
        
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $arrpack[$inx][0] = $row['idrooms'];
                $arrpack[$inx][1] = $row['rm_name'];
                $arrpack[$inx][2] = $row['rm_status'];
                $inx++;
            }
        }
        $conn->close();  

        return $arrpack;
    }

    //Gets the employee queried from the login
    function getEmployee($nme, $pass){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT idfrnt_desk, status FROM employees where usernme = ? AND password= ? LIMIT 0, 1");
        $stmt->bind_param("ss", $nme, $pass);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows == 1){
            while($row = $result->fetch_assoc()){
                $ret[0] = $row['idfrnt_desk'];
                $ret[1] = $row['status'];
            }
        }
        else {
            $ret[0] = 0;
            $ret[1] = "none";
        }

        $conn->close(); 

        return $ret;
    }

    //Gets the total bill of each guest that stayed in the resort
    function getReportofTotal(){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT B.idreservations, B.datebkd, G.gs_name, P.price, B.totalAmount, B.discount from packages P, booking B, guests G where B.idreservations = G.reservations_idreservations and B.packages_idpackages = P.idpackages");
        
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){

                $dte = $row['datebkd'];
                $pieces = explode("-", $dte);
                $id = $row['idreservations'];
                $totString = $pieces[0] . $pieces[1] . $pieces[2] . "-o-" . $id;
                $arrpack[$inx][0] = $totString;
                $arrpack[$inx][1] = $row['gs_name'];
                $down = $row['price'];
                $second = $row['totalAmount'];
                $dic = $row['discount'];

                $totality = ($down*0.5) + ($second*((100 - $dic)/100));

                $arrpack[$inx][2] = $totality;
                $inx++;
            }
        }
        $conn->close();  

        return $arrpack;
    }

    //Gets the Total income of the report
    function getTotalofReports(){
        $books = getReportofTotal();
        $totalIncome = 0;

        for($ctr = 0; $ctr < count($books); $ctr++){
            $totalIncome += $books[$ctr][2];
        }

        return $totalIncome;
    }

    //Gets the Bookings on a specific year and month
    function getBookersByDate($yr, $mth){
        $inx = 0;
        $arrpack = array();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT B.idreservations, B.datebkd, G.gs_name, P.pax, P.pooltype, P.time, P.ratetype, B.rs_checkin from packages P, booking B, guests G where B.idreservations = G.reservations_idreservations and B.packages_idpackages = P.idpackages and Year(rs_checkin) = ? and Month(rs_checkin) = ? order by rs_checkin");
        $stmt->bind_param("ii", $yr, $mth);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){

                $dte = $row['datebkd'];
                $pieces = explode("-", $dte);
                $id = $row['idreservations'];
                $totString = $pieces[0] . $pieces[1] . $pieces[2] . "-o-" . $id;
                $arrpack[$inx][0] = $row['rs_checkin'];
                $arrpack[$inx][1] = $totString;
                $arrpack[$inx][2] = $row['gs_name'];
                $arrpack[$inx][3] = $row['pax'];
                $arrpack[$inx][4] = $row['pooltype'];
                $arrpack[$inx][5] = $row['time'];
                $arrpack[$inx][6] = $row['ratetype'];
                $inx++;
            }
        }
        $conn->close();  

        return $arrpack;
    }
