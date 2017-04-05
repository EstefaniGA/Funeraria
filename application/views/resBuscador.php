	<div class="main-content">
				<div class="main-content-inner">
					

					<div class="page-content">
						

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                                                                <div class="col-md-12 ">
                                                                    
                                                                                     <?php 
                                                                                     
                                                                                    if(isset($resultado)){
                                                                                    foreach ($resultado as $com){ ?>
                                                                    <div class="col-md-12">
                                                                        <div class="col-md-9">
                                                                            <label class="control-label"><b>Folio: </b></label> <?php echo $com->Folio?><br>
                                                                            <label class="control-label"><b>Fecha de laorden: </b></label> <?php echo $com->FechaOrden?><br>
                                                                            <label class="control-label"><b>Apoyo a la comunidad: </b></label> <?php echo $com->ApoyoPert?><br>
                                                                            <label class="control-label"><b>Sucursal: </b></label> <?php echo $com->NombreS?><br>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <?php if( $com->Restante<$com->Total){
                                                                                     echo form_open('Show/abono')?>
                                                                                     <button class="btn btn-white btn-success btn-bold" type="submit" value="Abono">
                                                                                      <input name="identificador" type="hidden" value="<?php echo $com->Folio ?>">
                                                                                        <i class="ace-icon glyphicon glyphicon-usd bigger-120 green"></i>
                                                                                         Abono
                                                                                     </button>                   
                                                                                    <?php
                                                                                      }
                                                                                        ?>
                                                                                             <?php
                                                                                            }
                                                                                             }
                                                                                            ?>
                                                                                         </form>
                                                                        </div>
                                                                    </div>
                                                                                     
            
                                                                <div class="space-6"></div>
                                                                 <div class="space-6"></div>
                                                                
           
            <div id="littleBoxes" class="littleBoxes">
                <div class="boxlink bg1" style="top:0px;left:0px;">
                    <a href="">Finado</a>
                    <div class="boxcontent">
                        <p>
                            <label class="control-label"><b>Nombre: </b></label> <?php echo $com->NombreFinado. " " .$com->ApellidoFinPa." ".$com->ApellidoFinMa?><br>
                            <label class="control-label"> <b>Domicilio: </b></label>  <?php echo $com->DomicilioFinado. " " .$com->NumeroFinado ?><br>
                            <label class="control-label"><b>Nacionalidad: </b></label> <?php echo $com->Nacionalidad?><br>
                            <label class="control-label"><b>Ciudad: </b></label> <?php echo $com->Nacionalidad?><br>
                            <label class="control-label"><b>Colonia: </b></label> <?php echo $com->ColoniaFinado?><br>
                            <label class="control-label"><b>Ocupación: </b></label> <?php echo $com->Ocupacion?><br>
                            <label class="control-label"><b>Fecha de nacimiento: </b></label> <?php echo $com->FechaNacimiento?><br>
                            <label class="control-label"><b>Estado civil: </b></label> <?php echo $com->EstadoCivil?><br>
                            <label class="control-label"><b>Derecho Habiente: </b></label> <?php echo $com->DerechoHabiente?><br>
                            <label class="control-label"><b>Edad: </b></label> <?php echo $com->Edad?><br>
                            <label class="control-label"><b>Escolaridad: </b></label> <?php echo $com->Escolaridad?><br>
                            <label class="control-label"><b>Sexo: </b></label> <?php echo $com->Sexo?><br>
                            
                        </p>
                    </div>
                </div>
                <div class="bg5" style="background-position:-90px 0;top:0px;left:95px;"></div>
                <div class="bg5" style="background-position:-180px 0;top:0px;left:190px;"></div>
                <div class="bg5" style="background-position:-270px 0;top:0px;left:285px;"></div>
                <div class="bg5" style="background-position:-360px 0;top:0px;left:380px;"></div>

                <div class="bg5" style="background-position:0 -90px;top:95px;left:0px;"></div>
                <div class="boxlink bg2" style="top:95px;left:95px;">
                    <a href="">Solicitante</a>
                    <div class="boxcontent">
                        <p>  <label class="control-label"><b>Nombre: </b></label> <?php echo $com->NombreSolicitante. " " .$com->ApellidoSolPa." ".$com->ApellidoSolMa?><br>
                             <label class="control-label"><b>Domicilio: </b></label> <?php echo $com->DomicilioSolicitante. " " .$com->NumeroSolicitante?><br>
                             <label class="control-label"><b>Parentesco: </b></label> <?php echo $com->Parentesco?><br>
                             
                              <label class="control-label"><b>Ciudad: </b></label> <?php echo $com->NombreC?><br>
                            <label class="control-label"><b>Colonia: </b></label><?php echo $com->ColoniaSolicitante?><br>
                            <label class="control-label"><b>Teléfono: </b></label><?php echo $com->Telefono?><br>
                            <label class="control-label"><b>Edad: </b></label><?php echo $com->Edad?><br>
                            <label class="control-label"><b>Estado Civil: </b></label><?php echo $com->EstadoCivilSolicitante?>
                        </p>
                    </div>
                </div>
                <div class="bg5" style="background-position:-180px -90px;top:95px;left:190px;"></div>
                <div class="bg5" style="background-position:-270px -90px;top:95px;left:285px;"></div>
                <div class="bg5" style="background-position:-360px -90px;top:95px;left:380px;"></div>

                <div class="bg5" style="background-position:0 -180px;top:190px;left:0px;"></div>
                <div class="bg5" style="background-position:-90px -180px;top:190px;left:95px;"></div>
                <div class="boxlink bg3" style="top:190px;left:190px;">
                    <a href="">Defunción</a>
                    <div class="boxcontent">
                        <p><label class="control-label"><b>Lugar de la defunción: </b></label> <?php echo $com->LugarDifuncion?><br>
                            <label class="control-label"><b>Fecha: </b></label> <?php echo $com->Fecha?><br>
                                <label class="control-label"><b>Hora: </b></label> <?php echo $com->Hora?><br>
                                <label class="control-label"><b>Causas: </b></label> <?php echo $com->Causa?>
                        </p>
                    </div>
                </div>
