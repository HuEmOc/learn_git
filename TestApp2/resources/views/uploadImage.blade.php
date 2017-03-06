<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
</head>
<body>
<div ng-app="sampleapp">
    <div ng-controller="samplecontoller" ng-init="showData()">

        <ul>
            <li class="paginationclass" style="font-weight:bold;">
                <span>Name</span>
                <span>Age</span>
                <span>Designation</span>
            </li>
            <li class="paginationclass"
                ng-repeat="datalist in datalists | pagination: curPage * pageSize | limitTo: pageSize">
                <div>
                    <span>@{{ datalist.name }} </span>
                    <span>@{{ datalist.age }}</span>
                    <span>@{{ datalist.designation }}</span>
                </div>
            </li>
        </ul>

        <div class="pagination pagination-centered" ng-show="datalists.length">
            <ul class="pagination-controle pagination">
                <li>
                    <button type="button" class="btn btn-primary" ng-disabled="curPage == 0"
                            ng-click="curPage=curPage-1"> &lt; PREV
                    </button>
                </li>
                <li>
                    <span>Page @{{curPage + 1}} of @{{ numberOfPages() }}</span>
                </li>
                <li>
                    <button type="button" class="btn btn-primary"
                            ng-disabled="curPage >= datalists.length/pageSize - 1"
                            ng-click="curPage = curPage+1">NEXT &gt;</button>
                </li>
            </ul>
        </div>

    </div>
</div>
</body>
</html>
<script>
    var myapp = angular.module('sampleapp', []);
    myapp.controller('samplecontoller', function ($scope) {
        $scope.showData = function () {
            $scope.curPage = 0;
            $scope.pageSize = 3;
            $scope.datalists = [
                {"name": "John", "age": "16", "designation": "Software Engineer1"},
                {"name": "John2", "age": "21", "designation": "Software Engineer2"},
                {"name": "John3", "age": "19", "designation": "Software Engineer3"},
                {"name": "John4", "age": "17", "designation": "Software Engineer4"},
                {"name": "John5", "age": "21", "designation": "Software Engineer5"},
                {"name": "John6", "age": "31", "designation": "Software Engineer6"},
                {"name": "John7", "age": "41", "designation": "Software Engineer7"},
                {"name": "John8", "age": "16", "designation": "Software Engineer8"},
                {"name": "John18", "age": "16", "designation": "Software Engineer9"},
                {"name": "John28", "age": "16", "designation": "Software Engineer10"},
                {"name": "John38", "age": "16", "designation": "Software Engineer11"},
                {"name": "John48", "age": "16", "designation": "Software Engineer12"},
                {"name": "John58", "age": "16", "designation": "Software Engineer13"},
                {"name": "John68", "age": "16", "designation": "Software Engineer14"},
                {"name": "John68", "age": "16", "designation": "Software Engineer15"}
            ]
            $scope.numberOfPages = function () {
                return Math.ceil($scope.datalists.length / $scope.pageSize);
            };
        }
    });

    angular.module('sampleapp').filter('pagination', function () {
        return function (input, start) {
            start = +start;
            return input.slice(start);
        };
    });

</script>

What I did today: Pagination in angularjs,
What I learn today: Angularjs tutorials, how to validate data input with ng-message
Tomorrow plan: validation image, continue angularjs tutorials
What I don't understand: Nothing.