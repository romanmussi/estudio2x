<?php
// crear jquery script para publicar en header
//$this->start('myscript');
//echo 
//'<script>
//$(function() {
//        $( "#tabs" ).tabs();
//});
//</script>';
//$this->end();
?>
<script>
    $(document).ready(function() {
        $( "#tabs" ).tabs();
        $( "#accordion" ).accordion({ autoHeight: false });
        $( "#dialog-modal-01" ).dialog({
            autoOpen: false,
            height: 140,
            modal: true
        });
        $( "#abredialog" ).button();
        $( "#abredialog" ).click(function() {
            $( "#dialog-modal-01" ).dialog( "open" );
            return false;
        });
    });
</script>

<div id="view1col">
<h1>Bienvenido al "Code Kata" - h1</h1>
<h2>Pruebas de titulos - h2</h2>
<p>Prueba de parrafos.</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed felis felis. 
In semper lorem et tellus condimentum quis pharetra augue placerat. Nulla facilisi. 
Pellentesque mattis sem id urna suscipit posuere. Donec odio ante, vehicula vel tempor id, 
suscipit id lectus. Morbi vulputate, mauris sed molestie ornare, odio tortor eleifend lectus, 
id dictum mi ipsum eu neque. Nulla aliquam volutpat eros eu elementum.     
</p>
<h3>Pruebas de titulos - h3</h3>
<h4>Pruebas de titulos - h4</h4>
<h4>Tabs con css</h4>
<div id="tab01header">
<ul>
    <li id="selected"><a href="#">Test css</a></li>
    <li><?php echo $this->Html->link('Instituciones', array('controller' => 'instits', 'action' => 'index')); ?></li>
    <li><?php echo $this->Html->link('Jurisdicciones', array('controller' => 'jurisdicciones', 'action' => 'index')); ?></li>
    <li><?php echo $this->Html->link('Localidades', array('controller' => 'localidades', 'action' => 'index')); ?></li>
</ul>
</div>
<div id="tab01content">
<p>Donec dictum tristique ante, vitae sagittis diam tristique sit amet. 
Pellentesque tristique viverra nulla, a lacinia orci condimentum sed. 
Quisque eget ipsum vitae risus eleifend vehicula eget eget est. 
Cras non augue ante, et iaculis eros. Etiam nisi tortor, feugiat at tristique ac, varius a ligula. 
Quisque sit amet ipsum et ipsum mattis vulputate. 
Quisque interdum justo vel dui sagittis viverra sed ac arcu.
</p>
</div>
<h4>jQuery UI - Tabs</h4>
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Nunc tincidunt</a></li>
		<li><a href="#tabs-2">Proin dolor</a></li>
		<li><a href="#tabs-3">Aenean lacinia</a></li>
	</ul>
	<div id="tabs-1">
		<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
	</div>
	<div id="tabs-2">
		<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
	</div>
	<div id="tabs-3">
		<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
		<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
	</div>
</div>
<h4>jQuery UI - Accordion</h4>
<div id="accordion">
	<h3><a href="#">Section 1</a></h3>
	<div>
		<p>
		Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
		ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
		odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
		</p>
	</div>
	<h3><a href="#">Section 2</a></h3>
	<div>
		<p>
		Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
		purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
		velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
		suscipit faucibus urna.
		</p>
	</div>
	<h3><a href="#">Section 3</a></h3>
	<div>
		<p>
		Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
		Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
		ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
		lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
		</p>
		<ul>
			<li>List item one</li>
			<li>List item two</li>
			<li>List item three</li>
		</ul>
	</div>
	<h3><a href="#">Section 4</a></h3>
	<div>
		<p>
		Cras dictum. Pellentesque habitant morbi tristique senectus et netus
		et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
		faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
		mauris vel est.
		</p>
		<p>
		Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
		Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
		inceptos himenaeos.
		</p>
	</div>
</div>
<h4>jQuery UI - Button y Dialog</h4>
<button id="abredialog">Clic para mostrar cuadro de diálogo</button>
<div id="dialog-modal-01" title="Basic modal dialog">
<p>Adding the modal overlay screen makes the dialog look more prominent because it dims out the page content.</p>
</div>
<h4>Muestra de datos con dl dt dd</h4>
<dl>
    <dt class="altrow">Id</dt>
    <dd class="altrow">1&nbsp;</dd>
    <dt>Orden</dt>
    <dd>1&nbsp;</dd>
    <dt class="altrow">Name</dt>
    <dd class="altrow">Libros, aca pruebo con un texto más largo, para ver como reacciona</dd>
    <dt>Created</dt>
    <dd>2010-07-10 16:26:39&nbsp;</dd>
</dl>
<h4>Muestra datos con tabla</h4>
<table cellpadding = "0" cellspacing = "0">
<tr>
    <th>Titulo1</th>
    <th>Titulo2</th>
    <th>Titulo3</th>
    <th>Titulo4</th>
