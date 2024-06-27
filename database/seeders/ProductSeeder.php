<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Ergonomik Ofis Sandalyesi',
            'image' => 'images/ikea-product-chair.png',
            'short_content' => 'Konforlu ve şık tasarımıyla uzun saatler boyunca rahat oturma sağlar.',
            'content' => 'Ergonomik Ofis Sandalyesi, sırt desteği, ayarlanabilir kolçaklar ve yüksekliği ile mükemmel bir konfor sunar. Dayanıklı malzemesi ve şık tasarımı sayesinde ofisinizde hem estetik hem de fonksiyonel bir unsur olacak. 8 saatten fazla çalışmayı destekleyen konforuyla iş verimliliğinizi artırır.',
            'price' => '1500',
            'quantity' => '20',
            'status' => '1'
        ]);

        Product::create([
            'name' => 'LED Masa Lambası',
            'image' => 'images/ikea-product-lamp.png',
            'short_content' => 'Modern ve enerji tasarruflu LED masa lambası.',
            'content' => 'LED Masa Lambası, modern tasarımı ve enerji tasarruflu LED ışıkları ile çalışma alanınızı aydınlatır. Ayarlanabilir ışık seviyesi ve esnek gövdesi sayesinde istediğiniz açı ve parlaklıkta ışık sağlar. Uzun ömürlü LED ampulü ile çevre dostu bir seçimdir.',
            'price' => '300',
            'quantity' => '50',
            'status' => '1'
        ]);

        Product::create([
            'name' => 'Minimalist Ofis Masası',
            'image' => 'images/ikea-product-desk.png',
            'short_content' => 'Şık ve modern tasarımıyla her ofise uyum sağlayan ofis masası.',
            'content' => 'Minimalist Ofis Masası, geniş çalışma alanı ve dayanıklı yapısıyla dikkat çeker. Modern tasarımı ve kullanışlı çekmeceleri ile hem estetik hem de işlevsellik sunar. Yüksek kaliteli malzemelerden üretilmiş olup, uzun yıllar dayanıklılık garantisi verir. Kablolarınızı düzenli tutmak için entegre kablo yönetim sistemi bulunur.',
            'price' => '2500',
            'quantity' => '15',
            'status' => '1'
        ]);

        Product::create([
            'name' => 'Çok Amaçlı Ofis Çekmecesi',
            'image' => 'images/ikea-product-wardrobe.png',
            'short_content' => 'Belgelerinizi ve ofis malzemelerinizi düzenli tutmak için ideal.',
            'content' => 'Çok Amaçlı Ofis Çekmecesi, belgelerinizi ve ofis malzemelerinizi düzenli ve kolay erişilebilir tutmak için mükemmel bir çözüm sunar. Kilitlenebilir çekmeceleri ve sağlam yapısı ile güvenli depolama sağlar. Tekerlekli yapısı sayesinde ofis içinde kolayca taşınabilir ve esnek kullanım imkanı sunar.',
            'price' => '600',
            'quantity' => '30',
            'status' => '1'
        ]);
    }
}
