<div class="instits view">
    <h2><?php  echo __('Instit'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
        <?php echo h($instit['Instit']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Tipoinstit'); ?></dt>
        <dd>
        <?php echo h($instit['Tipoinstit']['name']); ?>
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
        <dt><?php echo __('Activo'); ?></dt>
        <dd>
        <?php echo h($instit['Instit']['activo']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Localidad'); ?></dt>
        <dd>
        <?php echo $this->Html->link($instit['Localidad']['name'], array('controller' => 'localidades', 'action' => 'view', $instit['Localidad']['id'])); ?>
            &nbsp;
        </dd>

    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Instits'), array('action' => 'index')); ?> </li>
    </ul>
</div>
