<?php
namespace App;

require 'vendor/autoload.php';

use App\src\arquivo_1\Login_Implements;
use App\src\arquivo_2\Login_Extends;

$login_implements = new Login_Implements();
$login_extends = new Login_Extends();


$login_implements->executar('Júlio','123');
$login_extends->executar('Neves','321');