/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './index.html',
    './src/**/*.{js,jsx,ts,tsx}'
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#eef6ff',
          100: '#d8ecff',
          500: '#1d74e7',
          600: '#0f5bc1',
          700: '#0b4694'
        }
      }
    }
  },
  plugins: []
};
