<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->set('bakeEntities', array(
    0 => 'Users',
    1 => 'Roles',
));
?>


<div class="hide" style="color: white">
    <?= $this->layout = 'Login'; ?>
</div>


<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                      <?= $this->Html->image('logo160x160px.png', ['alt' => 'CakePHP']) ?>
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Registrarse</h4>
                        <?= $this->Form->create($user) ?>

                        
                        <?php
            echo $this->Form->control('name',['required']);
            echo $this->Form->control('lastname',['required']);
            echo $this->Form->control('username',['required']);
            echo $this->Form->control('Telefono',['required']);
            echo $this->Form->control('email',['required']);
            echo $this->Form->control('password',['required']);
            echo $this->Form->control('confirm_password',['type'=>'password'],['Confirmar la Contraseña:','required']);
           
                       
                        ?>

                        <div class="form-group">
                            <label>
                              
                            </label>
                        </div>

                        <div class="form-group no-margin">
                           <?= $this->Form->button(__('Registrarse')) ?>
                        </div>
                        <div class="margin-top20 text-center">
                            ¿Ya tienes una cuenta?  <?= $this->Html->link(__('Login'), ['controller' => 'users', 'action' => 'login']) ?>
                           
                        </div>
<?= $this->Form->end() ?>
                    </div>
                </div>
                
                
                <div class="footer">
                    <br>
                            © 2018 Copyright El Ultimo Inca: Todos los derechos reservados 
                </div>
            </div>
        </div>
    </div>
</section>












