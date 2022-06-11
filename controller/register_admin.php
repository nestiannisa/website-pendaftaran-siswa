<?php

include "koneksi.php";

$username=$_POST['username'];
$password=$_POST['password'];
$password2=$_POST['password2'];

if(isset($_POST['register'])){
if( $password !== $password2){
    echo "<script>
                alert('gagal'};
            </script>";
    header("location:../Admin/register_admin.php");
    
}}
?>