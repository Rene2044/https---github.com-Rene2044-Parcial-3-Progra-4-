<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyCast | Inicie Sesion</title>
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

        /* Contenedor principal de la tarjeta con Glassmorphism */
        .login-card {
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
            margin-top: 128px; /* mt-32 para evitar colisión con la Navbar */
            margin-bottom: 40px;
        }

        /* Panel Izquierdo (Imagen/Ilustración) */
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

        /* Panel Derecho (Formulario) */
        .right-panel {
            flex: 1;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Estilos de Texto del Panel Derecho */
        h1 {
            font-size: 26px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 30px;
            text-align: center;
        }

        /* Estilos del Formulario */
        .input-group {
            margin-bottom: 25px;
        }

        .input-label {
            font-size: 14px;
            font-weight: 600;
            color: #475569;
            margin-bottom: 8px;
            display: block;
        }

        .input-field {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            font-size: 15px;
            color: #1e293b;
            outline: none;
            background-color: #f8fafc;
            transition: all 0.3s;
        }

        .input-field:focus {
            border-color: #38bdf8;
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.2);
        }

        .forgot-password {
            text-align: right;
            margin-top: -15px;
            margin-bottom: 30px;
        }

        .forgot-link {
            font-size: 13px;
            color: #0284c7;
            text-decoration: none;
            font-weight: 500;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        /* Botón Login */
        .login-button {
            width: 100%;
            padding: 14px;
            background-color: #ff643c;
            color: white;
            border: none;
            border-radius: 14px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 15px;
        }

        .login-button:hover {
            background-color: #ff4c24;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(255, 100, 60, 0.3);
        }

        .login-button:active {
            transform: translateY(0);
        }

        /* Ajustes secundarios para botones variantes si se requiere */
        .login-button-alt {
            background-color: transparent;
            border: 2px solid #ff643c;
            color: #ff643c;
        }

        .login-button-alt:hover {
            background-color: rgba(255, 100, 60, 0.05);
            color: #ff4c24;
            border-color: #ff4c24;
            box-shadow: none;
        }

    </style>
</head>
<body class="weather-bg flex flex-col items-center min-h-screen p-0 m-0 w-full overflow-x-hidden">
    <header id="navbar-app" class="w-full"></header>

    <div class="login-card">
        <div class="left-panel flex items-center justify-center p-8">
            <div class="illustration-container flex items-center justify-center w-full h-full">

                <img src="/assets/montaña1.png"
                     alt="Ilustración SkyCast"
                     class="w-full h-full max-w-64 max-h-64 object-contain drop-shadow-2xl transition-transform duration-500 hover:scale-105">

            </div>
        </div>

        <div class="right-panel">
            <div>
                <h1>Inicia sesión en tu cuenta</h1>

                <form>
                    <div class="input-group">
                        <label for="username" class="input-label">Usuario</label>
                        <input type="text" id="username" class="input-field" placeholder="Ingrese su usuario">
                    </div>

                    <div class="input-group">
                        <label for="password" class="input-label">Contraseña</label>
                        <input type="password" id="password" class="input-field" placeholder="••••••••">
                    </div>

                    <div class="forgot-password">
                        <a href="#" class="forgot-link">Restablece tu contraseña</a>
                    </div>

                    <button type="submit" class="login-button">Inicie Sesion</button>
                    <button type="button" class="login-button login-button-alt">Registrarse</button>
                </form>
            </div>
        </div>
    </div>

    <footer id="footer-app" class="w-full"></footer>

    <script type="module" src="js/Navbar.js"></script>
    <script type="module" src="js/Footer.js"></script>
</body>
</html>
