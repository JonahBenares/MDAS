   <?php
    include 'conn.php';
    include 'functions.php';
    $curr_year = date('Y');
    $curr_month = date('m');
     $previousdate = '';
    $resources = mysqli_query($conn, "SELECT DISTINCT resource_id FROM outage_profile_visayas WHERE outage_date LIKE '$curr_year%'");
     $days=date('d');
     $current = date('Y-m');
    //echo "SELECT DISCTINCT resource_id FROM outage_profile_visayas WHERE outage_date LIKE '$curr_month%'";
    while($fetch = mysqli_fetch_assoc($resources)){
    

       
        for($x=1;$x<=12;$x++) {

            $current = $curr_year."-".str_pad($x, 2, "0", STR_PAD_LEFT); 
            $count_day = count_day_visayas($conn, $fetch['resource_id'], $current);
            $min_day = get_min_day_visayas($conn,$fetch['resource_id'], $current);
            $month_days = cal_days_in_month(CAL_GREGORIAN,$curr_month,$curr_year);
            $max_day = get_max_day_visayas($conn,$fetch['resource_id'], $current);
            if($count_day ==$month_days){
                
                //echo $fetch['resource_id'] ." - " . $current . " = " . $min_day  . " to " . $max_day ."<br>"; 
            } else {

                $min_day = get_min_day_visayas($conn,$fetch['resource_id'], $current);
            }
            echo $fetch['resource_id'] ." - " . $current . " = " . $min_day  . " to " . $max_day ."<br>"; 
            
        }
    }

   
    //$days=cal_days_in_month(CAL_GREGORIAN,$curr_month,$curr_year);
   
 

  /*  foreach($data AS $r){
        echo "['" . $r['resources'] . "'], <br>";
    }*/
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  google.charts.load("current", {packages:["timeline"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {

    var container = document.getElementById('example3.1');
    var chart = new google.visualization.Timeline(container);
    var dataTable = new google.visualization.DataTable();
    dataTable.addColumn({ type: 'string', id: 'Position' });
    dataTable.addColumn({ type: 'string', id: 'Name' });
    dataTable.addColumn({ type: 'date', id: 'Start' });
    dataTable.addColumn({ type: 'date', id: 'End' });
    dataTable.addRows([
      [ 'President', 'George Washington', new Date(2020, 1, 1), new Date(2020, 1, 7) ],
      [ 'President', 'John Adams', new Date(1797, 2, 4), new Date(1801, 2, 4) ],
      [ 'President', 'Thomas Jefferson', new Date(1801, 2, 4), new Date(1809, 2, 4) ],
      [ 'Vice President', 'John Adams', new Date(1789, 3, 21), new Date(1797, 2, 4)],
      [ 'Vice President', 'Thomas Jefferson', new Date(1797, 2, 4), new Date(1801, 2, 4)],
      [ 'Vice President', 'Aaron Burr', new Date(1801, 2, 4), new Date(1805, 2, 4)],
      [ 'Vice President', 'George Clinton', new Date(1805, 2, 4), new Date(1812, 3, 20)],
      [ 'Secretary of State', 'John Jay', new Date(1789, 8, 25), new Date(1790, 2, 22)],
      [ 'Secretary of State', 'Thomas Jefferson', new Date(1790, 2, 22), new Date(1793, 11, 31)],
      [ 'Secretary of State', 'Edmund Randolph', new Date(1794, 0, 2), new Date(1795, 7, 20)],
      [ 'Secretary of State', 'Timothy Pickering', new Date(1795, 7, 20), new Date(1800, 4, 12)],
      [ 'Secretary of State', 'Charles Lee', new Date(1800, 4, 13), new Date(1800, 5, 5)],
      [ 'Secretary of State', 'John Marshall', new Date(1800, 5, 13), new Date(1801, 2, 4)],
      [ 'Secretary of State', 'Levi Lincoln', new Date(1801, 2, 5), new Date(1801, 4, 1)],
      [ 'Secretary of State', 'James Madison', new Date(1801, 4, 2), new Date(1809, 2, 3)]
    ]);

    chart.draw(dataTable);
  }
</script>

<div id="example3.1" style="height: 200px;"></div>