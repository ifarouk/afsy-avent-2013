function RoutingDemoCtrl($scope) {
  $scope.routes = [
    {text: 'AngularDemo 1', link: Routing.generate('angular_demo1'), done: true},
    {text: 'AngularDemo 2', link: Routing.generate('angular_demo2'), done: false}];
}
