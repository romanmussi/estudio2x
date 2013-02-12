<?php //debug($jurisdicciones);  ?>
<script>
    $(document).ready(function(){
        //definir comportamiento de combos
        //cargar cmb_jurisdicciones
carga_cmb_jurisdicciones();
$("#cmb_jurisdicciones").val("34");        
alert($("#cmb_jurisdicciones").val());
//cargar cmb_departamentos
        
        //Cuando cambia cmb_jurisdicciones, recargar cmb_departamentos              
//        if ($("#combo1").val() == "") {
//            $("#combo2").val("");
//        };
//        carga_combo2($("#combo1").val());
//        
//        
//        $("#combo1").on("change", function() {
//            $("#combo2").val("");
//            carga_combo2($("#combo1").val());
//        });
    });
    
function carga_cmb_jurisdicciones() {
    
    $.ajax({
        url:"lista_jurisdicciones",
        dataType:"json",
        data: "",
        success:function (data, textStatus) {
            jurisdicciones_options(data);
        },
        error: function () {
            error_ajax();
        }
    });
};

function jurisdicciones_options(data) {
//alert($("#cmb_jurisdicciones").val())
var options = '<option value="">Seleccione una Jurisdicción...</option>';
  $.each(data, function(i, option_name) {
    options += '<option value="' + i + '">' + option_name + '</option>';
  });
  $("#cmb_jurisdicciones").html(options);
};

function error_ajax() {
alert(
"Atención!! No se pudo recuperar información importante. \n\
Cargue nuevamente la página; si el problema persiste informe al programador."
);
}

    function carga_combo2(val_combo1) {
        if (val_combo1 == "") {
            $("#combo2").html('<option value="">Debe seleccionar primero Combo 1...</option>');
        } else {
            //Aqui traer los datos con ajax
            $.ajax({
                dataType:"html",
                url:"/estudio22v1/Pages/tab1ajax",
                success:function (data, textStatus) {
                    $("#divtest").html(data);
                },
                error: function () {
                    $("#divtest").html('<div id="flashMessage" class="message">No se pudo cargar la página, informe al programador.</div>')
                }
            });
            
            $("#combo2").html(
            '<option value="">Seleccione...</option>'+
                '<option value="1">Uno desde codigo</option>'+
                '<option value="2">Dos desde codigo</option>'+
                '<option value="3">Tres desde codigo</option>');
        };
    };
</script>
<div id="view1col">
    <!--<div class="localidades form">-->
    <?php echo $this->Form->create('Localidad'); ?>
    <fieldset>
        <legend><?php echo __('Add Localidad'); ?></legend>
        <?php
        echo $this->Form->input('jurisdiccion_id', array('type' => 'select', 'id' => 'cmb_jurisdicciones'));
        echo $this->Form->input('departamento_id', array('type' => 'select', 'id' => 'cmb_departamentos'));
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
