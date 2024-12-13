<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\Icms;
use TecnoSpeed\Plugnotas\Common\Tributos;
use TecnoSpeed\Plugnotas\Enums\CstCofinsEnum;
use TecnoSpeed\Plugnotas\Enums\CstIpiEnum;
use TecnoSpeed\Plugnotas\Enums\CstPisEnum;

interface ITributosBuilder
{
    /**
     * @param float|null $baseCalculoIcms
     * @param float|null $percentualIcmsFcp
     * @param float|null $aliquotaInterna
     * @param float|null $aliquotaInterestadual
     * @return self
     */
    public function setPartilha(?float $baseCalculoIcms, ?float $percentualIcmsFcp, ?float $aliquotaInterna, ?float $aliquotaInterestadual): self;

    /**
     * @param Icms|null $icms
     * @return self
     */
    public function setIcms(?Icms $icms): self;

    /**
     * @param string|null $codigoEnquadramentoLegal
     * @param CstIpiEnum|null $cst
     * @param float|null $baseCalculo
     * @param float|null $aliquota
     * @return self
     */
    public function setIpi(?string $codigoEnquadramentoLegal, ?CstIpiEnum $cst, ?float $baseCalculo, ?float $aliquota): self;

    /**
     * @param CstPisEnum|null $cst
     * @param float|null $valorBaseCalculo
     * @param float|null $aliquota
     * @return self
     */
    public function setPis(?CstPisEnum $cst, ?float $valorBaseCalculo, ?float $aliquota): self;

    /**
     * @param CstCofinsEnum|null $cst
     * @param float|null $valorBaseCalculo
     * @param float|null $aliquota
     * @return self
     */
    public function setCofins(?CstCofinsEnum $cst, ?float $valorBaseCalculo, ?float $aliquota): self;

    /**
     * @param float|null $valor
     * @param float|null $aliquota
     * @param float|null $baseCalculo
     * @param string|null $codigoServico
     * @param string|null $codigoMunicipioFatoGerador
     * @param string|null $codigoExigibilidade
     * @return self
     */
    public function setIssqn(?float $valor, ?float $aliquota, ?float $baseCalculo, ?string $codigoServico, ?string $codigoMunicipioFatoGerador, ?string $codigoExigibilidade): self;

    /**
     * @param float|null $valorAproximadoTributos
     * @return self
     */
    public function setValorAproximadoTributos(?float $valorAproximadoTributos): self;

    public function build(): Tributos;
}
