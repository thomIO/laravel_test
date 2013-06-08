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

			<h2>: {{searchComposer}}</h2>

			<div id="search-box"
				<label>Search:</label>
				<input type="search" ng-model="searchComposer" placeholder="Search Composer">
			</div>

		</div>
	</header>

	<div id="content" ng-controller="composerCtrl">

		<h3>Composer: {{composerName}} - boo yah!</h3>

		<ul>
			<li>
				<span>f_name</span>
				<span>l_name</span>
				<span>location</span>
				<span>bio</span>
				<span>image</span>
			</li>
			
<!-- 			<li>
				<span>f_name</span>
				<span>l_name</span>
				<span>location</span>
				<span>bio</span>
				<span>image</span>
			</li>
			<li>
				<span>f_name</span>
				<span>l_name</span>
				<span>location</span>
				<span>bio</span>
				<span>image</span>
			</li>
			<li>
				<span>f_name</span>
				<span>l_name</span>
				<span>location</span>
				<span>bio</span>
				<span>image</span>
			</li> -->
		</ul>


	</div> <!-- . content -->


	<script>

	var composerCtrl = function ($scope) {
		$scope.composerName = "Russell";
	};



	</script>


</body>

</html>