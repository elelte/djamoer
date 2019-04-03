<?php

use Illuminate\Database\Seeder;

use App\Model\admins_role;

class admin_roleTS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        admins_role::truncate();

        $role        = new admins_role();
        $role->name  = "Superadmin";
        $role->save();
    }
}
