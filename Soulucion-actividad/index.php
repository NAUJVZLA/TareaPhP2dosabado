<?php

$c = isset ($_REQUEST['c']) ? $_REQUEST ['c'] : 'home';
$m = isset ($_REQUEST['m']) ? $_REQUEST ['m'] : 'index';
$c = $c . 'controller';

if (file_exists (filename: "controllers/$c.php")){
    require_once("controllers/$c.php");
    call_user_func(array($m));
}else{
    print "ese controlador no existe " .$c ;
}

?>