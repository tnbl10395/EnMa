



    
        
            
                
                
                    
                        
                            
                        
                    

                    
                        

                        
                            

                            
                                

                                
                                    
                                        
                                    
                                
                            
                        

                        
                            
                                
                                    
                                
                            
                        
                    
                
            
        
    







<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reset Password</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-responsive.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/matrix-login.css')); ?>" />
    <link href="<?php echo e(asset('font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

<div id="loginbox">
    <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <form id="loginform" class="form-vertical" role="form" method="POST" action="<?php echo e(route('password.email')); ?>">
        <?php echo e(csrf_field()); ?>

        <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

        <div class="controls<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="email" placeholder="E-mail address" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-actions">
            <span class="pull-left"><a href="/" class="flip-link btn btn-success" id="to-login">&laquo; Back to Dashboard</a></span>
            <span class="pull-right"><button type="submit" class="btn btn-info">Recover</button></span>
        </div>
    </form>
</div>

<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/matrix.login.js')); ?>"></script>
</body>

</html>
