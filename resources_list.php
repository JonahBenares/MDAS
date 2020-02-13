<?php
    include 'conn.php';
    include 'functions.php';

   $current_year = date('Y');
   $type = $_POST['type'];
   $select = mysqli_query($conn, "SELECT DISTINCT resource_id AS resid FROM outage_profile_visayas WHERE type_id= '$type' AND outage_date LIKE '$current_year%' ORDER BY participant_id ASC");
   ?><tr><td><input type="checkbox" id="selectall" onClick="selectAll(this)" />Select All</td></tr>
   <?php
   while($fetch = mysqli_fetch_assoc($select)){
   		echo "<tr><td><input type='checkbox' value=". $fetch['resid'] ." name='resources[]'> ".$fetch['resid']."</td></tr>";
   }
    //echo "<tr><td><input type='checkbox'>Checkbox</td></tr>";
?>