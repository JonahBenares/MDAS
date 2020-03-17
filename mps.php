<?php
include 'conn.php';
include 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Market Prices & Schedule</title>
    <link href="<?php echo base_url; ?>/assets/dist/css/web.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>/assets/dist/css/style.css">
    <script type="text/javascript">
        function mps_filter() {
            window.open("mps_filter.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=450,width=500,height=500");
        }
    </script>
</head>
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
    @media (max-height: 695px){
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


.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
    position: absolute;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 99;
    background: url(<?php echo base_url; ?>/assets/images/loader.gif) center no-repeat #fff;
}
.loader-st{
    width:200px;
    /*background:#000;*/
    height:100px;
    top:0;
    z-index:99;
    position:absolute;
    left:42%;
    border-radius:0px 0px 100px 100px;
    background-image: linear-gradient(45deg, #005aff, #00fff3);
    padding:20px 60px;
    text-align: center;
    box-shadow:0px 11px 14px 1px #d0d0d0;

}
.line {
    display: inline-block;
    width: 15px;
    height: 15px;
    border-radius: 15px;
    background-color: #fff;
}

.ring-1 {
    width: 10px;
    height: 10px;
    margin: 0 auto;
    padding: 10px;
    border: 7px dashed #fff;
    border-radius: 100%;
}

.ring-2 {
    position: relative;
    width: 45px;
    height: 45px;
    margin: 0 auto;
    border: 4px solid #fff;
    border-radius: 100%;
}

.ball-holder {
    position: absolute;
    width: 12px;
    height: 45px;
    left: 17px;
    top: 0px;
}

.ball {
    position: absolute;
    top: -11px;
    left: 0;
    width: 16px;
    height: 16px;
    border-radius: 100%;
    background: #4282B3;
}

.letter-holder {padding: 16px;}

.letter {
    float: left;
    font-size: 14px;
    color: #777;
}

.square {
    width: 12px;
    height: 12px;
    border-radius: 4px;
    background-color: #fff;
}

.spinner {
    position: relative;
    width: 45px;
    height: 45px;
    margin: 0 auto;
}

.bubble-1,
.bubble-2 {
    position: absolute;
    top: 0;
    width: 25px;
    height: 25px;
    border-radius: 100%;
    background-color: #fff;
}

.bubble-2 {
    top: auto;
    bottom: 0;
}

.bar {
    float: left;
    width: 15px;
    height: 6px;
    border-radius: 2px;
    background-color: #fff;
}

/* =Animate the stuff
------------------------ */
.load-1 .line:nth-last-child(1) {animation: loadingA 1.5s 1s infinite;}
.load-1 .line:nth-last-child(2) {animation: loadingA 1.5s .5s infinite;}
.load-1 .line:nth-last-child(3) {animation: loadingA 1.5s 0s infinite;}

.load-2 .line:nth-last-child(1) {animation: loadingB 1.5s 1s infinite;}
.load-2 .line:nth-last-child(2) {animation: loadingB 1.5s .5s infinite;}
.load-2 .line:nth-last-child(3) {animation: loadingB 1.5s 0s infinite;}

.load-3 .line:nth-last-child(1) {animation: loadingC .6s .1s linear infinite;}
.load-3 .line:nth-last-child(2) {animation: loadingC .6s .2s linear infinite;}
.load-3 .line:nth-last-child(3) {animation: loadingC .6s .3s linear infinite;}

.load-4 .ring-1 {animation: loadingD 1.5s .3s cubic-bezier(.17,.37,.43,.67) infinite;}

.load-5 .ball-holder {animation: loadingE 1.3s linear infinite;}

.load-6 .letter {
    animation-name: loadingF;
    animation-duration: 1.6s;
    animation-iteration-count: infinite;
    animation-direction: linear;
}

.l-1 {animation-delay: .48s;}
.l-2 {animation-delay: .6s;}
.l-3 {animation-delay: .72s;}
.l-4 {animation-delay: .84s;}
.l-5 {animation-delay: .96s;}
.l-6 {animation-delay: 1.08s;}
.l-7 {animation-delay: 1.2s;}
.l-8 {animation-delay: 1.32s;}
.l-9 {animation-delay: 1.44s;}
.l-10 {animation-delay: 1.56s;}

.load-7 .square {animation: loadingG 1.5s cubic-bezier(.17,.37,.43,.67) infinite;}

.load-8 .line {animation: loadingH 1.5s cubic-bezier(.17,.37,.43,.67) infinite;}

.load-9 .spinner {animation: loadingI 2s linear infinite;}
.load-9 .bubble-1, .load-9 .bubble-2 {animation: bounce 2s ease-in-out infinite;}
.load-9 .bubble-2 {animation-delay: -1.0s;}

.load-10 .bar {animation: loadingJ 2s cubic-bezier(.17,.37,.43,.67) infinite;}

@keyframes loadingA {
    0 {height: 15px;}
    50% {height: 35px;}
    100% {height: 15px;}
}

@keyframes loadingB {
    0 {width: 15px;}
    50% {width: 35px;}
    100% {width: 15px;}
}

@keyframes loadingC {
    0 {transform: translate(0,0);}
    50% {transform: translate(0,15px);}
    100% {transform: translate(0,0);}
}

@keyframes loadingD {
    0 {transform: rotate(0deg);}
    50% {transform: rotate(180deg);}
    100% {transform: rotate(360deg);}
}

@keyframes loadingE {
    0 {transform: rotate(0deg);}
    100% {transform: rotate(360deg);}
}

@keyframes loadingF {
    0% {opacity: 0;}
    100% {opacity: 1;}
}

@keyframes loadingG {
    0% {transform: translate(0,0) rotate(0deg);}
    50% {transform: translate(70px,0) rotate(360deg);}
    100% {transform: translate(0,0) rotate(0deg);}
}

@keyframes loadingH {
    0% {width: 15px;}
    50% {width: 35px; padding: 4px;}
    100% {width: 15px;}
}

@keyframes loadingI {
    100% {transform: rotate(360deg);}
}

@keyframes bounce  {
  0%, 100% {transform: scale(0.0);}
  50% {transform: scale(1.0);}
}

@keyframes loadingJ {
  0%,100% {transform: translate(0,0);}
  
  50% {
      transform: translate(80px,0);
      background-color: #f5634a;
      width: 25px;
  }
}

</style>


<?php
$filter_type='';
$filter_part='';
$filter_interval='';
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

    if(!empty($_GET['from']) && !empty($_GET['to'])){
        $from = $_GET['from'];
        $to = $_GET['to'];
        $datetime1 = date_create($from);
        $datetime2 = date_create($to);
        $interval = date_diff($datetime1, $datetime2);
        $days= $interval->days + 1;
        $filter_day = $from." TO ".$to;
    }

    if(!empty($_GET['interval'])){
        $interval = $_GET['interval'];
        $query .=" AND delivery_hour = '$interval'";
        $filter_interval =$interval;
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
    
$rtd_q = mysqli_query($conn,"SELECT delivery_date,delivery_hour, type, type_id, participant_id,resource_id FROM mps_visayas WHERE delivery_date BETWEEN '$from' AND '$to' $query GROUP BY delivery_hour,resource_id ORDER BY resource_id,delivery_hour ASC");
}




$pptype = mysqli_query($conn, "SELECT type_name, legend_color FROM pp_type" );
?>
<body>
<div class="loader-st animated fadeInDown">
    <div class="load-3">
        <!-- <p><b>Loading pa ni Haaaa</b></p> -->
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div> 
    <table class="table table-bordered" width="100%">
        <tr>
            <td width="1%" rowspan="4" colspan="5">         
            </td>
        </tr>
        <tr>
            <td rowspan="3">
                <a href="<?php echo base_url; ?>/masterfile/index/" class="btn btn-sm btn-info-alt" style="height: 4rem"><span class="fa fa-home"></span> </a>
            </td>
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
            <td colspan="20">
                <div class="alert alert-info m-b-0 p-1" role="alert">
                    <span class='btn btn-xs btn-info disabled'>Filter Applied</span>
                    <span class="m-r-20"><b>Date Range:</b>  <?php echo $filter_day; ?> </span>
                    <span class="m-r-20"><b>Interval:</b>  <?php echo $filter_interval; ?> </span>
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
    <div id="scrolling_table_2" class="scrolly_table scrolling_table_2 gvMain1" >
    <?php if(!empty($_GET)){ ?>
        <table class="table" style="border:1px solid #000">
            <tr>
                <th style="background-color:white" class="fixed freeze" rowspan="2"><center>Delivery <br>_Hour</center></th>
                <th style="background-color:white" class="fixed freeze" rowspan="2"><center>Region_ID</center></th>
                <th style="background-color:white" class="fixed freeze" rowspan="2"><center>Type_ID</center></th>
                <th style="background-color:white" class="fixed freeze" rowspan="2"><center>Participant_ID</center></th>
                <th style="background-color:white" class="fixed freeze" rowspan="2"><center>Resource_ID</center></th>
                <?php $range = date("d",strtotime($from)); for($x=1;$x<=$days;$x++){ ?>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="3"><center><?php echo (!empty($_GET)) ? $range : $x; ?></center></th>
                <?php $range++; } ?>                
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
                <?php 
                    $range = date("d",strtotime($from)); 
                    for($x=1;$x<=$days;$x++){ 
                        if(!empty($_GET)){
                            $year_from = date('Y', strtotime($from));
                            $month_from = date('m', strtotime($from));
                            $date=$year_from."-".$month_from."-".str_pad($range, 2, "0", STR_PAD_LEFT); 
                            
                        }else{
                            $date=$year."-".$month."-".str_pad($x, 2, "0", STR_PAD_LEFT);
                        }



                        $mw = get_rtd_value_visayas($conn, "mw", $date, $fetch['resource_id'], $fetch['delivery_hour']); 
                ?> 
                    <td align="center" <?php if(($fetch['type_id'] == 1 || $fetch['type_id'] == 3) && $mw == 0 && !empty($mw) && $fetch['resource_id'] != '5TPC_G01') { echo "style='color:red'"; } ?>><?php echo $mw; ?></td>
                    <td align="center"> <?php echo get_rtd_value_visayas($conn,"price", $date, $fetch['resource_id'], $fetch['delivery_hour']); ?></td>
                    <td align="center"> <?php echo get_rtd_value_visayas($conn,"initial", $date, $fetch['resource_id'], $fetch['delivery_hour']); ?></td>
                <?php $range++; } ?>  
            </tr>
            <?php endwhile; ?> 
        </table>
    <?php } ?>
    </div>
    <script type="text/javascript" src="<?php echo base_url; ?>/grid1.min.js" ></script>
    
</body>
<script>
     function setData(data) {
       
        var requestBinUrl = '<?php echo base_url; ?>/mps.php?';
        window.location.href = requestBinUrl+data;
    }
</script>
<script src="<?php echo base_url; ?>/assets/dist/js/jquery.min.js"></script>
<script src="<?php echo base_url; ?>/assets/dist/js/modernizr.js"></script>
<script>
    $(window).load(function() {
        $(".loader-st").fadeOut("slow");;
    });
</script>
</html>