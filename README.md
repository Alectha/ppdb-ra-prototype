# Sistem Informasi PPDB Online RA Al-Mukhtarul Bayyan 
**Proyek Tugas Akhir Mata Kuliah Rancang Bangun Perangkat Lunak**

Website Penerimaan Peserta Didik Baru (PPDB) berbasis Laravel ini dikembangkan sebagai solusi untuk memudahkan proses pendaftaran siswa baru secara online.

---

## 📌 Fitur

- Halaman informasi sekolah
- Formulir pendaftaran online
- Dashboard admin (rekap data, edit informasi website)

---

## ⚙️ Cara Instalasi

### 1. Clone repository

### 2. Buat database MySQL dan konfigurasi .env
### Edit bagian berikut:
```
# DB_DATABASE=nama_database
# DB_USERNAME=root
# DB_PASSWORD=
```
### 6. Migrasi dan seeding database
```php artisan migrate```

```php artisan db:seed```
### 7. Jalankan server lokal
```php artisan serve```
