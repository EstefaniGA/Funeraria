
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


                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-md-2  "> 

                        </div>
                        <div class="col-md-12  ">

                            <?php echo form_open('Orden/modificarOrden') ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <h2>Folio</h2><input value="<?php
                                    echo $modificar->Folio;
                                    ?>" disabled class="form-control">
                                    <input  name="identificador" type="hidden" value="<?php
                                    echo $modificar->Folio;
                                    ?>"  class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <h2>Sucursal</h2><input type="text" value="<?php
                                    echo $modificar->NombreS;
                                    ?>" disabled class="form-control">
                                    <input  name="sucursal" type="hidden"  value="<?php
                                    echo $modificar->idSucursal;
                                    ?>">

                                </div>
                                <div class="col-md-4">
                                    <h2>Fecha</h2><input type="text" name="fecha" value="<?php
                                    echo $modificar->FechaOrden;
                                    ?>" disabled class="form-control">
                                                        
                                </div>
                            </div>  
                            <div class="row">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="ace-icon fa fa-plus-square-o bigger-120 black"></i>
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
                                                        <input name="nombrefinado" type="text" placeholder="Nombre" class="form-control" value="<?php
                                                        echo $modificar->NombreFinado;
                                                        ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Domicilio</label> 
                                                        <input name="domiciliofinado" type="text" class="form-control" value="<?php
                                                        echo $modificar->DomicilioFinado;
                                                        ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Ciudad</label> 
                                                        <input name="ciudadadfinado" type="text" class="form-control" value="<?php
                                                        echo $modificar->CiudadFinado;
                                                        ?>" >

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Fecha de nacimiento</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input name="fechafinado" type="date" class="form-control" value="<?php echo $modificar->FechaNacimiento; ?>" >
                                                        </div>


                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Edad</label> 
                                                        <input name="edadfinado" type="number" class="form-control" value="<?php
                                                        echo $modificar->Edad;
                                                        ?>" >

                                                    </div>
                                                </div>  
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <input name="apellidopafinado" type="text" placeholder="Apellido Paterno" class="form-control" value="<?php
                                                        echo $modificar->ApellidoFinPa;
                                                        ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Número</label> 
                                                        <input name="numerofinado" type="number" class="form-control" value="<?php
                                                        echo $modificar->NumeroFinado;
                                                        ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Colonia</label> 
                                                        <input name="coloniafinado" type="text" class="form-control"value="<?php
                                                        echo $modificar->ColoniaFinado;
                                                        ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Estado Civil</label> 
                                                        <select class="form-control" name="estadociv" >
                                                            <option value=""></option>
                                                            <option value="Casado" <?php
                                                            if ($modificar->EstadoCivil == "Casado") {
                                                                echo "selected";
                                                            }
                                                            ?> >Casado</option>
                                                            <option value="Soltero" <?php
                                                            if ($modificar->EstadoCivil == "Soltero") {
                                                                echo "selected";
                                                            }
                                                            ?> >Soltero</option>
                                                            <option value="Divorciado"<?php
                                                                    if ($modificar->EstadoCivil == "Divorciado") {
                                                                        echo "selected";
                                                                    }
                                                                    ?> >Divorciado</option>
                                                            <option value="Viudo" <?php
                                                                    if ($modificar->EstadoCivil == "Viudo") {
                                                                        echo "selected";
                                                                    }
                                                                    ?> >Viudo</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Escolaridad</label> 
                                                         <select class="form-control" name="escolaridadfinado">
                                           <option value=""></option>
                                           <option value="Ninguno"<?php if($modificar->Escolaridad =="Ninguno" ){echo "selected";}?> >Ninguno</option>
                                           <option value="Primaria"<?php if($modificar->Escolaridad =="Primaria" ){echo "selected";}?>>Primaria</option>
                                           <option value="Secundaria"<?php if($modificar->Escolaridad =="Secundaria" ){echo "selected";}?>>Secundaria</option>
                                           <option value="Preparatoria o bachillerato" <?php if($modificar->Escolaridad =="Preparatoria o bachillerato" ){echo "selected";}?>>Preparatoria o bachillerato</option>
                                           <option value="Licenciatura"<?php if($modificar->Escolaridad =="Licenciatura" ){echo "selected";}?>>Licenciatura</option>
                                           <option value="Posgrado" <?php if($modificar->Escolaridad =="Posgrado" ){echo "selected";}?>>Posgrado</option>
                                       </select>
                                                    
                                                    </div>
                                                </div> 
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <input name="apellidomafinado" type="text" placeholder="Apellido Materno" class="form-control"value="<?php
                                                               echo $modificar->ApellidoFinMa;
                                                        ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Nacionalidad</label> 
                                                        <input name="nacionalidadfinado" type="text" class="form-control"value="<?php
                                                               echo $modificar->Nacionalidad;
                                                               ?>" >

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Ocupación</label> 
                                                        <input name="ocupacionfinado" type="text" class="form-control" value="<?php
                                                               echo $modificar->Ocupacion;
                                                               ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Derecho Habiente</label> 
                                                        <input name="derechofinado" type="text" class="form-control" value="<?php
                                                            echo $modificar->DerechoHabiente;
                                                            ?>" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Sexo</label> 
                                                        <select name="sexo" class="form-control" >
                                                            <option value=""></option>
                                                            <option value="Hombre"<?php
                                                                    if ($modificar->Sexo == "Hombre") {
                                                                        echo "selected";
                                                                    }
                                                            ?>>Hombre</option>
                                                            <option value="Mujer"<?php
                                                                    if ($modificar->Sexo == "Mujer") {
                                                                        echo "selected";
                                                                    }
                                                            ?>>Mujer</option>
                                                        </select>

                                                    </div>
                                                    <a data-toggle="collapse" class="btn btn-warning"  data-parent="#accordion" href="#collapse2">
                                                        Siguiente
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                    </a>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><i class="ace-icon fa fa-plus-square-o bigger-120 black"></i>
                                                    <b>Datos del solicitante </b></a>
                                            </h4>


                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body acord">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input name="ids" type="hidden" value="<?php echo $modificar->idSolicitantes ?>" >
                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombresolicitante" type="text" placeholder="Nombre" class="form-control" required value="<?php
                                                                    echo $modificar->NombreSolicitante;
                                                            ?>"  >
                                                    </div>  <?php echo form_error('nombresolicitante'); ?>

                                                    <div class="form-group">
                                                        <label class="control-label">Domicilio</label> 
                                                        <input name="domiciliosolicitante" type="text" required  class="form-control" value="<?php
                                                        echo $modificar->DomicilioSolicitante;
                                                        ?>" >
                                                    </div> <?php echo form_error('domiciliosolicitante'); ?>

                                                    <div class="form-group">
                                       <label class="control-label">Ciudad</label> 
                                                          
                                       <select class="form-control" name="ciudadadsolicitante">
                                      <option ></option>
                                       
                                   
                                <?php foreach ($comu as $com) { ?>
                               
?>
                                        <option value="<?php echo $com->idComunidad ?>"<?php if($modificar->idComunidad ==$com->idComunidad ){ echo "selected";} ?> > <?php echo $com->NombreC ?></option>
                                    <?php } ?>
                                </select>
                                  
