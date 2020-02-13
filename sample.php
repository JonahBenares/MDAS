   <?php
    include 'conn.php';
    include 'functions.php';

    $colors = array('#FFFF00','#8B008B', '#FF0000', '#7CFC00', '#8B4513','#00CED1','#DC143C', '#0000FF','#2F4F4F','#FF6347','#800000','#228B22','#BA55D3', '#DAA520','#8FBC8F','#556B2F','#696969','#00FFFF',  '#483D8B', '#008080',  '#BDB76B',   '#808000', '#A9A9A9',  '#9ACD32','#FF1493','#8B0000','#00FA9A','#66CDAA', '#FFDEAD','#FF8C00','#4B0082','#D2B48C','#FFA07A','#EE82EE');

    $current_year = date('Y');
    $color_series=0;
    $previousparticipant = '';

    $query = mysqli_query($conn, "SELECT DISTINCT resource_id AS resid, participant_id FROM outage_profile_visayas WHERE type_id= '1' AND outage_date LIKE '$current_year%' ORDER BY participant_id ASC");
?>
 <link href="http://localhost/MDAS/assets/dist/css/style.css" rel="stylesheet">
        <link href="http://localhost/MDAS/assets/dist/css/pages/dashboard1.css" rel="stylesheet">
        <link href="http://localhost/MDAS/assets/dist/css/jquery.dataTables.min.css" rel="stylesheet">   
     <script src="http://localhost/MDAS/assets/dist/js/report.js"></script>
      
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
<div id="lineOut" style="height: 400px; width: 100%;"></div>   

 <script src="http://localhost/MDAS/assets/dist/js/jquery.min.js"></script>
        <script src="http://localhost/MDAS/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="http://localhost/MDAS/assets/dist/js/waves.js"></script>       
        <script src="http://localhost/MDAS/assets/dist/js/jquery.canvasjs.min.js"></script>