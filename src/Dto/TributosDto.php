<?php

namespace TecnoSpeed\Plugnotas\Dto;

use TecnoSpeed\Plugnotas\Common\Icms;

class TributosDto
{
    public function __construct
    (
        public ?PartilhaDto $partilha,
        public ?Icms        $icms,
        public ?IpiDto      $ipi,
        public ?PisDto      $pis,
        public ?CofinsDto   $cofins,
        public ?IssqnDto    $issqn,
        public ?float       $valorAproximadoTributos
    )
    {

    }
}
