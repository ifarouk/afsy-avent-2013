(function () {
    'use strict';

    var app = angular.module('demoApp', []);
 	app.filter('trans', function () {
      return function (input) {
      	return Translator.get(input);
      };
  	});

})();


