<?php //debug($jurisdicciones); ?>
<?php //debug($departamentos); ?>
<?php //debug($this->request->data); ?>
<script>
    $(document).ready(function() {        
        //Define onchange de jurisdicciones > Carga departamentos
        $("#DepartamentoJurisdiccionId").on("change", function() {
            $.ajax({
                dataType: "json",
                url: "../lista_departamentos/" + $(this).val(),
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
<?php echo $this->Form->create('Localidad'); ?>
	<fieldset>
		<legend><?php echo __('Edit Localidad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Departamento.jurisdiccion_id');
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<div>
	<h4><?php echo __('Actions'); ?></h4>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Localidad.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Localidad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('action' => 'index')); ?></li>
	</ul>
</div>
</div>
