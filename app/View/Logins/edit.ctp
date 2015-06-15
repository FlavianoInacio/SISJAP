<div class="logins form">
<?php echo $this->Form->create('Login'); ?>
	<fieldset>
		<legend><?php echo __('Editar Usuário'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('login');
		echo $this->Form->input('senha');
		echo $this->Form->input('pessoas_justificativa_id',array('label'=>'Colaborador'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>

