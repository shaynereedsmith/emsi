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

        // console.log(data.trend_comparison.regional);

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
            aspectRatio: 5,
            datasets: [{
              label: 'Regional',
              fill: false,
              backgroundColor: 'rgb(255, 99, 132)',
              borderColor: 'black',
              lineTension: 0,
              pointRadius: 7,
              pointBackgroundColor: 'black',
              pointBorderColor: 'white',
              pointBorderWidth: 2,
              data: data.trend_comparison.regional,
            },
            {
              label: 'State',
              fill: false,
              backgroundColor: 'rgb(255, 99, 132)',
              borderColor: 'skyblue',
              lineTension: 0,
              pointStyle: 'rect',
              pointRadius: 7,
              pointBackgroundColor: 'skyblue',
              pointBorderColor: 'white',
              pointBorderWidth: 2,
              data: data.trend_comparison.state,
            },
            {
              label: 'Nation',
              fill: false,
              backgroundColor: 'rgb(255, 99, 132)',
              borderColor: 'lightblue',
              lineTension: 0,
              pointStyle: 'triangle',
              pointRadius: 7,
              pointBackgroundColor: 'lightblue',
              pointBorderColor: 'white',
              pointBorderWidth: 2,
              data: data.trend_comparison.nation,
            }]
          },

          // Configuration options go here
          options: {
            responsive:true,
            maintainAspectRatio: false,
          }
        });
      },

    });

  }

  loadLineChart();

});
