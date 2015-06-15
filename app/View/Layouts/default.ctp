<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "AGERBA" ?>:
		<?php echo "SISJAP" ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			
			<div align="center" ><?php echo ($this->Html->image('cake.agerbatop.png', array('width'=>'800', 'height'=>'200', 'alt'=>''))); ?></div>
			
		</div>

		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<div class="actions">
				<h3><?php echo __('Menu'); ?></h3>
				<ul>
					<li><?php echo $this->Html->link(__('Cadastrar Login'), array('controller'=>'logins','action' => 'add')); ?></li>
					<li><?php echo $this->Html->link(__('Listar Logins'), array('controller'=>'logins','action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Cadastrar Colaborador'), array('controller' => 'pessoas_justificativas', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Colaboradores'), array('controller' => 'pessoas_justificativas', 'action' => 'index')); ?> </li>		
					<li><?php echo $this->Html->link(__('Cadastrar Justificativa'), array('controller' => 'justificativas', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Justificativas'), array('controller' => 'justificativas', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Cadastrar Setor'), array('controller' => 'setores', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar Setores'), array('controller' => 'setores', 'action' => 'index')); ?> </li>
				</ul>
			</div>
			<?php echo $this->fetch('content'); ?>

		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
