<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mi_portafolio";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $conn->real_escape_string(trim($_POST['titulo']));
    $imagen = $conn->real_escape_string(trim($_POST['imagen']));
    $descripcion = $conn->real_escape_string(trim($_POST['descripcion']));

    // Insertar datos en la tabla
    $sql = "INSERT INTO proyectos (nombre, imagen, descripcion) VALUES ('$titulo', '$imagen', '$descripcion')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success text-center'>Nuevo proyecto añadido con éxito.</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}

// Consultar la base de datos
$sql = "SELECT * FROM proyectos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portafolio Personal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Jose Materano</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre Mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#add_project">Añadir Proyecto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="text-center p-5 bg-light">
        <div class="container">
            <h1>Bienvenido a mi Portafolio</h1>
            <p>¡Hola! Soy Jose Materano, Administrador de Sistemas Informáticos en Red.</p>
            <img src="./images/yo.png" alt="Foto de Jose Materano" class="img-fluid rounded-circle mb-3" style="max-width: 200px;">
        </div>
    </section>

    <section id="about" class="p-5">
        <div class="container">
            <h2 class="text-center">Sobre Mí</h2>
            <p>He estudiado Administración de Sistemas Informáticos en Red en el <strong>CIP Cuatrovientos</strong>, además poseo un grado en Derecho en la <strong>Universidad Rafael Belloso Chacín</strong>. Me apasiona crear soluciones digitales que impacten positivamente en las personas.</p>
            <p>Mis intereses incluyen la resolución de problemas informáticos, inteligencia artificial, y el diseño e implantación de redes informáticas.</p>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/foclVfXqN8I?si=W4Dpud7BMIuOfOAt" title="Video de presentación" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section id="portfolio" class="p-5 bg-light">
        <div class="container">
            <h2 class="text-center">Portafolio</h2>
            <div class="row g-4">
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <img src="<?php echo htmlspecialchars($row['imagen']); ?>" class="card-img-top img-fluid w-100" alt="Proyecto" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($row['nombre']); ?></h5>
                                    <p class="card-text"><?php echo htmlspecialchars($row['descripcion']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No hay proyectos disponibles.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="add_project" class="p-5">
        <div class="container">
            <h2 class="text-center">Añadir Proyecto al Portafolio</h2>
            <form action="index.php" method="POST">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Nombre del Proyecto</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del Proyecto" required>
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">URL de la Imagen</label>
                    <input type="text" class="form-control" id="imagen" name="imagen" placeholder="URL de la Imagen" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción del Proyecto</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripción del Proyecto" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Añadir Proyecto</button>
            </form>
        </div>
    </section>

    <footer class="bg-dark text-white text-center p-4">
        <div class="container">
            <img src="./images/icon.ico" alt="Logo de Jose Materano" class="img-fluid rounded-circle mb-2" style="max-width: 80px;">
            <p>Contacto: +34 747 403 856 | mate.estudios@gmail.com</p>
            <div>
                <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" class="text-white"><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
            <p class="mt-3">&copy; 2024 Jose Materano - Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        $(document).ready(function () {
            $('a.nav-link').on("click", function (e) {
                e.preventDefault();
                var target = $(this).attr('href');
                $('html, body').animate({
                    scrollTop: $(target).offset().top - 50
                }, 1000);
            });

            $(window).scroll(function () {
                if ($(this).scrollTop() >= 500) {
                    $('.scroll-to-top').fadeIn();
                } else {
                    $('.scroll-to-top').fadeOut();
                }
            });

            $('.scroll-to-top').click(function () {
                $('html, body').animate({ scrollTop: 0 }, 800);
                return false;
            });
        });
    </script>

</body>

</html>
