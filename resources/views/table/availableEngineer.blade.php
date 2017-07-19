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
	    @foreach ($listEngineer as $Engieer)
	    <tr class="gradeX">
	      <td><a href="">{{ $controllerIDEngi->idName($Engieer->idEngineer) }}</a></td>
	      <td>{{ $Engieer->engineerName }}</td>
	      <td>{{ $Engieer->Email }}</td>
	      <td>
	      	@if ($Engineer->busy==0)
	      	<span class="{{$controllerColor->changeColor($Engineer->busy)}}">
				Activite
	      	</span>
	      	@endif
	      </td>
	      <td>{{ $Engieer->TechSkill }}</td>
	      <td>{{ $Engieer->Experience }}</td>
	    </tr>
	    @endforeach
		  </tbody>
		</table>
	</div>   
	</div> 
</div> 