<div class="pessoasJustificativas view">
<h2><?php echo __('Pessoas Justificativa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pessoasJustificativa['PessoasJustificativa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($pessoasJustificativa['PessoasJustificativa']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($pessoasJustificativa['PessoasJustificativa']['matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($pessoasJustificativa['PessoasJustificativa']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($pessoasJustificativa['PessoasJustificativa']['senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gestor'); ?></dt>
		<dd>
			<?php echo h($pessoasJustificativa['PessoasJustificativa']['gestor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Setore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pessoasJustificativa['Setore']['id'], array('controller' => 'setores', 'action' => 'view', $pessoasJustificativa['Setore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pessoasJustificativa['PessoasJustificativa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pessoasJustificativa['PessoasJustificativa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Justificativas'); ?></h3>
	<?php if (!empty($pessoasJustificativa['Justificativa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoas Justificativa Id'); ?></th>
		<th><?php echo __('Pessoas Gestor Justificativa'); ?></th>
		<th><?php echo __('Pessoas Rh Justificativa'); ?></th>
		<th><?php echo __('Data Inicial'); ?></th>
		<th><?php echo __('Data Final'); ?></th>
		<th><?php echo __('Qtd Horas'); ?></th>
		<th><?php echo __('Complemento Justificativa'); ?></th>
		<th><?php echo __('Motivo Ocorrencia'); ?></th>
		<th><?php echo __('Justificativa'); ?></th>
		<th><?php echo __('Situacao Gestor'); ?></th>
		<th><?php echo __('Situacao Rh'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pessoasJustificativa['Justificativa'] as $justificativa): ?>
		<tr>
			<td><?php echo $justificativa['id']; ?></td>
			<td><?php echo $justificativa['pessoas_justificativa_id']; ?></td>
			<td><?php echo $justificativa['pessoas_gestor_justificativa']; ?></td>
			<td><?php echo $justificativa['pessoas_rh_justificativa']; ?></td>
			<td><?php echo $justificativa['data_inicial']; ?></td>
			<td><?php echo $justificativa['data_final']; ?></td>
			<td><?php echo $justificativa['qtd_horas']; ?></td>
			<td><?php echo $justificativa['complemento_justificativa']; ?></td>
			<td><?php echo $justificativa['motivo_ocorrencia']; ?></td>
			<td><?php echo $justificativa['justificativa']; ?></td>
			<td><?php echo $justificativa['situacao_gestor']; ?></td>
			<td><?php echo $justificativa['situacao_rh']; ?></td>
			<td><?php echo $justificativa['created']; ?></td>
			<td><?php echo $justificativa['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'justificativas', 'action' => 'view', $justificativa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'justificativas', 'action' => 'edit', $justificativa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'justificativas', 'action' => 'delete', $justificativa['id']), array(), __('Are you sure you want to delete # %s?', $justificativa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
