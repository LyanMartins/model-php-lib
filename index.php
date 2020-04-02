<?php
require 'vendor/autoload.php';

//$model = new ModelPhp\Lib\Data();
$model = new ModelPhp\Model\Cliente();

try {
    var_dump($model->putaMerda());
} catch (\Exception $th) {
    var_dump($th->getMessage());
}

