<?php $this->load->view('header_footer/header_login'); ?>
    <?php
        //menampilkan error menggunakan alert javascript
        if(isset($error)){
            echo '<script> alert("'.$error.'"); 
                </script>';
        }
    ?>

    <div class="container">
        
        <br><br><br>
        <center>
            <img src="<?=base_url()?>assets/img/logo-pssi.png" class="img-responsive" alt="Image">            
        </center>
        <br>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 login" >
            <?php echo form_open('helpmy/mendaftar');?>
            <?php echo validation_errors(); ?>
                <br>
                <p class="text-center">Hey! Let's go to work.</p>
                <div class="form-horizontal fomlogin">
                    <div class="input-group textinput">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="username" type="text" class="form-control" name="username" placeholder="username">
                    </div>
                    <div class="input-group textinput">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="Password" type="text" class="form-control" name="Password" placeholder="Password">
                    </div>
                    <input type="submit" value="Sign In" class="btn btn-success textinput" style="width:100%;">
                    <br>
                </div>

            <?php echo form_close(); ?>	 

        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    </div>
    
<?php $this->load->view('header_footer/footer_login'); ?>