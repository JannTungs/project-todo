<!doctype html>
<html lang='en' ng-app="red">
<head>
	<meta charset="UTF-8">
	<title>todo</title>
	<style>
	.done{text-decoration: line-through;}
	</style>
</head>
<body>
	<div ng-controller="todoController">
		<form name="frm" ng-submit="addtodo()">
			<input type="text" name="newtodo" ng-model="newtodo" required />
			<button>GO</button>
		</form>
		<button ng-click="deletetodo()">Delete</button>
		<ul>
			<li ng-repeat="todo in todos">
				<input type="checkbox" ng-model="todo.done" />
				<span ng-class="{'done':todo.done}">{{todo.title}}</span>
			</li>
		</ul>
</div>
<script src="angular.min.js"></script>
<script>

angular.module('red',[]).
controller('todoController',['$scope',function($scope){
	$scope.todos = [
	{'title': 'Build a todo app', 'done':false}
	];
	
	$scope.addtodo = function(){
		$scope.todos.push({'title':$scope.newtodo,'done':false})
		$scope.newtodo = ''
	}
	$scope.deletetodo = function(){
	$scope.todos = $scope.todos.filter(function(item){
		return !item.done
	})
	}
}])

</script>
</body>
</html>

<!--  filter Select a subset of items from an array.
  An AngularJS module defines an application.

  The module is a container for the different parts of an application.

  The module is a container for the application controllers.

  Controllers always belong to a module.
  
  AngularJS applications are controlled by controllers.

The ng-controller directive defines the application controller.

A controller is a JavaScript Object, created by a standard JavaScript object constructor.


If we consider an AngularJS application to consist of:

View, which is the HTML.
Model, which is the data available for the current view.
Controller, which is the JavaScript function that makes/changes/removes/controls the data.
Then the scope is the Model.

The scope is a JavaScript object with properties and methods, which are available for both the view and the controller.