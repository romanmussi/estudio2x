<div class="departamentos form">
<?php echo $this->Form->create('Departamento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Departamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('jurisdiccion_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Departamento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Departamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jurisdicciones'), array('controller' => 'jurisdicciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jurisdiccion'), array('controller' => 'jurisdicciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instits'), array('controller' => 'instits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instit'), array('controller' => 'instits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
