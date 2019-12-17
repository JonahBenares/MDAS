<!-- modal -->
<?php
ini_set('memory_limit', '-1'); 
$ci =& get_instance(); ?>
<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="" class="form-control" name="" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Input">
                    </div>    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-info-alt btn-block">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="export" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="" class="form-control" name="" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Input">
                    </div>    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success-alt btn-block">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="page-wrapper">
    <div class="container-fluid" style="padding-bottom: 0px">
        <div class="card oh">
            <table class="table table-bordered" width="100%">
                <tr>
                    <td colspan="2">MARKET PRICES AND SCHEDULE</td>
                    <td colspan="1"></td>
                    <td colspan="10" rowspan="3" width="50%">
                        <?php foreach($types AS $t){ ?>
                        <div class="btn-group" style="padding: 0 5px 5px 5px;">
                            <button style="background: <?php echo $t->legend_color; ?>" class="btn btn-sm nosha"></button>
                            <button style="background: #ececec; width:100px" class="btn btn-sm nosha"><?php echo $t->type_name; ?></button>
                        </div>
                    <?php } ?>
                    </td>
                    <td rowspan="3" width="20%" align="center">
                        <a href="javascript:void(0);" class="btn btn-info-alt btn-sm" data-toggle="modal" data-target="#filter"><span class="fa fa-filter"></span></a>
                        <a href="javascript:void(0);" class="btn btn-success-alt btn-sm" data-toggle="modal" data-target="#export"><span class="fa fa-external-link"></span></a>
                        <a href="<?php echo base_url(); ?>report/upload_rtd/" class="btn btn-warning-alt btn-sm"><span class="fa fa-upload"></span></a>
                    </td>
                </tr>
                <tr>
                    <td width="9%">START DATE:</td>
                    <td width="5%">2019-11-01</td>
                    <td width="5%"></td>
                </tr>
                <tr>
                    <td width="9%">END DATE:</td>
                    <td>2019-11-31</td>
                    <td width="5%"></td>
             
                </tr>
                <tr>
                    <td colspan="15"><br></td>
                </tr>
            </table>
            <div class="card-body" style="padding: 0px">
                <div style="overflow: scroll;height: 520px;background: white;" >
                    <table class="table table-bordered" width="100%">
                       <thead>                    
                            <tr>
                                <th rowspan="2" width="2%" class="va-bottom"><span class="m-l-5 m-r-5">Delivery_Hour</span></th>
                                <th rowspan="2" width="2%" class="va-bottom"><span class="m-l-5 m-r-5">Region_ID</span></th>
                                <th rowspan="2" width="2%" class="va-bottom"><span class="m-l-5 m-r-5">Type_ID</span></th>
                                <th rowspan="2" width="2%" class="va-bottom"><span class="m-l-5 m-r-5">Participant_ID</span></th>
                                <th rowspan="2" width="2%" class="va-bottom"><span class="m-l-5 m-r-5">Resource_ID</span></th>
                                <?php for($x=1;$x<=$days;$x++){ ?>
                                <th colspan="3"><center><?php echo $x; ?></center></th>
                                <?php } ?>
                                
                            </tr>
                            <tr>
                                <?php for($x=1;$x<=$days;$x++){ ?>
                               <!--  <th><span class="m-l-60"></span> </th> -->
                                <th><span class="m-l-20 m-r-20">MW</span></th>
                                <th><span class="m-l-30 m-r-30">Price</span></th>
                                <th><span class="m-l-20 m-r-20">Initial</span></th>
                                <?php } ?>
                                
                            </tr>
                       </thead>
                       <tbody style="border-bottom: 2px solid #000!important">
                       <?php  foreach($rtd AS $rt){ ?>
                            <tr  >
                                <td align="center"><?php echo $rt->delivery_hour; ?></td>
                                <td align="center"><?php echo $rt->region_id; ?></td>
                                <td align="center"><?php echo $rt->type; ?></td>
                                <td align="center"><?php echo $rt->participant_id; ?></td>
                                <td align="center"><?php echo $rt->resource_id; ?></td>
                                     <?php for($x=1;$x<=$days;$x++){
                                        $date=$year."-".$month."-".str_pad($x, 2, "0", STR_PAD_LEFT); ?>
                                        
                                         <!-- <th><span class="m-l-60"></span><?php echo $rt->resource_id; ?></th> -->
                                         <th><span class="m-l-20 m-r-20"><?php echo $ci->get_rtd_value("mw", $date, $rt->resource_id, $rt->delivery_hour,$rt->region_id); ?></span></th>
                                         <th><span class="m-l-30 m-r-30"><?php echo $ci->get_rtd_value("price", $date, $rt->resource_id, $rt->delivery_hour,$rt->region_id); ?></span></th>
                                         <th><span class="m-l-20 m-r-20"><?php echo $ci->get_rtd_value("initial", $date, $rt->resource_id, $rt->delivery_hour,$rt->region_id); ?></span></th>
                                     <?php   
                                    } ?>
                            </tr>
                            <?php } ?>
                       </tbody>


                    </table>
                </div>
            </div>
        </div>  
    </div>
</div>