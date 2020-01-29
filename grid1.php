<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Market Prices & Schedule</title>   
    <link rel="stylesheet" type="text/css" href="http://localhost/MDAS/assets/dist/css/style.css">
    <style type="text/css">
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #edf1f5;
        }
        @media (max-height: 1007px){
            .gvMain1{
                height: 858px;
                width: 1920px;
            }
        } 
        @media (max-height: 979px){
            .gvMain1{
                height: 830px;
                width: 1920px;
            }
        } 
        @media (max-height: 975px){
            .gvMain1{
                height: 820px;
                width: 1920px;
            }
        }  
        @media (max-height: 969px){
            .gvMain1{
                height: 800px;
                width: 1920px;
            }
        } 
        @media (max-height: 947px){
            .gvMain1{
                height: 798px;
                width: 1920px;
            }
        }
        @media (max-height: 937px){
            .gvMain1{
                height: 788px;
                width: 1920px;
            }
        }
        @media (max-height: 694px){
            .gvMain1{
                height: 545px;
                width: 1366px;
            }
        }
        @media (max-height: 668px){
            .gvMain1{
                height: 520px;
                width: 1366px;
            }
        }
        @media (max-height: 654px){
            .gvMain1{
                height: 500px;
                width: 1366px;
            }
        }
        @media (max-height: 652px){
            .gvMain1{
                height: 500px;
                width: 1366px;
            }
        }
        table {
          table-layout: fixed;
          border-spacing: 0px;
          border-collapse: separate;
          background-color: #fff;
        }

        td, th {
          padding-left: 5px;
          padding-right: 5px;
        }

       /* .tr_shaded:nth-child(even) {
          background: #e0e0e0;
        }

        .tr_shaded:nth-child(odd) {
          background: #ffffff;
        }*/

        .scrolly_table {
          white-space: nowrap;
          overflow: auto;
        }

        .fixed.freeze {
          z-index: 10;
          position: relative;
          /*padding: 3px 4px;*/
          /*border:1px solid #000;*/
        }

        .fixed.freeze_vertical {
          z-index: 5;
          position: relative;
          /*padding: 3px 4px;*/
          /*border:1px solid #000;*/
        }

        .fixed.freeze_horizontal {
          z-index: 1;
          position: relative;
          /*padding: 3px 4px;*/
          /*border:1px solid #000;*/
        }
        table tr th, table tr td{
            border:0.001rem solid #cccccc;
        }
    </style>
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
    $month = date('m');
    $year = date('Y');
    $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
    $from =$year."-".$month."-01";
    $to = $year."-".$month."-".$days;
    $query='';
} else {

    $query ='';
    if(!empty($_GET['year']) && empty($_GET['month'])){
        $month = date('m');
        $year = $_GET['year'];
        $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
        $from =$year."-".$month."-01";
        $to = $year."-".$month."-".$days;
    }

    if(!empty($_GET['month']) && empty($_GET['year'])){
        $month = str_pad($_GET['month'], 2, "0", STR_PAD_LEFT);
        $year = date('Y');
        $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
        $from =$year."-".$month."-01";
        $to = $year."-".$month."-".$days;
    }

    if(!empty($_GET['month']) && !empty($_GET['year'])){
        $month = str_pad($_GET['month'], 2, "0", STR_PAD_LEFT);
        $year = $_GET['year'];
        $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
        $from =$year."-".$month."-01";
        $to = $year."-".$month."-".$days;
    }

     if(empty($_GET['month']) && empty($_GET['year'])){
        $month = date('m');
        $year = date('Y');
        $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
        $from =$year."-".$month."-01";
        $to = $year."-".$month."-".$days;
    }


    if(!empty($_GET['type_id'])){
        $type_id = $_GET['type_id'];
        $query .=" AND type_id = '$type_id'";
        $filter_type = get_column($conn, "type_name", "pp_type", "type_id", $type_id);
    }
     if(!empty($_GET['participant_id'])){
        $part_id = $_GET['participant_id'];
        $query .=" AND participant_id = '$part_id'";
        $filter_part = $_GET['participant_id'];
    }
     if(!empty($_GET['resource_id'])){
        $resource = $_GET['resource_id'];
        $query .=" AND resource_id = '$resource'";
        $filter_res = $_GET['resource_id'];
    }

}


