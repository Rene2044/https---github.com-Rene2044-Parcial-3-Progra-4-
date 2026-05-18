// js/Aside.js

const asideHTML = `
<aside class="w-full lg:w-80 space-y-6">
    <div class="bg-white/10 backdrop-blur-xl rounded-[32px] p-6 border border-white/20 shadow-xl">
        <h3 class="text-white font-semibold text-lg mb-4 flex items-center gap-2">
            <span class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></span>
            Detalles del Día
        </h3>
        
        <div class="grid grid-cols-1 gap-4">
            <div class="flex items-center justify-between p-3 bg-white/5 rounded-2xl border border-white/5">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-500/20 rounded-lg text-blue-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                    </div>
                    <span class="text-white/70 text-sm">Calidad Aire</span>
                </div>
                <span class="text-white font-medium">Buena</span>
            </div>

            <div class="flex items-center justify-between p-3 bg-white/5 rounded-2xl border border-white/5">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-yellow-500/20 rounded-lg text-yellow-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m11.314 11.314l.707.707M12 8a4 4 0 100 8 4 4 0 000-8z"></path></svg>
                    </div>
                    <span class="text-white/70 text-sm">Índice UV</span>
                </div>
                <span class="text-white font-medium">4 (Medio)</span>
            </div>
        </div>
    </div>

    <div class="bg-slate-900/40 backdrop-blur-xl rounded-[32px] p-6 border border-white/10 shadow-xl">
        <h3 class="text-white/80 font-medium text-sm uppercase tracking-widest mb-4">Búsquedas Recientes</h3>
        <ul class="space-y-3">
            <li class="flex items-center justify-between text-white/60 hover:text-white cursor-pointer group transition">
                <span class="text-sm">San Miguel, SV</span>
                <span class="text-xs bg-white/10 px-2 py-1 rounded-md group-hover:bg-yellow-400 group-hover:text-slate-900 transition">32°C</span>
            </li>
            <li class="flex items-center justify-between text-white/60 hover:text-white cursor-pointer group transition">
                <span class="text-sm">San Salvador, SV</span>
                <span class="text-xs bg-white/10 px-2 py-1 rounded-md group-hover:bg-yellow-400 group-hover:text-slate-900 transition">28°C</span>
            </li>
        </ul>
    </div>
</aside>
`;

document.addEventListener('DOMContentLoaded', () => {
    const asideContainer = document.getElementById('aside-app');
    if (asideContainer) {
        asideContainer.innerHTML = asideHTML;
    }
});