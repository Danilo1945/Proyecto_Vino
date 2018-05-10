<div class="hide">
    <?= $this->layout = "publico"; ?>
</div>

    
    
    
    <style>

            .Color_primP{
                background: #009688;

            }
            .Color_secundarioP{
                background: #E0E0E0;

            }

            nav{
                position:   inherit;
                top: 0;


            }
            .banner_pos{
                
            }
            .menu-principal{
               
                position: float;
            }

            #abajo_menu{
                position: static;

            }

        </style>
        <script >

            $(document).ready(function () {
                $('.slider').slider();

                $(".button-collapse").sideNav();



                $(".button-collapse").click(function () {

                    $("#asd").css("position", "initial");

                });
              

            });

        </script>




    
    <div class="row" >
         <center><b><h6>Catálogo de productos</h6></b></center>
            <div class="col s12 m12" style=" height: 425px" >  <!--   inicio del columna-->
                <div class="slider">
                    <ul class="slides" style="height:200px">
                        <li>
                            <?= $this->Html->image('carucel.jpg', ['alt' => 'CakePHP'],['width' => '100px'],
                                    ['height' => '100px']) ?>
                            <div class="caption">
                                <h3>Los mejores vinos</h3>
                            </div>
                        </li>
                        <li>
                            <?= $this->Html->image('carucel2.jpg', ['alt' => 'CakePHP'], ['width' => '100px'],
                        ['height' => '100px']) ?>
                            <div class="caption">
                                <h3>Vinos Inca El Mejor</h3>
                            </div>
        </li>
                        <li>
                            <?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP'], ['width' => '100px'],
                        ['height' => '100px']) ?>
                            <div class="caption">
                                <h3>Helados Quinticusig</h3>
                            </div>
                                    </li>
                        
                    </ul>
                    
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content white-text">
                <center><span class="card-title green-text">Botella de vino</span></center>
                <div class="card-action">
                      <div class="card-image">
             <?= $this->Html->image('pedido6.jpg', ['alt' => 'CakePHP']) ?>
              
            </div>
                   <div class="card-content">
                       <p style="color: black">Valor unitario: $6.00</p>
                       <p style="color: black" align="justify">Descripción: Delicioso vino procesado con selectivos frutos de calidad.</p>
            </div>
            <div class="card-action">
                <center><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Hacer Pedido</a></center>
                <!-- Modal Structure -->
                <div id="modal1" class="modal bottom-sheet">
                  <div class="modal-content">
                      <form>
                          <table class="striped" style="color:black">
                              <thead>
                              
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><strong>Producto</strontg></td>
                                      <td><strong>Fecha</strong></td>
                                      <td><strong>Cantidad</strong></td>
                                      <td><strong>Unidad de medida</strong></td>
                                      <td><strong>Cliente</strong></td>
                                      <td><strong>Total+iva<strong></td>
                                  </tr>
                                  <tr>
                                      <td>Botella de vino</td>
                                      <td><input placeholder="aqui va la fecha" type="date"></td>
                                      <td><input type="number" placeholder="aqui va la cantidad"></td>
                                      <td><input type="text" placeholder="unidad de medida"></td>
                                      <td><input type="text" placeholder="cliente"></td>
                                      <td><input type="text" placeholder="totalPedido"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <center><button class="btn" type="submit" onclick="confirm('Esta seguro de realizar el pedido?');">Guardar</button>
                          <a href="#!" class="modal-close btn waves-effect waves-green btn-flat">Cerrar</a></center>
                      </form>
                  </div>                
                </div>
               
            </div>
           <script><!--script para modal-->
            $(document).ready(function(){
            $('.modal').modal();
            $('#modal2').modal();
            $('#modal3').modal();
            });
      </script>       
                   
                </div>
            </div>
        </div>
    </div>
         <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content white-text">
                <center><span class="card-title green-text">Mermelada</span></center>
                <div class="card-action">
                      <div class="card-image" style="height:221px">
                          <?= $this->Html->image('pedido3.jpg', ['alt' => 'CakePHP']) ?>
               
            </div>
                   <div class="card-content">
                       <p style="color: black">Valor unitario: $2.00</p>
                       <p style="color: black;size:10px" align="justify">Descripción:Pulpa</p>
            </div>
            <div class="card-action">
                <center><a class="waves-effect waves-light btn modal-trigger" href="#modal2">Hacer Pedido</a></center>
                <!-- Modal Structure -->
                <div id="modal2" class="modal bottom-sheet">
                  <div class="modal-content">
                      <form>
                          <table class="striped" style="color:black">
                              <thead>
                                
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><strong>Producto</strontg></td>
                                      <td><strong>Fecha</strong></td>
                                      <td><strong>Cantidad</strong></td>
                                      <td><strong>Unidad de medida</strong></td>
                                      <td><strong>Cliente</strong></td>
                                      <td><strong>Total+iva<strong></td>
                                  </tr>
                                  <tr>
                                      <td>Mermelada</td>
                                      <td><input placeholder="aqui va la fecha" type="date"></td>
                                      <td><input type="number" placeholder="aqui va la cantidad"></td>
                                      <td><input type="text" placeholder="unidad de medida"></td>
                                      <td><input type="text" placeholder="cliente"></td>
                                      <td><input type="text" placeholder="totalPedido"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <center><button class="btn" type="submit" onclick="confirm('Esta seguro de realizar el pedido?');">Guardar</button>
                          <a href="#!" class="modal-close btn waves-effect waves-green btn-flat">Cerrar</a></center>
                      </form>
                  </div>               
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
         <div class="col s12 m4">
            <div class="card darken-1">
                <div class="card-content white-text">
                    <center><span class="card-title green-text">Helados</span></center>
                    <div class="card-action">
                          <div class="card-image" style="height:178px">
                              <?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP']) ?>

                </div>
                       <div class="card-content">
                           <p style="color: black">Valor unitario: $0.30</p>
                           <p style="color: black;size:10px" align="justify">Descripción:Exquistos helados a base de mortiños de calidad</p>
                </div>
                    <div class="card-action">
                        <center><a class="waves-effect waves-light btn modal-trigger" href="#modal3">Hacer Pedido</a></center>
                <!-- Modal Structure -->
                <div id="modal3" class="modal bottom-sheet">
                  <div class="modal-content">
                      <form>
                          <table class="striped" style="color:black">
                              <thead>
                                  
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><strong>Producto</strontg></td>
                                      <td><strong>Fecha</strong></td>
                                      <td><strong>Cantidad</strong></td>
                                      <td><strong>Unidad de medida</strong></td>
                                      <td><strong>Cliente</strong></td>
                                      <td><strong>Total+iva<strong></td>
                                  </tr>
                                  <tr>
                                      <td>Helados</td>
                                      <td><input placeholder="aqui va la fecha" type="date"></td>
                                      <td><input type="number" placeholder="aqui va la cantidad"></td>
                                      <td><input type="text" placeholder="unidad de medida"></td>
                                      <td><input type="text" placeholder="cliente"></td>
                                      <td><input type="text" placeholder="totalPedido"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <center><button class="btn" type="submit" onclick="confirm('Esta seguro de realizar el pedido?');">Guardar</button>
                          <a href="#!" class="modal-close btn waves-effect waves-green btn-flat">Cerrar</a></center>
                      </form>
                  </div>               
                </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>  
    </div>  
    <div class="row">
        <div class="col s12 m4">
            <div class="card darken-1">
                <div class="card-content white-text">
                    <center><span class="card-title green-text">Helados</span></center>
                    <div class="card-action">
                          <div class="card-image" style="height:178px">
                              <?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP']) ?>

                </div>
                       <div class="card-content">
                           <p style="color: black">Valor unitario: $0.30</p>
                           <p style="color: black;size:10px" align="justify">Descripción:Exquistos helados a base de mortiños de calidad</p>
                </div>
                    <div class="card-action">
                        <center><a class="waves-effect waves-light btn modal-trigger" href="#modal3">Hacer Pedido</a></center>
                <!-- Modal Structure -->
                <div id="modal3" class="modal bottom-sheet">
                  <div class="modal-content">
                      <form>
                          <table class="striped" style="color:black">
                              <thead>
                                  
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><strong>Producto</strontg></td>
                                      <td><strong>Fecha</strong></td>
                                      <td><strong>Cantidad</strong></td>
                                      <td><strong>Unidad de medida</strong></td>
                                      <td><strong>Cliente</strong></td>
                                      <td><strong>Total+iva<strong></td>
                                  </tr>
                                  <tr>
                                      <td>Helados</td>
                                      <td><input placeholder="aqui va la fecha" type="date"></td>
                                      <td><input type="number" placeholder="aqui va la cantidad"></td>
                                      <td><input type="text" placeholder="unidad de medida"></td>
                                      <td><input type="text" placeholder="cliente"></td>
                                      <td><input type="text" placeholder="totalPedido"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <center><button class="btn" type="submit" onclick="confirm('Esta seguro de realizar el pedido?');">Guardar</button>
                          <a href="#!" class="modal-close btn waves-effect waves-green btn-flat">Cerrar</a></center>
                      </form>
                  </div>               
                </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
        <div class="col s12 m4">
            <div class="card darken-1">
                <div class="card-content white-text">
                    <center><span class="card-title green-text">Helados</span></center>
                    <div class="card-action">
                          <div class="card-image" style="height:178px">
                              <?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP']) ?>

                </div>
                       <div class="card-content">
                           <p style="color: black">Valor unitario: $0.30</p>
                           <p style="color: black;size:10px" align="justify">Descripción:Exquistos helados a base de mortiños de calidad</p>
                </div>
                    <div class="card-action">
                        <center><a class="waves-effect waves-light btn modal-trigger" href="#modal3">Hacer Pedido</a></center>
                <!-- Modal Structure -->
                <div id="modal3" class="modal bottom-sheet">
                  <div class="modal-content">
                      <form>
                          <table class="striped" style="color:black">
                              <thead>
                                  
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><strong>Producto</strontg></td>
                                      <td><strong>Fecha</strong></td>
                                      <td><strong>Cantidad</strong></td>
                                      <td><strong>Unidad de medida</strong></td>
                                      <td><strong>Cliente</strong></td>
                                      <td><strong>Total+iva<strong></td>
                                  </tr>
                                  <tr>
                                      <td>Helados</td>
                                      <td><input placeholder="aqui va la fecha" type="date"></td>
                                      <td><input type="number" placeholder="aqui va la cantidad"></td>
                                      <td><input type="text" placeholder="unidad de medida"></td>
                                      <td><input type="text" placeholder="cliente"></td>
                                      <td><input type="text" placeholder="totalPedido"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <center><button class="btn" type="submit" onclick="confirm('Esta seguro de realizar el pedido?');">Guardar</button>
                          <a href="#!" class="modal-close btn waves-effect waves-green btn-flat">Cerrar</a></center>
                      </form>
                  </div>               
                </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
        <div class="col s12 m4">
            <div class="card darken-1">
                <div class="card-content white-text">
                    <center><span class="card-title green-text">Helados</span></center>
                    <div class="card-action">
                          <div class="card-image" style="height:178px">
                              <?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP']) ?>

                </div>
                       <div class="card-content">
                           <p style="color: black">Valor unitario: $0.30</p>
                           <p style="color: black;size:10px" align="justify">Descripción:Exquistos helados a base de mortiños de calidad</p>
                </div>
                    <div class="card-action">
                        <center><a class="waves-effect waves-light btn modal-trigger" href="#modal3">Hacer Pedido</a></center>
                <!-- Modal Structure -->
                <div id="modal3" class="modal bottom-sheet">
                  <div class="modal-content">
                      <form>
                          <table class="striped" style="color:black">
                              <thead>
                                  
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><strong>Producto</strontg></td>
                                      <td><strong>Fecha</strong></td>
                                      <td><strong>Cantidad</strong></td>
                                      <td><strong>Unidad de medida</strong></td>
                                      <td><strong>Cliente</strong></td>
                                      <td><strong>Total+iva<strong></td>
                                  </tr>
                                  <tr>
                                      <td>Helados</td>
                                      <td><input placeholder="aqui va la fecha" type="date"></td>
                                      <td><input type="number" placeholder="aqui va la cantidad"></td>
                                      <td><input type="text" placeholder="unidad de medida"></td>
                                      <td><input type="text" placeholder="cliente"></td>
                                      <td><input type="text" placeholder="totalPedido"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <center><button class="btn" type="submit" onclick="confirm('Esta seguro de realizar el pedido?');">Guardar</button>
                          <a href="#!" class="modal-close btn waves-effect waves-green btn-flat">Cerrar</a></center>
                      </form>
                  </div>               
                </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
        <div style="margin-left:10px;margin-top:127px">
    <a href="#"><?= $this->Html->image('t.png', ['title' => 'Twiter']) ?></a>
    <a href="#"><?= $this->Html->image('g.png', ['title' => 'Gmail']) ?></a>
    <a href="#"><?= $this->Html->image('y.png', ['title' => 'Youtube']) ?></a>
    <a href="#"><?= $this->Html->image('i.png', ['title' => 'Instagram']) ?></a>
    <a href="#"><?= $this->Html->image('a.png', ['title' => 'Facebook']) ?></a>
    </div>
    </div>

 