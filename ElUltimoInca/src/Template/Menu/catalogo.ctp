
<div class="hide">
    <?= $this->layout = "publico"; ?>
</div>

      



        
    <!-- Dropdown Structure -->
   

    
    
    
    
    
    
    
    
       <div class="row">
           <center><b><h6>Catálogo de productos</h6></b></center>
            <div class="col s12 m12" style=" height: 280px;float:left" >  <!--   inicio del columna-->
                 <div class="slider">
                    <ul class="slides" style="height:200px">
                        <li>
                            <?= $this->Html->image('carucel.jpg', ['alt' => 'CakePHP'],['width' => '100px'],
                                    ['height' => '100px']) ?>
                            <div class="caption">
                                <h4><p>El mejor vino</p>
                                    <p>de mortiño a $6.00</p></h4>
                            </div>
                        </li>
                        <li>
                            <?= $this->Html->image('carucel2.jpg', ['alt' => 'CakePHP']) ?>
                            <div class="caption">
                                <h4><p>El mejor vino</p>
                                    <p>de mortiño a $6.00</p></h4>
                            </div>
                        </li>
                        <li>
                            <?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP']) ?>
                            <div class="caption">
                                <h4><p>Deliciosos helados</p>
                                    <p>a $0.30 la unidad</p></h4>
                            </div>
                        </li>
                    </ul>
                    
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
    <div class="carousel" >
    <a class="carousel-item" href="#one!"><?= $this->Html->image('carucel2.jpg', ['alt' => 'CakePHP']) ?></a>
    <a class="carousel-item" href="#two!"><?= $this->Html->image('carucel.jpg', ['alt' => 'CakePHP']) ?></a>
    <a class="carousel-item" href="#tree!"><?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP']) ?></a>
   </div>  
  </div>
    <script>
     $(document).ready(function(){
    $('.carousel').carousel();
  });
    </script>
    