<?php

use Illuminate\Database\Seeder;

class BooksTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('friends')->insert([
      [
        'name' => 'Petras',
        'phone' => '861525433',
        'birthday' => '1998-01-01',
        'photo' => 'friends/petras.jpg'
      ], [
        'name' => 'Juozas',
        'phone' => '861525453',
        'birthday' => '1990-01-01',
        'photo' => 'friends/juozas-naujausia.jpg'
      ]
    ]);    //
    }
}
