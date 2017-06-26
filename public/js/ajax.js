function load_TotalEngineer(){
	$.ajax({
		url : "/dashboard/totalEngineer",
		type: "GET",
		success: function(html){
			$('#changetable').html(html);
		}
	});
}
function load_TotalTeam(){
	$.ajax({
		url : "/dashboard/totalTeam",
		type: "GET",
		success: function(html){
			$('#changetable').html(html);
		}
	});
}
function load_TotalProject(){
	$.ajax({
		url : "/dashboard/totalProject",
		type: "GET",
		success: function(html){
			$('#changetable').html(html);
		}
	});
}
function load_TableTopEngineer(){
	$.ajax({
		url : "/dashboard/tableTopEngineer",
		type: "GET",
		success: function(html){
			$('#changeTopEngineer').html(html);

		}
	});
}
// function load_TableTopEngineer2(){
// 	$.ajax({
// 		url : "/dashboard/tableTopEngineer",
// 		type: "GET",
// 		success: function(html){
// 			$('#changeTopEngineer').html(html);
// 			$("#user2").css("background-color", "#d9d9d9");
// 		}
// 	});
// }
// function load_TableTopEngineer3(){
// 	$.ajax({
// 		url : "/dashboard/tableTopEngineer",
// 		type: "GET",
// 		success: function(html){
// 			$('#changeTopEngineer').html(html);
// 			$("#user3").css("background-color", "#d9d9d9");
// 		}
// 	});
// }
// function load_TableTopEngineer4(){
// 	$.ajax({
// 		url : "/dashboard/tableTopEngineer",
// 		type: "GET",
// 		success: function(html){
// 			$('#changeTopEngineer').html(html);
// 			$("#user4").css("background-color", "#d9d9d9");
// 		}
// 	});
// }
// function load_TableTopEngineer5(){
// 	$.ajax({
// 		url : "/dashboard/tableTopEngineer",
// 		type: "GET",
// 		success: function(html){
// 			$('#changeTopEngineer').html(html);
// 			$("#user5").css("background-color", "#d9d9d9");
// 		}
// 	});
// }