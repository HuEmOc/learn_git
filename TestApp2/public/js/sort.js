app.controller('UserController', function ($scope, $http) {
    $http.get('info').then(function (response) {
        $scope.myData = response.data.records;
    })