<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tUser = App\User::create([
            'name' => "WebSiteAdmin",                   // <- User's name
            'email' => "webmaster@notexists.com",       // <- User's email
            'password' => Hash::make("password"),       // <- User's password
        ]);
        $tUser->save();
    }
}
