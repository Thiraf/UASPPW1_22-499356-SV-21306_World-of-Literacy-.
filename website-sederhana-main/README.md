# UAS PPW
1.Nama :Ananda Hirzi Thirafi


2.Penjelasan website secara umum, contoh: untuk apa, kebutuhan klien seperti apa, permasalahan yang coba di-cover dengan website:
-Untuk kebutuhan website ini berfungsi untuk mencari buku di setiap perpustakaan (namun sekarang masih saya beri sedikit data ) , jadi dengan adanya website ini maka orang dapat mengetahui lokasi perpustakaan saat mencari buku.
-Lalu jika ada pertanyaan mengapa tidak sekalian diberi jumlah stok buku agar kita dapat mengetahui apakah buku tersebut ada atau tidaknya ,maka jawaban saya seperti selogan di pembukaan website yaitu "Uncover Literary Treasures Worldwide: Find Your Next Book Adventure!" yang artinya "Temukan Harta Karun Sastra di Seluruh Dunia: Temukan Petualangan Buku Anda Selanjutnya!" .jadi jika saya memberi stok untuk mengetahui jumlah buku maka tidak bisa disebut petualangan. dan sebagai salah satu tujuan saya membuat website ini agar para pencari buku banyak mendatangi perpustakaan.Lalu apabila perpustakaan pertama tidak menyimpan buku tersebut maka dapat mencari alternatif perpustakaan lainnya

Sebagai contoh : Kala itu Andi ingin mencari buku Harry Potter di negara Indonesia ,setelah itu saat di cek terdapat 2 tempat yang menyimpan buku tersebut yaitu Perpustakaan Bantul dan Perpustakaan Yogyakarta .dikarenakan saya tidak mencantumkan stok buku,dan dikala itu Andi mendatangi perpustakaan Bantul yang buku Harry Potternya sedang di pinjam.Maka dia akan pergi ke perpustakaan Yogyakarta untuk mencari buku Harry Potter.Sehingga dia dapat mengetahui (Mengenal beberapa perpustakaan di indonesia) 

3.Bagaimana website yang dibuat menjawab 4 requirement dasar (kriteria penilaian). 
a).Saya membuat pencarian data menggunakan SQL DEVELOPER :
    // Buat query untuk mencari perpustakaan berdasarkan judul buku dan negara
    $sql = "SELECT p.name_Library AS nama_perpustakaan
            FROM Perpustakaan p
            JOIN Book b ON p.id = b.id_perpustakaan
            WHERE b.bookTitle = '$bookTitle' AND p.country = '$country'";

Yang mana itu berfungsi untuk mencocokkan antara buku dan id perpustakaan (Negaranya)

b).<form method="post" action="">
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

Berfungsi untuk memasukkan data pada variabel

c).// Cek apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil nilai inputan dari form
    $bookTitle = $_POST['bookTitle'];
    $country = $_POST['country'];}

    Berfungsi untuk mengambil input dari poin b dan memasukkannya pada variabel yang nantinya akan di eksekusi

d).    // Eksekusi query
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

    Berfungsi untuk mengeksekusi data input. berdasarkan  rumus pada poin a yang sehingga menghasilkan output (yang bersifat search /mencari data  ) lalu apabila buku yang di masukkan terdapat di negara yang dimasukkan maka akan mengeluarkan nama perpustakaan penyedia buku tersebut dan apabila tidak terdapat maka akan mengeluarkan output "No result found."
