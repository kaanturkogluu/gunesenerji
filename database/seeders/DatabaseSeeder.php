<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Faq;
use App\Models\Setting;
use App\Models\BlogPost;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * Veritabanı Seed Sınıfı
 * Kullanım: php artisan db:seed
 * Bu komut ile örnek veriler veritabanına eklenir
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Veritabanını örnek verilerle doldur
     */
    public function run(): void
    {
        // Admin kullanıcı oluştur
        User::create([
            'name' => 'Admin',
            'email' => 'admin@ukpower.com',
            'password' => Hash::make('password'), // Şifre: password
            'is_admin' => true, // Admin yetkisi
            'email_verified_at' => now(),
        ]);

        // Site ayarlarını oluştur
        $settings = [
            ['key' => 'site_title', 'value' => 'UKPower - Güneş Enerjisi Çözümleri', 'type' => 'text'],
            ['key' => 'site_description', 'value' => 'Güneş enerjisi paneli kurulumu ve yenilenebilir enerji çözümleri', 'type' => 'text'],
            ['key' => 'site_phone', 'value' => '+90 536 772 29 02', 'type' => 'text'],
            ['key' => 'site_email', 'value' => 'info@ukpower.com', 'type' => 'text'],
            ['key' => 'site_address', 'value' => 'Ankara, Türkiye', 'type' => 'text'],
            ['key' => 'facebook_url', 'value' => 'https://facebook.com/ukpower', 'type' => 'text'],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com/ukpower', 'type' => 'text'],
            ['key' => 'instagram_url', 'value' => 'https://instagram.com/ukpower', 'type' => 'text'],
            ['key' => 'linkedin_url', 'value' => 'https://linkedin.com/company/ukpower', 'type' => 'text'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }

        // Hizmetleri oluştur
        $services = [
            [
                'title' => 'Güneş Enerji Santralleri (GES) Kurulumu',
                'slug' => 'gunes-enerji-santralleri-kurulumu',
                'short_description' => 'Arazi ve çatı GES kurulum hizmetleri',
                'description' => 'Arazi ve Çatı Güneş Enerji Santrallerinin tüm tasarım, izin, kurulum, devreye alma, işletim ve bakım süreçlerini gerçekleştiriyoruz.',
                'icon' => 'solar-panel',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Rüzgar Santrali Hizmetleri (RES)',
                'slug' => 'ruzgar-santrali-hizmetleri',
                'short_description' => 'RES kurulum ve bakım hizmetleri',
                'description' => 'RES kurulumu, majör, ana komponent değişim hizmeti, Uptower onarım, periyodik bakım, servis ve kestirimci bakım hizmetleri gerçekleştiriyoruz.',
                'icon' => 'wind',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Lisanslı/Lisanssız Enerji Santralleri Danışmanlık',
                'slug' => 'enerji-santralleri-danismanlik',
                'short_description' => 'Proje geliştirme ve danışmanlık hizmetleri',
                'description' => 'Lisanslı ve Lisanssız GES ve RES Başvuruları, Çağrı Mektubu Alınması, ÇED ve İmar İşleri, Haritacılık Hizmetleri vb. izin süreçleri ile proje geliştirme işleri yapıyoruz.',
                'icon' => 'clipboard-check',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Biyokütle Yakıt Hazırlama ve Tedariği',
                'slug' => 'biyokutle-yakit',
                'short_description' => 'Çevre dostu biyokütle yakıt çözümleri',
                'description' => 'Paris İklim Anlaşması gereği ek maliyetler ödemeyin, doğalgaz veya kömür yerine biyokütle yakıt kullanın.',
                'icon' => 'leaf',
                'order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // SSS oluştur
        $faqs = [
            [
                'question' => 'Güneş enerjisi sistemi kurulumu ne kadar sürer?',
                'answer' => 'Kurulum süresi sistemin büyüklüğüne göre değişmekle birlikte, ortalama bir ev için 2-3 gün, ticari sistemler için 1-2 hafta sürmektedir.',
                'category' => 'ges',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Güneş panelleri kaç yıl dayanır?',
                'answer' => 'Kaliteli güneş panelleri 25-30 yıl verimli bir şekilde çalışır. Üreticiler genellikle 25 yıl performans garantisi vermektedir.',
                'category' => 'ges',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'Yatırım ne kadar sürede geri döner?',
                'answer' => 'Sistem büyüklüğü ve elektrik tüketiminize bağlı olarak, ortalama geri dönüş süresi 5-7 yıl arasındadır.',
                'category' => 'genel',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Bakım gerektiriyor mu?',
                'answer' => 'Güneş enerjisi sistemleri minimum bakım gerektirir. Yılda 1-2 kez panel temizliği ve periyodik kontrol yeterlidir.',
                'category' => 'genel',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Teşvik ve destekler var mı?',
                'answer' => 'Evet, devlet ve yerel yönetimler tarafından çeşitli teşvik ve destekler sunulmaktadır. Detaylı bilgi için bizimle iletişime geçebilirsiniz.',
                'category' => 'genel',
                'order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }

        // Örnek blog yazıları oluştur
        $blogs = [
            [
                'title' => 'Güneş Enerjisinin Avantajları',
                'slug' => 'gunes-enerjisinin-avantajlari',
                'excerpt' => 'Güneş enerjisi neden tercih edilmeli? İşte en önemli avantajları...',
                'content' => '<p>Güneş enerjisi, yenilenebilir ve temiz bir enerji kaynağıdır. Çevre dostu olması, elektrik faturalarını düşürmesi ve uzun vadede ekonomik olması gibi birçok avantajı bulunmaktadır.</p><p>Güneş panelleri 25-30 yıl boyunca verimli bir şekilde çalışarak size temiz enerji sağlar. Ayrıca bakım maliyetleri oldukça düşüktür.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(10),
                'views' => 150,
            ],
            [
                'title' => '2024 Yılında Güneş Enerjisi Teşvikleri',
                'slug' => '2024-yilinda-gunes-enerjisi-tesvikleri',
                'excerpt' => '2024 yılında güneş enerjisi sistemleri için sağlanan teşvik ve destekler...',
                'content' => '<p>Türkiye\'de güneş enerjisi yatırımları için çeşitli teşvik programları mevcuttur. Bu teşvikler sayesinde ilk yatırım maliyetinizi önemli ölçüde azaltabilirsiniz.</p><p>Detaylı bilgi için yerel enerji ofislerine başvurabilir veya bizimle iletişime geçebilirsiniz.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(5),
                'views' => 230,
            ],
            [
                'title' => 'Çatı Tipi GES Kurulumunda Dikkat Edilmesi Gerekenler',
                'slug' => 'cati-tipi-ges-kurulumunda-dikkat-edilmesi-gerekenler',
                'excerpt' => 'Çatınıza güneş paneli kurmadan önce bilmeniz gerekenler...',
                'content' => '<p>Çatı tipi güneş enerjisi sistemi kurulumunda çatı yapısı, eğimi, yönelimi ve gölgelenme durumu çok önemlidir.</p><p>Öncelikle çatınızın güneş panellerinin ağırlığını taşıyabilecek güçte olması gerekir. Ayrıca güney yönüne bakan çatılar en verimli sonuçları verir.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(2),
                'views' => 89,
            ],
        ];

        foreach ($blogs as $blog) {
            BlogPost::create($blog);
        }

        // Örnek projeler oluştur
        $projects = [
            [
                'title' => '5 MW Arazi Tipi GES Projesi',
                'slug' => '5-mw-arazi-tipi-ges-projesi',
                'description' => 'Ankara bölgesinde 5 MW kapasiteli arazi tipi güneş enerjisi santrali kurulumu.',
                'location' => 'Ankara',
                'capacity' => '5 MW',
                'images' => null,
                'category' => 'ges',
                'completed_at' => now()->subMonths(6)->format('Y-m-d'),
                'is_featured' => true,
            ],
            [
                'title' => 'Fabrika Çatı GES Uygulaması',
                'slug' => 'fabrika-cati-ges-uygulamasi',
                'description' => 'Sanayi tesisi çatısına 500 kW güneş paneli kurulumu ve devreye alma.',
                'location' => 'İstanbul',
                'capacity' => '500 kW',
                'images' => null,
                'category' => 'ges',
                'completed_at' => now()->subMonths(3)->format('Y-m-d'),
                'is_featured' => true,
            ],
            [
                'title' => 'Rüzgar Türbini Bakım Projesi',
                'slug' => 'ruzgar-turbini-bakim-projesi',
                'description' => '10 MW rüzgar santrali periyodik bakım ve onarım hizmetleri.',
                'location' => 'İzmir',
                'capacity' => '10 MW',
                'images' => null,
                'category' => 'res',
                'completed_at' => now()->subMonths(1)->format('Y-m-d'),
                'is_featured' => false,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
