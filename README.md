# Aplikasi Blog - Sistem Manajemen Konten (CMS) & Halaman Publik

[cite_start]Aplikasi Blog ini dibangun menggunakan framework **Laravel** dengan arsitektur **MVC (Model-View-Controller)** untuk memenuhi tugas Ujian Akhir Semester (UAS) mata kuliah Pemrograman Web[cite: 1, 30]. [cite_start]Aplikasi ini mengintegrasikan fungsionalitas pengelolaan konten internal (CMS) dengan halaman pembaca publik yang dapat diakses tanpa login[cite: 4, 6, 28].

---

## Informasi Mahasiswa
* **Nama Lengkap:** Maulana Muhammad Iqbal
* **NIM:** 240605110247

---

## Deskripsi Aplikasi & Fitur Utama

[cite_start]Aplikasi ini menggunakan database `db_blog` dengan tiga tabel utama yang saling berelasi: `penulis`, `kategori_artikel`, dan `artikel`. [cite_start]Fitur aplikasi dibagi menjadi dua bagian utama[cite: 4, 6]:

### 1. Sistem Manajemen Konten (CMS / Administrator)
[cite_start]Fitur internal khusus untuk penulis yang telah login untuk mengelola data master[cite: 4, 56]:
* [cite_start]**Manajemen Penulis:** Operasi *Create, Read, Update, Delete* (CRUD) data penulis[cite: 56].
* [cite_start]**Manajemen Kategori Artikel:** Operasi CRUD data kategori untuk pengelompokan konten[cite: 56].
* [cite_start]**Manajemen Artikel:** Operasi CRUD tulisan/artikel blog[cite: 56].

### 2. Halaman Pengunjung (Publik / Guest)
[cite_start]Halaman depan berdesain bersih, sederhana, dan elegan yang memanfaatkan komponen Bootstrap[cite: 12, 26, 32]. [cite_start]Halaman ini bersifat publik (tanpa proteksi `auth` middleware):
* **Halaman Utama (Beranda):**
  * [cite_start]Menampilkan **5 artikel terbaru**[cite: 8, 57].
  * [cite_start]Memiliki **Widget Kategori Artikel** di bagian samping[cite: 8].
  * [cite_start]Fitur **Filtrasi Kategori**: Pengunjung dapat menyaring daftar artikel dengan mengklik salah satu kategori pada widget[cite: 9, 58].
  * [cite_start]Tombol **"Baca Selengkapnya"** atau **"Kelanjutannya"** untuk menuju ke detail artikel[cite: 59, 86].
* **Halaman Detail Artikel:**
  * [cite_start]Menampilkan isi konten artikel secara lengkap beserta informasi penulis dan tanggal rilis[cite: 10, 144, 145].
  * [cite_start]**Widget Artikel Terkait:** Menampilkan maksimal **5 artikel terkait** dari kategori yang sama di bilah samping[cite: 10, 60].
  * [cite_start]Fitur **Navigasi Interaktif**: Tautan langsung untuk membaca artikel terkait lainnya atau tombol **"Kembali ke Beranda"**[cite: 60, 61].

---

## Struktur Arsitektur (Ketentuan Teknis)
* [cite_start]**Controller Terpisah:** Logika halaman pengunjung dipisahkan secara struktural dari Controller CMS administrator[cite: 31].
* [cite_start]**Routing:** Seluruh endpoint publik dan admin didefinisikan secara rapi di dalam file `routes/web.php`[cite: 31].
* [cite_start]**Blade Templating:** Tampilan pengunjung menggunakan layout Blade tersendiri yang terpisah dari layout CMS[cite: 32].

---

## Langkah-langkah Menjalankan Aplikasi Secara Lokal

1. Pastikan Anda sudah menginstal PHP, Composer, dan Node.js di komputer Anda.
2. Salin atau clone repositori ini ke direktori lokal Anda.
3. Buka terminal dan jalankan `composer install` untuk menginstal dependensi PHP framework.
4. Salin file `.env.example` menjadi `.env` (`cp .env.example .env`).
5. [cite_start]Jalankan `php artisan key:generate` untuk membuat kunci aplikasi baru[cite: 5].
6. [cite_start]Sesuaikan konfigurasi koneksi database Anda pada file `.env` (isi nama database dengan `db_blog`)[cite: 7].
7. [cite_start]Jalankan perintah `php artisan migrate --seed` untuk membuat struktur tabel (`penulis`, `kategori_artikel`, `artikel`) sekaligus mengisi data awal (*seed data*)[cite: 18, 22].
8. Jalankan `npm install` untuk memasang dependensi aset front-end.
9. [cite_start]Jalankan `npm run dev` untuk melakukan kompilasi aset CSS/Bootstrap[cite: 12].
10. Jalankan `php artisan serve` untuk mengaktifkan server pengembangan lokal Laravel.
11. Buka browser kesayangan Anda dan akses alamat `http://127.0.0.1:8000`.

> [cite_start]**Catatan Keamanan:** File `.env` sudah otomatis didaftarkan di dalam `.gitignore` agar kredensial database penting Anda tidak bocor ke publik GitHub[cite: 44, 45].

---

## Tautan Video Demonstrasi

[cite_start]Berikut adalah video demonstrasi lengkap alur sistem CMS (CRUD Penulis, Kategori, Artikel) dan penjelajahan Halaman Pengunjung (Fitur Filter, Artikel Terkait, Navigasi)[cite: 36, 55, 56]:

* [cite_start]**YouTube:** https://youtu.be/GSl_dghSCMY [cite: 50]
[cite_start]*(Durasi video tidak melebihi batas maksimal 10 menit sesuai ketentuan)*[cite: 54].