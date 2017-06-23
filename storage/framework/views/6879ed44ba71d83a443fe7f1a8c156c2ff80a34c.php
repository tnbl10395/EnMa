<?php $__env->startSection('content'); ?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="/TeamManagement" class="current">Teams Management</a> </div>
            <h1>Teams Management</h1>
        </div>
        <div class="container-fluid">
            <hr>
            
                
                
                    
                    
                    
                    
                    
                    
                
            
            <div style="width: 150px;float: left; margin-bottom: 5px;">
                <label for="">Technical Skill</label>
                <select name="">
                    <option value="">PHP</option>
                    <option value="">Java</option>
                    <option value="">C++</option>
                    <option value="">.Net</option>
                    <option value="">Ruby</option>
                    <option value="">Android</option>
                </select>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <a href="/AddTeam"><button class="btn btn-info" style="margin: 3px 0px 0px 3px;">Add Team</button></a>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Team name</th>
                                    <th>Technical Skill</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>TE001</td>
                                    <td>Big hero</td>
                                    <td>PHP, Java</td>
                                    <td style="text-align: center;"> <a href="/EditTeam" ><i class="icon-edit"></i></a></td>
                                    <td style="text-align: center;"> <a href="#" ><i class="icon-remove"></i></a></td>
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