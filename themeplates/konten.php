<?php 

if($_SESSION['admin']) {
	$user = $_SESSION['admin']['id_user'];
} else if($_SESSION['kasir']) {
	$user = $_SESSION['kasir']['id_user'];
}
// var_dump($user);
$sql = $koneksi->query("SELECT * FROM tb_user WHERE id_user = $user") or die(mysqli_error($koneksi));
$data = $sql->fetch_assoc();
$id_user = $data['id_user'];
// echo $id_user;
// echo $nama = $data['foto'];

if($page == 'pelanggan') {
	if($aksi == '') {
		require_once 'page/pelanggan/pelanggan.php';
	} else if($aksi == 'tambah') {
		require_once 'page/pelanggan/tambah.php';
	} else if($aksi == 'ubah') {
		require_once 'page/pelanggan/ubah.php';
	} else if($aksi == 'hapus') {
		require_once 'page/pelanggan/hapus.php';
	}
} else if($page == 'pengguna') {
	if($aksi == '') {
		require_once 'page/pengguna/pengguna.php';
	} else if($aksi == 'tambah') {
		require_once 'page/pengguna/tambah.php';
	} else if($aksi == 'ubah') {
		require_once 'page/pengguna/ubah.php';
	} else if($aksi == 'hapus') {
		require_once 'page/pengguna/hapus.php';
	}
} else if($page == 'laundry') {
	if($aksi == '') {
		require_once 'page/laundry/laundry.php';
	} else if($aksi == 'tambah') {
		require_once 'page/laundry/tambah.php';
	} else if($aksi == 'lunas') {
		require_once 'page/laundry/lunas.php';
	}
} else { ?>
	<h1 class='mt-4'>Dashboard</h1><ol class='breadcrumb mb-4'><li class='breadcrumb-item'><a href='index.php'>Dashboard</a></li><li class='breadcrumb-item active'>Static Navigation</li></ol>
	<div class="card">
  <div class="card-body">
    <img src="./img/<?= $data['foto']; ?>" class="rounded-circle shadow">
    <p style="display: inline;">Halo, anda sedang login sebagai,<b> <?= $data['username']; ?></b></p>
  </div>
</div>
	
<?php
}

?>