<?php

    namespace App\src\arquivo_1;

    use App\src\arquivo_1\UsuarioInterface;

    class Professor implements UsuarioInterface {
        protected $nome;
        protected $login;
        protected $senha;
    
        public function autenticar(string $login, string $senha): bool {
            if ($login === '' || $senha === '') {
                return false;
            }
            return true;
        }
    
        public function autorizar(): array {
            return ['acessar_materiais', 'gerenciar_notas'];
        }
    }

