window.onload = function () {

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
            type: "splineArea", 
            showInLegend: true,
            name: "Entertainment",
            color: "#039be575",
            yValueFormatString: "$#,##00",     
            dataPoints: [
                { x: new Date(2016, 2), y: 10100 },
                { x: new Date(2016, 3), y: 6000 },
                { x: new Date(2016, 4), y: 3400 },
                { x: new Date(2016, 5), y: 4000 },
                { x: new Date(2016, 6), y: 9000 },
                { x: new Date(2016, 7), y: 3900 },
                { x: new Date(2016, 8), y: 4200 },
                { x: new Date(2016, 9), y: 5000 },
                { x: new Date(2016, 10), y: 14300 },
                { x: new Date(2016, 11), y: 12300 },
                { x: new Date(2017, 0), y: 8300 },
                { x: new Date(2017, 1), y: 6300 }
            ]
        },
        {
            type: "splineArea", 
            showInLegend: true,
            yValueFormatString: "$#,##0",      
            name: "Maintenance",
            dataPoints: [
                { x: new Date(2016, 2), y: 1700 },
                { x: new Date(2016, 3), y: 2600 },
                { x: new Date(2016, 4), y: 1000 },
                { x: new Date(2016, 5), y: 1400 },
                { x: new Date(2016, 6), y: 900 },
                { x: new Date(2016, 7), y: 1000 },
                { x: new Date(2016, 8), y: 1200 },
                { x: new Date(2016, 9), y: 5000 },
                { x: new Date(2016, 10), y: 1300 },
                { x: new Date(2016, 11), y: 2300 },
                { x: new Date(2017, 0), y: 2800 },
                { x: new Date(2017, 1), y: 1300 }
            ]
        }]
    });
    chart.render();

    }