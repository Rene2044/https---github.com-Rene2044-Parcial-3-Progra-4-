// js/weatherService.js

// Tu clave de API de OpenWeatherMap
const API_KEY = '45cab392604e02800d2615a3ef4e8a20'; 
const BASE_URL = 'https://api.openweathermap.org/data/2.5/';

/**
 * Función para obtener el clima actual por ciudad
 */
export async function getWeatherByCity(city) {
    try {
        const response = await fetch(`${BASE_URL}weather?q=${city}&appid=${API_KEY}&units=metric&lang=es`);
        if (!response.ok) throw new Error('Ciudad no encontrada');
        return await response.json();
    } catch (error) {
        console.error("Error al obtener el clima:", error);
        throw error;
    }
}

/**
 * Función para obtener el pronóstico de 5 días
 */
export async function getForecast(city) {
    try {
        const response = await fetch(`${BASE_URL}forecast?q=${city}&appid=${API_KEY}&units=metric&lang=es`);
        if (!response.ok) throw new Error('Error en el pronóstico');
        return await response.json();
    } catch (error) {
        console.error("Error al obtener el pronóstico:", error);
        throw error;
    }
}