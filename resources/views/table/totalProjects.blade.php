<script  src="js/matrix.tables.js"></script>
<div class="span12">
	<div class="widget-box">
		 <div class="widget-content nopadding">
		 	<table class="table table-bordered data-table">
				<thead>
				  <tr>
				    <th>idProject</th>
				    <th>projectName</th>
				    <th>status</th>
				    <th>Technical Skill</th>
				    <th>dateOfBegin</th>
				    <th>dateOfEnd</th>
				  </tr>
				</thead>
				<tbody>
				@foreach ($list as $list)	
				 <tr class="gradeX">
				    <td>{{ $list->idProject }}</td>
				    <td>{{ $list->projectName }}</td>
				    <td>{{ $list->status }}</td>
				    <td>{{ $list->techSkill }}</td>
				    <td>{{ $list->dateOfBegin }}</td>
				    <td>{{ $list->dateOfEnd }}</td>
				  </tr>
				 @endforeach
				</tbody>
			</table>
		</div>
	</div> 
</div>