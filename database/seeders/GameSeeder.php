<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            [
                'title' => 'HOGWARTS LEGACY',
                'rating' => '4',
                'description' => 'Ženkite į užburtą Hario Poterio pasaulį ir patirkite didžiausią nuotykį "Hogwarts Legacy" - būsimame veiksmo vaidmenų žaidime, skirtame "PlayStation 5". Tyrinėkite stebuklingą Hogvartso pasaulį ir ne tik, atskleisdami burtininkų pasaulio paslaptis.',
                'price' => random_int(30, 100),
                'image' => 'https://gameroom.lt/73492-home_default/hogwarts-legacy.jpg',
                'stock' => random_int(0, 100),
                'release_date' => Date::now()->subMonths(random_int(1, 50)),
                'console_id' => 1,
                'genre_id' => 3,
            ],
            [
                'title' => 'Resident Evil 4 Remake',
                'rating' => '4',
                'description' => 'Resident Evil™ 4 prisijungia prie Leono S. Kenedžio praėjus šešeriems metams po jo pragaro išgyvenimų biologinėje katastrofoje Raccoon City.',
                'price' => random_int(30, 100),
                'image' => 'https://gameroom.lt/78791-home_default/resident-evil-4-remake.jpg',
                'stock' => random_int(0, 100),
                'release_date' => Date::now()->subMonths(random_int(1, 50)),
                'console_id' => 1,
                'genre_id' => 2,
            ],
            [
                'title' => 'DEAD SPACE REMAKE',
                'rating' => '4',
                'description' => 'The sci-fi survival horror classic returns, rebuilt to offer a deeper and more immersive experience. ',
                'price' => random_int(30, 100),
                'image' => 'https://gameroom.lt/80151-home_default/dead-space-remake.jpg',
                'stock' => random_int(0, 100),
                'release_date' => Date::now()->subMonths(random_int(1, 50)),
                'console_id' => 2,
                'genre_id' => 2,
            ],
            [
                'title' => 'Grand Theft Auto V',
                'rating' => '4',
                'description' => 'Los Santos: plačiai nusidriekęs saulėtas metropolis, pilnas patyrusių guru, jaunų žvaigždučių bei primirštų garsenybių. Šio miesto nepakantumas Vakarų pasauliui kainavo ekonomikos kritimą, nepastovumą,taipogi pigių realybės šou klestėjimą televizijoje. Apsuptyje sunkumų, trys begalo skirtingi nusikaltėliai rizikuoja viskuo, įsitraukiant į pavojingus apiplėšimus, kas galėtų suteikti normalų gyvenimą.',
                'price' => random_int(30, 100),
                'image' => 'https://gameroom.lt/62309-home_default/grand-theft-auto-v.jpg',
                'stock' => random_int(0, 100),
                'release_date' => Date::now()->subMonths(random_int(1, 50)),
                'console_id' => 2,
                'genre_id' => 1,
            ],
        ]);
    }
}
