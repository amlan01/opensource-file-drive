/*angular module and controller goes here*/

(function(){

	//creating the angular app module
	var app = angular.module('validationApp',[]);


	//creating the controller
	app.controller('mainController',function($scope,$http){

		$scope.tab = 1;

		$scope.setTab = function(newTab){
	      $scope.tab = newTab;
	    };

	    $scope.isSet = function(tabNum){
	      return $scope.tab === tabNum;
	    };

		// created a blank object to hold our form information
      	// $scope will allow this to pass between controller and view
      	$scope.formData = {};
      	$scope.formData1 = {};

      	//login handling here
      	//we handle form data processing here
      	this.processForm = function(){

      	//console.log($scope.formData.user);

        var encodedString  = 'user=' + encodeURIComponent($scope.formData.user) + '&pass=' + encodeURIComponent($scope.formData.pass);

      		$http({
      			method:'POST',

      			url : 'login.php',

      			data : encodedString,

      			headers : {'Content-Type':'application/x-www-form-urlencoded'}

      		}).success(function(data){


                if (data.trim() === "1") {
      				window.location.href = 'index.php';
      			}
      			
      			else if (data.trim() === "2") {
                              
                    $scope.errormsg = "Invalid, try again !";
      			}
      			else;

      		});
      	};


      	//we handle signup here
      	//we need to handle form data processing here
      	this.signupForm = function(){

      	//console.log($scope.formData.user);

        var encodedString  = 'user=' + encodeURIComponent($scope.formData1.user) + '&pass=' + encodeURIComponent($scope.formData1.pass);

      		$http({
      			method:'POST',

      			url : 'signup.php',

      			data : encodedString,

      			headers : {'Content-Type':'application/x-www-form-urlencoded'}

      		}).success(function(data){


                if (data.trim() === "1") {
                	$scope.loginmsg = "login now";
				          $scope.tab = 1;
                  $scope.errormsg = "";
      				//window.location.href = 'index.html';
      			}
      			
      			else if (data.trim() === "2") {
                              
                    $scope.errormsg = "Invalid, try again !";
      			}
      			else;

      		});
      	};

	});


})();