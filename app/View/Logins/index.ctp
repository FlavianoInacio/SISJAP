<div class="logins index">
	<h2><?php echo __('Logins'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('login'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Criado em'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Modificado em'); ?></th>
			<th><?php echo $this->Paginator->sort('pessoas_justificativa_id','Colaborador'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($logins as $login): ?>
	<tr>
		<td><?php echo h($login['Login']['login']); ?>&nbsp;</td>
		<td><?php echo h($login['Login']['created']); ?>&nbsp;</td>
		<td><?php echo h($login['Login']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($login['PessoasJustificativa']['nome'], array('controller' => 'pessoas_justificativas', 'action' => 'view', $login['PessoasJustificativa']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $login['Login']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $login['Login']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $login['Login']['id']), array('confirm' => __('Tem certeza que deseja deletar o usuário %s?', $login['Login']['login']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>	
	</div>
</div>

