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

                            <?php echo form_open('Orden/agregarOrdenSol') ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <h2 class="center">Folio</h2><input type="text" name="folio" value="<?php
                                    foreach ($fol as $fo) {
                                        echo "JP" . $fo->Folio;
                                    }
                                    ?>" disabled class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <h2 class="center">Sucursal</h2><input type="text" value="<?php
                                    foreach ($su as $s) {
                                        echo $s->NombreS;
                                    }
                                    ?>" disabled class="form-control">
                                    <input type="hidden" name="sucursal" value="<?php
                                           foreach ($su as $s) {
                                               echo $s->idSucursal;
                                           }
                                    ?>">

                                </div>
                                <div class="col-md-4">
                                    <h2 class="center">Fecha</h2><input type="text" name="fecha" value="<?php
                                    echo date('Y-m-d');
                                    ?>" disabled class="form-control">  
                                    <input type="text" hidden="" name="fechabono" value="<?php
                                    echo date('Y-m-d');
                                    ?>" > 
                                </div>
                            </div>  
                            <div class="row">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                              <i class="ace-icon fa fa-plus-square-o bigger-120 black"></i>
                          <b>Datos del Finado</b></a>
                        </h4>

                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse in ">
                                            <div class="panel-body acord">
                                                <input type="checkbox" name="finado" value="1"> 
                                                <label class="control-label">Finado</label> 
                                                <br> 

                                                <div class="col-md-4">

                                                    <div class="form-group">

                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombrefinado" type="text" placeholder="Nombre" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Domicilio</label> 
                                                        <input name="domiciliofinado" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Ciudad</label> 
                                                        <input name="ciudadadfinado" type="text" class="form-control">

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Fecha de nacimiento</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input name="fechafinado" type="date" class="form-control">
                                                        </div>


                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Edad</label> 
                                                        <input name="edadfinado" type="number" class="form-control">

                                                    </div>
                                                </div>  
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <input name="apellidopafinado" type="text" placeholder="Apellido Paterno" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Número</label> 
                                                        <input name="numerofinado" type="number" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Colonia</label> 
                                                        <input name="coloniafinado" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Estado Civil</label> 
                                                        <select class="form-control" name="estadociv">
                                                            <option value=""></option>
                                                            <option value="Casado">Casado</option>
                                                            <option value="Soltero">Soltero</option>
                                                            <option value="Divorciado">Divorciado</option>
                                                            <option value="Viudo">Viudo</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Escolaridad</label> 
                                                        <input name="escolaridadfinado" type="text" class="form-control">
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <input name="apellidomafinado" type="text" placeholder="Apellido Materno" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Nacionalidad</label> 
                                                        <input name="nacionalidadfinado" type="text" class="form-control">

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Ocupación</label> 
                                                        <input name="ocupacionfinado" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Derecho Habiente</label> 
                                                        <input name="derechofinado" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Sexo</label> 
                                                        <select name="sexo" class="form-control">
                                                            <option value=""></option>
                                                            <option value="Hombre">Hombre</option>
                                                            <option value="Mujer">Mujer</option>
                                                        </select>

                                                    </div>
                                                    <a data-toggle="collapse" class="btn btn-warning"  data-parent="#accordion" href="#collapse2"> Siguiente
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i></a>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                   <i class="ace-icon fa fa-plus-square-o bigger-120 black"></i>
                          <b>Datos del solicitante</b></a>
                        </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body acord">
                                                <div class="col-md-4">
                                                    <input name="ids" value="<?php echo $resultado->idSolicitantes ?>" >
                                                    <div class="form-group">
                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombresolicitante" type="text" placeholder="Nombre" class="form-control" required value="<?php echo $resultado->NombreSolicitante; ?>" >
                                                    </div>  
                                                        <?php echo form_error('nombresolicitante'); ?>

                                                    <div class="form-group">
                                                        <label class="control-label">Domicilio</label> 
                                                        <input name="domiciliosolicitante" type="text" required value="<?php
                                                        echo $resultado->DomicilioSolicitante;
                                                        ?>"  class="form-control">
                                                    </div> 
                                                        <?php echo form_error('domiciliosolicitante'); ?>

                                                    <div class="form-group">
                                                        <label class="control-label">Ciudad</label> 
                                                         <select class="form-control" name="ciudadadsolicitante">
                                      <option ></option>
                                       
                                   
                                <?php foreach ($comu as $com) { ?>
                               
?>
                                        <option value="<?php echo $com->idComunidad ?>"<?php if($resultado->idComunidad ==$com->idComunidad ){ echo "selected";} ?> > <?php echo $com->NombreC ?></option>
                                    <?php } ?>
                                </select>
                                                    </div>
                                                        <?php echo form_error('ciudadsolicitante'); ?>

                                                    <div class="form-group">
                                                        <label class="control-label">Edad</label> 
                                                        <input name="edadsolicitante" type="number" required  value="<?php
                                                        echo $resultado->Edad;
                                                        ?>" class="form-control">

                                                    </div>
                                                        <?php echo form_error('edadsolicitante'); ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidopasolicitante" required value="<?php
                                                        echo $resultado->ApellidoSolPa;
                                                        ?>"  type="text" placeholder="Apellido Paterno" class="form-control">
                                                    </div> 
                                                               <?php echo form_error('apellidopasolicitante'); ?>
                                                    <div class="form-group">
                                                        <label class="control-label">Número</label> 
                                                        <input name="numerosolicitante" type="number" class="form-control" value="<?php
                                                               echo $resultado->NumeroSolicitante;
                                                               ?>" required >
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Colonia</label> 
                                                        <input name="coloniasolicitante" type="text" class="form-control" value="<?php
                                                               echo $resultado->ColoniaSolicitante;
                                                               ?>"  required >
                                                    </div>
