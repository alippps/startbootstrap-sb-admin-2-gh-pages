<?php
session_start();

//membuat koneksi databse
$conn = mysqli_connect("localhost", "root", "", "langslsp");

// TAMBAH DATA MEJA
if (isset($_POST['tambahAM'])) {
  $idMeja = $_POST['idMeja'];
  $namaMeja  = $_POST['namaMeja'];
  $addtotable = mysqli_query($conn, "INSERT INTO meja (idMeja, namaMeja) VALUES ('$idMeja','$namaMeja')");
  if ($addtotable) {
    header('location:adminMeja.php');
  } else {
    header('location:index.php');
  }
}

// EDIT ADMIN MEJA
if (isset($_POST['editAM'])) {
    $idMeja = $_POST['idMeja'];
    $namaMeja  = $_POST['namaMeja'];
  $addtotable = mysqli_query($conn, "UPDATE meja SET idMeja='$idMeja', namaMeja='$namaMeja' WHERE idMeja ='$idMeja'");
  if ($addtotable) {
    header('location:adminMeja.php');
  } else {
    header('location:index.php');
  }
}

// delete ADMIN MEJA
if (isset($_POST['hapusAM'])) {
  $idMeja = $_POST['idMeja'];

  $hapus = mysqli_query($conn, "delete from meja where idMeja='$idMeja'");
  if ($hapus) {
    header('location:adminMeja.php');
  } else {
    header('location:index.php');
  }
}
// AKHIR ADMIN MEJA FUNGSI



// TAMBAH ADMIN BARANG
if (isset($_POST['tambahAB'])) {
    $idmenu = $_POST['idmenu'];
    $Namamenu  = $_POST['Namamenu'];
    $Harga  = $_POST['Harga'];
    $addtotable = mysqli_query($conn, "INSERT INTO menu (idmenu, Namamenu, Harga) VALUES ('$idmenu','$Namamenu', '$Harga')");
    if ($addtotable) {
      header('location:adminBarang.php');
    } else {
      header('location:index.php');
    }
  }
  
  // EDIT ADMIN Barang
  if (isset($_POST['editAB'])) {
      $idmenu = $_POST['idmenu'];
      $Namamenu  = $_POST['Namamenu'];
      $Harga = $_POST['Harga'];
     $addtotable = mysqli_query($conn, "UPDATE menu SET idmenu='$idmenu', Namamenu='$Namamenu', Harga='$Harga' WHERE idmenu ='$idmenu'");
    if ($addtotable) {
      header('location:adminBarang.php');
    } else {
      header('location:index.php');
    }
  }
  // delete ADMIN barang
if (isset($_POST['hapusAB'])) {
  $idmenu = $_POST['idmenu'];

  $hapus = mysqli_query($conn, "delete from menu where idmenu='$idmenu'");
  if ($hapus) {
    header('location:adminBarang.php');
  } else {
    header('location:index.php');
  }
}
// AKHIR ADMIN barang FUNGSI


// TAMBAH ADMIN pelanggan
if (isset($_POST['tambahAP'])) {
  $idpelanggan = $_POST['idpelanggan'];
  $Namapelanggan = $_POST['Namapelanggan'];
  $Jeniskelamin = $_POST['Jeniskelamin'];
  $Nohp = $_POST['Nohp'];
  $Alamat = $_POST['Alamat'];
  $addtotable = mysqli_query($conn, "INSERT INTO pelanggan (Namapelanggan, Jeniskelamin, Nohp, Alamat) VALUES ('$Namapelanggan', '$Jeniskelamin', '$Nohp', '$Alamat')");
  if ($addtotable) {
      // Pesan berhasil dan redirect ke halaman adminPelanggan.php
      echo '<script>alert("Data pelanggan berhasil ditambahkan."); window.location.href = "adminPelanggan.php";</script>';
  } else {
      // Pesan gagal dan redirect ke halaman index.php
      echo '<script>alert("Gagal menambahkan data pelanggan."); window.location.href = "index.php";</script>';
  }
}


// EDIT ADMIN pelanggan
if (isset($_POST['editAP'])) {
  $idpelanggan = $_POST['idpelanggan'];
  $Namapelanggan = $_POST['Namapelanggan'];
  $Jeniskelamin = $_POST['Jeniskelamin'];
  $Nohp = $_POST['Nohp'];
  $Alamat = $_POST['Alamat'];
  $addtotable = mysqli_query($conn, "UPDATE pelanggan SET idpelanggan='$idpelanggan', Namapelanggan='$Namapelanggan', Jeniskelamin='$Jeniskelamin',  Nohp='$Nohp', Alamat='$Alamat'  WHERE idpelanggan ='$idpelanggan'");
  if ($addtotable) {
    header('location:adminPelanggan.php');
  } else {
    header('location:index.php');
  }
}
// delete ADMIN pelanggan
if (isset($_POST['hapusAP'])) {
  $idpelanggan = $_POST['idpelanggan'];

  $hapus = mysqli_query($conn, "DELETE FROM pelanggan WHERE idpelanggan='$idpelanggan'");
  if ($hapus) {
      header('location:adminPelanggan.php');
  } else {
      header('location:index.php');
  }
}

