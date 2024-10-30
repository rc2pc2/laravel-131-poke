<?php

namespace Database\Seeders;

use App\Models\Environment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class EnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = [
            [
                "english" => "Normal",
                "chinese" => "一般",
                "japanese" => "ノーマル"
            ],
            [
                "english" => "Fighting",
                "chinese" => "格斗",
                "japanese" => "かくとう"
            ],
            [
                "english" => "Flying",
                "chinese" => "飞行",
                "japanese" => "ひこう"
            ],
            [
                "english" => "Poison",
                "chinese" => "毒",
                "japanese" => "どく"
            ],
            [
                "english" => "Ground",
                "chinese" => "地上",
                "japanese" => "じめん"
            ],
            [
                "english" => "Rock",
                "chinese" => "岩石",
                "japanese" => "いわ"
            ],
            [
                "english" => "Bug",
                "chinese" => "虫",
                "japanese" => "むし"
            ],
            [
                "english" => "Ghost",
                "chinese" => "幽灵",
                "japanese" => "ゴースト"
            ],
            [
                "english" => "Steel",
                "chinese" => "钢",
                "japanese" => "はがね"
            ],
            [
                "english" => "Fire",
                "chinese" => "炎",
                "japanese" => "ほのお"
            ],
            [
                "english" => "Water",
                "chinese" => "水",
                "japanese" => "みず"
            ],
            [
                "english" => "Grass",
                "chinese" => "草",
                "japanese" => "くさ"
            ],
            [
                "english" => "Electric",
                "chinese" => "电",
                "japanese" => "でんき"
            ],
            [
                "english" => "Psychic",
                "chinese" => "超能",
                "japanese" => "エスパー"
            ],
            [
                "english" => "Ice",
                "chinese" => "冰",
                "japanese" => "こおり"
            ],
            [
                "english" => "Dragon",
                "chinese" => "龙",
                "japanese" => "ドラゴン"
            ],
            [
                "english" => "Dark",
                "chinese" => "恶",
                "japanese" => "あく"
            ],
            [
                "english" => "Fairy",
                "chinese" => "妖精",
                "japanese" => "フェアリー"
            ]
        ];

        $locationTitle = [
            "Giant", "Dark", "Huge", "Small", "Funny", "Old", "New", "Ancient", "Interesting"
        ];

        $locationName = [
            "Cave", "Valley", "Forest", "Mountain", "Plain", "Path", "Relic", "Field", "Island"
        ];

        for ($i=0; $i < 30; $i++) {
            $newEnvironment = new Environment();
            $newEnvironment->name = $faker->randomElement($locationTitle) . " " . $faker->randomElement($locationName);
            $newEnvironment->element = $faker->randomElement($types)["english"];
            $newEnvironment->walking_speed = $faker->numberBetween(0, 100);
            $newEnvironment->image = $faker->imageUrl(128,128, null, true, $newEnvironment->name);
            $newEnvironment->save();
        }
    }
}
