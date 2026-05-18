// js/main.js
import { getWeatherByCity, getWeatherByCoords } from './weatherService.js';

// Selección de elementos del HTML
const cityInput = document.getElementById('city-input');
const searchBtn = document.getElementById('search-btn');
const cityName = document.getElementById('city-name');
const temp = document.getElementById('temperature');
const desc = document.getElementById('weather-desc');
const humidity = document.getElementById('humidity');
const wind = document.getElementById('wind-speed');
const visibility = document.getElementById('visibility'); // Añadido
const icon = document.getElementById('weather-icon');
const currentDate = document.getElementById('current-date'); // Añadido

// Función para formatear la fecha actual (Ej: "Lunes, 15 de Abril")
function updateDate() {
    const now = new Date();
    const options = { weekday: 'long', day: 'numeric', month: 'long' };
    currentDate.textContent = now.toLocaleDateString('es-ES', options);
}

// Función que actualiza la cara de la aplicación
function updateUI(data) {
    if (!data || data.cod === "404") {
        alert("Ciudad no encontrada. Por favor, revisa el nombre.");
        return;
    }

    // Actualizamos los textos
    cityName.textContent = `${data.name}, ${data.sys.country}`;
    temp.textContent = `${Math.round(data.main.temp)}°`;
    desc.textContent = data.weather[0].description;
    humidity.textContent = `${data.main.humidity}%`;
    
    // Convertimos metros a km/h (OpenWeather devuelve m/s por defecto)
    const windKmH = Math.round(data.wind.speed * 3.6);
    wind.textContent = `${windKmH} km/h`;
    
    // Visibilidad en KM
    const visKm = (data.visibility / 1000).toFixed(1);
    visibility.textContent = `${visKm} km`;
    
    // Icono dinámico
    const iconCode = data.weather[0].icon;
    icon.src = `https://openweathermap.org/img/wn/${iconCode}@4x.png`;
    
    // Actualizar la fecha cada vez que buscamos
    updateDate();
}

// Lógica de búsqueda (Refactorizada para no repetir código)
async function handleSearch() {
    const city = cityInput.value.trim();
    if (city) {
        const data = await getWeatherByCity(city);
        updateUI(data);
    }
}

// Escuchar el botón de búsqueda
searchBtn.addEventListener('click', handleSearch);

// Escuchar cuando el usuario presiona "Enter"
cityInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
        handleSearch();
    }
});

// Lógica para Ubicación Actual (Navbar y Móvil)
document.addEventListener('click', async (e) => {
    if (e.target.closest('#geo-btn') || e.target.closest('#geo-btn-mobile')) {
        if (navigator.geolocation) {
            cityName.textContent = "Ubicando...";
            navigator.geolocation.getCurrentPosition(async (pos) => {
                const data = await getWeatherByCoords(pos.coords.latitude, pos.coords.longitude);
                updateUI(data);
            }, (error) => {
                alert("Error al obtener ubicación. Asegúrate de dar permisos.");
                cityName.textContent = "San Salvador"; // Default si falla
            });
        }
    }
});

// Cargar por defecto al abrir la página
window.addEventListener('load', async () => {
    updateDate();
    const data = await getWeatherByCity("San Salvador");
    updateUI(data);
});