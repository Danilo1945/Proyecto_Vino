<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
$this->set('bakeEntities', array(
    0 => 'Pedidos',
    1 => 'Trabajador',
    2 => 'Users',
));
?>
<div class="hide" style="color: white">
    <?= $this->layout = 'pedidos'; ?>
</div>

<br>

<div class="row">

    <div class="col-12 col-sm-12 col-lg-4 col-xl-4" style=" padding-left: 50px;">
        <div class="row">
            <div class="col-11 col-sm-11 col-lg-11 col-xl-11 " style=" background: white; padding-right: 10px " >
                <div class="row">

                    <div class="card" style="width:400px ; height:auto;">
                        <h5 class="card-header">Catálogo de productos</h5>
                        <?= $this->Html->image('img1.jpg', ['alt' => '', 'id' => 'imgGeneral', 'style' => 'width: auto ; height: 250px;']) ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="slider1" align="center" >
                                    <div class="thumbelina-but horiz left">&#706;</div>
                                    <ul>
                                        <li >  <?= $this->Html->image('img1.jpg', ['alt' => 'CakePHP', 'style' => 'width:90px;height:100px', 'id' => 'img1']) ?></li>
                                        <li><?= $this->Html->image('helados.png', ['alt' => 'CakePHP', 'style' => 'width:90px;height:100px', 'id' => 'img2']) ?></li>
                                        <li><?= $this->Html->image('mermelada.jpg', ['alt' => 'CakePHP', 'style' => 'width:90px;height:100px', 'id' => 'img3']) ?></li>
                                        <li><?= $this->Html->image('mermeada.jpg', ['alt' => 'CakePHP', 'style' => 'width:90px;height:100px', 'id' => 'img3']) ?></li>

                                    </ul>
                                    <div class="thumbelina-but horiz right">&#707;</div>
                                    <br> 
                                    <br> 
                                    <br> 
                                    <br>
                                    <br>
                                    <!--<input type="text" name="texto" value="" size="20" id="txt_stock" />-->
                                </div>
                            </div>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer text-muted" id="txt_stock"><p></p></div>
                    </div>



                </div>


            </div>
        </div>

    </div>


    <div class="col-12 col-sm-12 col-lg-8 col-xl-8" >
        <div class="row">

            <div class="col-11 col-sm-11 col-lg-11 col-xl-11 " >


                <div class="card text-center">
                    <div class="card-header">
                        Detalle
                        
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table  class="table" >


                                <tr >
                                    <td >Código</td>
                                    <td>Descripción</td>
                                    <td>Precio</td>
                                    <td>Cantidad</td>
                                    <td>Total</td>
                                    <td>Acción</td>
                                </tr>
                                <tr>
                                    <td id="txt_codigo"></td>
                                    <td id="txt_descripcion"></td>
                                    <td id="txt_precio"></td>
                                    <td ><input type="text" name="txt1" value="" size="2" id="txt_cantidad"  class="form-control"/></td>
                                    <td  id="txt_total"></td>
                                    <td><input id="btn_Agrega" class="btn btn-light" type="button" name="btn2" value="Agregar" size="5"  /></td>

                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>

            </div>
            <!--inicio prueebas-->


            <div class="col-11 col-sm-11 col-lg-11 col-xl-11">
                <div class="card text-center">


                    <div class="card-body">
                        <div class="table-responsive">


                            <?= $this->Form->create($pedido) ?>
                            <table  class="table" >


                                <tr >
                                    <td >Código</td>
                                    <td>Descripción</td>
                                    <td>Precio</td>
                                    <td>Cantidad</td>
                                    <td>Total</td>
                                    <td>Acción</td>
                                    <td><input type='hidden' name='usuario[]' value='<?=$current_user['id'] ?>'></td>
                                    
                                     
                                </tr>
                                <tbody id="itemlist">

                                </tbody>

                            </table>

                            <button type="submit" class="btn btn-primary" id="Guardar">Guardar</button>
                            <?= $this->Form->end() ?>
                            
                            
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div> 
            </div>



            <!--fin pruebas-->

        </div>
    </div>

</div>


<br> 
<br> 
<br> 
<br> 











<<<<<<< HEAD
<script>



    $("#Guardar").click(function () {
    // $.get("' . $this->Html->url( array('controller' => 'your_controller', 'action' => 'your_action', 'param1', 'param2') ) . '");



    //optener datos de una tabla
            
    
    
//         alert("hola");
//          var parametros = {
//        "valor1": 4,
//        "valor2":6
//    };
//    $.ajax({
//        data: parametros, //datos que se envian a traves de ajax
//        url: 'ejemplo_ajax_proceso.php', //archivo que recibe la peticion
//        type: 'post', //método de envio
//        beforeSend: function () {
//            $("#resultado").html("Procesando, espere por favor...");
//        },
//        success: function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
//            $("#resultado").html(response);
//        }
   
    });






</script>
=======
<div class="container" id="pedidos_add">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= __('Añadir Pedido') ?></legend>
        <?php
        echo $this->Form->control('fecha_ven', ['empty' => true]);
        echo $this->Form->control('trabajador_id', ['options' => $trabajador, 'empty' => true]);
        echo $this->Form->control('users_id', ['options' => $users, 'empty' => true]);
        echo $this->Form->control('estado_cuenta');
        echo $this->Form->control('observaciones_ven');
        ?>
    </fieldset>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <hr>
    <fieldset>
        <legend><?= __('Añadir Detalle Pedido') ?></legend>
        <?php
        echo $this->Form->control('cantidad');
        echo $this->Form->control('detalle');
        echo $this->Form->control('valor_unitario');
        echo $this->Form->control('valor_total');
        echo $this->Form->control('pedidos_id', ['options' => $pedidos, 'empty' => true]);
        echo $this->Form->control('unidad_medida_id', ['options' => $unidadMedida, 'empty' => true]);
        echo $this->Form->control('produccion_total_id', ['options' => $produccionTotal, 'empty' => true]);
        ?>
    </fieldset>
</div>
>>>>>>> d3ca01adf1ba1c22bb571591468011524b1f221d
