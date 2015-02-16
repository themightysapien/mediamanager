var ASSETS_URL = 'vendor/themighty/mediamanager/assets/';
angular.module('mediaManager', ['ui.router'])
    .config(function($stateProvider, $urlRouterProvider) {

        // Now set up the states
        $stateProvider
            .state('app', {
                url : "/app",
                templateUrl: ASSETS_URL+"templates/app.html"
            })
            .state('state1', {
                url: "/state1",
                templateUrl: "templates/state1.html"
            })
            .state('state1.list', {
                url: "/list",
                templateUrl: "templates/state1.list.html",
                controller: function ($scope) {
                    $scope.items = ["A", "List", "Of", "Items"];
                }
            })
            .state('state2', {
                url: "/state2",
                templateUrl: "templates/state2.html"
            })
            .state('state2.list', {
                url: "/list",
                templateUrl: "templates/state2.list.html",
                controller: function ($scope) {
                    $scope.things = ["A", "Set", "Of", "Things"];
                }
            });

        $urlRouterProvider.otherwise("/app");
    });