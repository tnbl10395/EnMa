@extends('template.menubar')

@section('content')
	<div id="content">
		<div id="content-header">		
		      <div id="breadcrumb"> <a href="#" title="Go to Home" class="current"><i class="icon-home"></i> Home</a></div>
		    </div>  
			<!-- information -->
			  <div class="container-fluid">
		      <div class="widget-box" style="margin-left: -5px;">
		        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
		          <h5>Information</h5>
		        </div>
		        <div class="widget-content" >
		          <div class="row-fluid">
		            <div class="span10" id="changetable"  >
		     			<!-- content_table -->

		     			 <div class="span12">
							<div class="widget-box">
							 <div class="widget-content nopadding">
								<table class="table table-bordered data-table">
								  <thead>
								    <tr>
								      <th>ID</th>
								      <th>Name</th>
								      <th>Email</th>
								      <th>Phone</th>
								      <th>Technical Skill</th>
								      <th>Experience</th>
								    </tr>
								  </thead>
								  <tbody>
							    @foreach ($listEngineer as $Engieer)
							    <tr class="gradeX">
							      <td><a href="">{{ $controller->idName($Engieer->idEngineer) }}</a></td>
							      <td>{{ $Engieer->engineerName }}</td>
							      <td>{{ $Engieer->Email }}</td>
							      <td>{{ $Engieer->Phone }}</td>
							      <td>{{ $Engieer->TechSkill }}</td>
							      <td>{{ $Engieer->Experience }}</td>
							    </tr>
							    @endforeach
								  </tbody>
								</table>
							</div>   
							</div> 
						</div> 
	 
	  			
		            </div>
		            <div class="span2">
		             	<ul class="btGroup">
		             	 	<li>
 		 	            	 	<button onclick="load_TotalEngineer()" id="btTotal" class="btn-success">
 		 	            	 		<i class="icon-user"></i>
 		 	            	 		<strong>
 		 	            	 			{{ $totalEngineer }}										
 		 	            	 		</strong>
 		 	            	 	<br>Total Engineers</button>
		             	 	</li>
	             	 	 	<li>
	             	 	 		<button onclick="load_TotalTeam()" id="btTotal" class="btn-success">
	             	 	 			<i class="icon-group"></i>
	             	 	 			<strong>{{ $totalTeam }}</strong>
	             	 	 		<br>Total Teams</button>
	             	 	 	</li>
             	 	 	 	<li>
             	 	 	 		<button onclick="load_TotalProject()" id="btTotal" class="btn-success"	>
             	 	 	 			<i class="icon-book"></i>
             	 	 	 			<strong>{{ $totalProject }}</strong>
             	 	 	 		<br>Total Projects</button>
         	 	 	 		</li>
		             	</ul> 
		            </div>
		          </div>
		        </div>
		      </div>
		
			<!-- end-information -->
			<!-- top engineer -->
		
		<div class="span7" style="margin: -20px 0px 0px -5px;">
	        <div class="widget-box widget-chat">
	          <div class="widget-title bg_lb"> <span class="icon"> <i class="icon-star"></i> </span>
	            <h5>Top Engineers</h5>
	          </div>
	          <div class="widget-content nopadding collapse in" id="collapseG4">
	            <div class="chat-users panel-right2">
	              <div class="panel-content nopadding">
	                <ul class="contact-list">     
	                  <li id="user1" class="online">

	                  	<a id="one" onclick="load_TableTopEngineer({{ $topEngineer[0]->idEngineer }})"><img alt="" src="{{asset('img/demo/av2.jpg')}}" /> <span>{{ $topEngineer[0]->engineerName }}</span></a><span class="msg-count badge badge-info">1</span>
	                  </li>
	                  
	                  <li id="user2"  class="online">
	                  	<a id="one" onclick="load_TableTopEngineer({{ $topEngineer[1]->idEngineer }})"><img alt="" src="{{asset('img/demo/av4.jpg')}}" /> <span>{{ $topEngineer[1]->engineerName }}</span></a><span class="msg-count badge badge-info">2</span>
	                  </li>
	                  
	                  <li id="user3"  class="online">
	                  	<a id="one" onclick="load_TableTopEngineer({{ $topEngineer[2]->idEngineer }})"><img alt="" src="{{asset('img/demo/av4.jpg')}}" /> <span>{{ $topEngineer[2]->engineerName }}</span></a><span class="msg-count badge badge-info">3</span>
	                  </li>
	                  
	                  <li id="user4"  class="online">
	                  	<a id="one" onclick="load_TableTopEngineer({{ $topEngineer[3]->idEngineer }})"><img alt="" src="{{asset('img/demo/av1.jpg')}}" /> <span>{{ $topEngineer[3]->engineerName }}</span></a><span class="msg-count badge badge-info">4</span>
	                  </li>
	                  
	                  <li id="user5"  class="online">
	                  	<a id="one" onclick="load_TableTopEngineer({{ $topEngineer[4]->idEngineer }})"><img alt="" src="{{asset('img/demo/av1.jpg')}}" /> <span>{{ $topEngineer[4]->engineerName }}</span></a><span class="msg-count badge badge-info">5</span>


	                  </li>
	                  
	                </ul>
	              </div>
	            </div>
	            <div class="chat-content panel-left2">
	              <div class="chat-messages" id="chat-messages">
	                <div id="changeTopEngineer">
	                	<!-- content-topengineer -->
	                	<div class="span2" style="width: 200px;height: 230px; margin-left: -25px;">
								<img src="{{asset('upload')}}/{{ $topEngineer[0]->avatar }}" alt="" style="width: 200px;height: 230px;">
						</div>
						<div class="span3" style="margin-left: 0px;margin-top: -15px;">
							<div class="widget-box">
									 <div class="widget-content nopadding">
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td><h4>{{ $topEngineer[0]->engineerName }}</h4></td>
													</tr>
													<tr>
														<td><h6>{{ $topEngineer[0]->TechSkill }}</h6></td>
													</tr>
													<tr>
														<td><h6>{{ $topEngineer[0]->Experience }}</h6></td>
													</tr>
													<tr>
														<td><h6>Have joined {{ $topEngineer[0]->total }} projects</h6></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>		
								</div>	
	              		  	</div>
	             		 </div>
	            	</div>
	          	</div>
	        </div>
	        </div>
	        <!-- end- top engineer -->
	        <!-- new project -->
	        <div class="span3" style="margin: -20px 0px 0px 5px;">
	        <div class="widget-box">
	          <div class="widget-title"> <span class="icon"><i class="icon-tasks"></i></span>
	            <h5>New Projects</h5>
	          </div>
	          <div class="widget-content">
	            <div class="todo">
	              <ul>
	              	@foreach($newProject as $_pro)
	                <li class="clearfix">
	                  <div class="txt"><a href="/EditProject/{{ $_pro->idProject }}" title=""> {{ $_pro->projectName }} </a><span class="date badge badge-important">New</span> </div>
	                </li>
	                @endforeach
	              </ul>
	            </div>
	          </div>
	        </div>
	     </div>   
        <!-- end-new project -->
		
	</div>
	</div>
  <div id="myModal" class="modal hide">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button">×</button>
            <h3>Happy birthday!</h3>
        </div>
        <div class="modal-body">
        	@foreach ($birthday as $engineer)
            <p>{{$engineer->engineerName}}</p>
            <br/>
            @endforeach
        </div>
  </div>
	@if(isset($birthday[0])!=NULL)
		<link rel="stylesheet" href="{{asset('css/jquery.gritter.css')}}"/>  
	    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
	    <script src="{{asset('js/jquery.gritter.min.js')}}"></script>
	    <script src="{{asset('js/matrix.interface.js')}}"></script>
	@endif
	<script type="text/javascript">
		var vari = "{{$birthday[0]->engineerName}}";console.log(vari);
	</script>	
@stop