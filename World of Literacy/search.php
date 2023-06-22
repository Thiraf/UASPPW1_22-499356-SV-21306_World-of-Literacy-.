<!-- <?php
require 'conn.php';

if (isset($_POST['judulBuku']) && isset($_POST['negara'])) {
  $judulBuku = $_POST['judulBuku'];
  $negara = $_POST['negara'];

  $sql = "SELECT p.name_Library AS nama_perpustakaan
          FROM Perpustakaan p
          JOIN Book b ON p.id = b.id_perpustakaan
          WHERE b.bookTitle = '$judulBuku' AND p.country = '$negara'";

  $result = mysqli_query($conn, $sql);

  if ($result && mysqli_num_rows($result) > 0) {
    echo '<ul>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<li>' . $row['nama_perpustakaan'] . '</li>';
    }
    echo '</ul>';
  } else {
    echo 'No results found.';
  }
}
?> -->

<?php
