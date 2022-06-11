<?
session_start();
include 'config/koneksi.php';

$sess_id	= $_SESSION['admin_id'];
$sess_name	= $_SESSION['name'];
if (isset($sess_id) and (isset($sess_name)))
{
	mysql_query("update admin set islogin = '0' where id = '$_SESSION[id]'") or die (mysql_error()); // logut
	session_destroy();
}
?>