<?php $__env->startSection('content'); ?>
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="/EngineerManagement" class="tip-bottom">Engineer Management</a> <a href="#" class="current">Insert Engineer</a> </div>
  <h1>INSERT ENGINEER</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Information</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="/AddEngineerController" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">ID :</label>
              <div class="controls">
                <input type="text" name="id" class="span11" placeholder="ID" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" name="fullname" class="span11" placeholder="Full Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" name="address" class="span11" placeholder="Address"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Phone :</label>
              <div class="controls">
                <input type="text" name="phone" class="span11" placeholder="Phone" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input type="text" name="email" class="span11" placeholder="Email" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Experience :</label>
              <div class="controls">
                <select name="experience">
                  <option value="0">No experience</option>
                  <option value="1">1 year</option>
                  <option value="2">More 2 years</option>
                  <option value="3">More 5 years</option>
                  <option value="4">More 10 years</option>
                </select>
              </div>
            </div>
            
             <div class="control-group">
              <label class="control-label">Technical Skill :</label>
              <div class="controls">
                <ul style="list-style-type: none; float: left; margin-left: -5px;">
                  <li><input type="checkbox" name="technical" value="0"> PHP</li>
                  <li><input type="checkbox" name="technical" value="1"> Java</li>
                  <li><input type="checkbox" name="technical" value="2"> .Net</li>
                </ul>
                <ul style="list-style-type: none; float: left;">
                  <li><input type="checkbox" name="technical" value="3"> Ruby</li>
                  <li><input type="checkbox" name="technical" value="4"> Android</li>
                  <li><input type="checkbox" name="technical" value="5"> IOS</li>
                </ul> 
                <ul style="list-style-type: none; float: left;">
                  <li><input type="checkbox" name="technical" value="6"> HTML</li>
                  <li><input type="checkbox" name="technical" value="7"> CSS</li>
                  <li><input type="checkbox" name="technical" value="8"> JS</li>
                </ul>        
              </div>
            </div>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="form-actions">
              <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>
</div></div>
<script src="/js/matrix.form_common.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>