<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table("tb_estado")->insert([
            [
                "nome"       => "Rondônia",
                "abbr"       => "RO"
            ], [
                "nome"       => "Acre",
                "abbr"       => "AC"
            ], [
                "nome"       => "Amazonas",
                "abbr"       => "AM"
            ], [

                "nome"       => "Roraima",
                "abbr"       => "RR"
            ], [
                "nome"       => "Pará",
                "abbr"       => "PA"
            ], [
                "nome"       => "Amapá",
                "abbr"       => "AP"
            ], [
                "nome"       => "Tocantins",
                "abbr"       => "TO"
            ], [
                "nome"       => "Maranhão",
                "abbr"       => "MA"
            ], [
                "nome"       => "Piauí",
                "abbr"       => "PI"
            ], [
                "nome"       => "Ceará",
                "abbr"       => "CE"
            ], [
                "nome"       => "Rio Grande do Norte",
                "abbr"       => "RN"
            ], [
                "nome"       => "Paraíba",
                "abbr"       => "PB"
            ], [
                "nome"       => "Pernambuco",
                "abbr"       => "PE"
            ], [
                "nome"       => "Alagoas",
                "abbr"       => "AL"
            ], [
                "nome"       => "Sergipe",
                "abbr"       => "SE"
            ], [
                "nome"       => "Bahia",
                "abbr"       => "BA"
            ], [
                "nome"       => "Minas Gerais",
                "abbr"       => "MG"
            ], [
                "nome"       => "Espírito Santo",
                "abbr"       => "ES"
            ], [
                "nome"       => "Rio de Janeiro",
                "abbr"       => "RJ"
            ], [
                "nome"       => "São Paulo",
                "abbr"       => "SP"
            ], [
                "nome"       => "Paraná",
                "abbr"       => "PR"
            ], [
                "nome"       => "Santa Catarina",
                "abbr"       => "SC"
            ], [
                "nome"       => "Rio Grande do Sul",
                "abbr"       => "RS"
            ], [
                "nome"       => "Mato Grosso do Sul",
                "abbr"       => "MS"
            ], [
                "nome"       => "Mato Grosso",
                "abbr"       => "MT"
            ], [
                "nome"       => "Goiás",
                "abbr"       => "GO"
            ], [
                "nome"       => "Distrito Federal",
                "abbr"       => "DF"
            ],
        ]);
    }
}
