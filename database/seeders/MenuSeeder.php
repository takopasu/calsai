<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use DateTime;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'menu_name' =>'セットドリンクバー',
            'category' =>'drink',
            'type' =>'drinkbar',
            'order_num' => 'DB01',
            'price' => 200,
            'kcal' => 0,
            'salt' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'生ビール キリン一番搾り ジョッキ',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'BR01',
            'price' => 400,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'生ビール キリン一番搾り グラスビール',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'BR02',
            'price' => 300,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'サントリーオールフリー',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'BR03',
            'price' => 250,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'キリン氷結シチリア産レモン',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'BR04',
            'price' => 350,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'甘口のデザートワイン ラコンプリッコラ',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'BR05',
            'price' => 300,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('menus')->insert([
            'menu_name' =>'グラスワイン 赤',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN01',
            'price' => 100,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

         DB::table('menus')->insert([
            'menu_name' =>'グラスワイン 白',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN02',
            'price' => 100,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

         DB::table('menus')->insert([
            'menu_name' =>'デカンタ(250ml) 赤',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN03',
            'price' => 200,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

         DB::table('menus')->insert([
            'menu_name' =>'デカンタ(250ml) 白',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN04',
            'price' => 200,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

         DB::table('menus')->insert([
            'menu_name' =>'デカンタ(500ml) 赤',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN05',
            'price' => 400,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

         DB::table('menus')->insert([
            'menu_name' =>'デカンタ(500ml) 白',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN06',
            'price' => 400,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

         DB::table('menus')->insert([
            'menu_name' =>'マグナム(1500ml) 赤',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN07',
            'price' => 1100,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

         DB::table('menus')->insert([
            'menu_name' =>'マグナム(1500ml) 白',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN08',
            'price' => 1100,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
         DB::table('menus')->insert([
            'menu_name' =>'ランブルスコ【(ロゼ)甘口】',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN12',
            'price' => 1100,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

         DB::table('menus')->insert([
            'menu_name' =>'ドンラファエロ【(白)辛口】',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN13',
            'price' => 1100,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);


         DB::table('menus')->insert([
            'menu_name' =>'ランブルスコセッコ【(赤)辛口】',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN14',
            'price' => 1100,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

         DB::table('menus')->insert([
            'menu_name' =>'ベルデッキオ【辛口・中】',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN15',
            'price' => 1100,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

         DB::table('menus')->insert([
            'menu_name' =>'キャンティ【辛口・やや重い】',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN16',
            'price' => 1100,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

         DB::table('menus')->insert([
            'menu_name' =>'キャンティルフィナリゼルバ【辛口・重い】',
            'category' =>'drink',
            'type' =>'alcohol',
            'order_num' => 'WN19',
            'price' => 2200,
            'kcal' => 0.0,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('menus')->insert([
            'menu_name' =>'ミラノ風ドリア',
            'category' =>'meal',
            'type' =>'doria',
            'order_num' => 'DG01',
            'price' => 300,
            'kcal' => 521,
            'salt' => 2.5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('menus')->insert([
            'menu_name' =>'チーズたっぷりミラノ風ドリア',
            'category' =>'meal',
            'type' =>'doria',
            'order_num' => 'DG02',
            'price' => 400,
            'kcal' => 722,
            'salt' => 3.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('menus')->insert([
            'menu_name' =>'半熟卵のミラノ風ドリア',
            'category' =>'meal',
            'type' =>'doria',
            'order_num' => 'DG05',
            'price' => 350,
            'kcal' => 604,
            'salt' => 2.7,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('menus')->insert([
            'menu_name' =>'セットプチフォッカ付きミラノ風ドリア',
            'category' =>'meal',
            'type' =>'doria',
            'order_num' => 'DG05',
            'price' => 400,
            'kcal' => 628,
            'salt' => 2.9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'エビクリームグラタン',
            'category' =>'meal',
            'type' =>'doria',
            'order_num' => 'DG07',
            'price' => 400,
            'kcal' => 505,
            'salt' => 2.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        
        DB::table('menus')->insert([
            'menu_name' =>'ハンバーグステーキ',
            'category' =>'meal',
            'type' =>'hamburg',
            'order_num' => 'MT01',
            'price' => 400,
            'kcal' => 582,
            'salt' => 2.7,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'若鶏のディアボラ風',
            'category' =>'meal',
            'type' =>'chicken',
            'order_num' => 'MT02',
            'price' => 500,
            'kcal' => 730,
            'salt' => 2.8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'イタリアンハンバーグ',
            'category' =>'meal',
            'type' =>'hamburg',
            'order_num' => 'MT03',
            'price' => 500,
            'kcal' => 702,
            'salt' => 2.9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'ポップコーンシュリンプとハンバーグの盛り合わせ',
            'category' =>'meal',
            'type' =>'hamburg',
            'order_num' => 'MT06',
            'price' => 600,
            'kcal' => 750,
            'salt' => 3.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);        
        
        DB::table('menus')->insert([
            'menu_name' =>'ディアボラ風ハンバーグ',
            'category' =>'meal',
            'type' =>'hamburg',
            'order_num' => 'MT07',
            'price' => 500,
            'kcal' => 635,
            'salt' => 3.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'リブステーキ',
            'category' =>'meal',
            'type' =>'steak',
            'order_num' => 'MT09',
            'price' => 1000,
            'kcal' => 548,
            'salt' => 1.8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'牛肉のシチュー',
            'category' =>'meal',
            'type' =>'stew',
            'order_num' => 'MT11',
            'price' => 700,
            'kcal' => 299,
            'salt' => 0.7,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'リゾット＆牛肉のシチュー',
            'category' =>'meal',
            'type' =>'stew',
            'order_num' => 'MT12',
            'price' => 900,
            'kcal' => 545,
            'salt' => 2.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'チョリソーとハンバーグの盛り合わせ',
            'category' =>'meal',
            'type' =>'hamburg',
            'order_num' => 'MT15',
            'price' => 550,
            'kcal' => 700,
            'salt' => 3.6,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'レフォールソースのハンバーグとサルシッチャの盛り合わせ',
            'category' =>'meal',
            'type' =>'hamburg',
            'order_num' => 'MT18',
            'price' => 600,
            'kcal' => 660,
            'salt' => 3.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'ペコリーノ・ロマーノ',
            'category' =>'sidedish',
            'type' =>'topping',
            'order_num' => 'TP02',
            'price' => 100,
            'kcal' => 78,
            'salt' => 0.8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);    
        
        DB::table('menus')->insert([
            'menu_name' =>'レフォールソース',
            'category' =>'sidedish',
            'type' =>'topping',
            'order_num' => 'TP03',
            'price' => 100,
            'kcal' => 88,
            'salt' => 0.5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]); 
        
        DB::table('menus')->insert([
            'menu_name' =>'野菜ペースト',
            'category' =>'sidedish',
            'type' =>'topping',
            'order_num' => 'TP04',
            'price' => 100,
            'kcal' => 72,
            'salt' => 0.3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'オリーブアンチョビペースト',
            'category' =>'sidedish',
            'type' =>'topping',
            'order_num' => 'TP05',
            'price' => 100,
            'kcal' => 97,
            'salt' => 0.7,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('menus')->insert([
            'menu_name' =>'チキンのシーザーサラダ',
            'category' =>'sidedish',
            'type' =>'salad',
            'order_num' => 'SA06',
            'price' => 350,
            'kcal' => 203,
            'salt' => 1.3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'チキンのシーザーサラダ Lサイズ',
            'category' =>'sidedish',
            'type' =>'salad',
            'order_num' => 'SA56',
            'price' => 500,
            'kcal' => 305,
            'salt' => 2.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
                
        DB::table('menus')->insert([
            'menu_name' =>'小エビのサラダ',
            'category' =>'sidedish',
            'type' =>'salad',
            'order_num' => 'SA02',
            'price' => 350,
            'kcal' => 127,
            'salt' => 1.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'小エビのサラダ Lサイズ',
            'category' =>'sidedish',
            'type' =>'salad',
            'order_num' => 'SA52',
            'price' => 500,
            'kcal' => 191,
            'salt' => 2.2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);       
        
        DB::table('menus')->insert([
            'menu_name' =>'ガーデンサラダ',
            'category' =>'sidedish',
            'type' =>'salad',
            'order_num' => 'SA04',
            'price' => 350,
            'kcal' => 173,
            'salt' => 0.7,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'ガーデンサラダ Lサイズ',
            'category' =>'sidedish',
            'type' =>'salad',
            'order_num' => 'SA54',
            'price' => 500,
            'kcal' => 259,
            'salt' => 1.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'オリーブアンチョビのガーデンサラダ',
            'category' =>'sidedish',
            'type' =>'salad',
            'order_num' => 'SA12',
            'price' => 450,
            'kcal' => 151,
            'salt' => 0.9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'オリーブアンチョビのガーデンサラダ Lサイズ',
            'category' =>'sidedish',
            'type' =>'salad',
            'order_num' => 'SA62',
            'price' => 600,
            'kcal' => 178,
            'salt' => 1.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('menus')->insert([
            'menu_name' =>'爽やかにんじんサラダ',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA13',
            'price' => 200,
            'kcal' => 93,
            'salt' => 0.9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'プロシュート(パルマ産熟成生ハム)',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA16',
            'price' => 400,
            'kcal' => 55,
            'salt' => 1.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'プロシュート(パルマ産熟成生ハム) Wサイズ',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA66',
            'price' => 800,
            'kcal' => 110,
            'salt' => 2.8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'バッファローモッツアレラ',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA20',
            'price' => 300,
            'kcal' => 209,
            'salt' => 0.5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'バッファローモッツアレラ Wサイズ',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA70',
            'price' => 600,
            'kcal' => 418,
            'salt' => 1.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'柔らか青豆とペコリーノチーズの温サラダ',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA25',
            'price' => 200,
            'kcal' => 199,
            'salt' => 1.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ほうれん草のくたくた',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA12',
            'price' => 300,
            'kcal' => 156,
            'salt' => 1.2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ブロッコリーのくたくた',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA19',
            'price' => 300,
            'kcal' => 125,
            'salt' => 1.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'カリッとポテト',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA15',
            'price' => 250,
            'kcal' => 389,
            'salt' => 2.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ポップコーンシュリンプ',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA04',
            'price' => 300,
            'kcal' => 215,
            'salt' => 1.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'チョリソー(辛味ソーセージ)',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA07',
            'price' => 400,
            'kcal' => 425,
            'salt' => 2.9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'イタリア風もつ煮込み',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA26',
            'price' => 350,
            'kcal' => 202,
            'salt' => 0.8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'辛味チキン',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA01',
            'price' => 300,
            'kcal' => 295,
            'salt' => 1.8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'エスカルゴのオーブン焼き',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA05',
            'price' => 400,
            'kcal' => 220,
            'salt' => 1.3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ムール貝のガーリック焼き',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA10',
            'price' => 400,
            'kcal' => 170,
            'salt' => 1.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'煉獄のたまご',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA18',
            'price' => 300,
            'kcal' => 319,
            'salt' => 2.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'アロスティチーニ(ラムの串焼き 2本)',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA02',
            'price' => 400,
            'kcal' => 224,
            'salt' => 0.6,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'アロスティチーニ(ラムの串焼き 2本) Wサイズ',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'AA52',
            'price' => 800,
            'kcal' => 448,
            'salt' => 1.2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'マルゲリータピザ',
            'category' =>'meal',
            'type' =>'pizza',
            'order_num' => 'PZ01',
            'price' => 400,
            'kcal' => 557,
            'salt' => 2.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'マルゲリータピザ Wチーズ',
            'category' =>'meal',
            'type' =>'pizza',
            'order_num' => 'PZ51',
            'price' => 500,
            'kcal' => 635,
            'salt' => 3.2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'バッファローモッツアレラのピザ',
            'category' =>'meal',
            'type' =>'pizza',
            'order_num' => 'PZ02',
            'price' => 500,
            'kcal' => 566,
            'salt' => 2.2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'バッファローモッツアレラのピザ Wチーズ',
            'category' =>'meal',
            'type' =>'pizza',
            'order_num' => 'PZ52',
            'price' => 600,
            'kcal' => 644,
            'salt' => 3.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'たっぷりコーンのピザ',
            'category' =>'meal',
            'type' =>'pizza',
            'order_num' => 'PZ06',
            'price' => 400,
            'kcal' => 624,
            'salt' => 2.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'たっぷりコーンのピザ Wチーズ',
            'category' =>'meal',
            'type' =>'pizza',
            'order_num' => 'PZ56',
            'price' => 500,
            'kcal' => 702,
            'salt' => 3.2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'オリーブアンチョビのマルゲリータピザ',
            'category' =>'meal',
            'type' =>'pizza',
            'order_num' => 'PZ07',
            'price' => 500,
            'kcal' => 648,
            'salt' => 3.3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'オリーブアンチョビのマルゲリータピザ Wチーズ',
            'category' =>'meal',
            'type' =>'pizza',
            'order_num' => 'PZ57',
            'price' => 600,
            'kcal' => 726,
            'salt' => 4.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ソーセージピザ',
            'category' =>'meal',
            'type' =>'pizza',
            'order_num' => 'PZ08',
            'price' => 400,
            'kcal' => 710,
            'salt' => 4.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ソーセージピザ Wチーズ',
            'category' =>'meal',
            'type' =>'pizza',
            'order_num' => 'PZ58',
            'price' => 500,
            'kcal' => 788,
            'salt' => 4.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ライス',
            'category' =>'sidedish',
            'type' =>'rice',
            'order_num' => 'RP01',
            'price' => 150,
            'kcal' => 303,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ラージライス',
            'category' =>'sidedish',
            'type' =>'rice',
            'order_num' => 'RP02',
            'price' => 200,
            'kcal' => 454,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'スモールライス',
            'category' =>'sidedish',
            'type' =>'rice',
            'order_num' => 'RP03',
            'price' => 100,
            'kcal' => 151,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'シナモンプチフォッカ',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'RP04',
            'price' => 200,
            'kcal' => 246,
            'salt' => 0.8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'セットプチフォッカ',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'RP05',
            'price' => 100,
            'kcal' => 107,
            'salt' => 0.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'プチフォッカ',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'RP06',
            'price' => 150,
            'kcal' => 214,
            'salt' => 0.8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ミニフィセル',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'RP08',
            'price' => 150,
            'kcal' => 189,
            'salt' => 1.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ガーリックトースト',
            'category' =>'sidedish',
            'type' =>'appetizer',
            'order_num' => 'RP09',
            'price' => 200,
            'kcal' => 245,
            'salt' => 1.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'コーンクリームスープ',
            'category' =>'sidedish',
            'type' =>'soup',
            'order_num' => 'SU01',
            'price' => 150,
            'kcal' => 146,
            'salt' => 1.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'たまねぎのズッパ',
            'category' =>'sidedish',
            'type' =>'soup',
            'order_num' => 'SU07',
            'price' => 300,
            'kcal' => 216,
            'salt' => 2.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'野菜と白いんげん豆の煮込み',
            'category' =>'sidedish',
            'type' =>'soup',
            'order_num' => 'SU10',
            'price' => 450,
            'kcal' => 317,
            'salt' => 2.2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'タラコソースシシリー風',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA01',
            'price' => 400,
            'kcal' => 548,
            'salt' => 1.9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'タラコソースシシリー風 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA51',
            'price' => 600,
            'kcal' => 822,
            'salt' => 2.9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ミートソースボロニア風',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA02',
            'price' => 400,
            'kcal' => 564,
            'salt' => 2.7,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ミートソースボロニア風 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA52',
            'price' => 600,
            'kcal' => 846,
            'salt' => 4.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ペペロンチーノ',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA03',
            'price' => 300,
            'kcal' => 541,
            'salt' => 1.6,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ペペロンチーノ 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA53',
            'price' => 450,
            'kcal' => 812,
            'salt' => 2.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'カルボナーラ',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA05',
            'price' => 500,
            'kcal' => 740,
            'salt' => 2.5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'カルボナーラ 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA55',
            'price' => 700,
            'kcal' => 1110,
            'salt' => 3.8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'エビとブロッコリーのオーロラソース',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA06',
            'price' => 500,
            'kcal' => 665,
            'salt' => 2.6,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'エビとブロッコリーのオーロラソース 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA56',
            'price' => 700,
            'kcal' => 998,
            'salt' => 3.9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'スパゲッティポモドーロ',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA07',
            'price' => 400,
            'kcal' => 684,
            'salt' => 2.6,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'スパゲッティポモドーロ 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA57',
            'price' => 600,
            'kcal' => 1026,
            'salt' => 3.9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'アーリオ・オーリオ',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA08',
            'price' => 300,
            'kcal' => 539,
            'salt' => 1.6,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'アーリオ・オーリオ 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA58',
            'price' => 450,
            'kcal' => 809,
            'salt' => 2.4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'イカの墨入りスパゲッティ',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA11',
            'price' => 500,
            'kcal' => 622,
            'salt' => 2.5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'イカの墨入りスパゲッティ 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA61',
            'price' => 700,
            'kcal' => 933,
            'salt' => 3.8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ラムのラグーソース(ペンネ)',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA13',
            'price' => 600,
            'kcal' => 453,
            'salt' => 1.9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ラムのラグーソース(ペンネ) 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA63',
            'price' => 800,
            'kcal' => 680,
            'salt' => 2.9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ラムのラグーソース(スパゲッティ)',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA15',
            'price' => 600,
            'kcal' => 664,
            'salt' => 2.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ラムのラグーソース(スパゲッティ) 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA65',
            'price' => 800,
            'kcal' => 996,
            'salt' => 3.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'半熟卵のペペロンチーノ',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA17',
            'price' => 350,
            'kcal' => 624,
            'salt' => 1.8,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'たっぷりペコリーノチーズのカルボナーラ',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA18',
            'price' => 600,
            'kcal' => 818,
            'salt' => 3.3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'たっぷりペコリーノチーズのカルボナーラ 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA68',
            'price' => 800,
            'kcal' => 1227,
            'salt' => 3.3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'スパゲッティアラビアータ',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA19',
            'price' => 400,
            'kcal' => 611,
            'salt' => 3.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'スパゲッティアラビアータ 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA69',
            'price' => 600,
            'kcal' => 912,
            'salt' => 4.5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'たっぷりペコリーノチーズのポモドーロ',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA23',
            'price' => 500,
            'kcal' => 762,
            'salt' => 3.3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'たっぷりペコリーノチーズのポモドーロ 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA73',
            'price' => 700,
            'kcal' => 1143,
            'salt' => 5.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ペンネアラビアータ',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA25',
            'price' => 400,
            'kcal' => 416,
            'salt' => 3.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ペンネアラビアータ 大盛',
            'category' =>'meal',
            'type' =>'pasta',
            'order_num' => 'PA75',
            'price' => 600,
            'kcal' => 624,
            'salt' => 4.5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('menus')->insert([
            'menu_name' =>'ティラミスクラシコ',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE01',
            'price' => 300,
            'kcal' => 229,
            'salt' => 0.3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

            DB::table('menus')->insert([
            'menu_name' =>'カプチーノ(アイスケーキ)',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE02',
            'price' => 200,
            'kcal' => 114,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

            DB::table('menus')->insert([
            'menu_name' =>'ジェラート＆シナモンプチフォッカ',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE04',
            'price' => 450,
            'kcal' => 367,
            'salt' => 0.9,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

            DB::table('menus')->insert([
            'menu_name' =>'イタリアンジェラート',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE05',
            'price' => 250,
            'kcal' => 121,
            'salt' => 0.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

            DB::table('menus')->insert([
            'menu_name' =>'イタリアンプリン',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE06',
            'price' => 250,
            'kcal' => 216,
            'salt' => 0.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

            DB::table('menus')->insert([
            'menu_name' =>'チョコレートケーキ',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE07',
            'price' => 300,
            'kcal' => 166,
            'salt' => 0.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

            DB::table('menus')->insert([
            'menu_name' =>'プリンとカプチーノの盛り合わせ',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE08',
            'price' => 400,
            'kcal' => 330,
            'salt' => 0.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
            DB::table('menus')->insert([
            'menu_name' =>'すっきりレモンのシャーベット',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE11',
            'price' => 200,
            'kcal' => 127,
            'salt' => 0.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);


            DB::table('menus')->insert([
            'menu_name' =>'プリンとティラミスクラシコの盛り合わせ',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE12',
            'price' => 500,
            'kcal' => 445,
            'salt' => 0.2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

            DB::table('menus')->insert([
            'menu_name' =>'トリフアイスクリーム',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE13',
            'price' => 350,
            'kcal' => 164,
            'salt' => 0.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

            DB::table('menus')->insert([
            'menu_name' =>'とろけるティラミス＆コーヒーゼリー',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE14',
            'price' => 400,
            'kcal' => 273,
            'salt' => 0.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

            DB::table('menus')->insert([
            'menu_name' =>'コーヒーゼリー＆イタリアンジェラート',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE15',
            'price' => 350,
            'kcal' => 165,
            'salt' => 0.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

            DB::table('menus')->insert([
            'menu_name' =>'フレンチトースト',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE17',
            'price' => 400,
            'kcal' => 299,
            'salt' => 0.5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

            DB::table('menus')->insert([
            'menu_name' =>'シチリア産ピスタチオのジェラート',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE25',
            'price' => 350,
            'kcal' => 145,
            'salt' => 0.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

            DB::table('menus')->insert([
            'menu_name' =>'とろっとパンナコッタ',
            'category' =>'sidedish',
            'type' =>'dessert',
            'order_num' => 'DE28',
            'price' => 250,
            'kcal' => 128,
            'salt' => 0.1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
