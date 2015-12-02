<?php

/**
 * Created by PhpStorm.
 * User: Banschey
 * Date: 06.11.2015
 * Time: 20:58
 */
class Router {
    private $URL;
    private $Page;
  function __construct(){

      //If empty var URL, then set hee def value.
      if(!isset($_GET['URL'])) {
          //$_GET['URL'] = '/';
           $this->URL[0]='index';
      }else {
          $this->URL = rtrim($_GET['URL'], '/');
          $this->URL = explode('/', $this->URL);
      }
      //Check if file exists...
      $file_page = URL_ROOT.'/views/theme/default/pages/'.$this->URL[0].'/index.php';
      if(file_exists($file_page)){
          //If ok.
          require_once $file_page;
      }else{
          $this->URL[0] = 'error';
          require_once URL_ROOT.'/views/theme/default/pages/'.$this->URL[0].'/index.php';
         // die();
      }

      $file_config = URL_ROOT.'/views/theme/default/pages/'.$this->URL[0].'/page_config.php';

      if(file_exists($file_config)){

          require_once $file_config;
      }else{

          echo 'Error!, some thing wrong. Check you page_config.php in:'.
               '/views/temlpates/theme/pages/'.$this->URL[0].'/';
          die();
      }

      $_GET['URL']='';
      $this->Page = new index();

     // require_once URL_ROOT.'/views/temlpates/theme/page_config.php';
  }
}