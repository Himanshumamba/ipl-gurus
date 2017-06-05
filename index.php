


<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
<title>Hangout </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hangout  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />



<!-- css -->
<link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="style.css" type="text/css" media="all" />

<!--// css -->
<script src="js/query-1.11.2.min.js"></script>

<script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>

<script src="angular-1.3.16/angular.min.js"></script>
<script src="angular-1.3.16/angular-route.js"></script>
<script type="text/javascript" src="Chart.js"></script>
<script type="text/javascript" src="angular-chart.js"></script>
<script type="text/javascript" src="tc-angular-chartjs.min.js"></script>

<script src="script.js"></script>




	
</head>

<body >
<div class="container">
				<h1> Dashbord</h1>

			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
								<li>
									<a href="#" class="gn-icon gn-icon-download">About</a>
								</li>
								<li><a href="#" class="gn-icon gn-icon-cog">Service</a></li>
								<li><a href="#" class="gn-icon gn-icon-help">Works</a></li>
								<li>
									<a href="#" class="gn-icon gn-icon-archive">Contact</a>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				
			</ul>
	</div>


<div  ng-controller ="testCtrl">
	<h3 class="winingper">Hover to Look the  winning percentage</h3>

<div class ="canvas-container">

<canvas  chart-data="pieDiskData.data" id ="pie3" chart-labels ="pieDiskData.labels" chart-colours="pieDiskData.colours" class="chart chart-pie chart-xs ng-isolate-scope"  chart-options="options" legend="true" width="250" height="220">
</canvas>

</div>

<div class ="canvas-container-line">
	<h3 class="win-score">winning score</h3>


<canvas  chart-data="pieDiskData.data" id ="line3"  chart-labels ="pieDiskData.labels" chart-colours="pieDiskData.colours" class="chart chart-line chart-xs ng-isolate-scope"  chart-options="options" legend="true" width="550" height="220">
	

</canvas>
</div>
</div>


<div ng-controller="customersCtrl"> 

	<h3 class="inner-tittle two">IpL Matches Fixture </h3>
	
	

			<div class="graph">
			<div class="tables">
														
		<table class="table table-bordered"> <thead> <tr> <th>#</th> <th>Date</th> <th>city </th> <th> vs  </th> <th> winner  </th> <th>player of match  </th>  <th> venue  </th> 
		</tr> </thead>
		<tbody> 
		<tr ng-repeat="x in myData |limitTo:quantity"> 
		<th scope="row"> {{x.season }}</th>
		<td>{{x.date}}</td>
		<td>{{x.city}}</td>
		<td>{{x.team1 +  ' VS '  +x.team2 }}</td>
		<td>{{x.winner}}</td>
		<td>{{x.player_of_match}}</td>
		<td>{{x.venue}}</td>
		
		</tr>
		</tbody> 
		</table> 
		</div>
	
</div>			<div class="graph">
	<h3 class="inner-tittle twos">IpL Live Match Commentry</h3>


						<div class="tables">
											
		<table class="table table-bordered"> <thead> <tr> <th>#</th> <th>Batting</th> <th>Bowling </th> <th> Overs </th> <th> Ball  </th> <th>player dismissed  </th>  <th> Bowler </th> 
		</tr> </thead>
		<tbody> 
				<tr ng-repeat="y in secondData "> 

	<th scope="row"> {{y.inning}}</th>

		<td> {{y.batting_team}}</td>
		<td>{{y.bowling_team}}</td>
		<td>{{y.over}}</td>
		<td>{{y.ball}}</td>
		<td>{{y.batsman}}</td>
		<td>{{y.bowler}}</td>
		
		</tr>
		</tbody> 
		</table> 
		</div>
				</div>

</div>
<!--
<ul><li ng-repeat =" y in myData"> 

{{y.team1 + ' ,' +y.team2 }}
</li> 
</ul>
 
<ul>
  <li ng-repeat="x in myData">
    {{ x.season + ', ' + x.city + ' ' +y.team1 + ' '  +y.team2   }}
  </li>
</ul>
  -->

<script src="js/query-1.11.2.min.js"></script>

</body>
