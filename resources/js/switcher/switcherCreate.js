import { translationCreate } from '../translate/translationCreate'

let currentLanguage = localStorage.getItem('language') || 'spanish'

function changeLanguage(lang) {
    currentLanguage = lang
    localStorage.setItem('language', lang) // Guardar en localStorage
    updateTexts()
}

function updateTexts() {
    const lang = currentLanguage
    const t = translationCreate[lang]

    document.getElementById('window_title').textContent = t.window_title
    document.getElementById('nav_title').textContent = t.nav_title
    document.getElementById('spanish_selector').textContent = t.spanish_selector
    document.getElementById('english_selector').textContent = t.english_selector
    document.getElementById('title').textContent = t.title
    document.getElementById('form_email').textContent = t.form_email
    document.getElementById('form_password').textContent = t.form_password
    document.getElementById('continue').textContent = t.continue
    document.getElementById('opposite_option').textContent = t.opposite_option
    document.getElementById('second_title').textContent = t.second_title
    document.getElementById('second_form_username').textContent = t.second_form_username
    document.getElementById('submit').textContent = t.submit

    const inputs = document.querySelectorAll('input')
        inputs[1].placeholder = t.email_placeholder
        inputs[2].placeholder = t.password_placeholder
        inputs[3].placeholder = t.username_placeholder
    }

// Ejecutar al cargar
document.addEventListener('DOMContentLoaded', () => {
    updateTexts()

    document.getElementById('spanish_flag')?.addEventListener('click', () => changeLanguage('spanish'))
    document.getElementById('english_flag')?.addEventListener('click', () => changeLanguage('english'))
})
