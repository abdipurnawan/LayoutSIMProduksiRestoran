// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Metropolis"),
'-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + "").replace(",", "").replace(" ", "");
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
        dec = typeof dec_point === "undefined" ? "." : dec_point,
        s = "",
        toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return "" + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || "").length < prec) {
        s[1] = s[1] || "";
        s[1] += new Array(prec - s[1].length + 1).join("0");
    }
    return s.join(dec);
}

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: ["Minggu ke-1", "Minggu Ke-2", "Minggu Ke-3", "Minggu Ke-4"],
        datasets: [{
            label: "Revenue",
            backgroundColor: "rgba(0, 97, 242, 1)",
            hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
            borderColor: "#4e73df",
            data: [3245000, 4768500, 7821000, 4042300]
        }]
    },
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
            }
        },
        scales: {
            xAxes: [{
                time: {
                    unit: "month"
                },
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    maxTicksLimit: 6
                },
                maxBarThickness: 25
            }],
            yAxes: [{
                ticks: {
                    min: 0,
                    max: 10000000,
                    maxTicksLimit: 5,
                    padding: 10,
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return "Rp " + number_format(value);
                    }
                },
                gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                }
            }]
        },
        legend: {
            display: false
        },
        tooltips: {
            titleMarginBottom: 10,
            titleFontColor: "#6e707e",
            titleFontSize: 14,
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: "#dddfeb",
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            callbacks: {
                label: function(tooltipItem, chart) {
                    var datasetLabel =
                        chart.datasets[tooltipItem.datasetIndex].label || "";
                    return datasetLabel + ": Rp " + number_format(tooltipItem.yLabel);
                }
            }
        }
    }
});

function setChartDataMakanan(e){
    $('.dropdown-item').removeClass("active");
    e.classList.add("active");
    myBarChart.clear();
    myBarChart.data.labels = ["Burger", "Salad", "Pizza", "spaghetti"];
    myBarChart.data.datasets = [{
          label: "Revenue",
          backgroundColor: "rgba(0, 97, 242, 1)",
          hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
          borderColor: "#4e73df",
          data: [12450000, 7685000, 7210000, 4042300]
      }],
    myBarChart.options.scales.yAxes[0].ticks.max = 10000000;
    myBarChart.update();
  }

function setChartDataMingguan(e){
    $('.dropdown-item').removeClass("active");
    e.classList.add("active");
    myBarChart.clear();
    myBarChart.data.labels = ["Minggu ke-1", "Minggu Ke-2", "Minggu Ke-3", "Minggu Ke-4"];
    myBarChart.data.datasets = [{
          label: "Revenue",
          backgroundColor: "rgba(0, 97, 242, 1)",
          hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
          borderColor: "#4e73df",
          data: [1245000, 768500, 721000, 442300]
      }],
    myBarChart.options.scales.yAxes[0].ticks.max = 10000000;
    myBarChart.update();
  }

  function setDataBulanan(e){
    $('.dropdown-item').removeClass("active");
    e.classList.add("active");
    myBarChart.clear();
    myBarChart.data.labels = ["Januari", "Februari", "Maret", "Aprli","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    myBarChart.data.datasets = [{
          label: "Revenue",
          backgroundColor: "rgba(0, 97, 242, 1)",
          hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
          borderColor: "#4e73df",
          data: [3245000, 4768500, 7821000, 5042300,2245000, 3768500, 4321000, 5662300,7845000, 4268500, 7121000, 2342300]
      }]
    myBarChart.options.scales.yAxes[0].ticks.max = 10000000;
    myBarChart.update();
  }

  function setDataTahunan(e){
    $('.dropdown-item').removeClass("active");
    e.classList.add("active");
    myBarChart.clear();
    myBarChart.data.labels = ["2020","2021"];
    myBarChart.data.datasets = [{
          label: "Revenue",
          backgroundColor: "rgba(0, 97, 242, 1)",
          hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
          borderColor: "#4e73df",
          data: [32045000, 47685000]
      }];
    myBarChart.options.scales.yAxes[0].ticks.max = 100000000;
    myBarChart.update();
  }