<div class="logins view">
<h2><?php echo __('Usuário'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($login['Login']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($login['Login']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Criado em'); ?></dt>
		<dd>
			<?php echo h($login['Login']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado em'); ?></dt>
		<dd>
			<?php echo h($login['Login']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Colaborador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($login['PessoasJustificativa']['nome'], array('controller' => 'pessoas_justificativas', 'action' => 'view', $login['PessoasJustificativa']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
