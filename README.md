<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Product Management Application (Authentication + CRUD + Search + Pagination)

Aplikasi manajemen produk berbasis web yang dibangun menggunakan **Laravel 13**, **Laravel Breeze** (untuk autentikasi dan layout berbasis Tailwind CSS), serta menggunakan **SQLite** sebagai basis datanya. Proyek ini mencakup manajemen profil pengguna (dilengkapi dengan sistem unggah foto yang aman), manajemen data produk, pencarian dinamis, dan sistem pembagian halaman (*pagination*).

---

## 🚀 Fitur Utama

*   **Autentikasi Pengguna**: Sistem login dan registrasi aman bawaan Laravel Breeze.
*   **Profil Pengguna Berfoto**: Pengguna dapat memperbarui informasi profil dan mengunggah foto.
*   **Manajemen Produk (CRUD)**: Operasi lengkap untuk Menambah, Membaca, Mengubah, dan Menghapus data produk (Nama, Harga, dan Stok).
*   **Pencarian Dinamis (Search)**: Fitur pencarian produk berdasarkan nama lewat query parameter.
*   **Navigasi Halaman (Pagination)**: Pembagian halaman otomatis menggunakan komponen bawaan Laravel yang terintegrasi penuh dengan gaya utilitas Tailwind CSS.
*   **Data Seeding**: Pengisian data tiruan (*dummy data*) secara instan sebanyak 15 data produk acak menggunakan *Database Factory* untuk keperluan pengujian.

---

## 🛠️ Langkah Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal kamu:

### 1. Klon Repositori & Instal Dependensi
```bash
cd laravel-breeze-template

composer install

npm install
```

### 2. Konfigurasi .env
Salin file konfigurasi env default:
```bash
cp .env.example .env
```

### 3. Setup Database, buat simbolik link dan seeding
Salin file konfigurasi env default:
```bash
php artisan migrate:fresh --seed

php artisan storage:link
```

### 4. Jalankan Aplikasi
```bash
composer run dev
```

### 5. Buka URL aplikasi

```bash
http://localhost:8000
```

### 6. Masuk sebagai user default

```bash
email : test@example.com
password : password
```