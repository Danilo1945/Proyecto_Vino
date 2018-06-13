<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>


<div class="hide" style="color: white">
    <?= $this->layout = 'login'; ?>
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

                                <?= $this->Form->create() ?>

                                <legend><?= __('Login') ?></legend>
                                <?php
                                echo $this->Form->control('username',['required']);

                                echo $this->Form->control('password',['required']);
                                ?>

                                <div class="form-group">
                                    <label>
                                        <?= $this->Html->link(__('Olvide mi contraseña'), ['controller' => 'users', 'action' => 'index']) ?>

                                    </label>
                                </div>




                                <div class="form-group no-margin">
                                     <?= $this->Form->button(__('Loguin'),['class'=>'btn btn-primary btn-block']) ?>
                                </div>




                                <div class="margin-top20 text-center">
                                    ¿No tienes una Cuenta?  <?= $this->Html->link(__('Crea Una'), ['controller' => 'users', 'action' => 'registrarse']) ?>
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
  













