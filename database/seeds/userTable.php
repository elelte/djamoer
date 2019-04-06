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
        user::query()->delete();

        $usr             = new user();
        $usr->name       = "gaenael";
        $usr->email      = "ganalpratama@gmail.com";
        $usr->phone      = "085717856321";
        $usr->password   = Hash::make("12345abc");
        $usr->token      = Sha1(time());
        $usr->save();

        $usr2             = new user();
        $usr2->name       = "mamet";
        $usr2->email      = "mamet@gmail.com";
        $usr2->phone      = "08127176534";
        $usr2->password   = Hash::make("12345abc");
        $usr2->token      = Sha1(time());
        $usr2->save();
    }
}
