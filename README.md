-   jalankan perintah composer install untuk mendownload direktori vendor . Note : jika terjadi error coba perintah `composer update` untuk menggantikan perintah composer install

```bash
composer install
```

-   buat file .env lalu isi file tersebut dengan seluruh isi dari file .env.example (copy isi dari .env.example lalu paste di file .env)

-   jalankan perintah php artisan key generate

```bash
php artisan key:generate
```

-   Sesuaikan nama database, username dan password nya di file .env dengan database kalian.

-   menjalankan server laravel

```bash
php artisan serve
```

### Artibute

-   table "buku" terdapat data : id(int), judul(VARCHAR), deskripsi(TEXT), pengarang(VARCHAR), tahun(VARCHAR)
-   table "genre" terdapat data : id(int), nama(VARCHAR)
-   table "user" terdapat data : id(int), nama(VARCHAR), email(VARCHAR), password(VARCHAR)
-   table "profil" terdapat data : id(int), alamat(TEXT), umur(int)

### Description

-   setiap user memiliki satu profile
-   satu buku memiliki banyak genre
-   user dapat memberi komentar di banyak buku dan buku dapat dikomentari oleh banyak user

-   Web memiliki route sebagai berikut:

| url                      | method   | keterangan                                                                                                    |
| ------------------------ | -------- | ------------------------------------------------------------------------------------------------------------- |
| `'/'`                    | `GET`    | menampilkan gambar PNG/JPG/JPEG desain ERD                                                                    |
| `'/buku' `               | `GET`    | menampilkan tabel berisi data buku yang tersedia                                                              |
| `'/buku/create'`         | `GET`    | menampilkan form untuk membuat data buku baru, di dalam form tersebut terdapat input pengisian data-data buku |
| `'/buku'`                | `POST`   | menyimpan data buku baru                                                                                      |
| `'/buku/{buku_id}'`      | `GET`    | no #6                                                                                                         |
| `'/buku/{buku_id}/edit'` | `GET`    | menampilkan form untuk edit data-data buku                                                                    |
| `'/buku/{buku_id}'`      | `PUT`    | menyimpan data buku yang sudah diedit melalui form edit buku sesuai id                                        |
| `'/buku/{buku_id}'`      | `DELETE` | menghapus data buku dengan id tertentu                                                                        |
