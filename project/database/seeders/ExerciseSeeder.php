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
    }
}