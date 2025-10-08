<?php
        //- Tipos de Comentarios

        // de una linea
        #  de una linea
        /*
            de varias lineas
        */

        $myName = "Pedro";
        echo "Hello ${myName}";     //* interpolación
    
        //- Declaracion de variables y Tipos

        $variable = "valor";        //* Declaración y Inicialización

        //int             //* Entero
        //float         //* números decimales
        //string          //* cadena de texto
        //bool            //* booleano
        //array           //* array
        //object          //* objecto

        echo gettype($variable);    //* Ver tipo de variable
        is_string($myName);         //* Comprueba si es un String (Respuesta en Booleano)
        $entero = (int) "10";       //* Convierte string a entero (Casting)

        //- Visualización de variable y Resultados

    //? echo ---> Para mostrar 1 o mas strings o valores 
        $nombre = "Pedro";
        echo "hola" . $nombre;      //* Salida: hola Pedro
        echo 123;                   //* Salido: 123
    
    //? print_r() ---> Imprime info legible de una variable (uso en array y objetos)
        $frutas = ['manzana','pera','uva'];
        print_r($frutas);
        //* Salida:
        /*  Array
            (
            [0] => manzana
            [1] => pera
            [2] => uva
            )
        */

    //? var_dump  ---> Muestra info estructurada (incluye tipo, valor, longitud de cadena, nº elementos en array,etc)
        $edad = 30;
        var_dump($edad);        //* Salida: int(30)
        $datos = ['nombre' => 'Ana', 'edad' => 25];
        var_dump($datos);
        //* Salida:
        /*  array(2) {
            ["nombre"]=> string(3) "Ana"
            ["edad"]=> int(25)
            }
        */
        //- Constantes --> Valor fijo inalterable

    //? define() ---> define('NOMBRE_CONSTANTE', valor); Nombre suele ir en MAYUSCULAS   
        define('TASA_IVA', 0.21);
        define('COLORES_PRIMARIOS', ['rojo','verde','azul']);    

    //? const   ---> const NOMBRE_CONSTANTE = valor;
        const PI = 3.14159;

        //- Operadores
    
    //? Aritméticos

    $a + $b;  //* Suma
    $a - $b;  //* Resta
    $a * $b;  //* Multiplicación
    $a / $b;  //* División
    $a % $b;  //* Módulo

    //? Comparación

    $a == $b;   //* Igual
    $a === $b;  //* Igual y del mismo tipo
    $a != $b;   //* Diferente
    $a !== $b;  //* Diferente y distinto tipo
    $a > $b;    //* Mayor que
    $a < $b;    //* Menor que

    //? Lógicos

    $a && $b;   //* AND lógico
    $a || $b;   //* OR lógico
    !$a;        //* Negación

    //? Operador Ternario
    //* Sintaxis:  (condicion) ? valor_si_verdadero : valor_si_falso
    $edad = 20;
    $estado = ($edad >= 18) ? "Mayor de edad" : "Menor de edad"; 
    echo $estado;   //* Salida: Mayor de edad 

        //- Estructuras de control

    //! Condicionales: if, else , elseif

    if ($a > $b) {
        echo "$a es mayor que $b";
    } elseif ($a == $b) {
        echo "$a es igual a $b";
    } else {
        echo "$a es menor que $b";
    }

    //! Switch case

    $color = "rojo";
    switch ($color) {
        case "rojo":
            echo "El color es rojo";
            break;
        case "azul":
            echo "El color es azul";
            break;
        default:
            echo "Color desconocido";
    }

    //! Bucles 

    //? While --> Repite bloque mientras condición se cumpla ( se evalua antes de cada iteración)

    $contador = 1; 
    while ($contador <= 3) { 
        echo "Contador: " . $contador . "\n"; 
        $contador++; 
    } 
    /* Salida: 
    Contador: 1 
    Contador: 2 
    Contador: 3 
    */ 

    //? do-while --> Repite bloque al menos 1 vez y luego continua repitiendo mientras codicion se cumpla
    //?              Condicion se evalua despues de cada iteración

    $i = 5; 
    do { 
        echo "Número: " . $i . "\n"; 
        $i++; 
    } while ($i < 5); 
    //* Salida: Número: 5 (se ejecuta al menos una vez) 

    //? For     --> Repite bloque un nº especifico de veces 

    for ($j = 0; $j < 3; $j++) { 
        echo "Iteración: " . $j . "\n"; 
    } 
    /* Salida: 
    Iteración: 0 
    Iteración: 1 
    Iteración: 2 
    */

    //? Foreach     --> Itera sobre elementos de array o colecciones. Mas sencilla de recorrer arrays

    $frutas = ['Manzana', 'Pera', 'Uva']; 
    foreach ($frutas as $fruta) { 
        echo "Me gusta la " . $fruta . ".\n"; 
    } 
    /* Salida: 
    Me gusta la Manzana. 
    Me gusta la Pera.
    Me gusta la Uva.  
    */
    
        //- Strings

    //? Declaración de strings

    //! Comillas simples: más rapidos porque PHP no busca variables dentro de ellas
    $saludo = 'Hola mundo';
    echo $saludo;       //* Salida: Hola mundo
    //! Comillas dobles: permite interpolación de variables e interpreta caracteres de escape
    $nombre = "Pedro";
    echo "Hola, $nombre\n";     //* Salida: Hola, Pedro (y un salto de linea)
    echo 'Hola, $nombre\n';     //* Salida: Hola, $nombre\n (no interpola ni interpreta escape)

    //? Métodos mas usados
    $nombre = "Pedro";
    $texto = "Hola Mundo PHP, ";
    $mensaje = $texto . " " . $nombre; //* Concatenacion ---> Salida: "Hola Mundo PHP, Pedro"

    //- Métodos básicas
    // strlen(): longitud de cadena
    echo strlen("Hola PHP"); // 8

    // trim(): elimina espacios al inicio y final
    echo trim("  Hola PHP  "); // "Hola PHP"

    // ltrim(): elimina espacios a la izquierda
    echo ltrim("   Hola"); // "Hola"

    // rtrim(): elimina espacios a la derecha
    echo rtrim("Hola   "); // "Hola"

    //- Conversión de mayúsculas/minúsculas
    // strtoupper(): todo a mayúsculas
    echo strtoupper("php es genial"); // "PHP ES GENIAL"

    // strtolower(): todo a minúsculas
    echo strtolower("PHP ES GENIAL"); // "php es genial"

    // ucfirst(): primera letra en mayúscula
    echo ucfirst("hola mundo"); // "Hola mundo"

    // ucwords(): primera letra de cada palabra
    echo ucwords("hola mundo desde php"); // "Hola Mundo Desde Php"

    //- Reemplazo y manipulación
    // str_replace(): reemplaza texto
    echo str_replace("Java", "PHP", "Me gusta Java"); // "Me gusta PHP"

    // substr(): extrae parte del texto
    echo substr("Programar en PHP", 0, 9); // "Programar"

    // strrev(): invierte el texto
    echo strrev("PHP"); // "PHP" (igual), "Hola" → "aloH"

    // str_repeat(): repite texto
    echo str_repeat("Ha", 3); // "HaHaHa"

    // str_pad(): rellena texto
    echo str_pad("5", 3, "0", STR_PAD_LEFT); // "005"

    // substr_replace(): reemplaza una parte del texto
    echo substr_replace("Hola Mundo", "PHP", 5, 5); // "Hola PHP"

    //- Búsqueda
    // strpos(): posición de la primera aparición
    echo strpos("Aprender PHP es fácil", "PHP"); // 9

    // strrpos(): posición de la última aparición
    echo strrpos("PHP y más PHP", "PHP"); // 8

    // str_contains(): verifica si contiene (PHP 8+)
    var_dump(str_contains("Hola PHP", "PHP")); // true

    // str_starts_with(): empieza con... (PHP 8+)
    var_dump(str_starts_with("Hola Mundo", "Hola")); // true

    // str_ends_with(): termina con... (PHP 8+)
    var_dump(str_ends_with("archivo.txt", ".txt")); // true

    //- Dividir y unir cadenas
    // explode(): separa una cadena en array
    $colores = explode(",", "rojo,verde,azul");
    print_r($colores); // ['rojo', 'verde', 'azul']

    // implode(): une array en texto
    echo implode(" - ", $colores); // "rojo - verde - azul"

    // join(): alias de implode()
    echo join(" / ", $colores); // "rojo / verde / azul"

    //- Comparación y análisis
    // strcmp(): compara (sensible a mayúsculas)
    echo strcmp("Hola", "hola"); // ≠ 0 → diferente

    // strcasecmp(): compara (no sensible a mayúsculas)
    echo strcasecmp("Hola", "hola"); // 0 → igual

    // strnatcmp(): comparación natural
    $val1 = "img2";
    $val2 = "img10";
    echo strnatcmp($val1, $val2); // negativo (img2 < img10)

    // similar_text(): porcentaje de similitud
    similar_text("casa", "caso", $porcentaje);
    echo $porcentaje; // 75

    //- Codificación y seguridad
    // htmlspecialchars(): convierte caracteres especiales
    echo htmlspecialchars("<b>Hola</b>"); // "&lt;b&gt;Hola&lt;/b&gt;"

    // addslashes(): escapa comillas
    echo addslashes("O'Reilly"); // "O\'Reilly"

    //? Formateo de Cadenas con printf() y sprintf()
    
    //! printf() ---> imprime una cadena formateada directamente en salida
    $nombre = "Agua";
    $cantidad = 1;
    $precio = 1.50;
    printf("Producto: %s ,Cantidad: %d ,Precio: %.2f€", $nombre,$cantidad,$precio);
    //* Salida: Producto: Agua ,Cantidad: 1 ,Precio: 1.50€
            //* %d:   marcador para entero
            //* %s:   marcador para una cadena
            //* %.2f: marcador para un nº flotante con 2 decimales
    
    //! sprintf() --> devuelve una cadena formateada (no imprime directamente) lo que permite
    //!               almacenarla en una variable para uso posterior
    $temperatura = 25.5; 
    $unidad = "C"; 
    $mensajeClima = sprintf("La temperatura actual es de %.1f%s.", $temperatura, $unidad); 
    echo $mensajeClima; //* Salida: La temperatura actual es de 25.5C.

        //- Manejo de Arrays
    
    //? Array indexado  --> Se accede a los elementos mediante un índice numérico
    //! Usando la sintaxis de corchetes [] (recomendado)
    $frutas = ["manzana", "banana", "naranja"];
    echo $frutas[0];  //* manzana

    //! Usando la sintaxis array() 
    $frutas = array("Manzana", "Plátano", "Cereza"); 
    echo $frutas[0];      //* Salida: Manzana   ---> Obtienes directamente el elemento de esa posición

    //! Añadir elementos después de la declaración 
    $animales = [];             
    $animales[] = "Perro";      //* Añade elemento al final 
    $animales[] = "Gato";       //* Contenido del array: ["Perro","Gato]

    //? Array asociativo  --> Se accede a los elementos mediante claves con nombres (strings)
    //! Usando la sintaxis de corchetes [] 
    $persona = ["nombre" => "Luis", "edad" => 21];
    echo $persona["nombre"];  //* Salida: Luis

    //! Usando la sintaxis array() 
    $persona = array("nombre" => "Juan", "edad" => 30); 
    echo $persona["nombre"]; //* Salida: Juan

    //! Añadir elementos después de la declaración 
    $config = []; 
    $config["database"] = "mydb"; 
    $config["user"] = "root"; 
    echo $config["user"]; //* Salida: root 

    //? Array Multidimensional  --> Un array que contines 1 o mas arrays (útil para almacenar datos complejos o tablas)
    $alumnos = [ 
    ["nombre" => "Ana", "nota" => 8, "edad" => 20], 
    ["nombre" => "Luis", "nota" => 7, "edad" => 22] 
    ];
    echo "Primer alumno:" . $alumnos[0] . "\n";     //* Salida: Primer alumno: Ana      --> Obtener directamente el dato
    $alumnoLuis = $alumnos[1];      //* Obtienes el array asociativo de un alumno en 1 variable
    echo "Edad de Luis: " . $alumnoLuis["edad"];    //* Salida: Edad de Luis: 22    --> Recupera datos desde una variable de alumno
    
    print_r($alumnos);          //* Muestra la estructura completa del array $alumnos ( print_r)

    //! ---------------------------------------------
        //* filtrar un array multidimensional por un valor específico de alguna clave.
        $personas = [
    ["nombre" => "Juan", "apellido" => "Pérez", "edad" => 28, "ciudad" => "Madrid"],
    ["nombre" => "María", "apellido" => "García", "edad" => 32, "ciudad" => "Barcelona"],
    ["nombre" => "Carlos", "apellido" => "Rodríguez", "edad" => 25, "ciudad" => "Sevilla"],
    ["nombre" => "Juan", "apellido" => "López", "edad" => 40, "ciudad" => "Valencia"]
    ];

    $resultado = [];

    foreach ($personas as $persona) {
        if ($persona['nombre'] === 'Juan') {
            $resultado[] = $persona; // Añadimos el array completo al resultado
        }
    }

    echo "<pre>";
    print_r($resultado);
    echo "</pre>";

    //! -----------------------------------------------------------------------------------------------
