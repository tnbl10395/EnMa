<?php $__env->startSection('content'); ?>
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
                            <form action="#" method="get" class="form-horizontal">
                                <form action="/UpdateTeamController" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">ID :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="ID" disabled/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Team Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Team Name" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Total member :</label>

                                    <div class="controls">
                                        1
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="project_choice">Name of Project :</label>
                                    <div class="controls">
                                        <select id="project_choice">
                                            <option></option>
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
                                            <li><label><input type="radio" name="techSkill" value="PHP"/>PHP</label></li> 
                                            <li><label><input type="radio" name="techSkill" value="Java"/>Java</label></li>
                                            <li><label><input type="radio" name="techSkill" value=".Net"/>.Net</label></li>
                                        </ul>
                                        <ul style="list-style-type: none; float: left;">
                                            <li><label><input type="radio" name="techSkill" value="Ruby"/>Ruby</label></li>
                                            <li><label><input type="radio" name="techSkill" value="Android"/>Android</label></li>
                                            <li><label><input type="radio" name="techSkill" value="IOS"/>IOS</label></li>
                                        </ul>
                                        <ul style="list-style-type: none; float: left;">
                                            <li><label><input type="radio" name="techSkill" value="HTML"/>HTML</label></li>
                                            <li><label><input type="radio" name="techSkill" value="CSS"/>CSS</label></li>
                                            <li><label><input type="radio" name="techSkill" value="JS"/>JS</label></li>
                                        </ul>
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
            
            <div style="width: 150px;float: left;margin-bottom: 5px;" class="div-add-member">
                <label for="listEngineer">List to add Engineer</label>
                <select id="listEngineer">
                    <option value="1">Zeen</option>
                    <option value="2">Nathan</option>
                    <option value="3">Lanston</option>
                    <option value="3">Leesin</option>
                    <option value="3">Tristina</option>
                </select>
            </div>
            
            
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <button class="btn btn-info add-member" style="margin: 3px 0px 0px 3px;">Add Member</button>
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
                                <tr class="gradeX">
                                    <td>M001</td>
                                    <td>John Cornor</td>
                                    <td>Project Manager</td>
                                    <td style="text-align: center"> <a href="/EditEngineer" ><i class="icon-edit"></i></a></td>
                                    <td style="text-align: center"> <a href="javascript:void(0)" ><i class="icon-remove"></i></a></td>
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