
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
                    <?php
                    if (isset($resultado)) {
                        foreach ($resultado as $com) {
                            
                        
} }
                     echo form_open('Abono/abono') ?>
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Folio de la orden Funeral </h2><input type="text" readonly name="folio" value="<?php echo $com->Folio;?>"  class="form-control">
                        </div>
                        <div class="col-md-4">
                            <h2 class="center">Sucursal</h2><input type="text" value="<?php
                            foreach ($su as $s) {
                                echo $s->NombreS;
                            }
                            ?>" disabled class="form-control">
                            <input type="hidden"  name="sucursal" value="<?php
                            foreach ($su as $s) {
                                echo $s->idSucursal;
                            }
                            ?>">

                        </div>
                        <div class="col-md-4" >
                            <h2 class="center">Fecha</h2><input type="date" name="fecha" value="<?php
                            echo date('Y-m-d');
                            ?>" disabled  class="form-control">                    
                        </div>
                    </div>  
                    <br> 
                    <div class="row"> 
                        <div class="col-md-4">
                            <label class="control-label"><h3><b>Nombre Solicitante: </b></h3></label><h5> <?php echo $com->NombreSolicitante . " " . $com->ApellidoSolPa . " " . $com->ApellidoSolMa ?></h5>
                            <label class="control-label"><h3><b>Nombre Finado: </b></h3></label><h5> <?php echo $com->NombreFinado . " " . $com->ApellidoFinPa . " " . $com->ApellidoFinMa ?></h5>
                            <label class="control-label"><h3><b>Total: </b></h3></label><h5> <?php echo $com->Total ?></h5>
                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">

                        </div>

                    </div> 
                    <br>
                    
                    
                    
                    <div class="row"> 
                <?php if($com->Restante==0){
                    
                } else{?>
                    
               

                        <div class="col-md-4">
                            <label class="control-label">Abono</label>
                            <input name="abono" type="number" min="1" max="<?php echo $com->Restante?>" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Folio del Recibo</label>
                            <input name="fore" type="number" min="1"  class="form-control">
                        </div>

                        <input type="hidden" name="saldo" value="<?php echo $com->Restante
                                    ?>"  class="form-control"> 
                         <div class="col-md-4">
                        <button class="btn btn-white btn-success btn-bold" type="submit" value="Abono">

                            <i class="ace-icon glyphicon glyphicon-usd bigger-120 green"></i>
                            Abono
                        </button>
                    </div>
                    <?php  }?>
                    </div> 
                    <div class="space-6"></div>
                    <div class="space-6"></div>
                    <div class="row ">
                        <div class="col-md-12">
                            <h2 class="center"><b>Pagos realizados</b></h2>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td>Folio Recibo </td>
                                        <td>Fecha</td>
                                        <td>  Cantidad</td>
                                        <td> Sucursal</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $resultado = 0;
                                    if (isset($res)) {
                                        foreach ($res as $com1) {
                                            $resultado += $com1->Cantidad;
                                            ?>

                                            <tr>
                                                <td><?php echo $com1->NoRecibo ?></td> 
                                                <td><?php echo $com1->Fecha ?></td> 
                                                <td>$ <?php echo $com1->Cantidad ?></td> 
                                                <td> <?php echo $com1->NombreS?></td>
                                            </tr>


                                            <?php
                                        }
                                    }
                                    ?> 
                                </tbody>
                            </table>


                        </div> 
                    </div>
                    <div class="space-6"></div>
                    <div class="space-6"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 center">
                                <h3>Saldo</h3>
                                <label class="control-label">$ <?php echo $com->Total - $resultado ?></label>
                                

                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                   

                    </form>
                    
                    
                    
                    

                    <!-- contenidooooooo -->
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

