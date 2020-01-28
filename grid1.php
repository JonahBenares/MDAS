<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Market Prices & Schedule</title>   
    <link rel="stylesheet" type="text/css" href="http://localhost/MDAS/assets/dist/css/style.css">
    <style type="text/css">
        table {
          table-layout: fixed;
          border-spacing: 0px;
        }

        td, th {
          padding-left: 5px;
          padding-right: 5px;
        }

        .tr_shaded:nth-child(even) {
          background: #e0e0e0;
        }

        .tr_shaded:nth-child(odd) {
          background: #ffffff;
        }

        .scrolly_table {
          white-space: nowrap;
          overflow: auto;
        }

        /* The frozen cells will each get two class names,
           making it easier for me to select all of them or
           only a subset.  All frozen cells will be "fixed",
           the corner will also be in class "freeze", and the
           row and column headers will be "horizontal" and
           "vertical" respectively. */
        .fixed.freeze {
          z-index: 10;
          position: relative;
        }

        .fixed.freeze_vertical {
          z-index: 5;
          position: relative;
        }

        .fixed.freeze_horizontal {
          z-index: 1;
          position: relative;
        }
        table tr th, table tr td{
            border:1px solid #000
        }
    </style>
</head>

<body>    
    <div id="scrolling_table_2" class="scrolly_table scrolling_table_2" style="max-width:700px; max-height:200px">
        <table class="table" style="border:1px solid #000">
            <tr>
                <th style="background-color:white" class="fixed freeze" rowspan="2">Corner</th>
                <th style="background-color:white" class="fixed freeze" rowspan="2">Corner</th>
                <th style="background-color:white" class="fixed freeze" rowspan="2">Corner</th>
                <th style="background-color:white" class="fixed freeze" rowspan="2">Corner</th>
                <th style="background-color:white" class="fixed freeze" rowspan="2">Corner</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="3">1</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="3">2</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="3">3</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="3">4</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="3">5</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="3">6</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="3">7</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="3">8</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="3">9</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="3">10</th>
            </tr>
            <tr>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>
                <th style="background-color:white" class="fixed freeze_vertical" colspan="">MW</th>

            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr class="tr_shaded">
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td class="fixed freeze_horizontal">Row header</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>

        </table>
    </div>
    <script type="text/javascript">
        function freeze_pane_listener(what_is_this, table_class) {
          // Wrapping a function so that the listener can be defined
          // in a loop over a set of scrolling table id's.
          // Cf. http://stackoverflow.com/questions/750486/javascript-closure-inside-loops-simple-practical-example
      
        return function() {
            var i;
            var translate_y = "translate(0," + what_is_this.scrollTop + "px)";
            var translate_x = "translate(" + what_is_this.scrollLeft + "px,0px)";
            var translate_xy = "translate(" + what_is_this.scrollLeft + "px," + what_is_this.scrollTop + "px)";
            
            var fixed_vertical_elts = document.getElementsByClassName(table_class + " freeze_vertical");
            var fixed_horizontal_elts = document.getElementsByClassName(table_class + " freeze_horizontal");
            var fixed_both_elts = document.getElementsByClassName(table_class + " freeze");
            
            // The webkitTransforms are for a set of ancient smartphones/browsers,
            // one of which I have, so I code it for myself:
            for (i = 0; i < fixed_horizontal_elts.length; i++) {
              fixed_horizontal_elts[i].style.webkitTransform = translate_x;
              fixed_horizontal_elts[i].style.transform = translate_x;
            }

            for (i = 0; i < fixed_vertical_elts.length; i++) {
               fixed_vertical_elts[i].style.webkitTransform = translate_y;
               fixed_vertical_elts[i].style.transform = translate_y;
            }

            for (i = 0; i < fixed_both_elts.length; i++) {
               fixed_both_elts[i].style.webkitTransform = translate_xy;
               fixed_both_elts[i].style.transform = translate_xy;
            }
          }
        }

        function even_odd_color(i) {
          if (i % 2 == 0) {
            return "#e0e0e0";
          } else {
            return "#ffffff";
          }
        }

        function parent_id(wanted_node_name, elt) {
          // Function to work up the DOM until it reaches
          // an element of type wanted_node_name, and return
          // that element's id.
          
          var wanted_parent = parent_elt(wanted_node_name, elt);
          
          if ((wanted_parent == undefined) || (wanted_parent.nodeName == null)) {
            // Sad trombone noise.
            return "";
          } else {
            return wanted_parent.id;
          }
        }

        function parent_elt(wanted_node_name, elt) {
          // Function to work up the DOM until it reaches 
          // an element of type wanted_node_name, and return
          // that element.
          
          var this_parent = elt.parentElement;
          if ((this_parent == undefined) || (this_parent.nodeName == null)) {
            // Sad trombone noise.
            return null;
          } else if (this_parent.nodeName == wanted_node_name) {
            // Found it:
            return this_parent;
          } else {
            // Recurse:
            return parent_elt(wanted_node_name, this_parent);
          }
        }

        var i, parent_div_id, parent_tr, table_i, scroll_div;
        var scrolling_table_div_ids = [ "scrolling_table_2"];

        // This array will let us keep track of even/odd rows:
        var scrolling_table_tr_counters = [];
        for (i = 0; i < scrolling_table_div_ids.length; i++) {
          scrolling_table_tr_counters.push(0);
        }

        // Append the parent div id to the class of each frozen element:
        var fixed_elements = document.getElementsByClassName("fixed");
        for (i = 0; i < fixed_elements.length; i++) {
          fixed_elements[i].className += " " + parent_id("DIV", fixed_elements[i]);
        }

        // Set background colours of row headers, alternating according to 
        // even_odd_color(), which should have the same values as those
        // defined in the CSS for the tr_shaded class.
        var fixed_horizontal_elements = document.getElementsByClassName("freeze_horizontal");
        for (i = 0; i < fixed_horizontal_elements.length; i++) {
          parent_div_id = parent_id("DIV", fixed_horizontal_elements[i]);
          table_i = scrolling_table_div_ids.indexOf(parent_div_id);
          
          if (table_i >= 0) {
            parent_tr = parent_elt("TR", fixed_horizontal_elements[i]);
            
            if (parent_tr.className.match("tr_shaded")) {
              fixed_horizontal_elements[i].style.backgroundColor = even_odd_color(scrolling_table_tr_counters[table_i]);
              scrolling_table_tr_counters[table_i]++;
            }
          }
        }

        // Add event listeners.
        for (i = 0; i < scrolling_table_div_ids.length; i++) {
          scroll_div = document.getElementById(scrolling_table_div_ids[i]);
          scroll_div.addEventListener("scroll", freeze_pane_listener(scroll_div, scrolling_table_div_ids[i]));
        }
    </script>
</body>

</html>