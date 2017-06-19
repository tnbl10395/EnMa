<?php $__env->startSection('content'); ?>
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Engineer Management</a> <a href="#" class="current">Update Engineer</a> </div>
  <h1>UPDATE ENGINEER</h1>
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
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">ID :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="ID" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Full Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Address"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Phone :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Phone" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Experience :</label>
              <div class="controls">
                <select >
                  <option>No experience</option>
                  <option>1 year</option>
                  <option>More 2 years</option>
                  <option>More 5 years</option>
                  <option>More 10 years</option>
                </select>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Technical Skill :</label>
              <div class="controls">
                <ul style="list-style-type: none; float: left; margin-left: -5px;">
                  <li><input type="checkbox" name="PHP" value=""> PHP</li>
                  <li><input type="checkbox" name="PHP" value=""> Java</li>
                  <li><input type="checkbox" name="PHP" value=""> .Net</li>
                </ul>
                <ul style="list-style-type: none; float: left;">
                  <li><input type="checkbox" name="PHP" value=""> Ruby</li>
                  <li><input type="checkbox" name="PHP" value=""> Android</li>
                  <li><input type="checkbox" name="PHP" value=""> IOS</li>
                </ul> 
                <ul style="list-style-type: none; float: left;">
                  <li><input type="checkbox" name="PHP" value=""> C#</li>
                  <li><input type="checkbox" name="PHP" value=""> C++</li>
                  <li><input type="checkbox" name="PHP" value=""> Assembly</li>
                </ul>        
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </form>
        </div>
      </div>


</div></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>