<script  src="js/matrix.tables.js" sycn></script>
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
  		    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    <tr class="gradeX">
		      <td><a href=""><?php echo e($list->idEngineer); ?></a></td>
		      <td><?php echo e($list->engineerName); ?></td>
		      <td><?php echo e($list->Email); ?></td>
		      <td><?php echo e($list->Phone); ?></td>
		      <td><?php echo e($list->TechSkill); ?></td>
		      <td><?php echo e($list->Experience); ?></td>
		    </tr>
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  </tbody>
		</table>
	</div>   
	</div> 
</div> 