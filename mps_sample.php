<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>GridViewScroll</title>
  <!--   <link href="assets/dist/css/web.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/dist/css/style.css">
    <script type="text/javascript" src="assets/dist/js/gridviewscroll.js"></script> -->
    <script type="text/javascript">
        function mps_filter() {
            window.open("mps_filter.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=450,width=500,height=500");
        }
    </script>
   
</head>
<?php
$conn = mysqli_connect('localhost', 'root', '','db_mdas');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$filter_type='';
$filter_part='';
$filter_res='';
if(empty($_GET)){
    $region="VISAYAS";
    $month = date('m');
    $year = date('Y');
    $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
    $from =$year."-".$month."-01";
    $to = $year."-".$month."-".$days;

   
} 


  $rtd_q = mysqli_query($conn,"SELECT delivery_date,delivery_hour, region_id, type, type_id, participant_id,resource_id FROM rtd WHERE region_id = '$region' AND delivery_date BETWEEN '$from' AND '$to' GROUP BY delivery_hour,resource_id ORDER BY resource_id,delivery_hour ASC");
//echo "SELECT delivery_date,delivery_hour, region_id, type, type_id, participant_id,resource_id FROM rtd WHERE region_id = '$region' AND delivery_date BETWEEN '$from' AND '$to' $query GROUP BY delivery_hour,resource_id ORDER BY resource_id,delivery_hour ASC<br>";

function  get_rtd_value($conn, $column, $date, $resource_id, $delivery_hour, $region_id){
  $rtd_val = mysqli_query($conn, "SELECT $column FROM rtd WHERE delivery_date = '$date' AND resource_id = '$resource_id' AND delivery_hour = '$delivery_hour' AND region_id = '$region_id'");
  $fetch_val = mysqli_fetch_array($rtd_val);
  return $fetch_val[$column];
}

function get_column($conn, $column, $table, $where_col, $where_val){
    $get =  mysqli_query($conn, "SELECT $column FROM $table WHERE $where_col = '$where_val'");
    $fetch = mysqli_fetch_array($get);
    return $fetch[$column];
}

function get_row_color($conn, $type_id){
  $get_color = mysqli_query($conn, "SELECT legend_color FROM pp_type WHERE type_id = '$type_id'");
  $fetch_color = mysqli_fetch_array($get_color);
  return $fetch_color['legend_color'];
}

$pptype = mysqli_query($conn, "SELECT type_name, legend_color FROM pp_type" );
?>
<body>
    <!-- <table class="table table-bordered" width="100%">
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
                <a class="btn btn-info-alt btn-sm" onclick="mps_filter()"><span class="fa fa-filter"></span>Filter</a>
                <a href="report/upload_rtd/" class="btn btn-warning-alt btn-sm"><span class="fa fa-upload"></span>Upload</a>
            </td>
        </tr>
        <tr>
            <td width="9%">START DATE:</td>
            <td width="5%"><?php echo $from; ?></td>
            <td width="5%"></td>
        </tr>
        <tr>
            <td width="9%">END DATE:</td>
            <td><?php echo $to; ?></td>
            <td width="5%"></td> 
        </tr>    
        <?php if(!empty($_GET)){ ?>
        <tr>
            <td colspan="16">
                <div class="alert alert-info m-b-0 p-2" role="alert">
                    <span class='btn btn-xs btn-info disabled'>Filter Applied</span>
                    <span class="m-r-20"><b>Region:</b> <?php echo $filter_reg; ?></span>   
                    <span class="m-r-20"><b>Type:</b>  <?php echo $filter_type; ?> </span>
                    <span class="m-r-20"><b>Participant:</b><?php echo $filter_part; ?></span>
                    <span class="m-r-20"><b>Resource:</b>  <?php echo $filter_res; ?>  </span>
                    <a href='http://localhost/MDAS/mps.php' class='remove_filter alert-link pull-right btn btn-xs'>
                        <span class="fa fa-times"></span>
                    </a>
                </div>  
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="16"><br></td>
        </tr>   
    </table> -->
    <table cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <tr >
            <td colspan="3" style="background-color: #F4F4F4;">.</td>
            <td colspan="2" style="background-color: #F4F4F4;">.</td>
            <?php for($x=1;$x<=$days;$x++){ ?>
                <th colspan="3" ><center><?php echo $x; ?></center></th>
            <?php } ?> 
        </tr>
        <tr >
            <th >Delivery_Hour</th>
            <th >Region_ID</th>
            <th >Type_ID</th>
            <th >Participant_ID</th>
            <th>Resource_ID</th>
            <?php for($x=1;$x<=$days;$x++){ ?>      
                <th >MW</th>
                <th >Price</th>
                <th >Initial</th>
            <?php } ?>  
        </tr>
        <?php while($fetch = mysqli_fetch_array($rtd_q)):;?>
        <tr>
            <td align="center"><?php echo $fetch['delivery_hour']; ?></td>
            <td align="center"><?php echo $fetch['region_id']; ?></td>
            <td align="center"><?php echo $fetch['type']; ?></td>
            <td align="center"><?php echo $fetch['participant_id']; ?></td>
            <td><?php echo $fetch['resource_id']; ?></td>
            <?php for($x=1;$x<=$days;$x++){ 
                $date=$year."-".$month."-".str_pad($x, 2, "0", STR_PAD_LEFT); 
                $mw = get_rtd_value($conn, "mw", $date, $fetch['resource_id'], $fetch['delivery_hour'],$fetch['region_id']); ?> 
                <td align="center" ><?php echo $mw; ?></td>
                <td align="center"> <?php echo get_rtd_value($conn,"price", $date, $fetch['resource_id'], $fetch['delivery_hour'],$fetch['region_id']); ?></td>
                <td align="center"> <?php echo get_rtd_value($conn,"initial", $date, $fetch['resource_id'], $fetch['delivery_hour'],$fetch['region_id']); ?></td>
             <?php } ?>    
        </tr>        
        <?php endwhile; ?>        
    </table>
</body>

</html>