<?php
/*
IMPORTANTE: Reemplazado por MenuTopHelper
Renderiza un array para crear menú ul li compatible con css utilizado
Mejorar: usar función reentrante para simplificar
Limitación: solo renderiza 3 niveles

*/

//Abre menú, configura css
echo '<ul id="nav" class="dropdown dropdown-horizontal">';

//Renderiza primer nivel de menú
foreach ($defmenutop as $menu => $items) {
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

        //Renderiza 2º nivel de menu
        echo '<ul>';
        foreach ($items['submenus'] as $menu => $items) {
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

                //Renderiza 2º nivel de menu
                echo '<ul>';
                foreach ($items['submenus'] as $menu => $items) {
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
                    //EN ESTE NIVEL YA NO SE EVALUAN HIJOS, LIMITACION          
                    echo '</li>'."\n";
                }
                echo '</ul>';
            }
            echo '</li>'."\n";
        }
        echo '</ul>';
    }
    //Cierra etiquetas
    echo '</li>'."\n";
}
echo '</ul>';

?>
