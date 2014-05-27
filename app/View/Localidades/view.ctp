<div id="view1col">
    <h2><?php  echo __('Localidad'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
			<?php echo h($localidad['Localidad']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Departamento'); ?></dt>
        <dd>
			<?php echo $this->Html->link($localidad['Departamento']['name'], array('controller' => 'departamentos', 'action' => 'view', $localidad['Departamento']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
			<?php echo h($localidad['Localidad']['name']); ?>
            &nbsp;
        </dd>
    </dl>

    <!--<div class="actions">-->
    <div>
        <h4><?php echo __('Actions'); ?></h4>
        <ul>
            <li><?php echo $this->Html->link(__('Edit Localidad'), array('action' => 'edit', $localidad['Localidad']['id'])); ?> </li>
            <li><?php echo $this->Form->postLink(__('Delete Localidad'), array('action' => 'delete', $localidad['Localidad']['id']), null, __('Are you sure you want to delete # %s?', $localidad['Localidad']['id'])); ?> </li>
            <li><?php echo $this->Html->link(__('List Localidades'), array('action' => 'index')); ?> </li>
        </ul>
    </div>    

    <!--<div class="related">-->
    <div>
        <h3><?php echo __('Related Instits'); ?></h3>
	<?php if (!empty($localidad['Instit'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Cue'); ?></th>
                <th><?php echo __('Anexo'); ?></th>
                <th><?php echo __('Nombre'); ?></th>
                <th><?php echo __('Nroinstit'); ?></th>
                <th><?php echo __('Direccion'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
	<?php
		$i = 0;
		foreach ($localidad['Instit'] as $instit): ?>
            <tr>
                <td><?php echo $instit['id']; ?></td>
                <td><?php echo $instit['cue']; ?></td>
                <td><?php echo $instit['anexo']; ?></td>
                <td><?php echo $instit['nombre']; ?></td>
                <td><?php echo $instit['nroinstit']; ?></td>
                <td><?php echo $instit['direccion']; ?></td>
                <td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'instits', 'action' => 'view', $instit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'instits', 'action' => 'edit', $instit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'instits', 'action' => 'delete', $instit['id']), null, __('Are you sure you want to delete # %s?', $instit['id'])); ?>
                </td>
            </tr>
	<?php endforeach; ?>
        </table>
<?php endif; ?>
    </div>
</div>