<!--                 <div class="bg5" style="background-position:-180px -90px;top:95px;left:190px;"></div>-->
                <div class="bg5" style="background-position:-270px -180px;top:190px;left:285px;"></div>
                <div class="bg5" style="background-position:-360px -180px;top:190px;left:380px;"></div>

                <div class="bg5" style="background-position:0 -270px;top:285px;left:0px;"></div>
                <div class="bg5" style="background-position:-90px -270px;top:285px;left:95px;"></div>
                 <div class="bg5" style="background-position:-180px -270px;top:285px;left:190px;"></div>
                <div class="boxlink bg4" style="top:285px;left:285px;">
                    <a href="">V,C, I</a>
                    <div class="boxcontent">
                        <p><label class="control-label"><b>Lugar de la velación: </b></label> <?php echo $com->LugarVelacion?><br>
                            <label class="control-label"><b>Panteón: </b></label> <?php echo $com->Panteon?><br>
                            <label class="control-label"><b>Ubicación: </b></label> <?php echo $com->Ubicacion?><br>
                            <label class="control-label"><b>Hora de la misa: </b></label> <?php echo $com->HoraMisa?><br>
                            <label class="control-label"><b>Fecha: </b></label> <?php echo $com->FechaMisa?><br>
                            <label class="control-label"><b>Iglesia: </b></label> <?php echo $com->Iglesia?><br>
                            <label class="control-label"><b>Temporal: </b></label> <?php echo $com->Temporal?><br>
                            <label class="control-label"><b>Hora del sepelio: </b></label> <?php echo $com->HoraSepelio?><br>
                            <label class="control-label"><b>Nombre del finado a exhumar: </b></label> <?php  echo $com->NombreFinExhumar. " " .$com->ApellidoPaterno." ".$com->ApellidoMaterno?><br>
                            <label class="control-label"><b>Fecha de la defunción:</b></label> <?php echo $com->FechaDifuncionExhumar?>
                            
                        </p>
                    </div>
                </div>
