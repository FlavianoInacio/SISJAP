<div class="setores view">
<h2><?php echo __('Setore'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($setore['Setore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Setor'); ?></dt>
		<dd>
			<?php echo h($setore['Setore']['nome_setor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($setore['Setore']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($setore['Setore']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Setore'), array('action' => 'edit', $setore['Setore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Setore'), array('action' => 'delete', $setore['Setore']['id']), array(), __('Are you sure you want to delete # %s?', $setore['Setore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Setores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setore'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas Justificativas'), array('controller' => 'pessoas_justificativas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoas Justificativa'), array('controller' => 'pessoas_justificativas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pessoas Justificativas'); ?></h3>
	<?php if (!empty($setore['PessoasJustificativa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Matricula'); ?></th>
		<th><?php echo __('Login'); ?></th>
		<th><?php echo __('Senha'); ?></th>
		<th><?php echo __('Gestor'); ?></th>
		<th><?php echo __('Setore Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($setore['PessoasJustificativa'] as $pessoasJustificativa): ?>
		<tr>
			<td><?php echo $pessoasJustificativa['id']; ?></td>
			<td><?php echo $pessoasJustificativa['nome']; ?></td>
			<td><?php echo $pessoasJustificativa['matricula']; ?></td>
			<td><?php echo $pessoasJustificativa['login']; ?></td>
			<td><?php echo $pessoasJustificativa['senha']; ?></td>
			<td><?php echo $pessoasJustificativa['gestor']; ?></td>
			<td><?php echo $pessoasJustificativa['setore_id']; ?></td>
			<td><?php echo $pessoasJustificativa['created']; ?></td>
			<td><?php echo $pessoasJustificativa['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pessoas_justificativas', 'action' => 'view', $pessoasJustificativa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pessoas_justificativas', 'action' => 'edit', $pessoasJustificativa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pessoas_justificativas', 'action' => 'delete', $pessoasJustificativa['id']), array(), __('Are you sure you want to delete # %s?', $pessoasJustificativa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
