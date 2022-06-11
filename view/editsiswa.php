<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pendaftaran Siswa</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="insert.html">Pendaftaran Siswa</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Nesti</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!--<div class="sb-sidenav-menu-heading"></div>-->
                            <a class="nav-link" href="datasiswa.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Siswa
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Nesti
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <!--isi-->
                <?php
                include("../controller/koneksi.php");
                $id = $_GET['id'];
                $result  = mysqli_query($koneksi,"SELECT * from siswa where id='$_GET[id]'");
                $data=mysqli_fetch_array($result);
                //    $nama= $userdata ['nama'];
                //}
                ?>

                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> Edit Data Siswa</li>
                        </ol>
                        <form method="post" action="../controller/update.php">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">NISN</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="id" placeholder="NISN" value=<?php echo $id;?>>
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $data['nama'];?>">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $data['alamat'];?>">
                                </div>
                            </div><br>
                            <fieldset class="form-group">
                                <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="Laki-Laki" <?php if($data['jk']=='Laki-Laki') echo 'checked'?>>Laki-Laki
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="Perempuan"<?php if($data['jk']=='Perempuan') echo 'checked'?>>Perempuan
                                </div>
                                </div>
                            </fieldset><br>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="agama" placeholder="Agama" value="<?php echo $data['agama'];?>">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Asal Sekolah</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="a_sekolah" placeholder="Asal Sekolah" value="<?php echo $data['a_sekolah'];?>">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            </form>
                    </div>
                </main>
                
            <!--footer-->    
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
