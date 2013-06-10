<<<<<<< HEAD
<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let's turn on the lights.
| This bootstrap the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight these users.
|
*/

$app = require_once __DIR__.'/../bootstrap/start.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can simply call the run method,
| which will execute the request and send the response back to
| the client's browser allowing them to enjoy the creative
| and wonderful applications we have created for them.
|
*/

$app->run();

/*
|--------------------------------------------------------------------------
| Shutdown The Application
|--------------------------------------------------------------------------
|
| Once the app has finished running, we will fire off the shutdown events
| so that any final work may be done by the application before we shut
| down the process. This is the last thing to happen to the request.
|
*/

$app->shutdown();
=======
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

			<h2>: {{search_composer || "search them"}}</h2>

			<div id="search-box"
				<label>Search:</label>
				<input type="search" ng-model="search_composer" placeholder="Search Composer">
			</div>

		</div>
	</header>

	<div id="content" ng-controller="composerCtrl">

		<div class="list-info">
			<h3>Composer count: {{composers.length}} --</h3>
			<select ng-model="selected_composer" 
					ng-options="composer.f_name + ' ' + composer.l_name for composer in composers | filter:search_composer">
				<option value="">Select Composer:</option>
			</select>
			<h3>-- {{selected_composer.bio | lowercase}}</h3>
		</div>

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

			<li ng-repeat="composer in composers | orderBy:predicate:reverse | filter:selected_composer | filter:search_composer" 
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
>>>>>>> 9db5d56e4386b990b5296cda47f6ca572f01c8ef
