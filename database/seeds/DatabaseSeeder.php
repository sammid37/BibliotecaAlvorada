<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdministradorSeeder::class);
        $this->call(FuncionarioSeeder::class);
        $this->call(ProfessorSeeder::class);
        $this->call(ExposicaoSeeder::class);
        $this->call(MensagemSeeder::class);
    }
}
