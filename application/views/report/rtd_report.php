<!-- modal -->
<?php
ini_set('memory_limit', '-1'); 
$ci =& get_instance(); ?>


<div class="page-wrapper">
    <div class="container-fluid" style="padding-bottom: 0px">
        <div class="card oh">
            <table class="table table-bordered" width="100%">
                <tr>
                    <td colspan="2">MARKET PRICES AND SCHEDULE</td>
                    <td colspan="1"></td>
                    <td colspan="10" rowspan="3" width="50%">
                        <div class="btn-group" style="padding: 0 5px 5px 5px;">
                            <button style="background:" class="btn btn-sm nosha"></button>
                            <button style="background: #ececec; width:100px" class="btn btn-sm nosha"></button>
                        </div>
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
                                <th colspan="3"><center></center></th>
                                         

                            </tr>
                            <tr>
                               <!--  <th><span class="m-l-60"></span> </th> -->
                                <th><span class="m-l-20 m-r-20">MW</span></th>
                                <th><span class="m-l-30 m-r-30">Price</span></th>
                                <th><span class="m-l-20 m-r-20">Initial</span></th>                               
                            </tr>
                       </thead>
                       <tbody style="border-bottom: 2px solid #000!important">
                            <tr class="hover-high" >
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                        
                                       <th><span class="m-l-60"></span></th>
                                       <th><span class="m-l-60"></span></th>
                                       <th><span class="m-l-60"></span></th>
                            </tr>

                            

                       </tbody>


                    </table>
                </div>
            </div>
        </div>  
    </div>
</div>