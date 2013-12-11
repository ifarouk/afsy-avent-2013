function TranslationDemoCtrl($scope) {
  $scope.routes = [
    {text: Translator.get('Symfony2 is great'), link: Routing.generate('home'), done: true},
    {text: 'AngularDemo 1', link: Routing.generate('angular_demo1'), done: false},
    {text: 'AngularDemo 2', link: Routing.generate('angular_demo2'), done: false}];
}
