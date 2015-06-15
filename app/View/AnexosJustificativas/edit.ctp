<div class="anexosJustificativas form">
<?php echo $this->Form->create('AnexosJustificativa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Anexos Justificativa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('justificativa_id');
		echo $this->Form->input('nome_arquivo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

