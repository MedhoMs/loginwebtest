import { translationSidebar } from "../translate/translationSidebar"

let currentLanguage = localStorage.getItem('language') || 'spanish'

function changeLanguage(lang) {
    currentLanguage = lang
    localStorage.setItem('language', lang) // Guardar en localStorage
    updateTexts()
}

function updateTexts() {
    const lang = currentLanguage
    const t = translationSidebar[lang]

    document.getElementById('perfil').textContent = t.perfil
    document.getElementById('inicio').textContent = t.inicio
    document.getElementById('ordenadores').textContent = t.ordenadores
    document.getElementById('portatiles').textContent = t.portatiles
    document.getElementById('moviles').textContent = t.moviles
    document.getElementById('electrodomesticos').textContent = t.electrodomesticos
    document.getElementById('cerrar').textContent = t.cerrar
    }

// Ejecutar al cargar
document.addEventListener('DOMContentLoaded', () => {
    updateTexts()

    document.getElementById('spanish_flag')?.addEventListener('click', () => changeLanguage('spanish'))
    document.getElementById('english_flag')?.addEventListener('click', () => changeLanguage('english'))
})
