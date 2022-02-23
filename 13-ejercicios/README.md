# Ejercicios preparación examen

## Javascript

### Calculadora

Poner dos input y 4 botones (+, -, *, /)
Sacar el resultado de la operación en un h1

### Marcador teléfono

Crea un marcador de teléfono 

1 2 3 
4 5 6
7 8 9
  0

Con botones

En un h1 se irá concatenando cada tecla

Crea un botón para limpiar el contenido del h1

### Binario -> Decimal

Crea dos botones con 1 y con 0

Cada vez que pulses uno de ellos acumula un número binario en un h1

Crea un bontón que al pulsarlo calcule el valor de ese número en decimal

---------------------------------
botón con 0     botón con 1

h1 resultado concatenar binario

botón

h3 resultado del número en decimal
----------------------------------

### Añadir elemento HTML

Crea un botón y añadde un evento mouse over:
https://developer.mozilla.org/en-US/docs/Web/API/Element/mouseover_event

Cada vez que entre y salgas añade a una lista HTML como elmento NUEVO li  el texto "Entrada" o Salida


## PHP

### Básico

#### Pirámide numérica

Crea la siguiente pirámide

1
2 3
4 5 6
7 8 9 10
11 12 13 14 15

#### Pirámide numérica parametrizada

Crea un formulario para mandar un valor númerico a la anterio página.
El número final de la pirámide será pasado a través de GET

OJO: La pirámide se puede cortar a la mitad, ejemplo:

Envío formulario con un 7
1
2 3
4 5 6
7

OJO: Los intros en HTML son ```<br>```

#### Hola cansino

Crea un formulario con un campo tipo texto y un valor númerico

Cuando el formulario se procese (en la misma paǵina o en otra), pintará el nombre el número de veces indicado
Cada nombre se pintará en un span con un background y un color de texto aleatorios


#### Parámetros GET

Crea una página index.php con 3 imágenes: una pera, una manzana y un melocotón.

Cada imagen será un enlace a la página:
index.php?add=pera
index.php?add=manzana
index.php?add=melocotón

Si no hay nada en el GET se mostrará un mensaje de bienvenido al selector de frutas
Si se ha pulsado en alguna se mostrará:
Gracias por elegir Pera|Manzana|Melocotón

Si el parámetro no es alguno de estos se mostrará:
Fruta no reconocida

#### Galletas de frutas

Modifica el ejercicio anterior para llevar un contador de la cantidad de Peras, Manzanas, Melocotones y frutas no reconocidas que el usuario ha seleccionado.


#### Sesiones

Crea un formulario con un texto, un número y un botón.
Cada vez que pulses el botón se enviará el formulario y se metera el valor en la sesión.

La paǵina mostrara en una lista HTML la lista de elementos de la sesión

(Será un carrito de la compra)


#### Bases de datos

Tenemos una base de datos de clientes con nombre, apellido, edad y gustos musicales (campo de texto largo)

Saca un listado con nombre apellido y una marca indicando si es menor de edad o mayor de edad (puede ser una imagen en el listado)
Cada registro tendrá un enlace al detalle.
En el detalle se verán todos los campos.

Utiliza estilo CSS y HTML para que la página quede centrada y con borde.
Los estilos tienen que ser consistentes entre páginas


#### Bases de datos

Utiliza la misma base de datos pero esta vez haz un formulario con un texto.
La página mostrará todos los usuario cuyo nombre o apellido contengan esa cadena

SQL -> LIKE


#### Bases de datos

Haz una página con la misma base de datos para sacar un listado ordenado por edad de mayor a menor
