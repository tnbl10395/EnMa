<script  src="js/matrix.tables.js" sycn></script>
<div class="span12">
	<div class="widget-box">
	 	<div class="widget-content nopadding">
	 		<table class="table table-bordered data-table">
				<thead>
				    <tr>
				        <th>ID</th>
				        <th>Team name</th>
				        <th>Technical Skill</th>
				    </tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    <tr class="gradeX">
				        <td><?php echo e($list->idTeam); ?></td>
				        <td><?php echo e($list->teamName); ?></td>
				        <td><?php echo e($list->techSkill); ?></td>
				    </tr>
				    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>	
		</div>
	</div> 
</div> 