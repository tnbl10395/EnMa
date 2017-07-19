<script  src="js/matrix.tables.js" sycn></script>
<div class="span12">
	<div class="widget-box">
	 	<div class="widget-content nopadding">
	 		<table class="table table-bordered data-table">
		 		<h4 style="margin-left: 20px;">Total Teams</h4>	
				<hr/>
				<thead>
				    <tr>
				        <th>ID</th>
				        <th>Team name</th>
				        <th>Technical Skill</th>
				        <th>Status</th>
				    </tr>
				</thead>
				<tbody>
					@foreach ($list as $list)
				    <tr class="gradeX">
				        <td>{{ $controller->idName($list->idTeam) }}</td>
				        <td>{{ $list->teamName }}</td>
				        <td>{{ $list->techSkill }}</td>
				        <td>{{ $list->status }}</td>
				    </tr>
				    @endforeach
				</tbody>
			</table>	
		</div>
	</div> 
</div> 