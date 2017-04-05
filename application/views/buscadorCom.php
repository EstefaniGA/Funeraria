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
                    <div class="main-content">

                        <div class="row">

                            <div class="col-sm-10 col-sm-offset-1 center">
                                <?php //$atributos=array('class'=>'form-inline','id'=>'formbuscar');
                                //echo form_open('echo base_url();index.php/Buscador/buscar',$atributos); 
                                ?>

<?php echo form_open('Buscador/buscarCom'); ?>
                                <span class="input-icon">
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                    <input type="text" name="buscar" placeholder="Buscar..." class="nav-search-input" id="nav-search-input"/>
                                </span>

                                <select name="tabla" >

                                    <option value="folio">Folio</option>
                                    <option value="comunidad">Comunidad</option>
                                    <option value="solicitante">Solicitante</option>

                                </select>
                                <button class="btn btn-white btn-info btn-bold" type="submit" value="buscar">
                                    <i class="ace-icon fa fa-search bigger-120 blue"></i>
                                    Buscar
                                </button>


                                </form> 
                                <div class="row">
                                    <div class="col-md-10 ">

                                        <div class="col-md-10">
                                            <div class="space-6"></div>  
                                            <div class="space-6"></div>
                                            <div class="space-6"></div>
                                        </div>
                                        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <td>Folio</td>
                                                    <td>Solicitante</td>
                                                    <td>Comunidad</td>
                                                   
                                                    <td>Opción</td>

                                                </tr>  
                                            </thead>  
                                            <tbody>
                                                <?php
                                                if (isset($resultado)) {


                                                    foreach ($resultado as $com) {
                                                        ?>
                                                        <tr>
                                                            <?php if($com->Estatus == 'no'){ 
                                        }else{?>
                                       
                                                            <?php echo form_open('Show/infBusquedaCom') ?>
                                                            <td>  


                                                                <input name="identificador" type="hidden" value="<?php echo $com->idApoyo?>">
                                                                <button class="btn-link" type="submit"><?php echo $com->idApoyo ?></button>
                                                            </td>  
                                                            </form> 
                                                            
                                                            <td><?php echo $com->NombreSolicitante . " " . $com->ApellidoSolPa . " " . $com->ApellidoSolMa ?> </td>
                                                            
                                                            <td> 
                                                                <?php echo $com->NombreC ?> 
                                                            </td>
                                                            <td>
                                                             <?php echo form_open('Show/nuevaordenApoAFune') ?>
                                                    <button class="btn btn-white btn-warning btn-bold">
                                                        <input name="identificador" type="hidden" value="<?php echo $com->idApoyo ?>">
                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120 orange"></i>
                                                        Orden Funeral
                                                    </button>

                                                    </form>
                                                    </td>
                                                            <?php } ?>
                                                        </tr>
                                                        
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>

                                        </table>

                                    </div>
                                </div>



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
