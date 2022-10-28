<?php

namespace Cvantim\Banco\Modelo\Conta;

use Cvantim\Banco\Modelo\Pessoa;
use Cvantim\Banco\Modelo\CPF;
use Cvantim\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
