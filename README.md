# Uso do ReaderNFe

Esta simples classe retorna um array contendo os dados da Nota Fiscal.

### Instalação
```shell 
composer require thomasmauro/php-nfe
```

### Demonstração de uso
```php

<?php

require __DIR__ . '/vendor/autoload.php';

use Thomas\NFe\ReaderNFe;

$notaFiscal = new ReaderNFe($caminho);

var_dump($notaFiscal->obtemProdutos());

``` 


