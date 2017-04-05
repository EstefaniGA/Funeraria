
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
                    <div class="main-content ">
                        <div class="row ">
                            <div class="col-sm-10 col-sm-offset-1">
                                
                                    <div class="center  ">
                                        <h1>
                                            <i class="ace-icon fa glyphicon-asterisk "></i>
                                            <span class="black">Usuarios registrados </span>
                                            <span class="white" id="id-text2"></span>
                                            <i class="ace-icon fa glyphicon-asterisk "></i>
                                        </h1>
                                        <h4 class="blue" id="id-company-text"> </h4>
                                    </div>

                                    <div class="space-6"></div>   
                                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <td>Nombre</td>
                                                                <td>Contraseña</td>
                                                                <td>Privilegios</td>
                                                                <td>Estatus</td>
                                                                <td>Opciones</td>

                                                            </tr>  
                                                        </thead>  
                                                        <tbody>
                                                            <?php
                                                            foreach ($lista as $com) {
                                                                if ($com->Privilegios != 0) {
                                                                    ?>
                                                                    <tr>
                                                                        <td> <?php echo $com->Nombre ?></td>
                                                                        <td> <?php echo $com->Contraseña ?></td>
                                                                        <td> <?php if ($com->Privilegios ==1 ){ echo "administrador";}else{ echo "Usuario";} ?></td>
                                                                        <td> <?php if($com->Estatus=='si'){ echo 'Usuario activo';}else{ echo 'Usuario desactivado';} ?></td>
                                                                        <td class="center">
                                                                                
                                                                                <?php if ($com->Estatus=='si'){
                                                                                    
                                                                                
                                                                                echo form_open('Show/modificarUsuario') ?>

                                                                                <button class="btn btn-yellow btn-sm" type="submit"  value="Modificar">
                                                                                    <input name="identificador" type="hidden" value="<?php echo $com->idUsuarios ?>">
                                                                                    <i class="ace-icon fa fa-pencil icon-only"></i>
                                                                                    Modificar
                                                                                </button>

                                                                                </form>
                                                                                <div class="space-6"></div>

                                                                                <?php echo form_open('Usuario/eliminarUsuario') ?>

                                                                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Desea eliminar el usuario?')" value="Eliminar">
                                                                                    <input name="identificador" type="hidden" value="<?php echo $com->idUsuarios ?>">
                                                                                    <i class="ace-icon fa fa-trash icon-only"></i>
                                                                                    Eliminar
                                                                                </button>


                                                                                </form>
                                                                           <?php   } else{?>
                                                                                <?php echo form_open('Usuario/activarUsuario') ?>
                                                            <input name="identificador" type="hidden" value="<?php echo $com->idUsuarios ?>">
                                                            <input class="btn btn-danger" type="submit" onclick="return confirm('Desea activar el usuario?')" value="Activar">
                                                            </form>
                                                                        </td>
                                                                     
                                                                     
                                                                        <?php }?>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>

                                                        </tbody>
                                                    </table>                                               
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.main-content -->
                    <!-- contenidooooooo -->
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

