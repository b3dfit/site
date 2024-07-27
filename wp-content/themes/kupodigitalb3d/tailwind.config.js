/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './node_modules/preline/dist/*.js',
    './*.{php,html}',                     // nivel theme
    './../../plugins/*/*.{php,html}',     // nivel plugins
    './parts/*.{php,html}',
    './../../../app/run/*.{php,html,js}',
  ],
  darkMode: 'class',
  theme: {

    fontFamily: {
      'sans': [
        'Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji']
    }


  }, 

  plugins: [
    require('tailwindcss'),
    require('autoprefixer'),
    require('@tailwindcss/forms'),
    require('preline/plugin')
  ]
}