<script  src="js/matrix.tables.js" sycn></script>
<div class="span12">
	<div class="widget-box">
	 	<div class="widget-content nopadding">
	 		<table class="table table-bordered data-table">
				<thead>
				    <tr>
				        <th>ID</th>
				        <th>Team name</th>
				        <th>Technical Skill</th>
				    </tr>
				</thead>
				<tbody>
					@foreach ($list as $list)
				    <tr class="gradeX">
				        <td>{{ $controller->idName($list->idTeam) }}</td>
				        <td>{{ $list->teamName }}</td>
				        <td>{{ $list->techSkill }}</td>
				    </tr>
				    @endforeach
				</tbody>
			</table>	
		</div>
	</div> 
</div> 