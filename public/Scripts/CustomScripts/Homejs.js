


/// <reference path="../jquery-3.1.1.min.js" />
/// <reference path="../bootstrap.min.js" />
/// <reference path="../angular.min.js" />


var app = angular.module('myApp', [])
    .controller('myCtrl', ["$scope", "$http", function ($scope, $http) {

      


        //fawad data section 
        $scope.GetFawadList = function () {
            $http({
                traditional: true,
                url: "/BirthPlus/getFawadDatalist",
                method: 'GET',
                contentType: "application/json",
                dataType: "json"
            }).success(function (data) {
                if (data.length > 0) {
                   
                    $scope.FawadList = data;
                }
            });
        };
        $scope.GetFawadList();
        $scope.FawadList1 = [];
        //fawad end section




    }]);