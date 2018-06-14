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
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="brand">
					   <?= $this->Html->image('logo160x160px.png', ['alt' => 'CakePHP']) ?>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Forgot Password</h4>
							 <?= $this->Form->create($user) ?>
							 
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="form-text text-muted">
										By clicking "Reset Password" we will send a password reset link
									</div>
								</div>

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Reset Password
									</button>
								</div>
							<?= $this->Form->end() ?>
						</div>
					</div>
					<div class="footer">
						       © 2018 Copyright El Ultimo Inca: Todos los derechos reservados 
					</div>
				</div>
			</div>
		</div>
	</section>







