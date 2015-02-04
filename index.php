<html>
<head>
<title>AngularJS</title>
</head>
<script type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
<body>

<div ng-app="">

<p>Name : <input type="text" ng-model="username"/></p>
<br>
<!--  
<p>Name : <input type="text" ng-init="username='Avnish'"/></p> -->
<span ng-bind="username"></span>



</div>

</body>


</html>
