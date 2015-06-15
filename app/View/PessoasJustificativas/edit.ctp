<div class="pessoasJustificativas form">
<?php echo $this->Form->create('PessoasJustificativa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pessoas Justificativa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('matricula');
		echo $this->Form->input('gestor');
		echo $this->Form->input('setore_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

