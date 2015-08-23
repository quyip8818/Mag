jQuery( document ).ready(function() {

    jQuery(".static-right-content .facebook").hover (
		function() { jQuery(this).stop().animate({right: "0px"}, {duration:300});}, 
		function() {jQuery(this).stop().animate ({right: "-182px"}, {duration:300});},
		500
	);
    jQuery(".static-right-content .insta").hover (
		function() { jQuery(this).stop().animate({right: "0px"}, {duration:300});}, 
		function() {jQuery(this).stop().animate ({right: "-182px"}, {duration:300});},
		500
	);
    jQuery(".static-right-content .twitter").hover (
		function() { jQuery(this).stop().animate({right: "0px"}, {duration:300});}, 
		function() {jQuery(this).stop().animate ({right: "-182px"}, {duration:300});},
		500
	);
    jQuery(".static-right-content .dribble").hover (
		function() { jQuery(this).stop().animate({right: "0px"}, {duration:300});}, 
		function() {jQuery(this).stop().animate ({right: "-182px"}, {duration:300});},
		500
	);
    jQuery(".static-right-content .pinterest").hover (
		function() { jQuery(this).stop().animate({right: "0px"}, {duration:300});}, 
		function() {jQuery(this).stop().animate ({right: "-182px"}, {duration:300});},
		500
	);
    jQuery(".static-right-content .google").hover (
		function() { jQuery(this).stop().animate({right: "0px"}, {duration:300});}, 
		function() {jQuery(this).stop().animate ({right: "-182px"}, {duration:300});},
		3001
	);
});