<div class="jurisdicciones view">
<h2><?php  echo __('Jurisdiccion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jurisdiccion['Jurisdiccion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($jurisdiccion['Jurisdiccion']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ministerio Nombre'); ?></dt>
		<dd>
			<?php echo h($jurisdiccion['Jurisdiccion']['ministerio_nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ministerio Direccion'); ?></dt>
		<dd>
			<?php echo h($jurisdiccion['Jurisdiccion']['ministerio_direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ministerio Codigo Postal'); ?></dt>
		<dd>
			<?php echo h($jurisdiccion['Jurisdiccion']['ministerio_codigo_postal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ministerio Telefono'); ?></dt>
		<dd>
			<?php echo h($jurisdiccion['Jurisdiccion']['ministerio_telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ministerio Mail'); ?></dt>
		<dd>
			<?php echo h($jurisdiccion['Jurisdiccion']['ministerio_mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ministerio Localidad Id'); ?></dt>
		<dd>
			<?php echo h($jurisdiccion['Jurisdiccion']['ministerio_localidad_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($jurisdiccion['Jurisdiccion']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($jurisdiccion['Jurisdiccion']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jurisdiccion'), array('action' => 'edit', $jurisdiccion['Jurisdiccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jurisdiccion'), array('action' => 'delete', $jurisdiccion['Jurisdiccion']['id']), null, __('Are you sure you want to delete # %s?', $jurisdiccion['Jurisdiccion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jurisdicciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jurisdiccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instits'), array('controller' => 'instits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instit'), array('controller' => 'instits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipoinstits'), array('controller' => 'tipoinstits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoinstit'), array('controller' => 'tipoinstits', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Instits'); ?></h3>
	<?php if (!empty($jurisdiccion['Instit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Gestion Id'); ?></th>
		<th><?php echo __('Dependencia Id'); ?></th>
		<th><?php echo __('Nombre Dep'); ?></th>
		<th><?php echo __('Tipoinstit Id'); ?></th>
		<th><?php echo __('Jurisdiccion Id'); ?></th>
		<th><?php echo __('Cue'); ?></th>
		<th><?php echo __('Anexo'); ?></th>
		<th><?php echo __('Esanexo'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Nroinstit'); ?></th>
		<th><?php echo __('Anio Creacion'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Cp'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Web'); ?></th>
		<th><?php echo __('Dir Nombre'); ?></th>
		<th><?php echo __('Dir Tipodoc Id'); ?></th>
		<th><?php echo __('Dir Nrodoc'); ?></th>
		<th><?php echo __('Dir Telefono'); ?></th>
		<th><?php echo __('Dir Mail'); ?></th>
		<th><?php echo __('Vice Nombre'); ?></th>
		<th><?php echo __('Vice Tipodoc Id'); ?></th>
		<th><?php echo __('Vice Nrodoc'); ?></th>
		<th><?php echo __('Observacion'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Ciclo Alta'); ?></th>
		<th><?php echo __('Ciclo Mod'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Localidad Id'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th><?php echo __('Lugar'); ?></th>
		<th><?php echo __('Mail Alternativo'); ?></th>
		<th><?php echo __('Telefono Alternativo'); ?></th>
		<th><?php echo __('Etp Estado Id'); ?></th>
		<th><?php echo __('Claseinstit Id'); ?></th>
		<th><?php echo __('Orientacion Id'); ?></th>
		<th><?php echo __('Depurar Tipoinstit'); ?></th>
		<th><?php echo __('Modalidad Id'); ?></th>
		<th><?php echo __('Observacion Oferta'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($jurisdiccion['Instit'] as $instit): ?>
		<tr>
			<td><?php echo $instit['id']; ?></td>
			<td><?php echo $instit['gestion_id']; ?></td>
			<td><?php echo $instit['dependencia_id']; ?></td>
			<td><?php echo $instit['nombre_dep']; ?></td>
			<td><?php echo $instit['tipoinstit_id']; ?></td>
			<td><?php echo $instit['jurisdiccion_id']; ?></td>
			<td><?php echo $instit['cue']; ?></td>
			<td><?php echo $instit['anexo']; ?></td>
			<td><?php echo $instit['esanexo']; ?></td>
			<td><?php echo $instit['nombre']; ?></td>
			<td><?php echo $instit['nroinstit']; ?></td>
			<td><?php echo $instit['anio_creacion']; ?></td>
			<td><?php echo $instit['direccion']; ?></td>
			<td><?php echo $instit['cp']; ?></td>
			<td><?php echo $instit['telefono']; ?></td>
			<td><?php echo $instit['mail']; ?></td>
			<td><?php echo $instit['web']; ?></td>
			<td><?php echo $instit['dir_nombre']; ?></td>
			<td><?php echo $instit['dir_tipodoc_id']; ?></td>
			<td><?php echo $instit['dir_nrodoc']; ?></td>
			<td><?php echo $instit['dir_telefono']; ?></td>
			<td><?php echo $instit['dir_mail']; ?></td>
			<td><?php echo $instit['vice_nombre']; ?></td>
			<td><?php echo $instit['vice_tipodoc_id']; ?></td>
			<td><?php echo $instit['vice_nrodoc']; ?></td>
			<td><?php echo $instit['observacion']; ?></td>
			<td><?php echo $instit['activo']; ?></td>
			<td><?php echo $instit['ciclo_alta']; ?></td>
			<td><?php echo $instit['ciclo_mod']; ?></td>
			<td><?php echo $instit['created']; ?></td>
			<td><?php echo $instit['modified']; ?></td>
			<td><?php echo $instit['localidad_id']; ?></td>
			<td><?php echo $instit['departamento_id']; ?></td>
			<td><?php echo $instit['lugar']; ?></td>
			<td><?php echo $instit['mail_alternativo']; ?></td>
			<td><?php echo $instit['telefono_alternativo']; ?></td>
			<td><?php echo $instit['etp_estado_id']; ?></td>
			<td><?php echo $instit['claseinstit_id']; ?></td>
			<td><?php echo $instit['orientacion_id']; ?></td>
			<td><?php echo $instit['depurar_tipoinstit']; ?></td>
			<td><?php echo $instit['modalidad_id']; ?></td>
			<td><?php echo $instit['observacion_oferta']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'instits', 'action' => 'view', $instit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'instits', 'action' => 'edit', $instit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'instits', 'action' => 'delete', $instit['id']), null, __('Are you sure you want to delete # %s?', $instit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Instit'), array('controller' => 'instits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Departamentos'); ?></h3>
	<?php if (!empty($jurisdiccion['Departamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Jurisdiccion Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($jurisdiccion['Departamento'] as $departamento): ?>
		<tr>
			<td><?php echo $departamento['id']; ?></td>
			<td><?php echo $departamento['jurisdiccion_id']; ?></td>
			<td><?php echo $departamento['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'departamentos', 'action' => 'view', $departamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'departamentos', 'action' => 'edit', $departamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'departamentos', 'action' => 'delete', $departamento['id']), null, __('Are you sure you want to delete # %s?', $departamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tipoinstits'); ?></h3>
	<?php if (!empty($jurisdiccion['Tipoinstit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Jurisdiccion Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($jurisdiccion['Tipoinstit'] as $tipoinstit): ?>
		<tr>
			<td><?php echo $tipoinstit['id']; ?></td>
			<td><?php echo $tipoinstit['jurisdiccion_id']; ?></td>
			<td><?php echo $tipoinstit['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tipoinstits', 'action' => 'view', $tipoinstit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tipoinstits', 'action' => 'edit', $tipoinstit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tipoinstits', 'action' => 'delete', $tipoinstit['id']), null, __('Are you sure you want to delete # %s?', $tipoinstit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tipoinstit'), array('controller' => 'tipoinstits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
