<script src="<?php echo base_url(); ?>assets/dist/js/dashboard.js"></script>
<style type="text/css">
    #month-sel, #quarter-sel, #year-sel{
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
                        <form>
                        <div class="p-l-70 p-r-70">
                            <div class="row p-t-15">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Planned</option>
                                        <option>Unplanned</option>
                                    </select>                
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="selectBox" onChange="changeFunc();">
                                        <option value="Monthly">Monthly</option>
                                        <option value="Quarterly">Quarterly</option>
                                        <option value="Yearly">Yearly</option>
                                    </select>
                                </div>
                                <div class="form-group" id="month-sel" >
                                    <select class="form-control" required="">
                                        <option>Select Month</option>
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
                                    <select class="form-control" required="">
                                        <option>Select Quarter</option>
                                        <option value="01">1</option>
                                        <option value="02">2</option>
                                        <option value="03">3</option>
                                        <option value="04">4</option>
                                    </select> 
                                </div>
                                <div class="form-group" id="year-sel" >
                                    <select class="form-control" required="">
                                        <option>Select Year</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                    </select> 
                                </div>
                                <div class="form-group">
                                    <input type="button" class="btn btn-primary" value="Filter" name="">
                                </div>
                            </div>
                        </div>
                        </form>
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
                    </div>
                </div>
            </div>            
        </div>        
    </div>
</div>

