<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Market Prices & Schedule</title>
    <link href="http://localhost/MDAS/assets/dist/css/web.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://localhost/MDAS/assets/dist/css/style.css">
    <script type="text/javascript">
        function mps_filter() {
            window.open("mps_luzon_filter.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=450,width=500,height=500");
        }
    </script>
</head>
<style type="text/css">
@media (max-height: 1007px){
    #gvMain1{
        height: 858px;
        width: 1920px;
    }
} 
@media (max-height: 979px){
    #gvMain1{
        height: 830px;
        width: 1920px;
    }
} 
@media (max-height: 975px){
    #gvMain1{
        height: 820px;
        width: 1920px;
    }
}  
@media (max-height: 969px){
    #gvMain1{
        height: 800px;
        width: 1920px;
    }
} 
@media (max-height: 947px){
    #gvMain1{
        height: 798px;
        width: 1920px;
    }
}
@media (max-height: 937px){
    #gvMain1{
        height: 788px;
        width: 1920px;
    }
}
@media (max-height: 694px){
    #gvMain1{
        height: 545px;
        width: 1366px;
    }
}
@media (max-height: 668px){
    #gvMain1{
        height: 520px;
        width: 1366px;
    }
}
@media (max-height: 654px){
    #gvMain1{
        height: 500px;
        width: 1366px;
    }
}
@media (max-height: 652px){
    #gvMain1{
        height: 500px;
        width: 1366px;
    }
}
</style>
<!-- <script type="text/javascript" src="http://localhost/MDAS/assets/dist/js/gridviewscroll.min.js" ac></script>
<script type="text/javascript">
    function mps_filter() {
        window.open("mps_filter.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=450,width=500,height=500");
    }
</script>
<script type="text/javascript">
    var gridViewScroll = null;
    window.onload = function () {
        gridViewScroll = new GridViewScroll({
            elementID: "gvMain",
            width: 1380,
            height: 600,
            freezeColumn: true,
            // freezeFooter: true,
            freezeColumnCssClass: "GridViewScrollItemFreeze",
            freezeFooterCssClass: "GridViewScrollFooterFreeze",
            freezeHeaderRowCount: 2,
            freezeColumnCount: 5,
            onscroll: function (scrollTop, scrollLeft) {
                console.log(scrollTop + " - " + scrollLeft);
            }
        });
        gridViewScroll.enhance();
    }
    function getScrollPosition() {
        var position = gridViewScroll.scrollPosition;
        alert("scrollTop: " + position.scrollTop + ", scrollLeft: " + position.scrollLeft);
    }
    function setScrollPosition() {
        var scrollPosition = { scrollTop: 50, scrollLeft: 50};

        gridViewScroll.scrollPosition = scrollPosition;
    }
</script> -->

<?php
$conn = mysqli_connect('localhost', 'root', '','db_mdas');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$filter_type='';
$filter_part='';
$filter_res='';
if(empty($_GET)){
    $region="LUZON";
    $month = date('m');
    $year = date('Y');
    $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);
    $from =$year."-".$month."-01";
    $to = $year."-".$month."-".$days;

    $query ='';   
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

    /*if(!empty($_GET['region'])){
        $region = $_GET['region'];
        $filter_reg = $_GET['region'];
    } 

    if(empty($_GET['region'])){
        $region = 'LUZON';
        $filter_reg = 'LUZON';
    }*/

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

    //echo "type_id=".$type_id;

}


  $rtd_q = mysqli_query($conn,"SELECT delivery_date,delivery_hour, region_id, type, type_id, participant_id,resource_id FROM rtd WHERE region_id = 'LUZON' AND delivery_date BETWEEN '$from' AND '$to' $query GROUP BY delivery_hour,resource_id ORDER BY resource_id,delivery_hour ASC");
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
                    <span class="m-r-20"><b>Region:</b> LUZON</span>   
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
    </table>
    <div style="overflow: scroll" id="gvMain1">
        <table cellspacing="0" id="gvMain" style="width: 100%; border-collapse: collapse;">
            <tr class="GridViewScrollHeader">
                <td colspan="3" style="background-color: #F4F4F4;">.</td>
                <td colspan="2" style="background-color: #F4F4F4;">.</td>
                <?php for($x=1;$x<=$days;$x++){ ?>
                    <th class="text-blk" colspan="3" scope="col"><center><?php echo $x; ?></center></th>
                <?php } ?> 
                <td>Nothing follows</td>
            </tr>
            <tr class="GridViewScrollHeader">
                <th class="text-blk" scope="col">Delivery_Hour</th>
                <th class="text-blk" scope="col">Region_ID</th>
                <th class="text-blk" scope="col">Type_ID</th>
                <th class="text-blk" scope="col">Participant_ID</th>
                <th class="text-blk" scope="col">Resource_ID</th>
                <?php for($x=1;$x<=$days;$x++){ ?>      
                    <th class="text-blk" scope="col">MW</th>
                    <th class="text-blk" scope="col">Price</th>
                    <th class="text-blk" scope="col">Initial</th>
                <?php } ?> 
                <td>Nothing follows</td> 

            </tr>
            <?php while($fetch = mysqli_fetch_array($rtd_q)):;?>
            <tr class="GridViewScrollItem hover-high">
                <td align="center"><?php echo $fetch['delivery_hour']; ?></td>
                <td align="center"><?php echo $fetch['region_id']; ?></td>
                <td align="center"><?php echo $fetch['type']; ?></td>
                <td align="center"><?php echo $fetch['participant_id']; ?></td>
                <td align="center" style="background-color: <?php echo get_row_color($conn, $fetch['type_id']); ?>; <?php echo ($fetch['type_id'] == '') ? 'background-color: #ffe1cb' : ''; ?>" ><?php echo $fetch['resource_id']; ?></td>
                <?php for($x=1;$x<=$days;$x++){ 
                    $date=$year."-".$month."-".str_pad($x, 2, "0", STR_PAD_LEFT); 
                    $mw = get_rtd_value($conn, "mw", $date, $fetch['resource_id'], $fetch['delivery_hour'],$fetch['region_id']); ?> 
                    <td align="center" <?php if(($fetch['type_id'] == 1 || $fetch['type_id'] == 3) && $mw == 0 && !empty($mw)) { echo "style='color:red'"; } ?>><?php echo $mw; ?></td>
                    <td align="center"> <?php echo get_rtd_value($conn,"price", $date, $fetch['resource_id'], $fetch['delivery_hour'],$fetch['region_id']); ?></td>
                    <td align="center"> <?php echo get_rtd_value($conn,"initial", $date, $fetch['resource_id'], $fetch['delivery_hour'],$fetch['region_id']); ?></td>
                 <?php } ?>  
                <td style="background: #444444"><h6 style="margin: 0px">Nothing follows Nothing follows</h6></td>

            </tr>        
            <?php endwhile; ?>        
        </table>
    </div>
    
</body>
<script>
     function setData(data) {
       
        var requestBinUrl = 'http://localhost/MDAS/mps_luzon.php?';
        window.location.href = requestBinUrl+data;
    }
</script>
</html>