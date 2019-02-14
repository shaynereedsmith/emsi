'use strict'

$(document).ready(function(){

  // Get canvas element
  var chart = $('#lineChart');

  var loadLineChart = function() {

    // Get object from API
    var url = 'http://www.mocky.io/v2/5a29b5672e00004a3ca09d33';

    $.ajax({
      dataType: 'jsonp',
      url: url,
      success: function(data) {

        // Get start and end years
        var start = data.trend_comparison.start_year;
        var end = data.trend_comparison.end_year

        // Build range of years
        var range = Array(end - start + 1).fill().map((_, idx) => start + idx);

        // Calculate percentage of change
        var regionalData = percentChange(data.trend_comparison.regional);
        var nationalData = percentChange(data.trend_comparison.nation);
        var stateData = percentChange(data.trend_comparison.state);

        // Chart object
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
              data: regionalData,
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
              data: stateData,
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
              data: nationalData,
            }]
          },
          options: {
            responsive:true,
            maintainAspectRatio: false,
          }
        });
      },

    });

  }

  // Function to create percentage of change between data items
  function percentChange (oldArr) {
    var newArr = [0];
    for (var i = 0; i < oldArr.length - 1; i++) {
      var x = oldArr[i+1] - oldArr[i];
      newArr.push(Math.round(oldArr[i] / x));
    }
    return newArr;
  }

  // Instatiate chart
  loadLineChart();

});
