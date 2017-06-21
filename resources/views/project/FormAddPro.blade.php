@extends('template.menubar')

@section('content')
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Project Management</a> <a href="#" class="current">Insert Project</a> </div>
  <h1>INSERT PROJECT</h1>
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
              <label class="control-label">idProject:</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="idProject" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">projectName :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="projectName" />
              </div>
            </div>
           
            <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                <select >
                  <option>New</option>
                  <option>Assigned</option>
                  <option>Feedback</option>
                  <option>In progress</option>
                  <option>Resolved</option>
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


            <div class="control-group">
              <label class="control-label">dateOfBegin(dd-mm)</label>
              <div class="controls">
                <input type="text" data-date="01-02-2017" data-date-format="dd-mm-yyyy" value="01-02-2017" class="datepicker span11">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>

            <div class="control-group">
              <label class="control-label">dateOfEnd(dd-mm)</label>
              <div class="controls">
                <input type="text" data-date="01-02-2017" data-date-format="dd-mm-yyyy" value="01-02-2017" class="datepicker span11">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn-success">Submit</button>
              <button type="reset" class="btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
</div></div>
<script src="js/matrix.form_common.js"></script>

@stop
