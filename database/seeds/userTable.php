<?php

use Illuminate\Database\Seeder;

use App\Model\user;

class userTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        user::truncate();

        $user             = new user();
        $user->name       = "gaenael";
        $user->email      = "ganalpratama@gmail.com";
        $user->password   = Hash::make("12345abc");
        $user->save();
    }
}
