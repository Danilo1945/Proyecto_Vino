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
      <li><?= $this->Html->link(__('Socio'), ['action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('Cliente'), ['action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('Administrador'), ['action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('Proveeedor'), ['action' => 'index']) ?></li>
       <li class="heading"><?= __('GESTIÓN') ?></li>
      <li><?= $this->Html->link(__('Pedido'), ['action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('Venta'), ['action' => 'index']) ?></li>
        <li class="heading"><?= __('INVENTARIO') ?></li>
      <li><?= $this->Html->link(__('Materia Prima'), ['action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('Artículos de la Empresa'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Producto Terminado'), ['action' => 'index']) ?></li>
   
       
        
        <!--boton para regresar al menu-->
       
    </ul>
</nav>




<div class="administrador index large-9 medium-8 columns content">
    <h3><?= __('El Ultimo Inca') ?></h3>
    
    
    
    
    
    
</div>

