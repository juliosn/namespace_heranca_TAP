<?php
    namespace App\src\arquivo_1;

    use App\src\arquivo_1\UsuarioInterface;

    class Administrador implements UsuarioInterface {
        protected $nome;
        protected $login;
        protected $senha;
    
        public function autenticar(string $login, string $senha): bool {
            return true;
        }
    
        public function autorizar(): array {
            return ['gerenciar_usuarios', 'gerenciar_cursos'];
        }
    }