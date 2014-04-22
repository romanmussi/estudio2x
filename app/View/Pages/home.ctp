<?php // ?>
<div id="view1col">
<h1>Bienvenido al "Code Kata" - h1</h1>
<h2>Algunos accesos - h2</h2>
<p><?php echo $this->Html->link('Test de UI, css, maquetación y widgets (tabs, accordion, dialog, etc.)', array('controller' => 'Pages', 'action' => 'testui')); ?></p>
<p><?php echo $this->Html->link('Test de jquery + ajax', array('controller' => 'Pages', 'action' => 'testajax')); ?></p>
<p><?php echo $this->Html->link('Test de link roto o inaccesible', array('controller' => 'Pages', 'action' => 'tab3ajax')); ?></p>
<p><?php echo $this->Html->link('Test de permisos', array('controller' => 'Pages', 'action' => 'testpermisos')); ?></p>
<p><?php echo $this->Html->link('Test de combos relacionados con ajax: alta y edición de Localidades', array('controller' => 'Localidades', 'action' => 'index')); ?></p>
<p><?php echo $this->Html->link('Instituciones', array('controller' => 'instits', 'action' => 'index')); ?></p>
<p><?php echo $this->Html->link('Jurisdicciones', array('controller' => 'jurisdicciones', 'action' => 'index')); ?></p>
<p><?php echo $this->Html->link('Localidades', array('controller' => 'localidades', 'action' => 'index')); ?></p>
<p><?php echo $this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'index')); ?></p>
<h3>Pruebas de titulos - h3</h3>
<h4>Pruebas de titulos - h4</h4>
<p>Parece que si... bla bla bla bla bla loren ipsum bla bla bla bla bal alb
bla bla bla bla bla bla bla alab abad adam alac aba baba baba baa asdg asdf 
asdf asdf asdf asdf</p>
<p>Parece que si... bla bla bla bla bla loren ipsum bla bla bla bla bal alb
bla bla bla bla bla bla bla alab abad adam alac aba baba baba baa asdg asdf 
asdf asdf asdf asdf</p>
</div>