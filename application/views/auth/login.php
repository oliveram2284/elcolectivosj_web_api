<div class="page-center">
    <div class="page-center-in">
        <?php echo form_open("auth/login",array('class'=>'sign-box'));?>

            <div class="sign-avatar">
                <img src="<?php echo base_url();?>assets/images/avtar.png" alt="" class="img-circle">
            </div>
            <header class="sign-title"><?php echo lang('login_heading');?></header>
            <p><?php echo lang('login_subheading');?></p>
            <div id="infoMessage"><?php echo $message;?></div>
            <div class="form-group">

                <?php echo form_input($identity);?>
            </div>
            <div class="form-group">
                <?php echo form_input($password);?>
            </div>
            <div class="form-group clearfix">
                <div class="checkbox pull-left">

                    <?php echo form_checkbox(array('name'=>'remember','id'=>'remember','value'=>'1','cheked'=>FALSE,'class'=>'i-checks'));?>
                    <label for="myCheckbox">Remember Me </label>
                </div>
                <div class="pull-right">
                    <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
                </div>
            </div>
            <button type="submit" class="btn btn-success rounded btn-lg">Sign in</button>
            <hr>
            <!--
            <p>Don't have an account? <a href="page-register.html">Sign up</a></p> -->

        <?php echo form_close();?>
    </div><!--page center in-->
</div><!--page center-->
