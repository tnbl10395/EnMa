<?php $__env->startSection('content'); ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Project Management</a> </div>
    <h1>Project Management</h1>
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
            <option value="">PHP</option>
            <option value="">Java</option>
            <option value="">C++</option>
            <option value="">.Net</option>
            <option value="">Ruby</option>
            <option value="">Android</option>              
          </select>         
        </div>  
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <a href="../AddProject"><button class="btn btn-info" style="margin: 3px 0px 0px 3px;">Add Project</button></a>
            
          </div>
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
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td>PR001</td>
                  <td>pr111</td>
                  <td>new</td>
                  <td>Php</td>
                  <td>01/01/2017</td>
                  <td>01/05/2017</td>
                  <td> <a href="../EditProject" ><i class="icon-edit" style="margin-left: 35px;"></i></a></td>
                  <td> <a href="" ><i class="icon-remove" style="margin-left: 40px;"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>