<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyCast | Tu Clima al Instante</title>
    
    <link rel="icon" type="image/png" href="assets/Cap.png">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="js/Estilos.css">
</head>

<body class="weather-bg flex flex-col items-center min-h-screen p-0 m-0 w-full overflow-x-hidden font-['Inter']">

    <header id="navbar-app" class="w-full"></header>

    <div class="flex flex-col lg:flex-row items-start justify-center gap-8 w-full max-w-7xl mx-auto mt-32 px-6 flex-grow">
        
        <main class="w-full lg:max-w-xl bg-white/20 backdrop-blur-lg rounded-[32px] shadow-2xl p-8 border border-white/30 text-white transition-all duration-500">
            
            <div class="relative mb-8">
                <input type="text" id="city-input" placeholder="Buscar ciudad..." 
                    class="w-full bg-white/10 border border-white/10 rounded-2xl py-4 px-6 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-yellow-400/50 transition-all">
                <button class="absolute right-4 top-3.5 hover:scale-110 active:scale-95 transition text-white/70 hover:text-yellow-400" id="search-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>

            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold tracking-tight mb-1" id="city-name">Cargando...</h1>
                <p class="text-sm uppercase tracking-[0.2em] opacity-60 font-medium" id="current-date">--</p>
                
                <div class="flex justify-center items-center my-8">
                    <img src="https://openweathermap.org/img/wn/10d@4x.png" alt="Icono Clima" class="w-36 drop-shadow-2xl" id="weather-icon">
                    <span class="text-8xl font-light tracking-tighter ml-4" id="temperature">--°</span>
                </div>
                
                <p class="text-2xl font-medium capitalize" id="weather-desc">--</p>
            </div>

            <div class="grid grid-cols-3 gap-4 text-center bg-black/20 backdrop-blur-md rounded-3xl p-6 mb-10 border border-white/5">
                <div class="flex flex-col">
                    <p class="text-[10px] uppercase tracking-widest opacity-50 mb-2">Humedad</p>
                    <p class="font-bold text-xl" id="humidity">--</p>
                </div>
                <div class="flex flex-col border-x border-white/10">
                    <p class="text-[10px] uppercase tracking-widest opacity-50 mb-2">Viento</p>
                    <p class="font-bold text-xl" id="wind-speed">--</p>
                </div>
                <div class="flex flex-col">
                    <p class="text-[10px] uppercase tracking-widest opacity-50 mb-2">Visibilidad</p>
                    <p class="font-bold text-xl" id="visibility">--</p>
                </div>
            </div>

            <section>
                <h3 class="text-xs font-bold uppercase tracking-[0.2em] mb-6 opacity-60">Pronóstico 5 días</h3>
                <div class="flex justify-between overflow-x-auto gap-4 pb-2 custom-scrollbar" id="forecast-container">
                    </div>
            </section>
        </main>

        <div id="aside-app" class="w-full lg:w-80"></div>

    </div>

    <footer id="footer-app" class="w-full"></footer>

    <script type="module" src="js/Navbar.js"></script>
    <script type="module" src="js/Aside.js"></script>
    <script type="module" src="js/weatherService.js"></script>
    <script type="module" src="js/Footer.js"></script>
    <script type="module" src="js/main.js"></script>

</body>
</html>