var composerCtrl = function ($scope) {

/* composer seeds */
		$scope.composers = [
			{f_name: "Russ", l_name: "Boad", location: "Binfield", bio: "A gamer and google fan.", image: "russ.jpg"},
			{f_name: "Thom", l_name: "Earls", location: "Maidenhead", bio: "A designer and machead.", image: "thom.jpg"},
			{f_name: "Tarek", l_name: "Karaman", location: "Marlow", bio: "A musician and veggie.", image: "tarek.jpg"},
			{f_name: "Craig", l_name: "Isaia", location: "Ascot", bio: "Plays the bongos", image: "craig.jpg"},
			{f_name: "Oli", l_name: "Nako", location: "Addlestone", bio: "Likes rock climbing", image: "oli.jpg"},]

			// console.log($scope.composers);

/* default sort by first name */
		$scope.predicate = 'f_name';

		

/* add composer */
		$scope.addComposer = function () {
			$scope.composers.push({
				f_name: 	$scope.new_f_name,
				l_name: 	$scope.new_l_name,
				location: 	$scope.new_location,
				bio: 		$scope.new_bio,
				image: 		$scope.new_image
			});
			$scope.new_f_name = "";
			$scope.new_l_name = "";
			$scope.new_location = "";
			$scope.new_bio = "";
			$scope.new_image = "";

			console.log("added a composer");
		};

/* remove coomposer */
		$scope.removeComposer = function (composer) {
			var id = $scope.composers.indexOf(composer);
			$scope.composers.splice(id, 1);

			console.log("removed selected composer");
		};

/* search */
		$scope.$watch('searchComposer', function (){
			console.log($scope.searchComposer);
		});
};