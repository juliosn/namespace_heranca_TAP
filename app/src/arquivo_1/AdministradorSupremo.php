<?php 
    namespace App\src\arquivo_1;

    use App\src\arquivo_1\Administrador;
    
    class AdministradorSupremo extends Administrador {
        public function autorizar(): array {
            $autorizacoes = parent::autorizar();
            $autorizacoes[] = 'configurar_sistema';
            $autorizacoes[] = 'gerenciar_backups';
            return $autorizacoes;
        }
    }