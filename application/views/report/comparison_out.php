<script src="<?php echo base_url(); ?>assets/dist/js/report.js"></script>
<style type="text/css">
    #month-sel, #quarter-sel, #year-sel{
        display: none;
    }
</style>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor"></h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Comparison of Outage</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card oh">
                    <div class="card-body">
                        <center>
                            <h2>Comparison of Outage with same plant Category</h2>
                        </center>
                        <!-- <div class="p-t-20">
                            <table width="100%">
                                <tr>
                                    <td width="5%"><p class=" p-t-15">Filter <span class="fa fa-filter"></span></p></td>
                                    <td width="10%">
                                        <div class="form-group p-t-15">
                                            <select style="width: 100%">
                                                <option>Semi Annual</option>
                                                <option>Yearly</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td width="10%">
                                        <div class="form-group p-t-15">
                                            <select style="width: 100%">
                                                <option>Type</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" style="padding: 0 5px 5px 5px;">
                                            <button class="btn p- btn-sm nosha"><input type="checkbox" style="width: 20px;height: 20px" name=""></button>
                                            <button style="background: #ececec; width:100px" class="btn btn-sm nosha">Resource ID</button>
                                        </div>
                                        <div class="btn-group" style="padding: 0 5px 5px 5px;">
                                            <button class="btn p- btn-sm nosha"><input type="checkbox" style="width: 20px;height: 20px" name=""></button>
                                            <button style="background: #ececec; width:100px" class="btn btn-sm nosha">Resource ID</button>
                                        </div>
                                        <div class="btn-group" style="padding: 0 5px 5px 5px;">
                                            <button class="btn p- btn-sm nosha"><input type="checkbox" style="width: 20px;height: 20px" name=""></button>
                                            <button style="background: #ececec; width:100px" class="btn btn-sm nosha">Resource ID</button>
                                        </div>
                                        <div class="btn-group" style="padding: 0 5px 5px 5px;">
                                            <button class="btn p- btn-sm nosha"><input type="checkbox" style="width: 20px;height: 20px" name=""></button>
                                            <button style="background: #ececec; width:100px" class="btn btn-sm nosha">Resource ID</button>
                                        </div>
                                        <div class="btn-group" style="padding: 0 5px 5px 5px;">
                                            <button class="btn p- btn-sm nosha"><input type="checkbox" style="width: 20px;height: 20px" name=""></button>
                                            <button style="background: #ececec; width:100px" class="btn btn-sm nosha">Resource ID</button>
                                        </div> 
                                    </td>
                                    <td><input type="submit" class="btn btn-info-alt" value="Filter" name=""></td>
                                </tr>
                            </table>
                            <div class="row">                                
                                <div class="col-lg-12">
                                   <div id="lineOut" style="height: 400px; width: 100%;"></div>   
                                </div>                                                             
                            </div>
                        </div> -->

                        <div class="p-t-20">
                            <div class="row">                                
                                <div class="col-lg-10">
                                   <div id="lineOut" style="height: 400px; width: 100%;"></div>   
                                </div>   
                                <div class="col-lg-2">
                                    <form>
                                        <div style="overflow-y: scroll;overflow-x:hidden;height: 350px;">
                                            <div class="p-r-20">
                                                <table width="100%">
                                                    <tr>
                                                        <td colspan="2" width="5%"><p class=" ">Filter <span class="fa fa-filter"></span></p></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" width="10%">
                                                            <div class="form-group m-b-5">
                                                                <select style="width: 100%">
                                                                    <option>Semi Annual</option>
                                                                    <option>Yearly</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" width="10%">
                                                            <div class="form-group m-b-5">
                                                                <select style="width: 100%">
                                                                    <option>Type</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1%"><input type="checkbox" style="width: 20px;height: 20px" name=""></td>
                                                        <td>Resource ID</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-info-alt btn-block" value="Filter" name="">
                                    </form>
                                </div>                                                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>        
    </div>
</div>

