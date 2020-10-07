<?php
require_once 'app/Core/Core.php';
require_once 'app/Controller/HomeController.php';
require_once 'app/Controller/ErroCpntroller.php';
require_once 'app/Controller/PostController.php';
require_once 'app/Controller/SobreCOntroller.php';
require_once 'app/Controller/AdminController.php';


require_once 'app/Model/Postagem.php';
require_once 'app/Model/Comentario.php';

require_once 'lib/Database/Connection.php';
require_once 'vendor/autoload.php';


$template =file_get_contents('app/template/estrutura.html');
ob_start();
    $core =new core;
    $core-> start($_GET);//QueryString
    $saida = ob_get_contents();
ob_end_clean();

$tplPronto = str_replace('{{area_dinamica}}', $saida, $template);
echo $tplPronto;