<?php
/**
 * Created by PhpStorm.
 * User: xiaodev
 * Date: 2019/2/19
 * Time: 5:55 PM
 */
include 'vardemo.php';
function huanHang($h){
    if (!$h){
        $h = 1;
    }
    for ($i = 0;$i < $h;$i++){
        echo '<br>';
    }
}
function geli($ge){
    echo "<br>========== $ge ==========<br>";
}
echo "hello php";
$a = 1;
$b = 2;
echo $b+$a;
echo "<br> 数据类型";
$shi = 123;
$ba = 033;
$shiliu = 0x111;
echo "$ba 十进制 $shi 十六进制 $shiliu";
echo "<br>浮点数";
$f = 1.098;
var_dump($f);
huanHang(0);
gettype($f);
echo "<br> 数组";
//goto wang;
$zu = array(1,2,3,4);
//echo $zu(0);
if (is_array($zu)){
    echo "数组" ;
}
else{
    echo "非数组" ;
}
define('D_NAME','名称');
echo '<br>name'.D_NAME;

$varname = 'na';
$na = "名字";
echo $$varname;
wang:
for ($i = 1;$i<10;$i++){
    echo "<br>";
    iforecho($i);
    if ($i==4) break;
}
function iforecho($fa){
    echo $fa;
}
$gq = "1111111";
function functionglobals (){
    $GLOBALS['gq'] = '2222222';
    $GLOBALS['que'] = 'sssssss';
    echo '函数内存创建全局变量<br>';
}
functionglobals();
echo $gq;
echo $que;

function staticdemo(){
    static $sa = 0;
    echo $sa;
    $sa ++;
}
for ($i = 0;$i<10;$i++){
    staticdemo();
}
// '====== 时间 ======';
geli('时间');
$time = time();
echo $time;
huanHang(1);
$timeStap = strtotime($time);
$date = date('y-m-d',$timeStap);
echo $date;
