'use strict'

var Chart = require('chart.js');
var myChart = new Chart(ctx, {...});

var loadConfiguration = function() {

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

window.onload = loadConfiguration;
