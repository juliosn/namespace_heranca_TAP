<?php

    namespace App\src\arquivo_2;

    use App\src\arquivo_2\UsuarioFactory;

    class Login_Extends {
        public function executar($lo,$se) {
            $login = $lo;
            $senha = $se;

            $perfil = 'professor'; 

            $usuario = UsuarioFactory::criar($perfil);

            if ($usuario->autenticar($login, $senha)) {
                $autorizacoes = $usuario->autorizar();

                echo "\n<br>Bem-vindo, $login! Você tem acesso às seguintes funcionalidades: " . implode(', ', $autorizacoes);
     
            } else {
                echo '\n<br>Login ou senha incorretos.';
            }
        }
    }