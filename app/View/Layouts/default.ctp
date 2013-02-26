<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo 'Estudio CakePHP 2.x' ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

//        echo $this->Html->script('jquery-1.7.2.min');
//        echo $this->Html->script('jquery-ui-1.8.22.custom.min');
//        echo $this->Html->css('jquery-ui-1.8.22.custom');
        echo $this->Html->script('jquery-1.9.1');
        echo $this->Html->script('jquery-ui-1.10.1.custom.min');
        echo $this->Html->css('jquery-ui-1.10.1.custom');

        echo $this->Html->css('cake.generic');
        echo $this->Html->css('app.local');
        echo $this->Html->css('menu.dropdown');
        echo $this->Html->css('menu.default');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        echo $this->fetch('myscript');      
        ?>
    </head>
    <body>
        <div id="container01">
            <div id="header01">
                <h1><?php echo 'Estudio CakePHP 2.x' ?></h1>
            </div>
            <div id="usuario01">
                <?php
                if (AuthComponent::user('id')) {
                    echo 'Usuario: ' . AuthComponent::user('username') . ' ';
                    echo '['.$this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout')).']';
                }
                ?>
            </div>
            <div id="menutop01">
                <?php //echo $this->element('menutop01'); ?>
                <?php $this->MenuTop->generaMenu($mymenutop); ?>
            </div>
            <div id="content01">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->Session->flash('auth'); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer01">
                <?php
                echo $this->Html->link(
                        $this->Html->image('cake.power.gif', array('alt' => 'CakePHP', 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false)
                );
                ?>
            </div>
        </div>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
