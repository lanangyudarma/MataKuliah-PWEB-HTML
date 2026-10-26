Profil HTML Sederhana

Proyek ini adalah sebuah halaman web statis sederhana yang dibangun menggunakan HTML dasar. Proyek ini dibuat sebagai bagian dari tugas/praktikum mata kuliah Pemrograman Web (PWEB).

👨‍💻 Tentang Penulis
Nama: I Gede Arya Lanang Yudarma
Program Studi: Teknologi Informasi
Aktivitas: Public Relations and Partnership HIMATISI & Panitia C.O.D.E Challenge 2026

<img width="1917" height="865" alt="image" src="https://github.com/user-attachments/assets/e4146b39-f975-4151-92c4-dc76ba3dda05" />
<img width="1917" height="866" alt="image" src="https://github.com/user-attachments/assets/f53bdc9b-a418-4003-80e5-8ff47d099991" />
<img width="1917" height="868" alt="image" src="https://github.com/user-attachments/assets/c1f7a5ca-1520-4cc4-9a41-7e91a13f5c65" />


# Tugas Modul 5 - Pengenalan Bootstrap

**Nama:** I Gede Arya Lanang Yudarma  
**NIM:** 103092430001  
**Mata Kuliah:** Pemrograman Web  

---

### 1. Pengertian Bootstrap
Bootstrap adalah kerangka kerja (*framework*) CSS sumber terbuka yang digunakan untuk merancang dan mengembangkan antarmuka website (*front-end*) secara cepat. Kegunaannya adalah untuk mempermudah pembuatan website yang responsif dan berorientasi *mobile-first* dengan menyediakan komponen UI siap pakai (seperti navigasi, form, tombol) tanpa harus menulis kode CSS dari nol.

### 2. Memasang Bootstrap
Terdapat beberapa cara umum untuk mengimpor atau menggunakan Bootstrap pada project:
*   **Melalui CDN (Content Delivery Network):** Menyematkan tautan tag `<link>` untuk file CSS dan tag `<script>` untuk JavaScript langsung dari penyedia CDN ke bagian `<head>` dan penghujung `<body>` pada file HTML.
*   **Instalasi Lokal (Download):** Mengunduh file kompilasi CSS dan JS Bootstrap, menyimpannya di dalam folder direktori project, dan memanggil file tersebut secara lokal di dalam dokumen HTML.
*   **Melalui Package Manager:** Menginstal dependensi Bootstrap menggunakan terminal atau command line melalui package manager seperti npm (`npm install bootstrap`), Yarn, atau Composer.

### 3. Grid dan Breakpoint
*   **Class Grid:** Sistem tata letak fleksibel berbasis baris (`.row`) dan kolom (`.col`) yang secara bawaan membagi halaman menjadi 12 kolom. Sistem ini mempermudah penyusunan tata letak secara rapi tanpa perlu menghitung lebar piksel secara manual.
*   **Breakpoint:** Titik henti berbasis *media query* (seperti `sm`, `md`, `lg`, `xl`) yang menentukan kapan tata letak atau komponen website harus berubah menyesuaikan dengan lebar layar perangkat (misalnya menyesuaikan dari tampilan layar desktop menjadi tampilan bertumpuk pada layar ponsel).

### 4. Class Bootstrap
Berikut lima contoh class Bootstrap beserta kegunaannya:
1.  `.container`: Menyediakan pembungkus utama (*wrapper*) yang menengahkan konten secara horizontal dengan margin yang responsif.
2.  `.row`: Membuat baris horizontal yang berfungsi sebagai wadah penampung langsung untuk class-class kolom.
3.  `.col-md-6`: Menentukan bahwa sebuah elemen akan mengambil ruang sebanyak 6 kolom (setengah halaman) pada layar berukuran medium (*tablet*) ke atas.
4.  `.card`: Membuat komponen kotak berbingkai dengan sudut melengkung yang sering digunakan untuk membungkus konten seperti form atau artikel.
5.  `.text-center`: Merupakan *utility class* untuk meratakan teks menjadi rata tengah.

### 5. Gambar Responsif
Agar foto atau gambar responsif menyesuaikan ukuran layar perangkat, Anda perlu menambahkan class `.img-fluid` pada elemen tag `<img>`. Class bawaan ini akan secara otomatis menerapkan gaya CSS `max-width: 100%;` dan `height: auto;` sehingga gambar akan mengecil menyesuaikan kontainer induknya tanpa melebihi ukuran aslinya dan tanpa merusak proporsi (*aspect ratio*).

---
*Catatan: Untuk jawaban nomor 6 (Tampilan Halaman Login Ruang Baca), kode sumber `index.html` dapat dilihat langsung pada repository ini.*
