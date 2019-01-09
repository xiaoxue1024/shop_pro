<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/4
 * Time: 21:57
 */
session_start();
if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = 123;
    echo $_SESSION['name'];
} else {
    echo '11111';
}