$rtd_q = mysqli_query($conn,"SELECT delivery_date,delivery_hour, type, type_id, participant_id,resource_id FROM mps_visayas WHERE delivery_date BETWEEN '$from' AND '$to' $query GROUP BY delivery_hour,resource_id ORDER BY resource_id,delivery_hour ASC");


function  get_rtd_value($conn, $column, $date, $resource_id, $delivery_hour){
  $rtd_val = mysqli_query($conn, "SELECT $column FROM mps_visayas WHERE delivery_date = '$date' AND resource_id = '$resource_id' AND delivery_hour = '$delivery_hour'");
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
    <div id="scrolling_table_2" class="scrolly_table scrolling_table_2 gvMain1" >
        <table class="table" style="border:1px solid #000">
            <tr>
                <th style="background-color:white" class="fixed freeze" rowspan="2"><center>Delivery <br>_Hour</center></th>
                <th style="background-color:white" class="fixed freeze" rowspan="2"><center>Region_ID</center></th>
                <th style="background-color:white" class="fixed freeze" rowspan="2"><center>Type_ID</center></th>
                <th style="background-color:white" class="fixed freeze" rowspan="2"><center>Participant_ID</center></th>
                <th style="background-color:white" class="fixed freeze" rowspan="2"><center>Resource_ID</center></th>
                <?php for($x=1;$x<=$days;$x++){ ?>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="3"><center><?php echo $x; ?></center></th>
                <?php } ?>                
            </tr>
            <tr>
                <?php for($x=1;$x<=$days;$x++){ ?> 
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">Price</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">Initial</th>
            <?php } ?> 
            </tr>
            <?php while($fetch = mysqli_fetch_array($rtd_q)):;?>
            <tr class="tr_shaded" style ="<?php echo ($fetch['delivery_hour']==1) ? "background: yellow;" : ''; ?>">
                <td class="fixed freeze_horizontal p-0" align="center">
                    <div class="p-l-5 p-r-5" style ="width:100%;<?php echo ($fetch['delivery_hour']==1) ? "background: yellow;" : ''; ?>">
                        <?php echo $fetch['delivery_hour']; ?>
                    </div>
                </td>
                <td class="fixed freeze_horizontal p-0">
                    <div class="p-l-5 p-r-5" style ="width:100%;<?php echo ($fetch['delivery_hour']==1) ? "background: yellow;" : ''; ?>">
                        <?php echo 'VISAYAS' ?>
                    </div>
                </td>
                <td class="fixed freeze_horizontal p-0">
                    <div class="p-l-5 p-r-5" style ="width:100%;<?php echo ($fetch['delivery_hour']==1) ? "background: yellow;" : ''; ?>">
                        <?php echo $fetch['type']; ?>
                    </div>
                </td>
                <td class="fixed freeze_horizontal p-0">
                    <div class="p-l-5 p-r-5" style ="width:100%;<?php echo ($fetch['delivery_hour']==1) ? "background: yellow;" : ''; ?>">
                        <?php echo $fetch['participant_id']; ?>
                    </div>
                </td>
                <td class="fixed freeze_horizontal p-0">
                    <div class="p-l-5 p-r-5" style ="width:100%;background-color: <?php echo get_row_color($conn, $fetch['type_id']); ?>; <?php echo ($fetch['type_id'] == '') ? 'background-color: #ffe1cb' : ''; ?>">
                        <center><?php echo $fetch['resource_id']; ?></center>
                    </div>
                </td>
                <?php for($x=1;$x<=$days;$x++){ 
                    $date=$year."-".$month."-".str_pad($x, 2, "0", STR_PAD_LEFT); 
                    $mw = get_rtd_value($conn, "mw", $date, $fetch['resource_id'], $fetch['delivery_hour']); ?> 
                    <td align="center" <?php if(($fetch['type_id'] == 1 || $fetch['type_id'] == 3) && $mw == 0 && !empty($mw)) { echo "style='color:red'"; } ?>><?php echo $mw; ?></td>
                    <td align="center"> <?php echo get_rtd_value($conn,"price", $date, $fetch['resource_id'], $fetch['delivery_hour']); ?></td>
                    <td align="center"> <?php echo get_rtd_value($conn,"initial", $date, $fetch['resource_id'], $fetch['delivery_hour']); ?></td>
                 <?php } ?>  
            </tr>
            <?php endwhile; ?> 
        </table>
    </div>
    <script type="text/javascript" src="http://localhost/MDAS/grid1.min.js" ></script>
</body>

</html>