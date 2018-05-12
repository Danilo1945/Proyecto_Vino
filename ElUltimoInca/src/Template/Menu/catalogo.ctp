
<div class="hide">
    <?= $this->layout = "publico"; ?>
</div>

      



        
    <!-- Dropdown Structure -->
   

    
    
    
    
    
    
    
    
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
    