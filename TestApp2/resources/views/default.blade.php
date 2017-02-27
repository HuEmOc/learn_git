<!doctype html>
<html ng-app="myApp">
<head>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script src=""></script>
    <style>
        table .table-bordered{
            border: 1px solid #f4f4f4;
        }

        .sortorder:after {
            content: '\25b2';   // BLACK UP-POINTING TRIANGLE
        }
        .sortorder.reverse:after {
            content: '\25bc';   // BLACK DOWN-POINTING TRIANGLE
        }
    </style>
</head>
<body ng-controller="UserController">

<!-- Modal Add_member-->
<div class="modal fade" id="createMember" role="dialog">
    <div class="modal-dialog modal-lg">
        <!--Add member-->
        <div class="col-md-8 col-xs-offset-2  " id="createMember">
            <div class="panel panel-primary">
                <div class="panel-heading">Add member</div>
                <div class="panel-body">
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Name</div>
                        <div class="col-md-10">
                            <input type="text" value="" name="name"
                                   class="form-control" ng-model="name" placeholder="Vui lòng nhập tên" required>
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Address</div>
                        <div class="col-md-10">
                            <input type="text" name="address"
                                   class="form-control" ng-model="address" placeholder="Vui lòng nhập địa chỉ" required>
                        </div>
                    </div>
                    <!-- end rows -->

                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Age</div>
                        <div class="col-md-10">

                            <input type="number" name="age"
                                   class="form-control" ng-model="age" placeholder="Vui lòng nhập tuổi" required>
                        </div>
                    </div>
                    <!-- end rows -->
                    <input name="photo" ng-model="photo" value="@{{ photo }}"
                           class="form-control" >
                    <!-- rows -->
                    <div>
                        <img src="http://icarus.cs.weber.edu/CS_Images/Misc/noImage.jpg" ng-show="showLoader"/>
                        <input type="file" name="photo" onchange="angular.element(this).scope().uploadImage(this)">
                    </div>
                    <!-- end rows -->

                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <input type="submit" value="Process" ng-click="storeUser()" class="btn btn-primary">
                        </div>
                    </div>
                    <!-- end rows -->
                </div>
            </div>
        </div>
    </div>
    <!--End Add member-->
</div>
<!--End modal add member-->
<!--Modal Edit_member-->
<div class="modal fade" id="editMember" role="dialog">
    <div class="modal-dialog modal-lg">
        <!--Edit member-->
        <div class="col-md-8 col-xs-offset-2  " id="editMember">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit member</div>
                <div class="panel-body">


                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Name</div>
                        <div class="col-md-10">
                            <input type="text" name="name" ng-model="name" placeholder="Vui lòng nhập tên"
                                   value="@{{name}}" }}
                                   class="form-control" required>
                        </div>
                    </div>
                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Address</div>
                        <div class="col-md-10">
                            <input type="text" name="address" ng-model="address" placeholder="Vui lòng nhập địa chỉ"
                                   class="form-control" required>
                        </div>
                    </div>
                    <!-- end rows -->

                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Age</div>
                        <div class="col-md-10">

                            <input type="number" name="age" ng-model="age" placeholder="Vui lòng nhập tuổi"
                                   class="form-control" required>
                        </div>

                        <!-- end rows -->
                        <input name="photo" ng-model="photo" value="@{{ photo }}"
                               class="form-control" >
                        <!-- rows -->

                    </div>
                    <!-- end rows -->

                    <!-- rows -->
                    <div>
                        <input type="file" name="file" onchange="angular.element(this).scope().uploadImage(this)">
                    </div>

                    <!-- end rows -->
                    <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <input type="submit" value="Process" ng-click="updateUser(id)" class="btn btn-primary">
                        </div>
                    </div>
                    <!-- end rows -->

                </div>
            </div>
        </div>
    </div>
    <!--End Edit member-->
</div>
<!--End Modal Edit_member-->

