<?php $__env->startSection('content'); ?>
	<div id="content">

	      <div id="breadcrumb"> <a href="#" title="Go to Home" class="current"><i class="icon-home"></i> Home</a></div>
		<!-- information -->
		<div class="row-fluid">
	      <div class="widget-box">
	        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
	          <h5>Information</h5>
	        </div>
	        <div class="widget-content" >
	          <div class="row-fluid">
	            <div class="span9" id="changetable">
	     			<!-- content_table -->  			
	            </div>
	            <div class="span3">
	              <ul class="site-stats">
	                <li class="bg_lg">
	                	<a  onclick="load_TotalEngineer()" href="#" style="color:#FFFFFF">
	                		<i class="icon-user"></i> <strong>100</strong> <small>Total Engineers</small>
                		</a>
            		</li>
	                <li class="bg_lg">
	                	<a onclick="load_TotalTeam()" href="#" style="color:#FFFFFF">
	                		<i class="icon-group"></i><strong>2540</strong> <small>Total Teams</small>

	                	</a>
	                </li>
   	                <li class="bg_lg"><a onclick="load_TotalProject()" href="#" style="color:#FFFFFF"><i class="icon-book"></i> <strong>2540</strong> <small>Total Projects</small></a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
		<!-- end-information -->

	</div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>