<!--                <div class="bg5" style="background-position:-270px -180px;top:190px;left:285px;"></div>-->
                <div class="bg5 "  style="background-position:-360px -270px;top:285px;left:380px;"></div>

                <div class="bg5" style="background-position:0 -360px;top:380px;left:0px;"></div>
                <div class="bg5" style="background-position:-90px -360px;top:380px;left:95px;"></div>
                <div class="bg5" style="background-position:-180px -360px;top:380px;left:190px;"></div>
                <div class="bg5" style="background-position:-270px -360px;top:380px;left:285px;"></div>
                <div class="boxlink bg6" style="top:380px;left:380px;">
                    <a href="">Servicios que otorga la empresa</a>
                    <div class="boxcontent">
                        <p><label class="control-label"><b>Ataud: </b></label> <?php echo $com->Ataud?>
                            <label class="control-label"><b>Modelo: </b></label> <?php echo $com->ModeloAtaud?><br>
                            <label class="control-label"><b>Urna: </b></label>  <?php echo $com->Urna?>
                            <label class="control-label"><b>Modelo: </b></label> <?php echo $com->ModeloUrna?><br>
                            <label class="control-label"><b>Capillas: </b></label> <?php echo $com->Capillas?>
                            <label class="control-label"><b>Cremación: </b></label> <?php echo $com->Cremacion?>
                            <label class="control-label"><b>Embalsamada: </b></label> <?php echo $com->Embalsamado?>
                            <label class="control-label"><b>Otros gastos: </b></label> <?php echo $com->OtrosGastos?>
                            <label class="control-label"><b>A domicilio: </b></label> <?php echo $com->Adomicilio?><br>
                            <label class="control-label"><b>Lugar de cremación: </b></label><?php echo $com->LugarCremacion?><br>
                            <label class="control-label"><b>Carroza: </b></label> <?php echo $com->Carroza?><br>
                            <label class="control-label"><b>Traslado: </b></label> <?php echo $com->Traslado?><br>
                            <label class="control-label"><b>Sub-Total: </b></label> <?php echo $com->SubTotal?> <label class="control-label"><b> Total: </b></label> <?php echo $com->Total?><br>
                            <label class="control-label"><b>Impuestos: </b></label> <?php echo $com->Impuestos?><br>
                            <label class="control-label"><b>Certificado médico: </b></label> <?php echo $com->CertificadoMedico?><br>
                            <label class="control-label"><b>Otros: </b></label> <?php echo $com->Otros?><br>
                            <label class="control-label"><b>Observaciones: </b></label> <?php echo $com->Observaciones?><br>
                             
                        </p>
                    </div>
                </div>
            </div>
                                                        
                                                                  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
       <script type="text/javascript">
            $(function() {
                /* object to save the initial positions of each box */
                var divinfo = {"initial": []};
                /* index of the selected / clicked box */
                var current = -1;

                /* we save the index,top and left of each one of the boxes */
                $('#littleBoxes > div').each(function(){
                    var $this = $(this);
                    var initial = {
                                'index' : $this.index(),
                                'top'     : $this.css('top'),
                                'left'     : $this.css('left')
                    };
                    divinfo.initial.push(initial);
                });

                /* clcik event for the anchors inside of the boxes */
                $('#littleBoxes a').bind('click',function(e){
                        var $this         = $(this);
                        var $currentBox    = $this.parent();
                        /* set a z-index lower than all the other boxes,
                        to see the other boxes animation on the top*/
                        $currentBox.css('z-index','1');

                        /* if we are clicking on a expanded box : */
                        if(current == $currentBox.index()){
                            /* put it back (decrease width,height, and set the top and left like it was before).
                            the previous positions are saved in the divinfo obj*/
                            $currentBox.stop().animate({
                                    'top'         : divinfo.initial[$currentBox.index()].top,
                                    'left'        : divinfo.initial[$currentBox.index()].left,
                                    'width'     : '90px',
                                    'height'    : '90px'
                            },800,'easeOutBack').find('.boxcontent').fadeOut();


                            $('#littleBoxes > div').not($currentBox).each(function(){
                                var $ele         = $(this);
                                var elemTop     = divinfo.initial[$ele.index()].top;
                                var elemLeft     = divinfo.initial[$ele.index()].left;
                                $ele.stop().show().animate({
                                    'top'         : elemTop,
                                    'left'        : elemLeft,
                                    'opacity'    : 1
                                },800);
                            });
                            current = -1;
                        }
                        /* if we are clicking on a small box : */
                        else{
                            /* randomly animate all the other boxes.
                            Math.floor(Math.random()*601) - 150 gives a random number between -150 and 450.
                            This range is considering the initial lefts/tops of the elements. It's not the exact right
                            range, since we would have to calculate the range based on each one of the boxes. Anyway, it
                            fits our needs...
                            */
                            $('#littleBoxes > div').not($currentBox).each(function(){
                                var $ele = $(this);
                                $ele.stop().animate({
                                    'top' : (Math.floor(Math.random()*601) - 150) +'px',
                                    'left': (Math.floor(Math.random()*601) - 150) +'px',
                                    'opacity':0
                                },800,function(){
                                    $(this).hide();
                                });
                            });

                            /* expand the clicked one. Also, fadeIn the content (boxcontent)
                            if you want it to fill the space of the littleBoxes container,
                            then these are the right values */
                            var newwidth     = 500;
                            var newheight     = 500;
                            $currentBox.stop().animate({
                                'top'     : '0px',
                                'left'    : '0px',
                                'width' : newwidth +'px',
                                'height': newheight+'px'
                            },800,'easeOutBack',function(){
                                current = $currentBox.index();
                                $(this).find('.boxcontent').fadeIn();
                            });


                        }
                        e.preventDefault();
                });
            });
        </script>
        </div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->