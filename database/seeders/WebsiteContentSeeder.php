<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\CompanyStat;
use App\Models\Partner;
use App\Models\PortfolioCategory;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Seeder;

class WebsiteContentSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedServices();
        $this->seedStats();
        $this->seedProjects();
        $this->seedPartners();
        $this->seedClients();
    }

    private function seedServices(): void
    {
        $services = [
            ['title' => 'تطوير المواقع الإلكترونية', 'short_description' => 'مواقع تفاعلية سريعة', 'description' => 'مواقع سريعة، متجاوبة، ومبنية بأحدث التقنيات لضمان أفضل أداء.', 'icon' => 'devices'],
            ['title' => 'تطوير تطبيقات الجوال', 'short_description' => 'تجربة مستخدم استثنائية', 'description' => 'تطبيقات iOS وAndroid مبتكرة تقدم تجربة مستخدم استثنائية.', 'icon' => 'smartphone'],
            ['title' => 'تصميم واجهات UI/UX', 'short_description' => 'واجهات عصرية وجذابة', 'description' => 'واجهات جذابة تجمع بين الجمالية وسهولة الاستخدام لتحقيق أهدافك.', 'icon' => 'palette'],
            ['title' => 'أنظمة CRM / ERP', 'short_description' => 'إدارة أعمال متكاملة', 'description' => 'حلول برمجية مخصصة لإدارة موارد مؤسستك بكفاءة عالية.', 'icon' => 'settings_suggest'],
            ['title' => 'المتاجر الإلكترونية', 'short_description' => 'منصات بيع متطورة', 'description' => 'منصات بيع تدعم بوابات الدفع وتدير المخزون بكل سلاسة.', 'icon' => 'shopping_cart'],
            ['title' => 'التكامل مع APIs', 'short_description' => 'ربط الأنظمة بكفاءة', 'description' => 'ربط وتكامل الأنظمة المختلفة لتبادل البيانات بشكل آمن وتلقائي.', 'icon' => 'api'],
            ['title' => 'الدعم الفني والصيانة', 'short_description' => 'استمرارية ودعم متواصل', 'description' => 'مراقبة مستمرة ودعم فني لضمان استمرارية أعمالك دون توقف.', 'icon' => 'support_agent'],
            ['title' => 'الاستضافة والحلول السحابية', 'short_description' => 'بنية تحتية مرنة', 'description' => 'بنية تحتية سحابية قوية وآمنة تضمن سرعة الوصول لخدماتك.', 'icon' => 'cloud'],
        ];

        foreach ($services as $index => $service) {
            Service::updateOrCreate(
                ['title' => $service['title']],
                [...$service, 'sort_order' => $index + 1, 'is_active' => true]
            );
        }
    }

    private function seedStats(): void
    {
        foreach ([
            ['label' => 'مشروع ناجح', 'value' => 150],
            ['label' => 'خبير تقني', 'value' => 45],
            ['label' => 'دولة حول العالم', 'value' => 12],
            ['label' => 'نسبة رضا العملاء %', 'value' => 99],
        ] as $index => $stat) {
            CompanyStat::updateOrCreate(
                ['label' => $stat['label']],
                [...$stat, 'sort_order' => $index + 1, 'is_active' => true]
            );
        }
    }

    private function seedProjects(): void
    {
        $categories = [
            ['name' => 'مواقع إلكترونية', 'slug' => 'web'],
            ['name' => 'تطبيقات موبايل', 'slug' => 'mobile'],
            ['name' => 'أنظمة إدارية', 'slug' => 'systems'],
            ['name' => 'متاجر إلكترونية', 'slug' => 'stores'],
            ['name' => 'تصميم UI/UX', 'slug' => 'design'],
        ];

        $categoryIds = [];
        foreach ($categories as $index => $category) {
            $model = PortfolioCategory::updateOrCreate(
                ['slug' => $category['slug']],
                [...$category, 'sort_order' => $index + 1, 'is_active' => true]
            );
            $categoryIds[$category['slug']] = $model->id;
        }

        $projects = [
            ['category' => 'systems', 'title' => 'منصة إدارة أعمال', 'description' => 'نظام متكامل لإدارة العمليات والتقارير.', 'image' => 'assets/stitch/portfolio-business.jpg', 'technologies' => ['Laravel', 'Flutter', 'MySQL'], 'featured' => true],
            ['category' => 'mobile', 'title' => 'تطبيق خدمات', 'description' => 'تطبيق جوال لحجز وإدارة الخدمات بسهولة.', 'image' => 'assets/stitch/portfolio-mobile.jpg', 'technologies' => ['Flutter', 'API', 'Firebase'], 'featured' => true],
            ['category' => 'stores', 'title' => 'متجر إلكتروني متكامل', 'description' => 'منصة تجارة إلكترونية مع الدفع وإدارة المخزون.', 'image' => 'assets/stitch/portfolio-store.jpg', 'technologies' => ['Laravel', 'Payment Gateway'], 'featured' => true],
            ['category' => 'web', 'title' => 'موقع شركة احترافي', 'description' => 'موقع مؤسسي سريع ومتجاوب يعكس هوية الشركة.', 'image' => 'assets/stitch/portfolio-company.jpg', 'technologies' => ['HTML', 'CSS', 'JavaScript'], 'featured' => false],
            ['category' => 'systems', 'title' => 'نظام CRM ذكي', 'description' => 'إدارة علاقات العملاء والمبيعات والتقارير.', 'image' => 'assets/stitch/portfolio-crm.jpg', 'technologies' => ['Laravel', 'Reports'], 'featured' => false],
            ['category' => 'design', 'title' => 'تصميم واجهات تطبيق', 'description' => 'تجربة مستخدم وواجهات تطبيق عصرية.', 'image' => 'assets/stitch/portfolio-uiux.jpg', 'technologies' => ['Figma', 'Prototype'], 'featured' => false],
            ['category' => 'systems', 'title' => 'منصة إنجاز المالية', 'description' => 'نظام مالي ومصرفي متطور.', 'image' => 'assets/stitch/portfolio-finance.jpg', 'technologies' => ['Laravel', 'MySQL'], 'featured' => true],
            ['category' => 'mobile', 'title' => 'تطبيق صحة', 'description' => 'تطبيق متكامل للرعاية الصحية.', 'image' => 'assets/stitch/portfolio-health.jpg', 'technologies' => ['Flutter', 'API'], 'featured' => true],
            ['category' => 'systems', 'title' => 'لوجستيات المستقبل', 'description' => 'إدارة سلاسل التوريد بالذكاء الاصطناعي.', 'image' => 'assets/stitch/portfolio-logistics.jpg', 'technologies' => ['Python', 'AI', 'Laravel'], 'featured' => true],
        ];

        foreach ($projects as $index => $project) {
            Project::updateOrCreate(
                ['title' => $project['title']],
                [
                    'portfolio_category_id' => $categoryIds[$project['category']],
                    'description' => $project['description'],
                    'image' => $project['image'],
                    'technologies' => $project['technologies'],
                    'is_featured' => $project['featured'],
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ]
            );
        }
    }

    private function seedPartners(): void
    {
        foreach ([
            ['name' => 'شريك تقني', 'icon' => 'developer_board'],
            ['name' => 'شريك استضافة', 'icon' => 'dns'],
            ['name' => 'شريك تسويق', 'icon' => 'campaign'],
            ['name' => 'شريك دفع إلكتروني', 'icon' => 'payments'],
            ['name' => 'شريك تكامل APIs', 'icon' => 'hub'],
            ['name' => 'شريك حلول سحابية', 'icon' => 'cloud'],
        ] as $index => $partner) {
            Partner::updateOrCreate(
                ['name' => $partner['name']],
                [...$partner, 'sort_order' => $index + 1, 'is_active' => true]
            );
        }
    }

    private function seedClients(): void
    {
        foreach ([
            ['name' => 'عميل 01', 'category_label' => 'شركات ناشئة', 'icon' => 'rocket_launch'],
            ['name' => 'عميل 02', 'category_label' => 'متاجر إلكترونية', 'icon' => 'shopping_bag'],
            ['name' => 'عميل 03', 'category_label' => 'شركات خدمات', 'icon' => 'handyman'],
            ['name' => 'عميل 04', 'category_label' => 'مؤسسات تعليمية', 'icon' => 'school'],
            ['name' => 'عميل 05', 'category_label' => 'جهات أعمال', 'icon' => 'domain'],
            ['name' => 'عميل 06', 'category_label' => 'شركات ناشئة', 'icon' => 'lightbulb'],
        ] as $index => $client) {
            Client::updateOrCreate(
                ['name' => $client['name']],
                [...$client, 'sort_order' => $index + 1, 'is_active' => true]
            );
        }
    }
}
