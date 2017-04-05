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
                                    <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
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


                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-md-2  "> 

                        </div>
                        <div class="col-md-12  ">

                            <?php echo form_open('Orden/modificarOrdenComunidad') ?>    
                            <div class="row">
                                <div class="col-md-4">
                                    <h2>Folio</h2><input   value="<?php
                                    echo $modificar->idApoyo;
                                    ?>" disabled class="form-control">
                                    <input  name="folio" type="hidden" value="<?php
                                    echo $modificar->idApoyo;
                                    ?>"  class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <h2>Sucursal</h2><input type="text" value="<?php
                                    echo $modificar->NombreS;
                                    ?>" disabled class="form-control">
                                    <input type="hidden" name="sucursal" value="<?php
                                    echo $modificar->idSucursal;
                                    ?>">

                                </div>
                                <div class="col-md-4">
                                    <h2>Fecha</h2><input type="text" name="fecha" value="<?php
                                    echo $modificar->Fecha;
                                    ?>" disabled class="form-control">                    
                                </div>
                            </div> 
                            <div class="row">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default trans">
                                        <div class="panel-heading ">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                    <i class="ace-icon fa fa-plus-square-o bigger-120 black"></i>
                                                    <b>
                                                        Datos del solicitante</b></a>
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse">
                                            <div class="panel-body acord">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input name="ids" type="hidden" value="<?php echo $modificar->idSolicitantes ?>" >
                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombresolicitante" type="text" placeholder="Nombre" class="form-control" required value="<?php
                                                        echo $modificar->NombreSolicitante;
                                                        ?>"  >
                                                    </div>  
                                                    <?php echo form_error('nombresolicitante'); ?>

                                                    <div class="form-group">
                                                        <label class="control-label">Domicilio</label> 
                                                        <input name="domiciliosolicitante" type="text" required  class="form-control" value="<?php
                                                        echo $modificar->DomicilioSolicitante;
                                                        ?>" >
                                                    </div> 
                                                    <?php echo form_error('domiciliosolicitante'); ?>

                                                    <div class="form-group">
                                                        <label class="control-label">Ciudad</label> 
                                                        <select class="form-control" name="ciudadadsolicitante">
                                                            <option ></option>


                                                            <?php foreach ($comu as $com) { ?>

                                                                ?>
                                                                <option value="<?php echo $com->idComunidad ?>"<?php
                                                                if ($modificar->idComunidad == $com->idComunidad) {
                                                                    echo "selected";
                                                                }
                                                                ?> > <?php echo $com->NombreC ?></option>
                                                    <?php } ?>
                                                        </select>
                                                    </div>
<?php echo form_error('ciudadsolicitante'); ?>

                                                    <div class="form-group">
                                                        <label class="control-label">Edad</label> 
                                                        <input name="edadsolicitante" type="number" required  class="form-control" value="<?php
echo $modificar->Edad;
?>" >

                                                    </div>
<?php echo form_error('edadsolicitante'); ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidopasolicitante" required  type="text" placeholder="Apellido Paterno" class="form-control" value="<?php
echo $modificar->ApellidoSolPa;
?>" >
                                                    </div> 
<?php echo form_error('apellidopasolicitante'); ?>
                                                    <div class="form-group">
                                                        <label class="control-label">Número</label> 
                                                        <input name="numerosolicitante" type="number" class="form-control" required value="<?php
echo $modificar->NumeroSolicitante;
?>" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Colonia</label> 
                                                        <input name="coloniasolicitante" type="text" class="form-control" required value="<?php
echo $modificar->ColoniaSolicitante;
?>" >
                                                    </div>