// AKHIR ADMIN barang FUNGSI


// TAMBAH waiter BARANG
if (isset($_POST['tambahWB'])) {
  $idmenu = $_POST['idmenu'];
  $Namamenu  = $_POST['Namamenu'];
  $Harga  = $_POST['Harga'];
  $addtotable = mysqli_query($conn, "INSERT INTO menu (idmenu, Namamenu, Harga) VALUES ('$idmenu','$Namamenu', '$Harga')");
  if ($addtotable) {
    header('location:waiterBarang.php');

  } else {
    header('location:dashboardWaiter.php');
  }
}

// EDIT waiter Barang
if (isset($_POST['editWB'])) {
    $idmenu = $_POST['idmenu'];
    $Namamenu  = $_POST['Namamenu'];
    $Harga = $_POST['Harga'];
   $addtotable = mysqli_query($conn, "UPDATE menu SET idmenu='$idmenu', Namamenu='$Namamenu', Harga='$Harga' WHERE idmenu ='$idmenu'");
  if ($addtotable) {
    header('location:waiterBarang.php');
  } else {
    header('location:dashboardWaiter.php');
  }
}
// delete waiter barang
if (isset($_POST['hapusWB'])) {
$idmenu = $_POST['idmenu'];

$hapus = mysqli_query($conn, "delete from menu where idmenu='$idmenu'");
if ($hapus) {
  header('location:waiterBarang.php');
} else {
  header('location:dashboardWaiter.php');
}
}
// AKHIR waiter barang FUNGSI


// TAMBAH Waiter order
if (isset($_POST['tambahWO'])) {
    $idmenu = $_POST['idmenu']; 
    $idMeja = $_POST['idMeja'];
    $idpelanggan = $_POST['idpelanggan']; 
    $jumlah = $_POST['jumlah'];
    $iduser = $_POST['iduser']; 
    $addtotable = mysqli_query($conn, "INSERT INTO pesanan (idmenu, idMeja, idpelanggan, jumlah, iduser) VALUES ('$idmenu', '$idMeja', '$idpelanggan','$jumlah', '$iduser')");
    if ($addtotable) {
        header('location:waiterOrder.php');
    } else {
        header('location:dashboardWaiter.php');
    }
}


// EDIT Waiter order
if (isset($_POST['editWO'])) {
  $idpesanan = $_POST['idpesanan'];
  $namamenu = isset($_POST['namamenu']) ? $_POST['namamenu'] : '';
  $idMeja = $_POST['idMeja'];
  $idpelanggan = $_POST['idpelanggan']; 
  $jumlah = $_POST['jumlah'];
  $iduser = $_POST['iduser'];
  
  $addtotable = mysqli_query($conn, "UPDATE pesanan SET idpesanan='$idpesanan', idmenu='$namamenu', idMeja='$idMeja', idpelanggan='$idpelanggan', jumlah='$jumlah', iduser='$iduser' WHERE idpesanan ='$idpesanan'");
  if ($addtotable) {
    header('location:waiterOrder.php');
  } else {
    header('location:dashboardWaiter.php');
  }
}



// delete Waiter order
if (isset($_POST['hapusWO'])) {
  $idpesanan = $_POST['idpesanan'];

  $hapus = mysqli_query($conn, "delete from pesanan where idpesanan='$idpesanan'");
  if ($hapus) {
    header('location:waiterOrder.php');
  } else {
    header('location:dashboardWaiter.php');
  }
}
// akhit fungsi waiter order


// TAMBAH kasir
if (isset($_POST['tambahKasir'])) {
  $idtransaksi = $_POST['idtransaksi'];
  $idpesanan = $_POST['idpesanan'];
  $Total = $_POST['Total'];
  $Bayar = $_POST['Bayar']; 
  $addtotable = mysqli_query($conn, "INSERT INTO transaksi (idtransaksi, idpesanan, Total, Bayar) VALUES ('$idtransaksi','$idpesanan', '$Total', '$Bayar')");
  if ($addtotable) {
  header('location:adminTransaksi.php');
  } else {
  header('location:index.php');
  }
}
// EDIT kasir
if (isset($_POST['editKasir'])) {
  $idtransaksi = $_POST['idtransaksi'];
  $idpesanan = $_POST['idpesanan'];
  $Total = $_POST['Total'];
  $Bayar = $_POST['Bayar'];
  $addtotable = mysqli_query($conn, "UPDATE transaksi SET idtransaksi='$idtransaksi', idpesanan='$idpesanan', Total='$Total' Bayar='$Bayar' WHERE idtransaksi ='$idtransaksi'");
  if ($addtotable) {
  header('location:adminTransaksi.php');
  } else {
  header('location:index.php');
  }
}

// delte kasir
if (isset($_POST['hapusKasir'])) {
$idtransaksi = $_POST['idtra$idtransaksi'];

$hapus = mysqli_query($conn, "delete from transaksi where idtra$idtransaksi='$idtransaksi'");
if ($hapus) {
header('location:adminTransaksi.php');
} else {
header('location:index.php');
}
}