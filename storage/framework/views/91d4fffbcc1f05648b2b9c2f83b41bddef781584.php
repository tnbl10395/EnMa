<!DOCTYPE html>
<html lang="en">

<head>
        <title>Login</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
		<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-responsive.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('css/matrix-login.css')); ?>" />
        <link href="<?php echo e(asset('font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
    <?php if(isset($success)): ?>
        <div class="alert alert-success" role="alert"><?php echo e($success); ?></div>
    <?php endif; ?>
    <?php if(isset($fail)): ?>
        <div class="alert alert-danger" role="alert"><?php echo e($fail); ?></div>
    <?php endif; ?>
        <div id="loginbox">
            <form id="loginform" class="form-vertical" action="<?php echo e(route('login')); ?>" method="POST" role="form">
				 <div class="control-group normal_text"> <h3><img src="<?php echo e(asset('img/logo.png')); ?>" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                            <input type="text" name="username" placeholder="Username" />

                        </div>
                    </div>
                </div>
                <?php if($errors->has('username')  ): ?>
                <?php endif; ?>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" />

                        </div>
                    </div>
                </div>
                <?php echo csrf_field(); ?>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><button type="submit"  class="btn btn-success" > Login</button></span>
                </div>
                <?php if($errors->has('username')  ): ?>

                    <div class="widget-content">
                    <div class="alert alert-error">
                        <button class="close" data-dismiss="alert"></button>
                        <strong>Error!</strong> <?php echo e($errors->first('username')); ?> </div>
                    </div>
                <?php endif; ?>
                <?php if($errors->has('password')  ): ?>
                            <div class="widget-content">
                    <div class="alert alert-error">
                        <button class="close" data-dismiss="alert"></button>
                        <strong>Error!</strong> <?php echo e($errors->first('password')); ?> </div>
                            </div>
                <?php endif; ?>
                <?php if($errors->has('errorlogin')  ): ?>

                    <div id="myModal" class="modal hide">
                        <div class="modal-header">
                            <button data-dismiss="modal" class="close" type="button">×</button>
                            <h3>Alert!</h3>
                        </div>
                        <div class="modal-body">
                            <p><?php echo e($errors->first('errorlogin')); ?></p>
                        </div>
                    </div>
                <?php endif; ?>

            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info">Recover</a></span>
                </div>
            </form>
        </div>

        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/matrix.login.js')); ?>"></script>
    </body>

</html>
