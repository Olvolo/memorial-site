/** @type {import('tailwindcss').Config} */
module.exports = {
    variants: {
        extend: {
            rotate: ['group-hover'],
        }
    },
    content: [
        "./resources/**/*.{blade.php,js,vue,jsx,ts}",
    ],
    theme: {
        extend:{
            textIndent: {
                '0.5': '0.5rem',
                '1.5': '1.5rem',
            },
            padding: {
                '0.125': '0.125rem',
                '0.0625': '0.0625rem',
            },
            maxWidth: {
                '1200': '1200px',
                '800': '800px',
                '600': '600px',
            },
            fontSize: {
                'xs': '0.625rem', // Дополнительный размер текста для очень узких экранов
            },
            fontFamily: {
                sans: ['Roboto', 'sans-serif'],
            },
            backgroundImage: {
                'paper-texture': "url('/backgrounds/paper_texture.jpg')",
            },
            colors: {
                'mint': '#edffdb',
                'pastel_blue': '#c2fcfc',
                'yellow_bright': '#fcfc4e',
                'yellowish': '#fffa96',
                'coral': '#f57771',
                'blue_semi': '#5962e3',
                'green_neon': '#2aad48',
                'red-700': '#b91c1c',
                'green-400': '#4ade80',
                'gray-400': '#9ca3af',
                'pink-400': '#f472b6',
                'blue-400': '#60a5fa',
                'yellow-300': '#fde047',
                'fuchsia-400': '#e879f9',
                'fuchsia-200': '#f5d0fe',
                beige: {
                    100: '#F5F5DC',
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
    // Опционально: Настройки для продакшена
    corePlugins: {
        preflight: true, // Включает базовые стили (reset)
    },
};
