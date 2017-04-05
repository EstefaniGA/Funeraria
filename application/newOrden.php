<div class="col-md-9 col-sm-9">
        
        <div class="col-md-12">
          
                
               
                 
             <?php echo form_open('Usuarios/addUsu')?>
            <div class="row">
                <div class="col-md-4">
                    <h2>Folio</h2><input type="text" name="folio" value="<?php foreach ($fol as $fo){
                        echo "JP" .$fo->Folio;
                        }?>" disabled class="form-control">
                </div>
                <div class="col-md-4">
                         <h2>Sucursal</h2><input type="text" name="sucursal" value="<?php foreach ($su as $s){
                        echo $s->Nombre;
                        }?>" disabled class="form-control">
                </div>
                <div class="col-md-4">
                        <h2>Fecha</h2><input type="text" name="sucursal" value="<?php 
                          echo date('Y-m-d');
                        ?>" disabled class="form-control">                    
                </div>
            </div>  
                <div class="row">
                 <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                          Datos del Finado</a>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse in">
                          <div class="panel-body">
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
                                           <input name="fechafinado" type="date" class="form-control">

                                  </div>
                                  <div class="form-group">
                                       <label class="control-label">Edad</label> 
                                       <input name="edadfinado" type="text" class="form-control">

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
                   ////           </div> 
                          </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                          Datos del solicitante</a>
                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                          <div class="panel-body">
                              <div class="col-md-4">
                                 <div class="form-group">
                                       <label class="control-label">Nombre</label> 
                                       <input name="nombrefinado" type="text" placeholder="Nombre" class="form-control">
                                  </div>  
                                  <div class="form-group">
                                       <label class="control-label">Domicilio</label> 
                                       <input name="domiciliofinado" type="text"  class="form-control">
                                  </div> 
                                  <div class="form-group">
                                       <label class="control-label">Ciudad</label> 
                                       <input name="ciudadadsolicitante" type="text" class="form-control">

                                  </div>
                                  <div class="form-group">
                                       <label class="control-label">Edad</label> 
                                       <input name="edadsolicitante" type="text" class="form-control">

                                  </div>
                              </div>
                               <div class="col-md-4">
                                 <div class="form-group">
                                       <label class="control-label">&nbsp;</label> 
                                       <input name="aplellidopasolicitante" type="text" placeholder="Apellido Paterno" class="form-control">
                                  </div>  
                                  <div class="form-group">
                                       <label class="control-label">Número</label> 
                                       <input name="numerosolicitante" type="number" class="form-control">
                                  </div>
                                  <div class="form-group">
                                       <label class="control-label">Colonia</label> 
                                       <input name="coloniasolicitante" type="text" class="form-control">
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
                              </div>
                               <div class="col-md-4">
                                 <div class="form-group">
                                       <label class="control-label">&nbsp;</label> 
                                       <input name="apellidomasolicitante" type="text" placeholder="Apellido Materno" class="form-control">
                                  </div> 
                                  <div class="form-group">
                                       <label class="control-label">Parentesco</label> 
                                       <select class="form-control" name="estadociv">
                                           <option value=""></option>
                                           <option value="Hijo">Hijo</option>
                                           <option value="Hija">Hija</option>
                                           <option value="Madre">Madre</option>
                                           <option value="Padre">Padre</option>
                                           <option value="Hermano">Hermano</option>
                                           <option value="Hermana">Hermana</option>
                                           <option value="Suegro">Suegro</option>
                                           <option value="Suegra">Suegro</option>
                                           <option value="Primo">Primo</option>
                                            <option value="Prima">Prima</option>

                                       </select>
                                  </div> 
                                  <div class="form-group">
                                       <label class="control-label">Teléfono</label> 
                                       <input name="telefonosolicitante" type="number" class="form-control">
                                  </div>
                                  <div class="form-group">
                                       <label class="control-label">Persona que atendió </label> 
                                       <input name="personasolicitante" type="text" class="form-control">
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                     <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                          Datos de la difunción</a>
                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                          <div class="panel-body">
                              <div class="col-md-6">
                                  <div class="form-group">
                                       <label class="control-label">Lugar de la difunción</label> 
                                       <input name="lugardifuncion" type="text"  class="form-control">
                                  </div> 
                                   <div class="form-group">
                                       <label class="control-label">Hora</label> 
                                       <input name="lugardifuncion" type="datetime"  class="form-control">
                                  </div>  
                          </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                       <label class="control-label">Fecha</label> 
                                       <input name="fechadifuncion" type="date" placeholder="Nombre" class="form-control">
                                  </div> 
                                   <div class="form-group">
                                       <label class="control-label">Causas</label> 
                                       <input name="causasdifuncion" type="text" placeholder="Nombre" class="form-control">
                                  </div> 
                              </div>
                        </div>
                      </div>
                      
                  </div>
                     <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                          Collapsible Group 2</a>
                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</div>
                      </div>
                    </div>                  
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                          Collapsible Group 3</a>
                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</div>
                      </div>
                    </div>
                </div> 

    
            
        
        
        </form>
            
            </div>

        </div>
    </div>
 

    