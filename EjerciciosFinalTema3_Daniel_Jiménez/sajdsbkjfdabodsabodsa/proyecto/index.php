<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo PHP + MariaDB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        h1 {
            color: #333;
        }
        .success {
            color: #28a745;
            font-weight: bold;
        }
        .error {
            color: #dc3545;
            font-weight: bold;
        }
        code {
            background: #f4f4f4;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: monospace;
        }
        .info {
            background: #e3f2fd;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>🚀 Entorno PHP + MariaDB</h1>
        
        <?php
        // Información de PHP
        echo "<h2>📦 Versión de PHP</h2>";
        echo "<p class='info'>PHP " . phpversion() . "</p>";
        
        // Conexión a la base de datos
        echo "<h2>🔌 Conexión a MariaDB</h2>";
        
        $host = 'db';  // Nombre del servicio en docker-compose
        $dbname = 'testdb';
        $username = 'alumno';
        $password = 'alumno';
        
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            echo "<p class='success'>✅ Conexión exitosa a la base de datos</p>";
            
            // Obtener versión de MariaDB
            $version = $pdo->query('SELECT VERSION()')->fetchColumn();
            echo "<p class='info'>MariaDB versión: $version</p>";
            
            // 1.Crear tablas
            $pdo->exec("
                CREATE TABLE IF NOT EXISTS categorias (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    nombre VARCHAR(100) NOT NULL,
                    descripcion VARCHAR(255) DEFAULT NULL
                );
                
                CREATE TABLE IF NOT EXISTS productos (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    nombre VARCHAR(100) NOT NULL,
                    categoria_id INT NOT NULL,
                    precio DECIMAL(10, 2) NOT NULL,
                    stock INT DEFAULT 0,
                    
                    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
                );
                
                CREATE TABLE IF NOT EXISTS usuarios (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    nombre VARCHAR(100) NOT NULL,
                    email VARCHAR(100) NOT NULL,
                    contraseña VARCHAR(100) NOT NULL
                );
                
                CREATE TABLE IF NOT EXISTS pedidos (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    usuario_id INT NOT NULL,
                    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
                    total DECIMAL(10, 2),
                    
                    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
                );
            ");

            
            // 2.Insertar datos
            $countCat = $pdo->query("SELECT COUNT(*) FROM categorias")->fetchColumn();

            if ($countCat == 0) {
                $pdo->exec("
                    INSERT INTO categorias (id, nombre, descripcion) VALUES 
                    (1, 'Cítricos', 'Frutas ácidas'),
                    (2, 'Frutas Rojas', 'Frutos del bosque'),
                    (3, 'Tropicales', 'Frutas exóticas')
                ");
                echo "<p class='success'>Categorías insertadas correctamente</p>";
            } else {
                echo "<p class='info'>Las categorías ya existían</p>";
            }

            $countProd = $pdo->query("SELECT COUNT(*) FROM productos")->fetchColumn();

            if ($countProd == 0) {
                $pdo->exec("
                    INSERT INTO productos (nombre, categoria_id, precio, stock) VALUES 
                    ('Naranja', 1, 1.50, 100),
                    ('Limón', 1, 1.20, 80),
                    ('Mandarina', 1, 1.80, 90),
                    ('Pomelo', 1, 2.00, 50),
                    ('Fresa', 2, 3.50, 15),
                    ('Arándano', 2, 4.00, 10),
                    ('Frambuesa', 2, 3.80, 25),
                    ('Plátano', 3, 1.10, 200),
                    ('Mango', 3, 2.50, 30),
                    ('Piña', 3, 3.00, 40)
                ");
                echo "<p class='success'>Productos insertados correctamente</p>";
            } else {
                echo "<p class='info'>Los productos ya existían</p>";
            }

            // 3.Consultas Select Básicas

            echo "<h3> 1. Productos ordenados precio ascendente</h3>";
            $stmt = $pdo->query("SELECT * FROM productos ORDER BY precio ASC");
            $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo "<h3> 2. Productos de categoría 'Cítricos'</h3>";
            $stmt = $pdo->query("SELECT * FROM productos WHERE categoria_id = 1");
            $productosCitricos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo "<h3> 3. Productos con stock menor a 20</h3>";
            $stmt = $pdo->query("SELECT * FROM productos WHERE stock < 20");
            $productosBajoStock = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo "<h3> 4. Contar total de productos</h3>";
            $totalProductos = $pdo->query("SELECT COUNT(*) FROM productos")->fetchColumn();
            echo "<p class='info'>Total de productos: $totalProductos</p>";

            //4. Inner Join productos con categoria

            echo "<h3>Productos con sus categorías</h3>";
            $stmt = $pdo->query("
                SELECT p.nombre AS producto, p.precio, c.nombre AS categoria
                FROM productos p
                INNER JOIN categorias c ON p.categoria_id = c.id
                ORDER BY c.nombre, p.precio
            ");
            $productosConCategorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //5. Update - Cambiar precios y stock

            echo "<h3>Actualizar precios y stock</h3>";

            $pdo->exec("UPDATE productos SET precio = precio * 1.10 WHERE categoria_id = 3"); //Aumentar en 10% precios de productos tropicales
            echo "<p class='success'>Los precios de los productos tropicales han subido un 10% más</p>";

            $stmt = $pdo->prepare("SELECT stock FROM productos WHERE nombre = :nombre"); //Reducir stock de 'Fresa' en 5 unidades
            $stmt->execute(['nombre' => 'Fresa']);
            $stockActual = $stmt->fetchColumn();
            $nuevaCantidad = max(0, $stockActual - 5); // Evitar stock negativo
            $stmt = $pdo->prepare("UPDATE productos SET stock = :stock WHERE nombre = :nombre");
            $stmt->execute(['stock' => $nuevaCantidad, 'nombre' => 'Fresa']);
            echo "<p class='success'>El stock de fresa ha bajado 5 unidades</p>";

            // 6. Delete - Eliminar productos sin stock

            $pdo->exec("ALTER TABLE productos ADD COLUMN IF NOT EXISTS eliminado DEFAULT 0");
            $pdo->exec("UPDATE productos SET eliminado = 1 WHERE stock = 0");
            echo "<p class='success'>Productos sin stock eliminados</p>";

            // 8. Reportes y análisis

            echo "<h3> Análisis y Reportes</h3>";
            //Productos más vendidos
            echo "<h4>a) Productos más vendidos</h4>";
            $stmt = $pdo->query("
                SELECT p.nombre AS producto, SUM(dp.cantidad) AS total_vendido
                FROM detalles_pedidos dp
                INNER JOIN productos p ON dp.producto_id = p.id
                GROUP BY p.id
                ORDER BY total_vendido DESC
                LIMIT 5
            ");
            $productosMasVendidos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // Mostrar resultados
            if (count($productosMasVendidos) > 0) {
                echo "<table style='width: 100%; border-collapse: collapse;'>";
                echo "<tr style='background: #f4f4f4;'>";
                echo "<th style='padding: 10px; border: 1px solid #ddd;'>Producto</th>";
                echo "<th style='padding: 10px; border: 1px solid #ddd;'>Total Vendido</th>";
                echo "</tr>";
                foreach ($productosMasVendidos as $producto) {
                    echo "<tr>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$producto['producto']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$producto['total_vendido']}</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='info'>No hay datos de ventas disponibles.</p>";
            }
            // Ingresos totales por categoría
            echo "<h4>b) Ingresos totales por categoría</h4>";
            $stmt = $pdo->query("
                SELECT c.nombre AS categoria, SUM(p.precio * dp.cantidad) AS ingresos_totales
                FROM detalles_pedidos dp
                INNER JOIN productos p ON dp.producto_id = p.id
                INNER JOIN categorias c ON p.categoria_id = c.id
                GROUP BY c.id
                ORDER BY ingresos_totales DESC
            ");
            $ingresosPorCategoria = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($ingresosPorCategoria) > 0) {
                echo "<table style='width: 100%; border-collapse: collapse;'>";
                echo "<tr style='background: #f4f4f4;'>";
                echo "<th style='padding: 10px; border: 1px solid #ddd;'>Categoría</th>";
                echo "<th style='padding: 10px; border: 1px solid #ddd;'>Ingresos Totales</th>";
                echo "</tr>";
                foreach ($ingresosPorCategoria as $categoria) {
                    echo "<tr>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$categoria['categoria']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$categoria['ingresos_totales']}</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='info'>No hay datos de ingresos disponibles.</p>";
            }
            //Productos con bajo stock < 10 unidades
            echo "<h4>c) Productos con bajo stock (&lt; 10 unidades)</h4>";
            $stmt = $pdo->query("SELECT nombre, stock FROM productos WHERE stock < 10");
            $productosBajoStock = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($productosBajoStock) > 0) {
                echo "<table style='width: 100%; border-collapse: collapse;'>";
                echo "<tr style='background: #f4f4f4;'>";
                echo "<th style='padding: 10px; border: 1px solid #ddd;'>Producto</th>";
                echo "<th style='padding: 10px; border: 1px solid #ddd;'>Stock</th>";
                echo "</tr>";
                foreach ($productosBajoStock as $producto) {
                    echo "<tr>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$producto['nombre']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$producto['stock']}</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='info'>No hay productos con bajo stock.</p>";
            }
            //Usuarios con más compras
            echo "<h4>d) Usuarios con más compras</h4>";
            $stmt = $pdo->query("
                SELECT u.nombre AS usuario, COUNT(p.id) AS total_compras
                FROM pedidos p
                INNER JOIN usuarios u ON p.usuario_id = u.id
                GROUP BY u.id
                ORDER BY total_compras DESC
                LIMIT 5
            ");
            $usuariosConMasCompras = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($usuariosConMasCompras) > 0) {
                echo "<table style='width: 100%; border-collapse: collapse;'>";
                echo "<tr style='background: #f4f4f4;'>";
                echo "<th style='padding: 10px; border: 1px solid #ddd;'>Usuario</th>";
                echo "<th style='padding: 10px; border: 1px solid #ddd;'>Total Compras</th>";
                echo "</tr>";
                foreach ($usuariosConMasCompras as $usuario) {
                    echo "<tr>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$usuario['usuario']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$usuario['total_compras']}</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='info'>No hay datos de usuarios disponibles.</p>";
            }

            // Mostrar usuarios
            echo "<h2>👥 Usuarios en la base de datos</h2>";
            $stmt = $pdo->query("SELECT * FROM usuarios ORDER BY id");
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if (count($usuarios) > 0) {
                echo "<table style='width: 100%; border-collapse: collapse;'>";
                echo "<tr style='background: #f4f4f4;'>";
                echo "<th style='padding: 10px; border: 1px solid #ddd;'>ID</th>";
                echo "<th style='padding: 10px; border: 1px solid #ddd;'>Nombre</th>";
                echo "<th style='padding: 10px; border: 1px solid #ddd;'>Email</th>";
                echo "<th style='padding: 10px; border: 1px solid #ddd;'>Fecha Registro</th>";
                echo "</tr>";
                
                foreach ($usuarios as $usuario) {
                    echo "<tr>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$usuario['id']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$usuario['nombre']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$usuario['email']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$usuario['fecha_registro']}</td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            }
            
        } catch(PDOException $e) {
            echo "<p class='error'>❌ Error de conexión: " . $e->getMessage() . "</p>";
            echo "<div class='info'>";
            echo "<strong>Verifica que:</strong><br>";
            echo "- Los contenedores estén corriendo: <code>docker compose -f docker-compose-alumnos.yml ps</code><br>";
            echo "- El servicio de base de datos esté disponible<br>";
            echo "- Las credenciales sean correctas";
            echo "</div>";
        }
        ?>
        
        <h2>🔗 Enlaces Útiles</h2>
        <div class="info">
            <p><strong>phpMyAdmin:</strong> <a href="http://localhost:8081" target="_blank">http://localhost:8081</a></p>
            <p><strong>Credenciales BD:</strong></p>
            <ul>
                <li>Usuario: <code>alumno</code></li>
                <li>Contraseña: <code>alumno</code></li>
                <li>Base de datos: <code>testdb</code></li>
            </ul>
        </div>
    </div>
</body>
</html>
