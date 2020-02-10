<?php
$CI=& get_instance();
//$CI->outage_graph_visayas($_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']);
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
       var chart = new CanvasJS.Chart("piechartOutage", {
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
                                echo '{y: '. $CI->outage_pie_visayas($tp->type_id,$_POST['outage_type'],$_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']) .', label: "'. $tp->type_name.'" , color: "'.$tp->legend_color .'"},';
                             }

                        ?>
                        
                        ]
                        <?php } ?>
                    }]
                });
                chart.render();


            var chart = new CanvasJS.Chart("OutageArea", {
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
                       foreach($CI->outage_graph_visayas($_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']) AS $c){
                             for($x=1;$x<=24;$x++){
                            $cap = $CI->sum_outage_planned($c->outage_date,$x);

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
                          foreach($CI->outage_graph_visayas($_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']) AS $c){
                             for($x=1;$x<=24;$x++){
                            $cap_up = $CI->sum_outage_unplanned($c->outage_date,$x);

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
       var chart = new CanvasJS.Chart("piechartOutage", {
                    animationEnabled: true,
                   
                    data: [{
                        type: "pie",
                        startAngle: 240,
                        yValueFormatString: "##0.00\"%\"",
                        indexLabel: "{label} {y}",
                        
                        dataPoints: [
                        <?php
                            foreach($type AS $tp){
                                echo '{y: '. $CI->outage_pie_visayas($tp->type_id,NULL,$_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']) .', label: "'. $tp->type_name.'" , color: "'.$tp->legend_color .'"},';
                             }

                        ?>
                        
                        ]
                       
                    }]
                });
                chart.render();


            var chart = new CanvasJS.Chart("OutageArea", {
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
                        foreach($CI->outage_graph_visayas($_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']) AS $c){
                             for($x=1;$x<=24;$x++){
                            $cap = $CI->sum_outage_planned($c->outage_date,$x);

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
                        foreach($CI->outage_graph_visayas($_POST['duration'], $_POST['month'], $_POST['year'], $_POST['quarter']) AS $c){
                             for($x=1;$x<=24;$x++){
                            $cap_up = $CI->sum_outage_unplanned($c->outage_date,$x);

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
              var chart = new CanvasJS.Chart("piechartOutage", {
                    animationEnabled: true,
                   
                    data: [{
                        type: "pie",
                        startAngle: 240,
                        yValueFormatString: "##0.00\"%\"",
                        indexLabel: "{label} {y}",
                        dataPoints: [
                        <?php
                            foreach($type AS $tp){
                                echo '{y: '. $CI->outage_pie_visayas($tp->type_id,NULL, NULL, NULL, NULL, NULL) .', label: "'. $tp->type_name.'" , color: "'.$tp->legend_color .'"},';
                             }

                        ?>
                        
                        ]
                    }]
                });
                chart.render();


            var chart = new CanvasJS.Chart("OutageArea", {
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
                        foreach($monthly_v AS $month){
                            for($x=1;$x<=24;$x++){
                            $cap_up = $CI->sum_outage_planned($month->outage_date,$x);

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
                        foreach($monthly_v AS $month){
                            for($x=1;$x<=24;$x++){
                            $cap = $CI->sum_outage_unplanned($month->outage_date,$x);

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


    <div class="p-t-10">
        <div class="row">
            <div class="col-lg-8">
                <div id="OutageArea" style="height: 400px; width: 100%;"></div>
            </div>
            <div class="col-lg-4">
                <div class="p-t-30">
                    <div id="piechartOutage" style="height: 300px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>