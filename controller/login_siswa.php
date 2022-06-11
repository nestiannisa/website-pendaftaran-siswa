<?
session_start();
include 'koneksi.php';

$username		= $_GET['username'];
$password		= $_GET['password'];

$query = mysql_query("select * from admin where username='$username' and password='$password'");
$login = mysql_num_rows($query);
echo $cek;
if($login){
header("location:../views/index.php");
exit;
}else{
echo "gagal";
exit;
}

?>
