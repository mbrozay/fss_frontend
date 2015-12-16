var app = angular.module('formSubmit', []);

    app.controller('FormSubmitController',[ '$scope', '$http', function($scope, $http) {

        $scope.list = [];
            $scope.headerText = 'AngularJS Post Form Spring MVC example: Submit below form';
            $scope.submit = function() {

                var formData = {
                        "firstName" : $scope.formData.firstName,
                        "lastName" : $scope.formData.lastName
                };
                var jsondata = JSON.stringify(formData);

                var response = $http.post('http://localhost:8080/fss-rest-json/signup', jsondata);
                response.success(function(data, status, headers, config) {
                    $scope.message = data;
                });
                response.error(function(data, status, headers, config) {
                    alert( "Exception details: " + JSON.stringify({data: data}));
                });

                //Empty list data after process
                $scope.list = [];

            };
        }]);