# EXAMEN: PHP 8.4 Básico (Tema 2)
## Duración: 2 horas | Puntuación total: 100 puntos

**Nombre del estudiante:** ________________________  
**Fecha:** ________________________  
**Calificación:** ________________________

---

## PARTE I: TEORÍA (30 puntos)
**Tiempo estimado: 30 minutos**

### Pregunta 1 (5 puntos)
¿Cuál es la diferencia entre `echo` y `print` en PHP? Explica con un ejemplo.

**Tu respuesta:**

---

### Pregunta 2 (5 puntos)
Explica qué son las constantes en PHP y cómo se diferencian de las variables. Proporciona un ejemplo de definición.

**Tu respuesta:**

---

### Pregunta 3 (5 puntos)
¿Cuáles son los operadores de comparación en PHP? Lista al menos 5 y explica qué hace cada uno.

**Tu respuesta:**

---

### Pregunta 4 (5 puntos)
¿Qué es una función en PHP? Explica la diferencia entre parámetros y argumentos.

**Tu respuesta:**

---

### Pregunta 5 (5 puntos)
¿Cuál es la diferencia entre un array indexado y un array asociativo? Proporciona ejemplos.

**Tu respuesta:**

---

### Pregunta 6 (5 puntos)
Explica qué es el "scope" o ámbito de variables en PHP. ¿Cuál es la diferencia entre variables locales y globales?

**Tu respuesta:**

---

## PARTE II: PRÁCTICA (70 puntos)
**Tiempo estimado: 90 minutos**

### Ejercicio 1: Análisis de código (15 puntos)

Analiza el siguiente código y responde las preguntas:

```php
<?php
$numero = "42";
$resultado = $numero + 8;

echo $resultado;
echo gettype($resultado);

$array = [1, 2, 3, 4, 5];
$suma = 0;
foreach ($array as $valor) {
    $suma += $valor;
}
echo $suma;
?>
```

**Pregunta 1 (5 puntos):** ¿Qué imprime la primera línea de `echo`? ¿Por qué?

**Tu respuesta:**

---

**Pregunta 2 (3 puntos):** ¿Qué tipo de dato muestra `gettype()`?

**Tu respuesta:**

---

**Pregunta 3 (3 puntos):** ¿Cuál es el resultado final de `$suma`?

**Tu respuesta:**

---

**Pregunta 4 (4 puntos):** ¿Qué hubiera pasado si usáramos `$suma .= $valor` en lugar de `$suma += $valor`?

**Tu respuesta:**

---

### Ejercicio 2: Completar código (20 puntos)

Completa el siguiente código para que funcione correctamente. Solo rellena los espacios en blanco (___):

```php
<?php
// Declarar una constante para el precio base
___ PRECIO_BASE = 10;

// Crear una función que calcule el precio con IVA
function ___(___) {
    ___ iva = 0.21;
    ___ precio_final = ___ * (1 + ___);
    ___ precio_final;
}

// Llamar la función
$resultado = calcularPrecio(___);
echo "El precio final es: $" . $resultado;
?>
```

---

### Ejercicio 3: Escribir una función (20 puntos)

Escribe una función llamada `validarEmail()` que:
- Reciba un email como parámetro
- Verifique que contenga un `@`
- Verifique que contenga un `.`
- Verifique que el `@` esté antes del `.`
- Retorne `true` si es válido, `false` si no

**Ejemplo de uso:**
```php
echo validarEmail("usuario@ejemplo.com");  // true
echo validarEmail("usuarioejemplo.com");   // false
echo validarEmail("usuario@.com");         // false
```

**Tu código:**

```php
function validarEmail($email) {
    // Tu código aquí
}
```

---

### Ejercicio 4: Trabajar con arrays (15 puntos)

Dado el siguiente array de estudiantes:

```php
$estudiantes = [
    ['nombre' => 'Juan', 'calificacion' => 8.5],
    ['nombre' => 'María', 'calificacion' => 9.2],
    ['nombre' => 'Carlos', 'calificacion' => 7.3],
    ['nombre' => 'Ana', 'calificacion' => 8.9],
];
```

#### Parte 1 (7 puntos): Imprimir el estudiante con la calificación más alta

**Tu código:**

```php
// Tu código aquí
```

---

#### Parte 2 (8 puntos): Calcular el promedio de calificaciones

**Tu código:**

```php
// Tu código aquí
```

---

## INSTRUCCIONES FINALES

1. **Entrega:**
   - Crea un SOLO archivo `examen_tema2_[TuNombre].php o .md o .doc`
   - Incluye comentarios con tus respuestas teóricas si es php sino normal como texto
   - Incluye el código de los ejercicios prácticos
   - Asegúrate de que el código sea ejecutable

2. **Formato de respuestas teóricas:**
   ```php
   /*
   PREGUNTA 1:
   Tu respuesta aquí...
   */
   ```

3. **Formato de ejercicios prácticos:**
   ```php
   // EJERCICIO 1: Análisis de código
   // Pregunta 1: ...
   // Pregunta 2: ...
   
   // EJERCICIO 2: Completar código
   // [Tu código aquí]
   
   // EJERCICIO 3: Función validarEmail
   function validarEmail($email) {
       // Tu código aquí
   }
   
   // EJERCICIO 4: Arrays
   // Parte 1: [Tu código aquí]
   // Parte 2: [Tu código aquí]
   ```

4. **Requisitos:**
   - El archivo debe ser válido PHP (sin errores de sintaxis)
   - Incluye comentarios explicativos
   - Responde todas las preguntas
   - Sé claro y conciso

---

## ESCALA DE CALIFICACIÓN

| Puntos | Calificación | Descripción |
|--------|--------------|-------------|
| 90-100 | Excelente (A) | Dominio completo del tema |
| 80-89  | Muy Bien (B) | Buen dominio con pequeños errores |
| 70-79  | Bien (C)     | Dominio aceptable |
| 60-69  | Suficiente (D) | Conocimiento básico |
| < 60   | Insuficiente (F) | Necesita refuerzo |

---

## MATERIAL DE REFERENCIA PERMITIDO

- Ninguno

---

## NOTAS IMPORTANTES

- **No se permite:** Copiar de internet, usar IA para generar respuestas, copiar de compañeros
- **Se permite:** NULL
- **Tiempo:** Gestiona bien el tiempo entre teoría y práctica (30 min + 90 min)
- **Dudas:** Levanta la mano si tienes preguntas sobre el enunciado

---

**Asignatura:** Programación Web - PHP 8.4  
**Nivel:** Grado Superior  
**Fecha:** Noviembre 2025
