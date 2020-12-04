<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tranlation = [
            "arid" =>"árido",
            "temperate" =>"temperado",
            "tropical" =>"tropical",
            "frozen" =>"congelado",
            "murky" =>"escuro",
            "windy" =>"centoso",
            "hot" =>"quente",
            "artificial temperate" =>"artificialmente temperado",
            "frigid" =>"gelado",
            "humid" =>"úmido",
            "moist" =>"úmido",
            "polluted" =>"poluído",
            "superheated" =>"extremamente quente",
            "subartic" =>"subártico",
            "artic" =>"ártico",
            "desert" =>"deserto",
            "grasslands" =>"pradaria",
            "mountains" =>"montanhas",
            "jungle" =>"selva",
            "rainforests" =>"floresta úmida",
            "tundra" =>"tundra",
            "ice caves" =>"cavernas geladas",
            "mountain ranges" =>"cordilheiras",
            "swamp" =>"pântano",
            "jungles" =>"selvas",
            "gas giant" =>"gigante de gás",
            "forests" =>"florestas",
            "lakes" =>"lagos",
            "grassy hills" =>"colinas gramadas",
            "swamps" =>"pântanos",
            "cityscape" =>"paisagem urbana",
            "ocean" =>"oceano",
            "rock" =>"pedra",
            "mountain" =>"montanhoso",
            "barren" =>"estéril",
            "scrublands" =>"cerrado",
            "savanna" =>"savana",
            "canyons" =>"cânions",
            "sinkholes" =>"cenote",
            "volcanoes" =>"vulcões",
            "lava rivers" =>"rios de lava",
            "caves" =>"cavernas",
            "rivers" =>"rios",
            "airless asteroid" =>"asteroide ",
            "glaciers" =>"geleiras",
            "ice canyons" =>"cânions de gelo",
            "fungus forests" =>"florets de fungo",
            "fields" =>"campos",
            "rock arches" =>"arcos de pedra",
            "grass" =>"gramado",
            "plains" =>"planície",
            "urban" =>"urbano",
            "hills" =>"montanhas",
            "oceans" =>"oceanos",
            "bogs" =>"brejos",
            "savannas" =>"savanas",
            "rocky islands" =>"ilhas de pedra",
            "seas" =>"oceanos",
            "mesas" =>"mesas",
            "unknown" =>"desconhecido",
            "deserts" =>"desertos",
            "reefs" =>"recifes",
            "islands" =>"ilhas",
            "rocky deserts" =>"desertos rochosos",
            "valleys" =>"vales",
            "ash" =>"cinza",
            "toxic clouds" =>"nuvens tóxicas",
            "plateaus" =>"planaltos",
            "verdant" =>"verdejante",
            "rocky canyons" =>"cânions rochosos",
            "acid pools" =>"piscinas de ácido",
            "rocky" =>"rochoso",
            "vines" =>"vinhas",
            "cities" =>"cidades",
            "savannahs" =>"savanas",
            "cliffs" =>"penhascos",
            "n/a" =>"desconhecido",
        ];

        foreach ($tranlation as $key=>$value){
            Translation::create(array('key' => $key,
                'translation' => $value));
        }
    }
}