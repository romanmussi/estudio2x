<div class="instits form">
<?php echo $this->Form->create('Instit'); ?>
	<fieldset>
		<legend><?php echo __('Add Instit'); ?></legend>
	<?php
		echo $this->Form->input('gestion_id');
		echo $this->Form->input('dependencia_id');
		echo $this->Form->input('nombre_dep');
		echo $this->Form->input('tipoinstit_id');
		echo $this->Form->input('jurisdiccion_id');
		echo $this->Form->input('cue');
		echo $this->Form->input('anexo');
		echo $this->Form->input('esanexo');
		echo $this->Form->input('nombre');
		echo $this->Form->input('nroinstit');
		echo $this->Form->input('anio_creacion');
		echo $this->Form->input('direccion');
		echo $this->Form->input('cp');
		echo $this->Form->input('telefono');
		echo $this->Form->input('mail');
		echo $this->Form->input('web');
		echo $this->Form->input('dir_nombre');
		echo $this->Form->input('dir_tipodoc_id');
		echo $this->Form->input('dir_nrodoc');
		echo $this->Form->input('dir_telefono');
		echo $this->Form->input('dir_mail');
		echo $this->Form->input('vice_nombre');
		echo $this->Form->input('vice_tipodoc_id');
		echo $this->Form->input('vice_nrodoc');
		echo $this->Form->input('observacion');
		echo $this->Form->input('activo');
		echo $this->Form->input('ciclo_alta');
		echo $this->Form->input('ciclo_mod');
		echo $this->Form->input('localidad_id');
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('lugar');
		echo $this->Form->input('mail_alternativo');
		echo $this->Form->input('telefono_alternativo');
		echo $this->Form->input('etp_estado_id');
		echo $this->Form->input('claseinstit_id');
		echo $this->Form->input('orientacion_id');
		echo $this->Form->input('depurar_tipoinstit');
		echo $this->Form->input('modalidad_id');
		echo $this->Form->input('observacion_oferta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Instits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipoinstits'), array('controller' => 'tipoinstits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoinstit'), array('controller' => 'tipoinstits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jurisdicciones'), array('controller' => 'jurisdicciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jurisdiccion'), array('controller' => 'jurisdicciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
