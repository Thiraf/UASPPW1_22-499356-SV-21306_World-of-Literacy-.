<!-- <?php
function searchBooks($conn)
{
    if (isset($_POST['submit'])) {
        $bookTitle = $_POST['bookTitle'];
        $country = $_POST['country'];

        $sql = "SELECT p.name_Library AS nama_perpustakaan
                FROM Perpustakaan p
                JOIN Book b ON p.id = b.id_perpustakaan
                WHERE b.bookTitle = '$bookTitle' AND p.country = '$country'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<h3>Search Results:</h3>";
            echo "<ul>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>" . $row['nama_perpustakaan'] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "No results found.";
        }
    }
}
?> -->
