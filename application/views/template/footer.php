        <!-- <footer class="footer">
            © 2018 Elegent Admin by wrappixel.com
        </footer> -->
    </div>
    

    <script src="<?php echo base_url(); ?>assets/dist/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/jquery.dataTables.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/waves.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/sidebarmenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/d3/d3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/c3-master/c3.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/dist/js/jquery-1.11.1.min.js"></script> -->
    
    <script src="<?php echo base_url(); ?>assets/dist/js/jquery.canvasjs.min.js"></script>
    <!-- <script src="dist/js/dashboard1.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#myTable').DataTable({
                "order":[0, "desc"],
                "lengthMenu": [[50, 70, 100, -1], [50, 70, 100, "All"]]
            });
        });

        $(document).ready(function(){
            $('#prior').DataTable({
                "lengthMenu": false
            });
        });
    </script>
    <script type="text/javascript">
        function confirmationDelete(anchor){
            var conf = confirm('Are you sure you want to delete this record?');
            if(conf)
            window.location=anchor.attr("href");
        }

        $(document).on("click", "#updateCancel_button", function () {
             var reminder_id = $(this).attr("data-id");
             var trigger = $(this).attr("data-name");
             $("#reminder_id1").val(reminder_id);
             $("#trigger").val(trigger);
        });

        $(document).on("click", "#updateComp_button", function () {
             var company_id = $(this).attr("data-id");
             var company_name = $(this).attr("data-name");
             $("#company_id").val(company_id);
             $("#company_name").val(company_name);
        });

        $(document).on("click", "#updateDept_button", function () {
             var department_id = $(this).attr("data-id");
             var department = $(this).attr("data-name");
             $("#department_id").val(department_id);
             $("#department").val(department);
        });

        $(document).on("click", "#updateEmp_button", function () {
             var employee_id = $(this).attr("data-id");
             var employee = $(this).attr("data-name");
             $("#employee_id").val(employee_id);
             $("#employee").val(employee);
        });

        $(document).on("click", "#updateRem_button", function () {
             var reminder_id = $(this).attr("data-id");
             var notes = $(this).attr("data-name");
             var employee = $(this).attr("data-aa");
             var due_date = $(this).attr("data-bb");
             var status = $(this).attr("data-cc");
             $("#reminder_id").val(reminder_id);
             $("#notes").val(notes);
             $("#employee").val(employee);
             $("#due_date").val(due_date);
             $("#status").val(status);
        });


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

        $(document).on("click", "#updateLoc_button", function () {
             var location_id = $(this).attr("data-id");
             var lvm = $(this).attr("data-name");
             var location_code = $(this).attr("data-aa");
             var location_name = $(this).attr("data-ab");
             $("#location_id").val(location_id);
             $("#lvm").val(lvm);
             $("#location_code").val(location_code);
             $("#location_name").val(location_name);
        });

        $(document).on("click", "#updateType_button", function () {
             var type_id = $(this).attr("data-id");
             var type = $(this).attr("data-name");
             var color = $(this).attr("data-aa");
             $("#type_id").val(type_id);
             $("#type").val(type);
             $("#color").val(color);
        });

        $(document).on("click", "#updateSubtype_button", function () {
             var subtype_id = $(this).attr("data-id");
             var subtype = $(this).attr("data-name");
             $("#subtype_id").val(subtype_id);
             $("#subtype").val(subtype);
        });

        function chooseType(){
            var loc= document.getElementById("baseurl").value;
            var redirect = loc+'masterfile/getType';
            var type = document.getElementById("type").value;
            $.ajax({
                    type: 'POST',
                    url: redirect,
                    data: 'type='+type,
                    success: function(data){
                        $("#subtype").html(data);
                   }
            }); 
        }

        function isNumberKey(txt, evt){
           var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode == 46) {
                //Check if the text already contains the . character
                if (txt.value.indexOf('.') === -1) {
                    return true;
                } else {
                    return false;
                }
            } else {
                if (charCode > 31
                     && (charCode < 48 || charCode > 57))
                    return false;
            }
            return true;
        }
    </script>
    

</body>

</html>