                //- Tipos de Comentarios

//*   // --> una linea          /* */ --> Varias lineas

console.log("5")   //* String
console.log(5)     //* Entero

                //- Tipos Variables

    let saludo = "hola" //*  SOLO accesibles dentro de un bloque
    const iva = 0.15    //*  NO se puede modificar tras declararla  

                //- Tipos Datos
    let myName = "Pedro"                                //* String
    let age = 34                                        //* Number
    let isStudent = true                                //* Boolean
    let undefinedValue                                  //* undefined (se declara pero no se inicializa el tipo)
    let nullValue = null                                //* null (indicamos intencionalmente ausencia de valor)
    let myBigInt = BigInt(999999999999999999999999999)  //* Numero muy grandes
    let myBigInt2 = 9999999999999998888888              //* Sirve tambien

    typeof myName   //* Para mostrar el tipo de dato de la variable

                //- Operadores
        //? Aritméticos

    let arit = " + - * / % **"      //* Suma Resta Multiplicación División Módulo Potencia
        
        //? Asignación

    let asig = " += -= *= /= %= **="    //* Igual que los operadores

        //? Comparación
    
    console.log(a > b)
    console.log(a < b)
    console.log(a >= b)
    console.log(a <= b)
    console.log(a == b)  
    console.log(a == 6)     //* Igualdad por valor (Igualdad débil)
    console.log(a == "6")   //* Igualdad por valor
    console.log(a === a)    //* Igualdad por identidad (por tipo y valor)  (Igualdad estricta)
    console.log(a === "6")  //* false porque a es tipo number y "6" es tipo string
    console.log(a != 6)     //* Es distinto de..

            //? Truthy values (valores verdaderos)
        // ! Todos los numeros positivos y negativos menos el cero
        // ! Todas las cadenas de texto menos las vacías
        // ! El boolean true

            //? Falsy values (valores falsos)
        // ! 0
        // ! 0n
        // ! null
        // ! undefined
        // ! NaN
        // ! El boolean false
        // ! Cadenas de texto vacías

        //? Operadores lógicos

        //* and (&&) (si una de las expresiones no se cumple el resultado será falso)
        //* or (||) (si se cumple minimo una de las comparaciones el resultado será true)
        //* not (!) (niega la expresión)

        //? Operadores Ternarios

        const isRaining = true
        isRaining ? console.log ("Está lloviendo"): console.log("No está lloviendo")


                //- Strings

        let Name = "Pedro"
        let greeting = "hola, " + myName    //* Concatenación
        console.log(greeting.length)        //* longitud
        console.log(greeting[0])            //* Acceso a caracteres
        //? Método comunes

                //- Strings
                //- Strings
                //- Strings
                //- Strings
