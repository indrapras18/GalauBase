# 🎶 GalauBase

**GalauBase** adalah platform berbasis web yang dirancang untuk menyimpan, berbagi, dan mengenang momen-momen emosional melalui musik. Proyek ini terinspirasi dari perasaan galau yang sering kita alami, dan bagaimana lagu-lagu tertentu bisa menjadi pengingat emosional yang kuat.

> 🚧 **Proyek ini masih dalam tahap pengembangan aktif. Beberapa fitur mungkin belum sepenuhnya berfungsi.**

---

## 🎬 sad pika

![GalauBase Demo](https://gifsec.com/wp-content/uploads/2022/09/sad-gif-1.gif)

---

## ✨ Fitur Utama

- 🎧 Koleksi lagu galau berdasarkan mood atau cerita  
- 📖 Cerita dan kenangan pribadi yang bisa ditambahkan ke setiap lagu  
- 📼 Dukungan link video dari YouTube untuk pemutaran langsung  
- 🔍 Pencarian lagu berdasarkan judul, artis, atau kata kunci cerita  
- ❤️ Sistem favorit atau penyimpanan lagu kenangan pribadi  
- 📱 Responsif dan ramah pengguna di perangkat mobile  

---

## 📦 Teknologi yang Digunakan

- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: Laravel  
- **Database**: MySQL  
- **Library Tambahan**: CKEditor, Bootstrap, Font Awesome  

---

## 🚀 Cara Menjalankan Proyek

```bash
# Clone repository
git clone https://github.com/indrapras18/galau-base.git
cd galau-base

# Install dependency
composer install

# Salin file konfigurasi .env
cp .env.example .env
php artisan key:generate

# Konfigurasikan database di file .env
php artisan migrate --seed

# Jalankan server lokal
php artisan serve
