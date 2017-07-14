		$(document).ready(function(){
			birthday = "{{ $birthday }}";console.log(birthday);
			newEngi = "{{ $newEngineer }}";console.log(newEngi);
			if((birthday!="[]")||(newEngi!="[]")){
				$.gritter.add({

					title:	'Notification!',
					text:	'You have a new notification.',
					image: 	'img/demo/envelope.png',
					sticky: true,		
				});
				$(".gritter-item").mousemove(function() {
					$(".gritter-title").css("margin-left","-50px");	
					$(".gritter-image").css('display', 'none');
					$(".gritter-item p").css('display', 'none');
					String1 = "<a href='#myModal' id='birthday' data-toggle='modal'><i class='icon-gift'></i>Today is the birthday of Engineers!</a>";
					String2 = "<a href='#myModal' id='newEngi' data-toggle='modal'><i class='icon-user'></i>The company has some new Employees!</a>";
					// if((birthday!=null)||(newEngi!=null)){
						$(".gritter-title").html("");
						if (birthday!="[]") {
							$(".gritter-title").append(String1+"<br/>");
							$("#birthday").click(function(){
								$(".modal-header h3").html("Happy birthday!");
								$(".modal-body h4").html("@foreach ($birthday as $engineer)"
													+"{{$engineer->engineerName}}"
													+"<hr/>"
													+"@endforeach");
							});
						}
						if (newEngi!="[]") {
							$(".gritter-title").append(String2+"<br/>");
							$("#newEngi").click(function(){
								$(".modal-header h3").html("New Engineers!");
								$(".modal-body h4").html("@foreach ($newEngineer as $engineer)"
													+"{{$engineer->engineerName}}"
													+"<hr/>"
													+"@endforeach");
							});
						}
					// }
				});
			}
			
			

		});

	// === jQuery Peity === //
	// $.fn.peity.defaults.line = {
	// 	strokeWidth: 1,
	// 	delimeter: ",",
	// 	height: 24,
	// 	max: null,
	// 	min: 0,
	// 	width: 50
	// };
	// $.fn.peity.defaults.bar = {
	// 	delimeter: ",",
	// 	height: 24,
	// 	max: null,
	// 	min: 0,
	// 	width: 50
	// };
	// $(".peity_line_good span").peity("line", {
	// 	colour: "#B1FFA9",
	// 	strokeColour: "#459D1C"
	// });
	// $(".peity_line_bad span").peity("line", {
	// 	colour: "#FFC4C7",
	// 	strokeColour: "#BA1E20"
	// });	
	// $(".peity_line_neutral span").peity("line", {
	// 	colour: "#CCCCCC",
	// 	strokeColour: "#757575"
	// });
	// $(".peity_bar_good span").peity("bar", {
	// 	colour: "#459D1C"
	// });
	// $(".peity_bar_bad span").peity("bar", {
	// 	colour: "#BA1E20"
	// });	
	// $(".peity_bar_neutral span").peity("bar", {
	// 	colour: "#757575"
	// });
	// ===========================================================================
	// === jQeury Gritter, a growl-like notifications === //
	// $('#gritter-notify .normal').click(function(){
	// 	$.gritter.add({
	// 		title:	'Normal notification',
	// 		text:	'This is a normal notification',
	// 		sticky: false
	// 	});		
	// });
	
	// $('#gritter-notify .sticky').click(function(){
	// 	$.gritter.add({
	// 		title:	'Sticky notification',
	// 		text:	'This is a sticky notification',
	// 		sticky: true
	// 	});		
	// });
	
	// $('#gritter-notify .image').click(function(){
	// 	var imgsrc = $(this).attr('data-image');
	// 	$.gritter.add({
	// 		title:	'Important Unread messages',
	// 		text:	'You have 12 unread messages.',
	// 		image: imgsrc,
	// 		sticky: false
	// 	});		
	// });