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
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#40310C">40310C</option>
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
                                Inside
                                <b>.container</b>
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

                    <div class="col-md-12">

                        <div class="col-md-6 " ></div>               
                        <div class="col-md-4 " >
                            <h2 class="center">Agregar</h2>
                            <?php echo form_open('Orden/agregarComunidad') ?>

                            <input name="nombre" type="text" placeholder="Nombre..." class="form-control" required>
                            <div class="center " >
                                <div class="space " ></div> 
                                <input class="btn btn-warning" type="submit" value="Guardar"> 
                            </div> 
                            </form>
                            <br>
                            <h2 class="center">Actualizar</h2>
                            <?php echo form_open('Orden/actualizarComunidad') ?>

                            <input name="nombre" type="text" placeholder="Nombre..." class="form-control" required value="<?php
                            if ($_POST) {
                                echo $_POST['nombre'];
                            }
                            ?>">
                            <input name="identificador" type="hidden"  value="<?php
                            if ($_POST) {
                                echo $_POST['identificador'];
                            }
                            ?>">
                            <div class="space " ></div> 
                            <div class="center " >
                                <input class="btn btn-default" type="submit" value="Guardar">
                            </div>
                            </form>

                        </div>
                        <div class="col-md-2 " ></div>  

                        <div class="col-md-6 table-responsive ">
                            <h2 class="center">Comunidades</h2>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr >
                                        <td class="center"> <b>Nombre</b></td>
                                        <td class="center"> <b>Estatus</b></td>
                                        <td class="center"><b>Opciones</b></td>

                                    </tr>  
                                </thead>  
                                <tbody>
                                    <?php
                                    foreach ($lista as $com) {
                                        ?>
                                        <tr>
                                            <td> <?php echo $com->NombreC ?></td>
                                            <td> <?php if($com->Estatus=='si'){ echo 'Activa';}else{ echo 'Desactivada';} ?></td>
                                            <td> <div class="center " >
                                                    <?php if ($com->Estatus == 'si'){?>
                                                    <form method="post" action="#">

                                                        <button class="btn btn-yellow btn-sm" type="submit" value="Modificar">
                                                            <input name="identificador" type="hidden" value="<?php echo $com->idComunidad ?>">
                                                            <input name="nombre" type="hidden" value="<?php echo $com->NombreC ?>">
                                                            <i class="ace-icon fa fa-pencil icon-only"></i>
                                                            Modificar
                                                        </button>

                                                    </form>
                                                    <br>
  
                                                        
                                                    
                                                              <?php echo form_open('Orden/eliminarComunidad') ?>

                                                    <button class="btn btn-danger btn-sm" type="submit" value="Eliminar">
                                                        <input name="identificador" type="hidden" value="<?php echo $com->idComunidad ?>">
                                                        <i class="ace-icon fa fa-trash icon-only"></i>
                                                        Eliminar
                                                    </button>

                                                    </form>
                                                   <?php
                                    }else{
                                    ?>
                                       <?php echo form_open('Orden/activarComunidad') ?>
                                                <input name="identificador" type="hidden" value="<?php echo $com->idComunidad ?>">
                                                <input class="btn btn-danger" type="submit" value="Activar">
                                                </form>
                                                     
                                                  
                                                
                                                </div>
                                                
                                            </td>
                                                 <?php
                                    }
                                    ?>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                </tbody>
                            </table>





                        </div>


                    </div><!-- /.col -->

                    <!-- contenidooooooo -->
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->


