<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="../assets/icon.png" />
	<link rel="stylesheet" href="../css/artwork-gabungan.css" />
	<!-- Boxicons CDN Link -->
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome Cdn Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.css"/>
	<title>Heart Admin | Entry</title>
</head>

<body>
<div class="sidebar">
		<div class="container">
        <nav>
          <ul>
            <li><a href="#" class="logo">
              <img src="logo.jpg" alt="">
              <span class="nav-item">DashBoard</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-user"></i>
              <span class="nav-item">Artist</span>
            </a></li>
            <li><a href="artwork/artwork.php">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Artwork</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-tasks"></i>
              <span class="nav-item">Transaction</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Settings</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-question-circle"></i>
              <span class="nav-item">Help</span>
            </a></li>
            <li><a href="" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>
</div>
	</div>
	<section class="home-section">
		<!-- <nav>
			<div class="sidebar-button">
				<i class="bx bx-menu sidebarBtn"></i>
			</div>
			<div class="profile-details">
				<span class="admin_name">Catshop Admin</span>
			</div>
		</nav> -->
		<div class="home-content">
			<h3>Tambahkan Karya Seni</h3>
			<div class="form-login">
			<form action="artwork-proses.php" method="post" enctype="multipart/form-data">
					<label for="judul">Judul</label>
					<input class="input" type="text" name="judul" id="categories" placeholder="Judul" />
					<label for="categories">Price</label>
					<input class="input" type="text" name="harga" id="price" placeholder="Price" />
					<label for="categories">Description</label>
					<input class="input" type="text" name="deskripsi" id="Description" placeholder="Description" />
					<label for="photo">Photo</label>
					<input type="file" name="photo" id="photo" style="margin-bottom: 20px" />
					<button type="submit" class="btn btn-simpan" name="simpan">
						Simpan
					</button>
				</form>
			</div>
		</div>
	</section>
	<script>
		let sidebar = document.querySelector(".sidebar");
		let sidebarBtn = document.querySelector(".sidebarBtn");
		sidebarBtn.onclick = function () {
			sidebar.classList.toggle("active");
			if (sidebar.classList.contains("active")) {
				sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		};
	</script>
</body>

</html>