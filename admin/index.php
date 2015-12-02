<?php
if(!isset($_COOKIE['Name'])){
    echo '<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Раздел администрирования</title>
<link  rel="stylesheet" href="views/public/css/bootstrap.min.css">
<link  rel="stylesheet" href="views/public/css/default.css">
</head>
    <body style="background-color: #3c3c3c">
    <div class="container">
      <div class="jumbotron" style="margin-right: auto;margin-left: auto;margin-bottom: auto;margin-top: 30%;width: 350px;text-align: center;background-color: #005a84">
      <form method="post" action="Login.php">
         <div class="form-group">
              <h3>Логин </h3><input type="text"  name="name" class="form-control" style="width: 230px">
         </div>
          <div class="form-group">
              <h3>Пароль </h3><input type="password" name="pass" class="form-control" style="width: 230px">
          </div>
          <div class="form-group">
              <button class="btn btn-success" style="width: 100px">Войти</button>
          </div>
      </form>
      </div>
    </div>
    </body>
</html>';
}else{
    header('Location:/admin/views/index.php');
}?>
