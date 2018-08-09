<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                ['id' => 804040, 'name' => 'Sonstige Umzugsleistungen', 'created_at' => Carbon::now()],
                ['id' => 802030, 'name' => 'Abtransport, Entsorgung und Entrümpelung', 'created_at' => Carbon::now()],
                ['id' => 411070, 'name' => 'Fensterreinigung', 'created_at' => Carbon::now()],
                ['id' => 402020, 'name' => 'Holzdielen schleifen', 'created_at' => Carbon::now()],
                ['id' => 108140, 'name' => 'Kellersanierung', 'created_at' => Carbon::now()],
            ]
        );
    }
}