</tr>
<tr>
    <td>Celda1</td>
    <td>Celda2</td>
    <td>Celda3</td>
    <td>Celda4</td>
</tr>
<tr class="altrow">
    <td>Celda1</td>
    <td>Celda2</td>
    <td>Celda3</td>
    <td>Celda4</td>
</tr>
<tr>
    <td>Celda1</td>
    <td>Celda2</td>
    <td>Celda3</td>
    <td>Celda4</td>
</tr>
<tr class="altrow">
    <td>Celda1</td>
    <td>Celda2</td>
    <td>Celda3</td>
    <td>Celda4</td>
</tr>
</table>
<h4>Algunos formatos de mensaje predeterminados de Cake</h4>
<div id="flashMessage" class="message">Probando flashMessage</div>
<span class="notice success">Probando span notice success de cake.generic.css</span>
</div>
<div id="view1col">
    <h4>Maquetado con 1 columna: view1col</h4>
    <p>
        Fusce vitae tellus ut eros sagittis interdum. Donec consectetur dictum ipsum vel congue. Morbi sed eros non lacus congue ultrices venenatis et magna. Phasellus sollicitudin dui vitae purus tincidunt aliquam facilisis mauris rhoncus. Donec turpis odio, fermentum a malesuada ac, accumsan eu sem. Mauris accumsan, lectus nec sollicitudin placerat, mi nisi hendrerit augue, a ullamcorper massa nunc in dolor. Pellentesque tincidunt tristique hendrerit. Vestibulum at ligula massa, eget sodales ligula. Duis ligula dui, dignissim quis scelerisque ac, venenatis eget augue. Praesent at bibendum arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lobortis malesuada suscipit. Sed tempor, massa interdum cursus vestibulum, mi mauris tincidunt lectus, sed venenatis metus dolor et tortor. Ut ante quam, dictum et suscipit eleifend, tristique at turpis. Cras non velit quis dui lacinia facilisis vel vel risus.        
    </p>
    <p>
        Proin urna orci, dignissim quis consequat vel, commodo non nunc. Proin a lectus vitae turpis sodales sagittis sed id nulla. Nullam urna dolor, egestas nec euismod vel, sagittis sed dolor. Pellentesque dignissim elit vitae erat ultrices sit amet eleifend est molestie. Praesent eu ante tellus, id aliquam neque. Curabitur vitae arcu at justo euismod pellentesque. Donec a mauris ante. Maecenas at quam sit amet leo vulputate luctus. Duis vitae leo turpis, nec laoreet velit. Curabitur ullamcorper aliquam fermentum. Aliquam tincidunt metus eu ante semper quis luctus justo ullamcorper. Cras posuere rutrum condimentum. Vivamus pretium scelerisque hendrerit.
    </p>
</div>
<div id="view2colx">
    <h4>Maquetado con 2 columnas: view2colx</h4>
    <p>
        Fusce vitae tellus ut eros sagittis interdum. Donec consectetur dictum ipsum vel congue. Morbi sed eros non lacus congue ultrices venenatis et magna. Phasellus sollicitudin dui vitae purus tincidunt aliquam facilisis mauris rhoncus. Donec turpis odio, fermentum a malesuada ac, accumsan eu sem. Mauris accumsan, lectus nec sollicitudin placerat, mi nisi hendrerit augue, a ullamcorper massa nunc in dolor. Pellentesque tincidunt tristique hendrerit. Vestibulum at ligula massa, eget sodales ligula. Duis ligula dui, dignissim quis scelerisque ac, venenatis eget augue. Praesent at bibendum arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lobortis malesuada suscipit. Sed tempor, massa interdum cursus vestibulum, mi mauris tincidunt lectus, sed venenatis metus dolor et tortor. Ut ante quam, dictum et suscipit eleifend, tristique at turpis. Cras non velit quis dui lacinia facilisis vel vel risus.        
    </p>
    <p>
        Proin urna orci, dignissim quis consequat vel, commodo non nunc. Proin a lectus vitae turpis sodales sagittis sed id nulla. Nullam urna dolor, egestas nec euismod vel, sagittis sed dolor. Pellentesque dignissim elit vitae erat ultrices sit amet eleifend est molestie. Praesent eu ante tellus, id aliquam neque. Curabitur vitae arcu at justo euismod pellentesque. Donec a mauris ante. Maecenas at quam sit amet leo vulputate luctus. Duis vitae leo turpis, nec laoreet velit. Curabitur ullamcorper aliquam fermentum. Aliquam tincidunt metus eu ante semper quis luctus justo ullamcorper. Cras posuere rutrum condimentum. Vivamus pretium scelerisque hendrerit.
    </p>
</div>
<div id="view2coly">
    <h4>view2coly</h4>
    <p>
Donec dictum tristique ante, vitae sagittis diam tristique sit amet. 
Pellentesque tristique viverra nulla, a lacinia orci condimentum sed. 
Quisque eget ipsum vitae risus eleifend vehicula eget eget est.
    </p>
</div>