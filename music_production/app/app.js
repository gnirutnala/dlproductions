//Define an angular module for our app
var app = angular.module('myApp', []);
app.controller('tasksController', function($scope, $http) {

  getTask(); // Load all available sessions for current month
  function getTask(){
  $http.post("ajax/getTask.php").success(function(data){
        $scope.tasks = data;
       });
  };

// TODO: I need to allow user to click multiple boxes before submitting

// this function allows a user to schedule studion time
$scope.toggleStatus = function(item, status, task) {
  // check what's in the checkbox and manipulate data accordingly
  if(status == '2') {
    status = '0';
  }
  else {
      status = '2';
      // given that user checked box, we prompt them to see if they actually want to schedule
      if (confirm("Click 'OK' to schedule or 'Cancel' to uncheck the box.") == true) {
        // line below adds session data to a form
        document.getElementById("demo").innerHTML = task;
        // line below throws a popUp with a form at the user that will be emailed to DL
        $("#myModal3").modal({backdrop: "static"});
      }
      else {
        // user implied that they didn't want to schedule and box is unchecked
        status = '0';
      }
    }
  $http.post("ajax/updateTask.php?taskID="+item+"&status="+status).success(function(data){
      getTask();
  });
}
// addTask button is commented out. I can probably comment this function out.
// $scope.addTask = function (task) {
//   $http.post("ajax/addTask.php?task="+task).success(function(data){
//       getTask();
//       $scope.taskInput = "";
//     });
// };

// deleteTask button is commented out.
// $scope.deleteTask = function (task) {
//   if(confirm("Are you sure to delete this line?")){
//   $http.post("ajax/deleteTask.php?taskID="+task).success(function(data){
//       getTask();
//     });
//   }
// };
});
