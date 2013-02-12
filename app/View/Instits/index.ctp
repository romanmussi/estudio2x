<div class="instits index">
	<h2><?php echo __('Instits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('gestion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dependencia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_dep'); ?></th>
			<th><?php echo $this->Paginator->sort('tipoinstit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('jurisdiccion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cue'); ?></th>
			<th><?php echo $this->Paginator->sort('anexo'); ?></th>
			<th><?php echo $this->Paginator->sort('esanexo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('nroinstit'); ?></th>
			<th><?php echo $this->Paginator->sort('anio_creacion'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('cp'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('mail'); ?></th>
			<th><?php echo $this->Paginator->sort('web'); ?></th>
			<th><?php echo $this->Paginator->sort('dir_nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('dir_tipodoc_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dir_nrodoc'); ?></th>
			<th><?php echo $this->Paginator->sort('dir_telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('dir_mail'); ?></th>
			<th><?php echo $this->Paginator->sort('vice_nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('vice_tipodoc_id'); ?></th>
			<th><?php echo $this->Paginator->sort('vice_nrodoc'); ?></th>
			<th><?php echo $this->Paginator->sort('observacion'); ?></th>
			<th><?php echo $this->Paginator->sort('activo'); ?></th>
			<th><?php echo $this->Paginator->sort('ciclo_alta'); ?></th>
			<th><?php echo $this->Paginator->sort('ciclo_mod'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('localidad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('departamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lugar'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_alternativo'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono_alternativo'); ?></th>
			<th><?php echo $this->Paginator->sort('etp_estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('claseinstit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('orientacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('depurar_tipoinstit'); ?></th>
			<th><?php echo $this->Paginator->sort('modalidad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('observacion_oferta'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($instits as $instit): ?>
	<tr>
		<td><?php echo h($instit['Instit']['id']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['gestion_id']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['dependencia_id']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['nombre_dep']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($instit['Tipoinstit']['name'], array('controller' => 'tipoinstits', 'action' => 'view', $instit['Tipoinstit']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($instit['Jurisdiccion']['name'], array('controller' => 'jurisdicciones', 'action' => 'view', $instit['Jurisdiccion']['id'])); ?>
		</td>
		<td><?php echo h($instit['Instit']['cue']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['anexo']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['esanexo']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['nroinstit']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['anio_creacion']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['cp']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['mail']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['web']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['dir_nombre']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['dir_tipodoc_id']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['dir_nrodoc']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['dir_telefono']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['dir_mail']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['vice_nombre']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['vice_tipodoc_id']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['vice_nrodoc']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['observacion']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['activo']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['ciclo_alta']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['ciclo_mod']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['created']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($instit['Localidad']['name'], array('controller' => 'localidades', 'action' => 'view', $instit['Localidad']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($instit['Departamento']['name'], array('controller' => 'departamentos', 'action' => 'view', $instit['Departamento']['id'])); ?>
		</td>
		<td><?php echo h($instit['Instit']['lugar']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['mail_alternativo']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['telefono_alternativo']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['etp_estado_id']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['claseinstit_id']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['orientacion_id']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['depurar_tipoinstit']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['modalidad_id']); ?>&nbsp;</td>
		<td><?php echo h($instit['Instit']['observacion_oferta']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $instit['Instit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $instit['Instit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $instit['Instit']['id']), null, __('Are you sure you want to delete # %s?', $instit['Instit']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Instit'), array('action' => 'add')); ?></li>
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
