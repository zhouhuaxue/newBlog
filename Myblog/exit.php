<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-15
 * Time: 下午9:18
 */
session_start();
unset( $_SESSION['user']);
header("Location:Index.php");
?>