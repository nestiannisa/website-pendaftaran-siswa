<?php


include ("koneksi.php");

$id         =$_POST["id"];
$nama       =$_POST["nama"];
$alamat     =$_POST["alamat"];
$jk         =$_POST["jk"];
$agama      =$_POST["agama"];
$a_sekolah  =$_POST["a_sekolah"];

$anggota="INSERT into siswa (id,nama,alamat,jk,agama,a_sekolah) values('$id','$nama','$alamat','$jk','$agama','$a_sekolah')";
$update=mysqli_query($koneksi,$anggota);

if($update){
    header("location:../view/datasiswa.php");
    exit;
}else{
    echo "gagal";
    exit;
}

?>