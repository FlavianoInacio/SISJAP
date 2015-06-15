<div class="pessoasJustificativas form">
<?php echo $this->Form->create('PessoasJustificativa'); ?>
	<fieldset>
		<legend><?php echo __('Cadastrar Colaboradores'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('matricula');
		echo $this->Form->input('setore_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>

