<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyCast | Aviso de Privacidad</title>
    <link rel="icon" type="image/png" href="assets/Cap.png">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght=300;400;600&family=Poppins:wght=300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="js/Estilos.css">

    <style>
        /* Estilos Globales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
        }

        /* Contenedor principal con Glassmorphism idéntico al Login */
        .legal-card {
            width: 900px;
            max-width: 90%;
            height: 550px;
            display: flex;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 32px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            margin-top: 128px; /* mt-32 para evitar la Navbar */
            margin-bottom: 40px;
        }

        /* Panel Izquierdo con Ilustración */
        .left-panel {
            flex: 1;
            background-color: transparent;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            border-right: 1px solid rgba(255, 255, 255, 0.2);
        }

        .illustration-container {
            width: 250px;
            height: 250px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Panel Derecho con scroll interno para los términos */
        .right-panel {
            flex: 1;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 45px 40px;
            display: flex;
            flex-direction: column;
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 5px;
            text-align: center;
        }

        .subtitle {
            font-size: 13px;
            color: #64748b;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Contenedor de Texto con Scrollbar Personalizada */
        .terms-content {
            flex-grow: 1;
            overflow-y: auto;
            padding-right: 15px;
            margin-bottom: 20px;
            font-size: 14px;
            line-height: 1.6;
            color: #334155;
            text-align: justify;
        }

        .terms-content h3 {
            font-size: 15px;
            font-weight: 600;
            color: #0f172a;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        /* Diseño de la barra de desplazamiento */
        .terms-content::-webkit-scrollbar {
            width: 6px;
        }

        .terms-content::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 10px;
        }

        .terms-content::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        .terms-content::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Botón de regreso */
        .accept-button {
            width: 100%;
            padding: 12px;
            background-color: #ff643c;
            color: white;
            border: none;
            border-radius: 14px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s;
            text-decoration: none;
            display: block;
        }

        .accept-button:hover {
            background-color: #ff4c24;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(255, 100, 60, 0.3);
        }
    </style>
</head>
<body class="weather-bg flex flex-col items-center min-h-screen p-0 m-0 w-full overflow-x-hidden">
    <header id="navbar-app" class="w-full"></header>

   <div class="legal-card">
    <div class="left-panel flex items-center justify-center p-8">
        <div class="illustration-container flex items-center justify-center w-full h-full">

            <img src="/assets/montaña1.png"
                 alt="Ilustración SkyCast"
                 class="w-full h-full max-w-[260px] max-h-[260px] object-contain drop-shadow-2xl transition-transform duration-500 hover:scale-105">

        </div>
    </div>

        <div class="right-panel">
            <h1>Aviso de Privacidad</h1>
            <p class="subtitle">Última actualización: Mayo 2026</p>

            <div class="terms-content">
                <p>En <strong>SkyCast</strong>, nos tomamos muy en serio la seguridad y protección de tus datos personales. Este documento detalla cómo recopilamos, usamos y resguardamos tu información cuando interactúas con nuestra plataforma de consulta climática.</p>

                <h3>1. Información que Recopilamos</h3>
                <p>Para brindarte un pronóstico preciso en tiempo real, requerimos acceder a los datos de tu <strong>Ubicación Actual</strong> mediante la API de geolocalización de tu navegador. Adicionalmente, guardamos el historial de tus ciudades buscadas de forma estrictamente local para agilizar tus próximas interacciones.</p>

                <h3>2. Uso de la Información</h3>
                <p>Toda la información obtenida se procesa únicamente con el fin de consultar las APIs meteorológicas aliadas y estructurar los paneles gráficos de la aplicación. No comercializamos, transferimos ni exponemos tus datos a agencias de publicidad de terceros.</p>

                <h3>3. Cookies y Almacenamiento Local</h3>
                <p>Utilizamos el almacenamiento local (LocalStorage) y cookies de sesión esenciales para retener tus preferencias visuales (como la última ciudad consultada) y asegurar que tu sesión permanezca activa sin interrupciones molestas.</p>

                <h3>4. Seguridad de tus Datos</h3>
                <p>Implementamos capas tecnológicas seguras y canales de comunicación cifrados para evitar cualquier alteración, pérdida o acceso no autorizado a los datos de tu cuenta durante los procesos de Login y Registro.</p>

                <h3>5. Modificaciones del Aviso</h3>
                <p>SkyCast se reserva el derecho de modificar o refrescar este Aviso de Privacidad en cualquier momento para acoplarse a novedades legislativas o mejoras técnicas del sistema. Te recomendamos revisarlo frecuentemente.</p>
            </div>

            <a href="/" class="accept-button">Entendido y Volver</a>
        </div>
    </div>

    <footer id="footer-app" class="w-full"></footer>

    <script type="module" src="js/Navbar.js"></script>
    <script type="module" src="js/Footer.js"></script>
</body>
</html>
