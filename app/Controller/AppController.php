<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    var $helpers = array('MenuTop');
    var $components = array('Session', 'Auth', 'Acl', 'RequestHandler');

    function beforeFilter() {
        $this->Auth->loginError = 'Usuario o Contraseña Incorrectos';
        $this->Auth->authError = 'Acceso denegado.';
        $this->Auth->loginRedirect = '/Pages/home';
        $this->Auth->logoutRedirect = '/Pages/home';
        $this->Auth->allow('display', 'home', 'login', 'logout');
//	$this->Auth->authorize = 'controller';
        //config para acl.php
        $this->Auth->authorize = array('Actions' => array('actionPath' => 'controllers/'));

        //Toma datos de usuario en formato util para PhpAcl
        $this->usuario = array('User' => array(
                'username' => $this->Auth->user('username'),
                'group_id' => $this->Auth->user('group_id')));

        //Generando array para vista, para constuir menutop
        $this->set('mymenutop', $this->defineMenu());

        //para ver request con detalle, util para ver llamadas ajax por ejemplo
//        $this->log($this->request, 'debug');
        
    }

    function defineMenu() {

        //Aquí se evaluan los permisos y definen los menúes
        //Se definen menús y submenus
        //Luego se evaluan los items dir que quedaron vacios y se eliminan

        //Inicio va por defecto
        $menu['Inicio'] = array(
            'url' => array('controller' => 'Pages', 'action' => 'home'),
            'esdir' => 0,
            'submenus' => array(),
        );

        //Instituciones
        $menu['Instituciones'] = array(
            'url' => '',
            'esdir' => 1,
            'submenus' => array(),
        );
        //submenus
        if ($this->Acl->check($this->usuario, '/controllers/instits/index')) {
            $menu['Instituciones']['submenus']['Listado'] = array(
                'url' => array('controller' => 'instits', 'action' => 'index'),
                'esdir' => 0,
                'submenus' => array(),
            );
        }
//        if ($this->Acl->check($this->usuario, '/controllers/instits/add')) {
//            $menu['Instituciones']['submenus']['Nueva'] = array(
//                'url' => array('controller' => 'instits', 'action' => 'add'),
//                'esdir' => 0,
//                'submenus' => array(),
//            );
//        }
        //Limpiar item dir si queda vacio
        if ($menu['Instituciones']['url'] == '' && $menu['Instituciones']['submenus'] == array()) {
            unset($menu['Instituciones']);
        }

        //Jurisdicciones
        $menu['Jurisdicciones'] = array(
            'url' => '',
            'esdir' => 1,
            'submenus' => array(),
        );
        //submenus
        if ($this->Acl->check($this->usuario, '/controllers/jurisdicciones/index')) {
            $menu['Jurisdicciones']['submenus']['Listado'] = array(
                'url' => array('controller' => 'jurisdicciones', 'action' => 'index'),
                'esdir' => 0,
                'submenus' => array(),
            );
        }
        //Limpiar item dir si queda vacio
        if ($menu['Jurisdicciones']['url'] == '' && $menu['Jurisdicciones']['submenus'] == array()) {
            unset($menu['Jurisdicciones']);
        }

        //Herramientas
        $menu['Herramientas'] = array(
            'url' => '',
            'esdir' => 1,
            'submenus' => array(),
        );
        if ($this->Acl->check($this->usuario, '/controllers/localidades/index')) {
            $menu['Herramientas']['submenus']['Localidades'] = array(
                'url' => array('controller' => 'localidades', 'action' => 'index'),
                'esdir' => 0,
                'submenus' => array(),
            );
        }
        $menu['Herramientas']['submenus']['Mas tablas...'] = array(
            'url' => '',
            'esdir' => 1,
            'submenus' => array(),
        );
        if ($this->Acl->check($this->usuario, '/controllers/users/index')) {
            $menu['Herramientas']['submenus']['Mas tablas...']['submenus']['Usuarios'] = array(
                'url' => array('controller' => 'users', 'action' => 'index'),
                'esdir' => 0,
                'submenus' => array(),
            );
        }
        if ($this->Acl->check($this->usuario, '/controllers/departamentos/index')) {
            $menu['Herramientas']['submenus']['Mas tablas...']['submenus']['Departamentos'] = array(
                'url' => array('controller' => 'departamentos', 'action' => 'index'),
                'esdir' => 0,
                'submenus' => array(),
            );
        }
        if ($this->Acl->check($this->usuario, '/controllers/tipoinstits/index')) {
            $menu['Herramientas']['submenus']['Mas tablas...']['submenus']['Tipos de establecimiento'] = array(
                'url' => array('controller' => 'tipoinstits', 'action' => 'index'),
                'esdir' => 0,
                'submenus' => array(),
            );
        }
        //Limpiar item dir si queda vacio
        if ($menu['Herramientas']['submenus']['Mas tablas...']['url'] == '' && $menu['Herramientas']['submenus']['Mas tablas...']['submenus'] == array()) {
            unset($menu['Herramientas']['submenus']['Mas tablas...']);
        }
        if ($menu['Herramientas']['url'] == '' && $menu['Herramientas']['submenus'] == array()) {
            unset($menu['Herramientas']);
        }
        
        //Otros
        $menu['Usuarios'] = array(
            'url' => '',
            'esdir' => 1,
            'submenus' => array(),
        );
        if ($this->Auth->user('id')) {
            $menu['Usuarios']['submenus']['Logout'] = array(
                'url' => array('controller' => 'users', 'action' => 'logout'),
                'esdir' => 0,
                'submenus' => array(),
            );
        } else {
            $menu['Usuarios']['submenus']['Login'] = array(
                'url' => array('controller' => 'users', 'action' => 'login'),
                'esdir' => 0,
                'submenus' => array(),
            );
        }

        return $menu;
    }

    function isAuthorized_inactivo() {
        $llAuth = true;
        //    if ($this->name == 'Ofertas' && $this->action == 'addxrubro') {$llAuth = false;}

        if ($llAuth == true) {
            return true;
        } else {
            return false;
        }
    }

}
