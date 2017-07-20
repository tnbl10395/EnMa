<script  src="js/matrix.tables.js"></script>

 <div class="span12">
	<div class="widget-box">
	 <div class="widget-content nopadding">
		<table class="table table-bordered data-table">
			<h4 style="margin-left: 20px;">Available Engineers</h4>	
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
	    @foreach ($listEngineer as $Engineer)
	    <tr class="gradeX">
	      <td><a href="">{{ $controllerIDEngi->idName($Engineer->idEngineer) }}</a></td>
	      <td>{{ $Engineer->engineerName }}</td>
	      <td>{{ $Engineer->Email }}</td>
	      <td>
			<span id="lb-config" class="{{$controllerColor->changeColorStatusEngi($Engineer->busy)}}">Available</span> 
	      </td>
	      <td>{{ $Engineer->TechSkill }}</td>
	      <td>{{ $Engineer->Experience }}</td>
	    </tr>
	    @endforeach
		  </tbody>
		</table>
	</div>   
	</div> 
</div> 