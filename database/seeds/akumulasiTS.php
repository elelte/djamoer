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
        akumulasi::query()->delete();

        $akm1             = new akumulasi();
        $akm1->id_user    = 1;
        $akm1->tipe       = 1;
        $akm1->total      = 10000;
        $akm1->keterangan = "Nabung";
        $akm1->save();

        $akm2             = new akumulasi();
        $akm2->id_user    = 1;
        $akm2->tipe       = 1;
        $akm2->total      = 20000;
        $akm2->keterangan = "Apa ya";
        $akm2->save();
    }
}
