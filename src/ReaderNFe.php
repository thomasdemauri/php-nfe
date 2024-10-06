<?php

namespace Thomas\NFe;

class ReaderNFe {

    public string $path;
    public bool|\SimpleXMLElement $xml;
    public array $notaFiscal;

    public function __construct(string $path) {
        $this->path = $path;
        $this->boot();
    }

    private function boot(): void {
        $this->xml = simplexml_load_file($this->path);
        $this->notaFiscal = json_decode((json_encode($this->xml)), true);
    }

    public function obtemIdentificacao(): array {
        return $this->notaFiscal['NFe']['infNFe']['ide'];
    }

    public function obtemEmitente(): array {
        return $this->notaFiscal['NFe']['infNFe']['emit'];
    }

    public function obtemDestinatario(): array {
        return $this->notaFiscal['NFe']['infNFe']['dest'];
    }

    public function obtemProdutos(): array {
        return $this->notaFiscal['NFe']['infNFe']['det'];
    }

    public function obtemTotal(): array {
        return $this->notaFiscal['NFe']['infNFe']['total'];
    }

    public function obtemTransportadora(): array {
        return $this->notaFiscal['NFe']['infNFe']['transp'];
    }

    public function obtemPagamento(): array {
        return $this->notaFiscal['NFe']['infNFe']['pag'];
    }

    public function obtemInfoAdicional(): array {
        return $this->notaFiscal['NFe']['infNFe']['infAdic'];
    }

    public function obtemAssinatura(): array {
        return $this->notaFiscal['NFe']['Signature'];
    }

    public function obtemProtocolo(): array {
        return $this->notaFiscal['protNFe'];
    }
}