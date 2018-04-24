<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador[]|\Cake\Collection\CollectionInterface $administrador
 */
?>

  






<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <!--LISTA EL MENU DE OPCIONES DE LA ENTIDAD-->
        <li class="heading"><?= __('PERSONAS') ?></li>
        <li><?= $this->Html->link(__('Personal'), ['action' => 'index']) ?></li>
      <li><a href="../ElUltimoInca/socio">Socio</a> </li>
      <li><a href="../ElUltimoInca/cliente">Cliente</a> </li>
      <li><a href="../ElUltimoInca/administrador">Administrador</a></li>
      <li><a href="../ElUltimoInca/trabajador">Trabajador</a></li>
      <li><a href="../ElUltimoInca/proveedor">Proveedor</a></li>
     
      
       
      
       <li class="heading"><?= __('GESTIÓN') ?></li>
   
        <li><a href="../ElUltimoInca/pedido">Pedidos</a></li>
      <li><a href="../ElUltimoInca/venta">Ventas</a></li>
       <li><a href="../ElUltimoInca/AreaProduccion">Area de producción</a></li>
      <li><a href="../ElUltimoInca/HojaProduccionVino">Hoja de producción de vino</a></li>
       <li><a href="../ElUltimoInca/salidas">Gestion contabilidad (salidas)</a></li>
       
        <li class="heading"><?= __('INVENTARIO') ?></li>
        <li><a href="../ElUltimoInca/CompraMatPri">Materia Prima</a></li>
      
   
      
          <li><a href="../ElUltimoInca/InventarioEmpresa">Inventario Empresa</a> </li>
      
  
            <li><a href="../ElUltimoInca/ProductoTerminado">Producto Terminado</a> </li>
      <li><a href="../ElUltimoInca/empresa">Empresa</a> </li>
       
      <li class="heading"><?= __('CONFIGURACIONES') ?></li>
       <li><a href="../ElUltimoInca/item">Categoria de Artículos(items)</a></li>
 
      
          <li><a href="../ElUltimoInca/UnidadMedida">Unidades de Medida</a></li>
        
        <!--boton para regresar al menu-->
       
    </ul>
</nav>




<div class="administrador index large-9 medium-8 columns content">
    <h3><?= __('El Ultimo Inca') ?></h3>
    
    
    
    
    
    
</div>

