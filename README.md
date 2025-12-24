# UKPower - Güneş Enerjisi Web Sitesi

Ersisenerji.com.tr referans alınarak geliştirilmiş, Laravel 10.x tabanlı profesyonel güneş enerjisi firması web sitesi.

## 🚀 Özellikler

### Frontend (Kullanıcı Tarafı)
- ✅ **Ana Sayfa** - Hero slider, hizmetler, projeler, blog, istatistikler
- ✅ **Kurumsal Sayfalar** - Hakkımızda, Politikalar, Belgeler
- ✅ **Hizmetler** - GES, RES, Danışmanlık, Biyokütle yakıt
- ✅ **Projeler** - Kategori filtreleme ile proje galerisi
- ✅ **Blog** - SEO-friendly blog sistemi
- ✅ **SSS** - Accordion style sıkça sorulan sorular
- ✅ **İletişim** - Form ile mesaj gönderimi ve email bildirimi
- ✅ **Responsive Tasarım** - Tüm cihazlarda uyumlu

### Admin Paneli (/admin)
- ✅ **Dashboard** - İstatistikler ve özet bilgiler
- ✅ **Blog Yönetimi** - Blog yazıları CRUD işlemleri
- ✅ **Proje Yönetimi** - Proje CRUD işlemleri
- ✅ **Mesaj Yönetimi** - İletişim formundan gelen mesajlar
- ✅ **Admin Middleware** - Güvenli erişim kontrolü

### Teknik Özellikler
- **Framework**: Laravel 10.50.0 (PHP 8.1, 8.2, 8.3 uyumlu)
- **Frontend**: TailwindCSS, Blade Templates
- **Database**: SQLite (geliştirme), MySQL (production)
- **Auth**: Laravel Breeze
- **Email**: Laravel Mail with Mailable
- **Icons**: Font Awesome 6.5.1

## 📦 Kurulum

### Gereksinimler
- **PHP 8.1, 8.2 veya 8.3** (sunucunuzda mevcut olan herhangi biri)
- Composer
- Node.js & NPM
- SQLite veya MySQL

> **Not**: Proje Laravel 10.x kullanıyor ve PHP 8.1+ ile uyumludur. Sunucunuzda PHP 8.2 varsa sorunsuz çalışacaktır.

### Adım 1: Projeyi Klonlayın veya İndirin
```bash
cd /Users/boztech/Desktop/ukpower
```

### Adım 2: Bağımlılıkları Yükleyin
```bash
# Composer paketleri
composer install

# NPM paketleri
npm install
```

### Adım 3: Çevre Dosyasını Yapılandırın
```bash
# .env dosyası zaten mevcut, gerekirse düzenleyin
# Veritabanı: SQLite olarak ayarlı (database/database.sqlite)
```

### Adım 4: Veritabanını Oluşturun
```bash
# Migrations ve seed verilerini çalıştır
php artisan migrate:fresh --seed
```

**Varsayılan Admin Kullanıcı:**
- Email: `admin@ukpower.com`
- Şifre: `password`

### Adım 5: Frontend Asset'lerini Derleyin
```bash
npm run build
# veya geliştirme için:
npm run dev
```

### Adım 6: Uygulamayı Başlatın
```bash
php artisan serve
```

Site şu adreste çalışacak: `http://localhost:8000`
Admin paneli: `http://localhost:8000/admin/dashboard`

## 📧 Email Ayarları

İletişim formundan gelen mesajların email olarak gönderilmesi için `.env` dosyasında mail ayarlarını yapın:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="UKPower"

