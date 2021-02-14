<?php

use PHPUnit\Framework\TestCase;
use andreolv\cep;

final class SearchTest extends TestCase
{
    /**
     * @dataProvider dadosTeste
     */
    public function testPegaEnderecoPorCepDefaultUsage(string $input, array $esperado)
    {



        $resultado = new cep\Search();
        $resultado = $resultado->pegaEnderecoPorCep($input);

        $this->assertEquals($esperado, $resultado);

    }

    public function dadosTeste()
    {
        return [
            "Endereço Casa" => [
                "72236008",
                [
                    "cep" => "72236-008",
                    "logradouro" => "QNP 30 Conjunto H",
                    "complemento" => "",
                    "bairro" => "Ceilândia Sul (Ceilândia)",
                    "localidade" => "Brasília",
                    "uf" => "DF",
                    "ibge" => "5300108",
                    "gia" => "",
                    "ddd" => "61",
                    "siafi" => "9701"
                ]
            ],
            "Endereço Octogonal" => [
                "70660044",
                [
                    "cep" => "70660-044",
                    "logradouro" => "AOS 4 Bloco D",
                    "complemento" => "",
                    "bairro" => "Área Octogonal",
                    "localidade" => "Brasília",
                    "uf" => "DF",
                    "ibge" => "5300108",
                    "gia" => "",
                    "ddd" => "61",
                    "siafi" => "9701"
                ]
            ]
        ];
    }


}
