<?php 
include '../koneksi.php';

function upload() {
    $namaFile = $_FILES['photo']['name'];
    $error = $_FILES['photo']['error'];
    $tmpName = $_FILES['photo']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "
            <script>
                alert('Foto Harus Diisi');
                window.location = 'artist-entry.php';
            </script>
        ";

        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstentiGambarValid)) {
        echo "
            <script>
                alert('File Harus Berupa Foto');
                window.location = 'artist-entry.php';
            </script>
        ";

        return null;
    }

    // lolos pengecekan, upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    $oke =  move_uploaded_file($tmpName, '../Picture/' . $namaFileBaru);
    return $namaFileBaru;

}

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $email = $_POST['email'];
    $photo = upload();

    if(!$photo) {
        return false;
    }
    var_dump($photo, $nama, $ttl, $email);

    $sql = "INSERT INTO seniman VALUES(NULL, '$photo', '$nama', '$ttl','$email')";

    if(empty($nama) || empty($ttl)|| empty($email)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'artist-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Seniman Berhasil Ditambahkan');
                window.location = 'artist.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'artist-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $email = $_POST['email'];
    $photoLama = $_POST['photoLama'];

    // cek apakah user pilih gambar atau tidak
    if($_FILES['photo']['error']) {
        $photo = $photoLama;
    }else {
        // foto lama akan dihapus dan diganti foto baru
        unlink('../Picture/' . $photoLama);
        $photo = upload();
    }

    $sql = "UPDATE seniman SET 
            photo = '$photo',
            nama = '$nama',
            ttl = '$ttl',
            email = '$email'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Seniman Berhasil Diubah');
                window.location = 'artist.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'artist-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus gambar
    $sql = "SELECT * FROM seniman WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $photo = $row['photo'];
    unlink('../Picture/' . $photo);
    

    $sql = "DELETE FROM seniman WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Seniman Berhasil Dihapus');
                window.location = 'artist.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Seniman Gagal Dihapus');
                window.location = 'artist.php';
            </script>
        ";
    }
}else {
    header('location: artist.php');
}