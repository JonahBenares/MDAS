<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/MDAS/assets/images/favicon.png">
        <title>Market Data Analysis System</title>
        <link href="http://localhost/MDAS/assets/dist/css/style.css" rel="stylesheet">
        <link href="http://localhost/MDAS/assets/dist/css/pages/dashboard1.css" rel="stylesheet">
        <link href="http://localhost/MDAS/assets/dist/css/jquery.dataTables.min.css" rel="stylesheet">      
    </head>
    <body class="bg-white">
        <script src="http://localhost/MDAS/assets/dist/js/report.js"></script>
        <style type="text/css">
            #month-sel, #quarter-sel, #year-sel{
                display: none;
            }
            .bg-white{
                background: #fff;
            }
        </style>
        <div class="page-wrapper ">
            <div class="card oh">
                <div class="card-body m-t-60">
                    <center>
                        <h2>Comparison of Outage with same plant Category</h2>
                    </center>
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
        <script src="http://localhost/MDAS/assets/dist/js/jquery.min.js"></script>
        <script src="http://localhost/MDAS/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="http://localhost/MDAS/assets/dist/js/waves.js"></script>       
        <script src="http://localhost/MDAS/assets/dist/js/jquery.canvasjs.min.js"></script>
        <script type="text/javascript">
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
              acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                  panel.style.maxHeight = null;
                } else {
                  panel.style.maxHeight = panel.scrollHeight + "px";
                }
              });
            }


            var acc2 = document.getElementsByClassName("accordion-ex");
            var i;

            for (i = 0; i < acc2.length; i++) {
              acc2[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                  panel.style.maxHeight = null;
                } else {
                  panel.style.maxHeight = panel.scrollHeight + "px";
                }
              });
            }
        </script>
    </body>
</html>