<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <title>SIGN UP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <link rel="stylesheet" href="loginstyle.css" />
</head>

<body ng-app="Login" ng-controller="LoginController as angCtrl">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
        <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="//code.angularjs.org/1.6.0/angular.min.js"></script>
        <script src="//code.angularjs.org/1.6.0/angular-route.min.js"></script>
    <div class="login-page">

        <form class="login-form" name="loginform" action="register.php" ng-submit="angCtrl.loginForm()" class="form-horizontal" method="POST" novalidate>
            <div class="form" ng-class="{ 'has-error': (loginform.username.$dirty && loginform.username.$error.required && !loginform.username.$pristine) || (loginform.password.$dirty && loginform.password.$error.required)}">
                <input type="text" placeholder="username" name="username" class="form-control" value="<?php echo $username; ?> "ng-model="angCtrl.inputData.username" required
                    autofocus>
                <p ng-show="loginform.username.$dirty && loginform.username.$error.required && !loginform.username.$pristine" class="help-block">Username is required</p>
                <input type="password" placeholder="password" name="password_1" class="form-control" required ng-model="angCtrl.inputData.password_1"
                    required>
                <p ng-show="loginform.password_1.$dirty && loginform.password_1.$error.required && !loginform.password_1.$pristine" class="help-block">Password is required</p>
                <input type="password" placeholder="confirm password" name="password_2" class="form-control" required ng-model="angCtrl.inputData.password_2"
                    required>
                <p ng-show="loginform.password_2.$dirty && loginform.password_2.$error.required && !loginform.password_2.$pristine" class="help-block">Confirm Password</p>
                <div class="form-actions">
                    <button type="submit" name="reg_user" ng-disabled="loginform.$invalid || vm.dataLoading" class="btn">Register</button>
                </div>

                
                     <?php include('errors.php'); ?>
                    
                <!-- <div class="alert alert-danger" ng-show="errorMsg">
                    <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;{{errorMsg}}
                </div> -->
                &nbsp;&nbsp;	
		<p>			Already a member? <a href="loginpage.html">Sign in</a></p>
            </div>

        </form>
    </div>




    <script>
        angular.module('Login', [])
            .controller('LoginController', ['$scope', '$http', function ($scope, $http) {
                this.loginForm = function () {

                    var user_data = 'username=' + this.inputData.username + '&password_1=' + this.inputData.password_1 + '&password_2=' + this.inputData.password_2;

                    $http({
                        // method: 'POST',
                        // url: 'server.php',
                        // data: user_data,
                        // headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
                    })
                        .success(function (data) {
                            console.log(data);
                            if (data.trim() === 'correct') {
                                window.location.href = 'loginpage.html';
                            } else {
                                $scope.errorMsg ="";
                            }
                        })
                }

            }]);
    </script>

</body>

</html>