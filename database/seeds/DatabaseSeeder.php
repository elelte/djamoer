<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(akumulasiTS::class);
        $this->call(userTable::class);
        $this->call(adminTS::class);
        $this->call(admin_roleTS::class);
        $this->call(PanenTS::class);
        $this->call(PanenDetailTS::class);
    }
}
