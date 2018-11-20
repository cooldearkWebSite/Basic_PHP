<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>This is my test</title>
    <style type="text/css">
        input{
        max-width:450px;
        }
        alert{
        display:none;
        }
        .error{
        display:block;
        color:red;
        }
</style>
</head>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $hostname="localhost";
    $username=$_POST["loginName"];
    $password=$_POST["loginPwd"];
    $database=$_POST["loginDatabase"];
    $port="1000";
    if(empty($username)||empty($password)||empty($database)){
        echo "Connection error";
    }else{
    $myConnection=new mysqli($hostname,$username,$password,$database,$port);
        if($myConnection->connect_error){
            die("Connection is ".$myConnection->connect_error);
        }else{
            echo "LoginSuccess";
        }
    }
    
}else{
echo "<script>console.log('Do nothing');</script>";
}

?>
<body ng-app="myapp" ng-controller="myctrl as main">
<form id="myForm" name="loginForm" method="post" action="<?php htmlspecialchars("PHP_SELF");?>">
    <div>UserName&nbsp;:&nbsp;</div>
    <input class="w3-input w3-border" type="text" id="myFormName" name="loginName" ng-model="main.inputName" required/>
    <div>Password&nbsp;:&nbsp;</div>
    <input ng-pattern="/^[a-z]/" class="w3-input w3-border" type="password" id="myFormPwd" name="loginPwd" ng-model="main.inputPwd" required/>
    <alert ng-class="{'error':loginForm.loginPwd.$error.pattern}">First Character must be LowerCase.</alert>
    <div>Database : </div>
    <input class="w3-input w3-border" ng-pattern="/^[a-z]/" type="text" id="myFormDatabase" name="loginDatabase" ng-model="main.inputDatabase" required/>
    <alert ng-class="{'error':loginForm.loginDatabase.$error.pattern}">First Character must be LowerCase</alert>
    <button ng-disabled="loginForm.$invalid" class="w3-margin-top w3-button w3-ripple w3-teal" type="submit">Login</button>
</form>
    <table class="w3-table w3-borderd" id="showTable" name="myDataTable">
    <tr>
        <th>UserName</th>
        <th>Password</th>
        <th>Database</th>
    </tr>
    <tr>
        <td>xfiddlec_user</td>
        <td>public</td>
        <td>xfiddlec_max</td>
    </tr>
    </table>
<script>
var app=angular.module("myapp",[]);
app.controller("myctrl",function($scope,$interval,$element,$document){
console.log("test");
    });
</script>
</body>
</html>
