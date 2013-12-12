(function () {
    'use strict';

    angular.module('cocktails',['restangular']).controller('cocktailsIndexController',function($scope, Restangular){
        $scope.pageTitle     = "Cocktail List";
        $scope.cocktailsList = Restangular.all(Routing.generate('get_cocktails'),{},true).getList();

    });

    var app = angular.module('demoApp', ['cocktails']);

    app.config(function(RestangularProvider) {
        RestangularProvider.setRequestSuffix('.json');
    });
})();

