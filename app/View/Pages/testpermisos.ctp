<?php //;
?>
<div id="view1col">
<h4>Pruebas de permisos</h4>
<h4>Evalúa permisos para realizar acciones básicas sobre Jurisdicciones</h4>
<p>Estos permisos son chequeados automáticamente por auth - acl al intentar 
ingresar en una acción. También se pueden chequear a mano como se muestra aquí.</p>    
<ul>
<li><?php if ($has_add) {echo 'Puede agregar';} else {echo 'NO puede agregar';}?></li>    
<li><?php if ($has_edit) {echo 'Puede editar';} else {echo 'NO puede editar';}?></li>    
<li><?php if ($has_delete) {echo 'Puede borrar';} else {echo 'NO puede borrar';}?></li>    
</ul>
<h4>Evalúa otros permisos - permisos especiales</h4>
<p>Estos permisos no son chequeados automáticamente por auth - acl. Se pueden evaluar
explicitamente cuando se considere necesario.</p>    
<ul>
<li><?php if ($has_personales) {echo 'Puede ver datos personales';} else {echo 'NO puede ver datos personales';}?></li>    
<li><?php if ($has_financieros) {echo 'Puede ver datos financieros';} else {echo 'NO puede ver datos financieros';}?></li>    
</ul>
</div>