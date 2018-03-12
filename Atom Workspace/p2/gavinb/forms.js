$(document).ready(function() {
	$("#hiddenText").hide();
	$("#ul1").hide();
	$("#ul2").hide();
	$("#ul3").hide();
	$("#ul4").hide();
	$("#ul5").hide();
	$("#ul6").hide();
	$("#ul7").hide();
	$("#ul8").hide();
	$("#ul9").hide();
	$("#ul10").hide();
	$("#ul11").hide();
	$("#ul12").hide();

	$("#hTitle").click(function() {
		$("#hiddenText").fadeToggle(1000);
	});
	
	$("#f1").click(function() {
		$("#ul1").slideToggle(1000);
		$("#ul2").slideToggle(1500);
		$("#ul3").slideToggle(1900);
	});
	
	$("#f2").click(function() {
		$("#ul4").slideToggle(1000);
		$("#ul5").slideToggle(1500);
		$("#ul6").slideToggle(1900);
	});
	
	$("#f3").click(function() {
		$("#ul7").slideToggle(1000);
		$("#ul8").slideToggle(1500);
		$("#ul9").slideToggle(1900);
	});
	
	$("#f4").click(function() {
		$("#ul10").slideToggle(1000);
		$("#ul11").slideToggle(1500);
		$("#ul12").slideToggle(1900);
	});
	
});
