<?php
/**
 * Created by PhpStorm.
 * User: santh
 * Date: 5/12/2017
 * Time: 11:23 PM
 */

$canLogin = false;
$userName = $_POST["usr"];
$password = $_POST["pass"];

if(md5($userName)=="1bf5f656ab92070555489b655e0899a4" && md5($password)=="0cdcb272be1d22aa1376735d0640fe65")
{
$canLogin=true;
echo "
Logged In



";




}

?>




