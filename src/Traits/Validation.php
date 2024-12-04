<?php

namespace TecnoSpeed\Plugnotas\Traits;

trait Validation
{
    public function removeSpecialCharacters(string $field): string
    {
        return preg_replace('/\D/', '', $field);
    }

    public function isValidCpfCnpj(string $cpfCnpj): bool
    {
        $cpfCnpj = $this->removeSpecialCharacters($cpfCnpj);

        return strlen($cpfCnpj) >= 11 && strlen($cpfCnpj) <= 14;
    }

    public function capturarDDD(string $telefone): ?string
    {
        $telefone = preg_replace('/\D/', '', $telefone);

        if (preg_match('/^0?(\d{2})\d{8,9}$/', $telefone, $matches)) {
            return $matches[1];
        }

        return null; // Retorna null se o formato for inválido
    }
}