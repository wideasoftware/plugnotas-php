<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\Cofins;
use TecnoSpeed\Plugnotas\Common\Icms;
use TecnoSpeed\Plugnotas\Common\Ipi;
use TecnoSpeed\Plugnotas\Common\Issqn;
use TecnoSpeed\Plugnotas\Common\Partilha;
use TecnoSpeed\Plugnotas\Common\Pis;
use TecnoSpeed\Plugnotas\Common\Tributos;
use TecnoSpeed\Plugnotas\Enums\CstCofinsEnum;
use TecnoSpeed\Plugnotas\Enums\CstIpiEnum;
use TecnoSpeed\Plugnotas\Enums\CstPisEnum;

interface ITributosBuilder
{
    /**
     * @param float $baseCalculoIcms
     * @param float|null $percentualIcmsFcp
     * @param float $aliquotaInterna
     * @param float $aliquotaInterestadual
     * @return self
     */
    public function setPartilha(float $baseCalculoIcms, ?float $percentualIcmsFcp, float $aliquotaInterna, float $aliquotaInterestadual): self;

    /**
     * @param Icms $icms
     * @return self
     */
    public function setIcms(Icms $icms): self;

    /**
     * @param string $codigoEnquadramentoLegal
     * @param CstIpiEnum $cst
     * @param float $baseCalculo
     * @param float $aliquota
     * @return self
     */
    public function setIpi(string $codigoEnquadramentoLegal, CstIpiEnum $cst, float $baseCalculo, float $aliquota): self;

    /**
     * @param CstPisEnum $cst
     * @param float $valorBaseCalculo
     * @param float $aliquota
     * @return self
     */
    public function setPis(CstPisEnum $cst, float $valorBaseCalculo, float $aliquota): self;

    /**
     * @param CstCofinsEnum $cst
     * @param float $valorBaseCalculo
     * @param float $aliquota
     * @return self
     */
    public function setCofins(CstCofinsEnum $cst, float $valorBaseCalculo, float $aliquota): self;

    /**
     * @param float $valor
     * @param float $aliquota
     * @param float $baseCalculo
     * @param string $codigoServico
     * @param string $codigoMunicipioFatoGerador
     * @param string $codigoExigibilidade
     * @return self
     */
    public function setIssqn(float $valor, float $aliquota, float $baseCalculo, string $codigoServico, string $codigoMunicipioFatoGerador, string $codigoExigibilidade): self;

    /**
     * @param float $valorAproximadoTributos
     * @return self
     */
    public function setValorAproximadoTributos(float $valorAproximadoTributos): self;

    public function build(): Tributos;
}
