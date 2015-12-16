// http://stackoverflow.com/questions/16509755/how-to-use-checkbox-to-filter-results-with-angular

var horseApp = angular.module('horseApp', []);


horseApp.controller('MainCtrl', function ($scope, $http, $log){
	
	$scope.horses = '';
	var successCallBack = function(response) {
     	 $scope.horses = response.data;
     	// $log.info(response);
   };
	
	var errorCallBack = function(response) {
		 $scope.error = response.data;
  };
        $http({
        		method:'Get',
        		url:'http://localhost:8080/fss-rest-json/greeting1'})
        		.then(successCallBack, errorCallBack);
       
      });

horseApp.controller('MainCtrl2', function ($scope, $http, $log, $filter){
	
	$scope.horses = '';
	var successCallBack = function(response) {
     	 $scope.horses = response.data;
     	// $log.info(response);
   };
	
	var errorCallBack = function(response) {
		 $scope.error = response.data;
  };
        $http({
        		method:'Get',
        		url:'http://localhost:8080/fss-rest-json/greeting1'})
        		.then(successCallBack, errorCallBack);
       
      });

// Define our filter
horseApp.filter('selectedHorses', function($filter) {
  return function(horses) {
    var i, len;
   
    if (horses){
    // get customers that have been checked
    var checkedHorses = $filter('filter')(horses, {checked: true});
    
    // Add in a check to see if any customers were selected. If none, return 
    // them all without filters
    if(checkedHorses.length == 0) {
      return;
    }
    
    // get all the unique cities that come from these checked customers
    var horseIds = {};
    for(i = 0, len = checkedHorses.length; i < len; ++i) {
      // if this checked customers cities isn't already in the cities object 
      // add it
      if(!horseIds.hasOwnProperty(checkedHorses[i].id)) {
    	  horseIds[checkedHorses[i].id] = true;
      }
    }
    
    // Now that we have the cities that come from the checked customers, we can
    //get all customers from those cities and return them
    var ret = [];
    for(i = 0, len = horses.length; i < len; ++i) {
      // If this customer's city exists in the cities object, add it to the 
      // return array
      if(horseIds[horses[i].id]) {
        ret.push(horses[i]);
      } 
    }
    }
   
    
    // we have our result!
    return ret;
  };
});