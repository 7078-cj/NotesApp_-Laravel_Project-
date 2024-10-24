/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        helvetica: ['Helvetica', 'Arial', 'sans-serif'],
        roboto: ['Roboto', 'sans-serif'],
        comicSans: ['"Comic Sans MS"', 'cursive', 'sans-serif'], 
        centuryGothic: ['Century Gothic', 'Arial', 'sans-serif'],
        arial: ['Arial', 'sans-serif'],
        robotoMono: ['"Roboto Mono"', 'monospace'],
      },
      keyframes: {
        'slide-in-bottom': {
          '0%': { transform: 'translateY(100%)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
      },
      animation: {
        'slide-in-bottom': 'slide-in-bottom 0.5s ease-out forwards',
      },
    },
  },
  plugins: [],
}