<?php echo form_error('coloniasolicitante'); ?>
                                                    <div class="form-group">
                                                        <label class="control-label">Estado Civil</label> 
                                                        <select class="form-control" name="estadocivs" required >
                                                            <option value=""></option>
                                                            <option value="Casado" <?php
                                                            if ($modificar->EstadoCivilSolicitante == "Casado") {
                                                                echo "selected";
                                                            }
                                                            ?> >Casado</option>
                                                            <option value="Soltero" <?php
                                                            if ($modificar->EstadoCivilSolicitante == "Soltero") {
                                                                echo "selected";
                                                            }
                                                            ?> >Soltero</option>
                                                            <option value="Divorciado"<?php
                                                            if ($modificar->EstadoCivilSolicitante == "Divorciado") {
                                                                echo "selected";
                                                            }
                                                            ?> >Divorciado</option>
                                                            <option value="Viudo" <?php
                                                            if ($modificar->EstadoCivilSolicitante == "Viudo") {
                                                                echo "selected";
                                                            }
                                                            ?> >Viudo</option>
                                                        </select>
                                                    </div>
<?php echo form_error('estadociv'); ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidomasolicitante" type="text" placeholder="Apellido Materno" class="form-control" required value="<?php
echo $modificar->ApellidoSolMa;
?>">
                                                    </div> 
<?php echo form_error('apellidomasolicitante'); ?>


                                                    <div class="form-group">
                                                        <label class="control-label">Teléfono</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-phone bigger-110"></i>
                                                            </span>
                                                            <input name="telefonosolicitante" type="number" class="form-control" value="<?php echo $modificar->Telefono; ?>">
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Persona que atendió </label> 
                                                        <input name="personasolicitante" type="text" required disabled class="form-control" value="<?php echo $modificar->Nombre; ?>">

                                                    </div>
<?php echo form_error('personasolicitante'); ?>
                                                    <a data-toggle="collapse" class="btn btn-warning"  data-parent="#accordion" href="#collapse2"> Siguiente
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                    <i class="ace-icon fa fa-plus-square-o bigger-120 black"></i>
                                                    <b>

                                                        Beneficiarios</b></a>
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body acord">
                                                <?php foreach ($modifi as $modi) { ?>
                                                    <div class="col-md-12">
                                                        
                                                        <input name="idbe" type="hidden" value="<?php echo $modi->idBeneficiarios ?>" >
                                                        <div class="col-md-3">

                                                            <div class="form-group">
                                                                <label class="control-label">Nombre</label> 
                                                                <input name="nombreb1" type="text" placeholder="Nombre" value="<?php echo $modi->NombreB; ?>"  class="form-control">
                                                            </div> 

                                                        </div>        
                                                        <div class="col-md-3">

                                                            <div class="form-group">
                                                                <label class="control-label">&nbsp;</label> 
                                                                <input name="apellidopab" type="text" placeholder="Apellido Paterno" value="<?php echo $modi->ApellidoPa; ?>" class="form-control">
                                                            </div> 

                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">&nbsp;</label> 
                                                                <input name="apellidomab" type="text" placeholder="Apellido Materno" value="<?php echo $modi->ApellidoMa; ?>" class="form-control">
                                                            </div>                                                                   
                                                        </div>

                                                        <div class="col-md-3">

                                                            <div class="form-group">
                                                                <label class="control-label">Tipo</label> 

                                                                <select class="form-control" name="tipo">

                                                                    <option></option>
                                                                    <?php foreach ($tipo as $com) { ?>
                                                                        <option value="<?php echo $com->idTipo ?>"<?php if ($modi->idTipo == $com->idTipo) {
                                                                    echo "selected";
                                                                } ?> > <?php echo $com->NombreT ?></option> 
    <?php } ?>
                                                                </select>

        <!--                                       <input name="ciudadadsolicitante" required  type="text" class="form-control">-->
                                                            </div>

                                                        </div>


                                                    </div>
                                                        <?php } ?>



                                                <div class="col-md-12">

                                                    <div class="col-md-12">
                                                        <div class="col-md-4">

                                                        </div>
                                                        <div class="col-md-4">

                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <button class="btn btn-app btn-inverse btn-xs" onclick="return alert('La orden ha sido modificada satisfactoriamente')">
                                                                    <i class="ace-icon fa fa-save bigger-160"></i>
                                                                    Guardar
                                                                </button>
                            <!--                                       <input class="btn btn-sm btn-success btn-block" type="submit" value="Guardar"     class="form-control"> -->
                                                            </div> 
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     
                                </div>
                            </div>
</form> 
</div>
                        </div>


                            <!-- contenidooooooo -->
                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->