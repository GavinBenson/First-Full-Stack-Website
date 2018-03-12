$(document).ready(function() {
	$("#hiddenPic").hide();
	$("#databaseCode").hide();
	$("#tableCode").hide();
	$("#databaseCodeH3").click(function(){
		$("#databaseCode").fadeToggle(1000);
	});
	$("#tableCodeH3").click(function(){
		$("#tableCode").fadeToggle(1000);
	});
	$("#topH1").click(function() {
		
		$("h2").slideToggle(2000);
		
	});
	$("#hiddenH3").click(function(){
		$("#hiddenPic").slideToggle(1500);	
	});
});
