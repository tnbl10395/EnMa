@extends('template.menubar')

@section('content')
	<div id="content">
		<div id="content-header">		
		      <div id="breadcrumb"> <a href="#" title="Go to Home" class="current"><i class="icon-home"></i> Home</a></div>
			<!-- information -->

		      <div class="widget-box">
		        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
		          <h5>Information</h5>
		        </div>
		        <div class="widget-content" >
		          <div class="row-fluid">
		            <div class="span10" >
		     			<!-- content_table -->

		     			 <div class="span12">
							<div class="widget-box">
							 <div class="widget-content nopadding">
								<table id="changetable" class="table table-bordered data-table">
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
								    <tr class="gradeX">
								      <td>EN001</td>
								      <td>Long (Leesin) N.B. TRAN</td>
								      <td>intern.m0011@enclave.vn</td>
								      <td>01654351834</td>
								      <td>PHP, Java</td>
								      <td>10 years</td>
								    </tr>
								  </tbody>
								</table>
							</div>   
							</div> 
						</div> 
	 
	  			
		            </div>
		            <div class="span2">
		          <!--     <ul class="site-stats">
		                <li class="bg_lg">
		                	<a  onclick="load_TotalEngineer()" href="#" style="color:#FFFFFF">
		                		<i class="icon-user"></i> <strong>100</strong> <small>Total Engineers</	small>
	                		</a>
	            		</li>
		                <li class="bg_lg">
		                	<a onclick="load_TotalTeam()" href="#" style="color:#FFFFFF">
		                		<i class="icon-group"></i><strong>2540</strong> <small>Total Teams</small>

		                	</a>
		                </li>
	   	                <li class="bg_lg"><a onclick="load_TotalProject()" href="#" style="color:#FFFFFF"><i class="icon-book"></i> <strong>2540</strong> <small>Total Projects</small></a></li>
		              </ul> -->
		             	<ul class="btGroup">
		             	 	<li><button onclick="load_TotalEngineer()" id="btTotal" class="btn-success"><i class="icon-user"></i><strong>100</strong><br>Total Engineers</button></li>
	             	 	 	<li><button onclick="load_TotalTeam()" id="btTotal" class="btn-success"><i class="icon-group"></i><strong>100</strong><br>Total Teams</button></li>
             	 	 	 	<li><button onclick="load_TotalProject()" id="btTotal" class="btn-success"	><i class="icon-book"></i><strong>100</strong><br>Total Projects</button></li>
		             	</ul> 
		            </div>
		          </div>
		        </div>
		      </div>
		
			<!-- end-information -->
			<!-- top engineer -->
		
		<div class="span7" style="margin: -20px 0px 0px 20px;">
	        <div class="widget-box widget-chat">
	          <div class="widget-title bg_lb"> <span class="icon"> <i class="icon-comment"></i> </span>
	            <h5>Top Engineers</h5>
	          </div>
	          <div class="widget-content nopadding collapse in" id="collapseG4">
	            <div class="chat-users panel-right2">
	              <div class="panel-content nopadding">
	                <ul class="contact-list">
	                  
	                  <li id="user-Alex" class="online">
	                  	<a onclick="load_TableTopEngineer()" ><img alt="" src="{{asset('img/demo/av1.jpg')}}" /> <span>Leesin</span></a><span class="msg-count badge badge-info">1</span>
	                  </li>
	                  
	                  <li id="user-Linda" class="online">
	                  	<a onclick="load_TableTopEngineer()"><img alt="" src="{{asset('img/demo/av2.jpg')}}" /> <span>Tristina</span></a><span class="msg-count badge badge-info">2</span>
	                  </li>
	                  
	                  <li id="user-John" class="online">
	                  	<a onclick="load_TableTopEngineer()"><img alt="" src="{{asset('img/demo/av3.jpg')}}" /> <span>Nathan</span></a><span class="msg-count badge badge-info">3</span>
	                  </li>
	                  
	                  <li id="user-Mark" class="online">
	                  	<a onclick="load_TableTopEngineer()"><img alt="" src="{{asset('img/demo/av4.jpg')}}" /> <span>Lanston</span></a><span class="msg-count badge badge-info">4</span>
	                  </li>
	                  
	                  <li id="user-Maxi" class="online">
	                  	<a onclick="load_TableTopEngineer()"><img alt="" src="{{asset('img/demo/av5.jpg')}}" /> <span>Zeen</span></a><span class="msg-count badge badge-info">5</span>
	                  </li>

	                </ul>
	              </div>
	            </div>
	            <div class="chat-content panel-left2">
	              <div class="chat-messages" id="chat-messages">
	                <div id="changeTopEngineer">
	                	<!-- content-topengineer -->
	                	<div class="span2" style="width: 200px;height: 230px; background: #000000;margin-left: -25px;">
								<img src="" alt="" style="">
						</div>
						<div class="span3" style="margin-left: 0px;margin-top: -15px;">
							<div class="widget-box">
									 <div class="widget-content nopadding">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td><h4>Long (Leesin) N.B. TRAN</h4></td>
											</tr>
											<tr>
												<td><h6>10-MAR-1995</h6></td>
											</tr>
											<tr>
												<td><h6>PHP, JAVA</h6></td>
											</tr>
											<tr>
												<td><h6>More 10 years</h6></td>
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
	        <div class="span3" style="margin: -20px 0px 0px 10px;">
	        <div class="widget-box">
	          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
	            <h5>New Projects</h5>
	          </div>
	          <div class="widget-content">
	            <div class="todo">
	              <ul>
	                <li class="clearfix">
	                  <div class="txt"><a href="" title=""> Software Engineers Management </a><span class="date badge badge-important">New</span> </div>
	                </li>
	                <li class="clearfix">
	                  <div class="txt"><a href="" title=""> Software Bank Security </a><span class="date badge badge-important">New</span> </div>             
	                </li>
	                <li class="clearfix">
	                  <div class="txt"><a href="" title=""> Website Sell Online </a><span class="date badge badge-important">New</span> </div>
	                </li>
	              </ul>
	            </div>
	          </div>
	        </div>
    		<div>	
    	</div>
        <!-- end-new project -->
		</div>
	</div>	
@stop