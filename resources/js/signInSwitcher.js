import { translationSignIn } from './translationSignIn.js'

let currentLanguage = 'spanish'

function changeLanguage(lang) {
  currentLanguage = lang
  updateTexts()
}

function updateTexts() {
  const lang = currentLanguage
  document.getElementById('spanish_selector').textContent = translationSignIn[lang].spanish_selector
  document.getElementById('english_selector').textContent = translationSignIn[lang].english_selector
  document.getElementById('title').textContent = translationSignIn[lang].title
  document.getElementById('form_name').textContent = translationSignIn[lang].form_name
  document.getElementById('form_password').textContent = translationSignIn[lang].form_password
  document.getElementById('submit').textContent = translationSignIn[lang].submit
  document.getElementById('opposite_option').textContent = translationSignIn[lang].opposite_option

  const inputs = document.querySelectorAll('input')
    inputs[1].placeholder = translationSignIn[lang].username_placeholder
    inputs[2].placeholder = translationSignIn[lang].password_placeholder
}

// Ejecutar al cargar
document.addEventListener('DOMContentLoaded', () => {
  updateTexts()

  document.getElementById('spanish_flag')?.addEventListener('click', () => changeLanguage('spanish'))
  document.getElementById('english_flag')?.addEventListener('click', () => changeLanguage('english'))
})
