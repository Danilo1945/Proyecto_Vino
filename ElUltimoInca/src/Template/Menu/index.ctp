


<div class="row ">
    <div class="col s2 "  >


       

        
        <div class="collection " style=" position: static">

            <li class="heading"><?= __('') ?></li>
            <li class="heading"><?= __('PERSONAS') ?></li>
            <li class="heading"><?= __('') ?></li>
            <a href="../ElUltimoInca/socio" class="collection-item">Socio</a>
            <a href="../ElUltimoInca/cliente" class="collection-item">Cliente</a>
            <a href="../ElUltimoInca/administrador" class="collection-item">Administrador</a>
            <a href="../ElUltimoInca/trabajador" class="collection-item">Trabajador</a>
            <a href="../ElUltimoInca/proveedor" class="collection-item">Proveedor</a>
            <li class="heading"><?= __('') ?></li>
            <li class="heading"><?= __('GESTIÓN') ?></li>
            <li class="heading"><?= __('') ?></li>
            <a href="../ElUltimoInca/pedido" class="collection-item">Pedidos</a>
            <a href="../ElUltimoInca/venta" class="collection-item">Ventas</a>
            <a href="../ElUltimoInca/AreaProduccion" class="collection-item">Area de producción</a>
            <a href="../ElUltimoInca/HojaProduccionVino" class="collection-item">Hoja de producción de vino</a>
            <a href="../ElUltimoInca/salidas" class="collection-item">Gestion contabilidad (salidas)</a>
            <li class="heading"><?= __('') ?></li>
            <li class="heading"><?= __('INVENTARIO') ?></li>
            <li class="heading"><?= __('') ?></li>
            <a href="../ElUltimoInca/CompraMatPri" class="collection-item">Materia Prima</a>
            <a href="../ElUltimoInca/InventarioEmpresa" class="collection-item">Inventario Empresa</a>
            <a href="../ElUltimoInca/ProductoTerminado" class="collection-item">Producto Terminado</a>
            <a href="../../ElUltimoInca/empresa" class="collection-item">Empresa</a>
            <li class="heading"><?= __('') ?></li>
            <li class="heading"><?= __('CONFIGURACIONES') ?></li>
            <li class="heading"><?= __('') ?></li>
            <a href="../ElUltimoInca/item" class="collection-item">Categoria de Artículos(items)</a>
            <a href="../ElUltimoInca/UnidadMedida" class="collection-item">Unidades de Medida</a>
        </div>


    </div>
    
    <div class="col s10 center "> 
        <h3><?= __('El Ultimo Inca') ?></h3>
        
        
        <div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
    <div class="carousel-item red white-text" href="#one!">
     
      <h2>First Panel</h2>
         <?= $this->Html->image('imgVino.jpg', ['alt' => 'CakePHP']) ?>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
         <?= $this->Html->image('imgVino2.jpg', ['alt' => 'CakePHP']) ?>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
        
        
        
        
        
        
    </div>
    
</div>

<script> 
    
  $('.carousel.carousel-slider').carousel({fullWidth: true});
        
</script>



