<!DOCTYPE html>
<html ng-app>
<head>
<title>Angular JS Test - Composer List</title>

<!-- refresh browser for developing -->
<!-- <meta http-equiv="refresh" content="3" /> -->

<link rel="stylesheet" href="vendor/reset.css">
<link rel="stylesheet" href="css/main.css">

<script src="vendor/angular.js"></script>
<script src="js/script.js"></script>

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

		<div class="list-info">

			<h3>Composer count: {{composers.length}} -- </h3>

			<select ng-model="selected_composer" 
                    ng-options="composer.f_name + ' ' + composer.l_name for composer in composers | filter:searchComposer">
                <option value="">Select Composer:</option>
            </select>
            <h3>- {{selected_composer.bio | lowercase}} -</h3>

			<div class="composer-form">
				<label>First Name:</label><input ng-model="new_f_name">
				<label>Last Name:</label><input ng-model="new_l_name">
				<label>Location:</label><input ng-model="new_location">
				<br>
				<label>Bio:</label><input ng-model="new_bio">
				<label>Image Path:</label><input ng-model="new_image">
				<button ng-click="addComposer()">Add Composer</button>
			</div>

		</div>

		<ul>
			<li class="list-header">
				<span># - <button ng-click="predicate = 'f_name'; reverse=!reverse">First Name</button></span>
				<span><button ng-click="predicate = '-l_name'; reverse=!reverse">Last Name</button></span>
				<span><button ng-click="predicate = '-location'; reverse=!reverse">Location</button></span>
				<span>Bio</span>
				<span>Image - <label>hide : </label><input type="checkbox" ng-model="hideImage"></span>
			</li>

			<li ng-repeat="composer in composers | orderBy:predicate:reverse | filter:selected_composer | filter:searchComposer" 
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