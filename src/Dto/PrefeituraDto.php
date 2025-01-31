<?php

namespace TecnoSpeed\Plugnotas\Dto;

class PrefeituraDto
{
    public function __construct(
        public ?string $login,
        public ?string $senha
    )
    {
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function getSenha(): ?string
    {
        return $this->senha;
    }
}
