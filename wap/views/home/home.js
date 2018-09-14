
angular.module('ionicz.controllers')

.controller('HomeCtrl', function($scope, $log, $timeout, Tools, $ionicSlideBoxDelegate) {
    $log.debug("HomeCtrl...");

    $scope.slideList = slideList;

    $scope.$on('$ionicView.afterEnter', function() {
        $log.debug("HomeCtrl $ionicView.afterEnter");
    });
});

	window.onload = function(){
		// clearInterval(timer);
	    zidong();
	}
	// function aa(){  
	// if(document && document.getElementsByTagName && document.getElementById && document.body){  
	//         clearInterval(timer);
	//         zidong();
	//     }
	// }
	// var timer = setInterval(aa,10);
    function zidong() {   
		htmlobj = $.ajax({ url: "/user/tanchu", async: false });
		var tanchu = htmlobj.responseText;
		if (tanchu == 1) {
		    tanchu = document.getElementById("tanchu");
		    tanchuinfo = document.getElementById("tanchuinfo");
		    tanchu.style.visibility = "visible";
		    tanchuinfo.style.visibility = "visible";
		} else {
		    tanchu = document.getElementById("tanchu");
		    tanchuinfo = document.getElementById("tanchuinfo");
		    tanchu.style.visibility = "hidden";
		    tanchuinfo.style.visibility = "hidden";
		}
    }

function ttgb() {
	htmlobj = $.ajax({ url: "/user/tanchugb", async: false });
	tanchu = document.getElementById("tanchu");
	tanchuinfo = document.getElementById("tanchuinfo");
	tanchu.style.visibility = "hidden";
	tanchuinfo.style.visibility = "hidden";
}

function quxiao() {
    beijing = document.getElementById("beijing");
    gginfo = document.getElementById("gginfo");
    beijing.style.display = "none";
    gginfo.style.display = "none";
}

function ggtc() {
    beijing = document.getElementById("beijing");
    gginfo = document.getElementById("gginfo");
    beijing.style.display = "block";
    gginfo.style.display = "block";
}