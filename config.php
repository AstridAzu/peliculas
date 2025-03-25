
// Definir entorno (desarrollo o producción)
define('ENVIRONMENT', 'development'); // Cambiar a 'production' en producción

// Configuración según el entorno
if (ENVIRONMENT === 'development') {
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '123456');
    define('DB_NAME', 'rockstar');
    define('DEBUG', true);
} else {
    define('DB_HOST', 'tu_host_produccion');
    define('DB_USER', 'tu_usuario_produccion');
    define('DB_PASS', 'tu_contraseña_produccion');
    define('DB_NAME', 'tu_base_de_datos_produccion');
    define('DEBUG', false);
}

// Conectar a la base de datos
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Configurar el conjunto de caracteres
$conexion->set_charset("utf8");

// Mostrar errores en desarrollo
if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

?>
