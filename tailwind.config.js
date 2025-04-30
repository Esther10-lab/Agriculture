/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#2A5D3C',
                'primary-light': '#E8F5E9',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}