/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./index.html", // If you have an index.html
      "./src/**/*.{js,jsx,ts,tsx}", // For React projects in the src folder
      "./components/**/*.{js,jsx,ts,tsx}", // For React components
      "./templates/**/*.html", // For HTML templates
      "./*.{html,js}", // For HTML and JS files in the project root
    ],
    theme: {
      extend: {
        
      },
    },
    plugins: [],
  }