@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		birthday = "{{ $birthday }}";console.log(birthday);
		newEngi = "{{ $newEngineerNoti }}";console.log(newEngi);
		newPro = "{{ $newProjectNoti }}";console.log(newPro);
		newTeam = "{{ $newTeamNoti }}";console.log(newTeam);
		if((birthday!="[]")||(newEngi!="[]")||(newPro!="[]")||(newTeam!="[]")){
			$.gritter.add({

				title:	'Notification!',
				text:	'You have a new notification.',
				image: 	'img/demo/envelope.png',
				sticky: false,		
			});
			$(".gritter-item").mousemove(function() {
				$(".gritter-title").css("margin-left","-50px");	
				$(".gritter-image").css('display', 'none');
				$(".gritter-item p").css('display', 'none');
				String1 = "<a href='#myModal' id='birthday' data-toggle='modal'><i class='icon-gift'></i>Today is the birthday of Engineers!</a>";
				String2 = "<a href='#myModal' id='newEngi' data-toggle='modal'><i class='icon-user'></i>The company has some new Employees!</a>";
				String3 = "<a href='#myModal' id='newPro' data-toggle='modal'><i class='icon-file'></i>The company has some new Projects!</a>";
				String4 = "<a href='#myModal' id='newTeam' data-toggle='modal'><i class='icon-group'></i>The company has some new Teams!</a>";
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
							$(".modal-body h4").html("@foreach ($newEngineerNoti as $engineer)"
												+"{{$engineer->engineerName}}"
												+"<hr/>"
												+"@endforeach");
						});
					}
					if (newPro!="[]") {
						$(".gritter-title").append(String3+"<br/>");
						$("#newPro").click(function(){
							$(".modal-header h3").html("New Projects!");
							$(".modal-body h4").html("<table class='table table-hover' style='border-style:hidden;'>"
												+"@foreach ($newProjectNoti as $project)"
												+"<tr class='gradeX'>"
												+"<td>{{$project->idProject}}</td>"
												+"<td>{{$project->projectName}}</td>"
												+"<td>{{$project->dateOfBegin}}</td>"
												+"</tr>"
												+"@endforeach"
												+"</table>");
						});
					}
					if (newTeam!="[]") {
						$(".gritter-title").append(String4+"<br/>");
						$("#newTeam").click(function(){
							$(".modal-header h3").html("New Teams!");
							$(".modal-body h4").html("<table class='table table-hover' style='border-style:hidden;'>"
												+"@foreach ($newTeamNoti as $team)"
												+"<tr class='gradeX'>"
												+"<td>{{$team->idTeam}}</td>"
												+"<td>{{$team->teamName}}</td>"
												+"<td>{{$team->status}}</td>"
												+"</tr>"
												+"@endforeach"
												+"</table>");
						});
					}
				// }
			});
		}
	});	
</script>
@stop