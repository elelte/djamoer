<?php

use Illuminate\Database\Seeder;

use App\Model\panen_detail;

class PanenDetailTS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        panen_detail::query()->delete();

        $pn1            = new panen_detail();
        $pn1->panen_id  = 1;
        $pn1->user_id   = 1;
        $pn1->weight    = 1;
        $pn1->save();
    }
}
