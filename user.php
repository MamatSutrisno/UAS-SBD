<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Menampilkan data dari database</title>
	<style>
       table {
            color: black;
			background-color: #F5F5F5;
		}
        table,tr,td {
            border: 1px solid black;
			margin: auto;
			padding: 12px;
		}
        thead {
            background-color: #15e9f8;
			color: white;
			font-weight: bold;
        }
    </style>
</head>
<body>
<div id="container">
        <header>
            <h1 align="center">Data Klinik</h1>
        </header>
		<div class="btn-toolbar mb-2 mb-md-10">
		<a href="home.php" role="button">Kembali</a>
		<a href="user_tambah.php" role="button"></i>Tambah</a>
		</div>
	<div id="hero">
	<h2 align="center">Tabel User</h2>
	<br>
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
				<td>Id_user</td>
				<td>Username</td>
				<td>Password</td>   
				<td>Nama Lengkap</td>
				<td>Aksi</td>
            </tr>
        </thead>
		<?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM user');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id'] ?></td>
                <td><?php echo $data['username'] ?></td>
				<td><?php echo $data['password'] ?></td>
				<td><?php echo $data['nama_lengkap'] ?></td>
				<td>
					<a href="User_ubah.php?id=<?= $data['id'];?>" role="button"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
					<a href="User_hapus.php?id=<?= $data['id'];?>" role="button"><i class="fa-solid fa-trash-can"></i>Hapus</a>
				</td>
            </tr>
        <?php } ?>
    </table>
	</div>
</div>
</body>
</html>