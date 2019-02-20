<?php
/**
 * Created by PhpStorm.
 * User: xiaodev
 * Date: 2019/2/19
 * Time: 5:55 PM
 */
include 'functiondemo.php';

$time_start = microtime(true);
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
$time_end = microtime(true);
echo "$time_end - $time_start";
geli("数组");
$shuzu = array(1=>1,1.5,true,'zifuc','下标'=>"key");
unset($shuzu[12]);
$shuzu[11] = 'zifuc1.5';
$shuzu[20] = 20;
$shuzu[] = 30;
$shuzu['zi']='ziti';
$shuzu['array'] = [1,2,3,4,5];
$shuzu['array'][1]=10;
echo '<pre>';
var_dump($shuzu);
echo '</pre>';
echo "数组个数".count($shuzu);
$shuzucount = count($shuzu);
echo '数组遍历';
foreach ($shuzu as $key => $value){
    if (is_array($value)){
        echo $key.'<br>{';
        foreach ($value as $k => $v){
            echo $k.'---'.$v.' | ';
        }
        echo '}';
    }
    else {
        echo $key.'---'.$value.' | ';
    }
}
geli('list each');
$learr = ['w'=>'w1','g'=>'g1','m'=>3];
echo 'arr ==';
print_r($learr);
huanHang(1);
$fd = array_shift($learr);
echo "fd ==$fd <br>";
echo 'arr === ';
print_r($learr);
huanHang(1);
$uns = 'uns';
array_unshift($learr,$uns);
echo 'unshift === ';
print_r($learr);
huanHang(1);
$pu = "push";
array_push($learr,$pu);
echo 'push === ';
print_r($learr);
huanHang(1);
$pop = array_pop($learr);
echo 'pop=='.$pop;
huanHang(1);
echo current($learr).'<br>';
echo key($learr).'<br>';
next($learr);
echo 'next<br>';
echo current($learr).'<br>';
echo key($learr).'<br>';
end($learr);
echo 'end<br>';
echo current($learr).'<br>';
echo key($learr).'<br>';
prev($learr);
echo 'prev<br>';
echo current($learr).'<br>';
echo key($learr).'<br>';
reset($learr);
echo 'reset<br>';
echo current($learr).'<br>';
echo key($learr).'<br>';
unset($learr);
var_dump($learr);
//while (list($k,$v)= each())
