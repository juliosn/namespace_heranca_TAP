<?php 

    namespace App\src\arquivo_2;

    use App\src\arquivo_2\Usuario;
    use App\src\arquivo_2\Professor;
    use App\src\arquivo_2\Administrador;
    use App\src\arquivo_2\AdministradorSupremo;
    use Exception;

    class UsuarioFactory {
        public static function criar(string $perfil): Usuario {
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