<div class="justificativas form">
<?php echo $this->Form->create('Justificativa'); ?>
	<fieldset>
		<legend><?php echo __('Add Justificativa'); ?></legend>
	<?php
		echo $this->Form->input('pessoas_justificativa_id');
		echo $this->Form->input('pessoas_gestor_justificativa');
		echo $this->Form->input('pessoas_rh_justificativa');
		echo $this->Form->input('data_inicial');
		echo $this->Form->input('data_final');
		echo $this->Form->input('qtd_horas');
		echo $this->Form->input('complemento_justificativa');
		echo $this->Form->input('motivo_ocorrencia');
		echo $this->Form->input('justificativa');
		echo $this->Form->input('situacao_gestor');
		echo $this->Form->input('situacao_rh');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

