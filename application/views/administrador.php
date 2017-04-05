<div class="main-content">
    <div class="main-content-inner">


        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>

                <div class="ace-settings-box clearfix" id="ace-settings-box">
                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="no-skin" value="#40310C">#40310C</option>
                                    <option data-skin="skin-1" value="#4A4F56">#4A4F56</option>
                                    <option data-skin="skin-2" value="#363B36">#363B36</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                            <label class="lbl" for="ace-settings-add-container">
                                Comprimir
                                <b></b>
                            </label>
                        </div>
                    </div><!-- /.pull-left -->

                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                            <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                            <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                            <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                        </div>
                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->




                    <div >
                        <div class="row">
                            <div class="col-xs-12 col-sm-9">


                                <h3>
                                    <?php
                                    foreach ($su as $com) {
                                        ?> <h1>Sucursal: <?php
                                        echo $com->NombreS;
                                    }
                                    ?></h1>

                                </h3>
                            </div>
                            <br>
                            <div class="col-xs-12 col-sm-3">
                                <!--                                                        vvvvvv -->
<?php $atributos = array('class' => 'form-inline');
echo form_open('Orden/selecSucursal', $atributos)
?>
                                <select class="form-control" name="sucursal">
                                      <option></option>
                                <?php foreach ($lista as $com) {
                                    if ($com->Estatus=='si'){ ?>
                                  
                                        <option value="<?php echo $com->idSucursal ?>"> <?php echo $com->NombreS ?></option>
                                    <?php }else{}} ?>
                                </select>
                                <input class="btn btn-warning" type="submit" value="Guardar">

                                </form>
                            </div>
                           
                        </div>
                         <br>
                         
                           
                        <div class="row">

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>Buscar </h3>

                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <a href="menuBuscador" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>Servicio </h3>

                                        <p>funeral</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-sticky-note-o"></i>
                                    </div>
                                    <a href="menuOrden" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>Programa </h3>

                                        <p>de Apoyo a la comunidad</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-sticky-note-o"></i>
                                    </div>
                                    <a href="menuOrdenComunidad" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>Solicitantes</h3>

                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="icon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </div>
                                    <a href="solicitantes" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div> 
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>Usuario</h3>

                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <a href="menuUsuario" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>Sucursal</h3>

                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <a href="listarSucursal" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>  

 <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>Comunidades</h3>

                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <a href="listarComunidad" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <!-- contenidooooooo -->
                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->
