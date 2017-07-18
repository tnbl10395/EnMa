@extends('template.menubar')

@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="TeamManagement" class="tip-bottom">Team Management</a> <a href="AddTeam" class="current">Insert Team</a> </div>
            <h1>Insert Team</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span7">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Information</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form action="/AddTeamController" method="post" class="form-horizontal">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <div class="control-group">
                              <!--       <label class="control-label">ID :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="ID" name="idTeam" required="" />
                                    </div> -->
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Team Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Team Name" name="teamName" required="" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="project_choice">Name of Initial Project :</label>
                                    <div class="controls">
                                        <select name="project_choice" id="project_choice">
                                            <option value="" selected></option>
                                            @if(!empty($projects))
                                                @foreach($projects as $project)
                                                    <option value="{{$project->projectName}}">{{$project->projectName}}</option>
                                                @endforeach
                                            @endif    
                                            {{--<option>Project A</option>--}}

                                        </select>

                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Technical Skill :</label>
                                    <div class="controls">
                                        <ul style="list-style-type: none; float: left; margin-left: -5px;">
                                            {{--<li><label><input type="radio" name="techSkill" value="PHP"/>PHP</label></li> --}}{{--must be have label tag--}}
                                            {{--<li><label><input type="radio" name="techSkill" value="Java"/>Java</label></li>--}}
                                            {{--<li><label><input type="radio" name="techSkill" value=".Net"/>.Net</label></li>--}}
                                            <li><input type="checkbox" name="techSkill[]" value="PHP"> PHP</li>
                                            <li><input type="checkbox" name="techSkill[]" value="JAVA"> Java</li>
                                            <li><input type="checkbox" name="techSkill[]" value=".Net"> .Net</li>
                                        </ul>
                                        <ul style="list-style-type: none; float: left;">
                                            {{--<li><label><input type="radio" name="techSkill" value="Ruby"/>Ruby</label></li>--}}
                                            {{--<li><label><input type="radio" name="techSkill" value="Android"/>Android</label></li>--}}
                                            {{--<li><label><input type="radio" name="techSkill" value="IOS"/>IOS</label></li>--}}
                                            <li><input type="checkbox" name="techSkill[]" value="Ruby"> Ruby</li>
                                            <li><input type="checkbox" name="techSkill[]" value="Android"> Android</li>
                                            <li><input type="checkbox" name="techSkill[]" value="IOS"> IOS</li>
                                        </ul>
                                        <ul style="list-style-type: none; float: left;">
                                            {{--<li><label><input type="radio" name="techSkill" value="HTML"/>HTML</label></li>--}}
                                            {{--<li><label><input type="radio" name="techSkill" value="CSS"/>CSS</label></li>--}}
                                            {{--<li><label><input type="radio" name="techSkill" value="JS"/>JS</label></li>--}}
                                            <li><input type="checkbox" name="techSkill[]" value="HTML"> HTML</li>
                                            <li><input type="checkbox" name="techSkill[]" value="CSS"> CSS</li>
                                            <li><input type="checkbox" name="techSkill[]" value="JS"> JS</li>
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
