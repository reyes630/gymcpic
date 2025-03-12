<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="/css/style_admin_layout.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-content">
                <div class="logo">
                    <!-- <img src="" alt="Gym CPIC Logo" class="logo-img"> -->
                    <span class="logo-text">Gym CPIC</span>
                </div>
                <nav class="menu">
                    <ul>
                        <li><a href=""><i class="fas fa-building"></i><span>Centros</span></a></li>
                        <li><a href=""><i class="fas fa-dumbbell"></i><span>Programas</span></a></li>
                        <li><a href=""><i class="fas fa-user-tag"></i><span>Roles</span></a></li>
                        <li><a href=""><i class="fas fa-running"></i><span>Actividades</span></a></li>
                        <li><a href=""><i class="fas fa-sign-in-alt"></i><span>Registro Ingreso</span></a></li>
                        <li><a href=""><i class="fas fa-tasks"></i><span>Control Programa</span></a></li>
                        <li><a href=""><i class="fas fa-users-cog"></i><span>Tipo Usuario</span></a></li>
                        <li><a href=""><i class="fas fa-users"></i><span>Usuarios</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="main-content">
            <header class="header">
                <div class="header-container">
                    <button class="menu-toggle" id="menu-toggle"><i class="fas fa-bars">...</i></button>
                    <h1><?php echo $title; ?></h1>
                    <div class="search-container">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar..." class="search-input">
                    </div>
                    <div class="header-icons">
                        <button id="theme-toggle" class="theme-toggle">
                            <i class="fas fa-sun light-icon"></i>
                            <i class="fas fa-moon dark-icon"></i>
                        </button>
                    </div>
                </div>
            </header>
            <div class="data-container">
                <div class="content">
                    <?php include_once $content; ?>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menú hamburguesa
            const menuToggle = document.getElementById('menu-toggle');
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.querySelector('.main-content');

            // Comprobar si el menú debe estar colapsado basado en el almacenamiento local
            const menuState = localStorage.getItem('menuState');
            if (menuState === 'collapsed' || window.innerWidth <= 768) {
                sidebar.classList.add('collapsed');
                mainContent.classList.add('expanded');
            }

            menuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('expanded');

                // Guardar el estado del menú
                if (sidebar.classList.contains('collapsed')) {
                    localStorage.setItem('menuState', 'collapsed');
                } else {
                    localStorage.setItem('menuState', 'expanded');
                }
            });

            // Cerrar menú al hacer clic fuera
            document.addEventListener('click', function(event) {
                // Verificar si el menú está expandido y el clic no fue en el sidebar ni en el botón de menú
                if (!sidebar.contains(event.target) &&
                    !menuToggle.contains(event.target) &&
                    !sidebar.classList.contains('collapsed')) {

                    sidebar.classList.add('collapsed');
                    mainContent.classList.add('expanded');
                    localStorage.setItem('menuState', 'collapsed');
                }
            });

            // Alternar tema claro/oscuro
            const themeToggle = document.getElementById('theme-toggle');
            const htmlElement = document.documentElement;

            themeToggle.addEventListener('click', function() {
                if (htmlElement.getAttribute('data-theme') === 'light') {
                    htmlElement.setAttribute('data-theme', 'dark');
                    localStorage.setItem('theme', 'dark');
                } else {
                    htmlElement.setAttribute('data-theme', 'light');
                    localStorage.setItem('theme', 'light');
                }
            });

            // Cargar tema guardado
            const savedTheme = localStorage.getItem('theme') || 'light';
            htmlElement.setAttribute('data-theme', savedTheme);

            // Mantener consistencia en el tamaño de los iconos
            function alignIconSizes() {
                const logoHeight = document.querySelector('.logo-img').offsetHeight;
                document.documentElement.style.setProperty('--icon-size', logoHeight + 'px');
            }

            // Ejecutar alineación inicial
            window.addEventListener('load', alignIconSizes);

            // Actualizar tamaños cuando cambia la ventana
            window.addEventListener('resize', function() {
                alignIconSizes();

                if (window.innerWidth <= 768 && !sidebar.classList.contains('collapsed')) {
                    sidebar.classList.add('collapsed');
                    mainContent.classList.add('expanded');
                    localStorage.setItem('menuState', 'collapsed');
                }
            });
        });
    </script>
</body>

</html>