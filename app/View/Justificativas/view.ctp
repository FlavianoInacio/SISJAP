<div class="justificativas view">
<h2><?php echo __('Justificativa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pessoas Justificativa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($justificativa['PessoasJustificativa']['id'], array('controller' => 'pessoas_justificativas', 'action' => 'view', $justificativa['PessoasJustificativa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pessoas Gestor Justificativa'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['pessoas_gestor_justificativa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pessoas Rh Justificativa'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['pessoas_rh_justificativa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Inicial'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['data_inicial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Final'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['data_final']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qtd Horas'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['qtd_horas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complemento Justificativa'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['complemento_justificativa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motivo Ocorrencia'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['motivo_ocorrencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Justificativa'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['justificativa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Situacao Gestor'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['situacao_gestor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Situacao Rh'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['situacao_rh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($justificativa['Justificativa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
