<?php

use Illuminate\Database\Seeder;

use App\Model\admins;

class adminTS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admins::query()->delete();

        $adm           = new admins();
        $adm->email    = "ganalpratama@gmail.com";
        $adm->username = "gaenael";
        $adm->password = Hash::make("12345abc");
        $adm->role     = "Superadmin";
        $adm->save();

        $adm2           = new admins();
        $adm2->email    = "mamet@gmail.com";
        $adm2->username = "mamet";
        $adm2->password = Hash::make("12345abc");
        $adm2->role     = "Superadmin";
        $adm2->save();
    }
}
