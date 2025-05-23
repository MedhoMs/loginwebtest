import { translationSignIn } from '../translate/translationSignIn.js'

let currentLanguage = localStorage.getItem('language') || 'spanish'

function changeLanguage(lang) {
    currentLanguage = lang
    localStorage.setItem('language', lang) // Guardar en localStorage
    updateTexts()
}

function updateTexts() {
    const lang = currentLanguage
    const t = translationSignIn[lang]

    document.getElementById('window_title').textContent = t.window_title
    document.getElementById('nav_title').textContent = t.nav_title
    document.getElementById('spanish_selector').textContent = t.spanish_selector
    document.getElementById('english_selector').textContent = t.english_selector
    document.getElementById('title').textContent = t.title
    document.getElementById('form_email').textContent = t.form_email
    document.getElementById('form_password').textContent = t.form_password
    document.getElementById('submit').textContent = t.submit
    document.getElementById('opposite_option').textContent = t.opposite_option

    const inputs = document.querySelectorAll('input')
        inputs[1].placeholder = t.email_placeholder
        inputs[2].placeholder = t.password_placeholder
    }

// Ejecutar al cargar
document.addEventListener('DOMContentLoaded', () => {
    updateTexts()

    document.getElementById('spanish_flag')?.addEventListener('click', () => changeLanguage('spanish'))
    document.getElementById('english_flag')?.addEventListener('click', () => changeLanguage('english'))
})
