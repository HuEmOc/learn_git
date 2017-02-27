<!DOCTYPE html>
<html>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<div ng-app="myApp" ng-controller="MyController">
    <p>Today's welcome message is : </p>
    <h1>@{{myWelcome}}</h1>
<!---->
    <div ng-controller="myCTL">
        <ul>
            <li ng-repeat="x in myData">
                @{{x.name + ',' +x.city}}
            </li>
        </ul>
    </div>
<!---->
    <div ng-controller = "HTML">
       <p>Data: @{{content}}</p>
        <p>statuscode: @{{statuscode}}</p>
        <p>statustext: @{{statustext}}</p>
        <p>header information : @{{ header }}</p>
    </div>

<!--something went wrong-->
    <div ng-controller="Case">
        <p>Content case: @{{content}}</p>
    </div>

<!--$http method-->

    <div ng-controller = "http">
        <h2>@{{myData}}</h2>
    </div>




</div>

<p>$http service request</p>



<!--Expression-->
<div ng-app>
    <p>My first expression: {{ 5 + 5 }}</p>
</div>

<!---->


<!--Angularis_table-->

<div ng-app ="myTable" ng-controller="CTRLTB">
   <table>
       <tr ng-repeat="a in myData">
           <td>{{a.name}}</td>
           <td>{{a.country}}</td>
       </tr>
   </table>
</div>
<!--End Angularis_table-->



<script>

    var app = angular.module("myApp",[]);
    var apptb = angular.module("myTable",[]);
    app.controller('MyController', function ($scope,$http) {
        $http.get("member").then(function (response) {
            $scope.myWelcome = response.data.result;
        });
    });

    app.controller('myCTL',function ($scope,$http) {
         $http.get('info').then(function (response) {
             $scope.myData =response.data.records;
        })
    });

    app.controller('HTML',function ($scope,$http) {
       $http.get('test.html').then(function (response) {
           $scope.content    =    response.data;
           $scope.statuscode = response.status;
           $scope.statustext = response.statusText;
           $scope.header     = response.headers;
           console.log(response);
       });
    });

    app.controller('Case',function ($scope,$http) {
       $http.get("wrongfilename.html").then(function (response) {
           $scope.content = response.data;
       },function (response) {
           $scope.content ="something went wrong";
       });
    });

    app.controller('http',function ($scope,$http) {

    });

<!--AngularisTable-->
    apptb.controller('CTRLTB',function ($scope,$http) {
        $http.get('info').then(function (response) {
            $scope.myData =response.data.records;
        })
    });


</script>


</body>
</html>

<div class="col-md-8 col-md-offset-2" style="margin-top:50px">
    <div class="panel panel-primary">
        <div class="panel-heading">User List</div>
        <div class="panel-body">
            <div class="list-group-item" ng-repeat="(key, info) in dataUser">
                <span class="col-md-3">{{ info.name }}</span>
                <span class="col-md-2">{{ info.birthday }}</span>
                <span class="col-md-3">{{ info.quequan }}</span>
                <span class="col-md-4"><button ng-click="editUser(key)" class="btn btn-sm btn-primary">EDIT</button> <button ng-click="removeUser(info.id)" class="btn btn-sm btn-danger">DEL</button></span>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit-user">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Info User: {{ name }}</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" ng-model="name" placeholder="Vui lòng nhập tên" value="{{infoUser.name}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" ng-model="birthday" placeholder="Vui lòng nhập ngày tháng năm sinh" value="{{infoUser.birthday}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" ng-model="quequan" placeholder="Vui lòng nhập quê quán" value="{{infoUser.quequan}}">
                </div>
                <div class="form-group text-center">
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-sm btn-primary" value="LƯU" ng-click="updateUser(id)">
                <input type="button" class="btn btn-sm btn-default" value="Cancel" data-dismiss="modal">
            </div>
        </div>
    </div>
</div>
<!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Member</h4>
    </div>
    <div class="modal-body">
        <div class="col-md-8 col-xs-offset-2 hide" id="createMember" >
            <div class="panel panel-primary">
                <div class="panel-heading">Add member</div>
                <div class="panel-body">
                    <form method="post" action="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Name</div>
                            <div class="col-md-10">
                                <input type="text" value="{{ isset($arr->name)?$arr->name:"" }}" name="name" class="form-control" required>
                            </div>
                        </div>
                        <!-- end rows -->
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Address</div>
                            <div class="col-md-10">
                                <input type="email" value="{{ isset($arr->address)?$arr->address:"" }}" name="address" class="form-control" required>
                            </div>
                        </div>
                        <!-- end rows -->
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Age</div>
                            <div class="col-md-10">
                                <input type="text" value="{{ isset($arr->age)?$arr->age:"" }}" name="address" class="form-control" required>
                            </div>
                        </div>
                        <!-- end rows -->

                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Photo</div>
                            <div class="col-md-10">
                                <input type="file" name="photo" class="form-control" placeholder="Open file">
                            </div>
                        </div>
                        <!-- end rows -->
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <input type="submit" value="Process" class="btn btn-primary">
                            </div>
                        </div>
                        <!-- end rows -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>


<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Member</h4>
    </div>
    <div class="modal-body">
        <div class="col-md-8 col-xs-offset-2 hide" id="createMember">
            <div class="panel panel-primary">
                <div class="panel-heading">Add member</div>
                <div class="panel-body">
                    <form method="post" action="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Name</div>
                            <div class="col-md-10">
                                <input type="text" value="{{ isset($arr->name)?$arr->name:"" }}" name="name" class="form-control" required>
                            </div>
                        </div>
                        <!-- end rows -->
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Address</div>
                            <div class="col-md-10">
                                <input type="email" value="{{ isset($arr->address)?$arr->address:"" }}" name="address" class="form-control" required>
                            </div>
                        </div>
                        <!-- end rows -->
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Age</div>
                            <div class="col-md-10">
                                <input type="text" value="{{ isset($arr->age)?$arr->age:"" }}" name="address" class="form-control" required>
                            </div>
                        </div>
                        <!-- end rows -->

                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Photo</div>
                            <div class="col-md-10">
                                <input type="file" name="photo" class="form-control" placeholder="Open file">
                            </div>
                        </div>
                        <!-- end rows -->
                        <!-- rows -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <input type="submit" value="Process" class="btn btn-primary">
                            </div>
                        </div>
                        <!-- end rows -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>




<!-- rows -->
<div class="row" style="margin-top:5px;">
    <div class="col-md-2">Photo</div>
    <div class="col-md-10">
        <input type="file" name="photo"
               class="form-control" ng-model="photo" placeholder = "Vui lòng nhập ảnh"  required>
    </div>
</div>
<!-- end rows -->