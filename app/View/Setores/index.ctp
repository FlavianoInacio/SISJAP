<div class="setores index">
	<h2><?php echo __('Setores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome_setor'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($setores as $setore): ?>
	<tr>
		<td><?php echo h($setore['Setore']['id']); ?>&nbsp;</td>
		<td><?php echo h($setore['Setore']['nome_setor']); ?>&nbsp;</td>
		<td><?php echo h($setore['Setore']['created']); ?>&nbsp;</td>
		<td><?php echo h($setore['Setore']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $setore['Setore']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $setore['Setore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $setore['Setore']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $setore['Setore']['id']))); ?>
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

