# Repositori Praktikum Pemrograman Web (PWEB)

Proyek ini berisi kumpulan tugas dan praktikum mata kuliah Pemrograman Web, mulai dari HTML dasar, Bootstrap, hingga manipulasi DOM menggunakan JavaScript dan jQuery.

**Tentang Penulis:**
- **Nama:** I Gede Arya Lanang Yudarma
- **NIM:** 103092430001
- **Program Studi:** Teknologi Informasi
- **Aktivitas:** Public Relations and Partnership HIMATISI | Panitia C.O.D.E Challenge 2026

---

## Profil HTML Sederhana
Halaman web statis sederhana yang dibangun menggunakan HTML dasar.

![HTML Sederhana 1](https://github.com/user-attachments/assets/e4146b39-f975-4151-92c4-dc76ba3dda05)
![HTML Sederhana 2](https://github.com/user-attachments/assets/f53bdc9b-a418-4003-80e5-8ff47d099991)
![HTML Sederhana 3](https://github.com/user-attachments/assets/c1f7a5ca-1520-4cc4-9a41-7e91a13f5c65)

---

## Tugas Modul 5 - Pengenalan Bootstrap

### 1. Pengertian Bootstrap
Bootstrap adalah kerangka kerja (*framework*) CSS sumber terbuka yang digunakan untuk merancang dan mengembangkan antarmuka website (*front-end*) secara cepat. Kegunaannya adalah untuk mempermudah pembuatan website yang responsif dan berorientasi *mobile-first* dengan menyediakan komponen UI siap pakai (seperti navigasi, form, tombol) tanpa harus menulis kode CSS dari nol.

### 2. Memasang Bootstrap
Terdapat beberapa cara umum untuk mengimpor atau menggunakan Bootstrap pada proyek:
*   **Melalui CDN (Content Delivery Network):** Menyematkan tautan tag `<link>` untuk file CSS dan tag `<script>` untuk JavaScript langsung dari penyedia CDN ke bagian `<head>` dan penghujung `<body>` pada dokumen HTML.
*   **Instalasi Lokal (Download):** Mengunduh file kompilasi CSS dan JS Bootstrap, menyimpannya di dalam folder direktori proyek, dan memanggil file tersebut secara lokal.
*   **Melalui Package Manager:** Menginstal dependensi Bootstrap menggunakan terminal melalui package manager seperti npm (`npm install bootstrap`), Yarn, atau Composer.

### 3. Grid dan Breakpoint
*   **Class Grid:** Sistem tata letak fleksibel berbasis baris (`.row`) dan kolom (`.col`) yang secara bawaan membagi halaman menjadi 12 kolom. Sistem ini mempermudah penyusunan tata letak secara rapi tanpa menghitung lebar piksel manual.
*   **Breakpoint:** Titik henti berbasis *media query* (seperti `sm`, `md`, `lg`, `xl`) yang menentukan kapan tata letak atau komponen website harus berubah menyesuaikan dengan lebar layar perangkat.

### 4. Class Bootstrap
1.  `.container`: Menyediakan pembungkus utama (*wrapper*) yang menengahkan konten secara horizontal dengan margin yang responsif.
2.  `.row`: Membuat baris horizontal yang berfungsi sebagai wadah penampung langsung untuk class-class kolom.
3.  `.col-md-6`: Menentukan bahwa sebuah elemen akan mengambil ruang sebanyak 6 kolom (setengah halaman) pada layar berukuran medium (*tablet*) ke atas.
4.  `.card`: Membuat komponen kotak berbingkai dengan sudut melengkung yang sering digunakan untuk membungkus konten seperti form atau artikel.
5.  `.text-center`: Merupakan *utility class* untuk meratakan teks menjadi rata tengah.

### 5. Gambar Responsif
Agar gambar responsif menyesuaikan ukuran layar perangkat, tambahkan class `.img-fluid` pada elemen tag `<img>`. Class bawaan ini secara otomatis menerapkan gaya CSS `max-width: 100%;` dan `height: auto;` sehingga gambar akan mengecil menyesuaikan kontainer induknya tanpa melebihi ukuran aslinya dan tanpa merusak proporsi (*aspect ratio*).

---

## Tugas Modul 6 - JavaScript & jQuery

### Tugas 1: Form Input (JavaScript)
![Tugas 1 - JS](https://github.com/user-attachments/assets/9f9bddbd-e9ea-4de5-a581-18c4db881718)
![Tugas 1 - JS](https://github.com/user-attachments/assets/510920bf-e3b5-4a95-a2de-f8dee089aff5)
![Tugas 1 - JS](https://github.com/user-attachments/assets/d21b5b71-91c9-45a4-9485-b5fb786fb83c)

### Tugas 2: Manipulasi DOM (jQuery)
![Tugas 2 - jQuery](https://github.com/user-attachments/assets/d3df0ce7-53d5-4227-a1a1-c9574e6cfa48)
![Tugas 2 - jQuery](https://github.com/user-attachments/assets/c5f106fa-d6d4-48ea-bb83-466992a00d23)
![Tugas 2 - jQuery](https://github.com/user-attachments/assets/ddb3bd7e-8511-4187-81c6-4a39fa6e66f6)
![Tugas 2 - jQuery](https://github.com/user-attachments/assets/70531004-55ef-470e-b8b4-6bf5505d44c8)
![Tugas 2 - jQuery](https://github.com/user-attachments/assets/1ee24c4d-0bbd-4171-9940-7cbc8a2b4239)
![Tugas 2 - jQuery](https://github.com/user-attachments/assets/71077651-6561-4f49-a750-1da53b193c02)
