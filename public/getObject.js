'use strict'

$(document).ready(function(){

  var chart = $('#lineChart');

  var loadData = function() {

    var url = 'http://www.mocky.io/v2/5a29b5672e00004a3ca09d33';

    $.ajax({
      dataType: 'jsonp',
      url: url,
      success: function(data) {
        //DATA
        console.log(data);
        return data;
      },

    });
  }

  loadData();

  let lineChart = new Chart(chart, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
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
  // var chart = new Chart(ctx, {
  //   // The type of chart we want to create
  //   type: 'line',
  //
  //   // The data for our dataset
  //   data: {
  //     labels: ["January", "February", "March", "April", "May", "June", "July"],
  //     datasets: [{
  //       label: "My First dataset",
  //       backgroundColor: 'rgb(255, 99, 132)',
  //       borderColor: 'rgb(255, 99, 132)',
  //       data: [0, 10, 5, 2, 20, 30, 45],
  //     }]
  //   },
  //
  //   // Configuration options go here
  //   options: {}
  // });


});
