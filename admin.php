<?php
  include 'koneksi.php';
  $sql_art = "SELECT COUNT(*) as total_karya FROM artwork";
  $result_art = $koneksi->query($sql_art);
  $total_art = $result_art->fetch_assoc()['total_karya'];
 
  $sql_seniman = "SELECT COUNT(*) as total_seniman FROM seniman";
  $result_seniman = $koneksi->query($sql_seniman);
  $total_seniman = $result_seniman->fetch_assoc()['total_seniman'];
?>
<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard Admin</title>
      <link rel="stylesheet" href="css/admin.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.css"/>
    </head>
    <body>
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
            <li><a href="logout.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>
    
        <section class="main">
          <div class="main-top">
            <h1>Welcome Admin</h1>
            <i class="fas fa-user-cog"></i>
          </div>

          <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $total_art; ?></div>
                        <div class="cardName">Karya Seni</div>
                    </div>
                    <div class="iconBx">
                      <i class='bx bx-body'></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $total_seniman; ?></div>
                        <div class="cardName">Seniman</div>
                    </div>
                    <div class="iconBx">
                    <i class='bx bx-book-content'></i>
                    </div>
                </div>
                </div>
          </section>
      </div>

      <style>
		.cardBox {
position: relative;
width: 100%;
padding: 20px;
display: grid;
grid-template-columns: repeat(3, 1fr);
grid-gap: 50px;
}

.cardBox .card {
position: relative;
padding: 20px;
border-radius: 20px;
display: flex;
justify-content: space-between;	
cursor: pointer;
box-shadow: 0 10px 25px rgba(0, 0, 0, 0.20);
}

.cardBox .card .numbers {
position: relative;
font-weight: 500;
font-size: 2.5rem;
}

.cardBox .card .cardName {
font-size: 1.3rem;
margin-top: 5px;
}

.cardBox .card .iconBx {
font-size: 4.5rem;
color: darkslateblue;
}

.cardBox .card:hover {
background: #c7c0e9;
}
	</style>
    </body>
    </html></span>