<script  src="js/matrix.tables.js" sycn></script>
<div class="span12">
	<div class="widget-box">
	 <div class="widget-content nopadding">
		<table class="table table-bordered data-table">
			<h4 style="margin-left: 20px;">Total Engineers</h4>	
			<hr/>
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>Name</th>
		      <th>Email</th>
		      <th>Status</th>
		      <th>Technical Skill</th>
		      <th>Experience</th>
		    </tr>
		  </thead>
		  <tbody>
  		    @foreach ($list as $list)
		    <tr class="gradeX">
		      <td><a href="">{{ $controller->idName($list->idEngineer) }}</a></td>
		      <td>{{ $list->engineerName }}</td>
		      <td>{{ $list->Email }}</td>
		      <td>{{ $list->busy }}</td>
		      <td>{{ $list->TechSkill }}</td>
		      <td>{{ $list->Experience }}</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>   
	</div> 
</div> 