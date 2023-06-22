<?php
include 'conn.php';

// Inisialisasi variabel error
$error = '';

// Cek apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil nilai inputan dari form
    $bookTitle = $_POST['bookTitle'];
    $country = $_POST['country'];

    // Validasi inputan (opsional)
    // ...

    // Buat query untuk mencari perpustakaan berdasarkan judul buku dan negara
    $sql = "SELECT p.name_Library AS nama_perpustakaan
            FROM Perpustakaan p
            JOIN Book b ON p.id = b.id_perpustakaan
            WHERE b.bookTitle = '$bookTitle' AND p.country = '$country'";

    // Eksekusi query
    $result = mysqli_query($conn, $sql);

    // Periksa apakah ada hasil yang ditemukan
    if (mysqli_num_rows($result) > 0) {
        // Inisialisasi variabel untuk menyimpan hasil
        $searchResults = array();

        // Loop melalui hasil query dan tambahkan ke array $searchResults
        while ($row = mysqli_fetch_assoc($result)) {
            $searchResults[] = $row['nama_perpustakaan'];
        }
    } else {
        $error = "No results found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World of Literacy</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">
</head>
<style>
    #output {
        font-family: 'comic sans ms'; /* Ganti dengan gaya font yang diinginkan */
        font-size: 30px; /* Ganti dengan ukuran font yang diinginkan */
        font-weight: normal; /* Ganti dengan ketebalan font yang diinginkan */
        /* Tambahkan properti CSS lainnya sesuai kebutuhan */
    }
</style>
    <!-- Menempatkan kode JavaScript di sini -->
    <script>
        // Contoh kode JavaScript
        function validateForm() {
            var bookTitle = document.getElementById('bookTitle').value;
            var country = document.getElementById('country').value;
            
            // Validasi inputan (opsional)
            // ...
            
            // Cek apakah inputan kosong
            if (bookTitle === '' || country === '') {
                alert('Please fill in all fields.');
                return false;
            }
        }
        function searchBook(event) {
            event.preventDefault();
    // ...
}

    </script>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>World of Literacy</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#History">History</a></li>
                    <li><a href="#Search">Search</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <a name="Home"></a>
            <img src="https://img.freepik.com/free-vector/flat-design-world-book-day-concept_52683-35711.jpg?size=626&ext=jpg&ga=GA1.1.776699662.1669771999&semt=ais"/>
            <div class="kolom">
                <p class="deskripsi">Search of Book</p>
                <h2>"Uncover Literary Treasures Worldwide: Find Your Next Book Adventure!"</h2>
                <p>Book search all over the world</p>
                <p><a href="#History" class="tbl-pink">Learn more</a></p>
            </div>
        </section>

        <!-- untuk history-->
        <section id="history">
            <a name="History"></a>
            <div class="kolom">
                <p class="deskripsi">Origin</p>
                <h2>History</h2>
                <p>The history of our web creation began with a passion to bring readers together with the books they wanted, no matter how rare or rare they were. We realize that with the development of technology, we have the opportunity to explore treasure troves of literature scattered around the world, which previously might have been difficult to reach.</p>
                <p>We come together as a team of book lovers, web developers and technologists with one common goal: to empower readers with easy and comprehensive access to books from different continents, countries and cultures. We want to make sure that nobody has to face any difficulties while searching for their dream book.</p>
                <p><a href="#search" class="tbl-biru">Change to Search</a></p>
            </div>
            <img src="https://img.freepik.com/free-vector/journey-concept-illustration_114360-4109.jpg?size=626&ext=jpg&ga=GA1.1.776699662.1669771999&semt=sph"/>
        </section>

        
<!-- Search Fungsion -->
<section id="search">
    <a name="Search"></a>
    <div class="tengah">
        <div id="search-results">
            <div class="kolom">
                <h2>Search of Book World</h2>
                <form method="post" action="">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Country</span>
                        <input name="country" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" id="1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Name of Book</span>
                        <input name="bookTitle" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" id="2">
                    </div>
                    <button name="submit" type="submit" class="btn rounded m-2">Search</button>
                </form>
                <div id="output">
                <?php if (isset($searchResults)): ?>
                    <h3>Search Results:</h3>
                    <ul>
                        <?php foreach ($searchResults as $result): ?>
                            <li><?php echo $result; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php elseif (!empty($error)): ?>
                    <p><?php echo $error; ?></p>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


        

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Ananda Hirzi Thirafi</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, culpa!</p>
                </div>
                <div class="footer-section">
                    <h3>Address</h3>
                    <p>Jln.Parangtritis km 7,
                        housing of natural image no C-24</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Anandaafie@gmail.com</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b>YouTube: </b>yutuberizzi</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2020. <b>World of Literacy</b> All Rights Reserved.
        </div>
    </div>

</body>
</html>
