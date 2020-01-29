window.onload = function () {
    var selectBox = document.getElementById("selectBox");
    var a = document.getElementById("month-sel");
    var b = document.getElementById("quarter-sel");
    var c = document.getElementById("year-sel");
        selectBox.addEventListener('change', changeFunc);
        function changeFunc() {
            if(this.value == "Monthly"){
                a.style.display = "block";
                b.style.display = "none";
                c.style.display = "block";
            }else if (this.value == "Quarterly") {
                a.style.display = "none";
                b.style.display = "block";
                c.style.display = "block";
            }else if (this.value == "Yearly") {
                a.style.display = "none";
                b.style.display = "none";
                c.style.display = "block";
            }
            ;
        }
    var chart = new CanvasJS.Chart("piechartOutage", {
        animationEnabled: true,
        // title: {
        //     text: "Desktop Search Engine Market Share - 2016"
        // },
        data: [{
            type: "pie",
            startAngle: 240,
            yValueFormatString: "##0.00\"%\"",
            indexLabel: "{label} {y}",
            dataPoints: [
                {y: 2.45, label: "Coal", color: "#a68c73"},
                {y: 7.31, label: "Solar", color: "#d4b980"},
                {y: 7.06, label: "Natural Gas", color: "#ebe6a4"},
                {y: 4.91, label: "Oil Based", color: "#e98d86"},
                {y: 1.26, label: "Biomas", color: "#93839f"},
                {y: 1.26, label: "Hydro Electric", color: "#6c9bc5"},
                {y: 1.26, label: "Wind", color: "#7fb08d"},
                {y: 1.26, label: "Geothermal", color: "#c3c6c4"}

            ]
        }]
    });
    chart.render();

    var chart = new CanvasJS.Chart("OutageArea", {
        animationEnabled: true,
        // title:{
        //     text: "Outage Capacity by Outage Type"
        // },
        axisY :{
            includeZero: false,
            title:"MW"
        },
        toolTip: {
            shared: true
        },
        legend: {
            fontSize: 13
        },
        data: [
        {
            type: "area", 
            showInLegend: true,
            yValueFormatString: "##0",      
            name: "Unplanned Outage",
            color: "#ff3333",  
            dataPoints: [
                { y: 233,  label: "01-1"},
                { y: 140,  label: "01-2"},
                { y: 344,  label: "01-3"},
                { y: 84,  label: "01-4"},
                { y: 457,  label: "01-5"},
                { y: 344,  label: "01-6"},
                { y: 45,  label: "01-7"},
                { y: 343,  label: "01-8"},
                { y: 393,  label: "01-9"},
                { y: 120,  label: "01-10"},
                { y: 112,  label: "01-11"},
                { y: 101,  label: "01-12"}
            ]
        },
        {
            type: "area", 
            showInLegend: true,
            name: "Planned Outage",
            yValueFormatString: "##00", 
            color: "#3c81ff",    
            dataPoints: [
                { y: 130,  label: "01-1" },
                { y: 34,  label: "01-2"},
                { y: 356,  label: "01-3"},
                { y: 435,  label: "01-4"},
                { y: 34,  label: "01-5"},
                { y: 130,  label: "01-6"},
                { y: 345,  label: "01-7"},
                { y: 335,  label: "01-8"},
                { y: 344,  label: "01-9"},
                { y: 334,  label: "01-10"},
                { y: 355,  label: "01-11"},
                { y: 62,  label: "01-12"}
            ]
        }]
    });
    chart.render();

}