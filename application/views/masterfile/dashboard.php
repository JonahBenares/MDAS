<?php
$CI=& get_instance();
$curr_year = date('Y');

?>
<script src="<?php echo base_url(); ?>assets/dist/js/dashboard.js"></script>
<style type="text/css">
    #month-sel, #quarter-sel, #year-sel{
        display: none;
    }
     #month-sel2, #quarter-sel2, #year-sel2{
        display: none;
    }
</style>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Dashboard</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card oh">
                    <div class="card-body">
                        <center>
                            <h2>Outage Capacity by Outage Type</h2>
                        </center>

                        <?php 

                       /*  foreach($type AS $tp){
                                echo '{y: '. $CI->outage_pie_visayas($tp->type_id,NULL,'Monthly', '01', '2020', NULL) .', label: "'. $tp->type_name.'" , color: "'.$tp->legend_color .'"},';
                             }*/


                       /* foreach($CI->outage_graph_visayas('quarterly', NULL, '2020', '4') AS $c){
                             for($x=1;$x<=24;$x++){
                            $cap = $CI->sum_outage_unplanned($c->outage_date,$x);

                            echo ' { y:' . $cap .', label: "'. date('m-d',strtotime($c->outage_date)). " " . $x .'"},'; 
                         }

                      

                        }*/ ?>
                          <div class="p-l-70 p-r-70" style='margin-top:50px'>
                            <div class="row"><h3>VISAYAS</h3></div>
                        </div>
                        <form method="POST" action="<?php echo base_url(); ?>masterfile/visayas_outage" target="outage_visayas">
                     
                        <div class="p-l-70 p-r-70">
                            <div class="row p-t-15">
                               
                                <div class="form-group">
                                    <select class="form-control" id='outage_type' name='outage_type'>
                                        <option value=''>-Outage Type-</option>
                                        <option value='1'>Planned</option>
                                        <option value='2'>Unplanned</option>
                                    </select>                
                                </div>
                                <div class="form-group" id='duration'>
                                    <select class="form-control" id="selectBox" name='duration'>
                                        <option value=''>-Duration-</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Quarterly">Quarterly</option>
                                        <option value="Yearly">Yearly</option>
                                    </select>
                                </div>
                                <div class="form-group" id="month-sel" >
                                    <select class="form-control" name="month">
                                        <option value=''>Select Month</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select> 
                                </div>
                                <div class="form-group" id="quarter-sel" >
                                    <select class="form-control" name="quarter">
                                        <option value=''>Select Quarter</option>
                                        <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                        <option value="3">3rd</option>
                                        <option value="4">$th</option>
                                    </select> 
                                </div>
                                <div class="form-group" id="year-sel" >
                                    <select class="form-control" name="year">
                                        <option value=''>Select Year</option>
                                        <?php for($year=2020; $year <= $curr_year; $year++){ ?>
                                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                        <?php } ?>
                                    </select> 
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Filter" name="Filter" id='filterOutage'>
                                </div>
                            </div>
                        </div>
                        </form>
                        
                    <iframe src='<?php echo base_url(); ?>masterfile/visayas_outage' style='width:100%; height: 500px' loading="eager" name='outage_visayas' frameborder='0'></iframe>

            <!--             <div class="p-t-10">
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
    </div> -->

                        <div class="p-l-70 p-r-70" style='margin-top:50px'>
                            <div class="row"><h3>LUZON</h3></div>
                        </div>
                         <form method="POST" action="<?php echo base_url(); ?>masterfile/luzon_outage" target="outage_luzon">
                          <div class="p-l-70 p-r-70">
                            <div class="row">
                              
                                <div class="form-group">
                                    <select class="form-control" id='outage_type' name='outage_type'>
                                        <option value=''>-Outage Type-</option>
                                        <option value='1'>Planned</option>
                                        <option value='2'>Unplanned</option>
                                    </select>                
                                </div>
                                <div class="form-group" id='duration'>
                                    <select class="form-control" id="selectBox2" name='duration'>
                                         <option value=''>-Duration-</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Quarterly">Quarterly</option>
                                        <option value="Yearly">Yearly</option>
                                    </select>
                                </div>
                                <div class="form-group" id="month-sel2" >
                                    <select class="form-control" name='month'>
                                       <option value=''>Select Month</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select> 
                                </div>
                                <div class="form-group" id="quarter-sel2" >
                                     <select class="form-control" name="quarter">
                                        <option value=''>Select Quarter</option>
                                        <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                        <option value="3">3rd</option>
                                        <option value="4">$th</option>
                                    </select> 
                                </div>
                                <div class="form-group" id="year-sel2" >
                                    <select class="form-control" name='year'>
                                        <option>Select Year</option>
                                        <?php for($year=2020; $year <= $curr_year; $year++){ ?>
                                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                        <?php } ?>
                                    </select> 
                                </div>
                                <div class="form-group">
                                      <input type="submit" class="btn btn-primary" value="Filter" name="Filter" id='filterOutage'>
                                </div>
                                
                            </div>
                        </div>
                        </form>

                        <iframe src='<?php echo base_url(); ?>masterfile/luzon_outage' style='width:100%; height: 500px' loading="eager" name='outage_luzon' frameborder='0'></iframe>
                    </div>
                </div>
            </div>            
        </div>        
    </div>
</div>
