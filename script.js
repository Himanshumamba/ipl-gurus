var app = angular.module('myApp', ["chart.js"]);
app.controller('customersCtrl', function($scope, $http) {
  $http.get("codebeautify.json").then(function (response) {
      $scope.myData = response.data;
	  $scope.quantity = 5;
	  

	  $http.get("deliveries.json").success(function(response1){
		  
		  $scope.secondData = response1;
		  
	  });
	  
	  
  });
});

app
  .controller('testCtrl', function ($scope ,$location,$window) {
	  
	  $scope.options = {
		  tooltipEvents:[],
		  showTooltips:true,
		  tooltipCaretSize:0,
		  onAnimationComplete:function(){
			  this.show.Tooltip(this.segments,true)
			  
		  },
		  
	  };
	  
	  
      var DiskData = {
		  
		  "data":[80,12,33,9],
		  "labels":["KolkataKnightRiders","RoyalChallengersBangalore","Chennai Super Kings","Delhi Daredevils"],
		  "colours":['#9AB6F0','#C2D3F6'],
		  
	  };
	  $scope.pieDiskData= DiskData;
	  
	
	  
  });