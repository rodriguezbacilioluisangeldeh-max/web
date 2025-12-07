<?php
// ----------------- CONEXIÓN -----------------
$conexion = new mysqli("localhost", "root", "", "usuarios_db");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// ----------------- BUSCAR -----------------
$buscar = "";
if (isset($_GET['buscar']) && $_GET['buscar'] != "") {
    $buscar = $conexion->real_escape_string($_GET['buscar']);
    $sql = "SELECT * FROM usuarios WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%'";
} else {
    $sql = "SELECT * FROM usuarios";
}
$resultado = $conexion->query($sql);

// ----------------- ELIMINAR -----------------
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    $conexion->query("DELETE FROM usuarios WHERE id = $id");
    header("Location: eliminacion.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Eliminación</title>

<style>
/* ------------------------  TUS ESTILOS  ------------------------- */

body{
    background:#c6aae6;
    font-family: Arial;
}

.container{
    width:90%;
    margin:auto;
    background:white;
    border:2px solid black;
}

header{
    text-align:center;
    margin-bottom:10px;
}

header img{
    width:0%;
}

nav{
    text-align:center;
    background:#d4c8d8;
    padding:10px;
    margin-top:-20px;
}

nav ul{
    list-style:none;
    display:flex;
    justify-content:center;
    gap:20px;
}

nav ul li a{
    text-decoration:none;
    color:black;
    font-weight:bold;
}

section{
    display:flex;
    padding:20px;
}

.izquierda{
    width:30%;
    border-right:2px solid black;
    padding-right:10px;
}

.derecha{
    width:70%;
    padding-left:20px;
}

/* ------- TABLA DENTRO DEL DISEÑO -------- */
.tabla-box{
    width:95%;
    margin:auto;
    margin-bottom:30px;
    padding:20px;
    border:2px solid black;
    background:white;
}

table{
    width:100%;
    border-collapse: collapse;
    font-size:14px;
}

th, td{
    border:1px solid black;
    padding:8px;
    text-align:center;
}

th{
    background:#efe8ff;
    font-weight:bold;
}

a.eliminar{
    color:red;
    font-weight:bold;
}

.buscador{
    margin-bottom:15px;
    text-align:center;
}

.buscador input{
    width:250px;
    padding:8px;
    border:1px solid black;
}

.buscador button{
    padding:8px 15px;
    font-weight:bold;
    cursor:pointer;
}

footer{
    margin-top:40px;
    padding:20px;
    background:#e6e6e6;
    border-top:2px solid black;
    text-align:center;
}
</style>

</head>
<body>

<div class="container">

    <header>
        <img src="img/imgcabe.jpg">
        <h2>MI EMPRESA</h2>
    </header>

    <nav>
        <ul class="menu">
            <li><a href="indexoriginal.php">INICIO</a></li>
            <li><a href="altas.php">altas</a></li>
            <li><a href="bajas.php">bajas</a></li>
            <li><a href="consultas.php">consultas</a></li>
            <li><a href="cambios.php">cambios</a></li>
        </ul>
    </nav>

    <h2 style="text-align:center;">Mi Área Principal</h2>

    <section>

        <!-- ----------------- LADO IZQUIERDO ----------------- -->
        <div class="izquierda">
            <h3>INDICE DE TEMAS DEL LENGUAJE DE PROGRAMACION PHP</h3>
            <ol>
                <li><a>Variables y comentarios</a></li>
                <li><a>Flujo de Ejecucion</a></li>
                <li><a>Funciones</a></li>
                <li><a>Arrays</a></li>
                <li><a>Eliminación</a></li>
            </ol>
        </div>

        <!-- ----------------- ÁREA DERECHA ----------------- -->
        <div class="derecha">

            <h2 style="text-align:center;">Gestión de Usuarios</h2>

            <div class="tabla-box">

                <div class="buscador">
                    <form method="GET" action="eliminacion.php">
                        <input type="text" name="buscar" placeholder="Buscar por nombre o apellido" value="<?= $buscar ?>">
                        <button type="submit">Buscar</button>
                    </form>
                </div>

                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Eliminar</th>
                    </tr>

                    <?php while ($fila = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $fila['id'] ?></td>
                        <td><?= $fila['nombre'] ?></td>
                        <td><?= $fila['apellido'] ?></td>
                        <td><?= $fila['edad'] ?></td>
                        <td><?= $fila['sexo'] ?></td>
                        <td>
                            <a class="eliminar" href="eliminacion.php?eliminar=<?= $fila['id'] ?>"
                               onclick="return confirm('¿Seguro que deseas eliminar este usuario?');">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                    <?php } ?>

                </table>

            </div>

        </div>

    </section>

    <footer>
        <h3>Contáctanos</h3>
        <p>&copy; 2025 Mi Sitio Web. Todos los derechos reservados.</p>
        <p>Email: info@misitio.com</p>
        <p>Teléfono: +52 734 164 1715</p>
    </footer>

</div>

</body>
</html>
