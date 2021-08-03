<?php
session_start();
$con=mysqli_connect("remotemysql.com","FByoewkuCV","0tf3smZiAu","FByoewkuCV");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/webmakeup');
define('SITE_PATH','http://127.0.0.1/webmakeup/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>
