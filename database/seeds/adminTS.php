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
    }
}
