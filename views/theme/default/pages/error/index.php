<?php
/**
 * Created by PhpStorm.
 * User: Banschey
 * Date: 06.11.2015
 * Time: 22:24
 */
class index extends Controller{
    public function __construct(){
        require_once URL_ROOT.'/views/theme/'.THEME_NAME.'/config.php';
        $view= new View();
        $view->render('error');
    }
}