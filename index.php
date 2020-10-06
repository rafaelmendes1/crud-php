<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entities\Vaga;

$vagas = Vaga::getAllVagas();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/pesquisa.php';
include __DIR__.'/includes/footer.php';