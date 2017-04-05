<div class="main-content">
    <div class="main-content-inner">


        <div class="page-content">


            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <label class="control-label"><b>Folio: </b></label> <?php echo $foa->idApoyo?><br>
                          <label class="control-label"><b>Fecha de laorden: </b></label> <?php echo $foa->Fecha?><br>
                                                                           
                          <label class="control-label"><b>Sucursal: </b></label> <?php echo $foa->NombreS?><br>
                
                    <div class="col-md-12 ">

                        <div class="col-md-12">
                            <div class="col-md-9">
                          
                            </div>
                            <div class="col-md-3">


                                                                                         
                            </div>
                        </div>


                        <div class="space-6"></div>
                        <div class="space-6"></div>


                        <div id="littleBoxes" class="littleBoxes">
                            <div class="boxlink bg5" style="top:0px;left:0px;">
                                <a href=""></a>
                                <div class="boxcontent">
                                    <p>

                                </div>
                            </div>
                            <div class="bg5" style="background-position:-90px 0;top:0px;left:95px;"></div>
                            <div class="bg5" style="background-position:-180px 0;top:0px;left:190px;"></div>
                            <div class="bg5" style="background-position:-270px 0;top:0px;left:285px;"></div>
                            <div class="bg5" style="background-position:-360px 0;top:0px;left:380px;"></div>

                            <div class="bg5" style="background-position:0 -90px;top:95px;left:0px;"></div>
                            <div class="boxlink bg5" style="top:95px;left:95px;">
                                <a href="">Solicitante</a>
                                <div class="boxcontent">
                                    <p>  <label class="control-label"><b>Nombre: </b></label> <?php echo $resultado->NombreSolicitante . " " . $resultado->ApellidoSolPa . " " . $resultado->ApellidoSolMa ?><br>
                                        <label class="control-label"><b>Domicilio: </b></label> <?php echo $resultado->DomicilioSolicitante . " " . $resultado->NumeroSolicitante ?><br>
                                        <label class="control-label"><b>Ciudad: </b></label> <?php echo $resultado->NombreC ?><br>
                                        <label class="control-label"><b>Colonia: </b></label> <?php echo $resultado->ColoniaSolicitante ?><br>
                                        <label class="control-label"><b>Teléfono: </b></label> <?php echo $resultado->Telefono ?><br>
                                        <label class="control-label"><b>Edad: </b></label> <?php echo $resultado->Edad ?><br>
                                        <label class="control-label"><b>Estado Civil: </b></label> <?php echo $resultado->EstadoCivilSolicitante ?>
                                    </p>
                                </div>
                            </div>
                            <div class="bg5" style="background-position:-180px -90px;top:95px;left:190px;"></div>
                            <div class="bg5" style="background-position:-270px -90px;top:95px;left:285px;"></div>
                            <div class="bg5" style="background-position:-360px -90px;top:95px;left:380px;"></div>

                            <div class="bg5" style="background-position:0 -180px;top:190px;left:0px;"></div>
                            <div class="bg5" style="background-position:-90px -180px;top:190px;left:95px;"></div>
                            <div class="boxlink bg5" style="top:190px;left:190px;">
                                <a href=""></a>
                                <div class="boxcontent">

                                </div>
                            </div>
                            <!--                 <div class="bg5" style="background-position:-180px -90px;top:95px;left:190px;"></div>-->
                            <div class="bg5" style="background-position:-270px -180px;top:190px;left:285px;"></div>
                            <div class="bg5" style="background-position:-360px -180px;top:190px;left:380px;"></div>

                            <div class="bg5" style="background-position:0 -270px;top:285px;left:0px;"></div>
                            <div class="bg5" style="background-position:-90px -270px;top:285px;left:95px;"></div>
                            <div class="bg5" style="background-position:-180px -270px;top:285px;left:190px;"></div>
                            <div class="boxlink bg4" style="top:285px;left:285px;">
                                <a href="">Beneficiarios</a>
                                <div class="boxcontent">
                                                                       
                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <td><b> Nombre</b> </td>
                                                <td><b> Tipo</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach ($bene as $be){ ?> 
                                            <tr>
                                                <td> <?php echo $be->NombreB . " " . $be->ApellidoPa . " " . $be->ApellidoMa ?></td>
                                                <td> <?php echo $be->NombreT ?></td>
                                            </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                    
                                       

                                        
                                     
                                    

                                   
                                </div>
                            </div>
                            <!--                <div class="bg5" style="background-position:-270px -180px;top:190px;left:285px;"></div>-->
                            <div class="bg5 "  style="background-position:-360px -270px;top:285px;left:380px;"></div>

                            <div class="bg5" style="background-position:0 -360px;top:380px;left:0px;"></div>
                            <div class="bg5" style="background-position:-90px -360px;top:380px;left:95px;"></div>
                            <div class="bg5" style="background-position:-180px -360px;top:380px;left:190px;"></div>
                            <div class="bg5" style="background-position:-270px -360px;top:380px;left:285px;"></div>
                            <div class="boxlink bg5" style="top:380px;left:380px;">
                                <a href=""></a>
                                <div class="boxcontent">

                                </div>
                            </div>
                        </div>
                    

                        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
                        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
                        <script type="text/javascript">
                            $(function () {
                                /* object to save the initial positions of each box */
                                var divinfo = {"initial": []};
                                /* index of the selected / clicked box */
                                var current = -1;

                                /* we save the index,top and left of each one of the boxes */
                                $('#littleBoxes > div').each(function () {
                                    var $this = $(this);
                                    var initial = {
                                        'index': $this.index(),
                                        'top': $this.css('top'),
                                        'left': $this.css('left')
                                    };
                                    divinfo.initial.push(initial);
                                });

                                /* clcik event for the anchors inside of the boxes */
                                $('#littleBoxes a').bind('click', function (e) {
                                    var $this = $(this);
                                    var $currentBox = $this.parent();
                                    /* set a z-index lower than all the other boxes,
                                     to see the other boxes animation on the top*/
                                    $currentBox.css('z-index', '1');

                                    /* if we are clicking on a expanded box : */
                                    if (current == $currentBox.index()) {
                                        /* put it back (decrease width,height, and set the top and left like it was before).
                                         the previous positions are saved in the divinfo obj*/
                                        $currentBox.stop().animate({
                                            'top': divinfo.initial[$currentBox.index()].top,
                                            'left': divinfo.initial[$currentBox.index()].left,
                                            'width': '90px',
                                            'height': '90px'
                                        }, 800, 'easeOutBack').find('.boxcontent').fadeOut();


                                        $('#littleBoxes > div').not($currentBox).each(function () {
                                            var $ele = $(this);
                                            var elemTop = divinfo.initial[$ele.index()].top;
                                            var elemLeft = divinfo.initial[$ele.index()].left;
                                            $ele.stop().show().animate({
                                                'top': elemTop,
                                                'left': elemLeft,
                                                'opacity': 1
                                            }, 800);
                                        });
                                        current = -1;
                                    }
                                    /* if we are clicking on a small box : */
                                    else {
                                        /* randomly animate all the other boxes.
                                         Math.floor(Math.random()*601) - 150 gives a random number between -150 and 450.
                                         This range is considering the initial lefts/tops of the elements. It's not the exact right
                                         range, since we would have to calculate the range based on each one of the boxes. Anyway, it
                                         fits our needs...
                                         */
                                        $('#littleBoxes > div').not($currentBox).each(function () {
                                            var $ele = $(this);
                                            $ele.stop().animate({
                                                'top': (Math.floor(Math.random() * 601) - 150) + 'px',
                                                'left': (Math.floor(Math.random() * 601) - 150) + 'px',
                                                'opacity': 0
                                            }, 800, function () {
                                                $(this).hide();
                                            });
                                        });

                                        /* expand the clicked one. Also, fadeIn the content (boxcontent)
                                         if you want it to fill the space of the littleBoxes container,
                                         then these are the right values */
                                        var newwidth = 500;
                                        var newheight = 500;
                                        $currentBox.stop().animate({
                                            'top': '0px',
                                            'left': '0px',
                                            'width': newwidth + 'px',
                                            'height': newheight + 'px'
                                        }, 800, 'easeOutBack', function () {
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