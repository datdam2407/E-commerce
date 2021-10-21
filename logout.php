<?php

session_start();

unset($_SESSION["uid"]);

unset($_SESSION["name"]);

header("location:http://localhost:8080/Ecommerce-app-h/index.php");

?>