/*
    Funciones de información y conteo
| Función                            | Descripción                                 | Ejemplo                                        |
| ---------------------------------- | ------------------------------------------- | ---------------------------------------------- |
| `count($array)`                    | Devuelve el número de elementos de un array | `count([1,2,3]); // 3`                         |
| `empty($array)`                    | Verifica si un array está vacío             | `empty([]); // true`                           |
| `in_array($valor, $array)`         | Comprueba si un valor existe en el array    | `in_array(3,[1,2,3]); // true`                 |
| `array_key_exists($clave, $array)` | Verifica si una clave existe en el array    | `array_key_exists('nombre',$persona); // true` |

Funciones de búsqueda y filtrado
| Función                           | Descripción                           | Ejemplo                                     |
| --------------------------------- | ------------------------------------- | ------------------------------------------- |
| `array_search($valor, $array)`    | Devuelve la clave de un valor         | `array_search(3,[1,2,3]); // 2`             |
| `array_filter($array, $callback)` | Filtra un array según una función     | `array_filter($nums, fn($n)=>$n>5);`        |
| `array_keys($array)`              | Devuelve todas las claves de un array | `array_keys(['a'=>1,'b'=>2]); // ['a','b']` |
| `array_values($array)`            | Devuelve todos los valores del array  | `array_values(['a'=>1,'b'=>2]); // [1,2]`   |

Funciones de manipulación
| Función                                 | Descripción                           | Ejemplo                                     |
| --------------------------------------- | ------------------------------------- | ------------------------------------------- |
| `array_push($array, $valor)`            | Añade uno o más elementos al final    | `$arr=[]; array_push($arr,1,2); // [1,2]`   |
| `array_pop($array)`                     | Elimina y devuelve el último elemento | `$arr=[1,2]; array_pop($arr); // 2`         |
| `array_unshift($array,$valor)`          | Añade elementos al inicio             | `$arr=[2]; array_unshift($arr,1); // [1,2]` |
| `array_shift($array)`                   | Elimina y devuelve el primer elemento | `$arr=[1,2]; array_shift($arr); // 1`       |
| `array_merge($arr1,$arr2)`              | Combina arrays                        | `[1,2] + [3,4] => [1,2,3,4]`                |
| `array_slice($array,$inicio,$longitud)` | Obtiene un fragmento de array         | `array_slice([1,2,3,4],1,2); // [2,3]`      |

Funciones de ordenación
| Función          | Descripción                                        | Ejemplo                              |
| ---------------- | -------------------------------------------------- | ------------------------------------ |
| `sort($array)`   | Ordena valores ascendentemente                     | `[3,1,2] => [1,2,3]`                 |
| `rsort($array)`  | Ordena valores descendentemente                    | `[3,1,2] => [3,2,1]`                 |
| `asort($array)`  | Ordena valores manteniendo claves                  | `['a'=>3,'b'=>1] => ['b'=>1,'a'=>3]` |
| `ksort($array)`  | Ordena por claves ascendentemente                  | `['b'=>1,'a'=>2] => ['a'=>2,'b'=>1]` |
| `arsort($array)` | Ordena valores descendentemente manteniendo claves | `['a'=>3,'b'=>1] => ['a'=>3,'b'=>1]` |
| `krsort($array)` | Ordena claves descendentemente                     | `['b'=>1,'a'=>2] => ['b'=>1,'a'=>2]` |

Funciones matemáticas sobre arrays
| Función                 | Descripción                        | Ejemplo        |
| ----------------------- | ---------------------------------- | -------------- |
| `array_sum($array)`     | Suma todos los elementos numéricos | `[1,2,3] => 6` |
| `array_product($array)` | Multiplica todos los elementos     | `[1,2,3] => 6` |
| `min($array)`           | Devuelve el valor mínimo           | `[1,2,3] => 1` |
| `max($array)`           | Devuelve el valor máximo           | `[1,2,3] => 3` |

Funciones avanzadas para arrays multidimensionales
| Función                                     | Descripción                                     | Ejemplo                                                     |
| ------------------------------------------- | ----------------------------------------------- | ----------------------------------------------------------- |
| `array_column($array, $clave)`              | Extrae una columna de un array multidimensional | `array_column($personas,'nombre'); // ['Juan','María',...]` |
| `array_map($callback, $array)`              | Aplica una función a todos los elementos        | `array_map(fn($x)=>$x*2,[1,2,3]); // [2,4,6]`               |
| `array_reduce($array, $callback, $initial)` | Reduce el array a un valor único                | `array_reduce([1,2,3],fn($a,$b)=>$a+$b,0); // 6`            |

*/
    //! ---------------------------------------------------------------------------------------------