# Admin email adresi (mesajlar buraya gelecek)
ADMIN_EMAIL=admin@ukpower.com
```

**Not:** Gmail kullanıyorsanız, "Uygulama Şifresi" oluşturmanız gerekebilir.

## 🎨 Tasarım Referansı

Tasarım ve içerik yapısı [Ersisenerji.com.tr](https://www.ersisenerji.com.tr/) sitesinden esinlenilerek hazırlanmıştır:
- Mavi-yeşil renk paleti (enerji teması)
- Modern ve temiz layout
- Responsive navbar ve footer
- Hero gradient sections
- Hover animasyonları

## 📂 Proje Yapısı

```
ukpower/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php
│   │   │   ├── BlogController.php
│   │   │   ├── ProjectController.php
│   │   │   ├── ServiceController.php
│   │   │   ├── ContactController.php
│   │   │   ├── PageController.php
│   │   │   └── Admin/
│   │   │       ├── DashboardController.php
│   │   │       ├── BlogController.php
│   │   │       ├── ProjectController.php
│   │   │       └── ContactMessageController.php
│   │   └── Middleware/
│   │       └── IsAdmin.php
│   ├── Models/
│   │   ├── BlogPost.php
│   │   ├── Project.php
│   │   ├── Service.php
│   │   ├── Faq.php
│   │   ├── ContactMessage.php
│   │   └── Setting.php
│   └── Mail/
│       └── ContactMessageMail.php
├── database/
│   ├── migrations/
│   └── seeders/
│       └── DatabaseSeeder.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   ├── frontend.blade.php
│       │   └── admin.blade.php
│       ├── partials/
│       │   ├── navbar.blade.php
│       │   └── footer.blade.php
│       ├── home.blade.php
│       ├── contact.blade.php
│       ├── pages/
│       ├── services/
│       ├── projects/
│       ├── blog/
│       └── admin/
└── routes/
    └── web.php
```

## 🔐 Güvenlik

- CSRF token koruması (Laravel default)
- XSS koruması (Blade templating)
- SQL Injection koruması (Eloquent ORM)
- Admin middleware ile route koruma
- Form validation

## 🌐 Sayfa Rotaları

### Frontend Rotaları
- `/` - Ana sayfa
- `/hakkimizda` - Hakkımızda
- `/politikalar` - Firma Politikaları
- `/belgeler` - Kalite Belgeleri
- `/hizmetlerimiz` - Hizmetler listesi
- `/hizmetlerimiz/{slug}` - Hizmet detay
- `/projelerimiz` - Projeler listesi
- `/projelerimiz/{slug}` - Proje detay
- `/blog` - Blog listesi
- `/blog/{slug}` - Blog detay
- `/sss` - Sıkça Sorulan Sorular
- `/iletisim` - İletişim formu

### Admin Rotaları (Auth + Admin Middleware)
- `/admin/dashboard` - Dashboard
- `/admin/blogs` - Blog yönetimi
- `/admin/projects` - Proje yönetimi
- `/admin/messages` - Mesaj yönetimi

## 💡 Kullanım Örnekleri

### Model Kullanımı
```php
// Yayında olan blog yazılarını getir
$blogs = BlogPost::published()->latest()->get();

// Öne çıkan projeleri getir
$projects = Project::featured()->get();

// Aktif hizmetleri sıralı şekilde getir
$services = Service::active()->ordered()->get();

// Okunmamış mesajları getir
$messages = ContactMessage::unread()->get();
```

### Helper Fonksiyonlar
```php
// Site ayarlarını getir (gelecekte eklenebilir)
// setting('site_phone')
// setting('site_email')
```

## 🐛 Sorun Giderme

### Veritabanı Hatası
```bash
php artisan migrate:fresh --seed
```

### Asset Hatası
```bash
npm run build
```

### Cache Temizleme
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## 📝 Lisans

Bu proje UKPower için geliştirilmiştir. Tüm hakları saklıdır.

## 🤝 Katkıda Bulunanlar

- Geliştirici: AI Assistant
- Referans: [Ersisenerji.com.tr](https://www.ersisenerji.com.tr/)

## 📞 Destek

Herhangi bir sorun için:
- Email: admin@ukpower.com
- Telefon: +90 536 772 29 02

---

© 2024 UKPower - Güneş Enerjisi Çözümleri
