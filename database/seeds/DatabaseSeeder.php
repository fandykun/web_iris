<?php

use App\Member;
use App\User;
use Carbon\Carbon;
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
        $user = new User();
        $user->name = 'Fandykun';
        $user->email = 'admin@iris.its.ac.id';
        $user->password = bcrypt('irisjuara');
        $user->save();

        $members_sql = base_path('_SQL/data-anggota.sql');
        DB::unprepared(file_get_contents($members_sql));
        $members = Member::all();
        foreach ($members as $member) {
            $member->created_at = Carbon::now();
            $member->save();
        }
    }
}
