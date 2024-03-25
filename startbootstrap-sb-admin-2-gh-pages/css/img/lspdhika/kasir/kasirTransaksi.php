<?php
include '../function.php';
// include 'cek.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kasir Transaksi</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="kasir.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">The MaResto</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="kasir.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Kasir</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Fitur
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

           
            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="kasirTransaksi.php">
                    <i class="fas fa-receipt"></i>
                    <span>Entri Transaksi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kasirLaporan.php">
                    <i class="fas fa-fw fa-file-pdf"></i>
                    <span>Generate Laporan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr-2 d-none d-lg-inline text-gray-600 small">Kasir</span><img class="img-profile rounded-circle" src="../img/undraw_profile.svg" /></a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                            </div>
                        </li>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus"> </i> Tambah Data</button>

                            <!-- Modal  Tambah-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Masukan Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>

                                        <!-- Modal ISI -->
                                        <form method="post">
                                            <div class="modal-body">
                                                <label class="form-label">ID TRANSAKSI</label>
                                                <input type="text" class="form-control"  placeholder="ID TRANSAKSI" name="idtransaksi" readonly="readonly">
                                            </div>
                                            <div class="modal-body">
                                                <label class="form-label">ID PESANAN</label>
                                                <input type="text" class="form-control" placeholder="ID PESANAN" name="idpesanan" required>
                                            </div>
                                            <div class="modal-body">
                                                <label class="form-label">TOTAL</label>
                                                <input type="text" class="form-control" placeholder="TOTAL" name="Total" required>
                                            </div>
                                            <div class="modal-body">
                                                <label class="form-label">BAYAR</label>
                                                <input type="text" class="form-control" placeholder="BAYAR" name="Bayar" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="tambahKasir">Tambah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir MODAL Tambah-->
                        <div class="card-body">
                            <div class="table-responsive table-striped pt-3">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table-primary">
                                        <tr>
                                            <td>ID Transaksi</td>
                                            <td>ID Pesanan</td>
                                            <td>Total</td>
                                            <td>Bayar</td>
                                            <td>Kembalian</td>
                                            <td>Action</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $ambildata = mysqli_query($conn, "SELECT * FROM transaksi");
                                            $i = 1;
                                            while ($tampil = mysqli_fetch_array($ambildata)) {
                                                $idtransaksi = $tampil['idtransaksi'];
                                                $idpesanan = $tampil['idpesanan'];
                                                $Total = $tampil['Total'];
                                                $Bayar = $tampil['Bayar'];
                                                $Kembalian = $Bayar - $Total; // Perhitungan kembalian
                                            ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <!-- <td><?= $idtransaksi; ?></td> -->
                                                    <td><?= $idpesanan; ?></td>
                                                    <td>Rp.<?= $Total; ?></td>
                                                    <td>Rp.<?= $Bayar; ?></td>
                                                    <td>Rp.<?= $Kembalian; ?></td> <!-- Menampilkan kembalian -->
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-warning mb-2" data-toggle="modal" data-target="#edit<?= $idtransaksi; ?>">Edit</button>
                                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?= $idtransaksi; ?>">Delete</button>
                                                    </td>
                                                </tr>


                                                <!--AwaL Modal Edit Data -->
                                                <div class="modal fade" id="edit<?= $idtransaksi; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                                                            </div>
                                                            <!-- Modal ISI -->
                                                            <form method="post" action="../function.php">
                                                            <div class="modal-body">
                                                                <label class="form-label">ID TRANSAKSI</label>
                                                                <input type="text" class="form-control" value="<?= $idtransaksi; ?>" placeholder="ID TRANSAKSI" name="idtransaksi" readonly="readonly">
                                                            </div>
                                                            <div class="modal-body">
                                                                <label class="form-label">ID PESANAN</label>
                                                                <input type="text" class="form-control" value="<?= $idpesanan; ?>" placeholder="ID PESANAN" name="idpesanan" required>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label class="form-label">TOTAL</label>
                                                                <input type="text" class="form-control" value="<?= $Total; ?>" placeholder="TOTAL" name="Total" required>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label class="form-label">BAYAR</label>
                                                                <input type="text" class="form-control" value="<?= $Bayar; ?>" placeholder="BAYAR" name="Bayar" required>
                                                            </div>
                                                                <div class="modal-footer">
                                                                    <input type="hidden" name="idtran$idtransaksi" value="<?= $idtransaksi; ?>">
                                                                    <button type="submit" class="btn btn-primary" name="editKasir" value="<?= $idtransaksi; ?>">Edit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Akhir Modal Edit -->

                                                <!-- AwalModal Delete -->
                                                <div class="modal fade" id="delete<?= $idtransaksi; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                                                            </div>
                                                            <!-- Modal ISI -->
                                                            <form method="post">
                                                                <div class="modal-body">
                                                                    Apaka anda yakin ingin menghapus <?= $idtransaksi ?> ?
                                                                    <input type="hidden" name="idtran$idtransaksi" value="<?= $idpesanan; ?>">
                                                                    <br>
                                                                    <br>
                                                                    <button type="submit" class="btn btn-danger" name="hapusKasir">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                        <?php
                                        };
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto"><span>LSP &copy;Andhika 12 RPL 3</span></div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.../"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.../"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- sweet alert -->
    <script src="../vendor/sweetalert/sweetalert2.min.js"></script>


</body>

</html>