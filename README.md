RANGKUMAN

Pada modul ini kita belajar tentang Model. Model adalah bagian dari MVC yang bertanggung jawab untuk menangani basis data (database). Model bertugas untuk query ke database, insert data baru, update, atau hapus record di database.

Untuk dapat bekerja dengan database, sebelumnya kita harus melakukan konfigurasi koneksi database. Untuk melakukannya kita bisa mengisi variabel yang tersedia pada file konfigurasi database pada config/database.php.

Untuk membuat, mengubah atau menghapus struktur tabel dan field database kita bisa menggunakan Migration. Migration adalah suatu cara untuk membuat skema database secara langsung dengan mengeksekusi kode program, bukan melalui eksekusi SQL. Dengan migration, pembuatan skema database dilakukan menggunakan kode program PHP untuk menggantikan kode SQL.

Untuk menambahkan data awal ke database bisa menggunakan Seeding. Hal ini biasanya dilakukan saat pengembangan terutama jika kita ingin menguji apakah fitur tertentu telah berjalan sesuai ekspektasi.

Untuk melakukan optimasi terhadap aplikasi yang dikembangkan, dapat ditambahkan proses caching. Dengan adanya caching beban pengambilan data dari database atau sumber lain dapat dikurangi.
