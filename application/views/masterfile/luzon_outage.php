<?php
$CI=& get_instance();
//$CI->outage_graph_luzon($_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']);
?>
<style>
    body{
        background-color: #fff;
    }
</style>
<script type="text/javascript">
window.onload = function () {

<?php 
if(!empty($_POST)) {


    /******************************************  WITH OUTAGE TYPE BUT NO DURATION *************************************************/
    if((!empty($_POST['outage_type']) && empty($_POST['duration'])) || (!empty($_POST['outage_type']) && !empty($_POST['duration']))){
        ?>
       var chart = new CanvasJS.Chart("piechartOutageLuzon", {
                    animationEnabled: true,
                   
                    data: [{
                        type: "pie",
                        startAngle: 240,
                        yValueFormatString: "##0.00\"%\"",
                        indexLabel: "{label} {y}",
                         <?php if(!empty($_POST['outage_type'])){ ?>
                        dataPoints: [
                        <?php
                            foreach($type AS $tp){
                                echo '{y: '. $CI->outage_pie_luzon($tp->type_id,$_POST['outage_type'],$_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']) .', label: "'. $tp->type_name.'" , color: "'.$tp->legend_color .'"},';
                             }

                        ?>
                        
                        ]
                        <?php } ?>
                    }]
                });
                chart.render();


            var chart = new CanvasJS.Chart("OutageAreaLuzon", {
                animationEnabled: true,
               
                axisY :{
                    includeZero: false,
                    title:"MW"
                },
                toolTip: {
                    shared: true
                },
                legend: {
                    fontSize: 13
                },
                <?php if($_POST['outage_type'] == '1'){ ?>
                data: [
                {
                   type: "area", 
                    showInLegend: true,
                    name: "Planned Outage",
                    yValueFormatString: "##00", 
                    color: "#3c81ff",    

                  
                    dataPoints: [
                    <?php 
                       foreach($CI->outage_graph_luzon($_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']) AS $c){
                             for($x=1;$x<=24;$x++){
                            $cap = $CI->sum_outage_planned_luzon($c->outage_date,$x);

                            echo ' { y:' . $cap .', label: "'. date('m-d',strtotime($c->outage_date)). " " . $x .'"},'; 
                         }

                      

                        } ?>
                    ]
                }
             ]
              <?php } ?>
              <?php if($_POST['outage_type'] == '2'){ ?>
                data: [
                {
                   type: "area", 
                    showInLegend: true,
                    name: "Unplanned Outage",
                    yValueFormatString: "##00", 
                    color: "#ff0000",    

                  
                    dataPoints: [
                    <?php 
                          foreach($CI->outage_graph_luzon($_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']) AS $c){
                             for($x=1;$x<=24;$x++){
                            $cap_up = $CI->sum_outage_unplanned_luzon($c->outage_date,$x);

                            echo ' { y:' . $cap_up .', label: "'. date('m-d',strtotime($c->outage_date)). " " . $x .'"},'; 
                         }

                      

                        }  ?>
                    ]
                }
             ]
              <?php } 
          } 

          /******************************************  END WITH OUTAGE TYPE BUT NO DURATION *************************************************/

        /******************************************  WITHOUT OUTAGE TYPE BUT WITH DURATION *************************************************/
    if(empty($_POST['outage_type']) && !empty($_POST['duration'])){
        ?>
       var chart = new CanvasJS.Chart("piechartOutageLuzon", {
                    animationEnabled: true,
                   
                    data: [{
                        type: "pie",
                        startAngle: 240,
                        yValueFormatString: "##0.00\"%\"",
                        indexLabel: "{label} {y}",
                        
                        dataPoints: [
                        <?php
                            foreach($type AS $tp){
                                echo '{y: '. $CI->outage_pie_luzon($tp->type_id,NULL,$_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']) .', label: "'. $tp->type_name.'" , color: "'.$tp->legend_color .'"},';
                             }

                        ?>
                        
                        ]
                       
                    }]
                });
                chart.render();


            var chart = new CanvasJS.Chart("OutageAreaLuzon", {
                animationEnabled: true,
               
                axisY :{
                    includeZero: false,
                    title:"MW"
                },
                toolTip: {
                    shared: true
                },
                legend: {
                    fontSize: 13
                },
              
                data: [
                {
                       type: "area", 
                        showInLegend: true,
                        name: "Planned Outage",
                        yValueFormatString: "##00", 
                        color: "#3c81ff",    

                      
                        dataPoints: [
                        <?php 
                        foreach($CI->outage_graph_luzon($_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']) AS $c){
                             for($x=1;$x<=24;$x++){
                            $cap = $CI->sum_outage_planned_luzon($c->outage_date,$x);

                            echo ' { y:' . $cap .', label: "'. date('m-d',strtotime($c->outage_date)). " " . $x .'"},'; 
                         }

                      

                        } ?>
                        ]
                },
                {
                   type: "area", 
                    showInLegend: true,
                    name: "Unplanned Outage",
                    yValueFormatString: "##00", 
                    color: "#ff0000",    
                    dataPoints: [
                    <?php 
                        foreach($CI->outage_graph_luzon($_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']) AS $c){
                             for($x=1;$x<=24;$x++){
                            $cap_up = $CI->sum_outage_unplanned_luzon($c->outage_date,$x);

                            echo ' { y:' . $cap_up .', label: "'. date('m-d',strtotime($c->outage_date)). " " . $x .'"},'; 
                         }

                        } ?>
                    ]
                }
             ]
              <?php 
          } 

          /******************************************  END WITHOUT OUTAGE TYPE BUT WITH DURATION *************************************************/

          ?>
         });
        chart.render();
            
        <?php } else { ?>
              var chart = new CanvasJS.Chart("piechartOutageLuzon", {
                    animationEnabled: true,
                   
                    data: [{
                        type: "pie",
                        startAngle: 240,
                        yValueFormatString: "##0.00\"%\"",
                        indexLabel: "{label} {y}",
                        dataPoints: [
                        <?php
                            foreach($type AS $tp){
                                echo '{y: '. $CI->outage_pie_luzon($tp->type_id,NULL, NULL, NULL, NULL, NULL) .', label: "'. $tp->type_name.'" , color: "'.$tp->legend_color .'"},';
                             }

                        ?>
                        
                        ]
                    }]
                });
                chart.render();


            var chart = new CanvasJS.Chart("OutageAreaLuzon", {
                animationEnabled: true,
               
                axisY :{
                    includeZero: false,
                    title:"MW"
                },
                toolTip: {
                    shared: true
                },
                legend: {
                    fontSize: 13
                },
                data: [
                {
                   type: "area", 
                    showInLegend: true,
                    name: "Planned Outage",
                    yValueFormatString: "##00", 
                    color: "#3c81ff",    
                    dataPoints: [
                    <?php 
                        foreach($monthly_l AS $month){
                            for($x=1;$x<=24;$x++){
                            $cap_up = $CI->sum_outage_planned_luzon($month->outage_date,$x);

                            echo ' { y:' . $cap_up .', label: "'. date('m-d',strtotime($month->outage_date)). " " . $x .'"},'; 
                         }

                      } ?>
                       
                    ]
                },
                {
                    type: "area", 
                    showInLegend: true,
                    yValueFormatString: "##0",      
                    name: "Unplanned Outage",
                    color: "#ff0000",  
                    dataPoints: [
                    <?php 
                        foreach($monthly_l AS $month){
                            for($x=1;$x<=24;$x++){
                            $cap = $CI->sum_outage_unplanned_luzon($month->outage_date,$x);

                            echo ' { y:' . $cap .', label: "'. date('m-d',strtotime($month->outage_date)). " " . $x .'"},'; 
                         }

                      } ?>
                    ]
                }]
            });
            chart.render();

        <?php }
         ?>
}
        </script>

    <style type="text/css">
        .title{
            display: none
        }
        .visArea{
            width: 67%
        }
        .visPie{
            width: 33%
        }
        .OutageArea{
            height: 400px; 
            width: 100%;
        }
        .piechartOutage{
            height: 300px;
            width: 120%;
        }
        .print{
            display: block;
        }
        @media print{
            .visArea{
                width: 67%;
                flex: 0 0 100%;
                text-align: center;
                align-items: center;
                align-content: center;
            }
            .visPie{
                width: 33%;
                flex: 0 0 100%;
                text-align: center;
                align-items: center;
                align-content: center;
            }
            .title{
                display: block
            }
            .print{
                display: none
            }
            .OutageArea{
                height: 400px; 
                width: 150%;
            }
            .piechartOutage{
                height: 300px;
                width: 120%;
            }
        }
    </style>    
    <button class="btn btn-success-alt pull-right print" onclick="printDiv1('printableArea2')">Print</button>
    <div class="p-t-5" id="printableArea2">
        <center>
            <h2 class="m-t-20 title" >Outage Capacity by Outage Type </h2>
            <p class="title">LUZON</p>
        </center>
        <div class="row">
            <div class="visArea">
                <div id="OutageAreaLuzon" class="OutageArea"></div>
            </div>
            <div class="visPie">
                <div class="p-t-30">
                    <div id="piechartOutageLuzon" class="piechartOutage"></div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function printDiv1(divName) {
            window.print();                      
        }
    </script>