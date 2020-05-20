<?php 
include 'conn.php';
include 'functions.php';

$curr_year = date('Y'); 

$get_type = mysqli_query($conn, "SELECT type_id, type_name FROM pp_type ORDER BY type_name ASC");
$get_participant = mysqli_query($conn, "SELECT DISTINCT participant_id FROM mps_luzon ORDER BY participant_id ASC");
?>
<script src="<?php echo base_url; ?>assets/js/jquery.min.js"></script>
<script>

function showValues(){
     var from = document.getElementById("from").value;
     var to = document.getElementById("to").value;

     if(from=='' && to==''){
        alert('Please filter range of dates.');
     } else {
         var str = $( "form" ).serialize();
         window.opener.setData(str);
         window.close();
     }
}
</script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>assets/dist/css/style.css">
<div class="container">
    <div class="modal-content m-t-10">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
        </div>
        <form id = 'popupForm'>
            <div class="modal-body">
               <!--  <div class="form-group">
                   <select class="form-control" name='month' id='month'>
                        <option value='' selected="">Select Month</option>
                        <option value='1'>January</option>
                        <option value='2'>February</option>
                        <option value='3'>March</option>
                        <option value='4'>April</option>
                        <option value='5'>May</option>
                        <option value='6'>June</option>
                        <option value='7'>July</option>
                        <option value='8'>August</option>
                        <option value='9'>September</option>
                        <option value='10'>October</option>
                        <option value='11'>November</option>
                        <option value='12'>December</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <div class = "row">
                        <div class = "col-6">
                            <input type = "date" class="form-control" name ="from" id="from" required="">
                        </div>
                        <div class = "col-6">
                            <input type = "date" class="form-control" name ="to" id="to" required="">
                        </div>
                    </div>
                </div>
                  <div class="form-group">
                  
                       <select name='interval' class="form-control" >
                        <option value='' selected>Select Interval</option>
                        <?php for($x=1;$x<=24;$x++){ ?>
                            <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php } ?>
                       </select>
                    
                </div>
                <!-- <div class="form-group">
                    <select class="form-control" name='year' id='year'>
                        <option value='' selected="">Select Year</option>
                        <?php for($x=2019;$x<=$curr_year;$x++){ ?>
                         <option value='<?php echo $x; ?>'><?php echo $x; ?></option>
                        <?php } ?>
                    </select>
                </div> -->
                <div class="form-group">
                    <select class="form-control" name='type_id' id='type_id'>
                        <option value='' selected="">Select Type</option>
                        <?php
                        while($fetch_type = mysqli_fetch_array($get_type)){ ?>
                            <option value="<?php echo $fetch_type['type_id']; ?>"><?php echo $fetch_type['type_name']; ?></option>
                        <?php } ?>
                    </select>
                </div>   
                <div class="form-group">
                     <select class="form-control" name='participant_id' id='participant_id'>
                     <option value='' selected="">Select Participant</option>
                     <?php
                        while($fetch_part = mysqli_fetch_array($get_participant)){ ?>
                            <option value="<?php echo $fetch_part['participant_id']; ?>"><?php echo $fetch_part['participant_id']; ?></option>
                        <?php } ?>
                        </select>
                </div>   
                <div class="form-group">
                    <input type='text' name='resource_id' id='resource_id' placeholder="Resource ID" class="form-control">
                </div>  
            </div>
            <div class="modal-footer">
            <input type="submit" class="btn btn-info-alt btn-block" value="Apply Filter" onclick='showValues()'>
            </div>
        </form>
    </div>
</div>