import { translationPortatil } from "../translate/translationPortatil"

let currentLanguage = localStorage.getItem('language') || 'spanish'

function changeLanguage(lang) {
    currentLanguage = lang
    localStorage.setItem('language', lang) // Guardar en localStorage
    updateTexts()
}

function updateTexts() {
    const lang = currentLanguage
    const t = translationPortatil[lang]

    document.getElementById('window_title').textContent = t.window_title
    document.getElementById('nav_title').textContent = t.nav_title
    document.getElementById('spanish_selector').textContent = t.spanish_selector
    document.getElementById('english_selector').textContent = t.english_selector
    }

// Ejecutar al cargar
document.addEventListener('DOMContentLoaded', () => {
    updateTexts()

    document.getElementById('spanish_flag')?.addEventListener('click', () => changeLanguage('spanish'))
    document.getElementById('english_flag')?.addEventListener('click', () => changeLanguage('english'))
})
