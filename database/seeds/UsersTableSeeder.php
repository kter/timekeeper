<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $faker = Faker\Factory::create('ja_JP');

        for ($i = 0; $i < 8; $i++){
            \App\User::create([
                'name' => $faker->name(),
                'email' => $faker->email()
            ]);
        }
        \App\User::create([
            'name' => $faker->name(),
            'email' => $faker->email(),
            'is_admin' => 1
        ]);

        \App\User::create([
            'name' => $faker->name(),
            'email' => $faker->email(),
            'is_manager' => 1
        ]);

        \App\User::create([
            'name' => $faker->name(),
            'email' => $faker->email(),
            'is_admin' => 1,
            'is_manager' => 1
        ]);

    }
}
