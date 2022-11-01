<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::truncate();

        $zuri = [
            ['id' => 1, 'slackUsername' => 'mnanjwan', 'backend' => true, 'age' => 22, 'bio' => 'Im a laravel developer'],

        ];
        foreach ($zuri as $key => $value) {
            Profile::create($value);
        }
    }
}
