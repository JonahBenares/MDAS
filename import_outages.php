<?php 
include 'conn.php';

function get_capacity($conn,$resource_id){

		$get_cap = mysqli_query($conn,"SELECT capacity_dependable FROM powerplants pp INNER JOIN pp_resources ppr ON pp.powerplant_id = ppr.powerplant_id WHERE ppr.resource_id = '$resource_id'");
		$fetch_cap = mysqli_fetch_assoc($get_cap);
		return $fetch_cap['capacity_dependable'];
        
}

function get_min_hour($conn, $outage_date, $resource_id){
	$query_min = mysqli_query($conn, "SELECT MIN(delivery_hour) AS minhour FROM mps_visayas WHERE delivery_date = '$outage_date' AND resource_id = '$resource_id' AND mw ='0'");
	$fetch_min = mysqli_fetch_assoc($query_min);
	return $fetch_min['minhour'];
}


function get_count($conn, $outage_date, $resource_id){
	$query_count = mysqli_query($conn, "SELECT COUNT(rtd_id) AS outage_count FROM mps_visayas WHERE delivery_date = '$outage_date' AND resource_id = '$resource_id' AND mw ='0'");
	$fetch_count = mysqli_fetch_assoc($query_count);
	return $fetch_count['outage_count'];
}

$get_count = mysqli_query($conn, "SELECT outage_id FROM outage_profile_visayas");
$count_summ = mysqli_num_rows($get_count);
if($count_summ == 0){
	$summary_id = 1;
} else {
	$get_max_count = mysqli_query($conn, "SELECT MAX(summary_id) as maxid FROM outage_profile_visayas");
	$fetch_max_count = mysqli_fetch_assoc($get_max_count);
	$summary_id = $fetch_max_count['maxid'] + 1;
}

$previousdate = '';
$previousresource = '';
$previoushour = '';
$mps_v = mysqli_query($conn, "SELECT * FROM mps_visayas WHERE (type_id = '1' OR type_id = '6') AND mw = '0' ORDER BY `resource_id`,delivery_date, delivery_hour ASC");
while($fetch_mpsv = mysqli_fetch_array($mps_v)){
	//$min_hour = get_min_hour($conn, $fetch_mpsv['delivery_date'], $fetch_mpsv['resource_id']);
	
	 $outage_count = get_count($conn, $fetch_mpsv['delivery_date'], $fetch_mpsv['resource_id']);
	
	if($outage_count==24){
		 if (($previousdate !== '' && $previousdate !== $fetch_mpsv['delivery_date']) || ($previousresource !== '' && $previousresource !== $fetch_mpsv['resource_id'])) { 
		 	$summary_id++;
		}else {
			$summary_id = $summary_id;
		}

		//echo $fetch_mpsv['delivery_date'] . ", " . $fetch_mpsv['resource_id'] . ", " . $fetch_mpsv['delivery_hour'] . " = ". $outage_count . "-". $summary_id."<br>";
	} else {

		$min_hour = get_min_hour($conn, $fetch_mpsv['delivery_date'], $fetch_mpsv['resource_id']);
		if ($previoushour !== '' && $previoushour !== $fetch_mpsv['delivery_hour']){
			$diff = $fetch_mpsv['delivery_hour'] - $previoushour;
			if($diff>1){
				$summary_id++;
			} else {

				if (($previousdate !== '' && $previousdate !== $fetch_mpsv['delivery_date']) || ($previousresource !== '' && $previousresource !== $fetch_mpsv['resource_id'])) { 
				 	$summary_id++;
				}else {
					$summary_id = $summary_id;
				}
			}
		}
		
		
	}
	

	$previousdate = $fetch_mpsv['delivery_date'];
	$previousresource = $fetch_mpsv['resource_id'];
	$previoushour = $fetch_mpsv['delivery_hour'];

//echo $fetch_mpsv['delivery_date'] . ", " . $fetch_mpsv['resource_id'] . ", " . $fetch_mpsv['delivery_hour'] . " = ". $outage_count . "-". $summary_id."<br>";


	$query_count_outage = mysqli_query($conn, "SELECT outage_id FROM outage_profile_visayas WHERE outage_date = '$fetch_mpsv[delivery_date]' AND resource_id = '$fetch_mpsv[resource_id]' AND outage_interval ='$fetch_mpsv[delivery_hour]'");
	//echo "SELECT outage_id FROM outage_profile_visayas WHERE delivery_date = '$fetch_mpsv[delivery_date]' AND resource_id = '$fetch_mpsv[resource_id]' AND outage_interval ='$fetch_mpsv[delivery_hour]'<br>";
	$count_outage = mysqli_num_rows($query_count_outage);
	if($count_outage==0){

		$capacity_dependable = get_capacity($conn, $fetch_mpsv['resource_id']);
		$insert_outage = mysqli_query($conn, "INSERT INTO outage_profile_visayas (outage_date, outage_interval, summary_id, type_id, participant_id, resource_id, capacity_dependable) VALUES ('$fetch_mpsv[delivery_date]', '$fetch_mpsv[delivery_hour]', '$summary_id', '$fetch_mpsv[type_id]', '$fetch_mpsv[participant_id]', '$fetch_mpsv[resource_id]', '$capacity_dependable')");
	}
}

?>


