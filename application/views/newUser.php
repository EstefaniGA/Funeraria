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
						<div class="login-container  ">
							<div class="center  ">
								
							</div>

                                                    <div class="space-6">
                                                        
                                                    </div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box">
									<div class="widget-body">
										<div class="widget-main">
                                                                                    <h2 class="center"> Usuarios</h2>
											 <?php if(isset($modificar)){echo form_open('Usuario/modificarUsuario');}else{echo form_open('Usuario/addUser');}?>
                                                                                        <?php if(isset($modificar)){
                                                                                            ?>
                                                                                        <input type="hidden" name="id" value="<?php echo $modificar->idUsuarios;?>">

                                                                                        <?php

                                                                                            }?>
                                                                                    <div class="form-group">
                                                                                        <div class="input-group">
                                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                                                        <input name="usuario" type="text" placeholder="Usuario ..." class="form-control" required value="<?php echo set_value('usuario'); 
                                                                                        if(isset($modificar)){
                                                                                            echo $modificar->Nombre;
                                                                                        }?>">

                                                                                    </div>
                                                                                            <?php echo form_error('usuario'); ?>
                                                                                     <br>
                                                                                     <div class="input-group">
                                                                                         <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
                                                                                         <input name="pass" type="password" placeholder="Contraseña ..." class="form-control" required value="<?php echo set_value('pass')?>">

                                                                                     </div>
                                                                                      <?php echo form_error('pass'); ?>
                                                                                       <br>
                                                                                       
                                                                                        <div class="input-group">
                                                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
                                                                                         <input name="passdos" type="password" placeholder="Repetir la Contraseña ..." class="form-control" required>

                                                                                            </div>
                                                                                           <?php echo form_error('passdos'); ?>
                                                                                             <br>
                                                                                             <select class="form-control" name="privilegios">
                                                                                                    <option ></option>
                                                                                                    <option value="1">Administrador</option>
                                                                                                    <option value="2">Usuario</option>
                                                                                              </select>
                                                                                                      <?php echo form_error('privilegios'); ?>
                                                                                                    <br>
                                                                                                    <div class="center  ">
                                                                                                        <button class="btn btn-sm btn-yellow radius-4" type="submit" onclick="return alert('Se agrego/modifico correctamente')" value="Guardar/Actualizar">
                                                                                                            <i class="ace-icon fa fa-floppy-o bigger-110"></i>
                                                                                                            <span class="bigger-110 no-text-shadow">Guardar/Actualizar</span>
                                                                                                        </button>
                                             
                                                                                                    </div>
                                                                                                    
                                                                                             
                                                                                              </div>

                                                                                              </form>
										</div><!-- /.widget-main -->

									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

							</div><!-- /.position-relative -->
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
