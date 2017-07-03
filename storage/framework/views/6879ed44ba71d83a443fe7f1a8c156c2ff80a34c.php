<?php $__env->startSection('content'); ?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="/TeamManagement" class="current">Teams Management</a> </div>
            <h1>Teams Management</h1>
        </div>
        <div class="container-fluid">
            <hr>
            
                
                
                    
                    
                    
                    
                    
                    
                
            
            <div style="width: 150px;float: left; margin-bottom: 5px;">
                <label for="">Technical Skill</label>
                <select name="">
                    <option value="">PHP</option>
                    <option value="">Java</option>
                    <option value="">C++</option>
                    <option value="">.Net</option>
                    <option value="">Ruby</option>
                    <option value="">Android</option>
                </select>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <a href="/AddTeam"><button class="btn btn-info" style="margin: 3px 0px 0px 3px;">Add Team</button></a>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Team name</th>
                                    <th>Technical Skill</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="gradeX <?php echo e($data->idTeam); ?>">
                                    <td><?php echo e($data->idTeam); ?></td>
                                    <td><?php echo e($data->teamName); ?></td>
                                    <td><?php echo e($data->techSkill); ?></td>
                                    <td style="text-align: center;"> <a href="/EditTeam/<?php echo e($data->idTeam); ?>" ><i class="icon-edit"></i></a></td>

                                    
                                    
                                    <td style="text-align: center;"> <a href="#myAlert" data-toggle="modal" onclick="IdToModal('<?php echo e($data->idTeam); ?>',this)"><i class="icon-remove"></i></a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="white-background">
</div>
<div id="dlgbox">
  <div id="dlg-header">
    Delete Project
  </div>
  <div id="dlg-body">
    Are you sure that you want to delete this project?
  </div>
  <div id="dlg-footer">
    <button onclick="dlgDelPro()" >Yes</button>
    <button onclick="dlgCancelPro()">No</button>
  </div>
</div>
    <div id="myAlert" class="modal hide">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button">×</button>
            <h3>Delete Team</h3>
        </div>
        <div class="modal-body">
            <p>Are you sure that you want to delete this team?</p>
        </div>
        <div class="modal-footer"> <a data-dismiss="modal" class="btn btn-primary" href="#">Confirm</a> <a data-dismiss="modal" class="btn" href="#">Cancel</a> </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>