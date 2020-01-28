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
<body>
    <div class="container-fluid" style="background-color: #fff">
        <br>
        <table class="table table-hover table-bordered" width="100%">
            <tr>
                <td><a href="masterfile/dashboard/" class="btn btn-sm btn-info-alt" style="height: 3rem"><span class="fa fa-home"></span> </a></td>
                <td colspan="5"><center><h5 class="m-t-20"><b>Actual Outages</b></h5></center></td>
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
                    <td width="7%" class="p-0 highlight"></td>
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
                            <th align="center" width="7%" ><center>Date</center></th>
                            <th width="7%"><center>Interval</center></th>
                            <th width="10%">Type</th>
                            <th width="20%">Resource ID</th>
                            <th width="7%"><center>Capacity</center></th>
                            <th width="20%">Outage Type</th>
                            <th width="29%">Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>   
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>    
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>    
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="p-0">Jan 1</td>
                            <td align="center" class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control " name=""></td>
                            <td class="p-0"><input type="text" class="form-control al-cen" name=""></td>
                            <td class="p-0">
                                <select class="form-control ">
                                    <option>---Select Outage Type---</option>
                                    <option>Planned</option>
                                    <option>Unplanned</option>
                                </select>
                            </td>
                            <td class="p-0">
                                <textarea class="form-control " rows="1"></textarea>
                            </td>
                        </tr>               
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