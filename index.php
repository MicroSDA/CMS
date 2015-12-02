<?php
/**
 * Created by PhpStorm.
 * User: Banschey
 * Date: 06.11.2015
 * Time: 20:12
 */
require_once 'core/config/config.php';
require_once URL_ROOT.'/core/config/debug_config.php';

//Инициализация
require_once URL_ROOT.'/core/class/Router.php';
require_once URL_ROOT.'/core/class/Controller.php';
require_once URL_ROOT.'/core/class/View.php';


$router = new Router();