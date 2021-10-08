/*=========================================================================================
    File Name: column.js
    Description: Chartjs column chart
    ----------------------------------------------------------------------------------------
    Item Name: Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit
    Version: 1.2
    Author: ThemeSelection
    Author URL: https://themeselection.com/
==========================================================================================*/

// Column chart
// ------------------------------
$(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#column-chart");

    // Chart Options
    var chartOptions = {
        // Elements options apply to all of the options unless overridden in a dataset
        // In this case, we are setting the border of each bar to be 2px wide and green
        elements: {
            rectangle: {
                borderWidth: 2,
                borderColor: 'rgb(0, 255, 0)',
                borderSkipped: 'bottom'
            }
        },
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration:500,
        legend: {
            position: 'top',
        },
        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: true,
                }
            }],
            yAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: true,
                }
            }]
        },
        title: {
            display: true,
            text: 'Bar Chart Showing States Performance'
        }
    };

    // Chart Data
    var chartData = {
        labels: ["Western Bahr el Ghazal", "Lakes", "Warrap", "Western Equatoria", "Central Equatoria", "Eastern Equatoria",
                "Jonglei","Unity","Upper Nile","Northern Bahr el Ghazal","Abyei Administrative Area","Ruweng Administrative Area",
                 "Pibor Administrative Area"],
        datasets: [{
            label: "State",
            data: [65, 85, 44, 81, 56, 75, 90, 60, 75, 50, 95, 69, 84],
            backgroundColor: ["#28D094","#FF4961","#1E9FF2","#009933","#ffff00","#ff0000", "#000066", "#660000", "#00001a", "#333399", "#cc3300", "#9900cc", "#00cc00"],
            hoverBackgroundColor: "rgba(40,208,148,.9)",
            borderColor: "transparent"
        }]
    };
    var config = {
        type: 'bar',

        // Chart Options
        options : chartOptions,

        data : chartData
    };

    // Create the chart
    var lineChart = new Chart(ctx, config);
});