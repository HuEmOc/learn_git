<!doctype html>
<html>
<head>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular-messages.js"></script>
    <script src=""></script>
    <style>
        table .table-bordered {
            border: 1px solid #f4f4f4;
        }

        .sortorder:after {
            content: '\25b2';
        / / BLACK UP-POINTING TRIANGLE
        }

        .sortorder.reverse:after {
            content: '\25bc';
        / / BLACK DOWN-POINTING TRIANGLE
        }
        div.error{
            color: red;
        }
    </style>
</head>
<body ng-controller="UserController" ng-app="myApp">

<!-- Modal Add_member-->
<div class="modal fade" id="createMember" role="dialog">
    <div class="modal-dialog modal-lg">
        <!--Add member-->
        <div class="col-md-8 col-xs-offset-2  " id="createMember">
            <div class="panel panel-primary">
                <div class="panel-heading">Add member</div>
                <div class="panel-body">

                    <form name="addForm">
                        <!-- rows -->
                        <div class="form-group">
                            <div class="col-md-2">Name</div>
                            <div class="col-md-10">
                                <input type="text" name="name" ng-model="name" class="form-control" rows="4"
                                       ng-maxlength="100" placeholder="Vui lòng nhập tên" required/>
                                <div class="error" ng-messages="addForm.name.$error">
                                    <div ng-message="required">This name is requirment</div>
                                    <div ng-message="maxlength">Name must not exceed 100 characters</div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!---end row-->


                        <!-- rows -->
                        <div class="form-group">
                            <div class="col-md-2">Address</div>
                            <div class="col-md-10">
                                <input type="text" name="address" ng-model="address" class="form-control" rows="4"
                                       ng-maxlength="300" placeholder="Vui lòng nhập địa chỉ" required/>
                                <div class="error" ng-messages="addForm.address.$error">
                                    <div ng-message="required">This address is requirment</div>
                                    <div ng-message="maxlength">Address must not exceed 300 characters</div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!---end row-->


                        <!-- rows -->
                        <div class="form-group">
                            <div class="col-md-2">Age</div>
                            <div class="col-md-10">
                                <input type="number" name="age" ng-model="age" class="form-control" rows="4"
                                       ng-maxlength="2" placeholder="Vui lòng nhập tuổi"  required/>
                                <div class="error" ng-messages="addForm.age.$error">
                                    <div ng-message="required">This age is requirment</div>
                                    <div ng-message="maxlength">Age must not exceed 2 number</div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!---end row-->

                    </form>
                    <!-- end rows -->

                    <input style="display: none" name="photo" ng-model="photo" value="@{{ photo }}"
                           class="form-control">
                    <!-- rows -->
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <input type="file" accept="image/*" name="photo"
                                   onchange="angular.element(this).scope().uploadImage(this)">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- end rows -->

                    <!-- rows -->
                    <div class="form-group">
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

                    <form name="editForm">
                    <!-- rows -->
                    <div class="form-group">
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Name</div>
                            <div class="col-md-10">
                                <input type="text" name="name" ng-model="name" ng-maxlength="100"
                                       value="@{{name}}" }}
                                       class="form-control" required>
                                <div class="error" ng-messages="editForm.name.$error">
                                    <div ng-message="required">This name is requirment</div>
                                    <div ng-message="maxlength">Name must not exceed 100 characters</div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- end rows -->


                    <!-- rows -->
                    <div class="form-group">
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Address</div>
                        <div class="col-md-10">
                            <input type="text" name="address" ng-model="address" class="form-control" rows="4"
                                   ng-maxlength="300" placeholder="Vui lòng nhập địa chỉ" required/>
                            <div class="error" ng-messages="editForm.address.$error">
                                <div ng-message="required">This address is requirment</div>
                                <div ng-message="maxlength">Address must not exceed 300 characters</div>
                            </div>
                        </div>
                    </div>
                        <div class="clearfix"></div>
                     </div>
                    <!-- end rows -->

                    <!-- rows -->
                    <div class="form-group">
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2">Age</div>
                        <div class="col-md-10">
                            <input type="number" name="age" ng-model="age" class="form-control" ng-min="1"
                                   ng-maxlength="2" placeholder="Vui lòng nhập tuổi" onkeypress='validate(event)' required/>
                            <div class="error" ng-messages="editForm.age.$error">
                                <div ng-message="required">This age is requirment</div>
                                <div ng-message="maxlength">Age must not exceed 2 number</div>
                            </div>
                        </div>

                        <!-- end rows -->
                        <input style="display: none" name="photo" ng-model="photo" value="@{{ photo }}"
                               class="form-control">
                        <!-- rows -->

                    </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- end rows -->

                    <!-- rows -->
                    <div>
                        <input type="file" name="file" onchange="angular.element(this).scope().uploadImage(this)">
                    </div>
                </form>
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
<div ng-app="myApp" ng-init="showData()">
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
                <br/>


                <table class="table table-bordered">
                    <tr class="paginationclass">
                        <th style="width: 5%">ID</th>
                        <th ng-click="sortBy('name')" style="width: 15%">
                            Name
                            <span class="sortorder" ng-show="propertyName === 'name'"
                                  ng-class="{reverse: reverse}"></span>
                        </th>

                        <th ng-click="sortBy('address')" style="width: 15%">
                            Address
                            <span class="sortorder" ng-show="propertyName === 'address'"
                                  ng-class="{reverse: reverse}"></span>
                        </th>

                        <th ng-click="sortBy('age')" style="width: 5%">
                            Age
                            <span class="sortorder" ng-show="propertyName === 'age'"
                                  ng-class="{reverse: reverse}"></span>
                        </th>
                        <th style="width: 10%">Image</th>
                        <th style="width: 10%">Action</th>
                    </tr>

                    <tr class="paginationclass" ng-repeat="(key,member) in myData | filter: searchKeyword | pagination: curPage * pageSize | limitTo: pageSize">
                        <td>@{{ $index +1 }}</td>
                        <td style="word-break: break-all">@{{ member.name }}</td>
                        <td style="word-break: break-all">@{{ member.address }}</td>
                        <td>@{{ member.age }}</td>
                        <td>
                            <img style=" width: 80%;" ng-show="member.photo.length"
                                 src="/uploads/images/@{{ member.photo }}">
                        </td>
                        <td>
                            <button ng-click="editUser(key)" class="btn btn-sm btn-primary"
                                    data-toggle="modal" data-target="#editMember">EDIT
                            </button>
                            <button ng-click="delUser(key,$event)"
                                    class="btn btn-sm btn-danger">DEL
                            </button>
                        </td>
                    </tr>
                </table>


                <div class="pagination pagination-centered" ng-show="myData.length">
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
                                    ng-disabled="curPage >= myData.length/pageSize - 1"
                                    ng-click="curPage = curPage+1">NEXT &gt;</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
