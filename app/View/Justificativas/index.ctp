<div class="justificativas index">
	<h2><?php echo __('Justificativas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pessoas_justificativa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pessoas_gestor_justificativa'); ?></th>
			<th><?php echo $this->Paginator->sort('pessoas_rh_justificativa'); ?></th>
			<th><?php echo $this->Paginator->sort('data_inicial'); ?></th>
			<th><?php echo $this->Paginator->sort('data_final'); ?></th>
			<th><?php echo $this->Paginator->sort('qtd_horas'); ?></th>
			<th><?php echo $this->Paginator->sort('complemento_justificativa'); ?></th>
			<th><?php echo $this->Paginator->sort('motivo_ocorrencia'); ?></th>
			<th><?php echo $this->Paginator->sort('justificativa'); ?></th>
			<th><?php echo $this->Paginator->sort('situacao_gestor'); ?></th>
			<th><?php echo $this->Paginator->sort('situacao_rh'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($justificativas as $justificativa): ?>
	<tr>
		<td><?php echo h($justificativa['Justificativa']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($justificativa['PessoasJustificativa']['id'], array('controller' => 'pessoas_justificativas', 'action' => 'view', $justificativa['PessoasJustificativa']['id'])); ?>
		</td>
		<td><?php echo h($justificativa['Justificativa']['pessoas_gestor_justificativa']); ?>&nbsp;</td>
		<td><?php echo h($justificativa['Justificativa']['pessoas_rh_justificativa']); ?>&nbsp;</td>
		<td><?php echo h($justificativa['Justificativa']['data_inicial']); ?>&nbsp;</td>
		<td><?php echo h($justificativa['Justificativa']['data_final']); ?>&nbsp;</td>
		<td><?php echo h($justificativa['Justificativa']['qtd_horas']); ?>&nbsp;</td>
		<td><?php echo h($justificativa['Justificativa']['complemento_justificativa']); ?>&nbsp;</td>
		<td><?php echo h($justificativa['Justificativa']['motivo_ocorrencia']); ?>&nbsp;</td>
		<td><?php echo h($justificativa['Justificativa']['justificativa']); ?>&nbsp;</td>
		<td><?php echo h($justificativa['Justificativa']['situacao_gestor']); ?>&nbsp;</td>
		<td><?php echo h($justificativa['Justificativa']['situacao_rh']); ?>&nbsp;</td>
		<td><?php echo h($justificativa['Justificativa']['created']); ?>&nbsp;</td>
		<td><?php echo h($justificativa['Justificativa']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $justificativa['Justificativa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $justificativa['Justificativa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $justificativa['Justificativa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $justificativa['Justificativa']['id']))); ?>
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

