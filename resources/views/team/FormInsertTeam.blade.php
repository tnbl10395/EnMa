@extends('template.menubar')

@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Team Management</a> <a href="#" class="current">Insert Team</a> </div>
            <h1>INSERT TEAM</h1>
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
                                    <label class="control-label">Team Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Team Name" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="project_choice">Name of Initial Project :</label>
                                    <div class="controls">
                                        <select id="project_choice">
                                            <option value="" selected></option>
                                            <option>Project A</option>
                                            <option>Project B</option>
                                            <option>Project C</option>
                                            <option>Project D</option>
                                            <option>Project E</option>
                                            <option>Project F</option>
                                            <option>Project G</option>
                                            <option>Project H</option>
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
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                    <button class="btn btn-danger">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
