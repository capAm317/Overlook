<?php

require 'model/dbconnect.php';

    $inx = 0;
    
    $conn = getConnection();

    $dates = array();

    $stmt = $conn->prepare("SELECT rs_checkin, rs_checkout, type FROM overlook.booking where rs_checkin > curdate() order by rs_checkin");
    
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows > 0){
    	while($row = $result->fetch_assoc()) {
        	$arrpack[$inx][0] = $row["rs_checkin"];
        	$arrpack[$inx][1] = $row["rs_checkout"];
        	$arrpack[$inx][2] = $row['type'];
        	$inx++;
        }
    }

    //for($ctr = 0; $ctr < count($arrpack); $ctr++){
        //echo $arrpack[$ctr][0] ."  ". $arrpack[$ctr][1] ."  ". $arrpack[$ctr][2] . "<br>";
    //}

    $dctr = 0;

    $stmt = $conn->prepare("SELECT * from (SELECT adddate('2010-01-01',t4*10000 + t3*1000 + t2*100 + t1*10 + t0) selected_date from
 (SELECT 0 t0 union SELECT 1 union SELECT 2 union SELECT 3 union SELECT 4 union SELECT 5 union SELECT 6 union SELECT 7 union SELECT 8 union SELECT 9) t0,
 (SELECT 0 t1 union SELECT 1 union SELECT 2 union SELECT 3 union SELECT 4 union SELECT 5 union SELECT 6 union SELECT 7 union SELECT 8 union SELECT 9) t1,
 (SELECT 0 t2 union SELECT 1 union SELECT 2 union SELECT 3 union SELECT 4 union SELECT 5 union SELECT 6 union SELECT 7 union SELECT 8 union SELECT 9) t2,
 (SELECT 0 t3 union SELECT 1 union SELECT 2 union SELECT 3 union SELECT 4 union SELECT 5 union SELECT 6 union SELECT 7 union SELECT 8 union SELECT 9) t3,
 (SELECT 0 t4 union SELECT 1 union SELECT 2 union SELECT 3 union SELECT 4 union SELECT 5 union SELECT 6 union SELECT 7 union SELECT 8 union SELECT 9) t4) v
where selected_date between ? and ?");
    

    for($ctr = 0; $ctr < count($arrpack); $ctr++){
        $stmt->bind_param("ss", $arrpack[$ctr][0], $arrpack[$ctr][1]);

        $stmt->execute();

    	$result = $stmt->get_result();

    	//echo "Customer# " . $ctr . " " . $arrpack[$ctr][2] . "<br>";

        if($result->num_rows > 0){
	    	while($row = $result->fetch_assoc()) {
	        	$dates[$dctr] = $row["selected_date"];
	        	//echo $dates[$dctr] . "<br>";
	        	$dctr++;
	        }
    	}
    	else{
    		//echo "walang laman";
    	}

    	//echo "<br><br>";
    }

    for($ctr = 0; $ctr < count($dates); $ctr++){
    	$dates[$ctr] = date("m-d-Y", strtotime($dates[$ctr]));
    }

    $newDates = array();
    $nCtr = 0;

    if($_GET['tpid'] == "corporate"){
    	echo json_encode($dates);
    }
    else{

        for($ctr = 0; $ctr < count($dates); $ctr++){
            $newArray = array_count_values($dates);

            foreach ($newArray as $key => $value) {
                if($value == 3){
                    $newDates[$nCtr] = $key;
                    $nCtr++;
                }

            }
            if($ctr == 0){
                break;
            }
        }
    }

    
    