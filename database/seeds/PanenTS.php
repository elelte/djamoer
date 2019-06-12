<?php

use Illuminate\Database\Seeder;

use App\Model\panen;

class PanenTS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        panen::query()->delete();

        $pn1           = new panen();
        $pn1->name    = "Phase 1";
        $pn1->save();
    }
}
