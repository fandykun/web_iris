<?php

use App\Member;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $user = new User();
        $user->name = 'Fandykun';
        $user->email = 'admin@iris.its.ac.id';
        $user->password = bcrypt('irisjuara');
        $user->save();

        $memberDivisions = [
            'Programming Division',
            'Electronic Division',
            'Mechanic Division',
            'Official Division'
        ];

        for ($i = 0; $i < 10; $i++) {
            $member = new Member();
            $member->name = $faker->name;
            $member->division = $memberDivisions[$i % 4];
            $member->image = 'dummy.png';
            $member->save();
        }
    }
}
