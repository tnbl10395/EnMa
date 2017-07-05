<?php $__env->startSection('content'); ?>
<div id="content">
  <div id="content-header">

    <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="/EngineerManagement" class="current">Engineers Management</a> </div>

    <h1>Engineers Management</h1>
  </div>
  <div class="container-fluid">
    <hr>
        <div style="width: 150px; float: left; margin-bottom: 5px;">
        <label for="">Experience</label>
          <select name="">
            <option value="">All</option>
            <option value="">No experience</option>
            <option value="">1 year</option>
            <option value="">More 2 years</option>
            <option value="">More 5 years</option>
            <option value="">More 10 years</option>              
          </select>         
        </div> 
        <div style="width: 150px;float: left; margin-bottom: 5px;">
        <label for="">Technical Skill</label>
          <select name="">
            <option value="">All</option>
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
            <button onclick="transferAddEngineer()" class="btn btn-info" style="margin: 3px 0px 0px 3px;">Add Engineer</button>
            
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Technical Skill</th>
                  <th>Experience</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class="gradeX">
                <td><a href=""><?php echo e($list->idEngineer); ?></a></td>
                <td><?php echo e($list->engineerName); ?></td>
                <td><?php echo e($list->Address); ?></td>
                <td><?php echo e($list->Phone); ?></td>
                <td><?php echo e($list->Email); ?></td>
                <td><?php echo e($list->TechSkill); ?></td>
                <td><?php echo e($list->Experience); ?></td>
                <td> <a href="EditEngineer" ><i class="icon-edit" style="margin-left: 10px;"></i></a></td>
                <td> <a onclick="showDialog()" href="#" ><i class="icon-remove" style="margin-left: 15px;"></i></a></td>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>