</div>

<!--end show member-->


<script>
    var app = angular.module('myApp', ['ngMessages']);
    // var app = angular.module('app', ['ngMessages']);
    app.controller('UserController', ['$scope', '$http', 'orderByFilter', function ($scope, $http, orderBy) {

//pagination
        $scope.showData = function () {
            $http.get('info').then(function (response) {
                $scope.myData = response.data.records;
                $scope.curPage = 0;
                $scope.pageSize = 4;
                $scope.numberOfPages = function () {
                    return Math.ceil($scope.myData.length / $scope.pageSize);
                };
            })
        }
//search
        $scope.searchKeyword = {}
        $scope.SearchTerm = '$';

        //sort
        $scope.propertyName = "age";
        $scope.reverse = false;
        $scope.myData = orderBy($scope.myData, $scope.propertyName, $scope.reverse);

        $scope.sortBy = function (propertyName) {
            $scope.reverse = (propertyName !== null && $scope.propertyName === propertyName)
                    ? !$scope.reverse : false;
            $scope.propertyName = propertyName;
            $scope.myData = orderBy($scope.myData, $scope.propertyName, $scope.reverse);
        };

//Upload Image
        $scope.uploadImage = function (a) {
            if (a.files && a.files[0] && a.files[0].name.match(/\.(jpg|jpeg|png|gif)$/) ) {
                if(a.files[0].size>10485760) {
                    alert('File này lớn hơn 10MB!');
                    $('[type="file"]'.reset());
                    return false;
                } else {
                    var formData = new FormData();
                    formData.append("file", a.files[0]);
                    response = $http.post('/upload/image', formData, {
                        headers: {'Content-Type': undefined},
                        transformRequest: angular.identity
                    }).then(function (data) {
                        if (data.data.success) {
                            $scope.photo = data.data.img;
                        }
                    });
                }
            } else {
                alert('Cái này không phải Image!');
                $('[type="file"]'.reset());
                return false;
            }
        }
//Create User

        $scope.createUser = function () {
            // $scope.id ='';
            $scope.name = '';
            $scope.address = '';
            $scope.age = '';
            $scope.photo = '';
        }

        //storeUser
        $scope.storeUser = function () {
            $http.post("/admin", {
                name: $scope.name,
                address: $scope.address,
                age: $scope.age,
                photo: $scope.photo,
            }, {headers: {'Content-Type': 'application/json'}})
                    .then(function (response) {
                        $scope.myData.push({
                            'name': $scope.name,
                            'address': $scope.address,
                            'age': $scope.age,
                            'photo': $scope.photo
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
    }]);
 //End Delete

    angular.module('myApp').filter('pagination', function () {
        return function (input, start) {
            start = +start;
            return input.slice(start);
        };
    });
//validation type number
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( key );
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
</body>
</html>