<?php $__env->startSection('content'); ?>
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
							    <?php $__currentLoopData = $listEngineer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Engieer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							    <tr class="gradeX">
							      <td><a href=""><?php echo e($Engieer->idEngineer); ?></a></td>
							      <td><?php echo e($Engieer->engineerName); ?></td>
							      <td><?php echo e($Engieer->Email); ?></td>
							      <td><?php echo e($Engieer->Phone); ?></td>
							      <td><?php echo e($Engieer->TechSkill); ?></td>
							      <td><?php echo e($Engieer->Experience); ?></td>
							    </tr>
							    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								  </tbody>
								</table>
							</div>   
							</div> 
						</div> 
	 
	  			
		            </div>
		            <div class="span2">
		             	<ul class="btGroup">
		             	 	<li><button onclick="load_TotalEngineer()" id="btTotal" class="btn-success"><i class="icon-user"></i><strong><?php echo e($totalEngineer); ?></strong><br>Total Engineers</button></li>
	             	 	 	<li><button onclick="load_TotalTeam()" id="btTotal" class="btn-success"><i class="icon-group"></i><strong><?php echo e($totalTeam); ?></strong><br>Total Teams</button></li>
             	 	 	 	<li><button onclick="load_TotalProject()" id="btTotal" class="btn-success"	><i class="icon-book"></i><strong><?php echo e($totalProject); ?></strong><br>Total Projects</button></li>
		             	</ul> 
		            </div>
		          </div>
		        </div>
		      </div>
		
			<!-- end-information -->
			<!-- top engineer -->
		
		<div class="span7" style="margin: -20px 0px 0px 20px;">
	        <div class="widget-box widget-chat">
	          <div class="widget-title bg_lb"> <span class="icon"> <i class="icon-star"></i> </span>
	            <h5>Top Engineers</h5>
	          </div>
	          <div class="widget-content nopadding collapse in" id="collapseG4">
	            <div class="chat-users panel-right2">
	              <div class="panel-content nopadding">
	                <ul class="contact-list">     
	                  <li id="user1" class="online">
	                  	<a id="one" onclick="load_TableTopEngineer()"><img alt="" src="<?php echo e(asset('img/demo/av2.jpg')); ?>" /> <span>Leesin</span></a><span class="msg-count badge badge-info">1</span>
	                  </li>
	                  
	                  <li id="user2" class="online">
	                  	<a id="two" onclick="load_TableTopEngineer()"><img alt="" src="<?php echo e(asset('img/demo/av4.jpg')); ?>" /> <span>Tristina</span></a><span class="msg-count badge badge-info">2</span>
	                  </li>
	                  
	                  <li id="user3" class="online">
	                  	<a onclick="load_TableTopEngineer()"><img alt="" src="<?php echo e(asset('img/demo/av4.jpg')); ?>" /> <span>Nathan</span></a><span class="msg-count badge badge-info">3</span>
	                  </li>
	                  
	                  <li id="user4" class="online">
	                  	<a onclick="load_TableTopEngineer()"><img alt="" src="<?php echo e(asset('img/demo/av1.jpg')); ?>" /> <span>Lanston</span></a><span class="msg-count badge badge-info">4</span>
	                  </li>
	                  
	                  <li id="user5" class="online">
	                  	<a onclick="load_TableTopEngineer()"><img alt="" src="<?php echo e(asset('img/demo/av1.jpg')); ?>" /> <span>Zeen</span></a><span class="msg-count badge badge-info">5</span>
	                  </li>

	                </ul>
	              </div>
	            </div>
	            <div class="chat-content panel-left2">
	              <div class="chat-messages" id="chat-messages">
	                <div id="changeTopEngineer">
	                	<!-- content-topengineer -->
	                	<div class="span2" style="width: 200px;height: 230px; background: #000000;margin-left: -25px;">
								<img src="../img/4.jpg" alt="" style="width: 200px;height: 230px;">
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
	          <div class="widget-title"> <span class="icon"><i class="icon-tasks"></i></span>
	            <h5>New Projects</h5>
	          </div>
	          <div class="widget-content">
	            <div class="todo">
	              <ul>
	                <li class="clearfix">
	                  <div class="txt"><a href="" title=""> Software Hotel Management </a><span class="date badge badge-important">New</span> </div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>