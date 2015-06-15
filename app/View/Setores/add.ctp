<div class="setores form">
<?php echo $this->Form->create('Setore'); ?>
	<fieldset>
		<legend><?php echo __('Cadastrar Setor'); ?></legend>
	<?php
		echo $this->Form->input('nome_setor');
		echo $this->Form->input('gestor_id',array('options'=>array($setore)));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>

