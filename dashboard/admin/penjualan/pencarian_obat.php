<?php 
include_once '../../../config/koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daftar Pencarian Obat - Klinik Apotek</title>
    <link href="../../../assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../../../assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-clinic-medical"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Klinik <sup>Apotek</sup></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="../index">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                menu
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../tindakan_data">Data Tindakan</a>
                        <a class="collapse-item" href="../petugas_data">Data Petugas</a>
                        <a class="collapse-item" href="../dokter_data">Data Dokter</a>
                        <a class="collapse-item" href="../obat_data">Data Obat</a>
                        <a class="collapse-item" href="../pasien_data">Data Pasien</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../pendaftaran">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Pendaftaran Pasien</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../rawat-pasien/">
                    <i class="fas fa-fw fa-share-square"></i>
                    <span>Rawat Jalan Pasien</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="../penjualan/">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>Penjualan Apotek</span></a>
            </li>


            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                other
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../laporan_tindakan">Laporan Data Tindakan</a>
                        <a class="collapse-item" href="../laporan_petugas">Laporan Data Petugas</a>
                        <a class="collapse-item" href="../laporan_dokter">Laporan Data Dokter</a>
                        <a class="collapse-item" href="../laporan_obat">Laporan Data Obat</a>
                        <a class="collapse-item" href="../laporan_pasien">Laporan Data Pasien</a>
                        <a class="collapse-item" href="../laporan_pendaftaran">Laporan Data Pendaftaran</a>
                        <a class="collapse-item" href="../laporan_rawat">Laporan Data Rawat</a>
                        <a class="collapse-item" href="../laporan_penjualan">Laporan Data Penjualan</a>
                    </div>
                </div>
            </li>


            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                     <ul class="navbar-nav ml-auto">
                        <?php
                        $login = mysqli_query($conn, "select * from tb_petugas WHERE id_petugas='1'");
                        while($rows=mysqli_fetch_array($login)){
                        ?>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dopdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class='mr-2 d-none d-lg-inline text-gray-600 small'>
                                      <?php echo $rows['nama']; ?> <?php } // end loop ?>
                                    </span>
                                <img class="img-profile rounded-circle"
                                    src="../../../assets/dashboard/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Pengaturan
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Log Aktivitas
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../auth/login?pesan=keluar" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pendaftaran Pasien</h6>
                        </div>
                        <div class="card-body">
                          <?php
include_once "../../../config/koneksi.php";

// Membaca variabel form
$KeyWord  = isset($_GET['KeyWord']) ? $_GET['KeyWord'] : '';
$dataCari = isset($_POST['txtCari']) ? $_POST['txtCari'] : $KeyWord;

// Jika tombol Cari diklik
if(isset($_POST['btnCari'])){
  if($_POST) {
    $filterSql = "WHERE nm_obat LIKE '%$dataCari%'";
  }
}
else {
  if($KeyWord){
    $filterSql = "WHERE nm_obat LIKE '%$dataCari%'";
  }
  else {
    $filterSql = "";
  }
} 

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 50;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM tb_obat $filterSql";
$pageQry = mysqli_query($conn, $pageSql) or die ("error paging: ".mysql_error($conn));
$jml   = mysqli_num_rows($pageQry);
$max   = ceil($jml/$row);
?>
<h1>Pencarian Obat </h1>
<h4><a href="index.php?p=penjualan_baru">Back</a></h4>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self" id="form1">
  <b>Cari Nama Obat :
  <input name="txtCari" type="text" value="<?php echo $dataCari; ?>" size="40" maxlength="100" />
  <input name="btnCari" type="submit" value="Cari" />
  </b>
</form>
<table class="table-list" width="700" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th width="31" align="center" bgcolor="#CCCCCC">No</th>
    <th width="92" bgcolor="#CCCCCC"><strong>Kode </strong></th>
    <th width="392" bgcolor="#CCCCCC"><strong>Nama Obat </strong></th>
    <th width="103" align="right" bgcolor="#CCCCCC"><strong>Harga@</strong></th>
    <th width="56" bgcolor="#CCCCCC"><strong>Stok </strong></th>
    <th align="center" bgcolor="#CCCCCC"><strong>Opsi</strong></th>
  </tr>
<?php
$mySql = "SELECT * FROM tb_obat $filterSql ORDER BY kd_obat ASC LIMIT $hal, $row";
$myQry = mysqli_query($conn, $mySql)  or die ("Query salah : ".mysqli_error($conn));
$nomor = 0; 
while ($myData = mysqli_fetch_array($myQry)) {
  $nomor++;
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td><?php echo $myData['kd_obat']; ?></td>
    <td><?php echo $myData['nm_obat']; ?></td>
    <td align="right"><?php echo number_format($myData['harga_jual']); ?></td>
    <td align="center"><?php echo $myData['stok']; ?></td>
  </tr>
<?php } ?>
  <tr>
    <td colspan="2"><strong>Jumlah Data :</strong> <?php echo $jml; ?> </td>
    <td colspan="3" align="right"><strong>Halaman ke :</strong>
  <?php
  for ($h = 1; $h <= $max; $h++) {
    $list[$h] = $row * $h - $row;
    echo " <a href='?page=Pencarian-Obat&hal=$list[$h]&KeyWord=$dataCari'>$h</a> ";
  }
  ?></td>
  </tr>
</table>

                        
     </div>
           </div>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                       <span>Copyright &copy; 2021 All Rights Reserved by <a href="https://km-dev.or.id">KM Developer</a>.</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">klik "Keluar" dibawah ini jika Anda siap untuk mengakhiri sesi anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../../auth/login?pesan=keluar">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <script src="../../../assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../../../assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../../assets/dashboard/js/sb-admin-2.min.js"></script>
    <script src="../../../assets/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../../../assets/dashboard/js/demo/datatables-demo.js"></script>

</body>
</html>