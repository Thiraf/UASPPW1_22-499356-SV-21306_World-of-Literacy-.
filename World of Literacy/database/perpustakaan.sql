-- Membuat tabel Perpustakaan
CREATE TABLE Perpustakaan (
    id INT PRIMARY KEY,
    name_Library VARCHAR(255),
    country VARCHAR(255)
);

-- Menambahkan data perpustakaan
INSERT ALL
INTO Perpustakaan VALUES (1, 'Perpustakaan Bantul', 'Indonesia')
INTO Perpustakaan VALUES (2, 'Perpustakaan Yogyakarta', 'Indonesia')
INTO Perpustakaan VALUES (3, 'Perpustakaan Upin', 'Malaysia')
INTO Perpustakaan VALUES (4, 'Perpustakaan Ipin', 'Malaysia')
Select *  from dual;
Select * from Perpustakaan;

-- Membuat tabel Buku
CREATE TABLE Book (
    id INT PRIMARY KEY,
    bookTitle VARCHAR(255),
    id_perpustakaan INT,
    FOREIGN KEY (id_perpustakaan) REFERENCES Perpustakaan(id)
);

-- Menambahkan data buku
INSERT ALL
INTO Book VALUES (1, 'Harry Potter', 1)
INTO Book VALUES (2, 'Harry Potter', 2)
INTO Book VALUES (3, 'The Lord of the Rings', 1)
INTO Book VALUES (4, 'The Chronicles of Narnia', 3)
SELECT * FROM DUAL;

-- -- Use case: Mencari perpustakaan berdasarkan judul buku "Harry Potter" di negara Indonesia
-- SELECT p.name_Library AS nama_perpustakaan
-- FROM Perpustakaan p
-- JOIN Book b ON p.id = b.id_perpustakaan
-- WHERE b.bookTitle = 'The Lord of the Rings' AND p.country = 'Malaysia';








