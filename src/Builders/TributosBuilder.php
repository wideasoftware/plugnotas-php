<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Icms;
use TecnoSpeed\Plugnotas\Common\Tributos;
use TecnoSpeed\Plugnotas\Dto\CofinsDto;
use TecnoSpeed\Plugnotas\Dto\IpiDto;
use TecnoSpeed\Plugnotas\Dto\IssqnDto;
use TecnoSpeed\Plugnotas\Dto\PartilhaDto;
use TecnoSpeed\Plugnotas\Dto\PisDto;
use TecnoSpeed\Plugnotas\Dto\TributosDto;
use TecnoSpeed\Plugnotas\Enums\CstCofinsEnum;
use TecnoSpeed\Plugnotas\Enums\CstIpiEnum;
use TecnoSpeed\Plugnotas\Enums\CstPisEnum;
use TecnoSpeed\Plugnotas\Interfaces\ITributosBuilder;

class TributosBuilder implements ITributosBuilder
{
    /**
     * @var PartilhaDto
     */
    private PartilhaDto $partilha;
    /**
     * @var Icms
     */
    private Icms $icms;

    /**
     * @var IpiDto
     */
    private IpiDto $ipi;

    /**
     * @var PisDto
     */
    private PisDto $pis;

    /**
     * @var CofinsDto
     */
    private CofinsDto $cofins;

    /**
     * @var IssqnDto
     */
    private IssqnDto $issqn;

    /**
     * @var float
     */
    private float $valorAproximadoTributos;

    /**
     * @param float|null $baseCalculoIcms
     * @param float|null $percentualIcmsFcp
     * @param float|null $aliquotaInterna
     * @param float|null $aliquotaInterestadual
     * @return ITributosBuilder
     */
    public function setPartilha(?float $baseCalculoIcms, ?float $percentualIcmsFcp, ?float $aliquotaInterna, ?float $aliquotaInterestadual): ITributosBuilder
    {
        $this->partilha = new PartilhaDto(
            baseCalculoIcms: $baseCalculoIcms,
            percentualIcmsFcp: $percentualIcmsFcp,
            aliquotaInterna: $aliquotaInterna,
            aliquotaInterestadual: $aliquotaInterestadual
        );

        return $this;
    }

    /**
     * @param Icms|null $icms
     * @return ITributosBuilder
     */
    public function setIcms(?Icms $icms): ITributosBuilder
    {
        $this->icms = $icms;

        return $this;
    }

    /**
     * @param string|null $codigoEnquadramentoLegal
     * @param CstIpiEnum|null $cst
     * @param float|null $baseCalculo
     * @param float|null $aliquota
     * @return ITributosBuilder
     */
    public function setIpi(?string $codigoEnquadramentoLegal, ?CstIpiEnum $cst, ?float $baseCalculo, ?float $aliquota): ITributosBuilder
    {
        $this->ipi = new IpiDto($codigoEnquadramentoLegal, $cst, $baseCalculo, $aliquota);

        return $this;
    }

    /**
     * @param CstPisEnum|null $cst
     * @param float|null $valorBaseCalculo
     * @param float|null $aliquota
     * @return ITributosBuilder
     */
    public function setPis(?CstPisEnum $cst, ?float $valorBaseCalculo, ?float $aliquota): ITributosBuilder
    {
        $baseCalculo = [
            'valor' => $valorBaseCalculo,
        ];

        $this->pis = new PisDto($cst, $baseCalculo, $aliquota);

        return $this;
    }

    /**
     * @param CstCofinsEnum|null $cst
     * @param float|null $valorBaseCalculo
     * @param float|null $aliquota
     * @return ITributosBuilder
     */
    public function setCofins(?CstCofinsEnum $cst, ?float $valorBaseCalculo, ?float $aliquota): ITributosBuilder
    {
        $baseCalculo = [
            'valor' => $valorBaseCalculo,
        ];

        $this->cofins = new CofinsDto($cst, $baseCalculo, $aliquota);

        return $this;
    }

    /**
     * @param float|null $valor
     * @param float|null $aliquota
     * @param float|null $baseCalculo
     * @param string|null $codigoServico
     * @param string|null $codigoMunicipioFatoGerador
     * @param string|null $codigoExigibilidade
     * @return ITributosBuilder
     */
    public function setIssqn(?float $valor, ?float $aliquota, ?float $baseCalculo, ?string $codigoServico, ?string $codigoMunicipioFatoGerador, ?string $codigoExigibilidade): ITributosBuilder
    {
        $this->issqn = new IssqnDto
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
     * @param float|null $valorAproximadoTributos
     * @return ITributosBuilder
     */
    public function setValorAproximadoTributos(?float $valorAproximadoTributos): ITributosBuilder
    {
        $this->valorAproximadoTributos = $valorAproximadoTributos;

        return $this;
    }


    public function build(): Tributos
    {
        $tributosDto = new TributosDto(
            partilha: $this->partilha,
            icms: $this->icms,
            ipi: $this->ipi,
            pis: $this->pis,
            cofins: $this->cofins,
            issqn: $this->issqn,
            valorAproximadoTributos: $this->valorAproximadoTributos,
        );

        return new Tributos($tributosDto);
    }


}
