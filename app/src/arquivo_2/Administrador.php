<?php
    namespace App\src\arquivo_2;

    use App\src\arquivo_2\Usuario;

    class Administrador extends Usuario {
        public function autenticar(string $login, string $senha): bool {
    
          return true;
        }
    
        public function autorizar(): array {
          return ['gerenciar_usuarios', 'gerenciar_cursos'];
        }
      }