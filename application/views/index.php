<div class="main-content">

    <div class="main-content-inner">






        <div class="row ">                        
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->



                <div class="col-md-12">
                    <br> <br> 
                    </div> 

                <div class="col-sm-10 col-sm-offset-1">

                    <div class="login-container  ">
                        <div class="center   ">
                            <?php
                            if (isset($msg)) {
                                ?>
                                <div class="alert alert-danger alert-dismissable fade in">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Usuario o Contraseña incorrectos</strong> 
                                </div>
                                <!--                                                <h3 class="trans">Usuario o Contraseña incorrectos</h3>-->
                                <?php
                            }
                            ?> 
                                <br> <br> 
                            <h1>
                                
<!--                                <i class="ace-icon fa glyphicon-asterisk tit "></i>-->

<!--                                <span class="tit"> Funeraria </span>-->
                                <div class="space-6"></div>
                                <i ><img  src="<?php echo base_url() ?>assets/img/tii.png"></i>
<!--                                <span class="tit"> Juan Pablo II</span>-->
                                <span class="white" id="id-text2"></span>
                            </h1>
                            <h4 class="blue" id="id-company-text"> </h4>
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h3 class="header  lighter bigger">
                                            <i class="ace-icon fa fa-coffee black "></i><b>
                                            Inicio de sesión </b>
                                        </h3>


                                        <div class="space-6"></div>

<?php echo form_open('Usuario/inicioSesion'); ?>
                                        <fieldset>
                                            <label class="block clearfix">
                                                <span class="required"></span>
                                                <span class="block input-icon input-icon-right">
<?php echo form_error('usuario'); ?>
                                                    <input type="text" class="form-control" placeholder="usuario" name="usuario" autocomplete="on" value="<?php echo set_value('usuario'); ?>" required="required"/>
                                                    <i class="ace-icon fa fa-users"></i>
                                                </span>
                                            </label>

                                            <label class="block clearfix"><span class=""></span>
                                                <span class="block input-icon input-icon-right required">
<?php echo form_error('password'); ?>
                                                    <input type="password" class="form-control" placeholder="Contraseña" name="pass" required="required"/>
                                                    <i class="ace-icon fa fa-lock"></i>
                                                </span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-warning">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110">Entrar</span>
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>

<?php echo form_close(); ?>

                                        <div class="space-6"></div>
                                    </div><!-- /.widget-main -->

                                </div><!-- /.widget-body -->
                            </div><!-- /.login-box -->

                        </div><!-- /.position-relative -->
                    </div>

                </div><!-- /.col -->
</div>

                <!-- contenidooooooo -->
                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div>
</div><!-- /.main-content -->