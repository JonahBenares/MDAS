<?php $ci =& get_instance(); ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex  align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>report/rtd_report/">RTD</a></li>
                        <li class="breadcrumb-item active">Actual Outage (Visayas)</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-5 align-self-center">
                <!-- <h4 class="text-themecolor">Upload RTD</h4> -->
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card oh">
                    <div class="card-body">                                
                        <div class="module-head">
                            <h2>
                                Actual Outages (Visayas)                                                              
                            </h2>                                    
                        </div>
                        <div class="module-body" >
                            <table class="table table-hover table-bordered" width="100%">
           
                        <tr>
                            <form>
                                <td width="7%" class="p-0 highlight"><input type="date" class="form-control highlight" placeholder="Date" name=""></td>
                                <td width="4%" class="p-0 highlight"><input type="number" class="form-control highlight" placeholder="Start" name=""></td>
                                <td width="4%" class="p-0 highlight"><input type="number" class="form-control highlight" placeholder="End" name=""></td>
                                <td width="10%" class="p-0 highlight"><input type="text" class="form-control highlight" placeholder="Type" name=""></td>
                                <td width="13%" class="p-0 highlight"><input type="text" class="form-control highlight" placeholder="Resource ID" name=""></td>
                                <td width="7%" class="p-0 highlight"><input type="text" class="form-control highlight" placeholder="Capacity" name=""></td>
                                <td width="15%" class="p-0 highlight">
                                    <select class="form-control highlight">
                                        <option>---Select Outage Type---</option>
                                        <option>Planned</option>
                                        <option>Unplanned</option>
                                    </select>
                                </td>
                                <td width="20%" class="p-0 highlight">
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
           
                <table class="table table-hover table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th align="center" width="7%" ><center><strong>Date</strong></center></th>
                            <th width="10%"><center><strong>Interval</strong></center></th>
                            <th width="10%"><center><strong>Type</strong></center></th>
                            <th width="13%"><center><strong>Resource ID</strong></center></th>
                            <th width="7%"><center><strong>Capacity</strong></center></th>
                            <th width="20%"><center><strong>Outage Type</strong></center></th>
                            <th width="20%"><center><strong>Remarks</strong></center></th>
                            <th width="2%"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    //print_r($outage);
                        $total = 0;
                        $previousdate='';
                        foreach($outage AS $out){
                        
                        $type = $ci->get_column("type_name", "pp_type", "type_id", $out['type_id']);
                        $outage_type = $ci->get_column("outage_type", "outage_summary_visayas", "summary_id", $out['summary_id']); 

                        if($previousdate !== '' && $previousdate !== $out['outage_date']){
                            $total += $out['capacity_dependable'];
                        } else {
                            $total = 0;
                        }
                        ?>

                        <tr>
                            <td align="center" class="p-0"><?php echo date('F d', strtotime($out['outage_date'])); ?></td>
                            <td align="center" class="p-0"><?php echo $ci->get_interval($out['summary_id']); ?></td>
                            <td class="p-0"><?php echo $type; ?></td>
                            <td class="p-0"><?php echo $out['resource_id']; ?></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name="capacity" value="<?php echo $out['capacity_dependable']; ?>"></td>
                            <td class="p-0">
                                <select class="form-control">
                                   
                                   <option value='1' <?php echo (($out == '1') ? ' selected' : ''); ?>>Planned</option>
                                   <option value='2' <?php echo (($out == '2') ? ' selected' : ''); ?>>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                            <td width="2%" class="">
                                <?php echo "**".$total; ?>
                                <!-- <button class="btn btn-danger-alt btn-sm"><span class="fa fa-times"></span></button> -->
                            </td>
                        </tr>    
                        <?php 
                        $previousdate=$out['outage_date'];
                        } ?>                                
                    </tbody>
                </table>   
          
            <div style="height: 100px;width: 100%;background-image: linear-gradient(to top, #fff,#fff0);position: fixed;bottom:0">
                <div style="padding:60px 20px;width: 97%">
                    <input type="button" class="btn btn-success-alt btn-sm btn-block" value="Save" name="">
                </div>
            </div>
        </form>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
