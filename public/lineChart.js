'use strict'

$(document).ready(function(){

  var chart = $('#lineChart');

  var loadLineChart = function() {
    // Get object from API
    var url = 'http://www.mocky.io/v2/5a29b5672e00004a3ca09d33';

    $.ajax({
      dataType: 'jsonp',
      url: url,
      success: function(data) {
        //DATA
        console.log(data.trend_comparison.start_year);

        var start = data.trend_comparison.start_year;
        var end = data.trend_comparison.end_year

        var range = Array(end - start + 1).fill().map((_, idx) => start + idx)

        console.log(data);

        let lineChart = new Chart(chart, {
          // The type of chart we want to create

          type: 'line',

          // The data for our dataset
          data: {
            labels: range,
            datasets: [{
              label: "My First dataset",
              backgroundColor: 'rgb(255, 99, 132)',
              borderColor: 'rgb(255, 99, 132)',
              data: [0, 10, 5, 2, 20, 30, 45],
            }]
          },

          // Configuration options go here
          options: {}
        });
      },

    });

  }

  loadLineChart();

});
