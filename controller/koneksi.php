<?php

$host       ="localhost";
$user       ="root";
$password   ="";
$db         ="psb";

$koneksi=mysqli_connect($host,$user,$password,$db);

if(!$koneksi){
    
    echo "gagal";
}

?>