<?php

/**
 * Created by PhpStorm.
 * User: Banschey
 * Date: 06.11.2015
 * Time: 21:14
 */
class View {

    private $Page;

    public function __construct(){
    $this->Page=NULL;
    }

    public function render($Page,$include=true){

        require URL_ROOT.'/views/theme/'.THEME_NAME.'/templates/header.php';
        require URL_ROOT.'/views/theme/default/pages/'.$Page.'/page/index.php';
        require URL_ROOT.'/views/theme/default/templates/footer.php';
    }
}