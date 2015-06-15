<div class="anexosJustificativas view">
<h2><?php echo __('Anexos Justificativa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($anexosJustificativa['AnexosJustificativa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Justificativa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($anexosJustificativa['Justificativa']['id'], array('controller' => 'justificativas', 'action' => 'view', $anexosJustificativa['Justificativa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Arquivo'); ?></dt>
		<dd>
			<?php echo h($anexosJustificativa['AnexosJustificativa']['nome_arquivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($anexosJustificativa['AnexosJustificativa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($anexosJustificativa['AnexosJustificativa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

