/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./index.html",
      "./src/**/*.{vue,js,ts,jsx,tsx}",
    ],
    theme: {
      extend: {
        fontFamily: {
          coolvetica: ['Coolvetica', 'sans-serif'],
          sansation: ['Sansation', 'sans-serif'], 
        },
      },
    },
    plugins: [],
  }
