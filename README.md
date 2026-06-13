# Aplikasi Blog - Sistem Manajemen Konten (CMS) & Halaman Publik

Aplikasi Blog ini dibangun menggunakan framework **Laravel** dengan arsitektur **MVC (Model-View-Controller)** untuk memenuhi tugas Ujian Akhir Semester (UAS) mata kuliah Pemrograman Web. Aplikasi ini mengintegrasikan fungsionalitas pengelolaan konten internal (CMS) dengan halaman pembaca publik yang dapat diakses tanpa login.

---

## Informasi Mahasiswa
* **Nama Lengkap:** Maulana Muhammad Iqbal
* **NIM:** 240605110247

---

## Deskripsi Aplikasi & Fitur Utama

Aplikasi ini menggunakan database `db_blog` dengan tiga tabel utama yang saling berelasi: `penulis`, `kategori_artikel`, dan `artikel`. Fitur aplikasi dibagi menjadi dua bagian utama:

### 1. Sistem Manajemen Konten (CMS / Administrator)
Fitur internal khusus untuk penulis yang telah login untuk mengelola data master:
* **Manajemen Penulis:** Operasi *Create, Read, Update, Delete* (CRUD) data penulis.
* **Manajemen Kategori Artikel:** Operasi CRUD data kategori untuk pengelompokan konten.
* **Manajemen Artikel:** Operasi CRUD tulisan/artikel blog.

### 2. Halaman Pengunjung (Publik / Guest)
Halaman depan berdesain bersih, sederhana, dan elegan yang memanfaatkan komponen Bootstrap. Halaman ini bersifat publik (tanpa proteksi `auth` middleware):
* **Halaman Utama (Beranda):**
  * Menampilkan **5 artikel terbaru**.
  * Memiliki **Widget Kategori Artikel** di bagian samping.
  * Fitur **Filtrasi Kategori**: Pengunjung dapat menyaring daftar artikel dengan mengklik salah satu kategori pada widget.
  * Tombol **"Baca Selengkapnya"** atau **"Kelanjutannya"** untuk menuju ke detail artikel.
* **Halaman Detail Artikel:**
  * Menampilkan isi konten artikel secara lengkap beserta informasi penulis dan tanggal rilis.
  * **Widget Artikel Terkait:** Menampilkan maksimal **5 artikel terkait** dari kategori yang sama di bilah samping.
  * Fitur **Navigasi Interaktif**: Tautan langsung untuk membaca artikel terkait lainnya atau tombol **"Kembali ke Beranda"**.

---

## Struktur Arsitektur (Ketentuan Teknis)
* **Controller Terpisah:** Logika halaman pengunjung dipisahkan secara struktural dari Controller CMS administrator.
* **Routing:** Seluruh endpoint publik dan admin didefinisikan secara rapi di dalam file `routes/web.php`.
* **Blade Templating:** Tampilan pengunjung menggunakan layout Blade tersendiri yang terpisah dari layout CMS.

---

## Langkah-langkah Menjalankan Aplikasi Secara Lokal

1. Pastikan Anda sudah menginstal PHP, Composer, dan Node.js di komputer Anda.
2. Salin atau clone repositori ini ke direktori lokal Anda.
3. Buka terminal dan jalankan `composer install` untuk menginstal dependensi PHP framework.
4. Salin file `.env.example` menjadi `.env` (`cp .env.example .env`).
5. Jalankan `php artisan key:generate` untuk membuat kunci aplikasi baru.
6. Sesuaikan konfigurasi koneksi database Anda pada file `.env` (isi nama database dengan `db_blog`).
7. Jalankan perintah `php artisan migrate --seed` untuk membuat struktur tabel (`penulis`, `kategori_artikel`, `artikel`) sekaligus mengisi data awal (*seed data*).
8. Jalankan `npm install` untuk memasang dependensi aset front-end.
9. Jalankan `npm run dev` untuk melakukan kompilasi aset CSS/Bootstrap.
10. Jalankan `php artisan serve` untuk mengaktifkan server pengembangan lokal Laravel.
11. Buka browser kesayangan Anda dan akses alamat `http://127.0.0.1:8000`.

> **Catatan Keamanan:** File `.env` sudah otomatis didaftarkan di dalam `.gitignore` agar kredensial database penting Anda tidak bocor ke publik GitHub.

---

## Tautan Video Demonstrasi

Berikut adalah video demonstrasi lengkap alur sistem CMS (CRUD Penulis, Kategori, Artikel) dan penjelajahan Halaman Pengunjung (Fitur Filter, Artikel Terkait, Navigasi):

* **YouTube:** https://youtu.be/zxJIdPLNvUw
*(Durasi video tidak melebihi batas maksimal 10 menit sesuai ketentuan)*
