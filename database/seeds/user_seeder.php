<?php

use Illuminate\Database\Seeder;
use App\User;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 10; $i++)
            factory(User::class) -> create();
    }

    private static function Create_User ($objUser) {
        $uUser = new User;
        $uUser -> email = $objUser -> MAIL;
        $uUser -> name = $objUser -> NAME;
        $uUser -> password = Hash::make($objUser -> PASSWORD);

        $uUser -> save();

        echo ' - ' . $uUser -> id . "\n";
    }
}
