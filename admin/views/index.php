<?php
if(!isset($_COOKIE['Name'])) {
    if ($_POST['name'] == 'admin' && $_POST['pass'] == 'admin') {
        setcookie('Name', 'Admin', time() + 3600, '/');

    }else{
        header('Location:/admin');
    }
}else{require_once $_SERVER['DOCUMENT_ROOT'].'/core/config/config.php';}
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/default.css">
    <script src="public/js/jquery-1.11.2.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #222222">
<h2 style="text-align: center;color: white">Раздел администрирования.</h2><hr>
<div class="well">
    <h2 class="well" style="text-align: center;color: #0f0f0f">Панель приборов.</h2>

     <div class="row"style="text-align: center">
            <div class="col-sm-3" style="color: #0f0f0f;min-height: 150px">
              <h3 class="alert alert-info" style="color: #0f0f0f">Лог ошибок</h3>
                <hr>
                <div style="height: 150px;overflow-y: scroll"></div>
               Пусто
            </div>
         <div class="col-sm-6" style="color: #0f0f0f;min-height: 150px">
             <h3 class="alert alert-info" style="color: #0f0f0f">Гугл Аналитик</h3>
             <hr>
             <div style="height: 150px;overflow-y: scroll"></div>
             Пусто
         </div>
         <div class="col-sm-3" style="color: #0f0f0f;min-height: 150px">
             <h3 class="alert alert-info" style="color: #0f0f0f">Сейчас онлайн</h3>
             <hr>
             <div style="height: 150px;overflow-y: scroll"></div>
             Пусто
         </div>
         </div>

