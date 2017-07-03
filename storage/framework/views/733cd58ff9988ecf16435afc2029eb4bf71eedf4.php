<?php $__env->startSection('content'); ?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="TeamManagement" class="tip-bottom">Team Management</a> <a href="AddTeam" class="current">Insert Team</a> </div>
            <h1>INSERT TEAM</h1>
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
                                    <label class="control-label">ID :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="ID" name="idTeam" required="" />
                                    </div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.menubar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>