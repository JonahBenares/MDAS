<?php
function get_capacity($conn,$resource_id){

		$get_cap = mysqli_query($conn,"SELECT capacity_dependable FROM powerplants pp INNER JOIN pp_resources ppr ON pp.powerplant_id = ppr.powerplant_id WHERE ppr.resource_id = '$resource_id'");
		$fetch_cap = mysqli_fetch_assoc($get_cap);
		return $fetch_cap['capacity_dependable'];
        
}

function get_min_hour($conn, $table, $outage_date, $resource_id){
	$query_min = mysqli_query($conn, "SELECT MIN(delivery_hour) AS minhour FROM $table WHERE delivery_date = '$outage_date' AND resource_id = '$resource_id' AND mw ='0'");
	$fetch_min = mysqli_fetch_assoc($query_min);
	return $fetch_min['minhour'];
}


function get_count($conn, $table, $outage_date, $resource_id){
	$query_count = mysqli_query($conn, "SELECT COUNT(rtd_id) AS outage_count FROM $table WHERE delivery_date = '$outage_date' AND resource_id = '$resource_id' AND mw ='0'");
	$fetch_count = mysqli_fetch_assoc($query_count);
	return $fetch_count['outage_count'];
}

function get_summary_id($conn, $table){
	$get_count = mysqli_query($conn, "SELECT outage_id FROM $table");
	$count_summ = mysqli_num_rows($get_count);
	if($count_summ == 0){
		$summary_id = 1;
	} else {
		$get_max_count = mysqli_query($conn, "SELECT MAX(summary_id) as maxid FROM $table");
		$fetch_max_count = mysqli_fetch_assoc($get_max_count);
		$summary_id = $fetch_max_count['maxid'] + 1;
	}

	return $summary_id;
}

function get_column($conn, $column, $table, $where_col, $where_val){
    $get =  mysqli_query($conn, "SELECT $column FROM $table WHERE $where_col = '$where_val'");
    $fetch = mysqli_fetch_array($get);
    return $fetch[$column];
}

function get_interval($conn, $table, $summary_id){
    $get_min_interval = mysqli_query($conn, "SELECT min(outage_interval) AS min_interval FROM $table WHERE summary_id = '$summary_id'");
    $fetch_min_interval = mysqli_fetch_assoc($get_min_interval);

    $get_max_interval = mysqli_query($conn, "SELECT max(outage_interval) AS max_interval FROM $table WHERE summary_id = '$summary_id'");
    $fetch_max_interval = mysqli_fetch_assoc($get_max_interval);

    if($fetch_min_interval['min_interval'] == $fetch_max_interval['max_interval']){
        $interval = $fetch_max_interval['max_interval'];
    } else {
        $interval = $fetch_min_interval['min_interval'] . " - " . $fetch_max_interval['max_interval'];
    }
    return $interval;
}

  function get_capacity_per_date($conn,$resource_id, $date, $location){
  	if($location=='visayas'){
    	$get_cap = mysqli_query($conn, "SELECT sum(capacity_dependable) AS capdep FROM outage_profile_visayas WHERE resource_id = '$resource_id' AND outage_date = '$date'");
    	$fetch_cap = mysqli_fetch_assoc($get_cap);
    	
    } else if($location=='luzon'){
    	$get_cap = mysqli_query($conn, "SELECT sum(capacity_dependable) AS capdep FROM outage_profile_luzon WHERE resource_id = '$resource_id' AND outage_date = '$date'");
    	$fetch_cap = mysqli_fetch_assoc($get_cap);
    }
    return $fetch_cap['capdep'];
}

function get_month($month){
    if($month =='01'){
        $mo = '00';
    } else if ($month =='02'){
        $mo = '01';
    } else if ($month =='03'){
        $mo = '02';
    } else if ($month =='04'){
        $mo = '03';
    } else if ($month =='05'){
        $mo = '04';
    } else if ($month =='06'){
        $mo = '05';
    } else if ($month =='07'){
        $mo = '06';
    } else if ($month =='08'){
        $mo = '07';
    } else if ($month =='09'){
        $mo = '08';
    } else if ($month =='10'){
        $mo = '09';
    } else if ($month =='11'){
        $mo = '10';
    } else if ($month =='12'){
        $mo = '11';
    }

    return $mo;
}
?>