<?php echo form_error('coloniasolicitante'); ?>
                                                    <div class="form-group">
                                                        <label class="control-label">Estado Civil</label> 
                                                        <select class="form-control" name="estadocivs" required >
                                                            <option value=""></option>
                                                            <option value="Casado" <?php if ($resultado->EstadoCivilSolicitante == "Casado") {
    echo "selected";
} ?> >Casado</option>
                                                            <option value="Soltero" <?php if ($resultado->EstadoCivilSolicitante == "Soltero") {
    echo "selected";
} ?> >Soltero</option>
                                                            <option value="Divorciado"<?php if ($resultado->EstadoCivilSolicitante == "Divorciado") {
    echo "selected";
} ?> >Divorciado</option>
                                                            <option value="Viudo" <?php if ($resultado->EstadoCivilSolicitante == "Viudo") {
    echo "selected";
} ?> >Viudo</option>
                                                        </select>
                                                    </div>
<?php echo form_error('estadociv'); ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidomasolicitante" type="text" placeholder="Apellido Materno" class="form-control" value="<?php echo $resultado->ApellidoSolMa; ?>" required >
                                                    </div> 
<?php echo form_error('apellidomasolicitante'); ?>
                                                    <div class="form-group">
                                                        <label class="control-label">Parentesco</label> 
                                                        <select class="form-control" name="parentesco">
                                                            <option value=""></option>
                                           <option value="Hijo">Hijo</option>
                                           <option value="Hija">Hija</option>
                                           <option value="Madre">Madre</option>
                                           <option value="Padre">Padre</option>
                                           <option value="Hermano">Hermano</option>
                                           <option value="Hermana">Hermana</option>
                                           <option value="Suegro">Suegro</option>
                                           <option value="Suegra">Suegra</option>
                                           <option value="Primo">Primo</option>
                                            <option value="Prima">Prima</option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Teléfono</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-phone bigger-110"></i>
                                                            </span>
                                                            <input name="telefonosolicitante" type="number" class="form-control" value="<?php echo $resultado->Telefono; ?>">
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Persona que atendió </label> 
                                                        <input name="personasolicitante" type="hidden"  class="form-control" value="<?php echo $idAtend; ?>">
                                                        <input type="text"  class="form-control" disabled value="<?php echo $nom; ?>">

                                                    </div>
