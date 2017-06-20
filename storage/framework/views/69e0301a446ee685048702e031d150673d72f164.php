<?php $__env->startSection('content'); ?>
<div id="content">
<div id="content-header">
<<<<<<< HEAD
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Engineer Management</a> <a href="#" class="current">Insert Engineer</a> </div>
=======
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="/EngineerManagement" class="tip-bottom">Engineer Management</a> <a href="#" class="current">Insert Engineer</a> </div>
>>>>>>> master
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
<<<<<<< HEAD
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">ID :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="ID" />
=======
          <form action="/AddEngineerController" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">ID :</label>
              <div class="controls">
                <input type="text" name="id" class="span11" placeholder="ID" />
>>>>>>> master
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
<<<<<<< HEAD
                <input type="text" class="span11" placeholder="Full Name" />
=======
                <input type="text" name="fullname" class="span11" placeholder="Full Name" />
>>>>>>> master
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
<<<<<<< HEAD
                <input type="text"  class="span11" placeholder="Address"  />
=======
                <input type="text" name="address" class="span11" placeholder="Address"  />
>>>>>>> master
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Phone :</label>
              <div class="controls">
<<<<<<< HEAD
                <input type="text" class="span11" placeholder="Phone" />
=======
                <input type="text" name="phone" class="span11" placeholder="Phone" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input type="text" name="email" class="span11" placeholder="Email" />
>>>>>>> master
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Experience :</label>
              <div class="controls">
<<<<<<< HEAD
                <select >
                  <option>No experience</option>
                  <option>1 year</option>
                  <option>More 2 years</option>
                  <option>More 5 years</option>
                  <option>More 10 years</option>
                </select>
              </div>
            </div>
=======
                <select name="experience">
                  <option value="0">No experience</option>
                  <option value="1">1 year</option>
                  <option value="2">More 2 years</option>
                  <option value="3">More 5 years</option>
                  <option value="4">More 10 years</option>
                </select>
              </div>
            </div>
            
<!--             <div class="control-group">
              <label class="control-label">Radio inputs</label>
              <div class="controls">
                <label>
                  <input type="radio" name="radios" />
                  First One</label>
                <label>
                  <input type="radio" name="radios" />
                  Second One</label>
                <label>
                  <input type="radio" name="radios" />
                  Third One</label>
              </div>
        <div class="control-group">
              <label class="control-label">Date Picker (mm-dd)</label>
              <div class="controls">
                <div  data-date="12-02-2012" class="input-append date datepicker">
                  <input type="text" value="12-02-2012"  data-date-format="mm-dd-yyyy" class="span11" >
                  <span class="add-on"><i class="icon-th"></i></span> </div>
              </div> -->

>>>>>>> master
             <div class="control-group">
              <label class="control-label">Technical Skill :</label>
              <div class="controls">
                <ul style="list-style-type: none; float: left; margin-left: -5px;">
<<<<<<< HEAD
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
              <button type="submit" class="btn btn-success">Submit</button>
=======
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
>>>>>>> master
            </div>
          </form>
        </div>
      </div>


</div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>