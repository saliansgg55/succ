<?php
require_once("HttpConnection.php");
$http = new HttpConnection();  
$http->setCookiePath("/my_cookie_path/");  
$http->init();  
echo $http->get("http://www.google.es");  
$http->close(); 



