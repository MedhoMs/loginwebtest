import { translationCreate } from './translationCreate.js'

let currentLanguage = 'spanish'

function changeLanguage(lang) {
  currentLanguage = lang
  updateTexts()
}

function updateTexts() {
  const lang = currentLanguage
  document.getElementById('spanish_selector').textContent = translationCreate[lang].spanish_selector
  document.getElementById('english_selector').textContent = translationCreate[lang].english_selector
  document.getElementById('title').textContent = translationCreate[lang].title
  document.getElementById('form_name').textContent = translationCreate[lang].form_name
  document.getElementById('form_password').textContent = translationCreate[lang].form_password
  document.getElementById('submit').textContent = translationCreate[lang].submit
  document.getElementById('opposite_option').textContent = translationCreate[lang].opposite_option

  const inputs = document.querySelectorAll('input')
    inputs[1].placeholder = translationCreate[lang].username_placeholder
    inputs[2].placeholder = translationCreate[lang].password_placeholder
}

// Ejecutar al cargar
document.addEventListener('DOMContentLoaded', () => {
  updateTexts()

  document.getElementById('spanish_flag')?.addEventListener('click', () => changeLanguage('spanish'))
  document.getElementById('english_flag')?.addEventListener('click', () => changeLanguage('english'))
})
