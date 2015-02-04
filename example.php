<html>
<head>
<title>Registration From</title>
<script
	src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</head>
<body>
	<div id="container">
		<form ng-app="" ng-controller="validateCtrl" name="myForm" novalidate>
			<table>
				<tr>
					<td>User Name :-</td>
					<td><input type="text" ng-model="username" name="username" required/></td>
					<td><span style="color:red" ng-show="myForm.username.$dirty && myForm.username.$invalid">
  					<span ng-show="myForm.username.$error.required">Username is required.</span></td>
				</tr>
				
				<tr>
					<td>User Email :-</td>
					<td><input type="text" ng-model="useremail" name="useremail" required/></td>
					<td><span style="color:red" ng-show="myForm.useremail.$dirty && myForm.useremail.$invalid">
  					<span ng-show="myForm.useremail.$error.required">User Email is required.</span></td>
				</tr>
				
				<tr>
					<td>User Mobile :-</td>
					<td><input type="text" ng-model="usermobile" name="usermobile" required/></td>
					<td><span style="color:red" ng-show="myForm.usermobile.$dirty && myForm.usermobile.$invalid">
  					<span ng-show="myForm.usermobile.$error.required">User mobile is required.</span></td>
				</tr>
				
				<tr>
					<td>User Password :-</td>
					<td><input type="text" ng-model="userpassword" name="userpassword" required/></td>
					<td><span style="color:red" ng-show="myForm.userpassword.$dirty && myForm.userpassword.$invalid">
  					<span ng-show="myForm.userpassword.$error.required">User password is required.</span></td>
				</tr>
				<tr>
				<td>
				<input type="submit" ng-disabled="myForm.username.$dirty && myForm.username.$invalid ||  
myForm.useremail.$dirty && myForm.useremail.$invalid">
				</td>
				</tr>
		</table>
		
		</form>
	</div>
</body>
</html>

<script>
function validateCtrl($scope) {
    $scope.username = '';
    $scope.useremail = '';
}
</script>