/*
   - Arrays indexados
Son los que tienen índices numéricos automáticos [0,1,2,…].
La mayoría de funciones funcionan perfectamente:
                count(), array_sum(), array_map(), array_filter(), sort(), rsort(), array_push(), array_pop(), etc.
Ejemplo:
        $arr = [5, 3, 8];
        sort($arr); // [3,5,8]

    - Arrays asociativos
Tienen claves personalizadas ('nombre' => 'Juan').
Funciones que mantienen claves:
                asort(), arsort(), ksort(), krsort(), array_key_exists(), array_keys(), array_values()
Funciones que no mantienen claves:
                sort(), rsort(), array_values() sí devuelve solo los valores
Ejemplo:
        $persona = ['nombre'=>'Juan','edad'=>28];
        asort($persona); // Ordena por valores manteniendo claves
    
    - Arrays multidimensionales
Contienen otros arrays, por ejemplo $personas de tus ejercicios anteriores.
Muchas funciones aplican solo al primer nivel del array:
                count($array) → cuenta los elementos del primer nivel.
                array_sum($array) → solo funciona si el primer nivel contiene números.
                sort(), asort() → ordenan arrays del primer nivel (pueden fallar si los elementos son arrays).
Funciones diseñadas para multidimensionales:
                array_column($array, $clave) → extrae una columna de arrays asociativos dentro de un array.
                array_map() + callback → puedes recorrer y modificar cada sub-array.
                array_filter() + callback → filtra según propiedades de los sub-arrays.
Ejemplo:
        $personas = [
            ["nombre"=>"Juan","edad"=>28],
            ["nombre"=>"María","edad"=>32]
        ];

        $edades = array_column($personas,'edad'); // [28,32]

*/
    //! ----------------------------------------------------------------------------------------------
    //? Recorrer arrays
    foreach ($array as $valor) {
        echo $valor;
    }
    //? Métodos más útiles para arrays indexados (numéricos)

    array_push($array, "nuevo");    //* Agregar elemento al final
    array_pop($array);              //* Eliminar ultimo elemento
    echo count($array);             //* Contar elementos array


        //- Funciones

    //? Definir una función

    //* Definición de una función simple 
    function saludar() { 
        echo "¡Hola, bienvenido!\n"; 
    } 
    
    //* Llamada a la función 
    saludar(); //* Salida: ¡Hola, bienvenido! 

    //? Parámetros por Valor (predeterminado): La función trabaja con una copia del valor.  
    //? Los cambios dentro de la función no afectan a la variable original fuera de ella. 

        function sumar($num1, $num2) { 
            $num1 = $num1 + $num2; 
            echo "La suma es: " . $num1 . "\n"; 
    }     
    $a = 10; 
    $b = 5; 
    sumar($a, $b); //* Salida: La suma es: 15 
    echo "El valor de $a sigue siendo: " . $a . "\n"; //* Salida: El valor de 10 sigue siendo: 10 

    //? Parámetros por Referencia: Si se antepone un & al nombre del parámetro en la definición 
    //?  de la función, la función trabajará directamente con la variable original. Los cambios 
    //? dentro de la función sí afectarán a la variable original.

    function duplicar(&$numero) { 
        $numero *= 2; 
        echo "Dentro de la función, el número es: " . $numero . "\n"; 
    } 
        $valorOriginal = 7; 
        duplicar($valorOriginal);                                                   //* Salida: Dentro de la función, el número es: 14 
        echo "Fuera de la función, el valor original es: " . $valorOriginal . "\n"; //* Salida: Fuera de la función, el valor original es: 14

        //? Valores por Defecto: Se pueden asignar valores predeterminados a los parámetros. Si no se
        //? pasa un valor para ese parámetro al llamar la función, se usará el valor por defecto. 

    function saludoPersonalizado($nombre = "Invitado") { 
        echo "Hola, " . $nombre . "!\n"; 
    } 
        saludoPersonalizado("Andrés"); //* Salida: Hola, Andrés! 
        saludoPersonalizado();         //* Salida: Hola, Invitado! 
    
        //?Valores de Retorno : funciones pueden devolver un valor utilizando la palabra clave return. Esto permite que el
        //?                     resultado de la función sea utilizado en otras partes del código. 

    function multiplicar($num1, $num2) { 
        return $num1 * $num2; 
    } 
    
        $resultadoMultiplicacion = multiplicar(4, 6); 
        echo "El resultado de la multiplicación es: " . $resultadoMultiplicacion . "\n"; //* Salida: El resultado de la multiplicación es: 24 
        //* Se puede usar directamente en una expresión 
        echo "El doble de 10 es: " . multiplicar(10, 2) . "\n"; //* Salida: El doble de 10 es: 20 


    //? Funciones anónimas y callback : funciones sin nombre que pueden ser almacenadas en una variable 
    //? y pasadas como argumentos a otras funciones. Son muy útiles para callbacks o cuando se necesita una función para un uso puntual. 

    $saludar = function($nombre) { 
        echo "¡Hola, " . $nombre . " desde una función anónima!\n"; 
    }; 
    $saludar("Mundo");                              //* Salida: ¡Hola, Mundo desde una función anónima! 
    
    //* Ejemplo de uso como callback 
    $numeros = [1, 2, 3]; 
    $cuadrados = array_map(function($n) { 
        return $n * $n; 
    }, $numeros); 
    print_r($cuadrados); 
    /* Salida: [1, 4, 9] 
    Array 
    ( 
        => 1 
        => 4 
        => 9 
        => 16 
    ) 
    */
            //- Inclusión de Archivos y Modulación
        
            //? include y require
                //* include: Si el archivo no se encuentra, PHP emitirá una advertencia (E_WARNING ) y el script continuará su ejecución. 
                //* require: Si el archivo no se encuentra, PHP emitirá un error fatal (E_COMPILE_ERROR ) y detendrá la ejecución del script. 
                //! Ejemplo
                /*
                        Supongamos que tienes un archivo llamado cabecera.php: 
                            <!DOCTYPE html> 
                            <html> 
                            <head> 
                                <title>Mi Sitio Web</title> 
                            </head> 
                            <body> 
                                <h1>Bienvenido a mi página</h1> 
                            Y un archivo pie.php: 
                                <footer> 
                                    <p>&copy; 2025 Mi Empresa</p> 
                                </footer> 
                            </body>
                */
            //* index.php 
                include 'cabecera.php'; //* Si cabecera.php no existe, mostrará un warning pero el script seguirá 
                echo "<p>Contenido principal de la página.</p>"; 
                require 'pie.php';    //* Si pie.php no existe, el script se detendrá aquí 

            //? include_once y require_once
                //* Igual que include y require pero PHP comprobará si el archivo ya ha sido incluido. Si es así, 
                //* no lo incluirá de nuevo. Esto es muy útil para evitar problemas con la redefinición de funciones o clases. 
                //! Ejemplo:
                    //* funciones.php 
                    function saludarUsuario($nombre) { 
                        return "Hola, " . $nombre . "!"; 
                    }
                    //* script.php 
                    require_once 'funciones.php'; //* Se incluye la primera vez 
                    require_once 'funciones.php'; //* Ignorado, ya ha sido incluido 
                    echo saludarUsuario("Ana"); //* Salida: Hola, Ana!  

            //- Formularios
    
    //? Obtener datos de un formulario

    //* Obtener datos con método POST
    $nombre = $_POST['nombre'];

    //* Obtener datos con método GET
    $edad = $_GET['edad'];

    //? Validación de datos

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Correo válido";
    } else {
        echo "Correo inválido";
    }

?>