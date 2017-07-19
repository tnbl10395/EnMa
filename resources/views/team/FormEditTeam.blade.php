@extends('template.menubar')

@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="/TeamManagement" class="tip-bottom">Team Management</a> <a href="#" class="current">Edit Team</a> </div>
            <h1>Edit Team</h1>
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
                            <form action="/EditTeam/{{$team->idTeam}}" method="post" class="form-horizontal">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <div class="control-group">
                                    <label class="control-label">ID :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="ID" name="idTeam" disabled value="{{$team->idTeam}}"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Team Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Team Name" name="teamName" value="{{$team->teamName}}"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Total member :</label>

                                    <div class="controls count_member">
                                        {{count($member)}}
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Status :</label>
                                    <?php $sts =$team->status; ?>
                                    <div class="controls">
                                        {{--@if($sts=="New")--}}
                                            {{--<span class="label label-success">{{$sts}}</span>--}}
                                        {{--@elseif($sts=="Assigned")--}}
                                            {{--<span class="label label-warning">{{$sts}}</span>--}}
                                        {{--@elseif($sts=="In progress")--}}
                                            {{--<span class="label label-info">{{$sts}}</span>--}}
                                        {{--@elseif($sts=="Resolved")--}}
                                            {{--<span class="label label-success">{{$sts}}</span>--}}
                                        {{--@endif--}}
                                        <span class="{{$controllerColor->changeColor($sts)}}">{{$sts}}</span>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="project_choice">Name of Project :</label>
                                    <div class="controls" id="project_name">
                                        @if($hasProject==true)
                                            <input type="text" class="span11" disabled data-val="{{$projects[0]->idProject}}" value="{{$projects[0]->projectName}}"/>
                                        @else
                                            <label for="" data-val="0" value="0">{{$projects}}</label>
                                        {{--<select name="project_choice" id="project_choice">--}}
                                            {{--<option></option>--}}
                                            {{--<option>Project A</option>--}}
{{--                                            @if(!empty($projects))--}}
{{--                                                @foreach($projects as $project)--}}
                                                    {{--<option value="{{$project->idProject}}">{{$project->projectName}}</option>--}}
                                                {{--@endforeach--}}
                                            {{--@endif--}}
                                        {{--</select>--}}
                                        @endif
                                        {{--<script>--}}
                                            {{--$("#project_choice").val("{{$team->idProject}}");--}}
                                        {{--</script>--}}
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Technical Skill :</label>
                                    <div class="controls" id="tech">
                                        {{--<ul style="list-style-type: none; float: left; margin-left: -5px;">--}}
                                            {{--<li><input type="checkbox" name="techSkill[]" value="PHP"> PHP</li>--}}
                                            {{--<li><input type="checkbox" name="techSkill[]" value="JAVA"> Java</li>--}}
                                            {{--<li><input type="checkbox" name="techSkill[]" value=".NET"> .Net</li>--}}
                                        {{--</ul>--}}
                                        {{--<ul style="list-style-type: none; float: left;">--}}
                                            {{--<li><input type="checkbox" name="techSkill[]" value="Ruby"> Ruby</li>--}}
                                            {{--<li><input type="checkbox" name="techSkill[]" value="Android"> Android</li>--}}
                                            {{--<li><input type="checkbox" name="techSkill[]" value="IOS"> IOS</li>--}}
                                        {{--</ul>--}}
                                        {{--<ul style="list-style-type: none; float: left;">--}}
                                            {{--<li><input type="checkbox" name="techSkill[]" value="HTML"> HTML</li>--}}
                                            {{--<li><input type="checkbox" name="techSkill[]" value="CSS"> CSS</li>--}}
                                            {{--<li><input type="checkbox" name="techSkill[]" value="JS"> JS</li>--}}
                                        {{--</ul>--}}
                                        <?php
                                        $count = count($listTech);
                                        $_ceil=ceil($count/3);
                                        ?>
                                        @for($i=0;$i<3;$i++)
                                            @if($i==0)
                                                <ul style="list-style-type: none; float: left; margin-left: -5px;">
                                                @else
                                                <ul style="list-style-type: none; float: left;">
                                            @endif
                                            @for($j=0;$j<$_ceil;$j++)
                                                @if($i*3+$j>=$count)
                                                    @break
                                                @endif
                                                <li><input type="checkbox" name="techSkill[]" value="{{$listTech[$i*3+$j]->Technical}}"/>{{$listTech[$i*3+$j]->Technical}}</li>
                                             @endfor
                                             </ul>
                                        @endfor
                                        <script>
                                            <?php
                                             //   $tech = (strpos($team->techSkill,' - ')!== false)?explode(" - ",$team->techSkill()):$team->techSkill;
                                            ?>
                                            var techs="{{$team->techSkill}}";console.log(techs);
                                            techs=(techs.indexOf(" - ")>-1)?techs.split(" - "):techs.split();
                                            console.log(techs.length);
                                            $(document).ready(function(){
                                                for(techSkill=0;techSkill<techs.length;techSkill++){
//                                                        console.log($("#tech input[value='"+techs[techSkill]+"']"));
//                                                        $("#tech input[value='"+techs[techSkill]+"']").parents("span").addClass("checked");
                                                    $("#tech input[value='"+techs[techSkill]+"']")[0].click();//must have [0]
                                                }
                                                    });
                                        </script>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <button class="btn btn-danger">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            {{--<div style="width: 150px;float: left;margin-bottom: 5px;" class="div-add-member">--}}
                {{--<label for="listEngineer">List to add Engineer</label>--}}
                {{--<select id="listEngineer">--}}
                    {{--<option value="1">Zeen</option>--}}
                    {{--<option value="2">Nathan</option>--}}
                    {{--<option value="3">Lanston</option>--}}
                    {{--<option value="3">Leesin</option>--}}
                    {{--<option value="3">Tristina</option>--}}
                {{--</select>--}}
            {{--</div>--}}
            
            <div class="row-fluid" id="current-member">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            @if($hasProject==true)
                            <button class="btn btn-info add-member" style="margin: 3px 0px 0px 3px;">Add Member</button>
                            @endif
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Member name</th>
                                    <th>Role</th>
                                    <th>View detail</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($member as $member)
                                <tr class="gradeX">
                                    <td>{{$member->idEngineer}}</td>
                                    <td>{{$member->engineerName}}</td>
                                    <td>{{$member->role}}</td>
                                    <td style="text-align: center"> <a href="/EditEngineer" ><i class="icon-edit"></i></a></td>
                                    <td style="text-align: center"> <a href="javascript:void(0)" ><i class="icon-remove"></i></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modaladdTeam" class="modal hide">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button">×</button>
            <h3>Add Engineer</h3>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer"> <a style="display: none;" data-dismiss="modal" class="btn btn-primary" href="#">Add</a> <a data-dismiss="modal" class="btn" href="#">Cancel</a> </div>
    </div>


@stop
