<?php

namespace TecnoSpeed\Plugnotas\Builders;

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
use TecnoSpeed\Plugnotas\Interfaces\ITributosBuilder;

class TributosBuilder implements ITributosBuilder
{
    /**
     * @var Partilha
     */
    private Partilha $partilha;
    /**
     * @var Icms
     */
    private Icms $icms;

    /**
     * @var Ipi
     */
    private Ipi $ipi;

    /**
     * @var Pis
     */
    private Pis $pis;

    /**
     * @var Cofins
     */
    private Cofins $cofins;

    /**
     * @var Issqn
     */
    private Issqn $issqn;

    /**
     * @var float
     */
    private float $valorAproximadoTributos;

    /**
     * @param float $baseCalculoIcms
     * @param float|null $percentualIcmsFcp
     * @param float $aliquotaInterna
     * @param float $aliquotaInterestadual
     * @return ITributosBuilder
     */
    public function setPartilha(float $baseCalculoIcms, ?float $percentualIcmsFcp, float $aliquotaInterna, float $aliquotaInterestadual): ITributosBuilder
    {
        $this->partilha = new Partilha(
            baseCalculoIcms: $baseCalculoIcms,
            percentualIcmsFcp: $percentualIcmsFcp,
            aliquotaInterna: $aliquotaInterna,
            aliquotaInterestadual: $aliquotaInterestadual
        );

        return $this;
    }

    /**
     * @param Icms $icms
     * @return ITributosBuilder
     */
    public function setIcms(Icms $icms): ITributosBuilder
    {
        $this->icms = $icms;

        return $this;
    }

    /**
     * @param string $codigoEnquadramentoLegal
     * @param CstIpiEnum $cst
     * @param float $baseCalculo
     * @param float $aliquota
     * @return ITributosBuilder
     */
    public function setIpi(string $codigoEnquadramentoLegal, CstIpiEnum $cst, float $baseCalculo, float $aliquota): ITributosBuilder
    {
        $this->ipi = new Ipi($codigoEnquadramentoLegal, $cst, $baseCalculo, $aliquota);

        return $this;
    }

    /**
     * @param CstPisEnum $cst
     * @param float $valorBaseCalculo
     * @param float $aliquota
     * @return ITributosBuilder
     */
    public function setPis(CstPisEnum $cst, float $valorBaseCalculo, float $aliquota): ITributosBuilder
    {
        $baseCalculo = [
            'valor' => $valorBaseCalculo,
        ];

        $this->pis = new Pis($cst, $baseCalculo, $aliquota);

        return $this;
    }

    /**
     * @param CstCofinsEnum $cst
     * @param float $valorBaseCalculo
     * @param float $aliquota
     * @return ITributosBuilder
     */
    public function setCofins(CstCofinsEnum $cst, float $valorBaseCalculo, float $aliquota): ITributosBuilder
    {
        $baseCalculo = [
            'valor' => $valorBaseCalculo,
        ];

        $this->cofins = new Cofins($cst, $baseCalculo, $aliquota);

        return $this;
    }

    /**
     * @param float $valor
     * @param float $aliquota
     * @param float $baseCalculo
     * @param string $codigoServico
     * @param string $codigoMunicipioFatoGerador
     * @param string $codigoExigibilidade
     * @return ITributosBuilder
     */
    public function setIssqn(float $valor, float $aliquota, float $baseCalculo, string $codigoServico, string $codigoMunicipioFatoGerador, string $codigoExigibilidade): ITributosBuilder
    {
        $this->issqn = new Issqn
        (
            valor: $valor,
            aliquota: $aliquota,
            baseCalculo: $baseCalculo,
            codigoServico: $codigoServico,
            codigoMunicipioFatoGerador: $codigoMunicipioFatoGerador,
            codigoExigibilidade: $codigoExigibilidade
        );

        return $this;
    }

    /**
     * @param float $valorAproximadoTributos
     * @return ITributosBuilder
     */
    public function setValorAproximadoTributos(float $valorAproximadoTributos): ITributosBuilder
    {
        $this->valorAproximadoTributos = $valorAproximadoTributos;

        return $this;
    }

    /**
     * @return Tributos
     */
    public function build(): Tributos
    {
        return new Tributos(
            partilha: $this->partilha,
            icms: $this->icms,
            ipi: $this->ipi,
            pis: $this->pis,
            cofins: $this->cofins,
            issqn: $this->issqn,
            valorAproximadoTributos: $this->valorAproximadoTributos,
        );
    }


}
