<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>

<script>
    $(document).ready(function () {
        $('select').formSelect();
        
    alert(     $("#select_material").   );
        
        
    });
</script>



<div class="hide">

</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">Actions</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('List Pedidos'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['controller' => 'Trabajador', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['controller' => 'Trabajador', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($pedido) ?>
                <span class="card-title green-text"><?= __('Add Pedido') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('fecha_ven', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                
                
                
                
                
                
                
                
                <div class="input-field" id="select_material" >
                    <?= $this->Form->control('_', ['options' => $trabajador, 'empty' => true]) ?>
                </div>
                
                
                
             
                <div class="input-field select_material">
                    
                   
                    <?= $this->Form->control('_', [ 'options' =>$users, 'empty' => true]) ?>
                      
                  
                </div>
                
                
                
                
                
                
                <div class="input-field">


                   <!--SELECTOR PARA EL ESTADO DEL PEDIDO-->
                        <select>
                            <option value="" disabled selected>----Selecciona---</option>
                            <option value="1">Atendido</option>
                            <option value="2">Por Atender</option>
                           
                        </select>
                        <label>Estado del Pedido</label>
                   
                </div>
                
                
                <div class="input-field">
                    <?= $this->Form->control('precio_uni') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('precio_total') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('observaciones_ven') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });

    $('.datepicker').pickadate({
        selectMonths: false, // Creates a dropdown to control month
        selectYears: 200, // Creates a dropdown of 15 years to control year,
        monthsFull: [
            "<?= __d('materialize', 'January') ?>",
            "<?= __d('materialize', 'February') ?>",
            "<?= __d('materialize', 'March') ?>",
            "<?= __d('materialize', 'April') ?>",
            "<?= __d('materialize', 'May') ?>",
            "<?= __d('materialize', 'June') ?>",
            "<?= __d('materialize', 'July') ?>",
            "<?= __d('materialize', 'August') ?>",
            "<?= __d('materialize', 'September') ?>",
            "<?= __d('materialize', 'October') ?>",
            "<?= __d('materialize', 'November') ?>",
            "<?= __d('materialize', 'December') ?>"],
        monthsShort: [
            "<?= __d('materialize', 'Jan') ?>",
            "<?= __d('materialize', 'Fev') ?>",
            "<?= __d('materialize', 'Mar') ?>",
            "<?= __d('materialize', 'Apr') ?>",
            "<?= __d('materialize', 'May') ?>",
            "<?= __d('materialize', 'Jun') ?>",
            "<?= __d('materialize', 'Jul') ?>",
            "<?= __d('materialize', 'Aug') ?>",
            "<?= __d('materialize', 'Sep') ?>",
            "<?= __d('materialize', 'Oct') ?>",
            "<?= __d('materialize', 'Nov') ?>",
            "<?= __d('materialize', 'Dec') ?>"],
        weekdaysFull: [
            "<?= __d('materialize', 'Sunday') ?>",
            "<?= __d('materialize', 'Monday') ?>",
            "<?= __d('materialize', 'Tuesday') ?>",
            "<?= __d('materialize', 'Wednesday') ?>",
            "<?= __d('materialize', 'Thursday') ?>",
            "<?= __d('materialize', 'Friday') ?>",
            "<?= __d('materialize', 'Saturday') ?>"],
        weekdaysShort: [
            "<?= __d('materialize', 'Sun') ?>",
            "<?= __d('materialize', 'Mon') ?>",
            "<?= __d('materialize', 'Tue') ?>",
            "<?= __d('materialize', 'Wed') ?>",
            "<?= __d('materialize', 'Thu') ?>",
            "<?= __d('materialize', 'Fri') ?>",
            "<?= __d('materialize', 'Sat') ?>"],
        weekdaysLetter: [
            "<?= __d('materialize', 'S') ?>",
            "<?= __d('materialize', 'M') ?>",
            "<?= __d('materialize', 'T') ?>",
            "<?= __d('materialize', 'W') ?>",
            "<?= __d('materialize', 'T') ?>",
            "<?= __d('materialize', 'F') ?>",
            "<?= __d('materialize', 'S') ?>"],
        today: "<?= __d('materialize', 'Today') ?>",
        clear: "<?= __d('materialize', 'Clear') ?>",
        close: 'Ok',
        closeOnSelect: true, // Close upon selecting a date,
        format: 'dd/mm/yyyy'
    });

    $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: "<?= __d('materialize', 'Clear') ?>", // text for clear-button
        canceltext: "<?= __d('materialize', 'Cancel') ?>", // Text for cancel-button
        format: "HH:ii",
        autoclose: false, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function(){} //Function for after opening timepicker
    });

</script>