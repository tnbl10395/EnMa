@extends('template.menubar')

@section('content')
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="/EngineerManagement" class="tip-bottom">Engineer Management</a> <a href="#" class="current">Insert Engineer</a> </div>
  <h1>Insert Engineer</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <form action="/AddEngineerController" method="POST" class="form-horizontal">
     <!-- right -->
        <div class="span6">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-user"></i> </span>
                    <h5>Information</h5>
                </div>
                <div class="widget-content nopadding">
                    <div class="span5">
                        <div class="img">
                          <img src="" alt="">  
                        </div>
                        <div class=""  >
                          <input type="file" name="" value="" placeholder="">      
                        </div>
                    </div>
      
                    <div class=""  style="margin-bottom: 8px;">
                        <div class="control-group">
                          <div class="controls">
                            <input type="text" name="id" class="span11" placeholder="ID" required="" />
                          </div>
                          <div class="controls">
                            <input type="text" name="fullname" class="span11" placeholder="Full Name" required="" />
                          </div>
                          <div class="controls">
                            <input type="text" data-date="01-02-2017" data-date-format="dd-mm-yyyy" placeholder="Date of Birth" class="datepicker span11"> 
                          </div>
                          <div class="controls">
                            <select class="span11" name="experience">
                              <option value="0">No experience</option>
                              <option value="1">1 year</option>
                              <option value="2">More 2 years</option>
                              <option value="3">More 5 years</option>
                              <option value="4">More 10 years</option>
                            </select>
                          </div>
                        </div>
                    </div>

                </div>
              <div class="widget-title" style="margin-bottom: 10px;"> <span class="icon"> <i class="icon-th"></i> </span>
                <h5>Status</h5>
              </div>
              <div class="widget-content nopadding">
               <div class="control-group">
                  <label class="control-label">Date Of Join</label>
                  <div class="controls">
                    <input type="text" placeholder="Date Of Join" data-date-format="dd-mm-yyyy" value="01-02-2017" class="datepicker span11">
                  </div>
                </div>
                <div class="control-group" style="margin-bottom: 10px;">
                  <label class="control-label">Date Of Out</label>
                  <div class="controls">
                    <input type="text" placeholder="Date Of Out" data-date-format="dd-mm-yyyy" value="01-02-2017" class="datepicker span11">
                  </div>
                 </div>
              </div>
            </div> 
        </div>
        <!-- end-right -->
      <!-- left -->
    <div class="span6">
      <div class="widget-box">

        <div class="widget-title"> <span class="icon"> <i class="icon-phone"></i> </span>
          <h5>Contact</h5>
        </div>

        <div class="widget-content nopadding">

          <div id="control" class="control-group">
            <label id="label" class="control-label">Address :</label>
            <div class="controls">
              <input id="input" type="text" name="address" class="span11" placeholder="Address"  />
            </div>
          </div>

          <div  id="control" class="control-group">
            <label id="label" class="control-label">Phone :</label>
            <div class="controls">
              <input id="input" type="text" name="phone" class="span11" placeholder="Phone" />
            </div>
          </div>

          <div id="control" class="control-group">
            <label id="label"  class="control-label">Email :</label>
            <div class="controls">
              <input id="input" type="text" name="email" class="span11" placeholder="Email" />
            </div>
          </div>
          
          <div class="widget-title" style="margin-bottom: 27px;"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Ability</h5>
           </div>
           <div  id="control" class="control-group" style="margin-bottom: 27px;">
            <label id="label" class="control-label">Technical Skill :</label>
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

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-actions">
            <button type="submit" name="submit" class="btn btn-success pull-right">Submit</button>
          </div>

        </div>
      </div>
      </div>
        <!-- end-left -->
       
   


     
    </form>
  </div>
  </div>
</div>
<script src="/js/matrix.form_common.js"></script>
@stop
