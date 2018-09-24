<?php

use Illuminate\Database\Seeder;

use App\Model\akumulasi;

class akumulasiTS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        akumulasi::truncate();

        $akm             = new akumulasi();
        $akm->id_user    = 1;
        $akm->tipe       = 1;
        $akm->total      = 10000;
        $akm->keterangan = "Nabung";
        $akm->save();

        $akm             = new akumulasi();
        $akm->id_user    = 1;
        $akm->tipe       = 1;
        $akm->total      = 20000;
        $akm->keterangan = "Apa ya";
        $akm->save();
    }
}
