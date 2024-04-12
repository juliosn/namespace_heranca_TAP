<?php 

    namespace App\src\arquivo_1;

    use App\src\arquivo_1\UsuarioInterface;
    use App\src\arquivo_1\Professor;
    use App\src\arquivo_1\Administrador;
    use App\src\arquivo_1\AdministradorSupremo;
    use Exception;

    class UsuarioFactory {
        public static function criar(string $perfil): UsuarioInterface {
            switch ($perfil) {
                case 'professor':
                    return new Professor();
                case 'administrador':
                    return new Administrador();
                case 'administrador_supremo':
                    return new AdministradorSupremo();
                default:
                    throw new Exception('Perfil inválido');
            }
        }
    }