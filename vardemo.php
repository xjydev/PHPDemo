<?php
/**
 * Created by PhpStorm.
 * User: xiaodev
 * Date: 2019/2/18
 * Time: 5:50 PM
 */
define('P_NAMW',"var");
//$_REQUEST即可以接收get传值也可以接收post传值。
$name = $_REQUEST['username'];
$pwd = $_REQUEST['pwd'];


echo $name.'pwd'.$pwd;