<!--                                       <input name="ciudadadsolicitante" required  type="text" class="form-control">-->
                                  </div>
                                                        <?php echo form_error('ciudadsolicitante'); ?>

                                                    <div class="form-group">
                                                        <label class="control-label">Edad</label> 
                                                        <input name="edadsolicitante" type="number" required  class="form-control" value="<?php
                                                               echo $modificar->Edad;
                                                        ?>" >

                                                    </div><?php echo form_error('edadsolicitante'); ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidopasolicitante" required  type="text" placeholder="Apellido Paterno" class="form-control" value="<?php echo $modificar->ApellidoSolPa; ?>" >
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
                                                    </div><?php echo form_error('estadociv'); ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidomasolicitante" type="text" placeholder="Apellido Materno" class="form-control" required value="<?php echo $modificar->ApellidoSolMa; ?>">
                                                    </div> <?php echo form_error('apellidomasolicitante'); ?>
                                                    <div class="form-group">
                                                        <label class="control-label">Parentesco</label> 
                                                        <select class="form-control" name="parentesco">
                                                            <option value=""></option>
                                                            <option value="Hijo" <?php
                                                                    if ($modificar->Parentesco == "Hijo") {
                                                                        echo "selected";
                                                                    }
                                                            ?>>Hijo</option>
                                                            <option value="Hija" <?php
                                                                    if ($modificar->Parentesco == "Hija") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Hija</option>
                                                            <option value="Madre"<?php
                                                            if ($modificar->Parentesco == "Madre") {
                                                                echo "selected";
                                                            }
                                                                    ?>>Madre</option>
                                                            <option value="Padre"<?php
                                                            if ($modificar->Parentesco == "Padre") {
                                                                echo "selected";
                                                            }
                                                                    ?>>Padre</option>
                                                            <option value="Hermano" <?php
                                                            if ($modificar->Parentesco == "Hermano") {
                                                                echo "selected";
                                                            }
                                                                    ?>>Hermano</option>
                                                            <option value="Hermana"<?php
                                                            if ($modificar->Parentesco == "Hermana") {
                                                                echo "selected";
                                                            }
                                                                    ?>>Hermana</option>
                                                            <option value="Suegro" <?php
                                                            if ($modificar->Parentesco == "Suegro") {
                                                                echo "selected";
                                                            }
                                                                    ?>>Suegro</option>
                                                            <option value="Suegra"<?php
                                                            if ($modificar->Parentesco == "Suegra") {
                                                                echo "selected";
                                                            }
                                                                    ?>>Suegra</option>
                                                            <option value="Primo" <?php
                                                            if ($modificar->Parentesco == "Primo") {
                                                                echo "selected";
                                                            }
                                                                    ?>>Primo</option>
                                                            <option value="Prima" <?php
                                                            if ($modificar->Parentesco == "Prima") {
                                                                echo "selected";
                                                            }
                                                                    ?>>Prima</option>

                                                        </select>
                                                    </div>

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
                                                    </div><?php echo form_error('personasolicitante'); ?>
                                                    <a data-toggle="collapse" class="btn btn-warning"  data-parent="#accordion" href="#collapse3"> Siguiente
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                    </a>
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
                                                        <input name="lugardifuncion" type="text"  class="form-control" value="<?php echo $modificar->LugarDifuncion; ?>">
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label">Hora</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-clock-o bigger-110"></i>
                                                            </span>
                                                            <input name="horadifuncion" type="time"  class="form-control" value="<?php echo $modificar->Hora; ?>">
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
                                                            <input name="fechadifuncion" type="date" placeholder="Nombre" class="form-control" value="<?php echo $modificar->Fecha; ?>">
                                                        </div>

                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label">Causas</label> 
                                                        <input name="causasdifuncion" type="text"  class="form-control" value="<?php echo $modificar->Causa; ?>">
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
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                                    <i class="ace-icon fa fa-plus-square-o bigger-120 black"></i>
                                                    <b> Datos de la Velación Inhumación y/o Cremación</b></a>
                                            </h4>

                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse">
                                            <div class="panel-body acord">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Lugar de la velación</label> 
                                                        <input name="lugarvelacion" type="text" class="form-control" value="<?php echo $modificar->LugarVelacion; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Hora de la misa</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-clock-o bigger-110"></i>
                                                            </span>
                                                            <input name="horavelacion" type="time" class="form-control" value="<?php echo $modificar->HoraMisa; ?>">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Fecha</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input name="fechavelacion" type="date" class="form-control" value="<?php echo $modificar->FechaMisa; ?>">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Iglesia</label> 
                                                        <input name="iglesiavelacion" type="text" class="form-control" value="<?php echo $modificar->Iglesia; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Hora del sepelio</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-clock-o bigger-110"></i>
                                                            </span>
                                                            <input name="horasepvelacion" type="time" class="form-control" value="<?php echo $modificar->HoraSepelio; ?>">
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
                                                        <input name="nombreexhumar" placeholder="Nombre" type="text" class="form-control" value="<?php echo $modificar->NombreFinExhumar; ?>">
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Panteón</label> 
                                                        <input name="panteonvelacion" type="text" class="form-control" value="<?php echo $modificar->Panteon; ?>">
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label">Ubicación</label> 
                                                        <input name="ubicacionvelacion" type="text" class="form-control" value="<?php echo $modificar->Ubicacion; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Perpetuidad</label> 
                                                        <select class="form-control" name="perpetuidad">
                                                            <option value=""></option>
                                                            <option value="No" <?php if ($modificar->Perpetuidad == "No") {
                                                                echo "selected";
                                                            } ?>>No</option>
                                                            <option value="Si" <?php if ($modificar->Perpetuidad == "Si") {
                                                                echo "selected";
                                                            } ?>>Si</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Temporal</label> 
                                                        <input name="temporalvelacion" type="text" class="form-control" value="<?php echo $modificar->Temporal; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">&nbsp; </label> 
                                                        <input name="apellidopaexhumar" type="text" placeholder="Apellido paterno" class="form-control" value="<?php echo $modificar->ApellidoPaterno; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="">fecha de la difunción </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-calendar bigger-110"></i>
                                                            </span>
                                                            <input name="fechadifexhumar" type="date" class="form-control" value="<?php echo $modificar->FechaDifuncionExhumar; ?>">
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


                                                        <input name="apellidomaexhumar" type="text" placeholder="Apellido Materno" class="form-control" value="<?php echo $modificar->ApellidoMaterno; ?>" >
                                                    </div>
                                                    <a data-toggle="collapse" class="btn btn-warning"  data-parent="#accordion" href="#collapse5"> Siguiente
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                    </a>
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
                                        <div id="collapse5" class="panel-collapse collapse" ng-app="">
                                            <div class="panel-body acord">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Ataud </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="ataudempresa" type="number" placeholder="$" class="form-control" value="<?php echo $modificar->Ataud; ?>">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Modelo </label> 
                                                        <input name="modeloempresa" type="text"  class="form-control"value="<?php echo $modificar->ModeloAtaud; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Capillas </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="capillasempresa" type="number"  class="form-control"value="<?php echo $modificar->Capillas; ?>">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Embalsamada </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="embalsamadaempresa" type="number"  class="form-control" value="<?php echo $modificar->Embalsamado; ?>">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">A domicilio </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="adomicilioempresa" type="number" class="form-control" value="<?php echo $modificar->Adomicilio; ?>">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Carroza </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="carrozaempresa" type="number"  class="form-control" value="<?php echo $modificar->Carroza; ?>">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Traslado </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="trasladoempresa" type="number" placeholder="$" class="form-control" value="<?php
                                                            echo $modificar->Traslado;
                                                            ?>">
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
                                                            <input name="urnaempresa" type="number" placeholder="$" class="form-control" value="<?php
                                                                   echo $modificar->Urna;
                                                            ?>">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Modelo </label> 
                                                        <input name="modelouempresa" type="text"  class="form-control" value="<?php
                                                                   echo $modificar->ModeloUrna;
                                                            ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Cremación </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="cremacionempresa" type="number" placeholder="$" class="form-control" value="<?php
                                                                   echo $modificar->Cremacion;
                                                            ?>">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Otros gastos </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="otrosgasempresa" type="number" placeholder="$" class="form-control" value="<?php
                                                                   echo $modificar->OtrosGastos;
                                                            ?>">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Lugar de cremación </label>

                                                        <input name="lugarcremaempresa" type="text"  class="form-control" value="<?php
                                                                   echo $modificar->LugarCremacion;
                                                            ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Sub-Total </label> 
                                                        <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                        </span>
                                                        <input name="subtotalempresa" type="number" required placeholder="$" class="form-control" value="<?php
                                                                   echo $modificar->SubTotal;
                                                            ?>">
                                                    </div><?php echo form_error('subtotalempresa'); ?>
                                                    <div class="form-group">
                                                        <label class="control-label">Impuestos </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="impuestosempresa" type="number"  class="form-control" value="<?php echo $modificar->Impuestos; ?>">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Certificado médico </label> 
                                                        <input name="certificadoempresa" type="text"  class="form-control" value="<?php echo $modificar->CertificadoMedico; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Otros </label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="otrosempresa" type="number"  class="form-control" value="<?php echo $modificar->Otros; ?>">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Observaciones </label> 
                                                        <input name="observacionesempresa" type="text"  class="form-control" value="<?php echo $modificar->Observaciones; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp; </label> 
                                                        <label class="control-label">&nbsp; </label>
                                                        <label class="control-label">&nbsp; </label> <br> 
                                                        <label class="control-label">&nbsp; </label> 

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Total </label> 
                                                        <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                        </span>
                                                        <input name="totalempresa" type="number"  required  class="form-control" value="<?php echo $modificar->Total; ?>"> 
                                                    </div><?php echo form_error('totalempresa'); ?>
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
                                                        <label class="control-label">Abono </label> 
                                                        <input  name="idpago" type="hidden" value="<?php echo $modificar->idPagos; ?>" >
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="glyphicon glyphicon-usd bigger-110"></i>
                                                            </span>
                                                            <input name="abono" type="number"  required placeholder="$" class="form-control" value="<?php echo $modificar->Cantidad; ?>"> 
                                                        </div><?php echo form_error('abono'); ?>

                                                    </div>
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
                            </form>


                        </div>
                    </div><!-- /.col -->

                    <!-- contenidooooooo -->
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

