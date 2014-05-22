<?php //debug($jurisdicciones); ?>
<script>
    $(document).ready(function() {        
        //Define onchange de jurisdicciones > Carga departamentos
        $("#LocalidadJurisdiccionId").on("change", function() {
            $.ajax({
                dataType: "json",
                url: "lista_departamentos/" + $(this).val(),
                data: "",
                success: function(data, textStatus) {
                    var options = '<option value="">Seleccione un Departamento...</option>';
                    $.each(data, function(i, option_name) {
                        options += '<option value="' + i + '">' + option_name + '</option>';
                    });
                    $("#LocalidadDepartamentoId").html(options);
                },
                error: function() {
                    alert(
                            "Atención!! No se pudo recuperar información importante. \n\
Cargue nuevamente la página; si el problema persiste informe al programador."
                            );
                }
            });
        });
     });
</script>
<div id="view1col">
    <!--<div class="localidades form">-->
    <?php // echo $this->Form->create('Localidad', array('novalidate' => true)); ?>
    <?php echo $this->Form->create('Localidad'); ?>
    <fieldset>
        <legend><?php echo __('Add Localidad'); ?></legend>
        <?php
//	echo $this->Form->input('id');
	echo $this->Form->input('jurisdiccion_id');
	echo $this->Form->input('departamento_id', array('empty' => 
            'Debe seleccionar primero una Jurisdicción...'));
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
