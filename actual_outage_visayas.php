<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Market Prices & Schedule</title>
    <link href="http://localhost/MDAS/assets/dist/css/web.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://localhost/MDAS/assets/dist/css/style.css">
</head>
<style type="text/css">
    .form-control {
        color: #212529;
        min-height: 0px;
        display: block;
        padding: 2px;
        font-size: 12px;
        border:0px solid #fff;
    }
    select.form-control:not([size]):not([multiple]) {
        height: calc(1.5rem + 2px); 
    }
    .highlight{
        background: #dcf6ff;
    }
    .al-cen{
        text-align: center
    }
</style>
<?php
    include 'conn.php';

function get_column($conn, $column, $table, $where_col, $where_val){
    $get =  mysqli_query($conn, "SELECT $column FROM $table WHERE $where_col = '$where_val'");
    $fetch = mysqli_fetch_array($get);
    return $fetch[$column];
}

function get_interval($conn, $summary_id){
    $get_min_interval = mysqli_query($conn, "SELECT min(outage_interval) AS min_interval FROM outage_profile_visayas WHERE summary_id = '$summary_id'");
    $fetch_min_interval = mysqli_fetch_assoc($get_min_interval);

    $get_max_interval = mysqli_query($conn, "SELECT max(outage_interval) AS max_interval FROM outage_profile_visayas WHERE summary_id = '$summary_id'");
    $fetch_max_interval = mysqli_fetch_assoc($get_max_interval);

    if($fetch_min_interval['min_interval'] == $fetch_max_interval['max_interval']){
        $interval = $fetch_max_interval['max_interval'];
    } else {
        $interval = $fetch_min_interval['min_interval'] . " - " . $fetch_max_interval['max_interval'];
    }
    return $interval;
}
   
    $curr_month = date('Y-m');
    $get_outages = mysqli_query($conn, "SELECT * FROM outage_profile_visayas WHERE outage_date LIKE '$curr_month%' GROUP BY summary_id ORDER BY outage_date, summary_id ASC");
    //echo "SELECT * FROM outage_profile_visayas WHERE outage_date LIKE '$curr_month%' GROUP BY summary_id";
?>
<body>
    <div class="container-fluid" style="background-color: #fff">
        <br>
        <table class="table table-hover table-bordered" width="100%">
            <tr>
                <td><a href="masterfile/dashboard/" class="btn btn-sm btn-info-alt" style="height: 3rem"><span class="fa fa-home"></span> </a></td>
                <td colspan="5"><center><h5 class="m-t-20"><b>Actual Outages (Visayas)</b></h5></center></td>
                <td colspan="2">
                    <!-- <center>
                        <a class="btn btn-info-alt btn-sm" onclick="mps_filter()"><span class="fa fa-filter"></span>Filter</a>
                        <a href="report/upload_rtd/" class="btn btn-warning-alt btn-sm"><span class="fa fa-upload"></span>Upload</a>
                    </center> -->
                </td>
            </tr>
            <tr>
                <td colspan="8"><br></td>
            </tr>
            <tr>
                <form>
                    <td width="7%" class="p-0 highlight"><input type="date" class="form-control highlight" placeholder="Date" name=""></td>
                    <td width="7%" class="p-0 highlight"><input type="text" class="form-control highlight" placeholder="Interval" name=""></td>
                    <td width="10%" class="p-0 highlight"><input type="text" class="form-control highlight" placeholder="Type" name=""></td>
                    <td width="20%" class="p-0 highlight"><input type="text" class="form-control highlight" placeholder="Resource ID" name=""></td>
                    <td width="7%" class="p-0 highlight"><input type="text" class="form-control highlight" placeholder="Capacity" name=""></td>
                    <td width="20%" class="p-0 highlight">
                        <select class="form-control highlight">
                            <option>---Select Outage Type---</option>
                            <option>Planned</option>
                            <option>Unplanned</option>
                        </select>
                    </td>
                    <td width="26%" class="p-0 highlight">
                        <textarea class="form-control highlight" placeholder="Remarks" rows="1"></textarea>
                    </td>
                    <td width="2%" class="highlight">
                        <button class="btn btn-info-alt btn-sm"><span class="fa fa-plus"></span></button>
                    </td>
                </form>
            </tr> 
        </table>
        <br>
        <form >
            <div class="m-b-70">
                <table class="table table-hover table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th align="center" width="7%" ><center><strong>Date</strong></center></th>
                            <th width="7%"><center><strong>Interval</strong></center></th>
                            <th width="10%"><center><strong>Type</strong></center></th>
                            <th width="20%"><center><strong>Resource ID</strong></center></th>
                            <th width="7%"><center><strong>Capacity</strong></center></th>
                            <th width="20%"><center><strong>Outage Type</strong></center></th>
                            <th width="26%"><center><strong>Remarks</strong></center></th>
                            <th width="2%"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                        while($fetch_outage = mysqli_fetch_array($get_outages)){
                        
                        $type = get_column($conn, "type_name", "pp_type", "type_id", $fetch_outage['type_id']);
                        $outage_type = get_column($conn, "outage_type", "outage_summary_visayas", "summary_id", $fetch_outage['summary_id']); ?>

                        <tr>
                            <td align="center" class="p-0"><?php echo date('F d', strtotime($fetch_outage['outage_date'])); ?></td>
                            <td align="center" class="p-0"><?php echo get_interval($conn, $fetch_outage['summary_id']); ?></td>
                            <td class="p-0"><?php echo $type; ?></td>
                            <td class="p-0"><?php echo $fetch_outage['resource_id']; ?></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name="capacity" value="<?php echo $fetch_outage['capacity_dependable']; ?>"></td>
                            <td class="p-0">
                                <select class="form-control">
                                   
                                   <option value='1' <?php echo (($outage_type == '1') ? ' selected' : ''); ?>>Planned</option>
                                   <option value='2' <?php echo (($outage_type == '2') ? ' selected' : ''); ?>>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                            <td width="2%" class="">
                                <!-- <button class="btn btn-danger-alt btn-sm"><span class="fa fa-times"></span></button> -->
                            </td>
                        </tr>    
                        <?php } ?>                                
                    </tbody>
                </table>   
            </div>
            <div style="height: 100px;width: 100%;background-image: linear-gradient(to top, #fff,#fff0);position: fixed;bottom:0">
                <div style="padding:60px 20px;width: 97%">
                    <input type="button" class="btn btn-success-alt btn-sm btn-block" value="Save" name="">
                </div>
            </div>
        </form>
    </div>
</body>
</html>