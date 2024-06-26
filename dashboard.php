<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <table align="center">
                <tr>
                    <td align="right">
                        <img src="logo.jpg" alt="Logo Website Seni" width = 50px align = "center">
                    </td>
                </tr>
            </table>
        </div>
        <div class = "login">
        <nav>
            <ul>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        </div>
        <div class = "menu">
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#artist">Artists</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <main>
        <section class="description">
            <h1 align = "center">Welcome to He!Art</h1>
            <p align = "center">Tempat dimana kata-kata menjadi warna dan pikiran menjadi bentuk. Mencipta mahakarya yang memukau senantiasa. Di sini, Anda akan menemukan beragam karya dari seniman-seniman berbakat dari seluruh penjuru. Dari goresan kuas yang mengungkapkan emosi hingga potret yang merayakan keindahan. </p>
            <h4 align="center">Join our community of artists and art enthusiasts</h4>
        </section>
        <section class="gallery">
            <div class = "carousel">
                <div class="cards-container">
            <div class="card" onclick="goToArtistProfile('artist1')">
                <img src="Picture/Affandi (1907-1990) , Self Portrait  _ Christie's.jpeg" alt="Artwork 1">
                <div class="details">
                    <h3>Self Portrait</h3>
                    <p>by <span class="artist" data-artist="artist1">Affandi</span></p>
                </div>
            </div>
            <div class="card" onclick="goToArtistProfile('artist2')">
                <img src="Picture/AFFANDI (Indonesia 1907-1990) , Javanese dancer  _ Christie's.jpeg" alt="Artwork 2">
                <div class="details">
                    <h3>Jvanese Dancer</h3>
                    <p>by <span class="artist" data-artist="artist2">Affandi</span></p>
                </div>
            </div>
            <div class="card" onclick="goToArtistProfile('artist2')">
                <img src="Picture/KUSUMA AFFANDI (1907_1990), INDONESIAN ABSTRACT_EXPRESSIONIST PAINTER - Meeting  Benches (1).jpeg" alt="Artwork 2">
                <div class="details">
                    <h3>Indonesian Abstract Expresionist Painter</h3>
                    <p>by <span class="artist" data-artist="artist2">Affandi</span></p>
                </div>
            </div>
            <div class="card" onclick="goToArtistProfile('artist2')">
                <img src="Picture/Roby Dwi Antono _ Autopsy of Mystery.jpeg" alt="Artwork 2">
                <div class="details">
                    <h3>Autopsy of Mystery</h3>
                    <p>by <span class="artist" data-artist="artist2">Roby Dwi Antono</span></p>
                </div>
            </div>
            <div class="card" onclick="goToArtistProfile('artist2')">
                <img src="Picture/Roby Dwi Antono_ Mengemas Rupa.jpeg" alt="Artwork 2">
                <div class="details">
                    <h3>Mengemas Rupa</h3>
                    <p>by <span class="artist" data-artist="artist2">Roby Dwi Antono</span></p>
                </div>
            </div>
            <div class="card" onclick="goToArtistProfile('artist2')">
                <img src="Picture/Roby Dwi Antono_ Waktu Membatu.jpeg" alt="Artwork 2">
                <div class="details">
                    <h3>Waktu Membatu</h3>
                    <p>by <span class="artist" data-artist="artist2">Roby Dwi Antono</span></p>
                </div>
            </div>
            <!-- Add more cards here -->
        </div>
        </div>
        <button class="prev" onclick="moveCarousel(-1)">❮</button>
        <button class="next" onclick="moveCarousel(1)">❯</button>
        </section>
    </main>
    <footer align = "center">
        <p>Copyright © He!Art 2024 </p>
    </footer>
    <script>
       document.addEventListener("DOMContentLoaded", function() {
    // Mengambil elemen h4 menggunakan DOM
    var joinCommunityText = document.querySelector('h4');

    // Mengubah bentuk kursor menjadi tangan saat kursor masuk ke teks pada h4
    joinCommunityText.addEventListener('mouseenter', function() {
        joinCommunityText.style.cursor = 'pointer';
    });

    // Mengarahkan pengguna ke halaman login saat teks pada h4 diklik
    joinCommunityText.addEventListener('click', function() {
        window.location.href = 'login.html';
    });
});
    </script>
<!--script carousel-->
<script>
    var currentIndex = 0;
var cards = document.querySelectorAll('.card');

function moveCarousel(n) {
    currentIndex += n;
    showCards();
}

function showCards() {
    var visibleCards = 3; // Menentukan jumlah kartu yang ditampilkan
    var lastIndex = cards.length - visibleCards;

    if (currentIndex < 0) {
        currentIndex = 0;
    } else if (currentIndex > lastIndex) {
        currentIndex = lastIndex;
    }

    var translateValue = -currentIndex * (cards[0].offsetWidth + 20); // Menghitung nilai translasi
    document.querySelector('.cards-container').style.transform = 'translateX(' + translateValue + 'px)';
}
</script>

</body>
</html>
