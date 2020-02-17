<?php
    include 'conn.php';
    include 'functions.php';

    $colors = array('#FFFF00','#8B008B', '#FF0000', '#7CFC00', '#8B4513','#00CED1','#DC143C', '#0000FF','#2F4F4F','#FF6347','#800000','#228B22','#BA55D3', '#DAA520','#8FBC8F','#556B2F','#696969','#00FFFF',  '#483D8B', '#008080',  '#BDB76B',   '#808000', '#A9A9A9',  '#9ACD32','#FF1493','#8B0000','#00FA9A','#66CDAA', '#FFDEAD','#FF8C00','#4B0082','#D2B48C','#FFA07A','#EE82EE');

    $current_year = date('Y');
    $color_series=0;
    $previousparticipant = '';

    $get_type = mysqli_query($conn, "SELECT type_id, type_name FROM pp_type");

    function getmo($month){
        if($month=='01'){
            $mo='00';
        }if($month=='02'){
            $mo='01';
        }if($month=='03'){
            $mo='02';
        }if($month=='04'){
            $mo='03';
        }if($month=='05'){
            $mo='04';
        }if($month=='06'){
            $mo='05';
        }if($month=='07'){
            $mo='06';
        }if($month=='08'){
            $mo='07';
        }if($month=='09'){
            $mo='08';
        }if($month=='10'){
            $mo='09';
        }if($month=='11'){
            $mo='10';
        }if($month=='12'){
            $mo='11';
        }

        return $mo;

    }
    if(empty($_POST)){
    $query = mysqli_query($conn, "SELECT DISTINCT resource_id AS resid, participant_id FROM outage_profile_visayas WHERE type_id= '1' AND outage_date LIKE '$current_year%' ORDER BY participant_id ASC");
     
    } else {
        $q = ' ';
        $filter = ' ';
        if(!empty($_POST['duration'])){

            $year = $_POST['year'];
            
            if($_POST['duration']=='semi'){

                if($_POST['semi']=='1'){
                    $filter .= "<b>Semi-Annual</b> = First half of " .$year; 
                    $first_half_start = $year."-01-01";
                    $first_half_end = $year."-06-30";
                    $q .= " outage_date BETWEEN '$first_half_start' AND '$first_half_end' AND ";
                }
                 if($_POST['semi']=='2'){
                    $filter .= "<b>Semi-Annual</b> = Second half " .$year; 
                    $second_half_start = $year."-07-01";
                    $second_half_end = $year."-12-31";
                    $q .= " outage_date BETWEEN '$second_half_start' AND '$second_half_end' AND ";
                }
            } 
            if($_POST['duration']=='yearly'){
                $filter .= "<b>Yearly</b> = " .$year; 
                $year = $_POST['year'];
                $q .= " outage_date LIKE '$year%' AND ";
            }
        } 
        $query_res ='(';
        if(!empty($_POST['resources'])){

             $filter_res = "<b>Resources </b>= "; 
            foreach($_POST['resources'] AS $res){
                 $filter_res .= $res . ", "; 
                $query_res.= "resource_id = '".$res . "' OR ";
            }

             $filter_res = substr($filter_res, 0, -2);

            $q_res = substr($query_res, 0, -3);
            $q_res.=")";

            $q .= $q_res;
        }

        //echo $q;

        $query = mysqli_query($conn, "SELECT DISTINCT resource_id AS resid, participant_id FROM outage_profile_visayas WHERE $q ORDER BY participant_id ASC");


    }
 /*$query2 = mysqli_query($conn, "SELECT DISTINCT resource_id AS resid, participant_id FROM outage_profile_visayas WHERE type_id= '1' AND outage_date LIKE '$current_year%' ORDER BY participant_id ASC");
     while($fetch2 = mysqli_fetch_assoc($query2)) {
         $get_date = mysqli_query($conn, "SELECT DISTINCT outage_date FROM outage_profile_visayas WHERE resource_id = '$fetch2[resid]' AND outage_date LIKE '2020-01%' ORDER BY outage_date ASC");
         //echo  "SELECT DISTINCT outage_date FROM outage_profile_visayas WHERE resource_id = '$fetch2[resid]' AND outage_date LIKE '2020-01%' ORDER BY outage_date ASC<br>";
         while($fetch_date = mysqli_fetch_assoc($get_date)){
        $year = date('Y',strtotime($fetch_date['outage_date']));
        $month = date('m',strtotime($fetch_date['outage_date']));
        $day = date('d',strtotime($fetch_date['outage_date']));
        echo '{ x: new Date('.$year.', '.$month .', '.$day.'), y: '.get_capacity_per_date($conn, $fetch2['resid'], $fetch_date['outage_date']).' },<br>';
        }  
     }*/

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
        <title>Market Data Analysis System</title>
        <link href="http://localhost/MDAS/assets/dist/css/style.css" rel="stylesheet">
        <link href="http://localhost/MDAS/assets/dist/css/pages/dashboard1.css" rel="stylesheet">
        <link href="http://localhost/MDAS/assets/dist/css/jquery.dataTables.min.css" rel="stylesheet">      
    </head>
    <body class="bg-white">      
        <style type="text/css">
            #month-sel5, #quarter-sel5, #year-sel5{
                display: none;
            }
            .bg-white{
                background: #fff;
            }
        </style>        
        <script>
            window.onload = function () {
                var selectBox = document.getElementById("selectBox5");
                var b = document.getElementById("quarter-sel5");
                var c = document.getElementById("year-sel5");
                selectBox.addEventListener('change', changeFunc);
                function changeFunc() {
                    if(this.value == "semi"){
                        b.style.display = "block";
                        c.style.display = "block";
                    
                    }else if (this.value == "yearly") {
                        b.style.display = "none";
                        c.style.display = "block";
                    };
                }

                var chart = new CanvasJS.Chart("lineOut", {
                  
                    axisX: {
                        valueFormatString: "MMM YYYY"
                    },
                  
                    toolTip: {
                        shared: true
                    },
                    legend: {
                        cursor: "pointer",
                        verticalAlign: "top",
                        horizontalAlign: "center",
                        dockInsidePlotArea: true,
                        itemclick: toogleDataSeries
                    },
                    data: [
                    <?php
                    while($fetch = mysqli_fetch_assoc($query)) {



                        if($previousparticipant !== '' && $previousparticipant !== $fetch['participant_id']){
                            $color_series++;
                        } else {
                            $color_series = $color_series;
                        }
                        
                        $get_date = mysqli_query($conn, "SELECT DISTINCT outage_date FROM outage_profile_visayas WHERE resource_id = '$fetch[resid]' ORDER BY outage_date ASC");
                        ?>
                      
                        {
                            type:"line",
                            
                            name: "<?php echo $fetch['resid']; ?>",
                            showInLegend: true,
                            markerSize: 0,
                            color:"<?php echo $colors[$color_series]; ?>",
                            yValueFormatString: "#,###",
                            dataPoints: [    
                            <?php
                            while($fetch_date = mysqli_fetch_assoc($get_date)){
                                $year = date('Y',strtotime($fetch_date['outage_date']));
                                $month = date('m',strtotime($fetch_date['outage_date']));
                                $mo = getmo($month);
                                $day = date('d',strtotime($fetch_date['outage_date']));
                                echo '{ x: new Date('.$year.', '.$mo .', '.$day.'), y: '.get_capacity_per_date($conn, $fetch['resid'], $fetch_date['outage_date'], 'visayas').' },';
                                }  
                            ?> 
                            ]
                        },
                    <?php 
                     $previousparticipant = $fetch['participant_id'];
                    } ?>
                    
                   ]
                });
                chart.render();

                function toogleDataSeries(e){
                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else{
                        e.dataSeries.visible = true;
                    }
                    chart.render();
                }}
            function selectAll(source) {
                checkboxes = document.getElementsByName('resources[]');
                for(var i in checkboxes)
                    checkboxes[i].checked = source.checked;
            }
        </script>
        <?php include('navbar.php'); ?>
        <div class="card oh">
            <div class="card-body ">
                <center>
                    <h2>Comparison of Outage with same plant Category (Visayas)</h2>
                </center>
                <div class="p-t-20">
                    <div class="row">                                
                        <div class="col-lg-10">
                            <?php 
                            if(!empty($filter) || !empty($filter)){
                                echo "<div class='alert alert-info m-b-0 p-1' role='alert'><span class='btn btn-xs btn-info disabled'>Filter Applied</span><span style='font-size: 12px'>". $filter . ((!empty($filter_res)) ? ", " .$filter_res : "" )." </span>
                                    <a href='http://localhost/MDAS/comparison_out_visayas.php' class='remove_filter alert-link pull-right btn btn-xs'><span class='fa fa-times'></span></a>
                                </div>";
                            } else {
                                 echo "<h4>Data:<b> ". $current_year . ", Coal</b></h4>";
                            } ?>
                           <div id="lineOut" style="height: 400px; width: 100%;"></div>   
                        </div>   
                        <div class="col-lg-2">
                            <form method="POST">
                                <div style="overflow-y: scroll;overflow-x:hidden;height: 350px;">
                                    <div class="p-r-20">
                                        <table width="100%">
                                            <tr>
                                                <td colspan="2" width="5%"><p class=" ">Filter <span class="fa fa-filter"></span></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" width="10%">
                                                    <div class="form-group m-b-5" id='duration'>
                                                        <select class="" style="width:100%"  id="selectBox5" name='duration'>
                                                            <option value=''>-Duration-</option>
                                                            <option value="semi">Semi-Annual</option>
                                                            <option value="yearly">Yearly</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>                                           
                                            <tr >
                                                <td colspan="2" width="10%">
                                                    <div class="form-group m-b-5"  id="quarter-sel5">
                                                        <select class="" style="width:100%"  name="semi">
                                                            <option value=''>Select Semi-Annual</option>
                                                            <option value="1">1st Half</option>
                                                            <option value="2">2nd Half</option>
                                                        </select> 
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr  >
                                                <td colspan="2" width="10%">
                                                    <div class="form-group m-b-5" id="year-sel5">
                                                        <select class="" style="width:100%"  name="year" required>
                                                            <option value=''>Select Year</option>
                                                            <?php for($y=2020; $y<=$current_year; $y++){ ?>
                                                                <option value='<?php echo $y; ?>'><?php echo $y; ?></option>
                                                            <?php } ?>
                                                        </select> 
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" width="10%">
                                                    <div class="form-group m-b-5">
                                                        <select style="width: 100%" id='type'>
                                                            <option value=''>Type</option>
                                                            <?php while($fetch_type = mysqli_fetch_assoc($get_type)){ ?>
                                                            <option value="<?php echo $fetch_type['type_id']; ?>"><?php echo $fetch_type['type_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>                                               
                                            <tr>
                                                <td>
                                                    <div id='resources'></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-info-alt btn-block" value="Filter" name="">
                            </form>
                        </div>                                                          
                    </div>
                </div>
            </div>
        </div> 

        <script src="http://localhost/MDAS/assets/dist/js/jquery.min.js"></script>
        <script src="http://localhost/MDAS/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="http://localhost/MDAS/assets/dist/js/waves.js"></script>       
        <script src="http://localhost/MDAS/assets/dist/js/jquery.canvasjs.min.js"></script>
      
    </body>
</html>
<script>
 $(document).ready(function() { 
    document.getElementById('type').onchange = function (){
           var redirect = 'http://localhost/MDAS/resources_list.php';
           var type = $("#type").val();
            $.ajax({
                type: 'POST',
                url: redirect,
                data: 'type='+type,
                success: function(data){
                   $("#resources").html(data);
            
           }
        }); 
    };
});
</script>