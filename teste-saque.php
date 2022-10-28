<?php

use Cvantim\Banco\Modelo\Conta\ContaPoupanca;
use Cvantim\Banco\Modelo\Conta\ContaCorrente;
use Cvantim\Banco\Modelo\Conta\Titular;
use Cvantim\Banco\Modelo\CPF;
use Cvantim\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
