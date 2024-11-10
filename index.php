<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web Personal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: Cabin;
            src: url(./Fuentes/Cabin.ttf);
        }

        @font-face {
            font-family: September;
            src: url(./Fuentes/Autumn\ in\ September.ttf);
        }

        body {
            margin-top: auto;
            background: linear-gradient(rgba(7, 0, 0, 0.5), rgba(5, 20, 79, 0.5)), url('./Imagenes/findo.jpg');
            background-size: cover;
            position: relative;
        }

        body::before {
            position: absolute;
            background-color: rgba(9, 13, 40, 0.981);
            z-index: 1;
        }

        .imagen {
            border-radius: 2px;
            transition: 3s;
            box-shadow: 3px 3px 3px rgb(175, 174, 237);
        }

        #imagen1, #imagen2 {
            transition: 3s;
            width: 100%;
            height: 3s;
            background-color: rgb(30, 17, 79);
            color: antiquewhite;
        }

        #imagen1:hover, #imagen2:hover {
            width: 105%;
        }

        #proyec {
            text-align: center;
            justify-content: center;
        }

        #menu {
            background-image: url(./Imagenes/estrellas2.gif);
            color: aliceblue;
            background-size: cover;
        }

        footer {
            background-image: url(./Imagenes/estrellas2.gif);
            background-size: cover;
        }

        #sobre-mi h1 {
            font-family: September;
            font-size: 80px;
        }

        #sobre-mi p {
            font-size: 20px;
            text-indent: 2em;
        }

        #contenido {
            background-color: rgb(207, 216, 244);
            border-radius: 5px;
            padding: 20px;
            width: 1200px;
            margin-top: auto;
        }

        .contactos {
            justify-content: left;
            font-family: Cabin;
        }

        .formContacto {
            width: 50%;
        }

        #formu {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-left: 0;
        }

        .fuente {
            font-family: September;
            font-size: 50px;
        }
    </style>
</head>

<body>
    <!-- Header y Menú -->
     <!-- barra vieja 
    <nav class="navbar navbar-expand-lg navbar-dark" id="menu">
        <div class="container-fluid">
            <a class="navbar-brand">Mi Página</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre-mi">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#proyectos">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex" onsubmit="return false;">
                    <input class="form-control me-2" type="search" placeholder="Buscar" id="buscador" aria-label="Search">
                    <button class="btn btn-outline-success" type="button" id="btnBuscar">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    -->
        <nav class="navbar navbar-expand-lg navbar-dark" id="menu">
         <div class="container-fluid">
            <a class="navbar-brand">Mi Página</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="#sobre-mi">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#proyectos">Proyectos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#contac">Contacto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#agregar-proyecto">Ingresar Nuevo Proyecto</a>
                    </li>
                </ul>
            <form class="d-flex" onsubmit="return false;">
                <input class="form-control me-2" type="search" placeholder="Buscar" id="buscador" aria-label="Search">
                <button class="btn btn-outline-success" type="button" id="btnBuscar">Buscar</button>
            </form>
        </div>
        </div>
    </nav>



    <main class="container mt-5" id="contenido">
        <!--  Sobre mí -->
        <section id="sobre-mi">
            <h1> Sobre Mí </h1>
            <p>¡Hola! Soy Gabriela y este es mi espacio personal, tengo 30 años y soy Venezolana
                actualmente estoy
                estudiando Administración en Sistemas Informáticos en Red, en el Centro Concertado Cuatrovientos.
                Voy por el segundo año de curso y pronto estaré en mis prácticas.</p>
            <p>En el año 2015 me gradué de Licenciada en Contaduría Pública en Caracas - Venezuela, trabajé en varias
                empresas como asistente contable, sin embargo, fue allí donde me di cuenta, que me gustaba más la
                Administración de sistemas informáticos, gracias a unos compañeros de trabajo en ese entonces...
            </p>
            <p>Al momento, no tome decisión alguna, si no al pasar los años, crecer, migrar y empezar de cero en otro
                país, me motivaron a comenzar una nueva meta, la cual era estudiar algo relacionado con la informática.
            </p>

            <p>Dentro del Centro he conocido grandes personas, tengo unos buenos compañeros de clase y amigos... En el
                primer año hemos trabajado en un proyecto del IEEE bastante conocido. ¡Ya te contaré más adelante!
            </p>

            <p> Entro otras cosas, he descubierto que mis intereses personales son el deporte de natación, jugar
                voleibol, caminar en el monte, ir al cine, comer, viajar, conocer lugares nuevos, y por último pero no
                menos importante estar con las
                personas que quiero y con mis mascotas .
            </p>

        </section>

        <!-- Sección de Proyectos Dinámicos -->
        <section id="proyectos" class="mt-5">
            <h2 class="fuente">Actividades y Proyectos</h2>
            <div class="row" id="proyec">
                <?php include 'proyectos.php'; ?>
            </div>
        </section>

        <!-- Página de contacto -->
        <section class="contactos" class="mt-5" id="contac">
            <h2 class="fuente">Aquí puedes contactar conmigo</h2>
            <form class="formContacto" class="formu">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Introduce tu nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>

        <section id="agregar-proyecto" class="mt-5 contactos">
    <h2 class="fuente">Agregar Nuevo Proyecto</h2>
    <form action="index.php" method="POST" enctype="multipart/form-data" class="formContacto formu">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título del Proyecto</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen del Proyecto</label>
            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <input type="text" class="form-control" id="categoria" name="categoria" required>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Proyecto</button>
    </form>
</section>

    </section>




    </main>
    

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; Gabriela Mendoza - 2024
    </footer>

    <!-- Script personalizado -->
    <script>
        // Buscador de proyectos
        document.getElementById('btnBuscar').addEventListener('click', function () {
            const query = document.getElementById('buscador').value.toLowerCase();
            document.querySelectorAll('.col-md-4').forEach(function (proyecto) {
                const proyectoText = proyecto.getAttribute('data-proyecto').toLowerCase();
                proyecto.style.display = proyectoText.includes(query) ? '' : 'none';
            });
        });

        // Validación de formulario de contacto
        document.getElementById('formContacto').addEventListener('submit', function (event) {
            const email = document.getElementById('email').value;
            const regex = /\S+@\S+\.\S+/;
            if (!regex.test(email)) {
                event.preventDefault();
                alert("Por favor, introduce un correo válido.");
            } else {
                alert("Gracias!!! Su mensaje ha sido enviado.");
            }
        });
    </script>

    <?php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
        echo '<div class="alert alert-success text-center" role="alert">Proyecto agregado exitosamente.</div>';
        }
    ?>


    <!-- jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
