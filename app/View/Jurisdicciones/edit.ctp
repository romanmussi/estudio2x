<div class="jurisdicciones form">
<?php echo $this->Form->create('Jurisdiccion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Jurisdiccion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('ministerio_nombre');
		echo $this->Form->input('ministerio_direccion');
		echo $this->Form->input('ministerio_codigo_postal');
		echo $this->Form->input('ministerio_telefono');
		echo $this->Form->input('ministerio_mail');
		echo $this->Form->input('ministerio_localidad_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Jurisdiccion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Jurisdiccion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jurisdicciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instits'), array('controller' => 'instits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instit'), array('controller' => 'instits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipoinstits'), array('controller' => 'tipoinstits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoinstit'), array('controller' => 'tipoinstits', 'action' => 'add')); ?> </li>
	</ul>
</div>
