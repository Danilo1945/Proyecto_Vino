<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socio[]|\Cake\Collection\CollectionInterface $socio
 */
?>

<div class="hide" >
    
</div>
<div class="row" >
    
    
    
    <div class="col s12 m3" >
        <div class="card darken-1 " id="abajo_menu">
            <div class="card-content white-text">
                <span class="card-title green-text">MENU</span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('New Socio'), ['action' => 'add']) ?></li>
                   
                    
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
            </div>
        </div>
    </div>

    
    
    
    
    
    <div class="col s12 m9">
        <div class="card darken-1"  id="abajo_menu">
            <div class="card-content black-text" >
                <span class="card-title green-text"><?= __('EL UlTIMO Inca') ?></span>
                
                
            </div>
        </div>
        

      
    </div>
</div>
