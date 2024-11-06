<?php

use PHPUnit\Framework\TestCase;
use Rapha\DigitalCep\Search;

class SearchTest extends TestCase{

  /**
   * @dataProvider dadosTeste
   */
  public function testGetAddressFromZipcodeDefaultUsage(string $input, array $resultadoEsperado) {
   
    $result = new Search;
    $result = $result->getAddressFromZipcode($input);

    $this->assertEquals($resultadoEsperado, $result);
  }

  public function dadosTeste() {
    return [
      "Endereço São Paulo" => [
        "02945060", 
        [
          "cep" => "02945-060",
          "logradouro" => "Rua Mathilde Carlos Montesanti",
          "complemento" =>  "",
          "unidade" => "",
          "bairro" => "Jardim Cidade Pirituba",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "estado" => "São Paulo",
          "regiao" => "Sudeste",
          "ibge" => "3550308",
          "gia" => "1004",
          "ddd" => "11",
          "siafi" => "7107"
        ]
      ],
      "Endereço Rio de Janeiro" => [
        "05143320",
        [
          "cep" => "05143-320",
          "logradouro" => "Rua José Correia Lima",
          "complemento" => "",
          "unidade" => "",
          "bairro" => "Jardim Felicidade (Zona Oeste)",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "estado" => "São Paulo",
          "regiao" => "Sudeste",
          "ibge" => "3550308",
          "gia" => "1004",
          "ddd" => "11",
          "siafi" => "7107"
        ]
      ],
    ];
  }
}