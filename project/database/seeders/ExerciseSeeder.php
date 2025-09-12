<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // NIVEL BÁSICO - Ejercicios 1-10
        // Ejercicio 1
        Exercise::create([
            'level' => 1,
            'order' => 1,
            'title' => 'Variables y Tipos de Datos',
            'description' => 'Aprende a declarar variables y los diferentes tipos de datos en PHP.',
            'instructions' => 'Declara tres variables: $nombre con tu nombre (string), $edad con tu edad (entero) y $altura con tu altura en metros (decimal).',
            'initial_code' => "<?php\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\n\$nombre = 'Juan';\n\$edad = 25;\n\$altura = 1.75;\n",
        ]);
        // Ejercicio 2
        Exercise::create([
            'level' => 1,
            'order' => 2,
            'title' => 'Operadores Aritméticos',
            'description' => 'Aprende a realizar operaciones matemáticas básicas en PHP.',
            'instructions' => 'Crea dos variables $a = 10 y $b = 5, luego crea variables para mostrar la suma, resta, multiplicación y división de ambas.',
            'initial_code' => "<?php\n\$a = 10;\n\$b = 5;\n\n// Completa el código\n",
            'solution_code' => "<?php\n\$a = 10;\n\$b = 5;\n\n\$suma = \$a + \$b;\n\$resta = \$a - \$b;\n\$multiplicacion = \$a * \$b;\n\$division = \$a / \$b;\n",
        ]);
        // Ejercicio 3
        Exercise::create([
            'level' => 1,
            'order' => 3,
            'title' => 'Condicionales If-Else',
            'description' => 'Aprende a utilizar estructuras condicionales para tomar decisiones en tu código.',
            'instructions' => 'Crea una variable $edad con un valor numérico. Escribe una estructura if-else que muestre "Mayor de edad" si $edad es mayor o igual a 18, o "Menor de edad" si es menor.',
            'initial_code' => "<?php\n\$edad = 20;\n\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\n\$edad = 20;\n\nif (\$edad >= 18) {\n    echo \"Mayor de edad\";\n} else {\n    echo \"Menor de edad\";\n}\n",
        ]);
        // Ejercicio 4
        Exercise::create([
            'level' => 1,
            'order' => 4,
            'title' => 'Bucles For',
            'description' => 'Aprende a utilizar bucles for para repetir código un número determinado de veces.',
            'instructions' => 'Crea un bucle for que muestre los números del 1 al 10 (utiliza echo para mostrar cada número).',
            'initial_code' => "<?php\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\nfor (\$i = 1; \$i <= 10; \$i++) {\n    echo \$i . \"\\n\";\n}\n",
        ]);
        // Ejercicio 5
        Exercise::create([
            'level' => 1,
            'order' => 5,
            'title' => 'Bucles While',
            'description' => 'Aprende a utilizar bucles while para repetir código mientras se cumpla una condición.',
            'instructions' => 'Crea una variable $contador con valor 1 y un bucle while que muestre los números del 1 al 5 (utiliza echo).',
            'initial_code' => "<?php\n\$contador = 1;\n\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\n\$contador = 1;\n\nwhile (\$contador <= 5) {\n    echo \$contador . \"\\n\";\n    \$contador++;\n}\n",
        ]);
        // NIVEL INTERMEDIO - Ejercicios 6-10
        // Ejercicio 6
        Exercise::create([
            'level' => 2,
            'order' => 6,
            'title' => 'Arrays Indexados',
            'description' => 'Aprende a utilizar arrays para almacenar múltiples valores.',
            'instructions' => 'Crea un array $frutas con 4 frutas diferentes. Luego muestra el segundo elemento del array con echo.',
            'initial_code' => "<?php\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\n\$frutas = ['manzana', 'naranja', 'plátano', 'fresa'];\necho \$frutas[1];\n",
        ]);
        
        // Ejercicio 7
        Exercise::create([
            'level' => 2,
            'order' => 7,
            'title' => 'Arrays Asociativos',
            'description' => 'Aprende a utilizar arrays asociativos con pares clave-valor.',
            'instructions' => 'Crea un array asociativo $persona con las claves "nombre", "edad" y "ciudad" y asígnales valores. Luego muestra el valor de "ciudad".',
            'initial_code' => "<?php\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\n\$persona = [\n    'nombre' => 'María',\n    'edad' => 30,\n    'ciudad' => 'Barcelona'\n];\n\necho \$persona['ciudad'];\n",
        ]);
        
        // Ejercicio 8
        Exercise::create([
            'level' => 2,
            'order' => 8,
            'title' => 'Funciones',
            'description' => 'Aprende a crear y usar funciones para reutilizar código.',
            'instructions' => 'Crea una función llamada "suma" que reciba dos parámetros y devuelva su suma. Luego llama a la función con los valores 5 y 7 y muestra el resultado.',
            'initial_code' => "<?php\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\nfunction suma(\$a, \$b) {\n    return \$a + \$b;\n}\n\n\$resultado = suma(5, 7);\necho \$resultado;\n",
        ]);
        
        // Ejercicio 9
        Exercise::create([
            'level' => 2,
            'order' => 9,
            'title' => 'Bucle Foreach con Arrays',
            'description' => 'Aprende a recorrer arrays utilizando el bucle foreach.',
            'instructions' => 'Crea un array $colores con 4 colores. Utiliza un bucle foreach para mostrar cada color en una línea separada.',
            'initial_code' => "<?php\n\$colores = ['rojo', 'azul', 'verde', 'amarillo'];\n\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\n\$colores = ['rojo', 'azul', 'verde', 'amarillo'];\n\nforeach (\$colores as \$color) {\n    echo \$color . \"\\n\";\n}\n",
        ]);
        
        // Ejercicio 10
        Exercise::create([
            'level' => 2,
            'order' => 10,
            'title' => 'Validación de Formularios',
            'description' => 'Aprende a validar datos de entrada en PHP.',
            'instructions' => 'Crea una función validarEmail que reciba un email y verifique si contiene un @ y un punto. Debe devolver true si es válido o false si no lo es.',
            'initial_code' => "<?php\n// Escribe tu función aquí\n\n// Prueba con estos ejemplos\n\$email1 = 'usuario@ejemplo.com';\n\$email2 = 'usuarioejemplo.com';\n",
            'solution_code' => "<?php\nfunction validarEmail(\$email) {\n    return (strpos(\$email, '@') !== false && strpos(\$email, '.') !== false);\n}\n\n\$email1 = 'usuario@ejemplo.com';\n\$email2 = 'usuarioejemplo.com';\n\nvar_dump(validarEmail(\$email1)); // true\nvar_dump(validarEmail(\$email2)); // false\n",
        ]);
        
        // NIVEL AVANZADO BÁSICO - Ejercicios 11-15
        
        // Ejercicio 11
        Exercise::create([
            'level' => 3,
            'order' => 11,
            'title' => 'Clases y Objetos',
            'description' => 'Introducción a la programación orientada a objetos en PHP.',
            'instructions' => 'Crea una clase Rectangulo con propiedades $ancho y $alto, un método constructor y un método calcularArea() que devuelva el área. Crea un objeto e imprime su área.',
            'initial_code' => "<?php\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\nclass Rectangulo {\n    public \$ancho;\n    public \$alto;\n    \n    public function __construct(\$ancho, \$alto) {\n        \$this->ancho = \$ancho;\n        \$this->alto = \$alto;\n    }\n    \n    public function calcularArea() {\n        return \$this->ancho * \$this->alto;\n    }\n}\n\n\$rectangulo = new Rectangulo(5, 3);\necho \"El área es: \" . \$rectangulo->calcularArea();\n",
        ]);
        
        // Ejercicio 12
        Exercise::create([
            'level' => 3,
            'order' => 12,
            'title' => 'Manejo de Excepciones',
            'description' => 'Aprende a utilizar try-catch para manejar errores en PHP.',
            'instructions' => 'Crea una función dividir que reciba dos números. Si el divisor es 0, debe lanzar una excepción. Usa try-catch para manejar la excepción y mostrar un mensaje de error.',
            'initial_code' => "<?php\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\nfunction dividir(\$a, \$b) {\n    if (\$b == 0) {\n        throw new Exception(\"No es posible dividir por cero\");\n    }\n    return \$a / \$b;\n}\n\ntry {\n    echo dividir(10, 2) . \"\\n\";\n    echo dividir(8, 0) . \"\\n\";\n} catch (Exception \$e) {\n    echo \"Error: \" . \$e->getMessage();\n}\n",
        ]);
        
        // Ejercicio 13
        Exercise::create([
            'level' => 3,
            'order' => 13,
            'title' => 'Funciones de Manipulación de Strings',
            'description' => 'Aprende a utilizar funciones de PHP para manipular strings.',
            'instructions' => 'Crea una función que reciba una frase y devuelva: 1) la frase en mayúsculas, 2) el número de caracteres y 3) la frase con las palabras en orden inverso.',
            'initial_code' => "<?php\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\nfunction analizarFrase(\$frase) {\n    \$mayusculas = strtoupper(\$frase);\n    \$longitud = strlen(\$frase);\n    \$palabras = explode(' ', \$frase);\n    \$palabrasInvertidas = array_reverse(\$palabras);\n    \$fraseInvertida = implode(' ', \$palabrasInvertidas);\n    \n    return [\n        'mayusculas' => \$mayusculas,\n        'longitud' => \$longitud,\n        'invertida' => \$fraseInvertida\n    ];\n}\n\n\$resultado = analizarFrase(\"Hola mundo PHP\");\nprint_r(\$resultado);\n",
        ]);
        
        // Ejercicio 14
        Exercise::create([
            'level' => 3,
            'order' => 14,
            'title' => 'Funciones Anónimas',
            'description' => 'Aprende a utilizar funciones anónimas (closures) en PHP.',
            'instructions' => 'Crea un array de números del 1 al 5. Usa array_map con una función anónima para multiplicar cada número por 2 y mostrar el resultado.',
            'initial_code' => "<?php\n\$numeros = [1, 2, 3, 4, 5];\n\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\n\$numeros = [1, 2, 3, 4, 5];\n\n\$resultado = array_map(function(\$numero) {\n    return \$numero * 2;\n}, \$numeros);\n\nprint_r(\$resultado);\n",
        ]);
        
        // Ejercicio 15
        Exercise::create([
            'level' => 3,
            'order' => 15,
            'title' => 'Herencia de Clases',
            'description' => 'Aprende a utilizar la herencia en programación orientada a objetos.',
            'instructions' => 'Crea una clase Vehículo con una propiedad $marca y un método mostrarMarca(). Luego crea una clase Coche que herede de Vehículo y agregue la propiedad $modelo y el método mostrarModelo().',
            'initial_code' => "<?php\n// Escribe tu código aquí\n",
            'solution_code' => "<?php\nclass Vehiculo {\n    protected \$marca;\n    \n    public function __construct(\$marca) {\n        \$this->marca = \$marca;\n    }\n    \n    public function mostrarMarca() {\n        return \"Marca: \" . \$this->marca;\n    }\n}\n\nclass Coche extends Vehiculo {\n    private \$modelo;\n    \n    public function __construct(\$marca, \$modelo) {\n        parent::__construct(\$marca);\n        \$this->modelo = \$modelo;\n    }\n    \n    public function mostrarModelo() {\n        return \"Modelo: \" . \$this->modelo;\n    }\n}\n\n\$miCoche = new Coche(\"Toyota\", \"Corolla\");\necho \$miCoche->mostrarMarca() . \"\\n\";\necho \$miCoche->mostrarModelo();\n",
        ]);
        
        // EJERCICIOS AVANZADOS DE POO - Ejercicios 16-25
        
        // Ejercicio 16
        Exercise::create([
            'level' => 4,
            'order' => 16,
            'title' => 'Inyección de Dependencias Básica',
            'description' => 'Aprende a utilizar inyección de dependencias para conectar clases entre sí.',
            'instructions' => 'Crea una clase Logger con un método registrar() que muestre un mensaje. Luego crea una clase Usuario que reciba un objeto Logger en su constructor y lo utilice en su método guardar().',
            'initial_code' => "<?php\n// Crea la clase Logger aquí\n\n// Crea la clase Usuario aquí\n\n// Código para crear las instancias y probar\n",
            'solution_code' => "<?php\nclass Logger {\n    public function registrar(\$mensaje) {\n        echo \"LOG: {\$mensaje}\\n\";\n    }\n}\n\nclass Usuario {\n    private \$logger;\n    private \$nombre;\n    \n    public function __construct(Logger \$logger, \$nombre) {\n        \$this->logger = \$logger;\n        \$this->nombre = \$nombre;\n    }\n    \n    public function guardar() {\n        \$this->logger->registrar(\"Usuario {\$this->nombre} guardado correctamente\");\n        return true;\n    }\n}\n\n// Creamos las instancias y probamos la funcionalidad\n\$logger = new Logger();\n\$usuario = new Usuario(\$logger, \"Ana\");\n\$usuario->guardar();\n",
        ]);
        
        // Ejercicio 17
        Exercise::create([
            'level' => 4,
            'order' => 17,
            'title' => 'Interfaces y Dependencias',
            'description' => 'Aprende a usar interfaces para desacoplar clases y permitir múltiples implementaciones.',
            'instructions' => 'Crea una interfaz LoggerInterface con un método registrar(). Luego crea dos clases que implementen esta interfaz: ConsoleLogger y FileLogger. Finalmente, crea una clase Producto que acepte cualquier implementación de LoggerInterface en su constructor.',
            'initial_code' => "<?php\n// Crea la interfaz LoggerInterface aquí\n\n// Crea las implementaciones ConsoleLogger y FileLogger aquí\n\n// Crea la clase Producto aquí\n\n// Código para probar\n",
            'solution_code' => "<?php\ninterface LoggerInterface {\n    public function registrar(\$mensaje);\n}\n\nclass ConsoleLogger implements LoggerInterface {\n    public function registrar(\$mensaje) {\n        echo \"CONSOLA: {\$mensaje}\\n\";\n    }\n}\n\nclass FileLogger implements LoggerInterface {\n    private \$archivo;\n    \n    public function __construct(\$archivo = 'log.txt') {\n        \$this->archivo = \$archivo;\n    }\n    \n    public function registrar(\$mensaje) {\n        echo \"ARCHIVO: Se registraría '{\$mensaje}' en {\$this->archivo}\\n\";\n        // En un caso real: file_put_contents(\$this->archivo, \$mensaje . PHP_EOL, FILE_APPEND);\n    }\n}\n\nclass Producto {\n    private \$logger;\n    private \$nombre;\n    private \$precio;\n    \n    public function __construct(LoggerInterface \$logger, \$nombre, \$precio) {\n        \$this->logger = \$logger;\n        \$this->nombre = \$nombre;\n        \$this->precio = \$precio;\n    }\n    \n    public function guardar() {\n        \$this->logger->registrar(\"Producto {\$this->nombre} con precio {\$this->precio} guardado\");\n        return true;\n    }\n}\n\n// Probamos con diferentes implementaciones\n\$consoleLogger = new ConsoleLogger();\n\$fileLogger = new FileLogger('productos.log');\n\n\$producto1 = new Producto(\$consoleLogger, \"Laptop\", 1200);\n\$producto1->guardar();\n\n\$producto2 = new Producto(\$fileLogger, \"Smartphone\", 800);\n\$producto2->guardar();\n",
        ]);
        
        // Ejercicio 18
        Exercise::create([
            'level' => 4,
            'order' => 18,
            'title' => 'Servicios Compartidos',
            'description' => 'Aprende a crear servicios compartidos que son utilizados por múltiples clases.',
            'instructions' => 'Crea una clase Database con un método query(). Luego crea dos clases: ProductoRepository y UsuarioRepository, ambas recibiendo la misma instancia de Database en su constructor. Finalmente, crea una clase TiendaService que utilice ambos repositorios.',
            'initial_code' => "<?php\n// Crea la clase Database aquí\n\n// Crea las clases ProductoRepository y UsuarioRepository aquí\n\n// Crea la clase TiendaService aquí\n\n// Código para probar\n",
            'solution_code' => "<?php\nclass Database {\n    public function query(\$sql) {\n        echo \"Ejecutando consulta: {\$sql}\\n\";\n        return []; // Simulando resultados\n    }\n}\n\nclass ProductoRepository {\n    private \$db;\n    \n    public function __construct(Database \$db) {\n        \$this->db = \$db;\n    }\n    \n    public function buscarPorId(\$id) {\n        return \$this->db->query(\"SELECT * FROM productos WHERE id = {\$id}\");\n    }\n    \n    public function guardar(\$producto) {\n        return \$this->db->query(\"INSERT INTO productos VALUES ('{\$producto}')\");\n    }\n}\n\nclass UsuarioRepository {\n    private \$db;\n    \n    public function __construct(Database \$db) {\n        \$this->db = \$db;\n    }\n    \n    public function buscarPorEmail(\$email) {\n        return \$this->db->query(\"SELECT * FROM usuarios WHERE email = '{\$email}'\");\n    }\n}\n\nclass TiendaService {\n    private \$productoRepository;\n    private \$usuarioRepository;\n    \n    public function __construct(ProductoRepository \$productoRepository, UsuarioRepository \$usuarioRepository) {\n        \$this->productoRepository = \$productoRepository;\n        \$this->usuarioRepository = \$usuarioRepository;\n    }\n    \n    public function procesarCompra(\$usuarioEmail, \$productoId) {\n        \$usuario = \$this->usuarioRepository->buscarPorEmail(\$usuarioEmail);\n        \$producto = \$this->productoRepository->buscarPorId(\$productoId);\n        \n        echo \"Procesando compra: Usuario {\$usuarioEmail} compra producto {\$productoId}\\n\";\n        return true;\n    }\n}\n\n// Creamos las dependencias y las inyectamos\n\$db = new Database();\n\$productoRepo = new ProductoRepository(\$db);\n\$usuarioRepo = new UsuarioRepository(\$db);\n\n\$tiendaService = new TiendaService(\$productoRepo, \$usuarioRepo);\n\$tiendaService->procesarCompra(\"cliente@ejemplo.com\", 42);\n",
        ]);
        
        // Ejercicio 19
        Exercise::create([
            'level' => 4,
            'order' => 19,
            'title' => 'Patrón Fábrica con Dependencias',
            'description' => 'Aprende a utilizar el patrón Factory para crear objetos con sus dependencias.',
            'instructions' => 'Crea una clase NotificadorFactory que pueda crear diferentes tipos de notificadores (Email, SMS). Cada notificador debe recibir en su constructor un Logger. Utiliza la fábrica para crear y usar notificadores.',
            'initial_code' => "<?php\n// Crea la clase Logger aquí\n\n// Crea las clases EmailNotificador y SMSNotificador aquí\n\n// Crea la clase NotificadorFactory aquí\n\n// Código para probar\n",
            'solution_code' => "<?php\nclass Logger {\n    public function log(\$mensaje) {\n        echo \"LOG: {\$mensaje}\\n\";\n    }\n}\n\ninterface Notificador {\n    public function enviar(\$destinatario, \$mensaje);\n}\n\nclass EmailNotificador implements Notificador {\n    private \$logger;\n    \n    public function __construct(Logger \$logger) {\n        \$this->logger = \$logger;\n    }\n    \n    public function enviar(\$destinatario, \$mensaje) {\n        \$this->logger->log(\"Enviando email a {\$destinatario}\");\n        echo \"EMAIL ENVIADO A: {\$destinatario}, MENSAJE: {\$mensaje}\\n\";\n        return true;\n    }\n}\n\nclass SMSNotificador implements Notificador {\n    private \$logger;\n    \n    public function __construct(Logger \$logger) {\n        \$this->logger = \$logger;\n    }\n    \n    public function enviar(\$destinatario, \$mensaje) {\n        \$this->logger->log(\"Enviando SMS a {\$destinatario}\");\n        echo \"SMS ENVIADO A: {\$destinatario}, MENSAJE: {\$mensaje}\\n\";\n        return true;\n    }\n}\n\nclass NotificadorFactory {\n    private \$logger;\n    \n    public function __construct(Logger \$logger) {\n        \$this->logger = \$logger;\n    }\n    \n    public function crear(\$tipo) {\n        switch (\$tipo) {\n            case 'email':\n                return new EmailNotificador(\$this->logger);\n            case 'sms':\n                return new SMSNotificador(\$this->logger);\n            default:\n                throw new Exception(\"Tipo de notificador no válido: {\$tipo}\");\n        }\n    }\n}\n\n// Probamos la fábrica\n\$logger = new Logger();\n\$factory = new NotificadorFactory(\$logger);\n\n\$emailNotificador = \$factory->crear('email');\n\$emailNotificador->enviar('usuario@ejemplo.com', 'Hola desde el sistema');\n\n\$smsNotificador = \$factory->crear('sms');\n\$smsNotificador->enviar('612345678', 'Notificación urgente');\n",
        ]);
        
        // Ejercicio 20
        Exercise::create([
            'level' => 4,
            'order' => 20,
            'title' => 'Contenedor de Dependencias Simple',
            'description' => 'Aprende a crear un contenedor básico de inyección de dependencias.',
            'instructions' => 'Crea una clase Container que permita registrar y resolver dependencias. Luego úsala para gestionar las dependencias de un sistema de productos y pedidos.',
            'initial_code' => "<?php\n// Crea la clase Container aquí\n\n// Crea las clases ProductoService y PedidoService con sus dependencias\n\n// Código para probar\n",
            'solution_code' => "<?php\nclass Container {\n    private \$servicios = [];\n    \n    public function registrar(\$nombre, \$callback) {\n        \$this->servicios[\$nombre] = \$callback;\n    }\n    \n    public function resolver(\$nombre) {\n        if (!isset(\$this->servicios[\$nombre])) {\n            throw new Exception(\"Servicio no encontrado: {\$nombre}\");\n        }\n        \n        return call_user_func(\$this->servicios[\$nombre], \$this);\n    }\n}\n\nclass Database {\n    public function query(\$sql) {\n        echo \"Ejecutando: {\$sql}\\n\";\n        return [];\n    }\n}\n\nclass Logger {\n    public function log(\$mensaje) {\n        echo \"LOG: {\$mensaje}\\n\";\n    }\n}\n\nclass ProductoService {\n    private \$db;\n    private \$logger;\n    \n    public function __construct(Database \$db, Logger \$logger) {\n        \$this->db = \$db;\n        \$this->logger = \$logger;\n    }\n    \n    public function crear(\$nombre, \$precio) {\n        \$this->logger->log(\"Creando producto: {\$nombre}\");\n        \$this->db->query(\"INSERT INTO productos VALUES ('{\$nombre}', {\$precio})\");\n        return true;\n    }\n}\n\nclass PedidoService {\n    private \$db;\n    private \$productoService;\n    \n    public function __construct(Database \$db, ProductoService \$productoService) {\n        \$this->db = \$db;\n        \$this->productoService = \$productoService;\n    }\n    \n    public function crearPedido(\$usuario, \$productos) {\n        \$this->db->query(\"INSERT INTO pedidos (usuario) VALUES ('{\$usuario}')\");\n        echo \"Pedido creado para {\$usuario} con \" . count(\$productos) . \" productos\\n\";\n        return true;\n    }\n}\n\n// Configuramos el contenedor\n\$container = new Container();\n\n// Registramos los servicios\n\$container->registrar('database', function() {\n    return new Database();\n});\n\n\$container->registrar('logger', function() {\n    return new Logger();\n});\n\n\$container->registrar('producto_service', function(\$container) {\n    return new ProductoService(\n        \$container->resolver('database'),\n        \$container->resolver('logger')\n    );\n});\n\n\$container->registrar('pedido_service', function(\$container) {\n    return new PedidoService(\n        \$container->resolver('database'),\n        \$container->resolver('producto_service')\n    );\n});\n\n// Usamos los servicios\n\$productoService = \$container->resolver('producto_service');\n\$productoService->crear('Tablet', 299);\n\n\$pedidoService = \$container->resolver('pedido_service');\n\$pedidoService->crearPedido('cliente@ejemplo.com', ['Tablet', 'Funda']);\n",
        ]);
        
        // Ejercicio 21
        Exercise::create([
            'level' => 5,
            'order' => 21,
            'title' => 'Patrón Observador con Dependencias',
            'description' => 'Implementa el patrón Observer donde varios observadores dependen de un sujeto.',
            'instructions' => 'Crea una clase Producto que pueda ser observada. Luego crea clases Observador como StockObserver y LogObserver que reciban dependencias en su constructor. Notifica a los observadores cuando el precio de un producto cambia.',
            'initial_code' => "<?php\n// Crea las interfaces SujetoObservable y Observador aquí\n\n// Crea la clase Producto (sujeto observable) aquí\n\n// Crea las clases de observadores aquí\n\n// Código para probar\n",
            'solution_code' => "<?php\ninterface SujetoObservable {\n    public function agregarObservador(Observador \$observador);\n    public function eliminarObservador(Observador \$observador);\n    public function notificarObservadores();\n}\n\ninterface Observador {\n    public function actualizar(SujetoObservable \$sujeto);\n}\n\nclass Logger {\n    public function log(\$mensaje) {\n        echo \"LOG: {\$mensaje}\\n\";\n    }\n}\n\nclass EmailService {\n    public function enviarEmail(\$destinatario, \$asunto, \$mensaje) {\n        echo \"EMAIL a {\$destinatario}: {\$asunto} - {\$mensaje}\\n\";\n    }\n}\n\nclass Producto implements SujetoObservable {\n    private \$nombre;\n    private \$precio;\n    private \$observadores = [];\n    \n    public function __construct(\$nombre, \$precio) {\n        \$this->nombre = \$nombre;\n        \$this->precio = \$precio;\n    }\n    \n    public function getNombre() {\n        return \$this->nombre;\n    }\n    \n    public function getPrecio() {\n        return \$this->precio;\n    }\n    \n    public function setPrecio(\$precio) {\n        \$precioAnterior = \$this->precio;\n        \$this->precio = \$precio;\n        \n        if (\$precioAnterior != \$precio) {\n            \$this->notificarObservadores();\n        }\n    }\n    \n    public function agregarObservador(Observador \$observador) {\n        \$this->observadores[] = \$observador;\n    }\n    \n    public function eliminarObservador(Observador \$observador) {\n        \$key = array_search(\$observador, \$this->observadores, true);\n        if (\$key !== false) {\n            unset(\$this->observadores[\$key]);\n        }\n    }\n    \n    public function notificarObservadores() {\n        foreach (\$this->observadores as \$observador) {\n            \$observador->actualizar(\$this);\n        }\n    }\n}\n\nclass PrecioObserver implements Observador {\n    private \$logger;\n    \n    public function __construct(Logger \$logger) {\n        \$this->logger = \$logger;\n    }\n    \n    public function actualizar(SujetoObservable \$sujeto) {\n        if (\$sujeto instanceof Producto) {\n            \$this->logger->log(\"Precio de {{\$sujeto->getNombre()}} actualizado a: {\$sujeto->getPrecio()} €\");\n        }\n    }\n}\n\nclass MarketingObserver implements Observador {\n    private \$emailService;\n    private \$destinatarioMarketing;\n    \n    public function __construct(EmailService \$emailService, \$destinatarioMarketing) {\n        \$this->emailService = \$emailService;\n        \$this->destinatarioMarketing = \$destinatarioMarketing;\n    }\n    \n    public function actualizar(SujetoObservable \$sujeto) {\n        if (\$sujeto instanceof Producto) {\n            \$this->emailService->enviarEmail(\n                \$this->destinatarioMarketing,\n                \"Cambio de precio en producto\",\n                \"El producto {{\$sujeto->getNombre()}} ahora cuesta {\$sujeto->getPrecio()} €\"\n            );\n        }\n    }\n}\n\n// Creamos las dependencias\n\$logger = new Logger();\n\$emailService = new EmailService();\n\n// Creamos los observadores con sus dependencias\n\$precioObserver = new PrecioObserver(\$logger);\n\$marketingObserver = new MarketingObserver(\$emailService, \"marketing@ejemplo.com\");\n\n// Creamos el producto y registramos los observadores\n\$producto = new Producto(\"Smartphone XYZ\", 599);\n\$producto->agregarObservador(\$precioObserver);\n\$producto->agregarObservador(\$marketingObserver);\n\n// Cambiamos el precio y los observadores serán notificados\necho \"Cambiando precio del producto...\\n\";\n\$producto->setPrecio(549);\n",
        ]);
        
        // Ejercicio 22
        Exercise::create([
            'level' => 5,
            'order' => 22,
            'title' => 'Servicios Anidados con Dependencias',
            'description' => 'Aprende a trabajar con servicios que dependen de otros servicios, creando una cadena de dependencias.',
            'instructions' => 'Crea un sistema donde OrderService depende de CustomerService y ProductService. CustomerService depende de CustomerRepository, y ProductService depende de ProductRepository. Todos los repositorios dependen de DatabaseConnection.',
            'initial_code' => "<?php\n// Crea las clases de Repositorios y Database aquí\n\n// Crea las clases de Servicios aquí\n\n// Código para probar\n",
            'solution_code' => "<?php\nclass DatabaseConnection {\n    public function query(\$sql) {\n        echo \"Ejecutando SQL: {\$sql}\\n\";\n        return []; // Simulando resultados\n    }\n}\n\nclass CustomerRepository {\n    private \$db;\n    \n    public function __construct(DatabaseConnection \$db) {\n        \$this->db = \$db;\n    }\n    \n    public function findById(\$id) {\n        \$this->db->query(\"SELECT * FROM customers WHERE id = {\$id}\");\n        return ['id' => \$id, 'name' => 'Cliente ' . \$id]; // Datos simulados\n    }\n}\n\nclass ProductRepository {\n    private \$db;\n    \n    public function __construct(DatabaseConnection \$db) {\n        \$this->db = \$db;\n    }\n    \n    public function findById(\$id) {\n        \$this->db->query(\"SELECT * FROM products WHERE id = {\$id}\");\n        return ['id' => \$id, 'name' => 'Producto ' . \$id, 'price' => \$id * 10]; // Datos simulados\n    }\n}\n\nclass CustomerService {\n    private \$customerRepository;\n    \n    public function __construct(CustomerRepository \$customerRepository) {\n        \$this->customerRepository = \$customerRepository;\n    }\n    \n    public function getCustomer(\$id) {\n        return \$this->customerRepository->findById(\$id);\n    }\n    \n    public function validateCustomer(\$customerId) {\n        echo \"Validando cliente {\$customerId}...\\n\";\n        return true; // Simulando validación\n    }\n}\n\nclass ProductService {\n    private \$productRepository;\n    \n    public function __construct(ProductRepository \$productRepository) {\n        \$this->productRepository = \$productRepository;\n    }\n    \n    public function getProduct(\$id) {\n        return \$this->productRepository->findById(\$id);\n    }\n    \n    public function checkStock(\$productId, \$quantity) {\n        echo \"Verificando stock del producto {\$productId} (cantidad: {\$quantity})...\\n\";\n        return true; // Simulando verificación\n    }\n}\n\nclass OrderService {\n    private \$customerService;\n    private \$productService;\n    private \$db;\n    \n    public function __construct(\n        CustomerService \$customerService, \n        ProductService \$productService,\n        DatabaseConnection \$db\n    ) {\n        \$this->customerService = \$customerService;\n        \$this->productService = \$productService;\n        \$this->db = \$db;\n    }\n    \n    public function createOrder(\$customerId, \$items) {\n        // Validar cliente\n        if (!\$this->customerService->validateCustomer(\$customerId)) {\n            throw new Exception(\"Cliente no válido\");\n        }\n        \n        // Verificar stock de productos\n        foreach (\$items as \$item) {\n            if (!\$this->productService->checkStock(\$item['product_id'], \$item['quantity'])) {\n                throw new Exception(\"Stock insuficiente para el producto {\$item['product_id']}\");\n            }\n        }\n        \n        // Crear pedido\n        \$this->db->query(\"INSERT INTO orders (customer_id) VALUES ({\$customerId})\");\n        \$orderId = 1001; // Simulando ID generado\n        \n        // Insertar detalles del pedido\n        foreach (\$items as \$item) {\n            \$this->db->query(\"INSERT INTO order_items (order_id, product_id, quantity) VALUES ({\$orderId}, {\$item['product_id']}, {\$item['quantity']})\");\n        }\n        \n        echo \"Pedido {\$orderId} creado con éxito para el cliente {\$customerId}\\n\";\n        return \$orderId;\n    }\n}\n\n// Creando las dependencias en orden\n\$db = new DatabaseConnection();\n\n\$customerRepo = new CustomerRepository(\$db);\n\$productRepo = new ProductRepository(\$db);\n\n\$customerService = new CustomerService(\$customerRepo);\n\$productService = new ProductService(\$productRepo);\n\n\$orderService = new OrderService(\$customerService, \$productService, \$db);\n\n// Probando el sistema\n\$items = [\n    ['product_id' => 101, 'quantity' => 2],\n    ['product_id' => 203, 'quantity' => 1]\n];\n\n\$orderService->createOrder(42, \$items);\n",
        ]);
        
        // Ejercicio 23
        Exercise::create([
            'level' => 5,
            'order' => 23,
            'title' => 'Decorador con Inyección de Dependencias',
            'description' => 'Aprende a implementar el patrón Decorator con inyección de dependencias.',
            'instructions' => 'Crea una interfaz NotificacionService con un método enviar(). Luego implementa NotificacionEmail y varios decoradores como LogDecorator y NotificacionDecorator que añadan funcionalidades adicionales.',
            'initial_code' => "<?php\n// Crea la interfaz NotificacionService aquí\n\n// Crea la clase base y los decoradores aquí\n\n// Código para probar\n",
            'solution_code' => "<?php\ninterface NotificacionService {\n    public function enviar(\$destinatario, \$mensaje);\n}\n\nclass Logger {\n    public function log(\$mensaje) {\n        echo \"LOG: {\$mensaje}\\n\";\n    }\n}\n\nclass EmailNotificacionService implements NotificacionService {\n    public function enviar(\$destinatario, \$mensaje) {\n        echo \"Enviando email a {\$destinatario}: {\$mensaje}\\n\";\n        return true;\n    }\n}\n\nclass LogNotificacionDecorator implements NotificacionService {\n    private \$notificacionService;\n    private \$logger;\n    \n    public function __construct(NotificacionService \$notificacionService, Logger \$logger) {\n        \$this->notificacionService = \$notificacionService;\n        \$this->logger = \$logger;\n    }\n    \n    public function enviar(\$destinatario, \$mensaje) {\n        \$this->logger->log(\"Enviando notificación a {\$destinatario}\");\n        \$resultado = \$this->notificacionService->enviar(\$destinatario, \$mensaje);\n        \$this->logger->log(\"Notificación enviada a {\$destinatario}\");\n        \n        return \$resultado;\n    }\n}\n\nclass FormatoHTMLDecorator implements NotificacionService {\n    private \$notificacionService;\n    \n    public function __construct(NotificacionService \$notificacionService) {\n        \$this->notificacionService = \$notificacionService;\n    }\n    \n    public function enviar(\$destinatario, \$mensaje) {\n        \$mensajeHTML = \"<html><body><h1>Notificación</h1><p>{\$mensaje}</p></body></html>\";\n        return \$this->notificacionService->enviar(\$destinatario, \$mensajeHTML);\n    }\n}\n\nclass ReintentarDecorator implements NotificacionService {\n    private \$notificacionService;\n    private \$intentosMaximos;\n    \n    public function __construct(NotificacionService \$notificacionService, \$intentosMaximos = 3) {\n        \$this->notificacionService = \$notificacionService;\n        \$this->intentosMaximos = \$intentosMaximos;\n    }\n    \n    public function enviar(\$destinatario, \$mensaje) {\n        \$intentos = 0;\n        \$exito = false;\n        \n        while (!\$exito && \$intentos < \$this->intentosMaximos) {\n            \$intentos++;\n            echo \"Intento {\$intentos} de {\$this->intentosMaximos}\\n\";\n            \n            try {\n                \$exito = \$this->notificacionService->enviar(\$destinatario, \$mensaje);\n            } catch (Exception \$e) {\n                echo \"Error en intento {\$intentos}: {\$e->getMessage()}\\n\";\n                if (\$intentos >= \$this->intentosMaximos) {\n                    throw \$e; // Relanzar la excepción si agotamos los intentos\n                }\n            }\n            \n            if (\$exito) {\n                break;\n            }\n        }\n        \n        return \$exito;\n    }\n}\n\n// Creamos las dependencias\n\$logger = new Logger();\n\$emailService = new EmailNotificacionService();\n\n// Decoramos el servicio base con múltiples decoradores\n\$servicioConLog = new LogNotificacionDecorator(\$emailService, \$logger);\n\$servicioConHTML = new FormatoHTMLDecorator(\$servicioConLog);\n\$servicioCompleto = new ReintentarDecorator(\$servicioConHTML);\n\n// Usamos el servicio decorado\necho \"Enviando notificación...\\n\";\n\$servicioCompleto->enviar(\"usuario@ejemplo.com\", \"Este es un mensaje importante\");\n",
        ]);
        
        // Ejercicio 24
        Exercise::create([
            'level' => 5,
            'order' => 24,
            'title' => 'Estrategia con Inyección de Dependencias',
            'description' => 'Implementa el patrón Strategy utilizando inyección de dependencias.',
            'instructions' => 'Crea un sistema de pagos donde PaymentProcessor acepta diferentes estrategias de pago (PayPal, CreditCard) en su constructor. Cada estrategia depende de un servicio de validación y un logger.',
            'initial_code' => "<?php\n// Crea las interfaces y clases base aquí\n\n// Crea las estrategias de pago aquí\n\n// Crea el procesador de pagos aquí\n\n// Código para probar\n",
            'solution_code' => "<?php\ninterface PaymentStrategy {\n    public function pagar(\$monto);\n}\n\nclass ValidationService {\n    public function validar(\$datos) {\n        echo \"Validando datos: \" . json_encode(\$datos) . \"\\n\";\n        return true; // Simulando validación\n    }\n}\n\nclass Logger {\n    public function log(\$mensaje) {\n        echo \"LOG: {\$mensaje}\\n\";\n    }\n}\n\nclass PayPalStrategy implements PaymentStrategy {\n    private \$validationService;\n    private \$logger;\n    private \$email;\n    \n    public function __construct(ValidationService \$validationService, Logger \$logger, \$email) {\n        \$this->validationService = \$validationService;\n        \$this->logger = \$logger;\n        \$this->email = \$email;\n    }\n    \n    public function pagar(\$monto) {\n        \$this->logger->log(\"Iniciando pago con PayPal por {\$monto}€\");\n        \n        // Validar cuenta de PayPal\n        \$datosValidacion = ['email' => \$this->email];\n        if (!\$this->validationService->validar(\$datosValidacion)) {\n            throw new Exception(\"Error de validación de PayPal\");\n        }\n        \n        echo \"Procesando pago de {\$monto}€ con PayPal (cuenta: {\$this->email})\\n\";\n        \$this->logger->log(\"Pago con PayPal completado\");\n        \n        return true;\n    }\n}\n\nclass CreditCardStrategy implements PaymentStrategy {\n    private \$validationService;\n    private \$logger;\n    private \$numero;\n    private \$cvv;\n    \n    public function __construct(ValidationService \$validationService, Logger \$logger, \$numero, \$cvv) {\n        \$this->validationService = \$validationService;\n        \$this->logger = \$logger;\n        \$this->numero = \$numero;\n        \$this->cvv = \$cvv;\n    }\n    \n    public function pagar(\$monto) {\n        \$this->logger->log(\"Iniciando pago con tarjeta por {\$monto}€\");\n        \n        // Validar tarjeta\n        \$datosValidacion = [\n            'numero' => \$this->numero,\n            'cvv' => \$this->cvv\n        ];\n        \n        if (!\$this->validationService->validar(\$datosValidacion)) {\n            throw new Exception(\"Error de validación de tarjeta\");\n        }\n        \n        echo \"Procesando pago de {\$monto}€ con tarjeta (número: **** \" . substr(\$this->numero, -4) . \")\\n\";\n        \$this->logger->log(\"Pago con tarjeta completado\");\n        \n        return true;\n    }\n}\n\nclass PaymentProcessor {\n    private \$strategy;\n    \n    public function __construct(PaymentStrategy \$strategy) {\n        \$this->strategy = \$strategy;\n    }\n    \n    public function setStrategy(PaymentStrategy \$strategy) {\n        \$this->strategy = \$strategy;\n    }\n    \n    public function procesarPago(\$monto) {\n        return \$this->strategy->pagar(\$monto);\n    }\n}\n\n// Creamos las dependencias comunes\n\$validationService = new ValidationService();\n\$logger = new Logger();\n\n// Creamos las estrategias con sus dependencias\n\$paypalStrategy = new PayPalStrategy(\$validationService, \$logger, \"cliente@ejemplo.com\");\n\$creditCardStrategy = new CreditCardStrategy(\$validationService, \$logger, \"1234567890123456\", \"123\");\n\n// Creamos el procesador con una estrategia inicial\n\$processor = new PaymentProcessor(\$paypalStrategy);\n\n// Procesamos un pago con PayPal\necho \"--- Pago con PayPal ---\\n\";\n\$processor->procesarPago(99.95);\n\n// Cambiamos la estrategia y procesamos otro pago\necho \"\\n--- Pago con Tarjeta ---\\n\";\n\$processor->setStrategy(\$creditCardStrategy);\n\$processor->procesarPago(149.99);\n",
        ]);
        
        // Ejercicio 25
        Exercise::create([
            'level' => 5,
            'order' => 25,
            'title' => 'Eventos y Listeners con Dependencias',
            'description' => 'Implementa un sistema de eventos donde los listeners reciben sus dependencias por inyección.',
            'instructions' => 'Crea un sistema donde EventDispatcher envía eventos a diferentes listeners. Cada listener debe recibir servicios como EmailService, Logger o NotificationService en su constructor.',
            'initial_code' => "<?php\n// Crea las clases de Eventos aquí\n\n// Crea el EventDispatcher aquí\n\n// Crea los Listeners aquí\n\n// Código para probar\n",
            'solution_code' => "<?php\nclass Event {\n    private \$nombre;\n    private \$datos;\n    \n    public function __construct(\$nombre, \$datos = []) {\n        \$this->nombre = \$nombre;\n        \$this->datos = \$datos;\n    }\n    \n    public function getNombre() {\n        return \$this->nombre;\n    }\n    \n    public function getDatos() {\n        return \$this->datos;\n    }\n}\n\nclass OrderCreatedEvent extends Event {\n    public function __construct(\$orderId, \$customerEmail, \$total) {\n        parent::__construct('order.created', [\n            'order_id' => \$orderId,\n            'customer_email' => \$customerEmail,\n            'total' => \$total\n        ]);\n    }\n}\n\ninterface EventListener {\n    public function handle(Event \$event);\n}\n\nclass EventDispatcher {\n    private \$listeners = [];\n    \n    public function addListener(\$eventName, EventListener \$listener) {\n        if (!isset(\$this->listeners[\$eventName])) {\n            \$this->listeners[\$eventName] = [];\n        }\n        \n        \$this->listeners[\$eventName][] = \$listener;\n    }\n    \n    public function dispatch(Event \$event) {\n        \$eventName = \$event->getNombre();\n        \n        if (!isset(\$this->listeners[\$eventName])) {\n            return;\n        }\n        \n        foreach (\$this->listeners[\$eventName] as \$listener) {\n            \$listener->handle(\$event);\n        }\n    }\n}\n\nclass Logger {\n    public function log(\$mensaje) {\n        echo \"LOG: {\$mensaje}\\n\";\n    }\n}\n\nclass EmailService {\n    public function send(\$to, \$subject, \$body) {\n        echo \"EMAIL a {\$to}: {\$subject} - {\$body}\\n\";\n    }\n}\n\nclass NotificationService {\n    public function notify(\$userId, \$mensaje) {\n        echo \"NOTIFICACIÓN para usuario {\$userId}: {\$mensaje}\\n\";\n    }\n}\n\nclass OrderConfirmationListener implements EventListener {\n    private \$emailService;\n    \n    public function __construct(EmailService \$emailService) {\n        \$this->emailService = \$emailService;\n    }\n    \n    public function handle(Event \$event) {\n        \$datos = \$event->getDatos();\n        \n        if (isset(\$datos['customer_email']) && isset(\$datos['order_id'])) {\n            \$this->emailService->send(\n                \$datos['customer_email'],\n                \"Confirmación de pedido #{{\$datos['order_id']}}\",\n                \"Gracias por tu pedido #{{\$datos['order_id']}} por un total de {{\$datos['total']}}€.\"\n            );\n        }\n    }\n}\n\nclass OrderLoggerListener implements EventListener {\n    private \$logger;\n    \n    public function __construct(Logger \$logger) {\n        \$this->logger = \$logger;\n    }\n    \n    public function handle(Event \$event) {\n        \$datos = \$event->getDatos();\n        \$this->logger->log(\"Nuevo pedido creado: \" . json_encode(\$datos));\n    }\n}\n\nclass AdminNotificationListener implements EventListener {\n    private \$notificationService;\n    private \$logger;\n    \n    public function __construct(NotificationService \$notificationService, Logger \$logger) {\n        \$this->notificationService = \$notificationService;\n        \$this->logger = \$logger;\n    }\n    \n    public function handle(Event \$event) {\n        \$datos = \$event->getDatos();\n        \$this->logger->log(\"Preparando notificación para administradores\");\n        \n        // Notificar a varios administradores (en un caso real, se obtendrían de la base de datos)\n        \$adminIds = [1, 5, 10];\n        \n        foreach (\$adminIds as \$adminId) {\n            \$this->notificationService->notify(\n                \$adminId,\n                \"Nuevo pedido #{{\$datos['order_id']}} por {{\$datos['total']}}€\"\n            );\n        }\n    }\n}\n\n// Creamos las dependencias\n\$logger = new Logger();\n\$emailService = new EmailService();\n\$notificationService = new NotificationService();\n\n// Creamos los listeners con sus dependencias inyectadas\n\$orderConfirmationListener = new OrderConfirmationListener(\$emailService);\n\$orderLoggerListener = new OrderLoggerListener(\$logger);\n\$adminNotificationListener = new AdminNotificationListener(\$notificationService, \$logger);\n\n// Configuramos el dispatcher y registramos los listeners\n\$dispatcher = new EventDispatcher();\n\$dispatcher->addListener('order.created', \$orderConfirmationListener);\n\$dispatcher->addListener('order.created', \$orderLoggerListener);\n\$dispatcher->addListener('order.created', \$adminNotificationListener);\n\n// Creamos y despachamos un evento\necho \"Creando un nuevo pedido...\\n\";\n\$orderEvent = new OrderCreatedEvent(1001, \"cliente@ejemplo.com\", 129.99);\n\$dispatcher->dispatch(\$orderEvent);\n",
        ]);
    }
}