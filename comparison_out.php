<?php
    include 'conn.php';
    include 'functions.php';

    $colors = array('#FFFF00','#8B008B', '#FF0000', '#7CFC00', '#8B4513','#00CED1','#DC143C', '#0000FF','#2F4F4F','#FF6347','#800000','#228B22','#BA55D3', '#DAA520','#8FBC8F','#556B2F','#696969','#00FFFF',  '#483D8B', '#008080',  '#BDB76B',   '#808000', '#A9A9A9',  '#9ACD32','#FF1493','#8B0000','#00FA9A','#66CDAA', '#FFDEAD','#FF8C00','#4B0082','#D2B48C','#FFA07A','#EE82EE');

    $current_year = date('Y');
    $color_series=0;
    $previousparticipant = '';

    $get_type = mysqli_query($conn, "SELECT type_id, type_name FROM pp_type");

    if(empty($_POST)){
    $query = mysqli_query($conn, "SELECT DISTINCT resource_id AS resid, participant_id FROM outage_profile_visayas WHERE type_id= '1' AND outage_date LIKE '$current_year%' ORDER BY participant_id ASC");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/MDAS/assets/images/favicon.png">
        <title>Market Data Analysis System</title>
        <link href="http://localhost/MDAS/assets/dist/css/style.css" rel="stylesheet">
        <link href="http://localhost/MDAS/assets/dist/css/pages/dashboard1.css" rel="stylesheet">
        <link href="http://localhost/MDAS/assets/dist/css/jquery.dataTables.min.css" rel="stylesheet">      
    </head>
    <body class="bg-white">
        <script src="http://localhost/MDAS/assets/dist/js/report.js"></script>
        <style type="text/css">
            #month-sel, #quarter-sel, #year-sel{
                display: none;
            }
            .bg-white{
                background: #fff;
            }
        </style>
        <script>
            window.onload = function () {

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
        
        $get_date = mysqli_query($conn, "SELECT DISTINCT outage_date FROM outage_profile_visayas WHERE resource_id = '$fetch[resid]'");
        ?>
      
        {
            type:"line",
            
            name: "<?php echo $fetch['resid']; ?>",
            showInLegend: true,
            markerSize: 0,
            color:"<?php echo $colors[$color_series]; ?>",
            yValueFormatString: "$#,###k",
            dataPoints: [    
            <?php
            while($fetch_date = mysqli_fetch_assoc($get_date)){
                $year = date('Y',strtotime($fetch_date['outage_date']));
                $month = date('m',strtotime($fetch_date['outage_date']));
                $day = date('d',strtotime($fetch_date['outage_date']));
                echo '{ x: new Date('.$year.', '.$month .', '.$day.'), y: '.get_capacity_per_date($conn, $fetch['resid'], $fetch_date['outage_date']).' },';
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
}

}
</script>
        <div class="page-wrapper ">
            <div class="card oh">
                <div class="card-body m-t-60">
                    <center>
                        <h2>Comparison of Outage with same plant Category (Visayas)</h2>
                    </center>
                    <div class="p-t-20">
                        <div class="row">                                
                            <div class="col-lg-10">
                               <div id="lineOut" style="height: 400px; width: 100%;"></div>   
                            </div>   
                            <div class="col-lg-2">
                                <form>
                                    <div style="overflow-y: scroll;overflow-x:hidden;height: 350px;">
                                        <div class="p-r-20">
                                            <table width="100%">
                                                <tr>
                                                    <td colspan="2" width="5%"><p class=" ">Filter <span class="fa fa-filter"></span></p></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="10%">
                                                        <div class="form-group m-b-5">
                                                            <select style="width: 100%">
                                                                <option value = ''>Duration</option>
                                                                <option value = 'semi'>Semi-Annual</option>
                                                                <option value = 'yearly'>Yearly</option>
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
                                               <div id='resources'></div>
                                                <tr>
                                                    <td width="1%" ><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
                                                </tr>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
                                                </tr>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
                                                </tr>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
                                                </tr>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
                                                </tr>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
                                                </tr>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
                                                </tr>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
                                                </tr>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
                                                </tr>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
                                                </tr>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
                                                </tr>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
                                                </tr>
                                                <tr>
                                                    <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                    <td>Resource ID</td>
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