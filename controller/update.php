<?php

include("koneksi.php");

$id         =$_POST['id'];
$nama       =$_POST['nama'];
$alamat     =$_POST['alamat'];
$jk         =$_POST['jk'];
$agama      =$_POST['agama'];
$a_sekolah  =$_POST['a_sekolah'];

$query="UPDATE siswa set nama='$nama', alamat='$alamat', jk='$jk', agama='$agama', a_sekolah='$a_sekolah' where id='$id'";
mysqli_query($koneksi,$query);

if ($query){
    header ("location:../view/datasiswa.php");
    exit;
}else{
    echo "gagal";
    exit;
}

?>