<!DOCTYPE html>
<html ng-app>
<head>
<title>Angular JS Test - Composer List</title>

<!-- refresh browser for developing -->
<!-- <meta http-equiv="refresh" content="3" /> -->

<link rel="stylesheet" href="vendor/reset.css">
<link rel="stylesheet" href="styles/main.css">

<script src="vendor/angular.js"></script>
<script src="scripts/script.js"></script>

</head>

<body>

	<header>
		<div class="wrap">

			<h1>Composers</h1>

			<h2>: {{searchComposer || "search them"}}</h2>

			<div id="search-box"
				<label>Search:</label>
				<input type="search" ng-model="searchComposer" placeholder="Search Composer">
			</div>

		</div>
	</header>

	<div id="content" ng-controller="composerCtrl">

		<h3>Composer count: {{composers.length}} - {{searchComposer}}</h3>

		<div class="composer-form">
			<label>First Name:</label><input ng-model="new_f_name">
			<label>Last Name:</label><input ng-model="new_l_name">
			<label>Location:</label><input ng-model="new_location">
			<br>
			<label>Bio:</label><input ng-model="new_bio">
			<label>Image Path:</label><input ng-model="new_image">
			<button ng-click="addComposer()">Add Composer</button>
		</div>

		<ul>
			<li class="list-header">
				<span># - <button ng-click="predicate = 'f_name'; reverse=!reverse">First Name</button></span>
				<span><button ng-click="predicate = '-l_name'; reverse=!reverse">Last Name</button></span>
				<span><button ng-click="predicate = '-location'; reverse=!reverse">Location</button></span>
				<span>Bio</span>
				<span>Image - <label>hide : </label><input type="checkbox" ng-model="hideImage"></span>
			</li>

			<li ng-repeat="composer in composers | orderBy:predicate:reverse | filter:searchComposer" 
				ng-mouseenter="trashShow = true" 
				ng-mouseleave="trashShow = false">
				<span>{{$index + 1}} - {{composer.f_name || 'no-name'}}</span>
				<span>{{composer.l_name || 'no-name'}}</span>
				<span>{{composer.location || 'no-location'}}</span>
				<span>{{composer.bio || 'no-bio'}}</span>
				<span>
					<img ng-hide="hideImage" ng-src="img/{{composer.image || 'thom.jpg'}}">
					<button class="trash-btn" ng-show="trashShow" ng-click="removeComposer(composer)">delete</button>
				</span>
			</li>
		</ul>

	</div> <!-- / #content -->

</body>

</html>