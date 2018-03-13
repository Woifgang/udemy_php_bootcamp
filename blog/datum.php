<?php
/**
 * Created by PhpStorm.
 * User: Woifgang_Laptop
 * Date: 13.03.2018
 * Time: 20:31
 */


$geburtstag = "08.09.1986";

$gebStr = explode(".",$geburtstag);

//var_dump($gebStr);

$gebUnix = mktime(0,0,0,$gebStr[1],$gebStr['0'],$gebStr['2']);

$alterUnix = time() - $gebUnix;
var_dump($alterUnix);

$alterJahre = $alterUnix / (60*60*24*365);
$alterInMonate = $alterUnix / (60*60*24*30);
$alterInTage = $alterUnix / (60*60*24);
echo  $alterJahre;
echo "<br>";
echo $alterInMonate;
echo "<br>";
echo $alterInTage;


?>