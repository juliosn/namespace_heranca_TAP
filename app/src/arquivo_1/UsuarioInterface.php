<?php

    namespace App\src\arquivo_1;

    interface UsuarioInterface {
        public function autenticar(string $login, string $senha): bool;
        public function autorizar(): array;
    }