<!--show member-->
<div ng-app="myApp">
    <div class="col-md-8 col-md-offset-2" style="margin-top:50px">
        <button ng-click="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#createMember"
                ng-click="createUser()">ADD
        </button>
        <div class="panel panel-primary">
            <div class="panel-heading">User List</div>
             <div class="panel-body">
               <!--Search-->
                 <div class="row">
                     <div class="col-md-4">
                         Search By:
                         <select class="form-control" ng-model='SearchTerm'>
                             <option value='$'>Any</option>
                             <option value='name'>Name</option>
                             <option value='address'>Address</option>
                             <option value='age'>Age</option>
                         </select>
                     </div>
                     <div class="col-md-8">
                         Search Key:
                         <input type="text" class="form-control" ng-model="searchKeyword[SearchTerm]">
                     </div>
                 </div>

                 <!--End Search-->
                 <br />


                <table class="table table-bordered">
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th ng-click="sortBy('name')" style="width: 15%">
                            Name
                            <span class="sortorder" ng-show="propertyName === 'name'" ng-class ="{reverse: reverse}"></span>
                        </th>

                        <th ng-click="sortBy('address')" style="width: 15%">
                            Address
                            <span class="sortorder" ng-show="propertyName === 'address'" ng-class ="{reverse: reverse}"></span>
                        </th>

                        <th ng-click="sortBy('age')" style="width: 5%">
                            Age
                            <span class="sortorder" ng-show="propertyName === 'age'" ng-class ="{reverse: reverse}"></span>
                        </th>
                        <th style="width: 10%">Image</th>
                        <th style="width: 10%">Action</th>
                    </tr>

                    <tr ng-repeat="(key,member) in myData |filter: searchKeyword" >
                        <td>@{{ $index +1 }}</td>
                        <td>@{{ member.name }}</td>
                        <td>@{{ member.address }}</td>
                        <td>@{{ member.age }}</td>
                        <td>
                            <img style=" width: 80%;" ng-show="member.photo.length" src="/uploads/images/@{{ member.photo }}">
                        </td>
                        <td>
                            <button ng-click="editUser(key)" class="btn btn-sm btn-primary"
                                    data-toggle="modal" data-target="#editMember">EDIT</button>
                            <button ng-click="delUser(key,$event)"
                                    class="btn btn-sm btn-danger">DEL</button>
                        </td>
                    </tr>
                    </table>
               </div>
                    <div class="clearfix"></div>

            </div>
        </div>
</div>

<!--end show member-->


<script>
    var app = angular.module('myApp', []);
        app.controller('UserController',['$scope', '$http','orderByFilter' , function($scope, $http, orderBy){
            $http.get('info').then(function (response) {
                $scope.myData = response.data.records;
            })

            //search
            $scope.searchKeyword = {}
            $scope.SearchTerm = '$';

            //sort
            $scope.propertyName = "age";
            $scope.reverse = false;
            $scope.myData = orderBy($scope.myData, $scope.propertyName, $scope.reverse);

            $scope.sortBy = function(propertyName) {
                $scope.reverse = (propertyName !== null && $scope.propertyName === propertyName)
                        ? !$scope.reverse : false;
                $scope.propertyName = propertyName;
                $scope.myData = orderBy($scope.myData, $scope.propertyName, $scope.reverse);
            };

//Upload Image
        $scope.uploadImage = function(a) {
                var formData = new FormData();
                formData.append("file", a.files[0]);
            $scope.showLoader = true;
            response = $http.post('/upload/image', formData, {
                headers: {'Content-Type': undefined },
                transformRequest: angular.identity
            }).then(function(data) {
                if(data.data.success){
                    $scope.photo = data.data.img;
                }
            });
        }

    //Create User

    $scope.createUser = function () {
        // $scope.id ='';
        $scope.name = '';
        $scope.address = '';
        $scope.age = '';
        $scope.photo ='';
    }

    //storeUser
    $scope.storeUser = function () {
        $http.post("/admin", {
            name: $scope.name,
            address: $scope.address,
            age: $scope.age,
            photo:$scope.photo,
        }, {headers: {'Content-Type': 'application/json'}})
                .then(function (response) {
                    $scope.myData.push({
                        'name': $scope.name,
                        'address': $scope.address,
                        'age': $scope.age,
                        'photo':$scope.photo
                    });
                });
        $('#createMember').modal('hide');
    };
    //end storeUser

    //editUser
    $scope.editUser = function (id) {
        $scope.id = id;
        $scope.name = $scope.myData[id].name;
        $scope.address = $scope.myData[id].address;
        $scope.age = $scope.myData[id].age;
        $scope.photo = $scope.myData[id].photo;

    }

    //updateuser
    $scope.updateUser = function (id) {
        $http.put("/admin/" + $scope.myData[id].id, {
            name: $scope.name,
            address: $scope.address,
            age: $scope.age,
            photo: $scope.photo
        }, {headers: {'Content-Type': 'application/json'}})
                .then(function (response) {
                    $scope.myData[id].name = $scope.name;
                    $scope.myData[id].address = $scope.address;
                    $scope.myData[id].age = $scope.age;
                    $scope.myData[id].photo = $scope.photo;
                    $('#editMember').modal('hide');
                });
    }
    //end updateuser

   //Delete
    $scope.delUser = function (key, $event) {
        $http.delete('admin/' + $scope.myData[key].id).then(function (res) {
            // $scope.myData[key] = [];
            angular.element($event.currentTarget).parent().parent().remove();
        });
    }

    //End Delete
        }]);
</script>
</body>
</html>