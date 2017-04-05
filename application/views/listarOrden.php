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
                            <?php if ($this->session->userdata('privilegios') != 2) { ?>
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="col-md-11"></div>
                                        <div class="col-md-1">
                                            <a href="<?php echo base_url(); ?>index.php/Orden/tuExel"  class="dt-button buttons-print btn btn-white btn-primary btn-bold" tabindex="0" aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-print bigger-110 grey"></i> <span class="hidden">Print</span></span></a>
        <!--                                    <a href="<?php echo base_url(); ?>index.php/Orden/tuExel" class="btn btn-app btn-light btn-xs"><i class="ace-icon fa fa-print bigger-160"></i>Reporte</a>-->
                                        </div>

                                    </div>
                                <?php } ?>
                                <br>

                                <div class="col-sm-10 col-sm-offset-1">

                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td>Folio </td>
                                                <td>Fecha de la Orden </td>

                                                <!-- datos solicitante -->
                                                <td>  Solicitante</td>
                                                <td>  Finado</td>
                                                <td> Total</td> 
                                                <td> Estatus</td>
                                                <td> Opciones</td> 

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
//                                        if($lista !== FALSE) {
                                            foreach ($lista as $com) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $com->Folio ?></td>
                                                    <td><?php echo $com->FechaOrden ?></td>  

                                                    <!-- datos solicitante -->
                                                    <td><?php echo $com->NombreSolicitante . " " . $com->ApellidoSolPa . " " . $com->ApellidoSolMa ?></td>
                                                    <td><?php echo $com->NombreFinado . " " . $com->ApellidoFinPa . " " . $com->ApellidoFinMa ?></td>
                                                    <td><?php echo $com->Total ?></td>
                                                    <td><?php
                                                        if ($com->Estatus == 'no') {
                                                            echo 'cancelado';
                                                        } else {
                                                            echo 'Realizada';
                                                        }
                                                        ?></td>
    <?php if ($com->Estatus == 'si' && $this->session->userdata('privilegios') != 2) { ?>
                                                        <td class="center"><!-- Modificar Orden -->
        <?php echo form_open('Show/modificarOrden') ?>
                                                            <button class="btn btn-yellow btn-sm" type="submit" value="Modificar">
                                                                <input name="identificador" type="hidden"  value="<?php echo $com->Folio ?>"> <i class="ace-icon fa fa-pencil icon-only"></i>
                <!--                                                <input class="btn btn-warning" type="submit" value="Modificar">--> Modificar
                                                            </button>
                                                            </form>
                                                            <br>
                                                            <!-- EliminarOrden-->

        <?php echo form_open('Orden/eliminarOrden') ?>
                                                            <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('¿Desea eliminar la orden?')" value="Eliminar">
                                                                <input name="identificador" type="hidden" value="<?php echo $com->Folio ?>"> <i class="ace-icon fa fa-trash icon-only"></i>
                <!--                                                <input class="btn btn-danger" type="submit" value="Eliminar">--> Eliminar
                                                            </button>
                                                            </form>

                                                        </td>

    <?php } else if ($this->session->userdata('privilegios') != 2) { ?><td class="center">
                                                            <?php echo form_open('Orden/activarOrden') ?>
                                                            <input name="identificador" type="hidden" value="<?php echo $com->Folio ?>">
                                                            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Desea activar la orden?')" value="Activar">
                                                            </form>

                                                <?php } ?></td>
                                                </tr> 
    <?php
}
//                                        }
?>
                                        </tbody>

                                    </table>
                                    <div class="center">
                                        <ul class="pagination"> 
<?php echo $this->pagination->create_links(); ?>  
                                        </ul>
<?php // echo $paginacion;   ?>
                                    </div>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.row -->
                        </div><!-- /.mamin cont -->
                        <!-- contenidooooooo -->
                        <!-- PAGE CONTENT ENDS -->
                    
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->


