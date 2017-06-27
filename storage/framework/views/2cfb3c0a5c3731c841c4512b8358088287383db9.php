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
				<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
				 <tr class="gradeX">
				    <td><?php echo e($list->idProject); ?></td>
				    <td><?php echo e($list->projectName); ?></td>
				    <td><?php echo e($list->status); ?></td>
				    <td><?php echo e($list->techSkill); ?></td>
				    <td><?php echo e($list->dateOfBegin); ?></td>
				    <td><?php echo e($list->dateOfEnd); ?></td>
				  </tr>
				 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div> 
</div>