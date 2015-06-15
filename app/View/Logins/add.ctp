<div class="logins form">
<?php echo $this->Form->create('Login'); ?>
	<fieldset>
		<legend><?php echo __('Cadastro de Login'); ?></legend>
	<?php
		echo $this->Form->input('login');
		echo $this->Form->input('senha');
		echo $this->Form->input('pessoas_justificativa_id',array('label'=>'Colaborador'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>

