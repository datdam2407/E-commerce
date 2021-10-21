<?php

session_start();

if (isset($_SESSION["admin_id"])) {
	session_destroy();
	header("location:http://localhost:8080/Ecommerce-app-h/admin/login.php");
}else{
	header("location:http://localhost:8080/Ecommerce-app-h/admin/index.php");
}


?>