<?php echo form_error('personasolicitante'); ?>
                                                    <a data-toggle="collapse" class="btn btn-warning"  data-parent="#accordion" href="#collapse3"> Siguiente
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                                   <i class="ace-icon fa fa-plus-square-o bigger-120 black"></i>
                          <b>Datos de la defunción</b></a>
                        </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="panel-body acord">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Lugar de la defunción</label> 
                                                        <input name="lugardifuncion" type="text"  class="form-control">
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label">Hora</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-clock-o bigger-110"></i>
                                                            </span>
                                                            <input name="horadifuncion" id="date-timepicker1" type="time"  class="form-control">
                                                        </div>
                                                    </div>  
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Fecha</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input name="fechadifuncion" type="date" class="form-control">
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label">Causas</label> 
                                                        <input name="causasdifuncion" type="text"  class="form-control">
                                                    </div>
                                                    <div class="col-sm-4">

                                                    </div>
                                                    <div class="col-sm-8">
                                                        <a data-toggle="collapse" class="btn btn-warning"  data-parent="#accordion" href="#collapse4"> Siguiente
                                                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                        </a>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><i class="ace-icon fa fa-plus-square-o bigger-120 black"></i>
                        <b>  Datos de la Velación Inhumación y/o Cremación</b></a>
                        </h4>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse">
                                            <div class="panel-body acord">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Lugar de la velación</label> 
                                                        <input name="lugarvelacion" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Hora de la misa</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-clock-o bigger-110"></i>
                                                            </span>
                                                            <input name="horavelacion" type="time" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Fecha</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input name="fechavelacion" type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Iglesia</label> 
                                                        <input name="iglesiavelacion" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Hora del sepelio</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-clock-o bigger-110"></i>
                                                            </span>
                                                            <input name="horasepvelacion" type="time" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Nombre del finado a exhumar</label> 
                                                        <input name="nombreexhumar" placeholder="Nombre" type="text" class="form-control">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Panteón</label> 
                                                        <input name="panteonvelacion" type="text" class="form-control">
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label">Ubicación</label> 
                                                        <input name="ubicacionvelacion" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Perpetuidad</label> 
                                                        <select class="form-control" name="perpetuidad">
                                                            <option value=""></option>
                                                            <option value="Si">No</option>
                                                            <option value="No">Si</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Temporal</label> 
                                                        <input name="temporalvelacion" type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">&nbsp; </label> 
                                                        <input name="apellidopaexhumar" type="text" placeholder="Apellido paterno" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">fecha de la difunción </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input name="fechadifexhumar" type="date" class="form-control">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 


                                                        <input name="apellidomaexhumar" type="text" placeholder="Apellido Materno" class="form-control">
                                                    </div>
                                                    <a data-toggle="collapse" class="btn btn-warning"  data-parent="#accordion" href="#collapse5"> Siguiente
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                  
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                               <i class="ace-icon fa fa-plus-square-o bigger-120 black"></i>
                              <b>Servicios que otorga la empresa</b></a>
                        </h4>
                                        </div>
                                        <div id="collapse5" class="panel-collapse collapse "ng-app="">
                                            <div class="panel-body acord">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Ataud </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="ataudempresa"ng-model="n1" type="number"  class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Modelo </label> 
                                                        <input name="modeloempresa" type="text"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Capillas </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="capillasempresa" ng-model="n2" type="number"  class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Embalsamada </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="embalsamadaempresa" ng-model="n3" type="number"  class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">A domicilio </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="adomicilioempresa" ng-model="n4" type="number"  class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Carroza </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="carrozaempresa" ng-model="n5" type="number"  class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Traslado </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="trasladoempresa" ng-model="n6" type="number"  class="form-control">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Urna </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="urnaempresa" ng-model="n7" type="number"  class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Modelo </label> 
                                                        <input name="modelouempresa" type="text"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Cremación </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="cremacionempresa" ng-model="n8" type="number"  class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Otros gastos </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="otrosgasempresa" ng-model="n9" type="number"  class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Lugar de cremación </label> 
                                                        <input name="lugarcremaempresa" type="text"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Sub-Total </label> 

                                                        <h4><span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="subtotalempresa" type="number" disabled value={{n1+n2+n3+n4+n5+n6+n7+n8+n9}}  class="form-control"></h4> 
                                                    </div>
<?php echo form_error('subtotalempresa'); ?>
                                                    <div class="form-group">
                                                        <label class="control-label">Impuestos </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="impuestosempresa" ng-model="n10" type="number"  class="form-control">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Certificado médico </label> 
                                                        <input name="certificadoempresa" type="text"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Otros </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="otrosempresa" ng-model="n11" type="number"  class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Observaciones </label>
                                                        <textarea id="form-field-11" name="observacionesempresa" class="autosize-transition form-control"></textarea>
                 <!--                                       <input name="observacionesempresa" type="text"  class="form-control">-->
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label>
                                                        <label class="control-label">&nbsp; </label> <br> 
                                                        <label class="control-label">&nbsp; </label> 

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Total </label>

                                                        <h4> <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="totalempresa" type="number" value={{n1+n2+n3+n4+n5+n6+n7+n8+n9+n10+n11}} disabled class="form-control">   </h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group"><br> 
                                                        <label class="control-label">Abono</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="abono"  type="number"  class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label> 
                                                    </div>
<?php echo form_error('totalempresa'); ?>
                                                    <div class="form-group">
                                                        <button class="btn btn-app btn-inverse btn-xs" onclick="return alert('Orden agregada')">
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
                            </form>
                        </div>
                    </div>

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->