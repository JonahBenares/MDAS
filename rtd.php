<?php
$conn = mysqli_connect('localhost', 'root', '','db_mdas');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

$days='31';
$year='2019';
$month='12';

$rtd_q = mysqli_query($conn,"SELECT delivery_date,delivery_hour, region_id, type, type_id, participant_id,resource_id FROM rtd WHERE region_id = 'VISAYAS' AND delivery_date BETWEEN '2019-12-01' AND '2019-12-31' GROUP BY delivery_hour,resource_id ORDER BY resource_id,delivery_hour ASC");

function  get_rtd_value($conn, $column, $date, $resource_id, $delivery_hour, $region_id){
	$rtd_val = mysqli_query($conn, "SELECT $column FROM rtd WHERE delivery_date = '$date' AND resource_id = '$resource_id' AND delivery_hour = '$delivery_hour' AND region_id = '$region_id'");
	$fetch_val = mysqli_fetch_array($rtd_val);
	return $fetch_val[$column];
}

function get_row_color($conn, $type_id){
	$get_color = mysqli_query($conn, "SELECT legend_color FROM pp_type WHERE type_id = '$type_id'");
	$fetch_color = mysqli_fetch_array($get_color);
	return $fetch_color['legend_color'];
}

$pptype = mysqli_query($conn, "SELECT type_name, legend_color FROM pp_type" )
?>
<link rel="stylesheet" type="text/css" href="assets/dist/css/style.css">
<table class="table table-bordered" width="100%">
    <tr>
        <td width="1%" rowspan="4">
            <a href="masterfile/dashboard/" class="btn btn-sm btn-info-alt" style="height: 4rem"><span class="fa fa-home"></span> </a>
        </td>
    </tr>
    <tr>
        <td colspan="2">MARKET PRICES AND SCHEDULE</td>
        <td colspan="1"></td>
        <td colspan="10" rowspan="3" width="50%">
            <?php while($color = mysqli_fetch_array($pptype)){ ?>
            <div class="btn-group" style="padding: 0 5px 5px 5px;">
                <button style="background: <?php echo $color['legend_color']; ?>" class="btn btn-sm nosha"></button>
                <button style="background: #ececec; width:100px" class="btn btn-sm nosha"><?php echo $color['type_name']; ?></button>
            </div>
            <?php } ?>
        </td>
        <td rowspan="3" width="20%" align="center">
            <a href="javascript:void(0);" class="btn btn-info-alt btn-sm" data-toggle="modal" data-target="#filter"><span class="fa fa-filter"></span>Filter</a>
            <a href="javascript:void(0);" class="btn btn-success-alt btn-sm" data-toggle="modal" data-target="#export"><span class="fa fa-external-link"></span>Export</a>
            <a href="report/upload_rtd/" class="btn btn-warning-alt btn-sm"><span class="fa fa-upload"></span>Upload</a>
        </td>
    </tr>
    <tr>
        <td width="9%">START DATE:</td>
        <td width="5%">2019-11-01</td>
        <td width="5%"></td>
    </tr>
    <tr>
        <td width="9%">END DATE:</td>
        <td>2019-11-31</td>
        <td width="5%"></td> 
    </tr>
    <tr>
        <td colspan="16"><br></td>
    </tr>
</table>
<div style="overflow: scroll;height: 605px;background: white;" >
<table width="100%" border="1" cellpadding='5' style='border-collapse: collapse; font-size:11px; font-family: Arial, Helvetica, sans-serif;'>
    <thead>                    
        <tr>
            <th rowspan="2" width="2%">Delivery_Hour</th>
            <th rowspan="2" width="2%">Region_ID</th>
            <th rowspan="2" width="2%">Type_ID</th>
            <th rowspan="2" width="2%">Participant_ID</th>
            <th rowspan="2" width="2%">Resource_ID</th>
            <?php for($x=1;$x<=$days;$x++){ ?>
            <th colspan="3"><center><?php echo $x; ?></center></th>
            <?php } ?>  
        </tr>
        <tr>
            <?php for($x=1;$x<=$days;$x++){ ?>        
            <th>MW</th>
            <th>Price</th>
            <th>Initial</th>
            <?php } ?>                                
        </tr>
    </thead>
    <tbody style="border-bottom: 2px solid #000!important">
        <?php while($fetch = mysqli_fetch_array($rtd_q)){ ?>
            <tr>
                <td align="center"><?php echo $fetch['delivery_hour']; ?></td>
                <td align="center"><?php echo $fetch['region_id']; ?></td>
                <td align="center"><?php echo $fetch['type']; ?></td>
                <td align="center"><?php echo $fetch['participant_id']; ?></td>
                <td  style='color: <?php echo get_row_color($conn, $fetch['type_id']); ?>' align="center"><?php echo $fetch['resource_id']; ?></td>
                <?php for($x=1;$x<=$days;$x++){
                    $date=$year."-".$month."-".str_pad($x, 2, "0", STR_PAD_LEFT); 
                    $mw = get_rtd_value($conn, "mw", $date, $fetch['resource_id'], $fetch['delivery_hour'],$fetch['region_id']); ?>
                    <td <?php if(($fetch['type_id'] == 1 || $fetch['type_id'] == 3) && $mw == 0) { echo "style='color:red'"; } ?>><?php echo $mw; ?></td>
                    <td><?php echo get_rtd_value($conn,"price", $date, $fetch['resource_id'], $fetch['delivery_hour'],$fetch['region_id']); ?></td>
                    <td><?php echo get_rtd_value($conn,"initial", $date, $fetch['resource_id'], $fetch['delivery_hour'],$fetch['region_id']); ?></td> 
                <?php } ?>  
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>