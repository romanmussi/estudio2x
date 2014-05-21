<?php //debug($jurisdicciones); ?>
<script>

</script>
<div id="view1col">
    <!--<div class="localidades form">-->
    <?php echo $this->Form->create('Localidad'); ?>
    <fieldset>
        <legend><?php echo __('Add Localidad'); ?></legend>
        <?php
//	echo $this->Form->input('id');
	echo $this->Form->input('Departamento.jurisdiccion_id');
	echo $this->Form->input('departamento_id');
	echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
    <div>
        <h4><?php echo __('Actions'); ?></h4>
        <ul>
            <li><?php echo $this->Html->link(__('List Localidades'), array('action' => 'index')); ?></li>
        </ul>
    </div>
</div>
