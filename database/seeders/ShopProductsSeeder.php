<?php

namespace Database\Seeders;

use App\Models\ShopProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ShopProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // TICKETS
            [
                'name' => 'Dierentuin Dagticket',
                'slug' => 'dierentuin-dagticket',
                'description' => 'Onbeperkte toegang tot de mooiste dierentuinen van Nederland, inclusief alle shows en feedings.',
                'category' => 'ticket',
                'price' => 2495, // €24.95
                'emoji' => '🦁',
                'is_active' => true,
            ],
            [
                'name' => 'Vakantiepark Dagpas',
                'slug' => 'vakantiepark-dagpas',
                'description' => 'Dagpas inclusief alle attracties, activiteiten en zwembadtoegang in je gekozen park.',
                'category' => 'ticket',
                'price' => 1995, // €19.95
                'emoji' => '🎡',
                'is_active' => true,
            ],
            [
                'name' => 'Zwembad Dagticket',
                'slug' => 'zwembad-dagticket',
                'description' => 'Hele dag genieten in het tropische zwemparadijs — glijbanen, golven en meer.',
                'category' => 'ticket',
                'price' => 995, // €9.95
                'emoji' => '🏊',
                'is_active' => true,
            ],
            [
                'name' => 'Safari VIP Experience',
                'slug' => 'safari-vip-experience',
                'description' => 'Private safari tour met gids, inclusief ontbijt en een exclusieve dierenontmoeting.',
                'category' => 'ticket',
                'price' => 8995, // €89.95
                'emoji' => '🦒',
                'is_active' => true,
            ],

            // MERCH
            [
                'name' => 'Pluche Knuffel — Leeuw',
                'slug' => 'pluche-knuffel-leeuw',
                'description' => 'Supersoft pluche knuffel, ideaal cadeau voor jong en oud. 30cm groot.',
                'category' => 'merch',
                'price' => 1495, // €14.95
                'emoji' => '🧸',
                'is_active' => true,
            ],
            [
                'name' => 'T-shirt Secret Agent',
                'slug' => 't-shirt-secret-agent',
                'description' => '100% organic cotton shirt met exclusieve Secret Agent print. Maten S t/m XXL.',
                'category' => 'merch',
                'price' => 1995, // €19.95
                'emoji' => '👕',
                'is_active' => true,
            ],
            [
                'name' => 'Metalen Sleutelhanger',
                'slug' => 'metalen-sleutelhanger',
                'description' => 'Hoogwaardig metalen sleutelhanger met reliëf Secret Agent logo.',
                'category' => 'merch',
                'price' => 495, // €4.95
                'emoji' => '🔑',
                'is_active' => true,
            ],
            [
                'name' => 'Snapback Cap',
                'slug' => 'snapback-cap',
                'description' => 'Stijlvolle snapback met geborduurde dierentuin-iconen. Één maat past allen.',
                'category' => 'merch',
                'price' => 2495, // €24.95
                'emoji' => '🧢',
                'is_active' => true,
            ],
            [
                'name' => 'RVS Waterfles',
                'slug' => 'rvs-waterfles',
                'description' => 'Dubbelwandige RVS fles, 500ml. Houdt je drankje 12 uur koud of warm.',
                'category' => 'merch',
                'price' => 2295, // €22.95
                'emoji' => '💧',
                'is_active' => true,
            ],
            [
                'name' => 'Puzzel 1000 Stukjes',
                'slug' => 'puzzel-1000-stukjes',
                'description' => 'Mooie panoramapuzzel van een dierentuinscène — perfect voor op de keukentafel.',
                'category' => 'merch',
                'price' => 1795, // €17.95
                'emoji' => '🧩',
                'is_active' => true,
            ],

            // BUNDLES
            [
                'name' => 'Dierentuin Familiepakket',
                'slug' => 'dierentuin-familiepakket',
                'description' => '2 volwassenen + 2 kinderen tickets + 2 pluche knuffels + 4 sleutelhangers. Alles in één.',
                'category' => 'bundle',
                'price' => 7995, // €79.95
                'emoji' => '🦁',
                'is_active' => true,
            ],
            [
                'name' => 'Weekend Avontuur',
                'slug' => 'weekend-avontuur',
                'description' => 'Één nacht verblijf + 2 dagtickets + exclusive merchandise set. Het complete pakket.',
                'category' => 'bundle',
                'price' => 19995, // €199.95
                'emoji' => '🏕',
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            ShopProduct::create($product);
        }
    }
}
