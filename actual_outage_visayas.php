<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Market Data Analysis System</title>
    <link href="http://localhost/MDAS/assets/dist/css/web.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://localhost/MDAS/assets/dist/css/style.css">
</head>
<?php
    include 'conn.php';
    include 'functions.php';
    
    $MAC = exec('getmac'); 
    $MAC = strtok($MAC, ' '); 
    

    $get_type = mysqli_query($conn, "SELECT * FROM pp_type");
    $summary_id = get_summary_id($conn, 'outage_profile_visayas');
   

    if(isset($_POST['add_outage'])){
        foreach($_POST as $var=>$value)
            $$var = mysqli_real_escape_string($conn, $value);

        $timestamp = date('Y-m-d H:i:s');
        for($x=$interval_start; $x<=$interval_end; $x++){
            $date= date('Y-m-d', strtotime($outage_date));

            $insert = mysqli_query($conn, "INSERT INTO outage_profile_visayas (outage_date, outage_interval, summary_id, type_id, resource_id, capacity_dependable, insert_timestamp, added_by) VALUES ('$date', '$x','$summary_id', '$type', '$resource_id', '$capacity','$timestamp', '$MAC')");
        }
            $insert_summary = mysqli_query($conn, "INSERT INTO outage_profile_visayas (summary_id, outage_type, remarks) VALUES ('$summary_id', '$outage_type', '$remarks')");
            if($insert_summary){
            header("Refresh:0; url=actual_outage_visayas.php");
            }
    }

    if(isset($_POST['save_summary'])){
        foreach($_POST as $var=>$value)
            $$var = mysqli_real_escape_string($conn, $value);

        for($y=1;$y<$count_outage;$y++){
            $sumid = "summary_id".$y; 
            $rem = "remarks".$y; 
            $out_type = "outage_type".$y; 
            $sid= $$sumid;
            $remarks= $$rem;
            $outage_type= $$out_type;

            $existing = mysqli_query($conn, "SELECT summary_id FROM outage_summary_visayas WHERE summary_id = '$sid'");
            $count = mysqli_num_rows($existing);
           
            //echo $count . "<br>";
            if($count == 0){
                if(!empty($outage_type)){
            $insert = mysqli_query($conn, "INSERT INTO outage_summary_visayas (summary_id, outage_type, remarks) VALUES ('$sid','$outage_type','$remarks');");
                }
            } else {
                $update = mysqli_query($conn, "UPDATE outage_summary_visayas SET outage_type = '$outage_type', remarks = '$remarks' WHERE summary_id = '$sid'");
                //echo "UPDATE outage_summary_luzon SET outage_type = '$outage_type', remarks = '$remarks' WHERE summary_id = '$sid'<br>";
            }        
        }      
        //header("Refresh:0; url=actual_outage_luzon.php");
    }
    $curr_month = date('Y-m');
    //$curr_month = '2020-03';
     if(!isset($_POST['filter'])){
        $previousdate = date('Y-m');
        $curr_month = date('Y-m');
        $get_outages = mysqli_query($conn, "SELECT * FROM outage_profile_visayas WHERE outage_date LIKE '$curr_month%' GROUP BY summary_id ORDER BY outage_date, summary_id ASC");
    } else {
        $mo = $_POST['month'];
        $yr = $_POST['year'];
        $curr_month = $yr."-".$mo;
        $previousdate = $yr."-".$mo;
        $get_outages = mysqli_query($conn, "SELECT * FROM outage_profile_visayas WHERE outage_date LIKE '$curr_month%' GROUP BY summary_id ORDER BY outage_date, summary_id ASC");
    }

  
    $curr_year = date("Y");
    //echo "SELECT * FROM outage_profile_visayas WHERE outage_date LIKE '$curr_month%' GROUP BY summary_id";
