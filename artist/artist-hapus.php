<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'artist.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM seniman WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../css/artwork-gabungan.css" />
   <!-- Boxicons CDN Link -->
   <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome Cdn Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.css"/>
   <title>Heart Admin | Hapus</title>
</head>
<body>
<div class="sidebar">
		<div class="container">
        <nav>
          <ul>
            <li><a href="dashboard.php" class="logo">
              <img src="logo.jpg" alt="">
              <span class="nav-item">DashBoard</span>
            </a></li>
            <li><a href="admin.php">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
            </a></li>
            <li><a href="artist/artist.php">
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
	<div class="home-content">
	<style>
      /* Target the .home-content element */
      .home-content {
        margin: 0 auto; /* Center horizontally */
        width: 80%; /* Adjust width as needed */
        text-align: center; /* Center text content */
        padding: 20px; /* Add padding for spacing */
      }
    </style>
	   <h3>Hapus Data Seniman</h3>
         <div class="form-login">
            <h4>Ingin Menghapus Data ?</h4>
            <form
              action="artist-proses.php"
              method="post"
              enctype="multipart/form-data"
            >
              <input type="hidden" name="id" value="<?= $data['id'] ?>">
              <button type="submit" class="btn" name="hapus" style="margin-top: 50px;">
			Yes
		  </button>
		  <button type="submit" class="btn" name="tidak">
			No
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
