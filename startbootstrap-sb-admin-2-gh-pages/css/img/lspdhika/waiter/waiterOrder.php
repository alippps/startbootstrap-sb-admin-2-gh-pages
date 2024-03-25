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

    <title>Waiter Order</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboardWaiter.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">The MaResto</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboardWaiter.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
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
            <li class="nav-item ">
                <a class="nav-link" href="waiterBarang.php">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Entri Barang</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="waiterOrder.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Entri Order</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="waiterLaporan.php">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr-2 d-none d-lg-inline text-gray-600 small">Waiter</span><img class="img-profile rounded-circle" src="../img/undraw_profile.svg" /></a>
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
                            <h6 class="m-0 font-weight-bold text-primary">Data Order</h6>
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
                                                <label class="form-label">ID Pesanan</label>
                                                <input type="text" class="form-control" placeholder="ID Pesanan" name="idpesanan" readonly="readonly">
                                            </div>
                                            <div class="modal-body">
                                                <label class="form-label">ID Menu</label>
                                                <select class="form-control" name="idmenu" id="menu">
                                                    <option>---</option>
                                                    <?php
                                                        include "../function.php";
                                                        $query = mysqli_query($conn, "Select * From menu") or die (mysqli_error($conn));
                                                        while($data = mysqli_fetch_array($query)){
                                                            echo "<option value=$data[idmenu]> $data[Namamenu]</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="modal-body">
                                                <label class="form-label">ID Meja</label>
                                                <select class="form-control" name="idMeja" id="meja">
                                                    <option>---</option>
                                                    <?php
                                                        include "../function.php";
                                                        $query = mysqli_query($conn, "Select * From meja") or die (mysqli_error($conn));
                                                        while($data = mysqli_fetch_array($query)){
                                                            echo "<option value=$data[idMeja]> $data[namaMeja]</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="modal-body">
                                                <label class="form-label">ID Pelanggan</label>
                                                <select class="form-control" name="idpelanggan" id="pelanggan">
                                                    <option>---</option>
                                                    <?php
                                                        include "../function.php";
                                                        $query = mysqli_query($conn, "Select * From pelanggan") or die (mysqli_error($conn));
                                                        while($data = mysqli_fetch_array($query)){
                                                            echo "<option value=$data[idpelanggan]> $data[Namapelanggan]</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="modal-body">
                                                <label class="form-label">Jumlah</label>
                                                <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" required>
                                            </div>
                                            <div class="modal-body">
                                                <label class="form-label">Kasir</label>
                                                <select class="form-control" name="iduser" id="user">
                                                    <option>---</option>
                                                    <?php
                                                        include "../function.php";
                                                        $query = mysqli_query($conn, "Select * From user") or die (mysqli_error($conn));
                                                        while($data = mysqli_fetch_array($query)){
                                                            echo "<option value=$data[iduser]> $data[username]</option>";
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="tambahWO">Tambah</button>
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
                                            <td>ID Pesanan</td>
                                            <td>ID Menu</td>
                                            <td>ID Meja</td>
                                            <td>ID Pelanggan</td>
                                            <td>Jumlah</td>
                                            <td>Kasir</td>
                                            <td>Action</td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $ambildata = mysqli_query($conn, "SELECT pesanan.idpesanan, pesanan.idMeja, pesanan.jumlah, menu.idmenu, pelanggan.idpelanggan, user.iduser
                                        FROM pesanan 
                                        INNER JOIN menu ON pesanan.idmenu = menu.idmenu
                                        INNER JOIN pelanggan ON pesanan.idpelanggan = pelanggan.idpelanggan
                                        INNER JOIN user ON pesanan.iduser = user.iduser;");
                                        while ($tampil = mysqli_fetch_array($ambildata)) {
                                            $idpesanan = $tampil['idpesanan'];
                                            $idmenu = $tampil['idmenu'];
                                            $idMeja = $tampil['idMeja'];
                                            $idpelanggan = $tampil['idpelanggan'];
                                            $jumlah = $tampil['jumlah'];
                                            $iduser = $tampil['iduser']; 
                                            ?> 
                                            <tr>
                                                <td><?= $idpesanan; ?></td>
                                                <td><?= $idmenu; ?></td>
                                                <td><?= $idMeja; ?></td>
                                                <td><?= $idpelanggan; ?></td>
                                                <td><?= $jumlah; ?></td>
                                                <td><?= $iduser; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-warning mb-2" data-toggle="modal" data-target="#edit<?= $idpesanan; ?>">Edit</button>
                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?= $idpesanan; ?>">Delete</button>
                                                </td>
                                                <!--AwaL Modal Edit Data -->
                                                <div class="modal fade" id="edit<?= $idpesanan; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                                                            </div>
                                                            <!-- Modal ISI -->
                                                            <form method="post" action="../function.php">
                                                            <div class="modal-body">
                                                                <label class="form-label">ID Pesanan</label>
                                                                <input type="text" class="form-control" value="<?= $idpesanan; ?>" placeholder="ID Pesanan" name="idpesanan" readonly="readonly">
                                                            </div>
                                                            <div class="modal-body">
                                                                <label class="form-label">ID Menu</label>
                                                                <input type="text" class="form-control" value="<?= $idmenu; ?>" placeholder="ID Menu" name="idmenu" required>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label class="form-label">ID Meja</label>
                                                                <input type="text" class="form-control" value="<?= $idMeja; ?>" placeholder="ID Meja" name="idMeja" required>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label class="form-label">ID Pelanggan</label>
                                                                <input type="text" class="form-control" value="<?= $idpelanggan; ?>" placeholder="ID Pelanggan" name="idpelanggan" required>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label class="form-label">Jumlah</label>
                                                                <input type="text" class="form-control" value="<?= $jumlah; ?>" placeholder="Jumlah" name="jumlah" required>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label class="form-label">Kasir</label>
                                                                <input type="text" class="form-control" value="<?= $iduser; ?>" placeholder="Kasir" name="iduser" required>
                                                            </div>
                                                                <div class="modal-footer">
                                                                    <input type="hidden" name="idpesanan" value="<?= $idpesanan; ?>">
                                                                    <button type="submit" class="btn btn-primary" name="editWO" value="<?= $idMeja; ?>">Edit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Akhir Modal Edit -->

                                                <!-- AwalModal Delete -->
                                                <div class="modal fade" id="delete<?= $idpesanan; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                                                            </div>
                                                            <!-- Modal ISI -->
                                                            <form method="post">
                                                                <div class="modal-body">
                                                                    Apaka anda yakin ingin menghapus <?= $idmenu ?> ?
                                                                    <input type="hidden" name="idpesanan" value="<?= $idpesanan; ?>">
                                                                    <br>
                                                                    <br>
                                                                    <button type="submit" class="btn btn-danger" name="hapusWO">Hapus</button>
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
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- sweet alert -->
    <script src="../vendor/sweetalert/sweetalert2.min.js"></script>


</body>

</html>