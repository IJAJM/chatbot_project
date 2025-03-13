# **Chatbot AI Sederhana dengan PHP, JavaScript, dan PHP-ML**  

## **Deskripsi Proyek**  
Proyek ini adalah chatbot sederhana berbasis web yang dibuat dengan **PHP**, **JavaScript**, dan **PHP-ML**. Chatbot ini mampu merespons input pengguna dengan memanfaatkan **machine learning sederhana** menggunakan **Naïve Bayes Classifier** dari PHP-ML.  

---

## **Fitur**  
✅ Antarmuka pengguna sederhana dan responsif  
✅ Chatbot dapat memberikan respons berdasarkan input pengguna  
✅ Menggunakan **PHP-ML** untuk memproses percakapan  
✅ Integrasi dengan AJAX untuk komunikasi real-time  
✅ Dapat dikembangkan lebih lanjut dengan AI yang lebih kompleks  

---

## **Teknologi yang Digunakan**  
- **PHP** → Bahasa utama backend  
- **JavaScript (AJAX)** → Untuk komunikasi antara frontend dan backend  
- **PHP-ML** → Library untuk Machine Learning sederhana  
- **CSS (Tailwind / Custom CSS)** → Untuk tampilan yang menarik  

---

## **Struktur Proyek**  
```
/chatbot_project
│── /css
│   ├── styles.css            # Styling antarmuka chatbot
│── /js
│   ├── script.js             # JavaScript untuk AJAX dan UI
│── /php
│   ├── chatbot.php           # Proses input dan AI
│── /vendor                   # Direktori dari Composer
│── index.php                 # Halaman utama chatbot
│── composer.json             # File konfigurasi Composer
│── README.md                 # Dokumentasi proyek ini
```

---

## **Instalasi dan Cara Menjalankan**  

### **1. Clone atau Unduh Proyek Ini**  
```sh
git clone https://github.com/ijajkeyboard/chatbot.git
cd chatbot
```

### **2. Instal Dependensi PHP dengan Composer
Pastikan kamu sudah menginstal **Composer** terlebih dahulu. Jika belum, download [di sini](https://getcomposer.org/).  
Kemudian jalankan perintah:  
```sh
composer install
```

### **3. Jalankan Server PHP**  
Gunakan server PHP bawaan:  
```sh
php -S localhost:8000
```
Buka browser dan akses `http://localhost:8000/`.

---

## **Cara Menggunakan
1. Buka halaman web chatbot.  
2. Ketik pertanyaan di kolom input.  
3. Chatbot akan merespons secara otomatis berdasarkan model AI sederhana.  
4. Jika chatbot tidak memahami input, ia akan memberikan respons default.  

---

## **Pengembangan Lebih Lanjut
💡 **Tambahkan fitur AI lebih canggih:** Bisa menggunakan **TensorFlow-PHP** atau API NLP lainnya.  
💡 **Simpan percakapan ke database:** Gunakan **MySQL** atau **MongoDB**.  
💡 **Tambahkan dukungan suara:** Gunakan **Web Speech API** untuk interaksi lebih interaktif.  

---

## **Lisensi
Proyek ini menggunakan lisensi **MIT**, bebas digunakan dan dikembangkan lebih lanjut.  

---

##Kontribusi
Jika ingin berkontribusi, fork proyek ini dan buat pull request! 🚀  
