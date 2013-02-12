<?php
/*
 * Renderiza un array para crear menú ul li compatible con css utilizado
 */

App::uses('AppHelper', 'View/Helper');

class MenuTopHelper extends AppHelper {

    public $helpers = array('Html');

    public function generaMenu($mymenutop) {
        //Abre menú, configura css
        echo '<ul id="nav" class="dropdown dropdown-horizontal">';
        //recorre y genera menu
        $this->recorreMenu($mymenutop);
        echo '</ul>';
    }

    public function recorreMenu($mymenutop) {

        //Renderiza menú
        foreach ($mymenutop as $menu => $items) {
            //Evaluar si esdir, abre li
            if ($items['esdir']) {
                echo '<li class="dir">';
            } else {
                echo '<li>';
            }
            //Evaluar si tiene link
            if ($items['url']) {
                echo $this->Html->link($menu, $items['url']);
            } else {
                echo $menu;
            }
            //Evaluar si tiene hijos, procesar
            if ($items['submenus']) {
                //Renderiza siguiente nivel de menu, con recursión
                echo '<ul>';
                //recorre menu e imprime
                $this->recorreMenu($items['submenus']);
                echo '</ul>';
            }
            //Cierra etiquetas
            echo '</li>' . "\n";
        }
    }

}
