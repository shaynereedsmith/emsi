'use strict'

console.log('test');

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
    error:  function() {
      console.log('error');
    }
  });
}

window.onload = loadConfiguration;