</div>
<hr>
<div class="tabs-left">
    <ul class="nav nav-pills nav-stacked col-sm-2">
        <li class="active"><a href="#post"  data-toggle="tab">Редактирование статей <span style="float: right" class="glyphicon glyphicon-chevron-right"></span></a></li>
        <li><a href="#page" data-toggle="tab">Редактирование страниц<span style="float: right" class="glyphicon glyphicon-chevron-right"></span></a></li>
        <li><a href="#view" data-toggle="tab">Внешний вид<span style="float: right" class="glyphicon glyphicon-chevron-right"></span></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="post"><!--POST-->
            <div class="tabs-left ">
                <ul class="nav nav-pills nav-stacked col-md-2">
                    <li class="active"><a href="#new_post" data-toggle="tab">Создать<span style="float: right" class="glyphicon glyphicon-plus-sign"></span></a></li>
                    <li><a href="#edit_post" data-toggle="tab">Редактировать<span style="float: right" class="glyphicon glyphicon-edit"></span></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="new_post">
                    <div class="col-md-7">
                        <div class="hero">
                            <div class="tabbable-left" style="margin-top: 2%">
                                <div class="tabbable-left">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#send" data-toggle="tab">Написать</a></li>
                                        <li><a href="#help" data-toggle="tab">Справка</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="send">
                                            <br>
                                            <h3 style="text-align:center;margin-top:-1%;color:#e6e6e6">Опубликовать пост:</h3>
                                            <form role="form" method="POST" action="javascript:send();">
                                                <div class="form-group">
                                                    <input id="head" class="form-control"  name="head" value="Заголовок"><br>
                                                    <textarea id="masage" class="form-control" style="max-width: 1020px;min-height:500px" name="text" >Текст</textarea><br>
                                                    <button type="submit" name="sumbit" class="btn btn-primary btn-lg btn-block" >Опубликовать</button>
                                                </div>
                                            </form>
                                            <div id="err_a"></div>
                                        </div>
                                        <div class="tab-pane" id="help">
                                            <br>
                                            <div class="alert alert-warning">
                                                Весь текст оформляется в html разметке, переносы отсутствуют. Используйте тег "&lt;br&gt;"
                                            </div>
                                            <div class="alert alert-info">
                                                Можно спользовать шрифт-иконки от Bootstrap. Пример: " Текст &lt;span class="glyphicon glyphicon-fire"&gt; &lt;/span&gt;. Результатом будет: Текст <span class="glyphicon glyphicon-fire"></span>
                                            </div>
                                            <?php require 'public/Help_info_form.php';?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane" id="edit_post">
                    Редактировать
                    </div>
                </div>
            </div>
        </div><!--/POST-->
        <div class="tab-pane" id="page"><!--PAGE-->
            <div class="tabs-left ">
                <ul class="nav nav-pills nav-stacked col-md-2">
                    <li class="active"><a href="#new_page" data-toggle="tab">Создать<span style="float: right" class="glyphicon glyphicon-plus-sign"></span></a></li>
                    <li><a href="#edit_page" data-toggle="tab">Редактировать<span style="float: right" class="glyphicon glyphicon-edit"></span></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="new_page">
                        Создать
                    </div>
                    <div class="tab-pane" id="edit_page">
                        Редактировать
                    </div>
                </div>
            </div>
        </div><!--/PAGE-->
        <div class="tab-pane" id="view"><!--VIEW-->
            <div class="tabs-left ">
                <ul class="nav nav-pills nav-stacked col-md-2">
                    <li class="active"><a href="#edit_header" data-toggle="tab">Хедер<span style="float: right" class="glyphicon glyphicon-edit"></span></a></li>
                    <li><a href="#edit_footer" data-toggle="tab">Футер<span style="float: right" class="glyphicon glyphicon-edit"></span></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="edit_header">
                        <div class="col-md-7">
                            <div class="hero">
                                 <form action="<?php $_SERVER['PHP_SELF']?>" method="post" role="form">
                                     <div class="form-group">
                                       <textarea name="text" class="form-control" style="max-height: 500px; min-height: 300px"><?php
                                           $op_header_url = URL_ROOT.'/views/theme/'.THEME_NAME.'/templates/header.php';
                                           $op_header=fopen($op_header_url,'r');$op_header_r=fread($op_header,filesize($op_header_url));
                                           echo $op_header_r;
                                           ?>
                                       </textarea>
                                     </div>
                                         <div class="form-group" style="text-align:center">
                                         <button class="btn btn-primary" type="submit" name="edit_header" style="width: 100%">Сохранить</button>
                                         </div>
                                 </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="edit_footer">
                        <div class="col-md-7">
                            <div class="hero">
                                <form action="<?php $_SERVER['PHP_SELF']?>" method="post" role="form">
                                    <div class="form-group">
                                       <textarea name="text" class="form-control" style="max-height: 500px; min-height: 300px">
                                           <?php
                                           $op_footer_url = URL_ROOT.'/views/theme/'.THEME_NAME.'/templates/footer.php';
                                           $op_footer=fopen($op_footer_url,'r');
                                           $op_footer_r=fread($op_footer,filesize($op_footer_url));
                                           echo $op_footer_r;
                                           ?>
                                       </textarea>
                                    </div>
                                    <div class="form-group" style="text-align:center">
                                        <button class="btn btn-primary" type="submit" name="edit_footer" style="width: 100%">Сохранить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
if(isset($_POST['edit_header'])) {
    if (isset($_POST['text'])) {
        $op_header_url = URL_ROOT . '/views/theme/' . THEME_NAME . '/templates/header.php';
        $header = $op_header_url;
        $op_header = fopen($header, 'w');
        $op_header_for_edit=rtrim($_POST['text']);
        $op_header_for_edit=$op_header_for_edit."\n";
        fwrite($op_header,$op_header_for_edit);
        fclose($op_header);
        unset($_POST['edit_header']);
        unset($_POST['text']);
        echo '<script language="JavaScript">window.location.href = "/admin/"</script>';
    }
}

if(isset($_POST['edit_footer'])){
    if(isset($_POST['text'])){
        $op_footer_url=URL_ROOT.'/views/theme/'.THEME_NAME.'/templates/footer.php';
        $footer = $op_footer_url;
        $op_footer=fopen($footer,'w');
        $op_footer_for_edit=rtrim($_POST['text']);
        $op_footer_for_edit=$op_footer_for_edit."\n";
        fwrite($op_footer,$op_footer_for_edit);
        fclose($op_footer);
        unset($_POST['edit_footer']);
        unset($_POST['text']);
        echo '<script language="JavaScript">window.location.href = "/admin/"</script>';
    }
}
?>