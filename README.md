# SampulKreativ - LSTM Chatbot

Aplikasi chatbot berbasis LSTM (Long Short-Term Memory) yang dirancang untuk memberikan dukungan pelanggan otomatis untuk perusahaan Sampulkreativ dengan menggunakan Natural Language Processing menggunakan dataset real case yang didapat dari scraping media sosial Tiktok, Quora, Instagram dan Website IT serupa. Platform ini menggabungkan backend Python dengan antarmuka web PHP yang responsif. Project ini merupakan Tugas Akhir dari Maeru Bagas Trisoko dalam pendidikan S1 Teknik Informatika. 

## 🎯 Fitur Utama

- **Chatbot AI Berbasis LSTM** - Model pembelajaran mesin yang terlatih untuk memahami intent pelanggan
- **Panel Admin** - Dashboard untuk manajemen chat, rating, dan tiket dukungan
- **Export Data** - Ekspor data chat dan laporan ke format Excel
- **Sistem Rating** - Pelanggan dapat memberikan rating untuk setiap interaksi
- **Sistem Ticketing** - Manajemen tiket dukungan terintegrasi
- **Antarmuka Responsif** - UI yang dapat diakses dari berbagai perangkat

## 🛠 Teknologi yang Digunakan

### Backend
- **Python 3.x**
  - TensorFlow/Keras - Framework deep learning
  - Flask - Web framework untuk API
  - NLTK - Natural Language Processing
  
### Frontend
- **PHP 8.0+**
- **HTML5 & CSS3**
- **JavaScript (vanilla/jQuery)

### Database
- **MySQL/MariaDB**

### Dependencies
- **PHPOffice/PHPSpreadsheet** - Export Excel
- HTMLPurifier - Sanitasi HTML
- ZipStream-PHP - Streaming file zip

## 📋 Prasyarat

Sebelum memulai, pastikan Anda sudah menginstal:
- PHP 8.0 atau lebih tinggi
- Python 3.7 atau lebih tinggi
- MySQL/MariaDB 5.7 atau lebih tinggi
- Composer (PHP Package Manager)
- pip (Python Package Manager)

## 🚀 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/Exchonsive/sampulkreativ.git
cd sampulkreativ
```

### 2. Setup Database
```bash
# Buat database dan import file SQL
mysql -u username -p database_name < db/sampulkreativ.sql
```

### 3. Install PHP Dependencies
```bash
composer install
```

### 4. Install Python Dependencies
```bash
cd lstm
pip install -r requirements.txt
```

### 5. Konfigurasi
- Update konfigurasi database di `admin/koneksi.php`
- Setup environment variables jika diperlukan

### 6. Jalankan Flask API (LSTM Backend)
```bash
cd lstm
python bot_api_lstm.py
```

### 7. Jalankan Server Web
```bash
# Menggunakan PHP built-in server
php -S localhost:8000

# Atau gunakan Apache/Nginx sesuai preferensi Anda
```

Akses aplikasi di `http://localhost:8000`

## 📁 Struktur Folder

```
sampulkreativ/
├── admin/                      # Panel administrasi
│   ├── index_admin.php        # Dashboard admin
│   ├── koneksi.php            # Konfigurasi database
│   ├── login_admin.php        # Login page
│   ├── pages_admin/           # Admin pages
│   └── format_data/           # Data formatting utilities
├── lstm/                      # Backend LSTM Chatbot
│   ├── bot_api_lstm.py        # API Flask untuk chatbot
│   ├── chatbot_model.h5       # Model LSTM terlatih
│   ├── training.ipynb         # Jupyter notebook untuk training
│   ├── intents-real.json      # Intent dataset
│   └── combined_slang_words.txt # Slang word mapping
├── css/                       # File stylesheet
├── js/                        # File JavaScript (jika ada)
├── img/                       # Asset gambar
├── db/                        # Database scripts
│   └── sampulkreativ.sql      # Database schema
├── vendor/                    # Composer dependencies
├── index.php                  # Home page
├── simpan_chat.php           # Chat handler
├── simpan_rating.php         # Rating handler
├── simpan_ticket.php         # Ticket handler
└── composer.json             # PHP dependencies
```

## 🔑 Fitur Utama

### Admin Dashboard
- Monitoring chat history
- View customer ratings
- Manage support tickets
- Download reports (Excel)

### Chatbot API
- Endpoint untuk menerima user input
- Processing dengan LSTM model
- Response generation berdasarkan intent recognition

## 📝 Training Model LSTM

Untuk melatih ulang model chatbot, gunakan notebook yang disediakan:

```bash
cd lstm
jupyter notebook training.ipynb
```

File penting untuk training:
- `intents-real.json` - Dataset intent yang akan digunakan
- `combined_slang_words.txt` - Mapping slang words untuk preprocessing

## 🔐 Keamanan

- Pastikan file konfigurasi database tidak dapat diakses publik
- Gunakan HTTPS untuk deployment production
- Sanitasi semua input user dengan HTMLPurifier
- Update dependencies secara berkala dengan: `composer update`

## 📄 Lisensi

Project ini dilisensikan di bawah MIT License - lihat file [LICENSE](LICENSE) untuk detail selengkapnya.

## 📧 Kontak

Untuk pertanyaan atau saran, silakan hubungi:
- **Email**: maerubagas14@gmail.com
- **GitHub**: [Exchonsive/sampulkreativ](https://github.com/Exchonsive/sampulkreativ)


---
