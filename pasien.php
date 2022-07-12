<!DOCTYPE html>
<html lang="en">

<head>
    <title>Klinik </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-fw fa-clinic-medical"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Klinik</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">   
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-capsules"></i>
                    <span>Home</span></a>
                <a class="nav-link" href="dokter.php">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Dokter</span></a>
                    <li class="nav-item">
                <a class="nav-link" href="pasien.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Pasien</span></a>
                <a class="nav-link" href="obat.php">
                    <i class="fas fa-fw fa-capsules"></i>
                    <span>Obat</span></a>
				<a class="nav-link" href="berobat.php">
                    <i class="fas fa-fw fa-capsules"></i>
                    <span>Rekam Medis</span></a>
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-capsules"></i>
                    <span>Logout</span></a>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

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
<div class="container shadow p-3">
	<header>
	<h2 align="center" class="hero">Tabel Pasien</h2>
	</header>
	<div class="btn-toolbar mb-2 mb-md-10">
	</div> 
	<hr>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
            <tr>
                <td>No</td>
				<td>Id Pasien</td>
                <td>Nama Pasien</td>
                <td>Jenis Kelamin</td>
                <td>Umur</td>  
				<td>Aksi</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM pasien');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_pasien'] ?></td>
                <td><?php echo $data['nama_pasien'] ?></td>
                <td><?php echo $data['jenis_kelamin'] ?></td>
                <td><?php echo $data['umur'] ?></td>
				<td>
					<a href="Pasien_ubah.php?id=<?= $data['id_pasien'];?>" role="button"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
					<a href="Pasien_hapus.php?id=<?= $data['id_pasien'];?>" role="button"><i class="fa-solid fa-trash-can"></i>Hapus</a>
				</td>
            </tr>
        <?php } ?>
    </table>
    <div class="btn-toolbar mb-2 mb-md-10">
		<a href="Pasien_tambah.php" role="button"></i>Tambah Pasien</a>
		</div>
	</div>
</div>
</body>
</html>