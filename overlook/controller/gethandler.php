<?php

//This file is used for the ajax scripts that will get values and return them to the page

	require_once '../model/getquery.php'; // needs the getquery.php

    //This will check if the sent Type is filled or empty
        if (isset($_GET['type']) && !empty($_GET['type'])) {
            $action = $_GET['type'];
            switch($action) {
                case 'packages': packagesHandler(); break; //for getting the packages used in booking.php
                case 'bookin': BookingsAtCheckin(); break; //for getting the packages used in booking.php
                case 'dates': break; //Used for the disabled dates inside the booking.php
                case 'booker': bookerHandler(); break; //gets the information of the booker
                case 'rooms': roomsHandler(); break; //gets the rooms that are available
                case 'amenities': amenitiesHandler(); break; //Gets the Amenities that can be ordered by the guests
                case 'bookerP': getbkPrice(); break; //Gets the 50% downpayment
                case 'orders': ordersHandler(); break; // Gets the orders they have made during their stay
                case 'total' : getTotal(); break; //Gets the booking checkout bill that they have accumulated
                case 'reports': getReports(); break; //This will get the income report of the company
                case 'totalRep': totalReport(); break; //This will get the total income report of the company
                case 'calendarbooker': getBookerByDate(); break; //Gets the bookers for the specific month and year
            }
        }           

    //This function is used if the handler is called from an ajax call
    function is_ajax() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }

    //Fucntion used for 
    function packagesHandler(){
    	$arr2 = getPackages();

        for($ctr = 0; $ctr < count($arr2); $ctr++){
            if($ctr == 0){
                echo "<option selected='selected' value =" . $arr2[$ctr][0] . ">" . $arr2[$ctr][1] . " pax " . $arr2[$ctr][2] . " Pool " . $arr2[$ctr][3] . " " . $arr2[$ctr][4] . " Package</option>";  
            }
            else{
                echo "<option value =" . $arr2[$ctr][0] . ">" . $arr2[$ctr][1] . " pax " . $arr2[$ctr][2] . " Pool " . $arr2[$ctr][3] . " " . $arr2[$ctr][4] . " Package</option>";  
            }
        }
    }

    //This will get a particular booker using its ID
    function bookerHandler(){
        $data = $_GET['nmebookingid'];

        $guest = getBookingsByID($data);


    }

    //This will Gets either the bookings checked in or the bookings that can be checked in
    function BookingsAtCheckin(){

        if($_GET['page'] == "order"){
            $arrChkd = getBookingsCheckdin();

            if(count($arrChkd) > 0){
                for($ctr = 0; $ctr < count($arrChkd); $ctr++){
                    echo "<tr><td>". $arrChkd[$ctr][0] ."</td><td>". $arrChkd[$ctr][2] ."</td><td>". $arrChkd[$ctr][3] ."</td><td>". $arrChkd[$ctr][4] ."</td><td>". $arrChkd[$ctr][5] . " pax " . $arrChkd[$ctr][6] . " Pool " . $arrChkd[$ctr][7] . " " . $arrChkd[$ctr][8] . " Package</td><td>"
                    . $arrChkd[$ctr][9] ."</td><td><button type='button' class='btn btn-success' value=". $arrChkd[$ctr][1] ."><span class='fa fa-check'></span></button></td></tr>";
                }
            }
            else{
                echo "No Bookings Found";
            }
        }
        else if($_GET['page'] == "out"){
            $arrChkd2 = getBookingsCheckdin();

            if(count($arrChkd2) > 0){
                for($ctr = 0; $ctr < count($arrChkd2); $ctr++){
                    echo "<tr><td>". $arrChkd2[$ctr][0] ."</td><td>". $arrChkd2[$ctr][2] ."</td><td>". $arrChkd2[$ctr][3] ."</td><td>". $arrChkd2[$ctr][4] ."</td><td>". $arrChkd2[$ctr][5] . " pax " . $arrChkd2[$ctr][6] . " Pool " . $arrChkd2[$ctr][7] . " " . $arrChkd2[$ctr][8] . " Package</td><td>"
                    . $arrChkd2[$ctr][9] ."</td><td><button type='button' class='btn btn-danger' value=". $arrChkd2[$ctr][1] ."><span class='fa fa-close'></span></button></td></tr>";
                }
            }
            else{
                echo "No Bookings Found";
            }
        }
        else if($_GET['page'] == "check"){
            $arrBktoday = getBookingsToday();

            if(count($arrBktoday) > 0){
                for($ctr = 0; $ctr < count($arrBktoday); $ctr++){
                    echo "<tr><td>". $arrBktoday[$ctr][0] ."</td><td>". $arrBktoday[$ctr][2] ."</td><td>". $arrBktoday[$ctr][3] ."</td><td>". $arrBktoday[$ctr][4] ."</td><td>". $arrBktoday[$ctr][5] . " pax " . $arrBktoday[$ctr][6] . " Pool " . $arrBktoday[$ctr][7] . " " . $arrBktoday[$ctr][8] . " Package</td><td>"
                    . $arrBktoday[$ctr][9] ."</td><td><button type='button' class='btn btn-success' value=". $arrBktoday[$ctr][1] ."><span class='fa fa-check'></span></button></td><td><button type='button' class='btn btn-danger' value=". $arrBktoday[$ctr][1] ."><span class='fa fa-close'></span></button></td></tr>";
                }
            }
            else{
                echo "No Bookings Found";
            }
        }
        
    }

    //Gets the rooms that can be reserved
    function roomsHandler(){
        $arr3 = getRoomsByPax($_GET['value']);

        for($ctr = 0; $ctr < count($arr3); $ctr++){
            if($arr3[$ctr][2] == "closed"){
                echo "<tr><td class='td-room td-room-not-avail'>" . $arr3[$ctr][0] . "</td></tr>"; 
            }
            else{
                echo "<tr><td class='td-room td-room-avail'>" . $arr3[$ctr][0] . "</td></tr>"; 
            }
            
        }
    }

    //Gets the amenities in the resort
    function amenitiesHandler(){
        $arr3 = getAmenities();

        for($ctr = 0; $ctr < count($arr3); $ctr++){
            echo "<option value =" . $arr3[$ctr][0] . ">" . $arr3[$ctr][1] . "-" . $arr3[$ctr][2] . "</option>";  
        }
    }

    //Gets the 50% price of the booking fee
    function getbkPrice(){
        $data = $_GET['pckgid'];

        getPricebyPackage($data);
    }

    //Displays the orders made
    function ordersHandler(){
        
        $data = getOrderByID($_GET['nmebookingid']);

        $totalS = 0;
        $totalQ = 0;
 
        for($ctr = 0; $ctr < count($data); $ctr++){

            $totalS += $data[$ctr][2];
            $totalQ += $data[$ctr][1];

            echo "<tr><td>" . $data[$ctr][0] . "</td><td>" . $data[$ctr][1] . "</td><td>" . $data[$ctr][2] . "</td></tr>";  
        }

        $id = $_GET['nmebookingid'];

        $ret = getPricebyID($id);

        $presyo = 0;

        for($ctr1 = 0; $ctr1 < count($ret); $ctr1++){
            $presyo = $ret[$ctr1];
        }
        

        echo "<tr><td>Package Payment</td><td>N/A</td><td>" . $presyo*.5 . "</td></tr>"; 
    }

    //Gets the Total quantity and the Total bill of the orders
    function getTotal(){
        $data = getOrderByID($_GET['nmebookingid']);

        $totalS = 0;
        $totalQ = 0;
 
        for($ctr = 0; $ctr < count($data); $ctr++){

            $totalS += $data[$ctr][2];
            $totalQ += $data[$ctr][1];
        }

        $id = $_GET['nmebookingid'];

        $ret = getPricebyID($id);

        $presyo = 0;

        for($ctr1 = 0; $ctr1 < count($ret); $ctr1++){
            $presyo = $ret[$ctr1];
        }

        $totalS += $presyo * .5;

        echo "<tr><td>Total</td><input type='hidden' id='totalS' name='totalAmount' value=" . $totalS . "><td>" . $totalQ . "</td><td id='total'>" . $totalS . "</td></tr>";
    }

    //Gets the reports for the admin
    function getReports(){
        $data = getReportofTotal();

        for($ctr = 0; $ctr < count($data); $ctr++){
            echo "<tr><td>". $data[$ctr][0] ."</td><td>". $data[$ctr][1] ."</td><td>". $data[$ctr][2] ."</td></tr>";
        }
        
    }

    //Gets the total income from the reports
    function totalReport(){
        $totalinc = getTotalofReports();

        echo $totalinc;
    }

    //Gets the Bookers by date and year
    function getBookerByDate(){
        $arr1 = getBookersByDate($_GET['yr'], $_GET['mth']);

        if(count($arr1) > 0){
            for($ctr = 0; $ctr < count($arr1); $ctr++){
                echo "<tr><td>". $arr1[$ctr][0] ."</td><td>". $arr1[$ctr][1] ."</td><td>". $arr1[$ctr][2] ."</td><td>". $arr1[$ctr][3] . " pax " . $arr1[$ctr][4] . " Pool " . $arr1[$ctr][5] . " " . $arr1[$ctr][6] . " Package</td></tr>";
            }
        }
        else{
            echo "<tr><td>No Bookings Found</td></tr>";
        }

        
    }