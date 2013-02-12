<?php //;           ?>
<script>
    $(document).ready(function() {
        //Muestra mensaje de error si falla llamada ajax en tabs
        $( "#tabs" ).tabs({
            ajaxOptions: {
                error: function( xhr, status, index, anchor ) {
                    $( anchor.hash ).html(
                    '<div id="flashMessage" class="message">No se pudo cargar la página, informe al programador.</div>');
                }
            }
        });
        //Pruebas con div
        $( "#mostrar" ).click(function() {
            $( "#divtest" ).show();
            return false;
        });
        $( "#ocultar" ).click(function() {
            $( "#divtest" ).hide();
            return false;
        });
        $( "#cargar1" ).click(function() {
            $( "#divtest" ).html("Texto cargado mediante jquery.");
            return false;
        });
        $( "#cargar2" ).click(function() {
            $( "#divtest" ).html($("#texto1").val());
            return false;
        });
        $( "#limpiar" ).click(function() {
            $( "#divtest" ).hide("Texto");
            return false;
        });
        $( "#cargartab1" ).click(function() {
            $.ajax({
                dataType:"html",
                url:"tab1ajax",
                success:function (data, textStatus) {
                    $("#divtest").html(data);
                },
                error: function () {
                    $("#divtest").html('<div id="flashMessage" class="message">No se pudo cargar la página, informe al programador.</div>')
                }
            });
            return false;
        });
        $( "#cargartab2" ).click(function() {
            $.ajax({
                dataType:"html",
                url:"tab2ajax",
                success:function (data, textStatus) {
                    $("#divtest").html(data);
                },
                error: function () {
                    $("#divtest").html('<div id="flashMessage" class="message">No se pudo cargar la página, informe al programador.</div>')
                }
            });
            return false;
        });
        $( "#cargartab3" ).click(function() {
            $.ajax({
                dataType:"html",
                url:"tab3ajax",
                success:function (data, textStatus) {
                    $("#divtest").html(data);
                },
                error: function () {
                    $("#divtest").html('<div id="flashMessage" class="message">No se pudo cargar la página, informe al programador.</div>')
                }
            });
            return false;
        });
        $( "#cargardivddeajax" ).click(function() {
            $.ajax({
                dataType:"html",
                url:"../localidades/lista_jurisdicciones",
                success:function (data, textStatus) {
                    $("#divtest").html(data);
                },
                error: function () {
                    $("#divtest").html('<div id="flashMessage" class="message">No se pudo cargar la página, informe al programador.</div>')
                }
            });
            return false;
        });
        //Pruebas con select
        $("#cmb_select").on("change", function() {
            alert($("#cmb_select").val());
        });
        $( "#select_carga" ).click(function() {
            var opts = '<option value="">Seleccione una opción...</option>';
            opts += '<option value="05">Cinco</option>';
            opts += '<option value="10">Diez</option>';
            //opts += '<option value="18">Dieciocho</option>';
            opts += '<option value="20">Veinte</option>';
            $('#cmb_select').html(opts);
            return false;
        });
        $( "#select_carga_ddeajax" ).click(function() {
            $.ajax({
                dataType:"json",
                url:"../localidades/lista_jurisdicciones",
                data: "",
                success:function (data, textStatus) {
                    var options = '<option value="">Seleccione una Jurisdicción...</option>';
                    $.each(data, function(i, option_name) {
                        options += '<option value="' + i + '">' + option_name + '</option>';
                    });
                    $("#cmb_select").html(options);
                },
                error: function () {
                    alert(
                    "Atención!! No se pudo recuperar información importante. \n\
Cargue nuevamente la página; si el problema persiste informe al programador."
                );
                }
            });
            return false;
        });
        $( "#select_selecciona18" ).click(function() {
            $("#cmb_select").val("18");
            return false;
        });
        //muestra valor
        $( "#select_val" ).click(function() {
            alert($("#cmb_select").val());
            return false;
        });
        //Combos relacionados
        //Carga jurisdicciones
        $.ajax({
            dataType:"json",
            url:"../localidades/lista_jurisdicciones",
            data: "",
            success:function (data, textStatus) {
                var options = '<option value="">Seleccione una Jurisdicción...</option>';
                $.each(data, function(i, option_name) {
                    options += '<option value="' + i + '">' + option_name + '</option>';
                });
                $("#cmb_jurisdicciones").html(options);
            },
            error: function () {
                alert(
                "Atención!! No se pudo recuperar información importante. \n\
Cargue nuevamente la página; si el problema persiste informe al programador."
            );
            }
        });
        //Define onchange > Carga departamentos
        $("#cmb_jurisdicciones").on("change", function() {
            $.ajax({
                dataType:"json",
                url:"../localidades/lista_departamentos",
                data:{jurisdiccion_id: $(this).val()},
//                url:"../localidades/lista_departamentos/"+$(this).val(),
//                data:{jurisdiccion_id: $(this).val()},
//                data: {jurisdiccion_id: $("#cmb_jurisdicciones").val()},
              success:function (data, textStatus) {
                    var options = '<option value="">Seleccione un Departamento...</option>';
                    $.each(data, function(i, option_name) {
                        options += '<option value="' + i + '">' + option_name + '</option>';
                    });
                    $("#cmb_departamentos").html(options);
                },
                error: function () {
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
    <h4>jQuery UI - Tabs con ajax</h4>
    <div id="tabs">
        <ul>
            <li><?php echo $this->Html->link('Tab 1', array('controller' => 'Pages', 'action' => 'tab1ajax')); ?></li>
            <li><?php echo $this->Html->link('Tab 2', array('controller' => 'Pages', 'action' => 'tab2ajax')); ?></li>
            <li><?php echo $this->Html->link('Tab 3 - Roto', array('controller' => 'Pages', 'action' => 'tab3ajax')); ?></li>
        </ul>
    </div>
    <h4>jQuery UI - Mostrar y ocultar un div, cargar texto</h4>
    <p><div id="divtest">DIV test</div></p>
<p><a id="mostrar" href="#">Muestra div</a></p>
<p><a id="ocultar" href="#">Oculta div</a></p>
<p><a id="cargar1" href="#">Poner texto en div</a></p>
<form method=post action=''>
    <p>Texto:<input id="texto1" type=text name=texto size=50 maxlength=50></p>
</form>
<p><a id="cargar2" href="#">Poner texto ingresado en campo anterior en div</a></p>
<p><a id="cargartab1" href="#">Poner texto de tab1 en div</a></p>
<p><a id="cargartab2" href="#">Poner texto de tab2 en div</a></p>
<p><a id="cargartab3" href="#">Poner texto de tab3 (link roto) en div</a></p>
<p><a id="cargardivddeajax" href="#">Cargar div desde ajax - listado de localidades</a></p>
<h4>SELECT - Cargar, seleccionar, mostrar valor seleccionado, etc.</h4>
<p><select id="cmb_select" name="select_id">
        <option value="">Seleccione una opción...</option>
        <option value="02">Dos</option>
        <option value="04">Cuatro</option>
        <option value="18">Dieciocho</option>
        <option value="30">Treinta</option>
    </select>
</p>
<p><a id="select_carga" href="#">Carga el select con nuevas options</a></p>
<p><a id="select_carga_ddeajax" href="#">Carga el select desde ajax - listado de localidades</a></p>
<p><a id="select_selecciona18" href="#">Selecciona opcion 18 Dieciocho / Corrientes</a></p>
<p><a id="select_val" href="#">Muestra el valor seleccionado</a></p>
<h4>Combos relacionados - Jurisdicciones -> Departamentos</h4>
<p><select id="cmb_jurisdicciones" name="jurisdiccion_id">
        <option value="">Seleccione una Jurisdicción...</option>
    </select>
</p>
<p><select id="cmb_departamentos" name="departamento_id">
        <option value="">Debe seleccionar primero una Jurisdicción...</option>
    </select>
</p>
</div>
