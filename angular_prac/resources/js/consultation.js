var app = angular.module('consultApp', []);

app.controller('consultCtrl', function($scope) {
    $scope.message= "sample only";

    $scope.consult = function(mes) {
        $scope.message = mes;
    };
   
});