?>
<?php include('navbar.php'); ?>
    <div class="modal fade" id="addOutage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Outage</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="date" class="form-control " placeholder="Date" name="outage_date" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Interval Start" name="interval_start" min='1' max='24' style='width:49%'>
                            <input type="number" class="form-control" placeholder="Interval End" name="interval_end" min='1' max='24' style='width:49%'>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="type" required>
                                <option value='' selected>Select Powerplant Type</option>
                                <?php while($fetch_type = mysqli_fetch_assoc($get_type)){ ?>
                                    <option value="<?php echo $fetch_type['type_id']; ?>"><?php echo $fetch_type['type_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>  
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Resource ID" name="resource_id" required>
                        </div>  
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Capacity" name="capacity" required>
                        </div>      
                        <div class="form-group">
                            <select class="form-control" name="outage_type" required>
                                <option value='' selected>Select Outage Type</option>
                                <option value="1">Planned</option>
                                <option value="2">Unplanned</option>
                            </select>
                        </div>      
                        <div class="form-group">
                            <textarea name='remarks' class="form-control" placeholder="Remarks"></textarea>
                        </div>            
                    </div>
                    <div class="modal-footer">                                        
                        <input type="submit" class="btn btn-primary btn-block" name='add_outage' value='Submit'>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="container m-t-80 p-t-20" style="background-color: #fff">
        <center>
            <h3 class="m-0"><b>Actual Outages</b></h3>
            <p class="m-0" style="letter-spacing: 10px">VISAYAS</p>
        </center> 
        <form method="POST">
        <table class="m-b-10 m-t-20" width="100%">
            <tr>
                <td width="15%">
                     <select class="form-control" style="min-height: 25px" name='month'>
                            <option value=''>Month</option>
                            <option value='01'>January</option>
                            <option value='02'>February</option>
                            <option value='03'>March</option>
                            <option value='04'>April</option>
                            <option value='05'>May</option>
                            <option value='06'>June</option>
                            <option value='07'>July</option>
                            <option value='08'>August</option>
                            <option value='09'>September</option>
                            <option value='10'>October</option>
                            <option value='11'>November</option>
                            <option value='12'>December</option>
                        </select>
                </td>
                <td width="15%">
                    <select class="form-control" style="min-height: 25px" name='year'>
                            <option value=''>Year</option>
                            <?php for($y='2020';$y<=$curr_year;$y++) { ?>
                                <option value='<?php echo $y; ?>'><?php echo $y; ?></option>
                            <?php } ?>
                        </select>
                </td>
                <td width="15%"><input type="submit" class="btn btn-md btn-info-alt btn-sm" name="filter" value="Filter"></td>
                <td>
                    <span data-toggle="modal" data-target="#addOutage">
                        <a href="#" class="btn btn-info-alt btn-sm bor-radius pull-right" data-toggle="tooltip" data-placement="top" title="Add Outage" >
                            <span class="fa fa-plus" ></span>
                        </a>
                    </span>
                </td>
            </tr>
        </table> 
        </form>
        <form method='POST' >
            <div class="m-b-70">
                <table class="table table-hover table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th align="center" width="5%" class="p-l-10"><strong>Date</strong></th>
                            <th width="5%"><center><strong>Interval</strong></center></th>
                            <th width="7%"><center><strong>Type</strong></center></th>
                            <th width="7%"><center><strong>Resource ID</strong></center></th>
                            <th width="7%"><center><strong>Capacity</strong></center></th>
                            <th width="15%"><center><strong>Outage Type</strong></center></th>
                            <th width="20%"><center><strong>Remarks</strong></center></th>
                            <!-- <th width="2%"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $a=1;
                        while($fetch_outage = mysqli_fetch_array($get_outages)){
                        
                        $type = get_column($conn, "type_name", "pp_type", "type_id", $fetch_outage['type_id']);
                        $outage_type = get_column($conn, "outage_type", "outage_summary_visayas", "summary_id", $fetch_outage['summary_id']);
                        $remarks = get_column($conn, "remarks", "outage_summary_visayas", "summary_id", $fetch_outage['summary_id']);
                        //echo "**".$outage_type; ?>

                        <tr <?php echo (($previousdate !== '' && $previousdate !== $fetch_outage['outage_date'])  ? "class='actual-tr'" : ""); ?>>
                            <td align="center" class="p-0"><?php echo (($previousdate !== '' && $previousdate !== $fetch_outage['outage_date'])  ?date('F d', strtotime($fetch_outage['outage_date'])) : ""); ?></td>
                            <td align="center" class="p-0"><?php echo get_interval($conn, 'outage_profile_visayas',$fetch_outage['summary_id']); ?></td>
                            <td class="p-0"><?php echo $type; ?></td>
                            <td class="p-0"><?php echo $fetch_outage['resource_id']; ?></td>
                            <td class="p-0">
                                <input type="text" class="form-control font-12 al-cen" name="capacity" value="<?php echo $fetch_outage['capacity_dependable']; ?>" style="min-height: 30px; padding: 0px 10px">
                            </td>
                            <td class="p-0">
                                <select class="form-control font-12" name='outage_type<?php echo $a; ?>' style="min-height: 30px; padding: 0px 10px">
                                   <option value=''>Choose Outage Type</option>
                                   <option value='1' <?php echo (($outage_type == '1') ? ' selected' : ''); ?>>Planned</option>
                                   <option value='2' <?php echo (($outage_type == '2') ? ' selected' : ''); ?>>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control font-12" name="remarks<?php echo $a; ?>" rows="1" style="min-height: 30px; padding: 0px 10px"><?php echo $remarks; ?></textarea>
                                 <input type='hidden' name='summary_id<?php echo $a; ?>' value="<?php echo $fetch_outage['summary_id']; ?>">
                            </td>
                                
                            <!-- <td width="2%" class="">
                                <button class="btn btn-danger-alt btn-sm"><span class="fa fa-times"></span></button>
                            </td> -->
                        </tr>    
                        <?php 
                        $a++; 
                         $previousdate = $fetch_outage['outage_date'];
                        } ?>        
                        <input type='hidden' name='count_outage' value="<?php echo $a; ?>">                        
                    </tbody>
                </table>   
            </div>
            <div style="height: 100px;width: 100%;background-image: linear-gradient(to top, #fff,#fff0);position: fixed;bottom:0">
                <div style="padding:50px 20px;width: 69%">
                    <input type="submit" class="btn btn-success-alt btn-md btn-block" value="Save" name="save_summary">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
 <script src="assets/dist/js/jquery.min.js"></script>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
