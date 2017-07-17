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

	