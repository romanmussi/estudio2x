<div class="instits view">
<h2><?php  echo __('Instit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gestion Id'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['gestion_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dependencia Id'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['dependencia_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Dep'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['nombre_dep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipoinstit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($instit['Tipoinstit']['name'], array('controller' => 'tipoinstits', 'action' => 'view', $instit['Tipoinstit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jurisdiccion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($instit['Jurisdiccion']['name'], array('controller' => 'jurisdicciones', 'action' => 'view', $instit['Jurisdiccion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cue'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['cue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anexo'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['anexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Esanexo'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['esanexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nroinstit'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['nroinstit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anio Creacion'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['anio_creacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cp'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['cp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['web']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir Nombre'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['dir_nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir Tipodoc Id'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['dir_tipodoc_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir Nrodoc'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['dir_nrodoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir Telefono'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['dir_telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir Mail'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['dir_mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vice Nombre'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['vice_nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vice Tipodoc Id'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['vice_tipodoc_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vice Nrodoc'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['vice_nrodoc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['observacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['activo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciclo Alta'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['ciclo_alta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciclo Mod'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['ciclo_mod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($instit['Localidad']['name'], array('controller' => 'localidades', 'action' => 'view', $instit['Localidad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($instit['Departamento']['name'], array('controller' => 'departamentos', 'action' => 'view', $instit['Departamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lugar'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['lugar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail Alternativo'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['mail_alternativo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono Alternativo'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['telefono_alternativo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etp Estado Id'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['etp_estado_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Claseinstit Id'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['claseinstit_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orientacion Id'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['orientacion_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Depurar Tipoinstit'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['depurar_tipoinstit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modalidad Id'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['modalidad_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion Oferta'); ?></dt>
		<dd>
			<?php echo h($instit['Instit']['observacion_oferta']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instit'), array('action' => 'edit', $instit['Instit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instit'), array('action' => 'delete', $instit['Instit']['id']), null, __('Are you sure you want to delete # %s?', $instit['Instit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instit'), array('action' => 'add')); ?> </li>
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
